<?php
require('classes/database.php');
require('classes/User.php');
$userobj= new user();

if(isset($_POST) && !empty($_POST)){
   if($userobj->doLogin($_POST['user_name'],$_POST['user_password'])){
       echo 'Login Successful';
   }else{
       echo 'Invalid Username and Password';
   }
}

?>
<html>
<head>
    <title>This is test file</title>
</head>
<body>
<h3>Login</h3>
<form name="frmAdd " id="frmAdd" method="post"  action="">
    <table>
        <tr>
            <td>User Name</td>
            <td><input type="text" name="user_name" value=""></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="user_password" value=""></td>
        </tr>

        <tr>

            <td colspan="2" align="right">
                <a href="forgetpassword.php">Forgot Password</a>
                <input type="submit" name="submit" value="Login"></td>
        </tr>

    </table>
</form>
</body>
</html>