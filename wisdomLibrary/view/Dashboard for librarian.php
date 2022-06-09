<!DOCTYPE html>

<body>
<?php
    
    include 'db.php';
if(isset($_POST['submit'])){
session_start();
 
if(!isset($_SESSION["id"])){
	header("Location://localhost/wisdomLibrary/wisdomLibrary/view/Login for Librarian.php");
	exit();
}
$s="select * from user where id='$_SESSION[id]'";
$qu= mysqli_query($con, $s);
$f=mysqli_fetch_assoc($qu);

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
                <li><a href="report.php">GENERATE REPORT</a></li>
                  <li><a href="Event Registration.html">UPDATE EVENTS</a></li>
                  <li><a href="book add.php">ADD BOOKS</a></li>
                  
                  <li><a href="index.php">HOME</a></li>
                  <li><a href = "logoutForLib.php">Logout</a></li>
                    
        
                <ul class="sidenav" id="mobile-links">
                  <li><a href="report.php">GENERATE REPORT</a></li>
                  <li><a href="Event Registration.html">UPDATE EVENTS</a></li>
                  <li><a href="book add.html">ADD BOOKS</a></li>
                  
                  <li><a href="index.php">HOME</a></li>
                  <li><a href = "logoutForLib.php">Logout</a></li>
                   
                  </ul>
              
                  

        </div></nav>
    </header>
    
    <div class="container">
      <h1>Search Book</h1>
      <form>
          <input type="text" placeholder="search" name="search">
          <button type="submit"><i class="fa fa-search"></i>Go</button>
          <p>
            <label>
              <input name="group1" type="radio" checked value="title" />
              <span>Title</span>
            </label>
          </p>
          <p>
            <label>
              <input name="group1" type="radio" value="author" />
              <span>Author</span>
            </label>
          </p>
          <p>
            <label>
              <input class="group1 " name="group1" type="radio" value="Category" />
              <span>Category</span>
            </label>
          </p>
          
      </form>
   </div><br><br>
 
   <?php include 'footer.php'?>

</body></html>