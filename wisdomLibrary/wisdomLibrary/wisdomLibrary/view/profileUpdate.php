<?php
if(isset($_SESSION)){
require('header.php');
require('nav.php');

include('db.php');

if(isset($_GET['update']) && isset($_SESSION['username']))
{       $email = $_SESSION['username'];
        
        $query = "SELECT * FROM user where email = '$email'";
        $query_run = mysqli_query($con, $query);
        $check_user = mysqli_num_rows($query_run) > 0;
 
        if($check_user)
        {
            $row = mysqli_fetch_array($query_run);
            
             
?>
<div class="container">
<form method="POST">
    <label>First Name</label>
    <div class="input-field">
    <input type="text" name="fname" value = '<?php echo $row['firstName'];?>'></div>

    <label>Middle Name</label>
    <div class="input-field">
    <input type="text" name="mname" value = '<?php echo $row['middleName'];?>'></div>

    <label>Last Name</label>
    <div class="input-field">
    <input type="text" name="lname" value = '<?php echo $row['lastName'];?>'></div>

    <label>Date of Birth</label>
    <div class="input-field">
    <input type="date" name="date" value = '<?php echo $row['DoB'];?>'><br></div>
   

    <label>Profile Image</label>
    <div class="input-field">
    <input type="file" name="profile_image" value = ""/>
    <!-- upload pp -->
    </div><br><br>
    
      <button class="waves-effect waves-light btn-small" name= "update">Update</button>
</form>
        </div>
</body>
 <?php
        }
if(isset($_POST['update'])){
    
    $firstName = $_POST['fname'];
    $middleName = $_POST['mname'];
    $lastName = $_POST['lname'];
    $DoB = $_POST['date'];
   
    echo $firstName;
    echo $middleName;
    echo $lastName;
    echo $DoB;
    echo $email;



    $query  = ("UPDATE `user` SET `firstName` = '$firstName', `middleName` = '$middleName', `lastName` = '$lastName',
     `DoB` = '$DoB', WHERE `email` = $email");
   
    $profileUpdated = mysqli_query($con, $query);

if($profileUpdated){
    echo '<script type ="application/JavaScript"> alert("Your profille has been successfully updated!"); window.location.href="WisdomLibrary/dashboard for user with search.php"; </script>';
  
        ?>
        <script> 
            
        </script>
            
        <?php
         header("Location://localhost/event/Dashboard for user with search.php");
        }
        else{?>
        <script> 
            alert("Updating your profile has failed!");
            </script>
           <?php
        
        }     
 
       

}
}

else{
     header("Location://localhost/WisdomLibrary/wisdomLibrary/view/User Login.php");
}
}
?>