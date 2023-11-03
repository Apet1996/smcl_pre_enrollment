
<?php 
 include 'dropdown.php';
?>
<form method="post">
	<input type="text" name="tv">
	<input type="submit" name="b">
 <select>

 		<?php
 			while ($row = mysqli_fetch_array($nimal)) {
 				# code...
 			
 		?>

          <option value="#"><?php echo $row['gender']?></option>
         <?php 
         	}
          ?>
        </select>
</form>

 