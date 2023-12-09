<?php
if($_POST["cars"] == "notMostRecent"){
    header("Location: horrorPageNotMostRecent.php");
}else if($_POST["cars"] == "highestPrice"){
    header("Location: horrorPageHighestPrice.php");
}else if($_POST["cars"] == "lowestPrice"){
    header("Location: horrorPageLowestPrice.php");
} else{
    header("Location: horrorPage.php");
}
?>