<?php     //start php tag
//include connect.php page for database connection
include('registration.php');

//if submit is not blanked i.e. it is clicked.
if(isset($_REQUEST['submit']))
{
    
   
if($_REQUEST['id']=='' || $_REQUEST['lapname']=='' || $_REQUEST['purchase']==''|| $_REQUEST['issue']=='' || $_REQUEST['prob']=='' || $_REQUEST['company']==''  || $_REQUEST['yes_no']=='' )
{
echo "please fill the empty field.";
}
else
{
    
    $cid=$_POST['id'];
   
    $lapn=$_POST['lapname'];
    $pur=$_POST['purchase'];
    $issu=$_POST['issue'];
    $pro=$_POST['prob'];
    $comp=$_POST['company'];
    $war=$_POST['yes_no'];
    
$sql="INSERT INTO services VALUES('$cid','$lapn','$pur','$issu','$pro','$comp','$war')";
 //echo $sql;
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