<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link href="https://www.dafontfree.net/embed/Y2FtYnJpYS1yZWd1bGFyJmRhdGEvNDYvYy82MzYxNy9DYW1icmlhLnR0Zg" rel="stylesheet" type="text/css"/>
    <meta charset="utf-8">
    <style media="screen">
    body{
      font-family: 'cambria-regular', sans-serif;
      font-size: 12pt;
      background-image: url('storage/img/welcome/fondo_bienvenida_docente.jpg');
      background-position: center center;
      background-size: cover;
      background-repeat: no-repeat;
    }

    .horario{

        width: 100%;
        height: 100%


    }

    .container{
      margin-left: 10%;
      margin-right: 10%;
      top: 20%;
      bottom:20%;

      position:relative;


    }
    @page{margin: 0px;

    }
    .date{

      text-align: right;
    }
      h4{
        font-size: 11pt;
      }
      p{
        text-align: justify;
        font-size: 12pt;
      }
      table{

        width: 100%;
        border: 1px solid;
        align-items: center;
        text-align:center;
        position: relative;

      }
      th{
        background-color: #eee;
      }
      td{
        border: 1px solid;

        width: 33%;
      }
      tr{


      }
      .title{
        background-color: #eee;
        width: 100%;
        text-align: center;
        align: center;
        border-style: solid;
        border-color: #000;
        border:2px;

      }
      .firma{
        width: 100%;
        text-align: center;
        position: absolute;

      }

    </style>
  </head>
  <body>



    <div class="container">
      <div class="date">

        <h4>CIUDAD DE MÉXICO, {{$date}}<br>ASUNTO: DIPLOMADO EN {{$diplomado}}</h4>

      </div>
    <div align="left">
      <h4 >{{$teacher}}</h4>

    </div>

      <p>
        <b>PRESENTE</b>
        <br>
        Reciba usted un afectuoso saludo, esperamos que su día marche con serenidad y éxito.<br>

      En <b>Afodemy</b> reconocemos y admiramos el gran trabajo que usted ha hecho en beneficio de la ciencia y de la justicia mexicana, conocemos el gran profesionista que es, ético y comprometido con su profesión y con la sociedad; tenemos la firme creencia de que la educación es una herramienta de gran utilidad para lograr un cambio en nuestras sociedades, por lo que le agradecemos y nos sentimos honrados de que sea parte de este proyecto.</p>
      <p>
        A continuación, me permito extenderle por este medio la calendarización y logística relacionada a su participación como docente en nuestro diplomado.
      </p>
      <div style="page-break-after:always;"></div>
    </div>
      <div class="container">

      <div class="title">
                DIPLOMADO: {{$diplomado}} <br>
                SESIÓN: @foreach($sesiones as $sesion)
                {{$sesion}}
                <br>
                @endforeach

                INICIO: {{$fechaInicio}} <br>
                TÉRMINO:  {{$fechaTermino}} <br>
      </div>
      <?php
      $count =0;
       ?>
      @foreach($unidades as $key => $unidad)
      <?php
        $count = $count+1;
         ?>
      <br>


        <table>
        <thead>
          <tr>
            <th>Unidad</th>
            <th>Fecha</th>
            <th>Docente</th>
          </tr>
        </thead>
        <tbody>
          @foreach($unidad[1] as $key =>$fecha)
          @if($key==0)
          <tr>
            <td rowspan="{{count($unidad[1])}}">{{$unidad[0]}}</td>
            <td>{{$fecha}}</td>
            <td rowspan="{{count($unidad[1])}}">{{$teacher}}</td>
          </tr>
          @else
          <tr>
            <td>{{$fecha}}</td>
          </tr>
          @endif
          @endforeach
        </tbody>
        </table>
        <?php
        if ($count /2 == 1) {
          echo "<div style='page-break-after:always'></div>";
          $count=0;
        }

         ?>
        @endforeach


        <p>
          Con base a lo antes expuesto, en Afodemy nos gusta que los docentes tengan libertad de cátedra puesto que cada uno maneja una metodología pedagógica que consideren funcional para su modelo de aprendizaje - enseñanza, todo ello apangándose al plan de estudio proporcionado, sabemos tendrá́ una agenda organizada para que con esto cumplan en tiempo y forma con su modulo. Es por ello, que, en el reglamento interno, debemos resaltar el cumplimiento de los criterios de evaluación, con la finalidad de consolidar los conocimientos y saberes del alumnado. <br>
        </p>
        <p>
          Reiteramos el agradecimiento por ser parte de esta institución.
        </p>
        <br>
        <br>
        <br>  <br>
          <br>
          <br>
        <div class="firma">

          <p class="firma">
            <span>
              <img width="20%" src="storage/img/firma_ivan.png" alt="">
            </span><br>
            <b>
            ATENTAMENTE <br>
            Lic. Iván Aragón <br>
            Director General
          </b>
        </p>
        </div>
        </div>
  </body>

</html>
