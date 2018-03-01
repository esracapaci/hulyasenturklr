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
                            <li class="active"><a href="zeitgard.php">LR ZEITGARD</a></li>
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
            <div class="bdymssn_list1 visible-xs-block, hidden-xs search_bar">
                <h3>Kullanıcılar Onaylıyor</h3>
                <li><i class="fa fa-check" aria-hidden="true"></i>%95’i, ZEITGARD 2 ile en iyi etken madde alımının olduğunu</li>
                <li><i class="fa fa-check" aria-hidden="true"></i>%90‘ı,  ciltte yoğun bir nem hissi sağlandığını</li>
                <li><i class="fa fa-check" aria-hidden="true"></i>%90’ı, cildin elastikiyetinde bir iyileşmenin sağlandığını</li>
                <li><i class="fa fa-check" aria-hidden="true"></i>%80’i, gözle görülebilen ve hissedilen hızlı sonuçların olduğunu</li>
                <li><i class="fa fa-check" aria-hidden="true"></i>%75’i göz çevresinde gözle görülür gençleşme olduğunu </li>
            </div>
        </div>
        <div class="col-md-10  main_right">
            <div class="main_cont">
                <h2>Zeitgard</h2>
                <p><b> Zamanı durduran güzellik için bütünsel bir çözüm</b></p>
                <p>Hiç bozulmayan bir gençliğe ve güzelliğe sahip olmak çoğu insanın uzun zamandır kurduğu bir hayaldir.
                     ZEITGARD Anti-Age Sistemi, sizlere zamanı durdurmanızda ve yüzünüzün sahip olduğu gençliği korkumanızda yardımcı olacak.
                      ZEITGARD evde profesyonel olarak kullanıma uygun geliştirilmiştir. Şimdiye kadar güzellik salonlarında kullanılan 
                      yenilikçi teknolojiye sahip bu sisteme güvenin.  Sadece üç adımda kalıcı sonuçlar elde edeceksiniz. 
                      İlk adımda yüzünüzü bir sonraki adıma en uygun hale getirmek için, derinlemesine temizleyerek başlayacaksınız. 
                      Devamında cilt kırışıklıklarını azaltan ve hızlı etkisiyle cilt üzerinde gözle görülebilir canlılık yaran Anti-Age
                       uygulaması geliyor. Son aşama olarak her cilt tipine uygun zengin içerikli bakımıyla, cilt yapısını yeniler ve ciltte
                        kalıcı genç ve taze bir görünüm bırakır. Daha fazla beklemeyin; zamanı geri alın. ZEITGARD ile güzelliğiniz sizin elinizde.</p>
                <div class="col-md-12 thumbnail">
                    <h2>Temizleme Sistemi</h2>
                    <div class="col-md-2">
                        <img src="Assets\imaj\Zeitgard_Application.png" alt=""class="img-responsive" >
                    </div>
                    <div class="col-md-4">
                        <p>Etkili Anti-Aging sistemi güçlü etkiye sahip, hassas bir cilt temizliği ile başlar.</p>
                        <div class="bdymssn_list1">
                            <h3>Faydaları</h3>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Tüm cilt ihtiyaçlarını karşılayan hassas ve derin bir temizlik</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Cilde zarar vermeden 10 kat daha fazla temizlik</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Eşsiz hijyenik MICROSILVER teknolojisi</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Parlak görünümlü temiz bir cilt için</li>
                        </div>
                    </div>    
                    <div class="col-md-3 usage">
                        <p><b>Bir dakikada ışıltılı ve temiz bir cilt mi?</b></p>
                        <p>Dermatest tarafından onaylandı: ZEITGARD Yüz Temizleme Fırçası klasik temizliğe göre 10 kat daha fazla etkili temizliği garantiliyor. ZEITGARD Yüz Temizleme cihazını temizle ürünü ile beraber yüzün her bölümüne (alın/burun, her bir yanak/çene) 20 saniyelik periyotlar halinde uygulayın. Cilt temizlenir, yenilenir, uyarılır ve düzenli kullanımda gerginleşebilir!</p>
                        <p><b>Etkin bakım sistemi</b></p>
                        <p>Bir dakikalık günlük kullanım ile gözle görülebilecek sonuçları ortaya çıkarır. ZEITGARD Yüz Temizleme Cihazı ve yüksek kalitedeki ZEITGARD temizleme ürünleri birbirleriyle uyum içerisindedir.</p>
                    </div>
                    <div class="col-md-3">
                        <div class="bdymssn_list1">
                            <h3>Gözle görülebilir sonuçlar</h3>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Derinlemesine temizlik ile daha güzel bir cilt</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Bir sonraki bakım aşaması için ideal bir hazırlık</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Masaj fonksiyonu sayesinde daha gergin ve düzgün bir cilt</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Daha parlak ve canlı görünen bir cilt dokusu</li>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 thumbnail">
                    <h2>Anti-Age Sistemi</h2>
                    <div class="col-md-2">
                        <img src="Assets\imaj\zeitgard-antiage.png" alt=""class="img-responsive" >
                    </div>
                    <div class="col-md-4">
                        <p>Sıcak/soğuk uygulaması cilt kırışıklıklarını düzeltir ve bir sonraki bakıma uygun hale getirir.</p>
                        <div class="bdymssn_list1">
                            <h3>Faydaları</h3>
                            <li><i class="fa fa-check" aria-hidden="true"></i>İlk uygulamadan sonra fark edilen sonuç</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Ciltte görülen gençleşme</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Kırışıklıkların azalması</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Cilt yapısının iyileşmesi</li>
                        </div>
                    </div>    
                    <div class="col-md-3 usage">
                        <p><b>Derinlemesine Etki Gösteren Cilt Bakımı</b></p>
                        <p>ZEIGARD Anti-Age Sistemi ürünlerinin yoğun bakımı ile birlikte ZEITGARD 2 mümkün olan en iyi sonuçlara ulaşır.Yüzdeki her bölge için özel olarak geliştirilmiş yüksek etken formüle sahip bu sistem, cilt için en iyi bakımı gerçekleştirir . Göz serumu göz çevresindeki ince cilt tabakasına en ideal günlük bakımı ile etkili ve uzun süren bir nem sağlar. Alın ve yanak çevresindeki daha kalın cilt tabakalarında oluşmuş kırışıklıklar için geliştirilmiş ZEITGARD Anti-Age system krem jellerin her ikisi de genç veya olgun ciltler için üretilmiş özel bir bakımdır. </p>
                    </div>
                    <div class="col-md-3">
                        <div class="bdymssn_list1">
                            <h3>Gözle görülebilir sonuçlar</h3>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Cilt daha genç görünür</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Kırışıklıklar gözle görülür biçimde azalır</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Cilt daha parlak bir görünüm alır</li>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 thumbnail">
                    <h2>Bakım Sistemi</h2>
                    <div class="col-md-2">
                        <img src="Assets\imaj\zeitgard-bakim-sistemi.png" alt=""class="img-responsive" >
                    </div>
                    <div class="col-md-4">
                        <p>Cilt yapısına özel bakımı tüm etkisini gösterebilmek için önceden bakıma hazır hale getirilmiş cilde mükemmel bir şekilde işler.</p>
                        <div class="bdymssn_list1">
                            <h3>Faydaları</h3>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Her yaştan kadın ve erkek için etkili cilt bakımı</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Tüm cilt tiplerine uygun özel formül yapısı</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Kırışıklıklarda gözle görülebilir düzelme</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Nemlendirme etkisi - anında</li>
                        </div>
                    </div>    
                    <div class="col-md-3 usage">
                        <p><b>Hiç Olmadığı Kadar Daha Etkili Yüz Bakımı</b></p>
                        <p>Tüm cilt tipine uygun yüksek etkili bakım serisi. Kişiye özel yüz bakımı ZEITGARD Anti-Age Bakım Sistemi ile mükemmel bir şekilde sağlanıyor. Erkek veya kadın hangi yaşta olursanız olun etkili yüz bakımı ile artık güzelliğinizi zamanın akşına bırakmayın, tam tersine kalıcı bir güzelliğe sahip olun.</p>
                        <p>ZEITGARD Bakım Sistemi cilt ile en uygun işlevi gerçekleştirebilen ve en iyi etkiye ulaşabilen en yüksek kalitedeki içerik maddelerine sahiptir. Buna ek olarak tüm yüz bakım ürünleri esensiyel amino asit içermektedir. Bu da cilt hücrelerinin uygulanan etken madde alımını daha iyi hale getirir ve ciltte kusursuz nemlendirme sağlar. Bu güçlü etken kompozisyonu sayesinde cildiniz gözle görülen canlı bir hal alır.</p>
                    </div>
                    <div class="col-md-3">
                        <div class="bdymssn_list1">
                            <h3>Amino asitler – hassas ciltler için bir artı</h3>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Cilt tabakasını korunma desteği</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Cilt yapısında artan esneklik</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Hücre duvarının daha hızlı yenilenmesi</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Daha parlak bir cilt</li>
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