<?php 

class Connect  
{
  private $server = "localhost";
  private $user = "root";
  private $db ="servirines";
  private $password ="";

  public function connection()
  {
    $con=mysqli_connect(
      $this->server,
      $this->user,
      $this->password,
      $this->db,
    );
    return $con;
  }
}

$obj = new connect;
