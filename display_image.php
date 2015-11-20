
<html>
     <body>
		
	 <form method="GET" action=" " >
	 	<input type="text" name="imageID">
	 	<input type="submit" name="display_image" value="Display">
	 </form>

     </body>
</html>


<?php

$getname = $_GET['imageID'];

echo "<img src=fetch_image.php?name=".$getname.">";

?>

