<h1>Novo Usuário</h1>
 
<form action="/store" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome">
    <input type="email" name="email" placeholder="Email">
    <button type="submit">Salvar</button>
</form>