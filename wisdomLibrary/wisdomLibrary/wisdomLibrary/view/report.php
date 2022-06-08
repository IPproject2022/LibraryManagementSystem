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
         min-height: 500px;
       }
      
       @media screen and (max-width: 670px){
         header{
           min-height: 500px;
         }
       }

       .lists{
         text-decoration: none;
         align-items: center;

       }
   
     </style>  
    <title>Report</title>
</head>
<body>
    <!-- <header>-->
      
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


    

    <h1>Generete report</h1><br><br>



      <form action="" method="post">
        show tabels for:<input type="text" name="query">
        <input type="submit" name="search" value="search">
       </form>

       

            


<?php

  include("connection.php");

if(isset($_POST["search"])){
  $query=$_POST["query"];
 //$query="book";


 $sql="SELECT * FROM  `$query` ";


//$result=mysqli_query($db,$sql);



if ($query=="users"){
   // echo "users";
   $result=mysqli_query($db,$sql);
if (mysqli_num_rows($result)>0){
   $oute=<<<EOD
         
            <table class="fl-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Email </th>
           <th>DOB </th>
            <th> Age</th>
            <th> Gender</th>
           
        </tr>
        </thead>
        <tbody>
      
      EOD;
      echo $oute;

  while($row=mysqli_fetch_assoc($result)){
    $id=$row["id"];
    $firstname=$row["first name"];
    $middlename=$row["middle name"];
    $lastname=$row["last name"];
    $email=$row["email"];
    $password=$row["password"];
    $DOB=$row["DOB"];
    $age=$row["age"];
    $gender=$row["gender"];

    $out=<<<EOD
         
          <tr>
          <td>$id</td>
          <td>$firstname</td>
          <td> $middlename</td>
          <td>$lastname</td>
          <td>$email</td>
          <td> $DOB</td>
          <td>$age</td>
          <td>$gender</td>
          </tr>
      
      EOD;
      echo $out;
  }}

}

else if ($query=="book"){
    $result=mysqli_query($db,$sql);
 
if (mysqli_num_rows($result)>0){
   $oute=<<<EOD
         
            <table class="fl-table">
        <thead>
        <tr>
            <th>ISBN</th>
            <th>Title</th>
            <th>Language</th>
            <th>Category</th>
            <th>Edition </th>
           <th>Publication year </th>
            <th> Author</th>
            <th>Shelf_num</th>
            <th>Status</th>
            <th></th>
           
        </tr>
        </thead>
        <tbody>
      
      EOD;
      echo $oute;

  while($row=mysqli_fetch_assoc($result)){
    $ID=$row["ID"];
    $isbn=$row["ISBN"];
    $title=$row["Title"];
    $Language=$row["Language"];
    $category=$row["Category"];
    $edition=$row["Edition"];
    $pubyr=$row["Publication Year"];
    $author=$row["Author"];
    $shelfnum=$row["Shelf_num"];
    $status=$row["Status"];

    $out=<<<EOD
         
          <tr>
          <td>$isbn</td>
          <td>$title</td>
          <td> $Language</td>
          <td>$category</td>
          <td>$edition</td>
          <td>$pubyr</td>
          <td>$author</td>
          <td> $shelfnum</td>
          <td> $status</td>
          <td> <a href="edit.php?ID=$ID"><button>Edit</button></a></td>

          </tr>
      
      EOD;
      echo $out;
  }}

}

else if ($query=="issued books" ){
    $result=mysqli_query($db,$sql);
 
if (mysqli_num_rows($result)>0){
   $oute=<<<EOD
         
            <table class="fl-table">
        <thead>
        <tr>
            <th>ISBN</th>
            <th>userId</th>
            <th>dateOfIssue</th>
            <th>dateOfReturn</th>
            <th>issueID </th>
           <th>adminID </th>
           <th>edit </th>
           
           
        </tr>
        </thead>
        <tbody>
      
      EOD;
      echo $oute;

  while($row=mysqli_fetch_assoc($result)){

    $isbnI=$row["ISBN"];
    $userid=$row["userID"];
    $dateofissue=$row["dateofIssue"];
    $datereturn=$row["dateofReturn"];
    $issueid=$row["issueID"];
    $adminid=$row["adminID"];
   
    $out=<<<EOD
         
          <tr>
          <td>$isbnI</td>
          <td>$userid</td>
          <td> $dateofissue</td>
          <td>$datereturn</td>
          <td>$issueid</td>
          <td>$adminid</td>
          
          
          </tr>
      
      EOD;
      echo $out;
  }}

}

else if ($query=="returned books"){
    $result=mysqli_query($db,$sql);
 
if (mysqli_num_rows($result)>0){
   $oute=<<<EOD
         
            <table class="fl-table">
        <thead>
        <tr>
            <th>ISBN</th>
            <th>dateOfIssue</th>
            <th>dateOfReturn</th>
            <th>issueID </th>
            <th>returnID </th>
            <th>userID </th>
            <th>adminID </th>
            <th>edit </th>
           
           
        </tr>
        </thead>
        <tbody>
      
      EOD;
      echo $oute;

  while($row=mysqli_fetch_assoc($result)){

    $isbnR=$row["ISBN"];
    $userid=$row["userID"];
    $dateofissue=$row["dateofissue"];
    $datereturn=$row["dateofReturn"];
    $issueid=$row["issueID"];
    $adminid=$row["adminID"];
    $returnid=$row["returnID"];

   
    $out=<<<EOD
         
          <tr>
          <td>$isbnR</td>
          <td>$userid</td>
          <td> $dateofissue</td>
          <td>$datereturn</td>
          <td>$issueid</td>
          <td>$adminid</td>
          <td>$returnid</td>

          
         

          </tr>
      
      EOD;
      echo $out;
  }}

}

else if ($query=="available books"){
    
 $sql="SELECT * FROM `book` WHERE Status='A'  ";


$result=mysqli_query($db,$sql);
 
if (mysqli_num_rows($result)>0){
   $oute=<<<EOD
         
            <table class="fl-table">
        <thead>
        <tr>
            <th>ISBN</th>
            <th>Title</th>
            <th>Language</th>
            <th>Category</th>
            <th>Edition </th>
           <th>Publication year </th>
            <th> Author</th>
            <th>Shelf_num</th>
            <th>Status</th>
            <th></th>
           
        </tr>
        </thead>
        <tbody>
      
      EOD;
      echo $oute;

  while($row=mysqli_fetch_assoc($result)){
    $ID=$row["ID"];
    $isbnA=$row["ISBN"];
    $title=$row["Title"];
    $Language=$row["Language"];
    $category=$row["Category"];
    $edition=$row["Edition"];
    $pubyr=$row["Publication Year"];
    $author=$row["Author"];
    $shelfnum=$row["Shelf_num"];
    $status=$row["Status"];

    $out=<<<EOD
         
          <tr>
          <td>$isbnA</td>
          <td>$title</td>
          <td> $Language</td>
          <td>$category</td>
          <td>$edition</td>
          <td>$pubyr</td>
          <td>$author</td>
          <td> $shelfnum</td>
          <td> $status</td>
          <td> <a href="edit.php?ID=$isbnA"><button>Edit</button></a></td>

          </tr>
      
      EOD;
      echo $out;
  }}

}
}
  
    ?>  
    
  

      
        <tbody>
    </table>
    <style>




/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
    margin-bottom:150px;
    margin-top:50px;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}

    </style>

    




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
 
    
</body>
</html>