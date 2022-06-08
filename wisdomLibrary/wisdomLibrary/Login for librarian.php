<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
       <style>
       header{
         background: url(img/man.jpg);
         background-size: cover;
         background-position: center;
         min-height: auto;
       }
      
       @media screen and (max-width: 670px){
         header{
           min-height: 500px;
         }
       }
   
     </style>  
    <title>Login for librarian</title>
</head>

    <body>
        <?php
    
    
        include 'db_conn.php';
            if(isset($_POST['submit'])){
                
                $email = $_POST['email'];
                $psw = $_POST['pass'];
                
                $s= "select * from admin where email='$email' and password = '$psw'";
                
                $qu= mysqli_query($con, $s);
                if(mysqli_num_rows($qu)>0){
                    $f= mysqli_fetch_assoc($qu);
                    $_SESSION['id']=$f['id'];
                    header ('location:Dashboard for librarian.php');
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
                        <li><a href="Dashboard for librarian.php">Home for Librarian</a></li>
                        <li><a href="Event Display.php">Events</a></li>
                        <li><a href="IssueBook.php">Book Request</a></li>
                        <li><a href="Book donation.php">Donate</a></li>
                        <li><a href="index.php">HOME</a></li> </ul>
            
                    <ul class="sidenav" id="mobile-links">
                    <li><a href="Dashboard for librarian.php">Home for Librarian</a></li>
                        <li><a href="Event Display.php">Events</a></li>
                        <li><a href="IssueBook.php">Book Request</a></li>
                        <li><a href="Book donation.php">Donate</a></li>
                        <li><a href="index.php">HOME</a></li>  </ul>
                       
                      </ul>
                  
                      
    
            </div></nav>
      
        
        <div class="container">
            <h1>
                Login page
            </h1><br><br>
            <form  method="post">
                
                <label>Username/ID</label>
                <div class="input-field">
                <input type="text" id="pswd" name="pass"><br></div>
                <label>Password</label>
                <div class="input-field">
                <input type="password" id="Remail" name="email"><br>
                <div class = "input-field">
               <input type="submit" name="submit" value="Submit" class="btn btn-primary">
</div>
    
            </form>
           
        </div>
        </div>
        <footer class="page-footer">
        
            <div class="row">
                <div class="col s4"> <p>Mission: 
                    This public library is to foster the love of reading, 
                    and to develop critical thinking skill of the youths.
                </p></div>
        <div class="col s4"> <p>Vision: 
        Our vision is to get youths who are ethical
        users, critical thinkers, enthuisiastic readers.
        
        </p></div>
        <div class="col s4"> <p>Goal: 
        Our goal is is to promot 
        literacy and enjoyment of reading.
        
        </p></div>
        
        </div>
        <div class="footer-copyright">
        <div class="container">
        © 2014 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#">More Links</a>
        </div>
        </div>
        </footer>
<script type="text/javascript" src="loginRegister.js"></script>
    </body>
</html>
</body>
</html>