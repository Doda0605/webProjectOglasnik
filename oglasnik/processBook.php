<?php
include("connectBookDB.php");
if(isset($_POST["create"])){
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $creator = mysqli_real_escape_string($conn, $_POST["creator"]);
    $contact= mysqli_real_escape_string($conn, $_POST["contact"]);
    $sql = "INSERT INTO books (title, author, type, description, price, creator, contact) VALUES ('$title', '$author', '$type', '$description', '$price', '$creator', '$contact')";
    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["create"] = "Book added successfully";
        header("Location:showItems.php");
    }else{
        die("Something went wrong");
    }
}

if(isset($_POST["edit"])){
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $contact= mysqli_real_escape_string($conn, $_POST["contact"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sql = "UPDATE books SET title = '$title', author = '$author', type = '$type', description = '$description', price = '$price' WHERE id = '$id'";
    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["edit"] = "Book edited successfully";
        header("Location:showItems.php");
    }else{
        die("Something went wrong");
    }
}
?>