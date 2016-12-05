<?php
require_once('database.php');


class Products{
  public $prodlist;
  
  public function show_prod($prods){
 
    foreach($prods as $prod) {

              $this->prodlist .= '<ul class="cards">' .
                                  '<li class="cards__item" id="'.$prod['ProductID'].'">'.
                                  '<div class="cards__elem cards__elem_img">'.
                                  '<img src='.$prod['ProductThumb'].' alt='.$prod['ProductName'].'/></div>'.
                                  '<div class="cards__elem cards__elem_name">'.$prod['ProductName'].'</div>'.
                                  '<div class="cards__elem cards__elem_post">'.$prod['ProductShortDesc'].'</div>'.
                                  '<a href=/product.php?id="'.$prod['ProductID'].'"><div class="cards__elem cards__elem_button">'.
                                  '<button>BUY</button></a>'.
                                  '</div></li>';
        }
    
  }
  
}


?>