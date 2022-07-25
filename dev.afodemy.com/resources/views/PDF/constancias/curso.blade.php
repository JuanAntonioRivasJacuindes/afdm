
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

<link href="https://www.dafontfree.net/embed/Y2VudHVyeS1nb3RoaWMtcmVndWxhciZkYXRhLzQwL2MvMTAxOTUwL0dPVEhJQy5UVEY" rel="stylesheet" type="text/css"/>
<link href="https://www.dafontfree.net/embed/Y2VudHVyeS1nb3RoaWMtYm9sZCZkYXRhLzQ3L2MvNTA3NjIvZ290aGljYi50dGY" rel="stylesheet" type="text/css"/>
    <style media="screen">
    @page {margin:0px;}

    body{

        background-image: url('{{$imagenBase64}}');
        background-repeat: no-repeat;
        background-position: center center;
        image-rendering: -webkit-optimize-contrast;
        background-size: cover;
        margin: 0px;
    }
    .container{
        text-align: center;
    }
    .otorga{
      width: 100%;
      margin-top: 20%;
      /* background-color: #ddd; */
      font-family: 'century-gothic-regular', sans-serif;
      font-size: 20pt;
      color:#8f4e00;
      align:center;
        letter-spacing: 7px;
    position: absolute;
    }
    .constancia{
      margin-top: 23%;
      width: 100%;
      /* background-color: #bbb; */
      font-family: 'century-gothic-regular', sans-serif;
      font-size: 53pt;
      color:#2b2621;
      position: absolute;

    }
      .name{
        /* Tamaño del contenedor */
        margin-top: 39%;
        /* background-color: #555; */
        /* Posicion del contenedor */
        width: 100%;
        z-index: 1;
        position: absolute;
        /* Propiedades del texto */

        font-size: 14pt;
        color:#3C3C3C;
          font-family: 'century-gothic-regular', sans-serif;

      }
      .course{
        /* Contenedor */
        line-height: 90%;

        /* background-color: #555; */
        /* Posicion del contenedor */
        /* width: 30%; */
         /* display: block; */
        /* background-color: #555; */
        font-size: 16pt;
        color:#8f4e00;
        font-family: 'century-gothic-bold', sans-serif;

      }
      .parti{
        font-size: 13pt;
        font-family: 'century-gothic-regular', sans-serif;
        color:#9D9D9D;
      }
      .date{
        line-height: 55%;

        top: 53%;
        left: 25%;
        height: 20%;
        /* background-color: #6e997a;
        opacity: .5; */
        width: 50%;
        font-size: 15pt;
        z-index: 1;
        /* Atribtos del texto */
        text-align: center;
        position: absolute;

        font-family: 'century-gothic-regular', sans-serif;
        color:#808080;
      }
      .llev{
        line-height: 90%;

      }

    </style>
  </head>
  <body>
    <!-- <img class="background" src="{{$imagenBase64}}" alt=""> -->
    <div class="container">
      <div class="otorga">
        OTORGA LA PRESENTE
      </div>
      <div  class="constancia">
        CONSTANCIA
      </div>
      <div class="name">
        {{$name}}
      </div>
      <div class="date">

          <p class="parti">Por su destacada participación en el curso</p>
          <p class="course">
            {{$course}}
          </p>
          <p class="llev">
          Llevado a cabo el día <span>{{$date}}</span>,<br>
          con <span>{{$hours}} horas de valor curricular</span>
        </p>


      </div>
  </div>
  </body>
</html>
