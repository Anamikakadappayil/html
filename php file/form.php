<form mrthod="podt" action="">
Name:<input name="username">
<button type="submit">send</button>
</form>
<?php
if(isset($_POST["username"])){
  $name=
htmlspecialchars($_POST["username"]);
echo"hello,".$name;
}
?>