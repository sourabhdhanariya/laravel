<h1>user login</h1>
<form action="users" method="GET">
    @csrf
    <input type="text" name="user" placeholder="enter user name">
    <input type="password" name="password" placeholder="enter user password">
    <button>Login</button>
</form>