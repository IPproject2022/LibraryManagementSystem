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
      header("location:../report.php");
}
  
    ?>