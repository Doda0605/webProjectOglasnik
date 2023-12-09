<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit book</title>
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
            <h1>Edit book</h1>
            <div>
                <a href="showItems.php" class="btn btn-primary">back</a>
            </div>
        </header>
        <?php
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            include("connectBookDB.php");
            $sql = "SELECT * FROM books WHERE id='$id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);

            ?>
        <form action="processBook.php" method="POST">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="title" value="<?php echo $row["title"] ?>" placeholder="Book title:">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="author" value="<?php echo $row["author"] ?>" placeholder="Author name:">
            </div>
            <div class="form-element my-4">
                <select name="type" class="form-control">
                    <option value="">Select book type</option>
                    <option value="Adventure" <?php if($row['type']=="Adventure"){echo "selected";} ?>>Adventure</option>
                    <option value="Fantasy" <?php if($row['type']=="Fantasy"){echo "selected";} ?>>Fantasy</option>
                    <option value="SciFi" <?php if($row['type']=="SciFi"){echo "selected";} ?>>SciFi</option>
                    <option value="Horror" <?php if($row['type']=="Horror"){echo "selected";} ?>>Horror</option>
                    <option value="Drama" <?php if($row['type']=="Drama"){echo "selected";} ?>>Drama</option>
                </select>
            </div>
            <div class="form-element my-4">
                <input type="text" value="<?php echo $row["description"]; ?>" class="form-control" name="description" placeholder="Book description:">
            </div>
            <input type="hidden" name="id" value='<?php echo $row['id']; ?>'>
            <div class="form-element my-4">
                <input type="number" class="form-control" name="price" value="<?php echo $row["price"]; ?>" placeholder="Price(in $):">
            </div>
            <div class="form-element my-4">
                <input type="text" value="<?php echo $row["contact"]; ?>" class="form-control" name="contact" placeholder="Contact information:">
            </div>
            <div class="form-element my-4">
                <input type="submit" class="btn btn-success" name="edit" value="Edit book">
            </div>
        </form>
        <?php
        }
        ?>
        
    </div>
</body>
</html>