<h1>locations</h1>

 <table>
   <?php foreach ($locations as $row) { ?>
   <td><?php echo $row['id'] ?></td>
   <td><?php echo $row['location'] ?></td>
 <?php } ?>
 </table>
