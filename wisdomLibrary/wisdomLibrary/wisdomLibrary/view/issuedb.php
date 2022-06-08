<?php
require_once('db.php');

$_SESSION['var']=0;
$ISBN="";
{
	$fine=$_POST["fine"];
	$userId=$_POST["userId"];
	$ISBN=$_POST["ISBN"];
	$dateOfIssue=$_POST["dateOfIssue"];


	$query="UPDATE books SET QUANTITY=QUANTITY-1 WHERE ISBN='$ISBN' AND QUANTITY!=0";
	$res=mysqli_query($con, $query);

	if($res){

		$sql="INSERT INTO issuedbooks VALUES('$ISBN','$userId',  '$dateOfIssue', '$fine' )";
		$result=mysqli_query($con, $sql);

	}
	mysqli_close($con);
header('Location:issuebooks.php');
}