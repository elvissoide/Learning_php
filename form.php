<?php
   if (isset($_POST['searchterm'])) {
      // Esto no se debería hacer, es inseguro
      // echo $_POST['searchterm'];
      echo htmlspecialchars($_POST['searchterm'], ENT_QUOTES) . "<br>";
      echo htmlspecialchars($_POST['searchterm']);
   }
?>

<form action="" method="post">
   <input type="text" name="searchterm">
   <input type="submit" value="Search">
</form>