<?php
$host='localhost';
$user='root';
$pass='';
$db='student';

//create connection
$conn=new mysqli($host,$user,$pass,$db);
echo 'connection success...';

$cna=$_POST['sname'];
$cfe=$_POST['sphone'];
$cad=$_POST['saddress'];
$sql="insert into stu_det(sname,sphone,saddress) values('$cna','$cfe','$cad')";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo '<br>Data insertion Success...';
}
else
{
    echo 'Error...';
}

$conn->close();
?>