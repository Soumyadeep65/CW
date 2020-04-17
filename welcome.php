<?php
if(isset($_POST['submit'])){
    
$amount = $_POST['amount'];
$cur1 = $_POST['cur1'];
$cur2 = $_POST['cur2'];
 

if($cur1=="USD" AND $cur2=="INR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 76.54 . $cur2 . "</center>";
}
if($cur1=="INR" AND $cur2=="USD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.013 . $cur2 ."</center>";
}
if($cur1=="INR" AND $cur2=="INR"){
echo "<center><b>Both the currency cannot be same</b><br></center>";
}
if($cur1=="USD" AND $cur2=="USD"){
echo "<center><b>Both the currency cannot be same</b><br></center>";
}
}
 
?>
<html>
<head>
<title>USD - INR Conversion rate </title>
  <link rel="stylesheet" href="css/style2.css">

</head>
 
<body>
 
<form align="center" action="" method="post">
 
<div id="box">
<h2><center>USD - INR current Conversion rate</center></h2>
<h2><center>1 USD = 76.54 INR</center></h2>
<table>
    <tr>
    <td>
        Enter Amount:<input type="text" name="amount" required><br>
    </td>
</tr>
<tr>
<td>
    <br><center>From:<select name='cur1'>
     <option selected hidden value="">Select</option>
     <option value="USD" selected>US Dollar(USD)</option>
     <option value="INR" selected >Indian Rupee(INR)</option>
     </select>
</td>
</tr>
<tr>
    <td>
    <br><center>To:<select name='cur2'>
     <option selected hidden value="">Select</option>
     <option value="INR" selected >Indian Rupee(INR)</option>
     <option value="USD" selected>US Dollar(USD)</option>
    </select>
</td>
</tr>
<tr>
<td><center><br>
<input type='submit' name='submit' value="Covert Now"></center>
</td>
</tr>
</table>
</form>

 <a href="logout.php" class="btn btn-danger">Sign Out</a>
</body>
</html>



