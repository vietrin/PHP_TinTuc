<?php
require_once 'header.php';
include_once 'DBconnect.php';
?>
<body>
  
  <main role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
      </div>
    </div>
    <div class="container">
      <!-- Example row of columns -->
      <h2 style="text-align: center">Tất cả tin tức </h2>
      <div class="row">
        <?php
        include_once 'DBConnect.php';
        $q = " SELECT * FROM baiviet ";
        $query = mysqli_query($con, $q);
        while ($row = mysqli_fetch_assoc($query)) {
          ?>
          <div class="col-md-4">
          <article class="bxDoItspc" id="spec_box_tin_tuc_trong_ngay_bong_da_the_thao_3">
            <header class="nwsTit cltitbxbdtt" id="id_class_title_box_bd_tt_3">
              <h3><a href="detail.php?id=<?php echo$row['ma']; ?>" title='<?php echo $row['tieude']; ?>' style="font-size: 14px;"><?php echo $row['tieude']; ?></a></h3>
            </header>
            <span class="imgFlt imgNwsHm">           
            <a href="detail.php?id=<?php echo$row['ma']; ?>" style="font-size: 14px;"></a>            
            <img src="img/<?php echo$row['anh']; ?>"  alt="" class="width-100 initial loaded" data-was-processed="true"></a>
            </span>
            <span class="nwsSpSpc"> <p><?php echo $row['ndngan'] ?></p></span>
		</article></div>
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
