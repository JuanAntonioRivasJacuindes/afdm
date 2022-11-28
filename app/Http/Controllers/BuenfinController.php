<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diploma;
use App\Models\Course;
use App\Models\BuenfinLeads;
use GuzzleHttp\Promise\Create;
use App\Models\BuenfinGiftcourses;
class BuenfinController extends Controller
{
    //
    public function index(){
        $diplomas = Diploma::where('status_id', 1)->get();
        $courses = Course::all();
        $diplomas_data_buenfin = array('diplomados' => [
                [
                    'id' => '0',
                    'title' => 'ODONTOLOGÍA FORENSE',
                    'prices_buenfin_unidad_mes'=> [
                        'inscripcion' => '$249.00',
                        'unidad-mes' =>'$1099.00',
                        'caracteriticas'=>'1 CURSO DE REGALO (TITULO: ANALISIS DEL LENGUAJE CORPORAL EN LA INVESTIGACION CORPORAL ) NO SE ENVIA GRABACION LA VERAN EN LA PLATAFORMA',
                        'plus' => ''
                    ],
                    'price_buenfin_pagounico_1'=>[
                        'inscripcion' => '$5999.00',
                        'unidad-mes' =>'BENEFICIOS A  3  MESES SIN INTERESES PAGANDO CON TARJETA DE CREDITO',
                        'caracteriticas'=>'COMBO ESTUDIANTIL  INCLUYE: INSCRIPCION
                        PAGO TOTAL DEL DIPLOMADO
                        CURSOS GRATIS
                        50% INCRIPCION EN SU PROXIMO DIPLOMADO
                        DE DESCUENTO EN LAS MENSUALIDADES DE SU PROXIMO DIPLOMADO
                        6 MESES DE ACCESO EN NUESTRA PLATAFORMA "AFOIMET" A LAS GRABACIONES UNA VEZ CONCLUIDO EL DIPLOMADO
                        DIPLOMA DIGITAL CON VALOR CURRICULAR',
                        'plus' => '10% DE DESCUENTO EN TU CERTIFICACION (LA CERTIFICACION ES OPCIONAL)'
                    ],
                    'price_buenfin_pagounico_2'=>[
                        'inscripcion' => '$8,899.00',
                        'unidad-mes' =>'BENEFICIO 3 Y 6  MESES SIN INTERESES CON TARJETA DE CREDITO',
                        'caracteriticas'=>'COMBO ESTUDIANTIL  INCLUYE:
                        INSCRIPCION
                        PAGO TOTAL DEL DIPLOMADO
                        3 CURSOS GRATIS
                        50% INCRIPCION EN SU PROXIMO DIPLOMADO
                        10% DE DESCUENTO EN LAS MENSUALIDADES DE SU PROXIMO DIPLOMADO
                        6 MESES DE ACCESO EN NUESTRA PLATAFORMA "AFOIMET" A LAS GRABACIONES UNA VEZ CONCLUIDO EL DIPLOMADO
                        DIPLOMA DIGITAL CON VALOR CURRICULAR',
                        'plus' => 'INCLUYE TU CERTIFICACION CON VALOR DE $2,700 MAS 25% DE DESCUENTO EN TU APOSTILLADO PARA VALOR CURRICULAR INTERNACIONAL EN MAS DE 120 PAISES'
                    ],
                    'assesor'=>'Leonor',
                    'phone_number'=>'520824098',
                    'img_buen_fin' => asset('storage/img/buenfin2022/BUEN-FIN-2022-ODONTOLOGIA-.jpg')
                ],
                [
                    'id' => '1',
                    'title' => 'MEDICINA FORENSE',
                    'prices_buenfin_unidad_mes'=> [
                        'inscripcion' => '$249.00',
                        'unidad-mes' =>'$1099.00',
                        'caracteriticas'=>'1 CURSO DE REGALO (TITULO: ANALISIS DEL LENGUAJE CORPORAL EN LA INVESTIGACION CORPORAL ) NO SE ENVIA GRABACION LA VERAN EN LA PLATAFORMA',
                        'plus' => ''
                    ],
                    'price_buenfin_pagounico_1'=>[
                        'inscripcion' => '$5999.00',
                        'unidad-mes' =>'BENEFICIOS A  3  MESES SIN INTERESES PAGANDO CON TARJETA DE CREDITO',
                        'caracteriticas'=>'COMBO ESTUDIANTIL  INCLUYE: INSCRIPCION
                        PAGO TOTAL DEL DIPLOMADO
                        CURSOS GRATIS
                        50% INCRIPCION EN SU PROXIMO DIPLOMADO
                        DE DESCUENTO EN LAS MENSUALIDADES DE SU PROXIMO DIPLOMADO
                        6 MESES DE ACCESO EN NUESTRA PLATAFORMA "AFOIMET" A LAS GRABACIONES UNA VEZ CONCLUIDO EL DIPLOMADO
                        DIPLOMA DIGITAL CON VALOR CURRICULAR',
                        'plus' => ''
                    ],
                    'price_buenfin_pagounico_2'=>[
                        'inscripcion' => '$8,899.00',
                        'unidad-mes' =>'BENEFICIO 3 Y 6  MESES SIN INTERESES CON TARJETA DE CREDITO',
                        'caracteriticas'=>'COMBO ESTUDIANTIL  INCLUYE:
                        INSCRIPCION
                        PAGO TOTAL DEL DIPLOMADO
                        3 CURSOS GRATIS
                        50% INCRIPCION EN SU PROXIMO DIPLOMADO
                        10% DE DESCUENTO EN LAS MENSUALIDADES DE SU PROXIMO DIPLOMADO
                        6 MESES DE ACCESO EN NUESTRA PLATAFORMA "AFOIMET" A LAS GRABACIONES UNA VEZ CONCLUIDO EL DIPLOMADO
                        DIPLOMA DIGITAL CON VALOR CURRICULAR',
                        'plus' => 'INCLUYE TU CERTIFICACION CON VALOR DE $2,700 MAS 25% DE DESCUENTO EN TU APOSTILLADO PARA VALOR CURRICULAR INTERNACIONAL EN MAS DE 120 PAISES'
                    ],
                    'assesor'=>'Norma',
                    'phone_number'=>'5572975229',
                    'img_buen_fin' => asset('storage/img/buenfin2022/BUEN-FIN-2022-MEDICINA-.jpg')
                ],
                [
                    'id' => '2',
                    'title' => 'ANTROPOLOGÍA FORENSE',
                    'prices_buenfin_unidad_mes'=> [
                        'inscripcion' => '$249.00',
                        'unidad-mes' =>'$1099.00',
                        'caracteriticas'=>'1 CURSO DE REGALO (TITULO: ANALISIS DEL LENGUAJE CORPORAL EN LA INVESTIGACION CORPORAL ) NO SE ENVIA GRABACION LA VERAN EN LA PLATAFORMA',
                        'plus' => ''
                    ],
                    'price_buenfin_pagounico_1'=>[
                        'inscripcion' => '$5999.00',
                        'unidad-mes' =>'BENEFICIOS A  3  MESES SIN INTERESES PAGANDO CON TARJETA DE CREDITO',
                        'caracteriticas'=>'COMBO ESTUDIANTIL  INCLUYE: INSCRIPCION
                        PAGO TOTAL DEL DIPLOMADO
                        CURSOS GRATIS
                        50% INCRIPCION EN SU PROXIMO DIPLOMADO
                        DE DESCUENTO EN LAS MENSUALIDADES DE SU PROXIMO DIPLOMADO
                        6 MESES DE ACCESO EN NUESTRA PLATAFORMA "AFOIMET" A LAS GRABACIONES UNA VEZ CONCLUIDO EL DIPLOMADO
                        DIPLOMA DIGITAL CON VALOR CURRICULAR',
                        'plus' => ''
                    ],
                    'price_buenfin_pagounico_2'=>[
                        'inscripcion' => '$8,899.00',
                        'unidad-mes' =>'BENEFICIO 3 Y 6  MESES SIN INTERESES CON TARJETA DE CREDITO',
                        'caracteriticas'=>'COMBO ESTUDIANTIL  INCLUYE:
                        INSCRIPCION
                        PAGO TOTAL DEL DIPLOMADO
                        3 CURSOS GRATIS
                        50% INCRIPCION EN SU PROXIMO DIPLOMADO
                        10% DE DESCUENTO EN LAS MENSUALIDADES DE SU PROXIMO DIPLOMADO
                        6 MESES DE ACCESO EN NUESTRA PLATAFORMA "AFOIMET" A LAS GRABACIONES UNA VEZ CONCLUIDO EL DIPLOMADO
                        DIPLOMA DIGITAL CON VALOR CURRICULAR',
                        'plus' => 'INCLUYE TU CERTIFICACION CON VALOR DE $2,700 MAS 25% DE DESCUENTO EN TU APOSTILLADO PARA VALOR CURRICULAR INTERNACIONAL EN MAS DE 120 PAISES'
                    ],
                    'assesor'=>'Leonor',
                    'phone_number'=>'5520824098',
                    'img_buen_fin' => asset('storage/img/buenfin2022/BUEN-FIN-2022-ANTROPOLOGIA.jpg')
                ],
                [
                    'id' => '3',
                    'title' => 'TOXICOLOGÍA CLÍNICO FORENSE',
                    'prices_buenfin_unidad_mes'=> [
                        'inscripcion' => '$249.00',
                        'unidad-mes' =>'$999.00',
                        'caracteriticas'=>'CURSO PARA TOXICOLOGIA 1 CURSO DE REGALO (TITULO: TOXICOBOTANICA) NO SE ENVIA GRABACION LA VERAN EN LA PLATAFORMA',
                        'plus' => 'CURSO PARA PROTOCOLO1 CURSO DE REGALO (TITULO: FUNSION DE LA CRIMINOLOGIA EN EL SISTEMA DE JUSTICIA PENAL) NO SE ENVIA GRABACION LA VERAN EN LA PLATAFORMA'
                    ],
                    'price_buenfin_pagounico_1'=>[
                        'inscripcion' => '$5999.00',
                        'unidad-mes' =>'BENEFICIOS A  3  MESES SIN INTERESES PAGANDO CON TARJETA DE CREDITO',
                        'caracteriticas'=>'COMBO ESTUDIANTIL  INCLUYE:
                        INSCRIPCION
                        PAGO TOTAL DEL DIPLOMADO
                        2 CURSOS GRATIS
                        50% INCRIPCION EN SU PROXIMO DIPLOMADO
                        10% DE DESCUENTO EN LAS MENSUALIDADES DE SU PROXIMO DIPLOMADO
                        6 MESES DE ACCESO EN NUESTRA PLATAFORMA "AFOIMET" A LAS GRABACIONES UNA VEZ CONCLUIDO EL DIPLOMADO
                        DIPLOMA DIGITAL CON VALOR CURRICULAR',
                        'plus' => '"10% DE DESCUENTO EN TU CERTIFICACION (LA CERTIFICACION ES OPCIONAL)'
                    ],
                    'price_buenfin_pagounico_2'=>[
                        'inscripcion' => '$8,899.00',
                        'unidad-mes' =>'BENEFICIO 3 Y 6  MESES SIN INTERESES CON TARJETA DE CREDITO',
                        'caracteriticas'=>'COMBO ESTUDIANTIL  INCLUYE:
                        INSCRIPCION
                        PAGO TOTAL DEL DIPLOMADO
                        3 CURSOS GRATIS
                        50% INCRIPCION EN SU PROXIMO DIPLOMADO
                        10% DE DESCUENTO EN LAS MENSUALIDADES DE SU PROXIMO DIPLOMADO
                        6 MESES DE ACCESO EN NUESTRA PLATAFORMA "AFOIMET" A LAS GRABACIONES UNA VEZ CONCLUIDO EL DIPLOMADO
                        DIPLOMA DIGITAL CON VALOR CURRICULAR',
                        'plus' => 'INCLUYE TU CERTIFICACION CON VALOR DE $2,700 MAS
                        25% DE DESCUENTO EN TU APOSTILLADO PARA VALOR CURRICULAR INTERNACIONAL EN MAS DE 120 PAISES'
                    ],
                    'assesor'=>'Enrique',
                    'phone_number'=>'5562106436',
                    'img_buen_fin' => asset('storage/img/buenfin2022/BUEN-FIN-2022-TOXICOLOGIA.jpg')
                ],
                [
                    'id' => '4',
                    'title' => 'PROTOCOLO DE ESTAMBUL-ANÁLISIS DE TORTURA',
                    'prices_buenfin_unidad_mes'=> [
                        'inscripcion' => '$249.00',
                        'unidad-mes' =>'1099.00',
                        'caracteriticas'=>'1 CURSO DE REGALO (TITULO: ANALISIS DEL LENGUAJE CORPORAL EN LA INVESTIGACION CORPORAL ) NO SE ENVIA GRABACION LA VERAN EN LA PLATAFORMA',
                        'plus' => ''
                    ],
                    'price_buenfin_pagounico_1'=>[
                        'inscripcion' => '$5999.00',
                        'unidad-mes' =>'BENEFICIOS A  3  MESES SIN INTERESES PAGANDO CON TARJETA DE CREDITO',
                        'caracteriticas'=>'COMBO ESTUDIANTIL  INCLUYE:
                        INSCRIPCION
                        PAGO TOTAL DEL DIPLOMADO
                        2 CURSOS GRATIS
                        50% INCRIPCION EN SU PROXIMO DIPLOMADO
                        10% DE DESCUENTO EN LAS MENSUALIDADES DE SU PROXIMO DIPLOMADO
                        6 MESES DE ACCESO EN NUESTRA PLATAFORMA "AFOIMET" A LAS GRABACIONES UNA VEZ CONCLUIDO EL DIPLOMADO
                        DIPLOMA DIGITAL CON VALOR CURRICULAR',
                        'plus' => '"10% DE DESCUENTO EN TU CERTIFICACION (LA CERTIFICACION ES OPCIONAL)'
                    ],
                    'price_buenfin_pagounico_2'=>[
                        'inscripcion' => '$8,899.00',
                        'unidad-mes' =>'BENEFICIO 3 Y 6  MESES SIN INTERESES CON TARJETA DE CREDITO',
                        'caracteriticas'=>'COMBO ESTUDIANTIL  INCLUYE:
                        INSCRIPCION
                        PAGO TOTAL DEL DIPLOMADO
                        3 CURSOS GRATIS
                        50% INCRIPCION EN SU PROXIMO DIPLOMADO
                        10% DE DESCUENTO EN LAS MENSUALIDADES DE SU PROXIMO DIPLOMADO
                        6 MESES DE ACCESO EN NUESTRA PLATAFORMA "AFOIMET" A LAS GRABACIONES UNA VEZ CONCLUIDO EL DIPLOMADO
                        DIPLOMA DIGITAL CON VALOR CURRICULAR',
                        'plus' => 'INCLUYE TU CERTIFICACION CON VALOR DE $2,700 MAS
                        25% DE DESCUENTO EN TU APOSTILLADO PARA VALOR CURRICULAR INTERNACIONAL EN MAS DE 120 PAISES'
                    ],
                    'assesor'=>'Leonor',
                    'phone_number'=>'5520824098',
                    'img_buen_fin' => asset('storage/img/buenfin2022/BUEN-FIN-2022-PROTOCOLO.jpg')
                ],
                [
                    'id' => '5',
                    'title' => 'PSICOLOGÍA JURÍDICA Y SU APLICACIÓN PRÁCTICA EN JUICIO ORAL',
                    'prices_buenfin_unidad_mes'=> [
                        'inscripcion' => '$249.00',
                        'unidad-mes' =>'$999.00',
                        'caracteriticas'=>'1 CURSO DE REGALO (TITULO: ANALISIS DEL LENGUAJE CORPORAL EN LA INVESTIGACION CORPORAL ) NO SE ENVIA GRABACION LA VERAN EN LA PLATAFORMA',
                        'plus' => ''
                    ],
                    'price_buenfin_pagounico_1'=>[
                        'inscripcion' => '$5999.00',
                        'unidad-mes' =>'BENEFICIOS A  3  MESES SIN INTERESES PAGANDO CON TARJETA DE CREDITO',
                        'caracteriticas'=>'COMBO ESTUDIANTIL  INCLUYE:
                        INSCRIPCION
                        PAGO TOTAL DEL DIPLOMADO
                        2 CURSOS GRATIS
                        50% INCRIPCION EN SU PROXIMO DIPLOMADO
                        10% DE DESCUENTO EN LAS MENSUALIDADES DE SU PROXIMO DIPLOMADO
                        6 MESES DE ACCESO EN NUESTRA PLATAFORMA "AFOIMET" A LAS GRABACIONES UNA VEZ CONCLUIDO EL DIPLOMADO
                        DIPLOMA DIGITAL CON VALOR CURRICULAR',
                        'plus' => '"10% DE DESCUENTO EN TU CERTIFICACION (LA CERTIFICACION ES OPCIONAL)'
                    ],
                    'price_buenfin_pagounico_2'=>[
                        'inscripcion' => '$8,899.00',
                        'unidad-mes' =>'BENEFICIO 3 Y 6  MESES SIN INTERESES CON TARJETA DE CREDITO',
                        'caracteriticas'=>'COMBO ESTUDIANTIL  INCLUYE:
                        INSCRIPCION
                        PAGO TOTAL DEL DIPLOMADO
                        3 CURSOS GRATIS
                        50% INCRIPCION EN SU PROXIMO DIPLOMADO
                        10% DE DESCUENTO EN LAS MENSUALIDADES DE SU PROXIMO DIPLOMADO
                        6 MESES DE ACCESO EN NUESTRA PLATAFORMA "AFOIMET" A LAS GRABACIONES UNA VEZ CONCLUIDO EL DIPLOMADO
                        DIPLOMA DIGITAL CON VALOR CURRICULAR',
                        'plus' => 'INCLUYE TU CERTIFICACION CON VALOR DE $2,700 MAS
                        25% DE DESCUENTO EN TU APOSTILLADO PARA VALOR CURRICULAR INTERNACIONAL EN MAS DE 120 PAISES'
                    ],
                    'assesor'=>'Norma',
                    'phone_number'=>'5572975229',
                    'img_buen_fin' => asset('storage/img/buenfin2022/BUEN-FIN-2022-PSICOLOGIA.jpg')
                ]
        ]
        );
        return view('welcome-buenfin', compact('diplomas', 'courses', 'diplomas_data_buenfin'));
    }
    public function send_data(Request $request){
        //dd($request);
        BuenfinLeads::create([
            'diplomado'=>$request->diplomado,
            'fullnamelead'=>$request->full_name,
            'email'=>$request->email,
            'numberlead'=>$request->full_phone,
        ]);
        //session()->flash('message', 'Gracias, un asesor se pondrá en contacto contigo');
        return redirect()->back();
    }
    public function extra(Request $request){
        $bfgiftcourses = BuenfinGiftcourses::all();
        return view('watch.extra', compact('bfgiftcourses'));
    }
}
