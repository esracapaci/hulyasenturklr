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
                            <li><a href="urunler.php">Tüm Ürünler</a></li>
                            <li><a href="aloevia.php">LR ALOE VIA</a></li>
                            <li><a href="bodymission.php">Body Mission</a></li>
                            <li><a href="zeitgard.php">LR ZEITGARD</a></li>
                            <li><a href="starlarveparfumler.php">Starlar ve Parfümler</a></li>
                            <li class="active"><a href="healthnutrition.php">Gıda Takviye Ürünleri</a></li>
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
            <li><a href="gidatakviyeürünleri.php">Gıda Takviye Ürünleri</a></li>
            <li><a href="kozmetik.php">Kozmetik</a></li>
            <div class="form-area">  
                <form role="form" action="Mesaj_Yolla.php" method="POST">
                    <h2 style="margin-bottom: 25px; margin-top:55px; text-align: center;">Sizi Arayalım</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" name="adsoyad" placeholder="İsim" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email" required>
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
            <div class="main_cont">
                <h2>Gıda Takviye Ürünleri</h2>
                <p>LR'ın ürün yelpazesinde bulunan gıda takviyeleri tüketicilerin ihtiyaçlarına göre belirlenmiştir. Bu ürünlerin geliştirilmesinde değerli etken maddeler ve korunarak işleme tabii tutulması odak noktasını oluşturmaktadır.</p>
                <div class="col-md-12 thumbnail mcrslvr">
                    <div class="col-md-4">
                        <h3>Aloe Vera Jel İçecek: Çok yetenekli!</h3>
                        <img src="Assets\imaj\10_years_Aloe_Vera_53be9396cb.jpg" alt="" class="img-responsive">
                        <p> Bir çöl zambağı olan Aloe Vera, içerdiği maddeler nedeniyle bin yıllardan beri bilinen bir kültür bitkisidir. LR’ın Aloe Vera Jel İçecek ürünlerinde, insanlar için değerli olarak kabul edilen <b>Aloe Vera Barbadensis Miller</b>’in yaprağında bulunan saf jel kullanılır.</p>
                    </div>
                    <div class="col-md-3">
                        <div class="bdymssn_list1">
                            <h3>Aloe Vera Jel İçecek – LR’da</h3>
                            <li><i class="fa fa-check" aria-hidden="true"></i><b> Aloe Vera Jel İçecek “Ballı”:</b> Çiçek ballı klasik ürünümüz</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><b> Aloe Vera Jel İçecek “Şeftalili”:</b> Doğal, taze meyvemsi şeftali aromalı </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><b> Aloe Vera Jel İçecek ”Sivera“:</b> Doğal ısırgan otu özlü</li>
                        </div>
                        <hr>
                        <p>Daima kalite taleplerine cevap verebilmek için sadece iyi ham maddeleri kullanıyoruz. Yetiştiricilikte hiçbir şekilde tarım ilacı <b>(pestisit)</b> ve suni gübre kullanmıyoruz. Tüm diğer işlemlerde de kalite güvencesi mevcuttur. <b>SGS INSTITUT FRESENIUS</b> ve <b>IASC</b> tarafından düzenli olarak yapılan kontroller bunun teminatıdır.</p>
                    </div>
                    <div class="col-md-5">
                        <div class="bdymssn_list1">
                            <h3>Aloe Vera Jel içeceklerimizin avantajları</h3>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Sadece Almanya'da işlenmiştir</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Sadece saf yaprak jeli işlenmiştir. Aloinsizdir*</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Yüksek oranda Aloe Vera içerir</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Arı ballı ve doğal şeftali aromalı</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Özellikle koruyucu üretim</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><b>SGS INSTITUT FRESENIUS ve IASC tarafından sertifikalandırılmıştır</b></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Boya maddesi içermez</li>
                        </div>
                        <span style="float:left;font-size:10px;margin:15px">*Aloin oranı <0.1 mg/kg (ppm)</span>
                        <img src="Assets\imaj\Proud-member-IASC_1_f1a6bbf87b.png" alt="" data-toggle="tooltip" data-placement="bottom" title="IASC, uluslararası Aloe Vera Bilim Konseyi'dir. LR’ın tüm Aloe Vera Jel İçecekleri IASC’nin kalite işaretine sahiptir.">
                        
                    </div>
                </div>
                <div class="col-md-12 contact_us">
				    <h5>Daha detaylı bilgi için bizimle <a href="iletisim.php">iletişime</a> geçiniz.</h5>
			    </div>    
            </div>
		</div>
    </div>
    <div class="container footer">
        <div class="col-md-2 lrgkf">
            <a href="https://www.lrgkf.com/en/turkey.html" target="blank"><img src="Assets\imaj\lrgkfBanner.png" alt="" class="img-responsive"></a>
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