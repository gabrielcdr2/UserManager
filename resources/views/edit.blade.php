<h1>Editar Usuário</h1>
 
<form action="/update/{{ $user->id }}" method="POST">
    @csrf
    <input type="text" name="name" value="{{ $user->name }}">
    <input type="email" name="email" value="{{ $user->email }}">
    <button type="submit">Atualizar</button>
</form>