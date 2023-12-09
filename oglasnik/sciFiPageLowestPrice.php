<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SciFi books</title>
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
  <main>
    <article class="container-fluid mt-1 pagination justify-content-center">
      <h4>SCIFI BOOKS<span class="badge bg-secondary">New</span></h4>
    </article>
    <section class="mt-3">
      <form action="sciFiProcess.php" class="pagination justify-content-center" method="POST">
        <label for="cars">Sort by: </label>
        <select name="cars" id="cars">
          <option value="lowestPrice">Lowest price</option>
          <option value="notMostRecent">Oldest</option>
          <option value="highestPrice">Highest price</option>
          <option value="mostRecent">Most recent</option>
        </select>
        <br><br>
        <input type="submit" value="Confirm">
      </form>
    </section>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>SciFi book list</h1>
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
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("connectBookDB.php");
                $sql = "SELECT * FROM books WHERE type = 'sciFi' ORDER BY price ASC";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["title"] ?></td>
                        <td><?php echo $row["author"] ?></td>
                        <td><?php echo $row["type"] ?></td>
                        <td><?php echo $row["price"] ?></td>
                        <td>
                            <a href="viewBook.php?id=<?php echo $row["id"]; ?>" class="btn btn-info">Read more</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
  </main>
  <footer class="text-center text-lg-start bg-light text-muted">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
    </section>
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>O web aplikaciji
            </h6>
            <p>
              Web aplikacija napravljena u svrhu projekta za kolegij Web Dizajn kojem je svrha bila izrada fukncionalne web aplikacije na temu oglasnik.
            </p>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              Useful
            </h6>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> Osijek 10012, HR</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          </div>
        </div>
        <p>
          <p class="text-center">Fiksni tečaj konverzije 1 € = 7,53450 kn</p>
        </p>
      </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2023 Copyright:
      <a class="text-reset fw-bold" href="https://www.ferit.unios.hr/">FERIT</a>
    </div>
  </footer>
</body>
</html>