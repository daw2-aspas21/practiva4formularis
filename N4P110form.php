<html>
 <head>
  <title>Say My Name</title>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="js/jquery.rating.pack.js"></script>
<script>
$(document).ready(function(){
    $('input.star').rating();
});
</script>
 </head>
 <body>
  <form action="N4P111formprocess.php" method="post">
   <table>
    <tr>
     <td>Name</td>
     <td><input type="text" name="name" /></td>
    </tr><tr>
     <td colspan="2" style="text-align: center;">
      <input type="submit" name="submit" value="Submit" /></td>
    </tr>
    <form action="N4P102formprocess.php" method="post">
    <div class="star_content">
        <input name="rate" value="1" type="radio" class="star"/> 
        <input name="rate" value="2" type="radio" class="star"/> 
        <input name="rate" value="3" type="radio" class="star"/> 
        <input name="rate" value="4" type="radio" class="star" checked="checked"/> 
        <input name="rate" value="5" type="radio" class="star"/>
    </div>
    <button type="submit" name="submitRatingStar" class="btn btn-primary btn-sm">Enviar</button>
</form>
   </table>
  </form>
 </body>
</html>