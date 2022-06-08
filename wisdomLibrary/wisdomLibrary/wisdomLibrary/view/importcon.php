
<?php
    include "connection.php";

   if(isset($_FILES['bookFile'])){
      $errors= array();
      $file_name = $_FILES['bookFile']['name'];
      $file_size =$_FILES['bookFile']['size'];
      $file_tmp =$_FILES['bookFile']['tmp_name'];
      $file_type=$_FILES['bookFile']['type'];
      $point=".";
 

     $fff=explode($point,$file_name);
      $file_ext=strtolower(end($fff));
      $extensions= array("csv","txt",);
      
      if(in_array($file_ext,$extensions)=== false){
        $errors[]="extension not allowed, please choose a CSV file.";
      }
      
      if($file_size > 2097152){
        $errors[]='File size must be excatly 2 MB';
      }
      
      if(empty($errors)==true){
        if(move_uploaded_file($file_tmp,"./upLoadedFiles".$file_name)){
          $CSVfp = fopen("./upLoadedFiles".$file_name, "r");
          $couter=0;
          if($CSVfp !== FALSE) {
            while(!feof($CSVfp)) {
              $data = fgetcsv($CSVfp, 800, ",");
              
              
              if(isset($data[1])){
                $ISBN=(int)$data[1];
                $Edition  = (int)$data[5];
                $pubyr = (int)$data[6];
                $shelfnum = (int)$data[8];
                if($couter>0){
                       

                       $sql = "INSERT INTO `book`( `ISBN`, `Title`, `Language`, `Category`, `Edition`, `Publication Year`, `Author`, `Shelf_num`, `Status`) 
                       VALUES ('$ISBN','$data[2]','$data[3]','$data[4]','$Edition','$pubyr','$data[7]','$shelfnum ','$data[9]')";
                       $couter++;

                        try{


                      mysqli_query($db,$sql);  
                      
                       header("location:../import.php");
                    
                    }catch(Exception $e){
                      echo "404 Error".$e;

                  
                     }
                  



                     }
                    
                       else{

                      $couter++;
                     }
             
                    
                    }

                  
                   
                        
                }
            }
             fclose($CSVfp);
         }  
      }
      else{
         print_r($errors);
      }
   }
?>