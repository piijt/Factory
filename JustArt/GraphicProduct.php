<?php //GraphicProduct.php
include_once('Product.php');

class GraphicProduct implements Product {
  private $graphicProduct;
    public function getProperties() {
      $this->graphicProduct="<!doctype html><html><head><meta charset='UTF-8' />";
      $this->graphicProduct.="<title>Map Factory</title>";
      $this->graphicProduct.="</head><body>";
      $this->graphicProduct.="<p>This is a Graphic Product</P>";
      $this->graphicProduct.="<img src='../img/minimal.png' width='500' height='AUTO' />";
      $this->graphicProduct.="<img src='../img/GLASS_PLANET.png' width='500' height='AUTO' />";
      $this->graphicProduct.="</body></html>";
      return $this->graphicProduct;
    }
  }
  ?>
