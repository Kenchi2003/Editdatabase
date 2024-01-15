<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>membershow</title> 
</head> 
<body> 
    <?php 
    include 'connect.php'; 
    $query = "SELECT * FROM users"; 
    $result = mysqli_query($connection,$query)or die("error in sql : 
$query".mysqli_error($query)); 
    echo "<table border='1' align='center' width='500'>"; 

echo "<tr align='center' bgcolor='#CCCCCC'><td>ล าดับที่</td><td>ชื่อ</td><td>สกุล
 </td><td>username</td><td>password</td><td>แก้ไข</td><td>ลบ</td></tr>"; 
while($row = mysqli_fetch_array($result)) {  
  echo "<tr>"; 
  echo "<td>" .$row["id"] .  "</td> ";  
  echo "<td>" .$row["username"] .  "</td> ";   
  echo "<td>" .$row["password	"] .  "</td> "; 
  echo "<td>" .$row["fullname"] .  "</td> "; 
  echo "<td>" .$row["email"] .  "</td> ";
  echo "<td>" .$row["Satatus"] .  "</td> "; 
  
  echo "<td><a href='formupdate.php?id=$row[0]'>edit</a></td> "; 
   
  
  echo "<td><a href='UserDelete.php?id=$row[0]' onclick=\"return confirm('Do you 
want to delete this record? !!!')\">del</a></td> "; 
  echo "</tr>"; 
} 
echo "</table>"; 
 
?> 
     <?php 
    echo '<a href="add.html">หน้าสมัครสมาชิก</a>' 
    ?> 
    <?php mysqli_close($connection); ?> 
 
</body> 
</html>