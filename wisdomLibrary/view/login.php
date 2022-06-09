<? php
$connect = mysqli_connect('localhost', 'root', '', 'library') or die("connection failed");
  if(!empty($_POST['login']))
  {
  	$username = $_POST['username'];
  	$password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT)

  	$query = "select * from registration where email='$username' and password = '$hashedPassword'";
  	$result = mysqli_query($connect, $query);
  	$count = mysqli_num_rows($result);
  	if($count > 0)
  	{
  		echo 'log in successful';
  	}
  	else 
  	{
  		echo 'log in not successful';
  	}

  	mysqli_free_result($result);
  	mysqli_close($conn);
  }
?>