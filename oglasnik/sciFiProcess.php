<?php
if($_POST["cars"] == "notMostRecent"){
    header("Location: sciFiPageNotMostRecent.php");
}else if($_POST["cars"] == "highestPrice"){
    header("Location: sciFiPageHighestPrice.php");
}else if($_POST["cars"] == "lowestPrice"){
    header("Location: sciFiPageLowestPrice.php");
} else{
    header("Location: sciFiPage.php");
}
?>