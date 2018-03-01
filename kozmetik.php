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
                            <li><a href="gidatakviyeürünleri.php">Gıda Takviye Ürünleri</a></li>
                            <li class="active"><a href="kozmetik.php">Kozmetik</a></li>
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
            <div class="clear"></div>
            <img src="Assets\imaj\dermatest_logo_7466494f28.png" alt="" class="img-responsive">
            <h3>Testler neden bu kadar önemlidir?</h3>
            <p>Güvenmek iyidir, kontrol etmek ise daha iyidir. Şu anda 32 ülkede yaklaşık 300.000 iş ortağı „Alman kalite standardına sahip ürünler“ şeklindeki kalite sözümüze güveniyor. Harici kuruluşlar ve çok sayıda araştırma LR’ın mükemmel performansının altını çizmektedir. Bu nedenle, çok sayıda ürünü örneğin SGS INSTITUT FRESENIUS, <b>Dermatest</b>  ve IASC gibi bağımsız kontrol enstitülerine düzenli olarak kontrol ettiriyoruz. Çünkü bizim için kalite konusunda taviz vermek yoktur! </p>
            
        </div>
        <div class="col-md-10  main_right">
            <div class="main_cont">
                <h2>Kozmetik</h2>
                <p>Modern teknolojileri ve içerik maddelerini kullanan LR yüz ve vücut bakımı alanında uzun yıllardır standartları belirliyor. En çok satan ürünlerimizi keşfedin: Mikrosilver ile fonksiyonel cilt bakımı, etkisi onaylanan Anti Aging çözümleri, sertifikalı Aloe Vera ürünleri, profesyonel kalitede saç bakımı ve birinci sınıf kozmetik.</p>
                <div class="col-md-12 thumbnail mcrslvr">
                    <h2>LR MICROSILVER PLUS</h2>
                    <div class="col-md-4">
                            <img src="Assets/imaj/mcrslvr.jpg" alt="" class="img-responsive">
                            <p> Microsilver çok sayıda vücut ve cilt bakım ürününde kullanılır. Diş hijyeni alanında hassas diş eti için olan ve ağız kokusuna karşı ürünlerde kullanılır. Microsilver, cilt kremlerinde cillteki kirleri ve sivilceleri giderir ve kuru, çatlak ciltte yardımcı olur. Microlsilver’den üretilen ürünlerle kepek ve vücut / koltuk altı terine karşı da etkili önlem alınabilir.</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Microsilver nedir?</h3>
                        <p><b>MICROSILVER PLUS, LR’ın tepeden tırnağa tüm vücut için sunduğu fonksiyonel bakımdır.</b>
                       MICROSILVER PLUS cilt bakım ürünlerimizin avantajları çoktur: Microsilver etken maddesi antibakteriyel, düzenleyici ve sağlamlaştırıcı etkilidir.  Her bir cilt bakımı ürününün etkisi değerli ilave içerik maddeleri veya mineral bileşimleri ile birlikte optimize edilir. </p> 
                        <p>Microsilver, süngerimsi bir yüzey yapısına sahip olan nano gözenekli bir gümüştür (gümüş tozu, parçacık büyüklüğü yakl. 11,6 µm). Büyük ve aktif bir antimikrobiyolojik yüzeyi olan bu malzemenin etkisi MICROSILVER serisinin ürünlerinde cilt üzerinde kozmetik uygulama için ilk kez kullanılabilir hale getirilmiştir.</p> 
                        <p><i class="fa fa-exclamation" aria-hidden="true" style="color:#8ca084;margin-right:5px;"></i><b>Saf mikro gümüş </b> antibakteriyel, düzenleyici ve sağlamlaştırıcı etkilidir.  Her bir cilt bakımı ürününün etkisi örneğin hidroksiapatit, defensil, ektoin, mineral taş özütü veya mineral bileşikleri gibi değerli ilave içerik maddeleri ile birlikte daha da güçlendirilir.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="bdymssn_list1">
                            <h3>Her bir Microsilver Plus ürünü 3 temel etken madde içerir</h3>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Saf gümüş</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Çinko bileşikleri</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Dekspantenol</li>
                        </div>
                        <div class="bdymssn_list1">
                            <h3>Her bir Microsilver Plus ürünü</h3>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Paraben (koruyucu madde) içermez</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Boya maddesi içermez</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>%100 doğal koku içerir</li>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 thumbnail">
                    <h2>Kozmetik</h2>
                    <div class="col-md-3">
                        <h3 style="margin-top:45px">Rimel, Ruj, Güzellik...</h3>
                        <p>Makyaj LR’da uzun yıllara dayanan bir geleneğe sahiptir. Uzun yıllara dayanan bu deneyim üretim konusunda en güncel bilgiyle birleşince LR tarihinin en iyi dekoratif kozmetik ürünleri ortaya çıkıyor. Eşsiz formülleri ve yenilikçi ürünleri içeren <b>LR Colours</b> ve <b>LR Deluxe</b> ürün serileri. </p>
                        <p>LR bu alandaki formüllerini, dekoratif kozmetik alanında pazar lideri olan İtalya’da faaliyet gösteren tedarikçilerden temin etmektedir. </p>
                    </div>    
                    <div class="col-md-3">
                        <div class="bdymssn_list1">
                            <h3>LR Colours: Her gün için makyaj ve rimel</h3>
                            <img src="Assets\imaj\Colours_Prdoucts_227536f10c.jpg" alt="" class="img-responsive">
                            <li><i class="fa fa-check" aria-hidden="true"></i>Her tipe uygun mükemmel renkler</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Mineral kalitesi</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Paraben ve mineral yağlar içermeyen yumuşak tekstür</li>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="bdymssn_list1">
                            <h3>LR Deluxe: Yüksek kalitede rimel ve makyaj</h3>
                            <img src="Assets\imaj\Deluxe_Products_5ce36f4408.jpg." alt="" class="img-responsive">
                            <li><i class="fa fa-check" aria-hidden="true"></i>Çok farklı makyajlar için</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>En yüksek parfümeri kalitesi</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Mükemmel uyumlu temel baz tekstürler</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Büyüleyici etkili efekt ürünleri</li>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="bdymssn_list1">
                            <h3>„Mineral kalitesi“ ne demektir?</h3>
                            <p>Mineralli pudra ürünlerinde normal talk pudrası yerine doğada mevcut olan mineral pigmentler kullanılır.</p>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Sentetik yağlar içermez</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Silikon içermez</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Parfüm içermez</li>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 thumbnail">
                    <div class="col-md-6">
                        <div class="main_item">
                            <a href="aloevia.php">
                                <h1>LR ALOE VIA</h1>
                                <img src="Assets\imaj\Teaser_Aloe-Via_3ca1004a60.jpg" alt="" class="img-responsive">
                                <p>Aloe Vera'nın besleyici ve yenileyici gücü ile doğal güzellikte ve sağlıklı bir cilt yolunda – LR ALOE VIA bunun için vardır. 
                                Burada LR ALOE VIA markasının özelliklerini keşfedin ve doğal güzellikte bakımlı bir cilt için tamamen kişisel yolunuzu bulun.</p>
                            </a>
                        </div>
                    </div>    
                    <div class="col-md-6">
                        <div class="main_item">
                            <a href="zeitgard.php">
                                <h1>LR ZEITGARD</h1>
                                <img src="Assets\imaj\Teaser_Zeitgard_21b1099672.jpg" alt="" class="img-responsive">
                                <p>LR ZEITGARD Anti-Age Bakım Sistemi 3 adımda daha genç bir cilde kavuşmanızı sağlayan kapsamlı bir konseptir.</p>
                            </a>
                        </div>
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