<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <header>
        <div class="row bg-warning p-3">
            <div class="col" id="oglasnikLink">
                <a href="index.php">bookShelf</a> 
            </div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
    </header>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Book details</h1>
        </header>
        <div class="book-details my-4">
            <?php
                if(isset($_GET["id"])){
                    $id = $_GET["id"];
                    include("connectBookDB.php");
                    $sql = "SELECT * FROM books WHERE id=$id";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                ?>
                    <h2>Title</h2>
                    <p><?php echo $row["title"]; ?></p>
                    <h2>Description</h2>
                    <p><?php echo $row["description"]; ?></p>
                    <h2>Type</h2>
                    <p><?php echo $row["type"]; ?></p>
                    <h2>Author name</h2>
                    <p><?php echo $row["author"]; ?></p>
                    <h2>Price</h2>
                    <p><?php echo $row["price"]; ?>$</p>
                    <h2>Publication date</h2>
                    <p><?php echo $row["pub_date"]; ?></p>
                    <h2>Contact</h2>
                    <p><?php echo $row["contact"]; ?></p>
                <?php
                }
            ?>
        </div>
    </div>
</body>
</html>