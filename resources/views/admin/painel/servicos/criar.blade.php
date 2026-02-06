<h2>Criar Serviço</h2>

<form action="{{ route('servicos.store') }}" method="POST">
    @csrf
    <label>Nome:</label>
    <input type="text" name="nome" required><br>

    <label>Valor:</label>
    <input type="number" name="valor" step="0.01" required><br>

    <label>Duração (minutos):</label>
    <input type="number" name="duracao" required><br>

    <label>Descrição:</label>
    <input type="text" name="descricao" maxlength="100" required><br>

    <button type="submit">Salvar</button>
</form>
