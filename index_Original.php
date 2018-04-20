<?PHP
 $con = mysqli_connect("localhost","root","12345678","test");
  $sql='select * from tbl_user';
  $result = mysqli_query($con,$sql) or die(mysqli_error()."<hr/>Line: ".___LINE___."<br/>$sql");
   while($rs=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $json[] = $rs;
   }//end while
 
   header('Content-Type: application/json');
   echo json_encode($json);
   
    mysqli_free_result($result);
  mysqli_close($con);
  

?>
