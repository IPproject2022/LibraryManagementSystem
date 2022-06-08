<?php
require_once('db.php');
include('Dashboard for user with search.php');?>

<div class="main-content-inner">
<div class="row">
<div class="col-12">
            <div class="card mt-5">
                <div class="card-body table-responsive">
	<?php echo "<h3>All books currently issued by ".$_SESSION['key']." :</h3>" ?>
	<table class="table table-striped text-center">
	  <thead>
	    <tr>
	      <th scope="col"> Title</th>
	      <th scope="col">Author</th>
        <th scope="col">Category</th>
	    </tr>
	  </thead>
	  <tbody>
		<?php 
            include('db.php');
            $a=$_SESSION['key'];
			$query="SELECT * FROM books,issuedbooks WHERE books.ISBN = issuedbooks.ISBN AND userid=$a";

            if(!($result = mysqli_query($con,$query))){

                echo "Retrieval of data from database failed".mysql_error();
            }
            if(mysqli_num_rows($result)>0){

                while ($row=mysqli_fetch_assoc($result)){

                    echo "<tr><td>".$row["ISBN"]."</td><td>".$row["Title"]."</td><td>".$row["Author"]."</td>.<td>".$row["Category"]."</td</tr>";
                }
            }
            else{

                echo "0 Results";
            }

            mysqli_close($con)?>
        </tbody>
	</table>
</div>
</div>
</div>
</div>
</div>