
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="log_in.css">
</head>
<body>

<a href="index.html"><h2>&#8810 </h2></a>
     <h2 align="center">Login Page </h2>

<div class="login">
    <form method="post" action="backend_files/admin_loginback.php">

        <label><b>User Name
            </b>
        </label>
        <input type="text" name="username_input"  placeholder="Enter user id">
        <br><br><br>
        <label><b>Password
            </b>
        </label>
        <input type="text" name="password_input" placeholder="Enter password">
        <br><br>
        <input type="submit" value="Login" style="margin-left:100px; margin-top:20px;">

    </form>
</div>
<style>
body {
    height: 75px;
    width: 150px;


background-image: url("images/kala.jpg");
}
h2 {
    color: white;
    text-align: center;
}

label
{
    color: white;
    font-size: 30px;
}
input
{
    font-size: 20px;
    font-family: "Comic Sans MS";
    margin-top: 5px;

}

</style>
</body>
</html>


