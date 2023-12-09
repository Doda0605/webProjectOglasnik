<?php
if($_POST["cars"] == "notMostRecent"){
    header("Location: fantasyPageNotMostRecent.php");
}else if($_POST["cars"] == "highestPrice"){
    header("Location: fantasyPageHighestPrice.php");
}else if($_POST["cars"] == "lowestPrice"){
    header("Location: fantasyPageLowestPrice.php");
} else{
    header("Location: fantasyPage.php");
}
?>