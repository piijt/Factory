<?php //GraphicFactory.php
include_once('Creator.php');
include_once('VanProduct.php');

class VanGoghFactory extends Creator {
  protected function factoryMethod() {
    $product=new VanProduct();
    return($product->getProperties());
  }
}
?>
