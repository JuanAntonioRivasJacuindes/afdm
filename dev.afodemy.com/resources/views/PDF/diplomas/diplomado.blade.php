<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://www.dafontfree.net/embed/Y2VudHVyeS1nb3RoaWMtcmVndWxhciZkYXRhLzQwL2MvMTAxOTUwL0dPVEhJQy5UVEY" rel="stylesheet" type="text/css"/>
<link href="https://www.dafontfree.net/embed/Y2VudHVyeS1nb3RoaWMtYm9sZCZkYXRhLzQ3L2MvNTA3NjIvZ290aGljYi50dGY" rel="stylesheet" type="text/css"/>
    <meta charset="utf-8">
  <style media="screen">
    @page {margin:0px;}
    body{
      page-break-after:always;
      text-align: center;
    }
    .tablaCalif{
      font-size: 8pt;
      /* background-color: #f4c3b2; */
      width: 83%;
      /* opacity: .5; */
      top:50%;
      position: absolute;
      height: 29%;
      left: 6%;
      font-family: 'century-gothic-regular', sans-serif;
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
      font-family: 'century-gothic-regular', sans-serif;

    }
    /* Espacio para la fotografia */
     .registro{
       text-align: left;
       /* background-color: #444; */
       /* opacity: .5; */
        font-family: 'century-gothic-regular', sans-serif;
        font-size: 12pt;
        position: absolute;
        top: 28.1%;
        width: 50%;
        height: 15%;
        left: 27%;
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
      width: 25.3%;
      top: 28.2%;
      left: 6.2%;


    }
    .container{
      width: 75%;
      text-align: center;
      right:0px;
      height: 100%;
      position: absolute;
    }
    .name{
      position:absolute;
      width: 100%;
      top: 42%;
      font-family: 'century-gothic-regular', sans-serif;
    }
    .title{
      /* background-color: #eee; */
      vertical-align: middle;
      letter-spacing: 3px;

      position:absolute;
      width: 70%;
      /* height: 8%; */
      margin-left:  15%;

      top: 59%;
      font-family: 'century-gothic-regular', sans-serif;
      font-size: 14pt;

    }
    .value{
      position:absolute;
      width: 100%;
      top: 68%;
      font-size: 10pt;
      font-family: 'century-gothic-bold', sans-serif;
    }
    .date{
      position:absolute;
      width: 100%;
      top: 78%;
      font-size: 11pt;
      font-family: 'century-gothic-regular', sans-serif;
    }
    .page1{

        background-image: url('storage/img/diploma/diploma-bg-1.jpg');
        background-repeat: no-repeat;
        background-position: center center;
        image-rendering: -webkit-optimize-contrast;
        background-size: cover;
        margin: 0px;
    }
    .page2{

      background-image: url('storage/img/diploma/diploma-bg-2.jpg');

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
    <div class="container">

    <p class="name">
      {{$name}}
    </p>
    <p class="title">

        {{$diplomado->title}}

    </p>
    <div class="value">
      <p>VALOR CURRICULAR DE <span>{{$hours}}</span> HORAS Y <br>
        <span>{{$credits}} </span> CRÉDITOS EN EDUCACIÓN SUPERIOR.<br>
        CÉDULA DE ACREDITACIÓN <span>{{$diplomado->revoe->key}}</span>
      </p>
    </div>
    <div class="date">
      Guadalajara, Jalisco, <span>{{$date}}</span>
    </div>
      </div>
  </body>

  <body class="page2">
    <div class="registro">
      <p>
        {{$diplomado->revoe->key}}
      </p>
      <p>
        Guadalajara, Jalisco.México
      </p>
      <p>
        {{$diplomado->getStartsString()}}

      </p>

      <p>
        {{$diplomado->getEndsString()}}

      </p>

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
