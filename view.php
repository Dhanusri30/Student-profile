<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
     p{
     background color:"flower.jpg";
     }
     
        a {
            padding-right: 25px;
            text-decoration: none;
            color: purple;
        }

        #hd {
            background-color: aqua;
            color: darkblue;
        }
        body {
  background-image: url('flower.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
    </style>
</head>
<body bgcolor="lightblue">

 <div id="hd">
 <center>
        <h1>STUDENT DETAILS
        </center>
            <hr>
        </h1>

        <div id="nav">
        <a href="Home.html">Home</a>
            <a href="new_student.html">New student</a>
            <a href="modify.html">Modify student</a>
            <a href="remove.html">Remove student</a>
            <a href="view.php">View student</a>
        </div>
    </div>
    <?php

$host='localhost';
$user='root';
$pass='';
$db='student';

$conn=new mysqli($host,$user,$pass,$db);
//echo 'Connection Success...<br>';

$sql="select * from stu_det";

$res=$conn->query($sql);

if($res->num_rows>0)
{  
    echo "<table border='1' align='center'>";
    while($row=$res->fetch_assoc())
    {
        echo "<tr>";
      echo '<td>'.$row['sid'].'</td>';
      echo '<td>'.$row['sname'].'</td>';
      echo '<td>'.$row['sphone'].'</td>';
      echo '<td>'.$row['saddress'].'</td>';
    echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo 'Record is empty...';
}

$conn->close();
?>
</body>
</html>