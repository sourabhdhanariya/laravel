<h1>user login</h1>@if(session('user'))
    <h2>Data is saved, {{ session('user') }}</h2>
@endif

<form action="users" method="post">
    @csrf
    <input type="text" name="user" placeholder="enter user name">
    <input type="password" name="password" placeholder="enter user password">
<button>Login</button>
</form>