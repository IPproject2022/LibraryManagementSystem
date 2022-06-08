<?php 
if(isset($_POST["submit"])){
  // echo "<h4>added successfully</h4>";

  include('connection.php');

 

  $status=$_POST["group1"];
  $userid=9;


 $title=$_POST["title"];
	if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',   $title)){
			echo 'title must be a made up of alphabets only';
		}

    $author=$_POST["author"];
    	if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',   $author)){
			echo 'author must be a made up of alphabets only';
		}

	 $quan=$_POST["quan"];
    if (!preg_match('/^\d+$/', $quan)) {
      echo 'quantitiy expressed interms of number only';
		}
   
 $pubyr=$_POST["pubyr"];
    if (!preg_match('/^\d+$/', $pubyr)) {
      echo 'publication year expressed interms of number only';
		}
  
  $edition=$_POST["edition"];
    if (!preg_match('/^\d+$/', $edition)) {
      echo 'edition expressed interms of number only';
		}
   
  $lang=$_POST["lang"];

    if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',   $lang)){
			echo 'lanugage must be a made up of alphabets only';
		}
   

      $cate=$_POST["cate"];

    if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',   $cate)){
			echo 'category must be a made up of alphabets only';
		}



$sql="INSERT INTO `donated books`( `UsersId`, `Title`, `Author`, `Edition`, `Languge`, `PublicationYear`, `Quantitiy`,`Category`) 
VALUES ('$userid','$title','$author','$edition','$lang','$pubyr','$quan','$cate')";

try{
  if(mysqli_query($db,$sql)){
    //echo "<h4>added successfully</h4>";
  
  }
  else {echo "Error";}

}catch(Exception $e){
   echo "error";
echo $e;

 }
 
 
}

header("location:../book donation.php");


 