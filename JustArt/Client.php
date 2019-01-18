<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Just Art</title>
    <link rel="stylesheet" href="master.css">
  </head>
  <body>

<?php //Client.php
include_once('GraphicFactory.php');
include_once('DaVinciFactory.php');
include_once('VanGoghFactory.php');

class Client {

      public function __construct() {

        $this->vanGoghObjects=new VanGoghFactory();
        echo "<H1> SPECIAL OFFER</H1>";
        echo $this->vanGoghObjects->startFactory() . "<br\>";
        echo "<br\> <button type='button'>Bid</button>";

        $this->vinciObjects=new DaVinciFactory();
        echo $this->vinciObjects->startFactory() . "<br\>";
        echo "<br\> <button type='button'>Bid</button>";

        $this->graphic=new GraphicFactory();
        echo $this->graphic->startFactory() . "<br\>";
        echo "<br\> <button type='button'>Bid</button>";
    }
}
$stuff = new Client();
?>

</body>
</html>
