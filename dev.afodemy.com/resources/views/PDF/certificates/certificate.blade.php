<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://www.dafontfree.net/embed/Y2VudHVyeS1nb3RoaWMtcmVndWxhciZkYXRhLzQwL2MvMTAxOTUwL0dPVEhJQy5UVEY" rel="stylesheet" type="text/css"/>
<link href="https://www.dafontfree.net/embed/Y2VudHVyeS1nb3RoaWMtYm9sZCZkYXRhLzQ3L2MvNTA3NjIvZ290aGljYi50dGY" rel="stylesheet" type="text/css"/>
<link href="https://www.dafontfree.net/embed/Z2FicmlvbGEtcmVndWxhciZkYXRhLzQ5L2cvMzc5NzUvR2FicmlvbGEudHRm" rel="stylesheet" type="text/css"/>
    <meta charset="utf-8">
  <style media="screen">
    @page {margin:0px;}
    body{
      font-family: 'century-gothic-regular', sans-serif;
      page-break-after:always;
      text-align: center;
      line-height: 11pt;;
      font-size: 11pt;
    }
    p {
      margin-bottom: 0%;
      margin-top:0%;
    }

    .text{
          margin-left: 18%;
          margin-right: 18%;
          text-align: justify;

        }
  .textx{
    letter-spacing: 2px;
    line-height:12pt;
    font-size: 12pt;
    margin-left: 12%;
    margin-right: 12%;
    text-align: justify;
  }
    .tablaCalif{
      font-style: bold;
      font-size: 8pt;
      /* background-color: #f4c3b2; */
      width: 83%;
      /* opacity: .5; */
      top:42%;
      position: absolute;
      height: 29%;
      left: 6%;

    }
    .cuadroFechas{
      border-radius: 6%;
      border: 1px;
      font-size: 12pt;
      text-align: left;
      position: absolute;
      padding: 2%;
      line-height: 10pt;


      border-style: solid;
    }
    table{
      text-align: center;
      width: 100%;
      height:  100%;


      height: 17%;
    }
    .tableHead{
      border-bottom:   black 3px solid;

    }
    tr{

        border-top: : black 3px solid;
    }
     td{
        border-top:  black 3px solid;
        border-left:  black 3px solid;

        height: 10%;
    }
    td.left{
      border-left:  black 0px solid;
      text-align: left;
      padding-left: 5%;

    }

    td.top{
      border-top:  black 0px solid;
      vertical-align: bottom;
      height: 10%;
    }
    th{


    }
    /* Espacio para la fotografia */
     .registro{
       text-align: left;
       /* background-color: #444; */
       /* opacity: .5; */


        font-size: 12pt;
        position: absolute;
        top: 28.1%;
        left: 27%;
        width: 50%;
        height: 15%;
        line-height: 91%;
        color: #000;
    }

    .rounded{
      /* clip-path:ellipse(30% 42% at 50% 50%); */


      /* -webkit-transform: scaleX(0.71); */
      max-width:100%;
    }
    .photo{
      position: absolute;
      /* width: 16.4rem; */
      width: 23.4%;

      top: 24%;
      left: 11.1%;


    }
    .se{
      position: absolute;
      /* background-color: black; */
      width: 23.4%;

      top: 57%;
      left: 5%;


    }
    .container{
      margin-top:  18%;

      width: 70%;
      text-align: center;
      right:0px;
      height: 100%;
      position: absolute;
    }
    .name{
      padding-top:  10pt;
      padding-bottom:   10pt;

      text-align: center;
      font-size: 26pt;
      line-height: 12pt;
      font-family: 'gabriola-regular', sans-serif;
    }



    .value{
      position:absolute;
      width: 100%;
      top: 68%;
      font-size: 10pt;

    }
    .date{
        text-align: right;
        margin-top: 12%;
        margin-right: 12%;
      font-size: 11pt;

    }
    .page1{

        background-image: url('{{$pagina1}}');
        background-repeat: no-repeat;
        background-position: center center;
        image-rendering: -webkit-optimize-contrast;
        background-size: cover;
        margin: 0px;
    }
    .page2{

      background-image: url('{{$pagina2}}');

        background-repeat: no-repeat;
        background-position: center center;
        image-rendering: -webkit-optimize-contrast;
        background-size: cover;
        margin: 0px;
    }


    </style>
  </head>
  <body class="page1">

    <div class="photo">
      <img class="rounded" width="100%" src="{{$foto}}" alt="">
    </div>
    <div class="se">
      <b>{{$cedula}}</b><br>
      <b>SE: A202007210854237796</b>
    </div>
    <div class="container">
      <p class="text">Con fundamento en el artículo 3 fracción VI de la Constitución Política de los Estados Unidos Mexicanos; Art. 14, fracción IV; Art. 54 y 55 de la ley General de Educación; Art. 13, fracción I, II, III y Art. 27, fracción XXV y XXVII de la Ley Orgánica del Poder Ejecutivo y con base a los lineamientos para el registro de cursos de capacitación y diplomados 2022 de la Subsecretaría de Educación Superior:</p>
      <p>Otorga el presente <b>Certificado</b> a:</p>
      <div class="textx">

      <p class="name">
        {{$name}}
      </p>
    </div>
      <p class="textx">
        En virtud de haber cumplido con los requisitos de ley correspondiente y acreditado los conocimientos, habilidades y destrezas conformes el plan y  programas de estudios vigentes del DIPLOMADO en:
      </p>

      <div class="textx">

      <p class="name">
        {{$diplomado->title}}
      </p>
    </div>
      <p class="textx">
        Con constancia de registro <b>{{$cedula}}</b> el cual tiene un valor curricular de {{$hours}}h. y {{$credits}} créditos universitarios reconocidos y avalados ante la Subsecretaría de Educación Superior y Secretaría de Innovación, Ciencia y Tecnología del Estado de Jalisco.
      </p>

    <div class="date" >
      Guadalajara, Jalisco, <span>{{$fechaEmision ?? 'No Definido'}}</span>
    </div>
      </div>
  </body>

  <body class="page2">
    <div style="position:absolute;top:24%;border-top: solid; padding-left:4%;padding-right: 4% ;left:7%;">
      Firma del interesado
    </div>
    <div style="position:absolute; right: 5%; padding: 3%; font-size:12pt">
      Folio: <b>{{$folio ?? 'No data'}}</b>
    </div>
    <div class="cuadroFechas" style="top:27%;left: 7%;">
      Fecha de inicio: <br>
      <b>{{$diplomado->getStartsString()}}</b>
      <hr>
      Fecha de Termino: <br>
      <b>{{$diplomado->getEndsString()}}</b>
    </div>
    <div class="cuadroFechas" style="text-transform: capitalize;width:40%; right:10%; ;top:20%; text-align:justify;">
      Registro y número: <b>{{$cedula}}</b> <br>
      <hr>
      Ante la dirección general de
educación superior, investigación y
posgrados de la secretaria de
innovación, ciencia y tecnología del
estado de Jalisco.<br>
      <hr>
      Fecha de registro: <b>{{$date}}</b>
    </div>

    <div class="tablaCalif">

      <table>
        <thead>
        <tr>
          <td class="left top" style="width:50%">ASIGNATURA</td>
          <td class="top">CLAVE</td>
          <td class="top">HORAS</td>
          <td class="top">CRÉDITOS</td>
          <td class="top">CALIFICACIÓN</td>
        </tr>
        </thead>
        <tbody>
          @foreach($diplomado->subjects as $subject)
            <tr>
              <td class="left">{{$subject->name ?? 'Sin Nombre'}}</td>
              <td>{{$subject->key ?? 'Sin Clave'}}</td>
              <td>{{$subject->hours ?? 'Sin Clave'}}</td>
              <td>{{$subject->credits ?? 'Sin Clave'}}</td>
              <td>10</td>


            </tr>
            @endforeach

            <tr>
              <td class="left" colspan="2"></td>

              <td>TOTAL DE HORAS <br>{{$hours}}
              </td>
              <td>TOTAL DE CRÉDITOS <br> {{$credits}} </td>
              <td>CALIFICACIÓN <br> FINAL <br> 10 </td>

            </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
