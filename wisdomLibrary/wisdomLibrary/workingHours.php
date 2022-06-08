<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
<body>
    <header>
      
        <nav class="nav-wraper indigo">
            <a href="#" class="brand-logo">WISDOM LIBRARY</a>

            <div class="container">
                <a href="#" class="sidenav-trigger" data-target="mobile-links">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right" hide-on-med-and-down="">
                    <li><a href="report.php">GENERATE REPORT</a></li>
                    <li><a href="Event Registration.php">UPDATE EVENTS</a></li>
                    <li><a href="Book Update.php">UPDATE BOOKS</a></li>
                    <li><a href="index.php">HOME</a></li>
                     </ul>
                    
        
                <ul class="sidenav" id="mobile-links">
                  <li><a href="report.php">GENERATE REPORT</a></li>
                  <li><a href="Event Registration.pho">UPDATE EVENTS</a></li>
                  <li><a href="Book Update.pho">UPDATE BOOKS</a></li>
                  <li><a href="index.php">HOME</a></li>
                   </ul>
               </div></nav>
        <div class="container">
    <h1>Working hours of the library</h1>
    <ul>
        <li>Monday - Thursday</li>
        <li> 9:00 AM - 6:00 PM</li>
        <li>Friday</li>
        <li> 9:00 AM - 6:00 PM</li>
        <li>Saturday - Sundayday</li>
        <li> 9:00 AM - 5:00 PM</li>
        <li>PUBLIC HOLIDAY</li>
        <li>CLOSE</li>
    </ul>
    <details>
    <summary>
    FAQ
    </summary>
    <p>How can I access library materials?</p>
    <p>How can I donate book to the library?</p>
    <p>How many days do the library works?</p>
    <p>What is the mission of the library?</p>
    </details></div>
    <?php include 'footer.php'?>


</body>
</html>