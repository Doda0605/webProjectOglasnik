<?php
if($_POST["cars"] == "notMostRecent"){
    header("Location: dramaPageNotMostRecent.php");
}else if($_POST["cars"] == "highestPrice"){
    header("Location: dramaPageHighestPrice.php");
}else if($_POST["cars"] == "lowestPrice"){
    header("Location: dramaPageLowestPrice.php");
} else{
    header("Location: dramaPage.php");
}
?>