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
        <label>Full Name</label><input type="text" name="fullname"id="fullname"><br><br>
        <label>Email</label><input type="text" name="email"id="email"><br><br>
        <input type="submit" name="show"id="show"value="เข้าสู่ระบบ"/>
        
        <br><br>
    </form>
    
</body>
</html>

<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['fullname']) && isset($_POST['email'])) {
    if ($db->dbConnect()) {
        if ($db->signUp("users", $_POST['username'], $_POST['password'], $_POST['fullname'], $_POST['email'])) {
            echo "Sign Up Success";
            echo "<a href=\"plogin.php\">go to login</a>";
        } else echo "Sign up Failed";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
