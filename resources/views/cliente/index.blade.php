<x-app-layout>

    @section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 bg-white border-b border-gray-200">
                    <table class="table table-striped table-hover table-responsive" style="width: 100%">
                        <thead class="thead-dark">
                            <tr>
                                <th>Ações</th>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Porta</th>
                                <th>Endereço</th>
                                <th>Galc</th>
                                <th>Velocidade</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $cliente)
                                <tr>
                                    <td><a href="/clientes/{{$cliente->id}}/show" title="Ver"><i class="bi bi-eye-fill"></i></a> <a href="/clientes/{{$cliente->id}}/edit" title="Editar" class="text-success"><i class="bi bi-pencil-fill"></i></a> <a href="/clientes/{{$cliente->id}}/delete" title="Excluir" class="text-danger"><i class="bi bi-trash-fill"></i></a></td>
                                    <td>{{ $cliente->id }}</td>
                                    <td>{{ $cliente->Nome }}</td>
                                    <td>{{ $cliente->Porta }}</td>
                                    <td>{{ $cliente->Endereço }}</td>
                                    <td>{{ $cliente->Galc }}</td>
                                    <td>{{ $cliente->Velocidade }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $clientes->links() }}
                </div>
            </div>
        </div>
    </div>
    @endsection

</x-app-layout>
