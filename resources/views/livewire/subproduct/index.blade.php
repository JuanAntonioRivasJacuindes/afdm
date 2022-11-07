<div>

    <form action="{{ route('subproduct.store') }}" method="POST">
        @csrf
        <label for="name">Nombre</label>
        <input type="text" placeholder="Máximo 22 caracteres" required id="name" name="name">
        <label for="description">Descripción</label>
        <input type="text" required id="description" name="description">
        <input type="text" hidden name="product_id" value="{{ $product_id }}">
        <label for="type">Tipo</label>
        <select id="type" name="type">
            <option value="1">Inscripción</option>
            <option value="2">Acceso</option>
            <option value="3">Certificado</option>
            <option value="4">Pago único</option>



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
                    <td><a href="{{route('subproduct.show',$subproduct->id)}}">{{ $subproduct->name ?? 'no definido' }}</a></td>
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
