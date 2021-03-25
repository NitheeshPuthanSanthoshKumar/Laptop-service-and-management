<?php     //start php tag
//include connect.php page for database connection
include('registration.php');
//if submit is not blanked i.e. it is clicked.
if(isset($_REQUEST['submit']))
{
  
if($_REQUEST['lapname']=='' || $_REQUEST['company']=='' || $_REQUEST['quantity']==''|| $_REQUEST['tgc']=='' || $_REQUEST['dat']=='')
{
echo "please fill the empty field.";
}
else
{
    
    $laptop=$_POST['lapname'];
    $cname=$_POST['company'];
    $quant=$_POST['quantity'];
    $tgc=$_POST['tgc'];
    
    $dat=$_POST['dat'];
    
    
    
    
    
$sql="INSERT INTO manufacture VALUES('$laptop','$cname','$quant','$tgc','$dat')";
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