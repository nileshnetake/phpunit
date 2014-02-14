<?php
require('classes/database.php');
require('classes/User.php');
$userobj= new user();

if(isset($_POST) && !empty($_POST)){
    if($userobj->forgetPassword($_POST['email'])){
        echo 'Password has been reset';
    }else{
        echo 'Email doesnot exist';
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
            <td>Email: </td>
            <td><input type="text" name="email" value=""></td>
        </tr>


        <tr>

            <td colspan="2" align="right"><input type="submit" name="submit" value="submit"></td>
        </tr>

    </table>
</form>
</body>
</html>