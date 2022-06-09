<?php 
    require('header.php');
    require('nav.php');
    ?>
    <title>Event Registration</title>
<?php
 if(isset($_SESSION))
 {
     if(isset($_POST['attend']) && isset($_POST['register']))
   {
        
        $username = $_POST['username'];
        include('db.php');  
        $query = "SELECT * FROM user where `email` ='$username';";
        $query_run = mysqli_query($con, $query); 
        $row = mysqli_fetch_array($query_run);

if($query_run == 0){
    ?>
    <script> 
    alert("Please register to attend events!")
    </script>
    <?php
header("Location://localhost/wisdomLibrarywisdomLibrarian/view/RegistrationforUser.php");
}
else{   
                
        $eventID = $_POST['eventID'];
        


        $query = ("INSERT INTO eventAttendees (username , eventID) VALUES ('$username', '$eventID')");
        $attendeeRegistered = mysqli_query($con, $query); 
    


 if($attendeeRegistered){
    ?>
    <script> 
        alert("You have registered to attend the selected event successfully!");
        
    <?php
     header("Location://localhost/event/EventUser.php");
    }
else{?>
        alert("Registration to attend the selected event has failed!");
    
        <?php
    }
    
       
} 
   }

?>

    <div class="container">
        <h1>
            Attend Event
        </h1>
        <form method="POST">
            <label>Email</label>
            <input type="text" id="username" name="username"><br></div>
            <div class="input-field">
        <button class="waves-effect waves-light btn-small" name= "register">Register</button>
        </form>
       
    </div>
    
   
 <?php  
  
}else
 {
     header('Location://localhost/wisdomLibrary/User Login.php');
  } 
require('footer.php');
        ?>