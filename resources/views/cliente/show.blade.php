<x-app-layout>

    @section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 bg-white border-b border-gray-200">
                    <h1>Cadastro de novo Cliente</h1>
                    <form action="/clientes" method="POST">
                        @csrf
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="Nome_Cliente" class="form-label">Nome do Cliente:</label>
                                <input type="text" class="form-control" readonly name="Nome" value="{{$cliente->Nome}}" id="Nome_Cliente" maxlength="50">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="Porta" class="form-label">Porta:</label>
                                <input type="number" class="form-control" readonly name="Porta" value="{{$cliente->Porta}}" id="Porta">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="Endereço" class="form-label">Endereço:</label>
                                <input type="text" class="form-control" readonly name="Endereço" value="{{$cliente->Endereço}}" id="Endereço" maxlength="100">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="Galc" class="form-label">Galc:</label>
                                <input type="text" class="form-control" readonly name="Galc" value="{{$cliente->Galc}}" id="Galc" maxlength="50">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="Velocidade" class="form-label">Velocidade:</label>
                                <input type="number" class="form-control" readonly name="Velocidade" value="{{$cliente->Velocidade}}" id="Velocidade">
                            </div>
                        </div>
                        <a href="/clientes/{{$cliente->id}}/edit" class="btn btn-primary">Editar</a>
                        <a href="/clientes/{{$cliente->id}}/delete" class="btn btn-danger">Excluir</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection

</x-app-layout>
