<a href="{{ route('servicos.create') }}">Criar Novo Serviço</a>

<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Duração (min)</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($servicos as $servico)
        <tr>
            <td>{{ $servico->nome }}</td>
            <td>{{ $servico->valor }}</td>
            <td>{{ $servico->duracao }}</td>
            <td>{{ $servico->descricao }}</td>
            <td>
                <a href="{{ route('servicos.edit', $servico->id) }}">Editar</a>
                <form action="{{ route('servicos.destroy', $servico->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
