<?php //GraphicProduct.php
include_once('Product.php');

class VanProduct implements Product {
  private $mfgProduct;
    public function getProperties() {
      $this->mfgProduct="<!doctype html><html><head><meta charset='UTF-8' />";
      $this->mfgProduct.="<title>Map Factory</title>";
      $this->mfgProduct.="</head><body>";
      $this->mfgProduct.="<p>This is a Van Gogh Painting for sale... Starting at $399</P>";
      $this->mfgProduct.="<img src='../img/vg.jpg' width='500' height='AUTO' />";
      $this->mfgProduct."<button>Buy</button>";
      $this->mfgProduct.="</body></html>";
      return $this->mfgProduct;
    }
  }
  ?>
