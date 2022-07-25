<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Collection;
use Storage;
use App\Models\Diploma;

class PDFController extends Controller
{

    public function dateToString($date)
    {
        $day = date('d', strtotime($date));
        $month = date('F', strtotime($date));
        $year = date('o', strtotime($date));
        return $day . " de " . __($month) . " del " . $year;
    }
    public static function welcomeFormat(Request $request)
    {
        $unidades = json_decode($request['unidades']);
        $sesiones = json_decode($request['sesiones']);

        $diplomado = strtoupper($request['diplomado']);

        $teacher =  $request['docente'];
        $mes = date('F');
        $date = date('d') . " de " . __($mes) . " del " . date('o');
        $fechaInicio = $request['fechaInicio'];
        $fechaTermino = $request['fechaTermino'];

        $pdf = PDF::loadView('PDF.oficios.bienvenida_docente', compact('sesiones', 'unidades', 'teacher', 'date', 'diplomado', 'fechaInicio', 'fechaTermino'));
        return $pdf->setPaper('letter')->stream('prueba.pdf');
    }

    public function generateMassProof(Request $request)
    {
        $names = $request['name'];
        $names = explode("\r\n", $names);
        $course = $request['course'];
        $date = $request['date'];
        $hours = "3";
        // dd();

        foreach ($names as $name) {
            $route = $this->storageConstancia($name, $course, $date, $hours);
            dump($route);
        }
    }
    public function streamProof(Request $request)
    {
        $name = $request['name'];
        $course = $request['course'];
        $date = $request['date'];
        $hours = "3";

        $nombreImagen = "storage/img/constancia/Constancia 1.jpg";
        $imagenBase64 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen));
        $pdf = PDF::loadView('PDF.constancias.curso', compact('name', 'course', 'date', 'hours', 'imagenBase64'));
        $pdf->setPaper('letter', 'landscape');
        $route = '/public/pdf/generated/' . $name . '.pdf';
        return $pdf->download($name . '.pdf');
    }
    public function generateProof(Request $request)
    {
        $name = $request['name'];

        $date = $request['date'];
        $hours = "3";
        $course = strtoupper($request['course']);

        $nombreImagen = "storage/img/constancia/Constancia 1.jpg";
        $imagenBase64 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen));
        $pdf = PDF::loadView('PDF.constancias.curso', compact('name', 'course', 'date', 'hours', 'imagenBase64'));
        $pdf->setPaper('letter', 'landscape');
        $route = '/public/pdf/generated/' . $name . '.pdf';
        return $pdf->download($name . '.pdf');
    }
    public function storageConstancia($name, $course, $date, $hours)
    {
        $nombreImagen = "storage/img/constancia/Constancia 1.jpg";
        $imagenBase64 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen));
        $pdf = PDF::loadView('PDF.constancias.curso', compact('name', 'course', 'date', 'hours', 'imagenBase64'));
        $pdf->setPaper('letter', 'landscape');
        $route = '/public/pdf/generated/' . $name . '.pdf';
        Storage::put($route, $pdf->output());
        return $route;
        // code...
    }
    public function createCertificate()
    {
        $diplomados = Diploma::where('status_id', 2)->get();


        return view('PDF.views.create-certificate', compact('diplomados'));
    }
    public function createDiploma()
    {
        $diplomados = Diploma::where('status_id', 2)->get();

        return view('PDF.views.create-diploma', compact('diplomados'));
        // code...
    }
    public function generateCertificate(Request $request)
    {

        if ($request->hasFile('photo')) {
            // code...
            $foto = "data:image/png;base64," . base64_encode(file_get_contents($request->file('photo')));
        } else {
            $foto = "";
        }



        $diplomado = Diploma::find($request->diplomado);

        $folio = $request->folio;
        $name = $request->name;
        $title = $diplomado->title;
        $fechaEmision = $this->dateToString($request->dateEmit);
        $date =  $this->dateToString($request->date);
        $hours = $diplomado->getTotalHours();
        $credits = $diplomado->getTotalCredits();
        $cedula = $diplomado->revoe->key;

        $title = strtoupper($title);
        $name = strtoupper($name);

        $pagina1 = "data:image/png;base64," . base64_encode(file_get_contents('storage/img/certificate/certificate_bg_1.jpeg'));
        $pagina2 = "data:image/png;base64," . base64_encode(file_get_contents('storage/img/certificate/certificate_bg_2.jpeg'));

        $pdf = PDF::loadView('PDF.certificates.certificate', compact('fechaEmision', 'folio', 'diplomado', 'name', 'title', 'date', 'cedula', 'date', 'hours', 'credits', 'pagina1', 'pagina2', 'foto'));
        return $pdf->setPaper('letter')->download($name . '.pdf');
    }
    public function generateDiploma(Request $request)
    {
        if ($request->hasFile('photo')) {
            // code...
            $foto = "data:image/png;base64," . base64_encode(file_get_contents($request->file('photo')));
        } else {
            $foto = "";
        }



        $diplomado = Diploma::find($request->diplomado);

        $name = $request->name;
        $title = $diplomado->title;

        $date =  $this->dateToString($request->date);;
        $hours = $diplomado->getTotalHours();
        $credits = $diplomado->getTotalCredits();
        $cedula = $diplomado->revoe->key;
        // dump($diplomado);
        // dump($diplomado->date);
        // dd($diplomado->revoe);
        // dd($diplomado->date);

        $title = strtoupper($title);
        $name = strtoupper($name);
        // $date = strtoupper($date);
        $pagina1 = "data:image/png;base64," . base64_encode(file_get_contents('storage/img/diploma/diploma-bg-1.jpg'));
        $pagina2 = "data:image/png;base64," . base64_encode(file_get_contents('storage/img/diploma/diploma-bg-2.jpg'));

        $pdf = PDF::loadView('PDF.diplomas.diplomado', compact('diplomado', 'name', 'title', 'date', 'cedula', 'date', 'hours', 'credits', 'pagina1', 'pagina2', 'foto'));
        return $pdf->setPaper('letter')->stream($name . '.pdf');
    }

    public function createWelcome()
    {
        return view('PDF.views.create-welcome-doc');
        // code...
    }
    public function createConstancia()
    {
        return view('PDF.views.create-constancia');
    }
    public function createMassConstancia()
    {
        return view('PDF.views.create-mass-constancia');
    }
}
