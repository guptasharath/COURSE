<?php
session_start();?>
<?php
//connect
$course = $_GET["course_name"];
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('test');

//sql

if( $_GET )
{

  //$course = $_POST['coursename'];
  
  $query = "INSERT INTO saved (course_name) VALUES ( '$course')";
  $retval = mysql_query( $query, $conn);
   
   if(! $retval )
   {
    echo  die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
   header("Location: table2.php");
}
mysql_close($conn);
?>