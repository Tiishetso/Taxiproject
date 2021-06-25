<html>
    <h1>Register</h1>
    <body>
        <form action ="/register" method = 'post'>
        <table border= "1">
        <tr>
        <td><label for="FirstName">First Name</label>
        <input type="text" name="FirstName" required></td></tr>

        <tr><td><label for="LastName">Last Name</label>
        <input type="text" name="LastName"required></td></tr>

        <tr><td><label for="email">E-mail Address</label>
        <input type="email" name="email" required></td></tr>

        <tr><td><label for="password">Password</label>
        <input type="password" name="password"required></td></tr>

        <tr><td><label for="password_confirm">Confirm Password</label>
        <input type="password" name="password_confirm" required></td></tr>
        </tr>
        </table>
        <button type="submit" class="btn btn-primary">Register</button>
        <a href="/">Already have an account</a>
        </form>
    </body>
</html>