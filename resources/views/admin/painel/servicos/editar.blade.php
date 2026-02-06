<h2>Editar Serviço</h2>

<form action="{{ route('servicos.update', $servico->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nome:</label>
    <input type="text" name="nome" value="{{ $servico->nome }}" required><br>

    <label>Valor:</label>
    <input type="number" name="valor" step="0.01" value="{{ $servico->valor }}" required><br>

    <label>Duração (minutos):</label>
    <input type="number" name="duracao" value="{{ $servico->duracao }}" required><br>

    <label>Descrição:</label>
    <input type="text" name="descricao" value="{{ $servico->descricao }}" maxlength="100" required><br>

    <button type="submit">Atualizar</button>
</form>
