<div class="w-full mx-5 p-5 bg-gray-200">
   <div class="w-full">
        <table class="w-full text-center">
            <thead class="bg-gray-300">
                <tr >
                    <th>Diplomado</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Número</th>
                    <th>Estatus</th>
                    <th>Fecha</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($leads as $lead)
                <tr class="hover:bg-white">
                    <td>{{$lead->product->name ?? 'no definido'}}</td>
                    <td>{{$lead->name ?? 'no definido'}}</td>
                    <td>{{$lead->email ?? 'no definido'}}</td>
                    <td>{{$lead->number ?? 'no definido'}}</td>
                    <td>{{$lead->status_id ?? 'no definido'}}</td>
                    <td>{{$lead->created_at->format('j F, Y') ?? 'no definido'}}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
   </div>
</div>
<div>


</div>



