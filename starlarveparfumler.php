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
                            <li class="active"><a href="starlarveparfumler.php">Starlar ve Parfümler</a></li>
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
            <div class="clear"></div>
            <div class="bdymssn_list1 visible-xs-block, hidden-xs search_bar">
                <h3>LR kokularını eşsiz kılan nedir?</h3>
                <li><i class="fa fa-check" aria-hidden="true"></i>Özellikle yüksek parfüm yağ oranı</li>
                <li><i class="fa fa-check" aria-hidden="true"></i>“Dermatest“ tarafından kontrol edilen tutunma kabiliyeti</li>
                <li><i class="fa fa-check" aria-hidden="true"></i>Çok özel Starbox kokuları - Neredeyse hiçbir koku üreticisinde LR'ın ürün yelpazesinde olduğu kadar Star kokusu yoktur</li>
                <li><i class="fa fa-check" aria-hidden="true"></i>Dünyanın en saygın parfümerileri olan işbirliği</li>
                <li><i class="fa fa-check" aria-hidden="true"></i>Çok iyi fiyat performansı</li>
                <li><i class="fa fa-check" aria-hidden="true"></i>Eau de Parfum'den duş jeline kadar komple ürün yelpazesi</li>
                <li><i class="fa fa-check" aria-hidden="true"></i>Alman kalite standartı</li>
            </div>
            <div class="side_cont visible-xs-block, hidden-xs search_bar">
                <h3>Kokunun tutunmasına ilişkin Dermatest incelemesi </h3>
                <p>Dermatest LR ile ortaklaşa çalışarak ilk kez kokunun tutunma kabiliyetini ölçmeye yarayan bir yöntem geliştirdi.  Bu geniş kapsamlı araştırma çalışması yardımıyla, şimdiye kadar ürettiğimiz kokuların tutunma kabiliyetini optimize ettiğimiz kokuların tutunma kabiliyeti ile birebir karşılaştırma imkanına sahip olduk. Sonuç: Yüksek kaliteli içerik maddelerini kullanarak kokularımızın şimdiye kadar sahip olduğu tutunma kabiliyetini kalıcı bir şekilde iyileştirmeyi başardık. Bunu bağımsız Dermatest enstitüsü onaylamaktadır.</p>
            </div>
            <div class="swarovski visible-xs-block, hidden-xs search_bar">
                <img src="Assets\imaj\swarovski_logo.jpg" alt="" class="img-responsive">
                <h4 style="border-bottom:solid 2px #8ca084">Swarovski® kristalleriyle donatılmış Özel Koku Koleksiyonu</h4>
                <p>Muhteşem detaylarla donatılmış Lightning Collection Serisi: Her bir “Lightning” şişesi üzerinde, Swarovski® kristallerinin gerçek olduğunu kontrol edebileceğiniz takip numarası bulunmaktadır!</p>
            </div>
        </div>
        <div class="col-md-10  main_right">
            <div class="main_cont">
                <div class="col-md-12 thumbnail">
                    <h2>Guido Maria Kretschmer</h2>
                    <p>Ünlü modacımız artık bir koku tasarımcısı oluyor. Sadece LR farkıyla Guido Maria Kretschmer iki muhteşem kokuyu ortaya çıkarıyor.</p>
                    <div class="col-md-2">
                        <img src="Assets\imaj\GMK-ByLR_e7f2805741.jpg" alt=""class="img-thumbnail" >
                    </div>
                    <div class="col-md-4">
                        <p><b>Her iki koku da bünyesinde % 100 Guido Maria Kretschmer’i barındıryor. Biri kadınlar, biri erkekler için.</b></p>
                        <p>Modacı Guido Maria Kretschmer sonunda uzun zamandır beklediği hayalini LR ile gerçekleştirerek, ilk koku koleksiyonunu oluşturdu. Özel olan:  Kokular tamamen Guido Maria Kretschmer‘ın karekterini yansıtıyor: modacı, showmen ve diğer insanların ruhuna dokunan biri olarak. </p>
                        <p>„Sadece baştan çıkarmak istemiyorum, kalbe dokunmak istiyorum“ Guido Maria Kretschmer’in inancı bu. Bu düşünce parfümlerinde de bulunuyor:  Detaylara aşık ve insan odaklı, bir klasik oluşturma potensiyeline sahip şıklığı , ayırt edilebilen tasarımcı imzası ile benzersiz.</p>
                    </div>    
                    <div class="col-md-3 ">
                       <h3><b data-toggle="tooltip" data-placement="bottom" title="Oryantal ▪ Baharatlı  ▪ Çekici"> Guido</b> Maria Kretschmer</h3>
                       <img src="Assets\imaj\Guido_Maria_Kretschm_blck.jpg" alt="" class="img-responsive" style="height:200px;width:auto">
                    </div>
                    <div class="col-md-3">
                        
                        <h3>Guido<b data-toggle="tooltip" data-placement="bottom" title="Çiçeksi  ▪ Meyveli  ▪ Alımlı ▪ Oryantal"> Maria</b> Kretschmer</h3>
                        <img src="Assets\imaj\Guido_Maria_Kretschm_white.jpg" alt="" class="img-responsive" style="height:200px;width:auto">      
                    </div>
                </div>
                <div class="col-md-12 thumbnail">
                    <h2>Cristina Ferreira</h2>
                    <p>Portekiz’in başarı hikayesi devam ediyor: Hareketli ve neşeli spiker ve kamuoyunun sevgilisi Cristina Ferreira şimdi tüm dünyayı kokusuyla büyülüyor.</p>
                    <div class="col-md-2">
                        <img src="Assets\imaj\Header_Cristina_Ferr_839da6d54d.jpg" alt=""class="img-thumbnail" >
                    </div>
                    <div class="col-md-4">
                        <p><b>Parfüm şişesindeki Portekizli yaşam sevinci</b></p>
                        <p>Cesur bakışlarla narin bir çekicilik. Cristina Ferreira Portekiz’de en ünlü TV yüzlerinden biri ve her gün binlerce hayranını sempatik ve doğal zarafetiyle kendine hayran bırakıyor.</p>
                        <p>Şimdi ise onun eşsiz çekiciliği, havası ve esintisi bir kokuda birleşiyor ve herkesi büyülüyor – „Meu“, Türkçe: „Benim“. Narin portakal çiçeği ve gülden gelen tatlı meyveli bergamot ile buluşuyor , sıcak vanilya baştan çıkarıcı paçuli ile uyum sağlayarak adeta dans ediyor. Kendine has özelliği ile Cristina Ferreiras’ın cazibeli kokusu.</p>
                    </div>    
                    <div class="col-md-3 ">
                       <h3>Meu by Cristina Ferreira</h3>
                       <img src="Assets\imaj\MEU_fako_32c3eef9d6.jpg" alt="" class="img-responsive" style="height:200px;width:auto">
                    </div>
                    <div class="col-md-3">
                        
                        <h3>Cristina Hakkında</h3>
                        <p>Cristina Ferreira Portekiz’in en ünlü TV yıldızı ve sunucusu olmasının yanı sıra ödüllü bir gazetecidir. Sempatik ve enerjik kişiliği ile hayranlarını her gün eşsiz ışığıyla büyülüyor ve hayatlarına renk veriyor. Bu özelliklerini birazını da artık koku dünyasına da katıyor</p>      
                    </div>
                </div>
                <div class="col-md-12 thumbnail">
                    <h2>Karolina Kurkova</h2>
                    <p>Dünyanın en başarılı süper modellerinden bir tanesi. Karolina Kurkova LR’da özel olarak ilk parfüm serisini tanıtmaktadır.</p>
                    <div class="col-md-2">
                        <img src="Assets\imaj\Karolina_Kurkova_Hea_d4c1170a2e.jpg" alt=""class="img-thumbnail" >
                    </div>
                    <div class="col-md-4">
                        <p><b>Uluslararasi süper model Karolina Kurkova’nin ilk parfümü</b></p>
                        <p>Bastan çikaran yasemin ve sümbül teber çiçeginin sicak vanilya akorlari ve bir tutam ayartici balin komposizyonu unutulmayacak bir izlenim birakir. Kokunun karakteri uluslararasi podyumun isilti ve çekiciligini birlestirir ve ayni zamanda ülkesi olan Çek Cumhuriyet’ine olan saygisini gösterir.</p>
                        <p>Parfüm serisinin Highlight olarak nitelenen yenilikçi Roll-on Stick „Parfum Absolu” – Yüksek konsantreli formülü ve essiz tasarimiyla Karolina Kurkova için üretilmistir – sürekli yollarda olan ve her an her yerde parfümünü tazelemek isteyen kadinlara çok uygundur. Özel jel kivamindaki formülü sayesinde dogrudan istenilen bölgeye uygulanabilmektedir.</p>
                    </div>    
                    <div class="col-md-3 ">
                       <h3  data-toggle="tooltip" data-placement="bottom" title="Çiçeksi ▪ Yeşil  ▪ Zarif">Karolina Kurkova</h3>
                       <img src="Assets\imaj\Products_Karolina_Ku_1f91f7a315.jpg" alt="" class="img-responsive" style="height:200px;width:auto">
                    </div>
                    <div class="col-md-3">
                        <div class="bdymssn_list1">
                            <h3>Karolina Kurkova - Star</h3>
                            <li><i class="fa fa-star" aria-hidden="true"></i>Eau de Parfum</li>
                            <li><i class="fa fa-star" aria-hidden="true"></i>„Parfum Absolu“: Yüksek oranda parfüm yagi içerir (%30 Parfüm yagi)</li>
                            <li><i class="fa fa-star" aria-hidden="true"></i>Moisturizing Body Spray (Vücut Spreyi)</li>
                            <li><i class="fa fa-star" aria-hidden="true"></i>Velvet Cream Shower (Dus Kremi)</li>
                            <li><i class="fa fa-star" aria-hidden="true"></i>Luminous Body Lotion (Vücut Losyonu)</li>
                        </div>      
                    </div>
                </div>
                <div class="col-md-12 thumbnail">
                    <h2>Bruce Willis</h2>
                    <p>DUFTSTARS 2011’de başarılı: Bruce Willis’in parfümü „Lifestyle Erkekler“ kategorisinde en iyi üç parfüm arasına girmeyi başarmıştır!</p>
                    <div class="col-md-2">
                        <img src="Assets\imaj\bruce_willis3.jpg" alt=""class="img-thumbnail" >
                    </div>
                    <div class="col-md-3">
                        <p><b>Willis çifti ve LR</b></p>
                        <p>2011 sonbaharından beri, sadece sinema yıldızı ve kendisine ait başarılı koku ve bakım serisi olan Bruce Willis’in yanında eşi Emma Heming-Willis de LR ailesinin Design takıları için marka elçiliği yapıyor. Başarılı Amerikalı top model yeni takı segmentini çok özel tarzı ile yaşanır hale getiriyor. Emma Heming-Willis Berlin’de düzenlenen „Duftstars 2011“de LR’ın ödül alan „Bruce Willis“ isimli kokusunu eşi adına tanıtmıştı.</p>
                    </div>
                    <div class="col-md-7">   
                        <div class="col-md-4 ">
                            <h3>Bruce Willis Personal Edition</h3>
                            <img data-toggle="tooltip" data-placement="bottom" title="Eau de Parfum ▪ Parfümlü Saç ve Vücut Şampuanı  ▪ After Shave Balm" src="Assets\imaj\2950_Bruce_Willis_7afde09246.jpg" alt="" class="img-responsive" style="height:200px;width:auto">
                        </div>
                        <div class="col-md-4 ">
                            <h3>Bruce Willis’in parfümü</h3>
                            <img data-toggle="tooltip" data-placement="bottom" title="Eau de Parfum ▪ Parfümlü Saç ve Vücut Şampuanı  ▪ After Shave Balm" src="Assets\imaj\Bruce_Willis_Product_1e02e40570.jpg" alt="" class="img-responsive" style="height:200px;width:auto">
                        </div>
                        <div class="col-md-4">
                            <h3 data-toggle="tooltip" data-placement="bottom" title="Çiçeksi ▪ Yeşil  ▪ Zarif">Bruce Willis'in ilk kadın kokusu</h3>
                            <img data-toggle="tooltip" data-placement="bottom" title="Eau de Parfum ▪ Parfümlü Duş Jeli  ▪ Parfümlü Vücut Losyonu" src="Assets\imaj\images.jpg" alt="" class="img-responsive" style="height:200px;width:auto">
                        </div>      
                    </div>
                </div>
                <div class="col-md-12 thumbnail">
                    <h2>Emma Heming-Willis</h2>
                    <p>Kendinizi Emma Heming Willis’in parfüm koleksiyonunun ihtişamına bırakın - Lightning Collection serisini oluşturan bu özel üç parfüm sizi büyüleyecek!</p>
                    <div class="col-md-2">
                        <img src="Assets\imaj\Emma_Heming-Willis_mit_Flakon.jpg" alt=""class="img-thumbnail" >
                    </div>
                    <div class="col-md-3">
                        <p><b>Hayatın Esansları Üç Parfüm Şişesinde</b></p>
                        <p>Yeni bir dünya ile tanışın: Lightning Collection serisinin ışıltılı dünyası. Üç büyüleyici ve duygu dolu esans, Swarovski® kristalleri ile mükemmelleşiyor, hayatın farklı yüzlerini ve ışıldayan dakikalarını parfüm şişelerinde barındırıyor. LR Starımız Emma Heming-Willis üç farklı duyguyu barındıran 3 zarif şişeyi sizlere sunuyor.</p>
                    </div>
                    <div class="col-md-7">   
                        <div class="col-md-4 ">
                            <h3 data-toggle="tooltip" data-placement="bottom" title="Akuatik ▪ Çiçeksi  ▪ İlham Veren" >Essence of Marine</h3>
                            <img src="Assets\imaj\LR-Lightning-Marine_8b7321121d.jpg" alt="" class="img-responsive" style="height:200px;width:auto">
                        </div>
                        <div class="col-md-4 ">
                            <h3 data-toggle="tooltip" data-placement="bottom" title="Çiçeksi ▪ Meyvemsi  ▪Duygusal">Essence of Rose</h3>
                            <img src="Assets\imaj\LR-Lightning-Rose_54d7c484ca.jpg" alt="" class="img-responsive" style="height:200px;width:auto">
                        </div>
                        <div class="col-md-4">
                            <h3 data-toggle="tooltip" data-placement="bottom" title="Oryantal ▪ Pudramsı  ▪Tutkulu">Essence of Amber</h3>
                            <img src="Assets\imaj\LR-Lightning-Amber_48b5ee49ee.jpg" alt="" class="img-responsive" style="height:200px;width:auto">
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