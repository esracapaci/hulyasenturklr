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
                            <li><a href="healthnutrition.php">Gıda Takviye Ürünleri</a></li>
                            <li><a href="kozmetik.php">Kozmetik</a></li>
                        </ul>
                    </li>
                    <li><a href="uyelik.php">Üyelik</a></li>
                    <li class="active"><a href="sirketimiz.php">Şirket Hakkında</a></li>
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
        <div class="col-md-3 main_left">
            <div class="form-area">  
                <form role="form" action="Mesaj_Yolla.php" method="POST">
                    <h2 style="margin-bottom: 25px; text-align: center;">Sizi Arayalım</h2>
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
            <div class="follow_us">
                <div class="col-md-12 social_button">
                <a href="#"  target="_blank"> <button data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></button></a>
                </div>
                <div class="col-md-12 social_button">    
                    <a href="#"  target="_blank"><button data-toggle="tooltip" data-placement="top" title="İnstagram"><i class="fa fa-instagram" aria-hidden="true"></i></button></a>
                </div>
                <div class="col-md-12 social_button">     
                    <a href="http://lrhulyasenturk.blogspot.com.tr/" target="_blank"><button data-toggle="tooltip" data-placement="top" title="Blogspot"><i class="fa fa-google-plus" aria-hidden="true"></i></button></a>
                </div>
                <img src="Assets\imaj\Untitled-4.png" alt="">
            </div> 
        </div>
        <div class="col-md-9  main_right">
            <div class="col-md-12 main_cont">
                <h2>Şirket</h2>
                <p>LR Health & Beauty Systems piyasada 30 yıldan beri başarıyla faaliyet göstermektedir. </p>
                <p>Şirketi ve şirketin başarı konseptini tanıyın. Avrupa’nın doğrudan satış pazarındaki en
                 başarılı şirketlerden biri hakkında daha fazla bilgi edinin. </p>
                <div class="col-md-4">
                    <div class="thumbnail main_item">
                        <h3>Başarı konsepti</h3>
                        <img src="Assets\imaj\LR_success_concept_0d222094d3.jpg" alt="">
                        <p>Kökleri sağlam beş başarı faktörünün uyumlu işbirliği LR’ın başarısını garantiler.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail main_item">
                        <h3>Yönetim</h3>
                        <img src="Assets\imaj\Header_Management_c4e6c1bd67.jpg" alt="">
                        <p>Almanya’nın Ahlen (Westphalia) şehrinde bulunan LR Ana Merkezini 3 Genel Müdür yönetmektedir.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail main_item">
                        <h3>Kilometre taşları</h3>
                        <img src="Assets\imaj\LR_success_concept_0d222094d3.jpg" alt="">
                        <p>LR tarihçesi – Sağlık ve Güzellik ile başarı rotasında. En başarılı Alman doğrudan satış
                           şirketlerinden biri olan LR’ın „kilometre taşlarını“ burada görebilirsiniz!</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail main_item">
                        <h3>Tüm dünyada LR</h3>
                        <img src="Assets\imaj\Header_Besuchertage_0058d6e7a8.jpg" alt="">
                        <p>Ahlen'de (Vestfalya) kurulan LR tüm dünyada 32 ülke tarafından temsil edilmektedir ve diğer ülkeler de yakında
                             aramıza katılacaklardır.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail main_item">
                        <h3>LR Global Kids Fund</h3>
                        <img src="Assets\imaj\Header-LRGKF_88006a9584.jpg" alt="">
                        <p>LR GLOBAL KIDS FUND kendi değerlerinin bir kanıtıdır. Vakfın kurulması ile LR bulunduğu her yerde sosyal sorumluluk
                           üstlenmektedir.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail main_item">
                        <h3>İş ortakları</h3>
                        <img src="Assets\imaj\Header_Partner_da222f4ee4.jpg" alt="">
                        <p>LR, birbirinden farklı alanlarda birçok şirketlerle işbirliği yapmaktadır. Hepsi yüksek kalite standardını bizimle paylaşmaktadır.</p>
                    </div>
                </div>
            </div>
        
            <div class="col-md-12 main_cont_second">
                <div class="col-md-4">
                    <div class="thumbnail main_item">
                        <h3>Bilimsel Kurul</h3>
                        <img src="Assets\imaj\header_flipchart.jpg" alt="">
                        <p>Araştırmacılardan ve bilim adamlarından oluşan bir uzman ekip ham madde araştırma çalışmalarında, 
                        profesyonel analizlerde ve bilimsel araştırmalarda LR’ı destekler </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail main_item">
                        <h3>Kalite Kontrolü</h3>
                        <img src="Assets\imaj\0007_Header_quality-inspections_film_neu.jpg.jpg" alt="">
                        <p>Gerçekleştirdiğimiz kapsamlı kalite kontrolleri sayesinde ürünlerimiz üstün nitelik ve güvenilirlik bakımından yüksek itibara sahiptir.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail main_item">
                        <h3>Ödüller</h3>
                        <img src="Assets\imaj\0006_header_aloe_fresenius.jpg.jpg" alt="">
                        <p>Çok sayıda LR ürünü örneğin FRESENIUS ENSTİTÜSÜ ve Dermatest tarafından defalarca ödüllendirilmiştir. 50’yi aşkın Aloe Vera ürününde IASC işareti bulunmaktadır.</p>
                    </div>
                </div>
            </div>
            <h2>Avantaj</h2>
                <p>LR, satış ortaklarına bir dizi avantaj sunar. Kar marjı ve prim ödemeleri içeren ücretlendirme konsepti, 
                LR ortaklarının yararlandığı avantajlardan sadece birisidir. Burada performansın ödüllendirilmesi daima odak noktadadır.</p>
                <div class="col-md-4">
                    <div class="thumbnail main_item">
                        <h3>Ücretlendirme Sistemi</h3>
                        <img src="Assets\imaj\0014_Headteaser_Remuneration_2.jpg.jpg" alt="" class="img-responsive">
                        <p>Ürünlerin satışı ve bireysel satış organizasyonunun kurulması LR tarafından prim ve komisyon ödemeleri ile ödüllendirilir.  </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail main_item">
                    <h2>Otomobil Konsepti</h2>
                    <img src="Assets\imaj\0013_Headteaser_Car_plan_4.jpg.jpg" alt="" class="img-responsive">
                      <p>LR İş ortaklarına, elde ettikleri ciroya bağlı olarak kişisel kullanım için araçlar sunar. Bu araçlar Mercedes’in çeşitli modelleri ve Porsche’dir. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail main_item">
                        <h2>Ödül</h2>
                        <img src="Assets\imaj\0012_Headteaser_Recognition.jpg.jpg" alt="" class="img-responsive">
                        <p>LR’da performans fevkalade şekilde ödüllendirilir. Başarılı iş ortakları örneğin gala etkinliklerine veya sıra dışı seyahatlere davet edilir.  </p>
                    </div>
                </div>
                <h2>Fırsatlar</h2>
                <div class="col-md-4">
                    <div class="thumbnail main_item">
                        <h3>LR Satıcısı olarak ikna etmek</h3>
                        <img src="Assets\imaj\LR_Sales_partners1.jpg" alt="">
                        <p>Sağlık ve güzellik sırrınızı kendinizde saklamayın, arkadaşlarınızın ve yakın çevrenizin de onaylanmış LR kalitesinden 
                        yararlanmasına izin verin. Her iki taraf için iyi bir anlaşma olmuş olur: Müşteriniz seçkin ürünleri adil fiyatlardan
                        alır siz de ek kazanç elde etmiş olursunuz.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail main_item">
                        <h3>LR Müşterisi olarak yararlanın</h3>
                        <img src="Assets\imaj\lrcustomer.jpg" alt="">
                        <p>LR kalitesi ikna edicidir bu sebeble LR sağlık ve güzellik alanında önde gelen lider firmalar arasındadır. Yüzbinlerce memnun müşteri 
                        LR’ın arkasında durduğu test edilmiş ve onaylanmış kalite ve ürün çeşitliliğine güvenmektedir. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail main_item">
                        <h3>LR İş ortağı olarak yükselmek</h3>
                        <img src="Assets\imaj\lrpartner.jpg" alt="">
                        <p>LR fırsatı seçkin ürünlerin satışı ile sona ermez. Eğer isterseniz LR’ı mesleğiniz haline getirebilir alt ekipler oluşturarak onların yardımıyla çekici bir kazanç elde edebilirsiniz.  </p>
                    </div>
                </div>
        </div>
			<div class="col-md-12 contact_us">
				<h5>Daha detaylı bilgi için bizimle <a href="#">iletişime</a> geçiniz.</h5>
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