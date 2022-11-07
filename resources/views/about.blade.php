<x-guest-layout>
    <style>
        .backgroud-abaout{
            background-image: url("{{ asset('storage/img/escudos_fondp.png') }}");
            margin: 0;
            padding: 0;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
        .backgroud-content{
            background: #023a8de7
        }
        .blocker_zise{
            height: 100px;
            margin: 32px 0px;
            padding: 0px 12px;
        }
        .title_about{
           /* height: 100px;
            margin: 32px 0px;
            padding: 0px 12px;*/

            border-radius: 0.5rem;
            margin: 60px 35px;
            width: 350px;
            text-align: center;
        }
        .title_card_middle{
            padding: 0.5rem;
        }

        .card_item_team{
            /*position: absolute;*/
            width: 375px;
            height: 253px;
            background-color: rgb(16 17 30 / var(--tw-bg-opacity));
            border-radius: 0px 0px 30px 30px;
        }

    </style>
    @livewire('navigation-guest-menu')
    <div class="pt-4 backgroud-abaout">
    <!--<div class="pt-4 bg-gray-100">-->
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            {{--
            <div>
                <x-jet-authentication-card-logo />
            </div>
            --}}

            <div class="w-full backgroud-content sm:max-w-5xl mt-6 p-6 shadow-md overflow-hidden sm:rounded-lg prose">

                <div class="container text-zinc-100" >

                    <div class="row">

                        <div class="flex justify-between">
                            <div  class="py-0 px-3 align-middle" >
                                <img src="{{ asset('storage/img/escudo_imets.png') }}" alt="" style="height: 100px" alt="" loading="lazy">
                            </div>

                            <div class="sm:rounded-lg">
                                <div class="title_about bg-secondary">
                                    <h2 class="text-stone-100 title_card_middle">¿Quienes somos?</h2>
                                </div>
                            </div>
                            <div class="">
                                <img  class="blocker_zise" src="{{ asset('storage/img/escudo_afodemy.png') }}" alt="" loading="lazy">
                            </div>

                        </div>

                        <div id="cnt_video_qs" class="video-player ratio ratio-16x9">
                            <!--<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/727389988?h=fb41723c1d&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="quienes_somos"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>-->
                            <img src="{{ asset('storage/img/pre_view.jpeg') }}" alt="">
                        </div>
                        {{--

                        <p>¡Hola! Bienvenido a Afodemy, nos da mucho gusto recibirte y que empieces a formar parte de esta
                            gran familia. Antes que nada, permítenos contarte nuestro objetivo principal, el cual es
                            bastante claro y preciso: ofrecerte la oportunidad de capacitarte para que logres el desarrollo
                            personal y profesional que tanto buscas y deseas.</p>

                        <p>Nuestra historia comienza en 2014 cuando nuestro fundador, Iván Aragón, con mucho entusiasmo
                            comenzó a realizar pequeños cursos, con aproximadamente 30 personas, sin embargo, su visión ya
                            era clara: acercar la educación a la sociedad. Su incansable trabajo y perseverancia continuó
                            todo ese año, con el mismo esquema, pequeños cursos a bajos costos, pero con educación de
                            calidad.</p>

                        <p>Para 2015 nuestro fundador y actual Director Ejecutivo da el siguiente paso, uno grande: organiza
                            su primer congreso e invita al Doctor Alejandro Hernández Cárdenas, reconocido mundialmente por
                            su técnica única y patentada de rehidratación cadavérica, a participar en este. El Doctor
                            Alejandro con mucho gusto acepta y así, este evento marca un hito dentro de nuestra historia.
                        </p>

                        <p>Durante 2016 y 2017 nuestra historia siguió desarrollándose de la misma manera y con la misma
                            visión, crear más y mejor preparados profesionistas, siempre con la meta de que estos sean parte
                            de la solución a los problemas que nos aquejan como sociedad.</p>

                        <p>Para 2018 nace nuestro Primer Congreso Juvenil Forense, el cual tuvo un alcance y un éxito
                            avasallador, más de 350 personas entre estudiantes, profesionistas, investigadores y servidores
                            públicos todos reunidos en un mismo lugar, con el objetivo primordial de aumentar su educación
                            profesional y compartiendo una misma pasión: las Ciencias Forenses.</p>

                        <p>Para 2019 quisimos repetir la fórmula, ahora con nuestro Segundo Congreso Juvenil Forense,
                            sabíamos que ese año nos superaríamos a nosotros mismo y lograríamos acercar la educación a
                            muchas más personas, nuestro fundador Iván, tenía claro que para que todos alcancen el éxito es
                            necesaria la capacitación constante. Esa vez superamos las 450 personas e incluso nuestro
                            congreso se internacionalizo pues, trajimos expertos de otras partes del mundo ¡Fue increíble!
                        </p>

                        <p>A inicios del 2020 la vida nos permitió llevar a cabo el Tercer Congreso Juvenil Forense, más de
                            650 personas reunidas en el Caribe Mexicano, disfrutando de sus bondades, pero sobretodo,
                            aprendiendo y desarrollando sus capacidades. Este mismo año el mundo sufrió una sacudida, el
                            virus del Covid-19 empezó a propagarse de manera acelerada y no tardó mucho en llegar a tierras
                            mexicanas, pero toda sacudida siempre sirve para acomodarse de nuevo.</p>

                        <p>Fue entonces que, apegados a las medidas de sanidad y a la visión que distingue a nuestro
                            Director Ejecutivo, empezamos a ofrecer educación y capacitaciones de manera virtual; si en
                            nuestro último Congreso Juvenil Forense nos sentíamos asombrados y felices por las más de 650
                            personas que abarrotaron el auditorio, con nuestra nueva modalidad virtual no teníamos ni idea
                            de lo que se venía&hellip; la fecha hemos capacitado de manera virtual a más de 10,000 personas.
                            ¡Sí, leyeron bien; más de 10,000!</p>

                        <p>La pandemia nos golpeó duro a todos, pero incluso en la crisis hay que saber observar las
                            oportunidades que la vida nos da. Nuestra misión es acercarte la mejor educación, con los
                            mejores docentes y no nos íbamos ni nos vamos a detener por nada, somos creyentes de que
                            mientras más gente se desarrolle humana y profesionalmente, alcanzaremos sociedades más
                            pacíficas, más seguras y más felices.</p>

                        <p>Y, en resumen, ese es nuestro objetivo: la felicidad de usted, de nosotros y de todas y todos.
                        </p>
                        --}}
                        <p>
                            IMETS trabaja en alianza estratégica con “Afodemy,
                            Academia de Ciencias Forenses y Seguridad S.A. de C.V.” Quien se encarga en gran
                            parte de la operación interna, como dar identidad y promoción a cada oferta educativa a
                            través del área de marketing y diseño, la investigación y gestión de la plantilla de
                            docentes a cargo del área de “Coordinación Académica”, el seguimiento y acompañamiento
                            al alumnado por parte de “Control Escolar”, Afodemy también se encarga de apoyar toda la
                            tramitología que se requiere para validar, legalizar y certificar ante las entidades e
                            instancias pertinentes.


                        </p>
                            <div id="vermas">... VER MAS ...</div>
                        <div id="mostrar" style="display: none" >
                            <p>
                                Los estudiantes tendrán en el Instituto la facilidad de estudiar,
                                realizar investigación académica y la práctica en áreas de prevención delictiva,
                                investigación criminal, aplicación de las ciencias forenses, la actuación ministerial
                                y los juicios orales. Las clases son100% en línea, los programas y contenidos
                                académicos estarán alineados a los estándares federales para la policía
                                acreditable, se contará con profesores e instructores altamente reconocidos a
                                nivel nacional e internacional.
                            </p>
                            <h2 class="mb-5 text-stone-100 text-center">Valores</h2>
                                <div class="row">
                                    <p>
                                        Nuestra educación es la pieza clave en nuestros valores,
                                        el respeto, la honestidad, la justicia, la igualdad y la responsabilidad
                                        son lo más importante para nosotros.
                                    </p>
                                    <h2 class="mb-5 text-stone-100 text-center">Visión</h2>
                                    <div class="row">
                                        <p>
                                            Que los estudiantes tengan en un solo Instituto las facilidades de
                                            estudiar, la investigación académica y la práctica en las áreas de
                                            prevención delictiva e Investigación criminal, Aplicación de las ciencias
                                            forenses, La actuación ministerial. Así como los juicios orales,
                                            de forma 100% en línea. Con programas y contenidos académicos alineados
                                            a los estándares federales contando con profesores e instructores
                                            altamente reconocidos a nivel nacional e internacional.
                                        </p>
                                    </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-4 backgroud-abaout">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div class="w-full backgroud-content sm:max-w-5xl mt-6 p-6 shadow-md overflow-hidden sm:rounded-lg prose">
                <div class="container text-zinc-100" >
                    <div class="flex justify-between">
                        <div  class="py-0 px-3 align-middle" >
                            <img src="{{ asset('storage/img/escudo_imets.png') }}" alt="" style="height: 100px" alt="" loading="lazy">
                        </div>

                        <div class="sm:rounded-lg">
                            <div class="title_about bg-secondary">
                                <h2 class="text-stone-100 title_card_middle" >Mesa Directiva</h2>
                            </div>
                        </div>
                        <div class="">
                            <img  class="blocker_zise" src="{{ asset('storage/img/escudo_afodemy.png') }}" alt="" loading="lazy">
                        </div>

                    </div>

                    <div class="flex justify-between">
                        <div class="container mx-auto py-12 px-4">
                            <p class="text-gray-400 text-center"><strong class="text-gray-400 font-bold">Rector Institucional de IMETS & AFODEMY. </strong></p>
                            <div class="inline-grid max-w-xs sm:max-w-xs lg:max-w-lg lg:flex bg-secondary rounded-lg border shadow-lg pb-6 lg:pb-0">
                                <div class="w-full lg:w-1/3 lg:p-4">
                                    <!-- <img src="img/profile.jpg" alt="profile picture" class="rounded-lg"> -->
                                    <div class="relative w-24 h-24">
                                        <img class="rounded-full border border-gray-100 shadow-sm" src="{{ asset('storage/img/partner-ces-1.jpeg')}}" alt="user image" />

                                    </div>
                                </div>

                                <div class="w-full lg:w-2/3 p-4">
                                    <div class="inline-grid">
                                        <p class="work-sans font-semibold text-xl text-white"> <strong class="work-sans font-semibold text-xl text-white">Comisario Gral.</strong> Cesáreo Carvajal Guajardo</p>
                                        <p class="raleway text-sm my-4 text-white opacity-75">Cesáreo comenzó su carrera profesional en el gobierno
                                            federal de 1980 a 1989, como Coordinador General de Seguridad, Vigilancia e Investigaciones del I.S.S.S.T.E.
                                             De 1994 a 1997 fue Director General de la Policía Industrial Bancaria y Auxiliar del Estado de Morelos</p><br><br>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center -mt-8 rounded-b-lg max-w-xs lg:max-w-lg lg:-mt-8 lg:justify-end lg:pr-8 py-1">
                                <button type="button" class="text-white py-3 px-4 rounded-lg bg-blue-500"><p class="work-sans font-semibold text-sm tracking-wide">saber mas</p></button>
                                <!--<button type="button" class="py-3 px-4 bg-blue-500 rounded-lg ml-3 text-white"><p class="work-sans font-semibold text-sm tracking-wide">contacto</p></button>-->
                            </div>
                        </div>
                        <div class="container mx-auto py-12 px-4">
                            <p class="text-gray-400 text-center"><strong class="text-gray-400 font-bold">Vice Rectora Académica de IMETS & AFODEMY</strong></p>
                            <div class="inline-grid max-w-xs sm:max-w-xs lg:max-w-lg lg:flex bg-secondary rounded-lg border shadow-lg pb-6 lg:pb-0">
                                <div class="w-full lg:w-1/3 lg:p-4">
                                    {{--<img src="img/profile.jpg" alt="profile picture" class="rounded-lg">--}}
                                    <div class="relative w-24 h-24">
                                        <img class="rounded-full border border-gray-100 shadow-sm" src="{{ asset('storage/img/partner-jan-1.jpeg')}}" alt="user image" />
                                    </div>
                                </div>

                                <div class="w-full lg:w-2/3 p-4">
                                    <div class="inline-grid">
                                        <p class="work-sans font-semibold text-xl text-white">Janya Citlally Bahena Castillo</p>
                                        <p class="raleway text-sm my-4 text-white opacity-75">Originaria de Cuernavaca Morelos, estudió la licenciatura en educación en la universidad
                                            autónoma del estado de Morelos. Cuenta con diversos diplomados en: psicología forense y perfilación criminal,
                                             master en dirección comercial y ventas</p><br><br><br><br>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center -mt-8 rounded-b-lg max-w-xs lg:max-w-lg lg:-mt-8 lg:justify-end lg:pr-8 py-1">
                                <button type="button" class="text-white py-3 px-4 rounded-lg bg-blue-500"><p class="work-sans font-semibold text-sm tracking-wide">saber mas</p></button>
                                <!--<button type="button" class="py-3 px-4 bg-blue-500 rounded-lg ml-3 text-white"><p class="work-sans font-semibold text-sm tracking-wide">contacto</p></button>-->
                            </div>
                        </div>
                        <div class="container mx-auto py-12 px-4">
                            <p class="text-gray-400 text-center"><strong class="text-gray-400 font-bold">Vice Rector de IMETS & AFODEMY.</strong></p><br>
                            <div class="inline-grid max-w-xs sm:max-w-xs lg:max-w-lg lg:flex bg-secondary rounded-lg border shadow-lg pb-6 lg:pb-0" style="width: 300">
                                <div class="w-full lg:w-1/3 lg:p-4">
                                    <!-- <img src="img/profile.jpg" alt="profile picture" class="rounded-lg"> -->
                                    <div class="relative w-24 h-24">
                                        <img class="rounded-full border border-gray-100 shadow-sm" src="{{ asset('storage/img/partner-erk-1.jpeg')}}" alt="user image" />
                                    </div>
                                </div>

                                <div class="w-full lg:w-2/3 p-4">
                                    <div class="inline-grid">
                                        <p class="work-sans font-semibold text-xl text-white">Erick Marcel Bahena Castillo</p>
                                        <p class="raleway text-sm my-4 text-white opacity-75 justify-center">Estudió la carrera de contabilidad en la Universidad
                                            Autónoma del Estado de Morelos (UAEM). Originario de la ciudad de Cuernavaca Morelos, con 43 años de los
                                            cuales durante 20 años se ha desarrollado como un exitoso empresario y emprendedor mexicano.</p><br><br><br>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center -mt-8 rounded-b-lg max-w-xs lg:max-w-lg lg:-mt-8 lg:justify-end lg:pr-8 py-1">
                                <button type="button" class="text-white py-3 px-4 rounded-lg bg-blue-500"><p class="work-sans font-semibold text-sm tracking-wide">saber mas</p></button>
                                {{--<button type="button" class="py-3 px-4 bg-blue-500 rounded-lg ml-3 text-white"><p class="work-sans font-semibold text-sm tracking-wide">contacto</p></button>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
<script>
    const element = document.getElementById("vermas");
    element.addEventListener("click", myFunction);
    function myFunction() {
        elementMostrar=document.getElementById("mostrar");
        elementMostrar.style.transition="all 5s";
        if(elementMostrar.style.display == "none"){
            elementMostrar.style.display = "block";
        }else{
            elementMostrar.style.display = "none";

        }

    }
</script>
