<?php
require_once 'header.php';
include_once 'DBconnect.php';
?>
<body>
  <main role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
    </div>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <?php
        include_once 'DBConnect.php';
        $id=$_GET['id'];
        $q = " SELECT * FROM baiviet where ma = $id";
        $query = mysqli_query($con, $q);
        while ($row = mysqli_fetch_assoc($query)) {
          ?>
          <div class="col-md-8">
            <h2><?php echo $row['tieude'] ?></h2>
            <p><?php echo $row['ndngan'] ?></p>
            <p><?php echo $row['noidung'] ?></p>
          </div>
        <?php
        }
        ?>
      </div>
      <hr>
    </div> <!-- /container -->
  </main>
  <footer class="container">
    <p>© Company 2017-2018</p>
  </footer>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>
</body>