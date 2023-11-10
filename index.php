<?php
include("./layouts/header.php");
  if(isset($_GET["action"])){
    $ation = $_GET["action"];
    switch ($ation) {
        case "nguyenng":
            include("./layouts/hihi.php");
            break;
  }
}
  else{
    include("./pages/home.php");
  }
include("./layouts/footer.php");

?>