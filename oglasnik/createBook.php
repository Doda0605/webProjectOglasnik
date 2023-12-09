<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <h1>Add new book</h1>
            <div>
                <a href="showItems.php" class="btn btn-primary">Go back</a>
            </div>
        </header>
        <?php
        session_start();
        ?>
        <form action="processBook.php" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="title" placeholder="Book title:">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="author" placeholder="Author name:">
            </div>
            <div class="form-element my-4">
                <select name="type" class="form-control">
                    <option value="">Select book type</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="SciFi">SciFi</option>
                    <option value="Horror">Horror</option>
                    <option value="Drama">Drama</option>
                </select>
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="description" placeholder="Book description:">
            </div>
            <div class="form-element my-4">
                <input type="number" class="form-control" name="price" placeholder="Price(in $):">
            </div>
            <div class="form-element my-4">
                <input type="hidden" class="form-control" name="creator" value="<?php echo $_SESSION["email"] ?>">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="contact" placeholder="Contact information:">
            </div>
            <div class="form-element my-4">
                <input type="submit" class="btn btn-success" name="create" value="Add book">
            </div>
        </form>
    </div>
</body>
</html>