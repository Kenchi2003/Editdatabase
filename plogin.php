<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script lang="javascript">
        
    </script>
</head>
<body>
    <form name="login"method="post">
        <H1>ระบบยืนยันตัวตน</H1><br><br>
        
        <label>UserName</label><input type="text" name="username"id="username"><br><br>
        <label>Password</label><input type="text" name="password"id="password"><br><br>

        <input type="submit" name="show"id="show"value="เข้าสู่ระบบ"/>
        <input type="button" onclick="location.href='signup.php';" value="ลงทะเบียน" />
        
        <br><br>
    </form>
    
</body>
</html>

<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($db->logIn("users", $_POST['username'], $_POST['password'])) {
            echo "Login Success";
            echo "<script>window.location='hellouser.html'</script>";
        } else echo "Username or Password wrong";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>