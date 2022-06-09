<?php
require('header.php');
require('nav.php');
?>
<title>Event Handling</title>
<?php
include('db.php');
if($_SESSION == null)
{
    header("Location://localhost/WisdomLibrary/wisdomLibrary/view/librarianLogin.php");
}
else{

    if(isset($_GET['update']))
    {        $ID = $_GET['ID'];
            $query = "SELECT * FROM events where ID = $ID";
            $query_run = mysqli_query($con, $query);
            $check_events = mysqli_num_rows($query_run) > 0;
    
            if($check_events)
            {
                $row = mysqli_fetch_array($query_run);
                
                
    ?>

    <form method="POST">
        <label>Event Name</label>
        <div class="input-field">
        <input type="text" name="ename" value = '<?php echo $row['eventName'];?>'></div>

        <label>Event Location</label>
        <div class="input-field">
        <input type="text" name="elocation" value = '<?php echo $row['location'];?>'></div>
        
        <label>Event Description</label>
        <div class="input-field">
        <input type="text" name="description" value = '<?php echo $row['description'];?>'></div>
        
        <label>Event Date</label>
        <div class="input-field">
        <input type="text" name="date" value = '<?php echo $row['schedule'];?>'><br></div>
        <div class="input-field">
    
    
        <button class="waves-effect waves-light btn-small" name= "update">Update</button>
    </form>
    </body>
    <?php
            }
    if(isset($_POST['update'])){

        $eventName = $_POST['ename'];
        $eventLocation = $_POST['elocation'];
        $eventDescription = $_POST['description'];
        $eventDate = $_POST['date'];


        $query  = ("UPDATE `events` SET `eventName` = '$eventName', `location` = '$eventLocation', `description` = '$eventDescription',
        `schedule` = '$eventDate' WHERE `ID` = $ID");

    
       $eventUpdated = mysqli_query($con, $query);

 if($eventUpdated){
        ?>
        <script> 
            alert("The selected event has been successfully updated!");
            
        <?php
         header("Location://localhost/event/EventLibrarian.php");
        }
        else{?>
            alert("Updating the event has failed!");
        
            <?php
        }
        }     
 
       
    }


    if(isset($_GET['delete'])){
        $ID = $_GET['ID'];
        $query = ("DELETE FROM `events` WHERE `ID` = $ID");
       $eventDeleted = mysqli_query($con, $query);
      
 if($eventDeleted){
        ?>
        <script> 
            alert("The selected event has been successfully deleted!");
            
        <?php
         header("Location://localhost/event/EventLibrarian.php");
        }
        else{?>
            alert("Deleting the event has failed!");
        
            <?php
        }
        }     


    if(isset($_GET['addNew']))
    {             
    ?>

    <form method="POST">
        <div class= "container">
        <label>Event Name</label>
        <div class="input-field">
        <input type="text" name="ename"></div>

        <label>Event Location</label>
        <div class="input-field">
        <input type="text" name="elocation"></div>
        
        <label>Event Description</label>
        <div class="input-field">
        <input type="text" name="description"></div>
        
        <label>Event Date</label>
        <div class="input-field">
        <input type="date" name="date"><br></div>
        <div class="input-field">
    
    
        <button class="waves-effect waves-light btn-small" name= "addEvent">ADD EVENT</button>
    </div>
    </div>
    </form>
    </body>
    <?php
            }


        if(isset($_POST['addEvent'])){

        $eventName = $_POST['ename'];
        $eventLocation = $_POST['elocation'];
        $eventDescription = $_POST['description'];
        $eventDate = $_POST['date'];


        $query  = ("INSERT into `events` (`eventName`, `location`, `description`, `schedule`) values ('$eventName', '$eventLocation', '$eventDescription',
    '$eventDate')");
    
       $eventAdded =  mysqli_query($con, $query);
        
if($eventAdded)
{header("Location://localhost/event/EventLibrarian.php");
?>
<script> 
    alert("A new event has been successfully added!");
</script>
    
<?php
}
else{?>
<script>
    alert("Adding a new event failed!");
    </script>

    <?php
}
}      
}
    require('footer.php');
?>
