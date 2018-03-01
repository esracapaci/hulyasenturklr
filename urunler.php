<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>LR Bağımsız İş Ortağı</title>
    <link rel="shortcut icon" href="Assets\imaj\lr_logo.png" type="image/x-icon" />
	<meta name="description" content="LR Health & Beauty üyelik başvurusu için formunu doldurunuz. Üye olarak LR ürünlerini indirimli alabilirsiniz.">
	<meta name="keywords" content="LR Health & Beauty Bağımsız İş Ortaklığı">
	
	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="Assets/css/bootstrap.css">
	<link rel="stylesheet" href="Assets/css/main_style.css">
	<link rel="stylesheet" href="Assets/css/owl.carousel.css">
	
    <!--JS-->
    <script type="text/javascript" src="Assets/js/jquery-1.11.3.js"> </script>
    <script type="text/javascript" src="Assets/js/bootstrap.js"> </script>
	<script type="text/javascript" src="Assets/js/owl.carousel.js"> </script>
    
</head>
<body>
    <div class="container-fluid header">
      <div class="container">
        <nav class="navbar navbar-default ">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="Assets\imaj\lr_brand.png" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="katalog.php">Ürün Kataloğu<span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <a href="urunler.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ürünler<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="urunler.php">Tüm Ürünler</a></li>
                            <li><a href="aloevia.php">LR ALOE VIA</a></li>
                            <li><a href="bodymission.php">Body Mission</a></li>
                            <li><a href="zeitgard.php">LR ZEITGARD</a></li>
                            <li><a href="starlarveparfumler.php">Starlar ve Parfümler</a></li>
                            <li><a href="healthnutrition.php">Gıda Takviye Ürünleri</a></li>
                            <li><a href="kozmetik.php">Kozmetik</a></li>
                        </ul>
                    </li>
                    <li><a href="uyelik.php">Üyelik</a></li>
                    <li><a href="sirketimiz.php">Şirket Hakkında</a></li>
                    <li><a href="iletisim.php">İletişim</a></li>
                </ul>     
                <form class="navbar-form navbar-right visible-xs-block, hidden-xs search_bar">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Arama">
                    </div>
                    <button type="submit" class="btn btn-default">Ara</button>
                </form>
                <div class="navbar-right social_buttons">
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="İnstagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="http://lrhulyasenturk.blogspot.com.tr/"data-toggle="tooltip" data-placement="bottom" title="Blogspot" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                </div> 
            </div><!-- /.navbar-collapse -->
        </nav>
      </div>
    </div>
    <div class="container">
        <div class="owl-carousel banner_slider">
            <div class="item">
                <img src="Assets\imaj\header1.jpg" alt="">
            </div>
            <div class="item">
                <img src="Assets\imaj\header2.jpg" alt="">
            </div>
            <div class="item">
                <img src="Assets\imaj\header3.jpg" alt="">
            </div>
        </div>
    </div>

<div class="clear"></div>
<div class="container site_slider_ayrac"></div>
    <div class="clear"></div>

    <div class="container">
        <div class="col-md-2 main_left">
            <li><a href="aloevia.php">LR ALOE VIA</a></li>
            <li><a href="bodymission.php">Body Mission</a></li>
            <li><a href="zeitgard.php">LR ZEITGARD</a></li>
            <li><a href="starlarveparfumler.php">Starlar ve Parfümler</a></li>
            <li><a href="healthnutrition.php">Gıda Takviye Ürünleri</a></li>
            <li><a href="kozmetik.php">Kozmetik</a></li>
            <div class="form-area">  
                <form role="form" action="Mesaj_Yolla.php" method="POST">
                    <h2 style="margin-bottom: 25px; margin-top:55px; text-align: center;">Sizi Arayalım</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" name="adsoyad" placeholder="İsim" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                    <input type="tel" class="form-control"  name="phone"  maxlength="10" pattern="[0-9]{10}" placeholder="Zorunlu Alan" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="sehir" placeholder="Şehir" required>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Gönder</button>
                </form>
            </div>
        </div>
        <div class="col-md-10  main_right">
            <div class="col-md-12 main_cont">
                <h2>Ürün Dünyası</h2>
                <p>LR’ın ürün yelpazesi doğrudan satış için optimum düzeyde elverişlidir. Gıda takviye ürünleri, bakım ürünleri, parfüm ve takılar;
                     tüm bunlar için şu geçerlidir: Yüksek oranda büyüyen pazarlar için yüksek kaliteli kullanım ve tüketim malları. </p>
                <div class="col-md-4">
                    <div class="thumbnail main_item">
                        <a href="aloevia.php">
                            <h2>LR ALOE VIA</h2>
                            <img src="Assets\imaj\Teaser_Aloe-Via_3ca1004a60.jpg" alt="" class="img-responsive">
                            <p>Aloe Vera'nın besleyici ve yenileyici gücü ile doğal güzellikte ve sağlıklı bir cilt yolunda – LR ALOE VIA bunun için vardır. 
                                Burada LR ALOE VIA markasının özelliklerini keşfedin ve doğal güzellikte bakımlı bir cilt için tamamen kişisel yolunuzu bulun.</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail main_item">
                        <a href="bodymission.php">
                            <h1>Body Mission</h1>
                            <img src="Assets\imaj\header-body-mission1_53644ce0f8.jpg" alt="" class="img-responsive">
                            <p>Yeni" Body Mission güncel yaşam tarzı trendleri ile birlikte ilerliyor: "Beslenme" ve "Motivasyon" adımlarına ek olarak, konsept artık "Fitness" egzersizlerini de içeriyor.</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail main_item">
                        <a href="zeitgard.php">
                            <h1>LR ZEITGARD</h1>
                            <img src="Assets\imaj\Teaser_Zeitgard_21b1099672.jpg" alt="" class="img-responsive">
                            <p>LR ZEITGARD Anti-Age Bakım Sistemi 3 adımda daha genç bir cilde kavuşmanızı sağlayan kapsamlı bir konseptir.</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail main_item">
                        <a href="starlarveparfumler.php">
                            <h1>Starlar ve Parfümler</h1>
                            <img src="Assets\imaj\Header_Starbox_2015_692870dbb3.jpg" alt="" class="img-responsive">
                            <p>LR dünya çapındaki parfüm evleri ile çalışmaktadır ve böylelikle parfümlerin kalitesi Bruce Willis
                                 gibi starlar tarafından da kabul edilmiştir.</p>
                        </a>
                    </div>
                </div><div class="col-md-4">
                    <div class="thumbnail main_item">
                        <a href="gidatakviyeürünleri.php">
                            <h1>Gıda Takviye Ürünleri</h1>
                            <img src="Assets\imaj\Header_Dietry_supple_281a43f2d9.jpg" alt="" class="img-responsive">
                            <p>Vücudunuza destek verin. LR'ın gıda takviye ürünleri ile beslenmenize destek sağlayabilirsiniz.</p>
                        </a>
                    </div>
                </div><div class="col-md-4">
                    <div class="thumbnail main_item">
                        <a href="kozmetik.php">
                            <h1>Kozmetik</h1>
                            <img src="Assets\imaj\Header_cosmetics_7d9b156d83.jpg" alt="" class="img-responsive">
                            <p>LR bakım ve kozmetik ürünlerinin özellikleri modern teknoloji, yenilikçi etken maddeler ve özel içeriklerdir.</p>
                        </a>
                    </div>
                </div>
            </div>
		</div>
    </div>
    <div class="container footer">
        <div class="col-md-2 lrgkf">
            <a href="https://www.lrgkf.com/en/turkey.html" target="blank"><img src="Assets\imaj\lrgkfBanner.png" alt=""></a>
        </div>
        <div class="col-md-5">
            <div class="copy">
               <p>2018 © www.hulyasenturk.com | Tüm hakları saklıdır.</p>
               <p>LR Bağımsız İş Ortağı Hülya Şentürk'ün sayfasında bulunmaktasınız.Bu web sayfası LR Health & Beauty Systems’ın resmi web sayfası değildir ve içeriği LR Health & Beauty Systems’ı bağlamaz.</p>
            </div>
        </div>
        <div class="col-md-5">
            <div class="col-md-4 col-xs-12">
                <div class="join">
                    <a href="urunler.php"><button>Ürünler Hakkında Bilgi Almak İstiyorum</button></a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="join">
                    <a href="iletisim.php"><button>Ürün Satın Almak İstiyorum</button></a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="join">
                    <a href="uyelik.php"><button>Üye Olmak İstiyorum</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<script>
$('.banner_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
	autoplay:true,
	navText : ["<em class='fa fa-chevron-circle-left' aria-hidden='true'></em>","<em class='fa fa-chevron-circle-right' aria-hidden='true'></em>"],
	items:1
})
</script>

<script>
    function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);
</script>