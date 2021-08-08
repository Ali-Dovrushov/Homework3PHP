<head>
    <title>Cookies</title>
</head>
<h3>Please enter your user name and password.</h3>
<form action="logic.php" method ="POST">
    <input type="text" name="name" placeholder="User" style="cursor: pointer; color: white; background-color: blue;" required/> </br>
    <input type="password" name="pass" placeholder="Password" style="cursor: pointer; color: white; background-color: blue;" required>
    </p><input type="radio" name="radio" value="1" class="user">
        <label for="user">User</label>
        <input type="radio" name="radio" value="2" class="admin">
        <label for="admin">Admin</label>
        <input type="radio" name="radio" value="3" class="manager">
        <label for="manager">Manager</label></br>
        <input type = "submit" value="Sign in">
</form>