<x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-jet-authentication-card-logo />
            </div>

            @if(Session::has('flash_message'))
            <div id="toast-success" class="flex items-center p-4 mb-4 w-full  text-gray-500 bg-green-100 max-w-1/2 rounded-lg shadow " role="alert">
                <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Check icon</span>
                </div>
                <div class="ml-3 text-sm font-normal">{{Session::get('flash_message')}}</div>

            </div>

            @endif
            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">

                <h2 class="text-center">Información Docente</h2>

                <form action="{{ route('teacher-info.store') }}"  enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="flex flex-col mx-auto my-2">
                        <label for="full_name">Nombre Completo: </label>
                        <input class="rounded-sm capitalize" type="text" name="full_name" id="full_name" placeholder="Ej. Alejandro Reyes Plata" required>
                    </div>
                    <div class="flex flex-col mx-auto my-2">
                        <label for="email">Correo Electrónico: </label>
                        <input class="rounded-sm" type="text" name="email" id="email" placeholder="ejemplo@example.com" required>
                    </div>
                    <div class="flex flex-col mx-auto my-2">
                        <label for="phone_number">Número Celular: </label>
                        <input class="rounded-sm" type="text" name="phone_number" id="phone_number" placeholder="Ej. 5598765432 "required>
                    </div>
                    <div class="flex flex-col mx-auto my-2">
                        <label for="rfc">RFC con <b>Homoclave</b>: </label>
                        <input class="rounded-sm uppercase" type="text" name="rfc" id="rfc" placeholder="Ej.SIJJ0198769Q7"required>
                    </div>
                    <div class="flex flex-col mx-auto my-2">
                        <label for="education">Escolaridad: </label>
                        <select class="rounded-sm " name="education" id="education" required>
                            <option value="Licenciatura">Licenciatura</option>
                            <option value="Maestria">Maestría</option>
                            <option value="Doctorado">Doctorado</option>
                        </select>
                    </div>
                    <div class="flex flex-col mx-auto my-2">
                        <label for="ocupation">Ocupación:</label>
                        <input class="rounded-sm " type="text" name="ocupation" id="ocupation" placeholder="Ej.Perito"required>
                    </div>
                    <div class="flex flex-col mx-auto my-2">
                        <label for="synthesis">Síntesis Curricular:</label>
                        <textarea class="rounded-sm "name="synthesis" id="synthesis" cols="30" rows="5" placeholder="Máximo 5 lineas."required></textarea>

                    </div>
                    <hr>
                    <h2 class="text-center">Información Bancaria</h2>
                    <div class="flex flex-col mx-auto my-2">
                        <label for="bank">Banco:</label>
                        <input class="rounded-sm uppercase" type="text" name="bank" id="bank" placeholder="Ej.BBVA"required>
                    </div>
                    <div class="flex flex-col mx-auto my-2">
                        <label for="account_number">Número de Cuenta:</label>
                        <input class="rounded-sm " type="text" name="account_number" id="account_number" placeholder="20 Digitos"required>
                    </div>
                    <div class="flex flex-col mx-auto my-2">
                        <label for="clabe">Clabe Interbancaria:</label>
                        <input class="rounded-sm " type="text" name="clabe" id="clabe" placeholder="18 Digitos"required>
                    </div>
                    <hr>
                    <h2 class="text-center">Archivos</h2>

                    <div class="flex flex-col mx-auto my-2">
                        <label for="dni">Documento de Identificación: (INE/Pasaporte/Licencia de conducir)</label>
                        <input class="rounded-sm " type="file" name="dni" id="dni"required>
                    </div>
                    <div class="flex flex-col mx-auto my-2">
                        <label for="cedula">Cédula Profesional: </label>
                        <input class="rounded-sm " type="file" name="cedula" id="cedula"required>
                    </div>
                    <div class="flex flex-col mx-auto my-2">
                        <label for="terms">Aviso de privacidad Firmado: <a href="" class="text-primary"><i>Descargar Aquí</i></a></label>
                        <input class="rounded-sm " type="file" name="terms" id="terms"required>
                    </div>
                    <div class="flex flex-col mx-auto my-5 text-center">
                        <x-jet-button class="text-center">Enviar</x-jet-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    </div>
</x-guest-layout>
