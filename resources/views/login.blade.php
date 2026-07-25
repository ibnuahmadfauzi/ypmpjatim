<h2>Login</h2>

@if (session('error'))
    {{ session('error') }}
@endif

<form method="POST" action="/login">

    @csrf

    <input type="email" name="email" placeholder="Email">

    <input type="password" name="password" placeholder="Password">

    <button>Login</button>

</form>
