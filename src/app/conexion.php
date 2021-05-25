<?php
function retornarConexion() {
  $con=mysqli_connect("localhost","root","1234","bd1");
  return $con;
}
?>