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
                            <li class="active"><a href="bodymission.php">Body Mission</a></li>
                            <li><a href="zeitgard.php">LR ZEITGARD</a></li>
                            <li><a href="starlarveparfumler.php">Starlar ve Parfümler</a></li>
                            <li><a href="gidatakviyeürünleri.php">Gıda Takviye Ürünleri</a></li>
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
            <div class="clear"></div>
            <h3>Farklı tatların çeşitliliği</h3>
            <p>Body Mission – Hayalinizdeki kiloya giden yoldaki en büyük yardımcınız. Farklı tatlara ve geniş bir tarif yelpazesine sahip olan konsept motivasyonunuzu en yüksek seviyede tutmaya yardım edecek. Ayrıca, çok kısa sürede hazırlayabileceğiniz öğünler kolayca günlük yaşantınıza uyum sağlayacak.</p>
            <div class="bdymssn_list1 visible-xs-block, hidden-xs">
                <li><i class="fa fa-star" aria-hidden="true"></i>Figuactive ürünleri az kalorili diyet uygulaması sırasında günde iki öğünün yerini alarak kilo verilmesine yardımcı olur.</li>
                <li><i class="fa fa-star" aria-hidden="true"></i>Figuactive ürünleri az kalorili diyet uygulaması sırasında günde bir öğünün yerini alarak kilo verdikten sonra verilen kilonun korunmasına yardımcı olur.</li>
            </div>
            
        </div>
        <div class="col-md-10  main_right">
            <div class="main_cont">
                <h2>Body Mission</h2>
                <p>"Yeni" Body Mission güncel yaşam tarzı trendleri ile birlikte ilerliyor: "Beslenme" ve "Motivasyon" adımlarına ek olarak, konsept artık "Fitness" egzersizlerini de içeriyor.</p>
                <div class="col-md-12 thumbnail deneme">
                <h2>Beslenme</h2>
                    <div class="col-md-8">
                        <div class=" media-left deneme2">
                            <div class="col-md-6">
                                <img src="Assets\imaj\ernaehrung_acf5fd64081.jpg" alt=""class="img-responsive" >
                            </div>
                            <div class="col-md-6">
                                <p>Bilimsel sonuçlara dayalı yeni keşifler: Figuactive ürünleri lezzetli tatları ile ön plana çıkarlar. 
                                Tatlı kremamsıdan çıtıra ve doyurucuya kadar leziz tatlarıyla geniş bir ürün yelpazesi sunar. 
                                Shakerlar ve çorbalar kolayca günlük yaşantınıza uyum sağlar. 
                                Özellikle diyetinize yardımcı Karışık Bitki Çayı veya Protein Drink gibi ürünler en büyük destekçileriniz!</p>
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-4 bdymssn_list deneme2">
                        <li><i class="fa fa-check" aria-hidden="true"></i>Lezzetli ve rahat: Figuactive ürünleri!</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Yararlı destekçilerden en iyi destek</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>100'ün üzerinde farklı  tarif</li>
                    </div>
                    <div class="overlay visible-xs-block, hidden-xs hidden-sm">
                        <div class="col-md-12 bdymssnut">
                            <i class="fa fa-cutlery" aria-hidden="true"></i>
                        </div>    
                        <div class="col-md-3 bmexp">
                            <h3>Body Mission</h3>
                            <img src="Assets\imaj\body-mission1.png" alt="" class="img-responsive">
                            <p>Bir kutu, birçok seçenek: Body Mission’nın içeriğini kişisel tercihinize göre yapılandırabiliriniz. Çorbalar ve Shakerler – tatlı, tuzlu, meyveli gibi her birinin farklı tatları mevcuttur. Aynı zamanda paket içeriğinde pratik diyet arkadaşınız olan kişisel zayıflama koçunuza ulaşabileceğiniz bir kod bulunmaktadır.</p>
                        </div>
                        <div class="col-md-3 bmexp2">
                           <h3>Shakeler</h3>
                            <img src="Assets\imaj\shakes1.png" alt="" class="img-responsive" >
                            <p>Karıştırın! Kremamsı, lezzetli ve süper hızlı: Figuactive Shakeler tam bir öğün yerine geçerek gerekli tüm besin maddelerini sağlar. Latte-Macchiato, Çilek-Muz veya Vanilya aromalı shakeler özellikle sabah ve akşam saatlerinde mutfağınızın vazgeçilmezi olacak.</p>
                        </div>
                        <div class="col-md-3 bmexp3">
                            <h3>Çorbalar</h3>
                            <img src="Assets\imaj\suppe1.png" alt="" class="img-responsive" >
                            <p>Sıcak ve rahatlatıcı! Figuactive çorbalar benzersiz tatlarıyla içinizi ısıtacak: ferahlatan Akdeniz Usulü Domates Çorbası, egzotik Hint Usulü Sebze Çorbası veya baharatlı Patates Çorbası Auberge</p>
                        </div>
                        <div class="col-md-3 bmexp4">
                            <h3>Diyet Destekçileriniz</h3>
                            <p>Tüm Body Mission Setleri ile birlikte kullanabileceğiniz etkin destekçiler: Protein Drink sporunuza eşlik edecek mükemmel bir destekçidir. Ayrıca Figuactive Karışık Bitki çayı ile akşamların keyfini daha rahat çıkartabilirsiniz. ProBalance ise diyetiniz boyunca tüm önemli besin maddelerini size sağlar.</p>
                            <div class="bdymssn_list1">
                                <li><i class="fa fa-check" aria-hidden="true"></i>Figuactive Karışık Bitki Çayı</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Figuactive Protein Drink</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>ProBalance</li> 
                            </div>
                        </div>   
                    </div>
                
                    <div class="col-md-12 bdymssn deneme3">
                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                    </div>
                </div>   
                <div class="col-md-12 thumbnail">
                <h2>Fitness</h2>
                    <div class="col-md-8">
                        <div class="media-left">
                            
                            <div class="col-md-6">
                                <img src="Assets\imaj\fitness_f0665f8866.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="col-md-6">
                                <p>Body Mission’daki yenilikler neler? Hayalinizdeki kiloya daha da hızlı ulaşabilmek için Body Mission şimdi egzersiz yapmanıza olanak sağlayan fitness videolarını da içeriyor. Egzersizlerde bulunan tekrarların sayısını isteğe göre değişebilir ve her zorluk seviyesine uyarlanabilir.</p>
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-4 bdymssn_list">
                    <li><i class="fa fa-check" aria-hidden="true"></i>Etkili antremanlarla spor videoları</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Her seviye için uygundur</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Eğlence için kolay hareketler</li>
                    </div>
                    <div class="col-md-12 bdymssn">
                        <i class="fa fa-male" aria-hidden="true"></i>
                    </div>
               </div>
               <div class="col-md-12 thumbnail">
               <h2>Motivasyon</h2>
                    <div class="col-md-8">
                        <div class="media-left">
                            
                            <div class="col-md-6">
                                <img src="Assets\imaj\motivation_dd0734a22a.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="col-md-6">
                                <p>Daha bireysel, daha kişisel: Body Mission Paketi'nde bulunan kod, online zayıflama koçunuza kayıt olmanızı sağlar. Zayıflama koçu kişiselleştirilmiş e-postalar yoluyla sizi motive eder ve pek çok lezzetli yemek tarifi ile diyetinizi destekler. Ayrıca, kilo verme konusundaki ipuçlarını ve püf noktalarını da sunar!</p>
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-4 bdymssn_list">
                    <li><i class="fa fa-check" aria-hidden="true"></i>Kişisel hedefiniz? 28 günlük Body Mission!</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Size yol gösterir ve motive ederiz</li>
                    </div>
                    <div class="col-md-12 bdymssn">
                        <i class="fa fa-magic" aria-hidden="true"></i>
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