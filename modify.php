<?php
$host='localhost';
$user='root';
$pass='';
$db='student';

$conn=new mysqli($host,$user,$pass,$db);
echo 'Connection Success...<br>';

$id=$_POST['sid'];
$cna=$_POST['sname'];
$cfe=$_POST['sphone'];
$cad=$_POST['saddress'];

$sql="update stu_det set sname='$cna',sid='$id',saddress='$cad' where sphone='$cfe'";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo 'Data updation Success...';
}
else 
{
    echo 'Error...';
}

$conn->close();
?>
