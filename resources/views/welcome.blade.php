
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ANTI-HOAX!</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('/frontend/vendor/bootstrap/css/bootstrap.min.css') }}">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{ asset('/frontend/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/agency.css') }}">
    <!-- Pace style -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/pace.min.css') }}">
    <!-- Custom style -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/custom.css') }}">
    <!-- Sweet modal style -->
    <link rel="stylesheet" href="{{ asset('/frontend/js/sweet-modal/dist/min/jquery.sweet-modal.min.css') }}">
    <!-- Sweetalert2 -->
    <link rel="stylesheet" href="{{ asset('/frontend/js/sweetalert2/dist/sweetalert2.min.css') }}">


</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Anti Hoax</a>
                <img class="page-scroll" style="height:50px;width:52px;" src="frontend/img/logo.png">
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#page-top">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#detector">Hoax Detector</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="#recent">Recent Search</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Example of Hoax</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#detect">How to Detect Hoax</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#help">Help</a>
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
                <div class="intro-lead-in">Welcome To Anti Hoax Website</div>
                <div class="intro-heading">Let's broke the Hoax!</div>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="detector" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Hoax Detector</h2>
                    <h3 class="section-subheading text-muted">"We Concern To Prevent The Spread Of Fake News Around The World."</h3>
                </div>
            </div>
            <form method="get" action="{{ url('search') }}" role="search" class="col-md-6 text-center col-md-offset-3">
                {{-- {!! csrf_field() !!} --}}
                <div class="input-group">
                    <input type="text" name="keyword" value="{{$search}}" class="form-control" placeholder="Enter the keyword search ....">
                    <div class="input-group-btn">
                        <button id="loading" class="btn btn-default" {{-- data-toggle="modal" data-target="#myModal" --}} type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <div id="loading-content">
            </div>
            <div class="col-lg-12 text-center" style="margin-top: 20px; font-size: 20px;">
                <a class="page-scroll" href="#help">Need Help?</a>
            </div>
        </div>
    </section>

    <!-- Modal -->
    {{-- <div id="myModal" class="modal fade" style="top: 80px" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Result</h4>
                </div>
                <div class="modal-body">
                    <!-- Isi -->
                    <p>Persentasi Hoax</p> 
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
                          20% Hoax
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                          40% Hoax
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                          60% Hoax
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                          80% Hoax
                        </div>
                    </div>
                    <p>Detail</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Services Section -->
    <section id="recent">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Recent Search of Hoax</h2>
                    <h3 class="section-subheading text-muted">"Some people gave us some clue!"</h3>
                </div>
                <table>
                    <tr>
                        <th>Keyword Search</th>
                        <th>Category</th>
                        <th>Valid</th>
                        <th>Hoax</th>
                        <th>Unknown</th>
                    </tr>
                    @foreach($data as $history)       
                    <tr>
                        <td>{{ $history->keyword }}</td>
                        <td>{{ $history->category }}</td>
                        <td>{{ $history->valid }} %</td>
                        <td>{{ $history->hoax }} %</td>
                        <td>{{ $history->unknown }} %</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Example of Hoax</h2>
                    <h3 class="section-subheading text-muted">"We have some Hoax around You!"</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search fa-3x"></i>
                            </div>
                        </div>
                        <img src="frontend/img/portfolio/populer.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Buku yang tidak pernah ada</h4>
                        {{-- <p class="text-muted">Graphic Design</p> --}}
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search fa-3x"></i>
                            </div>
                        </div>
                        <img src="frontend/img/portfolio/belgia.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Belgia Pecah Jadi 2</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search fa-3x"></i>
                            </div>
                        </div>
                        <img src="frontend/img/portfolio/pohon.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Pohon Spageti</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search fa-3x"></i>
                            </div>
                        </div>
                        <img src="frontend/img/portfolio/hitler.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Catatan Harian Palsu Hitler</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search fa-3x"></i>
                            </div>
                        </div>
                        <img src="frontend/img/portfolio/album.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Album Terhebat</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search fa-3x"></i>
                            </div>
                        </div>
                        <img src="frontend/img/portfolio/soul.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Penyanyi Soul 'Bayangan'</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services Section -->
    <section id="detect">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">How To Detect Hoax</h2>
                    <h3 class="section-subheading text-muted">"An Amazing 6 steps to make your life easier!"</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-globe fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Check The URL</h4>
                    <p class="text-muted">If the site has a strange or unfamiliar name, stop right there and search for the same story on Google or elsewhere. If it doesn't show up anywhere else, that's a big problem.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-file-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Read The About Page</h4>
                    <p class="text-muted">Be wary of sites without an About page, or that don't tell you exactly who is running the website.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-quote-right fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Check The Quote</h4>
                    <p class="text-muted">Fake news often relies on made-up quotes to make the story seem real. If you search for it and no reputable media outlet has it, that could mean it's not a real quote.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-link fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Check The Link Inside The Pages</h4>
                    <p class="text-muted">Fake news articles often make big claims but don't supply any evidence to back them up. Pay close attention to where any claims are coming from. Do they cite specific people or organizations? Do they talk about other media coverage but not link to it?</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-picture-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Do Reverse Image Search</h4>
                    <p class="text-muted">If you use Chrome as your web browser simply right click on an image and select "Search Google for Image." Another easy way to reverse image search is to go to Google Images, click on the camera icon and then upload the photo you're trying to search for.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">If It Seems So Perfect, Slow Down!</h4>
                    <p class="text-muted">Fake news is often engineered to appeal to your emotions, or to seem like a crazy thing that could happen. Rather than instantly believing and sharing it, wait and see if more information comes out. Taking a breath and keeping an open (but skeptical!) mind will never steer you wrong.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About Us</h2>
                    <h3 class="section-subheading text-muted">"We are called to focus on you!"</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="frontend/img/team/man-1.png" style="max-width: 50%;" class="img-responsive img-circle" alt="">
                        <h4>M Hendri Febriansyah</h4>
                        <p class="text-muted">5114100036</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="frontend/img/team/man-2.png" style="max-width: 50%;" class="img-responsive img-circle" alt="">
                        <h4>Andy Yohanes H</h4>
                        <p class="text-muted">5114100050</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="frontend/img/team/man-3.png" style="max-width: 50%;" class="img-responsive img-circle" alt="">
                        <h4>Prasetyo Nugrohadi</h4>
                        <p class="text-muted">5114100070</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Help Section -->
    <section id="help">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">HELP</h2>
                    <h3 class="section-subheading text-muted">"Your guideline to prevent the Hoax!"</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img src="frontend/img/homepage.png" style="max-width: 100%;" class="img-responsive" alt="">
                        <h4 class="heading">Click the Hoax Detector Button</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img src="frontend/img/example_search3.png" style="max-width: 83%;" class="img-responsive" alt="">
                        <h4 class="heading">Insert the words that you want to find out</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img src="frontend/img/result2.png" style="max-width: 100%; height: 190px;" class="img-responsive" alt="">
                        <h4 class="heading">Get the Result</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center" style="font-size: 20px;">
                <a class="page-scroll" href="#detector">Try it Now</a>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2016</span>
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


    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
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
                                <h2>Buku populer yang tidak pernah ada</h2>
                                <p class="item-intro text-muted"></p>
                                <img class="img-responsive img-centered" src="frontend/img/portfolio/populer.png" alt="">
                                <p style="text-align: left;">Pada tahun 1950-an, seorang penyiar acara radio tengah malam, Jean Shepherd, menggagas sebuah ide gila untuk membuat sebuah novel, yang tidak pernah ada di dunia ini.
                                Ide itu timbul di benaknya, setelah dia mengunjungi sebuah toko buku di daerah tempat dia tinggal. Di sana dia menyadari, orang-orang yang bergulat dalam bisnis penerbitan, akan mengikuti ke manapun arah popularitas membawa mereka.
                                </p>
                                <p style="text-align: left;">Jean pun kemudian memutuskan untuk membicarakan sebuah buku yang sangat laris, tapi tak pernah dibuat dan dipublikasikan.
                                <strong>Penyiar radio</strong> itu lalu memutuskan untuk memberi judul 'karangannya', I, Libertine, karya penulis Frederick Ewing. Pendengar setia acara radionya pun mulai heboh membicarakan buku tersebut, dan mulai mencari-cari karya fenomenal itu.
                                </p>
                                <p style="text-align: left;">Jean kemudian bekerjasama dengan seorang kenalannya di media, mengatakan bahwa mereka telah mewawancarai penulis novel tersebut.Saat berita yang menyebutkan bahwa novel tersebut hoax, kepala perusahaan penerbitan Ballantine Books, menghubungi Jean dan seorang penulis, Theodore Strugeon, untuk menciptakan novel I, Libertine. Jean membuat alur cerita buku tersebut dan Theodore menjadi penulis utamanya.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
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
                                <h2>Belgia Pecah Jadi 2</h2>
                                <p class="item-intro text-muted"></p>
                                <img class="img-responsive img-centered" src="frontend/img/portfolio/belgia.png" alt="">
                                <p style="text-align: left;">Pada tahun 2006, warga Belgia dikejutkan dengan berita hoax yang disampaikan oleh media setempat, bahwa negara mereka telah terbelah menjadi dua bagian.Media lokal tersebut menyiarkan dalam sebuah 'siaran langsung', sebagian wilayah Belgia yang berbahasa Belanda, telah mendeklarasikan kemerdekaan.</p>
                                <p style="text-align: left;">Laporan langsung itu menunjukkan kerumunan warga mengibarkan bendera Flemish dan bergerak menuju bandara Brussels. Menurut laporan, media tersebut menyebarkan berita hoax itu untuk memperlihatkan kepada penonton, hal itu bisa saja terjadi di masa depan.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
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
                                <h2>Pohon spageti </h2>
                                <p class="item-intro text-muted"></p>
                                <img class="img-responsive img-centered" src="frontend/img/portfolio/pohon.png" alt="">
                                <p style="text-align: left;">Pada 1 April 1957, seorang wartawan Eropa mengklarifikasi berita mengenai 'pohon spageti' adalah hoax. Berita mengenai sebuah keluarga di selatan Swiss menumbuhkan mi di ladang mereka, awalnya di siarkan dalam sebuah program acara milik BBC, Panorama.</p>
                                <p style="text-align: left;">Setelah kemunculan berita tersebut, ribuan orang menghubungi media tersebut, bertanya bagaimana caranya menanam spageti di kebun.Pada masa itu, spageti belum begitu terkenal di Inggris. Sehingga tidak banyak yang menyadari, mi itu terbuat dari tepung dan air.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
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
                                <h2>Catatan Harian Palsu Hitler</h2>
                                <p class="item-intro text-muted"></p>
                                <img class="img-responsive img-centered" src="frontend/img/portfolio/hitler.png" alt="">
                                <p style="text-align: left;">Pada tahun 1983, majalah mingguan Jerman, Stern, membeli 60 volume jurnal, yang dipercaya milik Adolf Hitler, seharga US$ 5,5 juta atau setara dengan Rp 7,.6 miliar.Menurut pengakuan seorang wartawan Stern, Gerd Heidemann, dia memperoleh catatan tersebut dari Dr. Fischer.</p>
                                <p style="text-align: left;">Dr. Fischer menyatakan, jurnal tersebut didapatkan dari bangkai pesawat yang mengangkut barang pribadi Hitler, di dekat Kota Dresden, Jerman, pada bulan April 1945.Catatan harian itu melalui tiga rangkaian tes keaslian, tapi tidak pernah ditunjukkan kepada orang-orang yang pernah ikut Perang Dunia II.</p>
                                <p style="text-align: left;">Arsip Federal Jerman kemudian menyatakan, buku tersebut palsu. Badan itu menjelaskan, sejarah yang terdapat dalam catatan itu tidak akurat dan pada zaman Hitler hidup, tinta pena belum ditemukan.Setelah diselidiki, catatan harian palsu tersebut, ternyata dibuat oleh seorang penipu bernama Konrad Kujau.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
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
                                <h2>Album Terhebat</h2>
                                <p class="item-intro text-muted"></p>
                                <img class="img-responsive img-centered" src="frontend/img/portfolio/album.png" alt="">
                                <p style="text-align: left;">Pada tahun 1969, John Lennon, Mick Jagger, Paul McCartney, dan Bob Dylan, merekam sebuah album lagu rahasia bersama-sama yang bertajuk 'The Mask Marauders'.Album itu disebut-sebut sebagai rekaman musik rock terhebat sepanjang masa.</p>
                                <p style="text-align: left;">Tapi, sayangnya album terhebat itu tidak pernah ada alias hoax. Greil Marcus, penulis dan mantan editor Rolling Stone, menciptakan 'The Masked Marauders' karena ingin mengikuti tren, dengan memarodikan semua album populer kala itu.</p>
                                <p style="text-align: left;">Rolling Stone kemudian mempublikasikan album tersebut dengan label ' catatan tahunan', dan membuat berita hoax tersebut menjadi kenyataan. Kemudian, Marcus bersama dengan rekan Langdon Winner, menuliskan beberapa lagu dan merekamnya bersama Barkeley's Cleanliness serta Godlines Skiffle.</p>     
                                <p style="text-align: left;">Setelah itu, mereka menandatangani perjanjian kerjasama dengan Warner Brother. Album tersebut terjual lebih dari 100.000 kopi.</p>                           
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
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
                                <h2>Penyanyi Soul 'Bayangan'</h2>
                                <p class="item-intro text-muted"></p>
                                <img class="img-responsive img-centered" src="frontend/img/portfolio/soul.png" alt="">
                                <p style="text-align: left;">Pada tahun 2012, tiga buah video rekaman penyanyi misterius menyanyikan lagu klasik David Bowie, menjadi ramai dibicarakan netizen. Penyanyi misterius yang menyebut diri mereka sebagai Milky Edwards dan The Chamberlings, digandrungi khalayak ramai karena lagu yang mereka nyanyikan, berjudul 'Moonage Daydream', 'Starman', dan 'Soul Love'.</p>
                                <p style="text-align: left;">Namun, pada lagu berjudul 'Moonage Daydream', penggemar menilai lantunan nada tersebut tidak asli atau hoax. Mereka berpendapat bahwa nyanyian tersebut terdengar 'dipaksakan', tidak terdapat penghayatan David Bowie di dalamnya.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('/frontend/vendor/jquery/jquery2.min.js') }}"></script>
    <!-- Sweet modal js -->
    <script src="{{ asset('/frontend/js/sweet-modal/dist/min/jquery.sweet-modal.min.js') }}"></script>
    <!-- Sweetalert2 js -->
    <script src="{{ asset('/frontend/js/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="{{ asset('/frontend/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('/frontend/js/contact_me.js') }}"></script>
    <!-- Theme JavaScript -->
    <script src="{{ asset('/frontend/js/agency.js') }}"></script>
    <script data-pace-options='{ "ghostTime": 4000 }' src="{{ asset('/frontend/js/pace.min.js') }}"></script>
    <!-- page script -->
    <script type="text/javascript">
        // To make Pace works on Ajax calls
        $(document).ajaxStart(function() { Pace.restart(); });
        $('#loading').click(function(){
            $('#loading-content').html('<img src="frontend/img/loading2.gif" style="margin-top: -7px;margin-left: 10px;">');
            $.ajax({url: '#', success: function(result){
            }});
        });
    </script>

    <script>
      $(document).ready(function() {
          @if(Session::has('valid'))
            @if(isset($hoax))
                @if($hoax == 0)
                $.sweetModal({
                    title: 'Result search: {{$search}}',
                    content: '<strong>Persentasi Valid</strong><div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="{{ Session::get('valid') }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ Session::get('valid') }}%">{{ Session::get('valid') }}% Valid</div></div><strong>Persentasi Uknown</strong><div class="progress"><div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="{{ Session::get('unknown') }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ Session::get('unknown') }}%">{{ Session::get('unknown') }}% Uknown</div></div> <p class="lead"; style="margin-top: 40px">Reference: </p> @foreach($results as $web)<mark style="font-size: 17px">{{$web->title}}</mark><p style="margin-bottom: 0">{{$web->url}}</p><p style="line-height: 20px">{{$web->description}}</p>@endforeach'
                });
                @elseif($hoax > 0)
                $.sweetModal({
                    title: 'Result search: {{$search}}',
                    content: '<strong>Persentasi Valid</strong><div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="{{ Session::get('valid') }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ Session::get('valid') }}%">{{ Session::get('valid') }}% Valid</div></div><strong>Persentasi Uknown</strong><div class="progress"><div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="{{ Session::get('unknown') }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ Session::get('unknown') }}%">{{ Session::get('unknown') }}% Uknown</div></div><strong>Persentasi Hoax</strong><div class="progress"><div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="{{ Session::get('hoax') }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ Session::get('hoax') }}%">{{ Session::get('hoax') }}% Hoax</div></div>  <p class="lead"; style="margin-top: 40px">Reference: </p> @foreach($results as $web)<mark style="font-size: 17px">{{$web->title}}</mark><p style="margin-bottom: 0">{{$web->url}}</p><p style="line-height: 20px">{{$web->description}}</p>@endforeach'
                });
                @endif
            @endif
          @endif
        });
    </script>

    <script type="text/javascript">
        function loading()
        {
           var a=document.getElementById("loading_img");
           //a.innerHTML+="<img src="frontend/img/loading2.gif" style="margin-top: -7px;margin-left: 10px;">";
           
        }
    </script>

</body>

</html>
