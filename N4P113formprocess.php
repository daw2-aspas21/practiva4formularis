<html>
 <head>
  <title>felicidades</title>
 </head>
 <body>
<?php
echo '<h1>' . $_POST['felicidades'] . ' ' . $_POST['name'] . '!</h1>';

if (isset($_POST['debug'])) {
    echo '<pre><strong>DEBUG:</strong>' . "\n";
    print_r($_POST);
    echo '</pre>';
}
?>
 </body>
</html>
