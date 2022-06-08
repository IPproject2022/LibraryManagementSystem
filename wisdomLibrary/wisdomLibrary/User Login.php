<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>


    <body>
        <?php
    
    
    include 'db.php';
        if(isset($_POST['submit'])){
            
            $email = $_POST['email'];
            $psw = $_POST['pass'];
            
            $s= "select * from user where email='$email' and password = '$psw'";
            
            $qu= mysqli_query($con, $s);
            if(mysqli_num_rows($qu)>0){
                $f= mysqli_fetch_assoc($qu);
                $_SESSION['id']=$f['id'];
                header ('location://localhost/wisdomLibrary/Dashboard for User with Search.php');
            }
            else{
                echo 'username or password does not exist';
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
                            <li><a href="IssueBook.php">Book Request</a></li>
                            <li><a href="Book donation.php">Donate</a></li>
                            <li><a href="index.php">HOME</a></li> </ul>
                
                        <ul class="sidenav" id="mobile-links">
                        <li><a href="Dashboard for user with search.php">Home for user</a></li>
                            <li><a href="Event Display.html">Events</a></li>
                            <li><a href="IssueBook.php">Book Request</a></li>
                            <li><a href="Book donation.php">Donate</a></li>
                            <li><a href="index.php">HOME</a></li> </ul>
                           
                          </ul>
                      
                          
        
                </div></nav></header>
        <div class="container">
            <h1>
                Register or Login form
            </h1>
            <form method = "post">
                <label>Email/Username</label>
                <div class="input-field">
                <input type="email" id="email" required name = "email"></div>
                <label>Password</label>
                <div class="input-field">
                <input type="password" id="password" required name = "pass"></div>
                <div class = "input-field">
               <input type="submit" name="submit" value="Submit" class="btn btn-primary">
</div>
    
            </form>
            <h3>New Here</h3>
            <a href="Registration for user.php" id="register">Register</a>
        </div>
    
        <?php include 'footer.php'?>

    </body>
</html>
</body>
</html>