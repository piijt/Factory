<?php //GraphicFactory.php
include_once('Creator.php');
include_once('DaVinciProduct.php');

class DaVinciFactory extends Creator {
  protected function factoryMethod() {
    $product=new VinciProduct();
    return($product->getProperties());
  }
}
?>
