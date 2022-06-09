<html>
    <head>
<body>
<title>Sorting books </title>
</head>
<body>
<?php
	$dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'librarymanagement';
    $mysqli = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
    if($mysqli->connect_errno){
        printf("connection fail:%<br/>",$mysqli->connect_error);
      exit();
    }
    printf('connected successfuly.<br>');
    $sql = "SELECT author,title,category FROM books  order by author asc";
    $result = $mysqli->query($sql);
           
    if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
          printf("author: %s, title: %s, category: %d <br />", 
             $row["author"], 
             $row["category"], 
             $row["title"]);
       }
    } else {
        printf('No record found.<br />');
     }
     mysqli_free_result($result);
     $mysqli->close();
  ?>
</body>
</html>
              


