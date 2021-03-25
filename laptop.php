<?php     //start php tag
//include connect.php page for database connection
include('registration.php');
//if submit is not blanked i.e. it is clicked.
if(isset($_REQUEST['submit']))
{
  
if($_REQUEST['id']=='' || $_REQUEST['company']=='' || $_REQUEST['lapname']==''|| $_REQUEST['ram']=='' || $_REQUEST['gc']=='' || $_REQUEST['rom']=='' || $_REQUEST['cost']=='' || $_REQUEST['processor']=='' )
{
echo "please fill the empty field.";
}
else
{
    $cid=$_POST['id'];
    $comp=$_POST['company'];
    $lapn=$_POST['lapname'];
    $ram=$_POST['ram'];
    $gc=$_POST['gc'];
    $rom=$_POST['rom'];
    $cost=$_POST['cost'];
    $processor=$_POST['processor'];
    
    
$sql="INSERT INTO laptop VALUES('$cid','$comp','$lapn','$ram','$gc','$rom','$cost','$processor')";
if($con->query($sql) === TRUE)
{
echo "Record successfully inserted";
}
else
{
echo "There is some problem in inserting record";
}

}
}

?>