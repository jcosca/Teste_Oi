<x-app-layout>

    @section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 bg-white border-b border-gray-200">
                    <h1>Cadastro de novo Cliente</h1>
                    <form action="/clientes/{{$cliente->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="Nome_Cliente" class="form-label">Nome do Cliente: *</label>
                                <input type="text" class="form-control" required value="{{$cliente->Nome}}" name="Nome" id="Nome_Cliente" maxlength="50">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="Porta" class="form-label">Porta:</label>
                                <input type="number" class="form-control" value="{{$cliente->Porta}}" name="Porta" id="Porta">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="Endereço" class="form-label">Endereço: *</label>
                                <input type="text" class="form-control" required value="{{$cliente->Endereço}}" name="Endereço" id="Endereço" maxlength="100">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="Galc" class="form-label">Galc: *</label>
                                <input type="text" class="form-control" required value="{{$cliente->Galc}}" name="Galc" id="Galc" maxlength="50">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="Velocidade" class="form-label">Velocidade: *</label>
                                <input type="number" class="form-control" required value="{{$cliente->Velocidade}}" name="Velocidade" id="Velocidade">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection

</x-app-layout>
