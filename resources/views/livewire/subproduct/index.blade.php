<div>

    <form action="{{ route('subproduct.store') }}" method="POST">
        @csrf
        <input type="text" id="name" name="name">
        <input type="text" id="description" name="description">
        <input type="text" hidden name="product_id" value="{{ $product_id }}">

        <select id="Tipo" name="type">
            <option value="1">Inscripción</option>
            <option value="2">Acceso</option>
            <option value="3">Certificado</option>


        </select>
        <x-jet-button>Send</x-jet-button>
    </form>
    <table class="w-full text-center">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Stripe id</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subProducts as $subproduct)
                <tr>
                    <td>{{ $subproduct->name ?? 'no definido' }}</td>
                    <td>{{ $subproduct->description ?? 'no definido' }}</td>
                    <td>{{ $subproduct->stripe_id ?? 'no definido' }}</td>
                    <td>
                        <form method="POST" action="{{ route('subproduct.destroy',$subproduct) }}">
                            @csrf
                            @method('DELETE')
                            <x-jet-button>eliminar</x-jet-button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>
