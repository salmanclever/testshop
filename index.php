<?php
require_once('sh_products.php');

  $prod_db = new Database();
  $msg;
  if(!empty($_GET['search_msg'])){
    $msg = $_GET['search_msg'];
    $prod_db->fetch_qur("SELECT * FROM products WHERE ProductName LIKE '%".$msg."%' OR ProductShortDesc LIKE '%".$msg."%' OR ProductLongDesc LIKE '%".$msg."%'");
  }else{
    $prod_db->fetch_qur("SELECT * FROM products");
  }

    $prod = new Products();
  
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Test product search</title>
</head>
<body>
     <div class="topmenu">
        <form action="" role="search" class="search-form">
		<input type="submit" value="" class="search-submit"> 
		<input type="search" name="search_msg" class="search-text" placeholder="Search..." autocomplete="on">
        </form>
     </div>

<div class="container">
     <?php $prod->show_prod($prod_db->result); echo $prod->prodlist?>
</div>
    
</body>
</html>