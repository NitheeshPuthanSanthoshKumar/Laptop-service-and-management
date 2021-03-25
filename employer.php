<?php     //start php tag
//include connect.php page for database connection
include('registration.php');
//if submit is not blanked i.e. it is clicked.
if(isset($_REQUEST['submit']))
{
  
if($_REQUEST['id']=='' || $_REQUEST['name']=='' || $_REQUEST['number']==''|| $_REQUEST['address']=='' || $_REQUEST['birth']=='' || $_REQUEST['age']=='' || $_REQUEST['joining']=='' || $_REQUEST['salary']=='' )
{
echo "please fill the empty field.";
}
else
{
    $laptop=$_POST['id'];
    $name=$_POST['name'];
    $mobile=$_POST['number'];
    $address=$_POST['address'];
    $birth=$_POST['birth'];
    $age=$_POST['age'];
    $joining=$_POST['joining'];
    $salary=$_POST['salary'];
    
    
$sql="INSERT INTO employer VALUES('$laptop','$name','$mobile','$address','$birth','$age','$joining','$salary')";
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