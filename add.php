<?php
	error_reporting(E_ALL);
	ini_set('display_errors',1);
    require('classes/database.php');
    require('classes/User.php');
    $userobj= new user();

    if(isset($_POST) && !empty($_POST)){
        $user = $userobj->create($_POST);
        echo 'Created Users Id is'.$user;
    }
?>
<html>
<head>
    <title>This is test file</title>
</head>
<body>
    <h3>Add User</h3>
    <form name="frmAdd " id="frmAdd" method="post"  action="">
            <table>
                    <tr>
                            <td>First Name</td>
                            <td><input type="text" name="first_name" value=""></td>
                    </tr>
                    <tr>
                            <td>Last Name</td>
                            <td><input type="text" name="last_name" value=""></td>
                    </tr>
                    <tr>
                        <td>User Name</td>
                        <td><input type="text" name="user_name" value=""></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" value=""></td>
                    </tr>
                        <tr>
                        <td>Password</td>
                        <td><input type="password" name="user_password" value=""></td>
                    </tr>

                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
    </form>
</body>
</html>