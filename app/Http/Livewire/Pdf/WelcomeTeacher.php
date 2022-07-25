<?php

namespace App\Http\Livewire\Pdf;

use Livewire\Component;
use App\Http\Controllers\PDFController;
use PDF;
use Illuminate\Support\Collection;
class WelcomeTeacher extends Component
{
    public $nombreDip;
    public $docente;
    public $fechaInicio;
    public $fechaTermino;
    public $sesiones;
    public $sesion;
    public $unidades;

    public $fechas;


    public $nombreUnidad;
    public $fecha;

    public function mount()
    {


      $this->unidades=new Collection;
      $this->sesiones=new Collection;

      $this->fechas=new Collection;

      // code...
    }
    public function render()
    {


        return view('livewire.pdf.welcome-teacher');
    }

    public function generateDoc()
    {


      $unidades->push($unidad);
      $teacher = 'LIC. OCTAVIO CASTILLO LUNA';
      $date = date('Y-m-d');
      $diplomado = 'ODONTOLOGÍA';

        $pdf = PDF::loadView('PDF.oficios.bienvenida_docente', compact('unidades','teacher','date','diplomado'));

        return $pdf->setPaper('letter')->save( 'pdf/order.pdf');

    }
    public function addUnidad()
    {
        $this->validate([
          'nombreUnidad'=>'required'
        ]);
        $fechas = $this->fechas;
        $unidad = new Collection;
        $unidad->push($this->nombreUnidad);
        $unidad->push($fechas);
        $this->unidades->push($unidad);
        $this->nombreUnidad="";
        $this->fechas=new Collection;

        // $this->vaciarFechas();
    }
    public function addFecha()
  {
    $strFecha = date("l",strtotime($this->fecha));
    $strFecha = __($strFecha);
    $this->fechas->push($strFecha.",".$this->fecha);
    }
    public function addSession()
    {
      $this->sesiones->push($this->sesion);
      $this->sesion="";
      // code...
    }
    public function deleteSesion($index)
    {

      $this->sesiones->pull($index);

    }
    public function deleteFecha($index)
    {

      $this->fechas->pull($index);

    }
}
