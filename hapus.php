<?php

   include 'koneksi.php';
      
   if(isset($_GET['idp'])){
	   $foto = mysqli_query($conn, "SELECT image FROM foto WHERE FotoID = '".$_GET['idp']."' ");
	   $p = mysqli_fetch_object($foto);
	   
	   unlink('./foto/'.$p->image);
	   
	  $delete = mysqli_query($conn, "DELETE FROM foto WHERE FotoID = '".$_GET['idp']."' ");
	  echo '<script>window.location="data-image.php"</script>';
   }

?>