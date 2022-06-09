<?php 
$url=$_SERVER["REQUEST_URI"];
$var=parse_url($url);
parse_str($var["query"],$results);



$bookid=$results['ID'];
$intid=(int) $bookid;
include("connection.php");
if(isset($_POST["submit"])){

$title=$_POST["title"];
$lang=$_POST["lang"];
$cate=$_POST["cate"];
$edit=$_POST["edit"];
$pub=$_POST["pub"];
$auther=$_POST["auth"];
$shelf=$_POST["shelf"];
$status=$_POST["status"];
$sql="UPDATE `book` SET `Title` = '$title', `Language` = '$lang', `Category` = '$cate',`Edition` = '$edit', `Publication Year` = '$pub', `Author` = '$auther', `Shelf_num` = '$shelf', `Status` = '$status' WHERE `book`.`ID` = $intid ";
mysqli_query($db,$sql);

//echo $auther;



}

$sql="SELECT * FROM `book` WHERE ID=$intid";

$result=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($result);
$title=$row["Title"];
$lang=$row["Language"];
$cate=$row["Category"];
$edit=$row["Edition"];
$pub=$row["Publication Year"];
$auther=$row["Author"];
$shelf=$row["Shelf_num"];
$status=$row["Status"];
//echo $title;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User login</title>
</head>
<body>
    <!DOCTYPE html>
<html>
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
         <title>User Login</title>
    <body>
       
       
        
       
            <header>
      
                <nav class="nav-wraper indigo">
                    <a href="#" class="brand-logo">WISDOM LIBRARY</a>
                    
                    <div class="container">
                        <a href="#" class="sidenav-trigger" data-target="mobile-links">
                            <i class="material-icons">menu</i>
                        </a>
                        <ul class="right" hide-on-med-and-down="">
                            <li><a href="Dashboard for user.html">Home for Visitor</a></li>
                            <li><a href="Event Display.html">Events</a></li>
                            <li><a href="IssueBook.html">Book Request</a></li>
                            <li><a href="Book donation.html">Donate</a></li>
                            <li><a href="index.html">HOME</a></li> </ul>
                
                        <ul class="sidenav" id="mobile-links">
                            <li><a href="Dashboard for user.html">Home for Visitor</a></li>
                            <li><a href="Event Display.html">Events</a></li>
                            <li><a href="IssueBook.html">Book Request</a></li>
                            <li><a href="Book donation.html">Donate</a></li>
                            <li><a href="index.html">HOME</a></li> </ul>
                           
                          </ul>
                      
                          
        
                </div></nav></header>
        <div class="container">
     
      <form action="" method="post">
      
 
      <?php

       $out=<<<EOD
         <div class="form__group">
         <input type="hidden"  class="form__input" id="name" value="$title" />
         <input type="hidden"  class="form__input" id="name" value="$title" />
         <input type="hidden" class="form__input" id="name" value="$title" />
         <label for="name" class="form__label">Title</label>
         <input type="text" class="form__input" name="title" id="name" value="$title" />
         

        

         <label for="name" class="form__label">language</label>
         <input type="text" name="lang" class="form__input" id="name" value="$lang" />
         
         <label for="name" class="form__label">category</label>
         <input type="text" name="cate"  class="form__input" id="name" value="$cate" />
          
         <label for="name" class="form__label">edition</label>
             <input type="text" name="edit"  class="form__input" id="name" value="$edit" />

             <label for="name" class="form__label">publition date</label>
             <input type="text" name="pub"  class="form__input" id="name" value="$pub" />

             <label for="name" class="form__label">author</label>
             <input type="text" name="auth"  class="form__input" id="name" value="$auther" />

             <label for="name" class="form__label">shelf number</label>
             <input type="text" name="shelf"  class="form__input" id="name" value="$shelf" />

             <label for="name" class="form__label">status</label>
          <input type="text" name="status"  class="form__input" id="name" value="$status" />
     
          <input type="submit" name="submit"  class="form__input" id="name" value="edit" />

          
                </div>
      
      EOD;
      echo $out;

      
      
      ?>



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

<style>
.container{
width:30%;
}

input{


    
}
.form__label {
  font-family: 'Roboto', sans-serif;
  font-size: 1.2rem;
  margin-left: 2rem;
  margin-top: 0.7rem;
  display: block;
  transition: all 0.3s;
  transform: translateY(0rem);
}

.form__input {
  font-family: 'Roboto', sans-serif;
  color: #333;
  font-size: 1.2rem;
	margin: 0 auto;
  padding: 1.5rem 2rem;
  border-radius: 0.2rem;
  background-color: rgb(255, 255, 255);
  border: none;
  width: 90%;
  display: block;
  border-bottom: 0.3rem solid transparent;
  transition: all 0.3s;
}

.form__input:placeholder-shown + .form__label {
  opacity: 0;
  visibility: hidden;
  -webkit-transform: translateY(-4rem);
  transform: translateY(-4rem);
}



</style>
</body>
</html>