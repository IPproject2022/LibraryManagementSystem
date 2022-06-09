



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
         /* min-height: 500px; */
       }
      
       @media screen and (max-width: 670px){
         header{
           /* min-height: 500px; */
         }
       }

       .lists{
         text-decoration: none;
         align-items: center;

       }
   
     </style>  
    <title>file</title>
</head>
<body>
    <header>
      
        <nav class="nav-wraper indigo"> 
            <a href="#" class="brand-logo">WISDOM LIBRARY</a>

            <div class="container">
                <a href="#" class="sidenav-trigger" data-target="mobile-links">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right" hide-on-med-and-down="">
                    
                    <li><a href="Event Registration.html">UPDATE EVENTS</a></li>
                    <li><a href="bookAdd.html">ADD BOOKS</a></li>
                    <li><a href="Book Update.html">UPDATE BOOKS</a></li>
                    <li><a href="index.html">HOME</a></li>
                     </ul>
                    
        
                <ul class="sidenav" id="mobile-links">
                  <li><a href="report.html">GENERATE REPORT</a></li>
                  <li><a href="Event Registration.html">UPDATE EVENTS</a></li>
                  <li><a href="bookAdd.html">ADD BOOKS</a></li>
                  <li><a href="Book Update.html">UPDATE BOOKS</a></li>
                  <li><a href="index.html">HOME</a></li>
                    
                   
                  </ul>
              
                  

        </div></nav>
    </header> 
  

    
      <div  class="form1">

        <div>
 <div>
<h1>Add books in csv format</h1>

   </div>
          <form action="./contro/import.php" method="POST" enctype="multipart/form-data">
             file here:<input type="file" name="bookFile" />
             <input type="submit" name="submit">
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
</div></footer>
 <style>

.form1{

  padding: 80px;
 display: flex;
 justify-content:center;

 


}

body{

  display: flex;
  flex-direction: column;
  height: 100vh;
justify-content: space-between;
}

input{
background-color:#0cf2be;
}

 </style>
    
</body>
</html>