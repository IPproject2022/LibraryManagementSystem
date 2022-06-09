<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
<body>
<?php
    
    include 'db.php';
if(isset($_POST['submit'])){
session_start();
 
if(!isset($_SESSION["id"])){
	header("Location://localhost/wisdomLibrary/wisdomLibrary/view/User Login.php");
	exit();
}
$s="select * from user where id='$_SESSION[id]'";
$qu= mysqli_query($con, $s);
$f=mysqli_fetch_assoc($qu);

}

 


?>
    <header>
        <nav class = "nav-wraper indigo">
            <a href="" class="brand-logo">WISDOM LIBRARY</a>

            <div class="container">
                <a href="" class="sidenav-trigger" data-target="mobile-links">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right" hide-on-med-and-down>
                <li><a href = "Event Display.php">View Event</a></li>
                    <li><a href = "IssueBook.php">Request a book</a></li>
                    <li><a href = "Registration for user.php">Register/Login</a></li>
                    <li><a href = "Book donation.php">Donate</a></li>
                    <li><a href = "workingHours.php"></a> Working Hours</a></li>
                    <li><a href = "logout.php">Logout</a></li>
     
                    
                </ul>
        
    <ul class="sidenav" id="mobile-links">
        <li><a href = "Event Display.php">View Event</a></li>
                    <li><a href = "IssueBook.php">Request a book</a></li>
                    <li><a href = "Registration for user.php">Register/Login</a></li>
                    <li><a href = "Book donation.php">Donate</a></li>
                    <li><a href = "workingHours.php"></a> Working Hours</a></li>
                    <li><a href = "logout.php">Logout</a></li>
     
    </ul>

    </div>

        </nav>
    </header>
    
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="card mt-4">
                    <div class="card-header">
                        <h3>Search Books </h4>
          
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                            <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>


                            </div></div></div>
                      
                            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ISBN</th>
                                    <th>Author </th>
                                    <th>Title </th>
                                    <th>Category</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","librarymanagement");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM books WHERE CONCAT(isbn,author,title,category) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['ISBN']; ?></td>
                                                    <td><?= $items['author']; ?></td>
                                                    <td><?= $items['title']; ?></td>
                                                    <td><?= $items['category']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>         
    </div>  
 </div>  
 <div class="row">
     <div class = "cols12">
     <?php 

$userName = $_SESSION['username'];
$query = "SELECT * FROM user";
$query_run = mysqli_query($con, $query);
$row = mysqli_fetch_array($query_run);

$firstName = $row['firstName'];
$lastName = $row['lastName'];

echo $firstName." ".$lastName;
?>
<br>
<form action = "profileUpdate.php" method = "GET">
<button name="Update">Update Profile</button>
</form>

    </div>
 </div>                       
     <div class = "row">
         <div class = "col s12">
    <?php include 'footer.php'?></div>
</body>
</html>