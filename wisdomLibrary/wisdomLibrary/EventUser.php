 <?php
 if(isset($_SESSION)){
 require('header.php');
 ?>

 <title>EVENTS</title>
 
      <?php
      require('nav.php');
        
       $query = "SELECT * FROM events";
       $query_run = mysqli_query($con, $query);
       $check_events = mysqli_num_rows($query_run) > 0;
?>
<div class="container">  
<div class="row">
<div class="col S12 l6">  
     <?php
       if($check_events)
       {
            while($row = mysqli_fetch_array($query_run))
            {
?> 
     <div class="card">
          <div class="card-image">
            <img src="books.jpg" alt="" width = 200 height = 200>
          </div>
          <div class="card-content"> 
                                       
            <span class="card-title"> <?php echo $row['eventName'];?></span>
            <p><?php echo $row['description'];?></p><br>
            <p>LOCATION: <?php echo $row['location'];?></p><br>
            <p>DATE: <?php echo $row['schedule'];?></p>
          </div>
            <div class="card-action">
                
          <form action = "userEvent.php" method = "POST">
               <button type = "submit" name = "attend">Attend</button>
          <input name = "ID" value = '<?php echo $row['ID'];?>'> </input>
          </form>
            </div>
     </div>

<?php

               
            }
       }
        else
       {
            echo "no event found";
       }  ?>
      
      
            
          </div>
</div>
</div>

<?php
 require('footer.php');
}

else{
     header("Location:User Login.php");
}
?>