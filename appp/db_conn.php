<?php 
class DbConnect{
private $sName = "db";
private $uName = "root";
private $pass = "";#şifrenizi giriniz
private $db_name = "docker_database";

public function connect(){
try {
    $conn = new PDO('mysql:host='.$this->sName . ';dbname=' . $this->db_name, $this->uName,$this->pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
  return null;
}
}
}
?>