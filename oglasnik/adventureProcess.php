<?php
if($_POST["cars"] == "notMostRecent"){
    header("Location: adventurePageNotMostRecent.php");
}else if($_POST["cars"] == "highestPrice"){
    header("Location: adventurePageHighestPrice.php");
}else if($_POST["cars"] == "lowestPrice"){
    header("Location: adventurePageLowestPrice.php");
} else{
    header("Location: adventurePage.php");
}
?>