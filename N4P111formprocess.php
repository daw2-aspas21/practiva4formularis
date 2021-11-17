<html>
 <head>
  <title>Say My Name</title>
 </head>
 <body>
<?php
echo '<h1>Hello ' . $_POST['name'] . '!</h1>';
?>
  <pre>
<strong>DEBUG:</strong>
<?php
print_r($_POST);
if (isset($_POST['submitRatingStar'])) {
    //procesar el rating
    echo '<div class="alert alert-success">Rating recibido: <strong>'.$_POST['rate'].'</strong>.</div>';
}
?>
  </pre>
 </body>
</html>