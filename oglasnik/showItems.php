<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book list</title>
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
            <h1>Your book list</h1>
            <div>
                <a href="createBook.php" class="btn btn-primary">Add new book</a>
            </div>
        </header>
        <?php
        session_start();
        if (isset($_SESSION["create"])){
            ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION["create"];
                unset($_SESSION["create"]);
                ?>
            </div>
            <?php
        }
        ?>
        <?php
        if (isset($_SESSION["edit"])){
            ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION["edit"];
                unset($_SESSION["edit"]);
                ?>
            </div>
            <?php
        }
        ?>
        <?php
        if (isset($_SESSION["delete"])){
            ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION["delete"];
                unset($_SESSION["delete"]);
                ?>
            </div>
            <?php
        }
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Publication date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("connectBookDB.php");
                $email = $_SESSION ["email"];
                $sql = "SELECT * FROM books WHERE creator = '$email'";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["title"] ?></td>
                        <td><?php echo $row["author"] ?></td>
                        <td><?php echo $row["type"] ?></td>
                        <td><?php echo $row["price"] ?></td>
                        <td><?php echo $row["pub_date"] ?></td>
                        <td>
                            <a href="viewBook.php?id=<?php echo $row["id"]; ?>" class="btn btn-info">Read more</a>
                            <a href="editBook.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning">Edit</a>
                            <a href="deleteBook.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>