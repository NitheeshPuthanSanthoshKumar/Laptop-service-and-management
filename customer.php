<?php     //start php tag
//include connect.php page for database connection
include('registration.php');
//if submit is not blanked i.e. it is clicked.
if(isset($_REQUEST['submit']))
{
  
if($_REQUEST['id']=='' || $_REQUEST['email']=='' || $_REQUEST['address']==''|| $_REQUEST['lapname']=='' || $_REQUEST['purchase']=='' || $_REQUEST['name']=='' || $_REQUEST['fname']=='' || $_REQUEST['lname']=='' || $_REQUEST['number']=='' )
{
echo "please fill the empty field.";
}
else
{
    $id=$_POST['id'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $laptop=$_POST['lapname'];
    $purchase=$_POST['purchase'];
    $name=$_POST['name'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $num=$_POST['number'];
    
    
    
$sql="INSERT INTO customer VALUES('$id','$email','$address','$laptop','$purchase','$name','$fname','$lname','$num')";
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