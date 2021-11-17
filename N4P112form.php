<html>
 <head>
  <title>Buenas tardes</title>
 </head>
 <body>
  <form action="N4P113formprocess.php" method="post">
   <table>
    <tr>
     <td>Name</td>
     <td><input type="text" name="name" /></td>
    </tr><tr>
     <td>Felicidades</td>
     <td>
      <select name="felicidades">
       <option value="Oi">Oi</option>
       <option value="Kumusta">Kumusta</option>
       <option value="Selam">Selam</option>
      </select>
     </td>
    </tr><tr>
     <td> </td>
     <td>
      <input type="checkbox" name="debug" checked="checked"/>
      Display Debug info
     </td>
    </tr><tr>
     <td colspan="2" style="text-align: center">
      <input type="submit" name="submit" value="Submit" />
     </td>
    </tr>
   </table>
  </form>
 </body>
</html>