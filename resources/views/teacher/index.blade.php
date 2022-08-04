<div class="w-full">
    <table class="">
        <thead class="">
            <tr class="w-full bg-primary text-white m-5 p-5">
                <th class="w-full  m-2 p-2" >Nombre</th>
                <th class="w-full  m-2 p-2">Email</th>
                <th class="w-full  m-2 p-2">Teléfono</th>
                <th class="w-full  m-2 p-2">RFC</th>
                <th class="w-full  m-2 p-2">Escoladirdad</th>
                <th class="w-full  m-2 p-2">Ocupación</th>
                <th class="w-full  m-2 p-2">Síntesis</th>
                <th class="w-full  m-2 p-2">Banco</th>
                <th class="w-full  m-2 p-2" >Número de Cuenta</th>
                <th class="w-full  m-2 p-2">Clabe</th>
                <th class="w-full  m-2 p-2">Términos</th>
                <th class="w-full  m-2 p-2">Cédula</th>
                <th class="w-full  m-2 p-2">Identificación</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
            <tr  class="hover:bg-gray-300 border-2  m-5 p-5">
                    <td class="m-2 p-3 border-2">{{$teacher->full_name ?? 'no definido'}}</td>
                    <td class="m-2 p-3 border-2">{{$teacher->email ?? 'no definido'}}</td>
                    <td class="m-2 p-3 border-2">{{$teacher->phone_number ?? 'no definido'}}</td>
                    <td class="m-2 p-3 border-2">{{$teacher->rfc ?? 'no definido'}}</td>
                    <td class="m-2 p-3 border-2">{{$teacher->education ?? 'no definido'}}</td>
                    <td class="m-2 p-3 border-2">{{$teacher->ocupation ?? 'no definido'}}</td>
                    <td class="m-2 p-3 border-2">{{$teacher->synthesis ?? 'no definido'}}</td>
                    <td class="m-2 p-3 border-2">{{$teacher->bank ?? 'no definido'}}</td>
                    <td class="m-2 p-3 border-2">{{$teacher->account_number ?? 'no definido'}}</td>
                    <td class="m-2 p-3 border-2">{{$teacher->clabe ?? 'no definido'}}</td>
                    <td class="m-2 p-3 border-2">
                        <a href="{{route('download',['route'=>$teacher->terms])}}">
                        <svg class="w-10" xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                        <path strokeLinecap="round" strokeLinejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                      </svg></a></td>
                      <td class="m-2 p-3 border-2">
                        <a href="{{route('download',['route'=>$teacher->cedula])}}">
                        <svg class="w-10" xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                        <path strokeLinecap="round" strokeLinejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                      </svg></a></td>
                      <td class="m-2 p-3 border-2">
                        <a href="{{route('download',['route'=>$teacher->dni])}}">
                        <svg class="w-10" xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                        <path strokeLinecap="round" strokeLinejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                      </svg></a></td>



                </tr>
            @endforeach

        </tbody>
    </table>
</div>
