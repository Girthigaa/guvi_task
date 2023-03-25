  <?php 
  $email=$_POST["email"];
  $pass=$_POST["password"];
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="guvi";
  $dbase= new mysqli($servername,$username,$password,$dbname);
  if($dbase->connect_error){
    die("Connection ".$conn->connect_error);
  }
  else
{ 
    $s=$c->prepare("insert into det(email,password) values(?,?)");
     $s->bind_param("ss",$email,$pass); 
$s->execute();
echo '<script>location.href = "home.php";</script>';
$s->close();
 $c->close();

} ?>
  ?>