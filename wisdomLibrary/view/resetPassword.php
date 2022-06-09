<?php
include('header.php');
include('nav.php');

include('db.php');

if(isset($_GET))
{
if($_GET['key'] && $_GET['reset'])
{
  $email=$_GET['key'];
  $pass=$_GET['reset'];

  
  $select=mysqli_query($con, "SELECT `email`, `password` from user where `email`='$email' and `code` ='$pass'");



  if(mysqli_num_rows($select)==1)
  {
    ?>
    <form method="post">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <p>Enter New password</p>
    <input type="password" name='password'>
    <input type="submit" name="submit_password">
    </form>
    <?php
  }
}
include('footer.php');
if(isset($_POST['submit_password']))
{
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $hash = password_hash($pass, password_default);
 
  $select=mysqli_query($con,"UPDATE user set `password`='$hash' where email='$email'");
  header("Loaction://localhost/wisdomLibrary/wisdomLibrary/view/Dashboard for user with search.php");
}
}

?>
