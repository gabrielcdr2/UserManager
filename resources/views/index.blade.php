<h1>Usuários</h1>
 
<a href="/create">Novo Usuário</a>
 
<ul>
@foreach($users as $user)
    <li>
        {{ $user->name }} - {{ $user->email }}
 
        <a href="/edit/{{ $user->id }}">Editar</a>
 
        <form action="/delete/{{ $user->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
        </form>
    </li>
@endforeach
</ul>
 
 

