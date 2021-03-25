<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style>
@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

h1 {
  font-size:3em;
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em;
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
      font-weight: bold;
      font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
      font-weight: normal;
      font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
       -moz-box-shadow: 0 2px 2px -2px #0E1119;
            box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
      text-align: left;
      overflow: hidden;
      width: 80%;
      margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
      padding-bottom: 2%;
      padding-top: 2%;
  padding-left:2%;
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
      background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
      background-color: #2C3446;
}

.container th {
      background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
       -moz-box-shadow: 0 6px 6px -6px #0E1119;
            box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  transition-delay: 0s;
      transition-duration: 0.4s;
      transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
</style>
</head>
<body>
<table class="container">
   <thead>
      <tr>
         <th><h1>Customer id</h1></th>
         <th><h1>Laptop Name</h1></th>
         <th><h1>Date of Purchase</h1></th>
         <th><h1>Date of Issue</h1></th>
         <th><h1>Problem Statement</h1></th>
         <th><h1>Company Statement</h1></th>
         <th><h1>Warranty Status</h1></th>
      </tr>
   </thead>



</body>

<?php     //start php tag
//include connect.php page for database connection
include('registration.php');
//if submit is not blanked i.e. it is clicked.
//if(isset($_REQUEST['submit']))
//{
    
//if($_REQUEST['laptop-name']==''  )
//{
////echo "please fill the empty field.";
//}
//else
//{
    //$laptop_name=$_POST['laptop-name'];
   
$query= "SELECT * FROM `services`";
$query_run=mysqli_query($con,$query) or die("Error: ".mysqli_error($con));
?>

<?php
while($row=mysqli_fetch_array($query_run,MYSQLI_BOTH))
{
?>
    
    <thead>
    <tr>
  <td><?php echo $row['Customer_id'];?></td>
  <td><?php echo $row['LAPTOP-NAME']; ?></td>
  <td><?php echo $row['DATE-OF-PURCHASE']; ?></td>
  <td><?php echo $row['DATE-OF-ISSUE']; ?></td>
  <td><?php echo $row['PROBLEM-STATEMENT']; ?></td>
  <td><?php echo $row['COMPANY-NAME']; ?></td>
  <td><?php echo $row['WARRANY-STATUS']; ?></td>
</tr>
</thead>

    
    
    
    
  <?php  

}

?>
</table>
</html>