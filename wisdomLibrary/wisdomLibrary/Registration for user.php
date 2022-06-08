<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
<body>
  <?php
 include 'db.php';
if(isset($_POST['submit'])){
   
  $fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
  $email = $_POST['email'];
  $age = $_POST['birthdate'];
  $psw = $_POST['pass'];
  $image = $_POST['profile_image'];
  $target = "upload/"; 
$target = $target . basename( $_FILES['profile_image']['name']); 

//This gets all the other information from the form 
$pic = ($_FILES['profile_image']['name']); 

//Writes the photo to the server 
if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $target)) { 
    //Tells you if its all ok 
    echo "The file ". basename( $_FILES['profile_image']['name']). " has been uploaded, and your information has been added to the directory"; 
} else { 
    //Gives an error if its not 
    echo "Sorry, there was a problem uploading your file.";
} 

    $i = "INSERT INTO user(firstName, middleName, lastName, email, DoB, password, image_url)  VALUES(' $fname','$mname','$lname', '$email','$age', '$psw', '$target')";
	
		if(mysqli_query($con, $i)){
		echo "inserted successfully..!";
       header ('Location://localhost/wisdomLibrary/User Login.php');
	}
}

?>
    <header>
      
        <nav class="nav-wraper indigo">
            <a href="#" class="brand-logo">WISDOM LIBRARY</a>
            
            <div class="container">
                <a href="#" class="sidenav-trigger" data-target="mobile-links">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right" hide-on-med-and-down="">
                    <li><a href="Dashboard for user with search.php">Home for user</a></li>
                    <li><a href="Event Display.html">Events</a></li>
                    <li><a href="IssueBook.html">Book Request</a></li>
                    <li><a href="Book donation.html">Donate</a></li>
                    <li><a href="index.html">HOME</a></li> </ul>
        
                <ul class="sidenav" id="mobile-links">
                    <li><a href="Dashboard for user.html">Home for user</a></li>
                    <li><a href="Event Display.html">Events</a></li>
                    <li><a href="IssueBook.html">Book Request</a></li>
                    <li><a href="Book donation.html">Donate</a></li>
                    <li><a href="index.html">HOME</a></li> </ul>
                   
                  </ul>
              
                  

        </div></nav>
    </header>
    <div class="container">
        <h1>
            Registration form
        </h1>
        <form method="POST">
          <label>First Name</label>
                <div class="input-field">
                <input  type="text" id="fname" name="fname"></div>
            
                <label for="middle_name">Middle Name</label>
            <div class="input-field">
        <input type="text" id="mname" name="mname"></div>
        
        <label for="last_name">Last Name</label>
          <div class="input-field">
          <input type="text" id="lname" name="lname"></div>
         
          <label class="active" for="last_name">Email/Username</label>
              <div class="input-field">
              <input type="text" id="Remail" name="email"></div>
              <label>Date of Birth</label>
              <div class="input-field">
                
                <input type="date" id="age" name="birthdate"><br><br></div>
                     
                           <label for="psd">Password</label>
                          <div class="input-field">
                          <input type="password" id="Rpass" name="pass" class="validate"></div>
                          
            <label for="copswd">Confirm password</label>
            <div class="input-field" >
              <input type="password" id="Rpassc"></div>
          
              <label>
                <input name="group1" type="radio" value="m" checked />
                <span>Male</span>
              </label>
              <label>
                <input name="group1" type="radio" value = "f" checked />
                <span>Female</span>
              </label><br><br>
              <div class="input-field">
              <label>Upload Your Image
                <input type="file" name="profile_image" />
            </label></div><br><br>
            <div class = "input-field">
               <input type="submit" name="submit" value="Submit" class="btn btn-primary">
</div>
    
  </form>
       
    </div><br><br>
    
   
    <?php include 'footer.php'?>
    
</body>
</html>