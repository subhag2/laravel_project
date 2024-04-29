<h1>Login Page</h1>
<form action="login" method="POST">
    @csrf
    <input type="text" placeholder="type your name" name="userName">
    <br><br><br>
    <input type="password" placeholder="type password" name="userPassword">
    <br><br>
    <button type="submit" name="submitBtn">submit</button>
</form>