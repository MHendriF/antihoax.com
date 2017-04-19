<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UPT FASOR ITS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
    
<?php session_start() ?>
    
<body id="page-top" class="index">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">SI UPT FASOR ITS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#profile">Profile</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#reservasi">Reservasi</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#paket">Paket</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#history">History</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#facilities">Facilities</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome <?php echo $_SESSION['user']; ?></div>
                <div class="intro-heading">Nice To Meet You!</div>
            </div>
        </div>
    </header>

    <!-- Profile Section -->
    <section id="profile" class="bg-light-gray">
        <div class="container">
            <div class="row" style="padding-top:10px;">
              <div class="col-md-12">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <h3 align="center">Your Profile</h3>
                    <table class="table table-hover table-bordered table-striped">
                      <thead>
                        <tr>
                          <th style="text-align:center;">Keterangan</th>
                          <th style="text-align:center;">Data</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php   
                            include "connect.php";
                            $nrp= $_SESSION['logged_user'];
                            $sql = "SELECT * FROM PENYEWA WHERE NRP='$nrp'";
                            $query = mysql_query($sql);
                            $row = mysql_fetch_array($query);
                            //$foto = $row['FOTO_PENYEWA'];
                            $nama = $row['NAMA_PENYEWA'];
                            $no_hp = $row['NO_HP_PENYEWA'];
                            $alamat = $row['ALAMAT_PENYEWA'];
                            $pkt = $row['PAKET'];
                            $spkt = $row['SISA_PAKET'];
                            $apkt = $row['AKHIR_PAKET'];
                            ?>
                            
                            <tr>
                                <td> NRP</td>
                                <th> <?php echo $nrp; ?></th>
                            </tr>
                            <tr>
                                <td> Nama</td>
                                <th> <?php echo $nama; ?></th>
                            </tr>
                            <tr>
                                <td> Nomor HP</td>
                                <th> <?php echo $no_hp; ?></th>
                            </tr>
                            <tr>
                                <td> Alamat</td>
                                <th> <?php echo $alamat; ?></th>
                            </tr>
                            <tr>
                                <td> Paket</td>
                                <th> <?php echo $pkt; ?></th>
                            </tr>
                            <tr>
                                <td> Sisa Paket</td>
                                <th> <?php echo $spkt; ?></th>
                            </tr>
                            <tr>
                                <td> Akhir Paket</td>
                                <th> <?php echo $apkt; ?></th>
                            </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
    
    <!-- Reservasi Section -->
    <section id="reservasi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Reservasi</h2>
                    <h3 class="section-subheading text-muted">Book Lapangan? Isi form di bawah ini</h3>
                </div>
            </div>
            <div class="row" style="padding-top:10px;">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-body">
            
          <form method="POST" action="reservasi.php">
            <div class="form-group">
              <label class="control-label">ID Lapangan</label>
              <div class="controls">
                <select class="form-control" name='id_lapangan'>
                    <?php
                    include "connect.php";
                  $rows = mysql_query("select ID_LAPANGAN, NAMA_LAPANGAN from LAPANGAN ORDER BY ID_LAPANGAN"); // multiple rows
                  while ($row = mysql_fetch_array($rows)) {
                    $id = $row['ID_LAPANGAN'];
                    $nama = $row['NAMA_LAPANGAN'];
                    
                    echo "<option value='$id'>";
                    echo "$nama</option>";
                  }
                 ?>
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label">Tanggal Sewa</label>
              <div class="controls">
                <input class="form-control" type="date" name="tgl_sewa">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label">Waktu Mulai Peminjaman</label>
              <div class="controls">
                <input class="form-control" type="time" name="waktu_mulai">
              </div>
            <div class="form-group">
              <label class="control-label">Waktu Akhir Peminjaman</label>
              <div class="controls">
                <input class="form-control" type="time" name="waktu_akhir">
              </div>
                </div>     
                <div class="pull-right">
                  <a class="btn btn-danger">Batal</a>
                  <input class="btn btn-success" type="submit" value="Submit"/>
                </div>
              </form>
            </div>
          </div>
        </div>
           <?php
           if(isset($_GET['status']) && $_GET['status']>0)
           {?>
                <form method="POST" action="payment.php">
                    <div class="form-group">
                        <label class="control-label">Total Harga: <?php echo $_GET['status']; ?></label>       
                    </div>
                    <div class="form-group">
                    <label class="control-label">Bukti Transfer</label>
                        <div class="form-group">
        		              <a class="thumbnail">
							<input type="file" name="fileToUpload" id="fileToUpload">
							</a>
					</div>
            </div>     
                    <div class="pull-right">
                      <a class="btn btn-danger">Batal</a>
                      <input class="btn btn-success" type="submit" value="Submit"/>
                    </div>
              </form>
           <?php } 
           else if(isset($_GET['status']) && $_GET['status']==0){
            echo "<div class='alert alert-dismissable alert-danger'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <b>Gagal!</b> Data Gagal Dimasukkan...
            </div>";
           }
          ?> 
    </div>
            </div>
        </div>
    </section>
   
    <!-- Paket Section -->
    <section id="paket" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Daftar Paket</h2>
                    <h3 class="section-subheading text-muted">Ingin menggunakan Paket? Isi form di bawah ini</h3>
                </div>
            </div>
            <div class="row" style="padding-top:10px;">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-body">
              
          <form method="POST" action="paket.php">
            <div class="form-group">
              <label class="control-label">ID Lapangan</label>
              <div class="controls">
                <select class="form-control" name='id_lapangan'>
                    <?php
                    include "connect.php";
                  $rows = mysql_query("select ID_LAPANGAN, NAMA_LAPANGAN from LAPANGAN ORDER BY ID_LAPANGAN"); // multiple rows
                  while ($row = mysql_fetch_array($rows)) {
                    $id = $row['ID_LAPANGAN'];
                    $nama = $row['NAMA_LAPANGAN'];
                    
                    echo "<option value='$id'>";
                    echo "$nama</option>";
                  }
                 ?>
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label">Nama Paket</label>
              <div class="controls">
                <select class="form-control" name='nama_paket'>
                    <?php
                    include "connect.php";
                  $rows = mysql_query("select NAMA_PAKET from PAKET"); // multiple rows
                  while ($row = mysql_fetch_array($rows)) {
                    $nama_paket = $row['NAMA_PAKET'];
                    
                    echo "<option value='$nama_paket'>";
                    echo "$nama_paket</option>";
                  }
                 ?>
                  </select>
              </div>
            </div>             
                <div class="pull-right">
                  <a class="btn btn-danger">Batal</a>
                  <input class="btn btn-success" type="submit" value="Submit"/>
                </div>
              </form>
              
            </div>
          </div>
        </div>
      </div>
        </div>
    </section>
    
    <!-- History Section -->
    <section id="history">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">History Reservasi</h2>
                    <h3 class="section-subheading text-muted">Berikut history reservasi anda</h3>
                </div> 
            </div>
            
            <div class="row" style="padding-top:10px;">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">     
            <h3 align="center">History Transaksi</h3>
            <table class="table table-hover table-bordered table-striped">
              <thead>
                <tr>
                  <th style="text-align:center;">Nama Lapangan</th>
                  <th style="text-align:center;">Tanggal Sewa</th>
                  <th style="text-align:center;">Waktu Mulai Sewa</th>
                  <th style="text-align:center;">Waktu Selesai Sewa</th>
                  <th style="text-align:center;">Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  include "connect.php";
                  $nrp = $_SESSION['logged_user'];
                  $rows = mysql_query("SELECT ID_LAPANGAN, TANGGAL_SEWA, WAKTU_MULAI_SEWA, WAKTU_SELESAI_SEWA, VERIFIED FROM PENYEWAAN_LAPANGAN WHERE NRP=$nrp"); // multiple rows
                  if(mysql_num_rows($rows)>0){
                      while($row = mysql_fetch_array($rows)) {
                        $id = $row['ID_LAPANGAN'];
                        $llap = mysql_fetch_array(mysql_query("SELECT NAMA_LAPANGAN FROM LAPANGAN WHERE ID_LAPANGAN='$id'"));
                        $lap = $llap['NAMA_LAPANGAN'];
                        $tgl = $row['TANGGAL_SEWA'];
                        $mul = $row['WAKTU_MULAI_SEWA'];
                        $sel = $row['WAKTU_SELESAI_SEWA'];
                        $stat = $row['VERIFIED'];
                        if($stat==1) $stat='verified';
                        else $stat='unverified';

                        echo "<tr><td>"."$lap"."</td>";
                        echo "<td>"."$tgl"."</td>";
                        echo "<td>"."$mul"."</td>";
                        echo "<td>"."$sel"."</td>";
                        echo "<td>"."$stat"."</td></tr>";
                      }
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
        </div>
    </section>
    
    <!-- Facilities Grid Section -->
    <section id="facilities" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Facilities</h2>
                    <h3 class="section-subheading text-muted">Court List</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/stadionits.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>GOR Sepakbola</h4>
                        <p class="text-muted">ITS Soccer Stadium</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/futsalits.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>GOR Futsal Pertamina</h4>
                        <p class="text-muted">ITS Futebol de Sala Stadium</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/badmintonits.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>GOR Bulutangkis</h4>
                        <p class="text-muted">ITS Badminton Stadium</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/basketits.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>GOR Basket</h4>
                        <p class="text-muted">ITS Basketball Stadium</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/tennisits.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Lapangan Tennis</h4>
                        <p class="text-muted">ITS Tennis Court</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/panjatits.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Panjat Tebing</h4>
                        <p class="text-muted">ITS Hill Climb</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container" class="bg-light-gray">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; SI UPT FASOR 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>GOR Sepakbola ITS</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/stadionits.jpg" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p>
                                <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>GOR Futsal Pertamina</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/futsalits.jpg" alt="">
                            <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                            <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>GOR Bulutangkis</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/badmintonits.jpg" alt="">
                            <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>GOR Basket</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/basketits.jpg" alt="">
                            <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Lapangan Tennis</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/tennisits.jpg" alt="">
                            <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Panjat Tebing</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/panjatits.jpg" alt="">
                            <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!-- jQuery -->
<script src="js/jquery.js"></script>
 
 <!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
 
 <!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/agency.js"></script>

</body>

</html>