<?php
include "parts/header.php";
if (!empty($_GET["page"])) {
    $page = $_GET["page"];
}
else {
    $page = "index";
}
include "parts/$page.php";
include "parts/footer.php";
?>