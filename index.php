<?PHP
 $con = mysqli_connect("localhost","root","12345678","test");
 mysqli_query($con, "SET CHARACTER SET UTF8");
  $sql='select * from tbl_user';
  $result = mysqli_query($con,$sql) or die(mysqli_error()."<hr/>Line: ".___LINE___."<br/>$sql");
   while($rs=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $json[] = $rs;
   }//end while
 
   header('Content-Type: application/json; charset=utf-8');
   echo json_encode($json);
   
    mysqli_free_result($result);
  mysqli_close($con);
  
  
//mysql_query("SET NAMES UTF8");
//mysql_query("SET character_set_results=utf8");
//mysql_query("SET character_set_client=utf8");
//mysql_query("SET character_set_connection=utf8");

?>
