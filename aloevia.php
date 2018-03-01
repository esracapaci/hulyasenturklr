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
                            <li class="active"><a href="aloevia.php">LR ALOE VIA</a></li>
                            <li><a href="bodymission.php">Body Mission</a></li>
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
                        <input type="text" class="form-control" name="name" placeholder="İsim" required>
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
            <div class="imglogo">
                <img src="Assets\imaj\aloe-via-logo-prozent.png" alt="" data-toggle="tooltip" data-placement="bottom" title="Yoğun bakım ve yenilenme için yüksek Aloe Vera oranları">
                
            
                <img src="Assets\imaj\aloe-via-logo-bio-extracts.png" alt=""data-toggle="tooltip" data-placement="bottom" title="Besleyici organik özler ile zenginleştirilmiştir – özellikle belirli bir bakım ihtiyacı için ayarlanmıştır">
                
            
            
                <img src="Assets\imaj\aloe-via-logo-free-form1.png" alt=""data-toggle="tooltip" data-placement="bottom" title="Paraben ve mineral yağları içermez.">
            </div>
            <div class="imglogo">
                <img src="Assets\imaj\aloe-via-logo-certificate.png" alt=""data-toggle="tooltip" data-placement="bottom" title="Aloe Vera jelimiz sürekli olarak tanınmış uluslararası Aloe Science Council (IASC) tarafından kontrol edilir – ekiminden işlenmesine kadar">
            
                <img src="Assets\imaj\aloe-via-logo-dermatologisch.png" alt=""data-toggle="tooltip" data-placement="bottom" title="Tüm Aloe Vera ürünlerinin cilt uyumluluğu olacaktır tanınmış, bağımsız Dermatest Enstitüsü ve Derma Consult tarafından kanıtlanmıştır">
            
                <img src="Assets\imaj\aloe-via-logo-patent.png" alt=""data-toggle="tooltip" data-placement="bottom" title="28 LR ALOE VIA ürünleri için, Aloe Vera jeli ve çeşitli organik özlerden oluşan benzersiz etkin madde kombinasyonu göz önünde tutularak patent başvurusu yapılmıştır">
            </div>
        </div>
        <div class="col-md-10  main_right">
            <div class="main_cont">
                <h1>LR Aloe Via</h1>
                <p>Aloe Vera'nın besleyici ve yenileyici gücü ile doğal güzellikte ve sağlıklı bir cilt yolunda – LR ALOE VIA bunun için vardır. Burada LR ALOE VIA markasının özelliklerini keşfedin ve doğal güzellikte bakımlı bir cilt için tamamen kişisel yolunuzu bulun.</p>
                <div class="col-md-6">
                    <h2>Yenileme ve bakım</h2>
                    <p>Aloe Vera'nın doğal gücü özellikle hassas veya yıpranmış cildi yeniler. LR ALOE VIA ürünleri koruyucu bir film görevi görür – serinletir, yatıştırır ve yenilenmesini teşvik eder.</p>
					<div class="col-md-6">
                        <div class="prod_items1">
                            <figure class="snip0016">   
                                <img src="Assets\imaj\1avspecialcare.png" alt="">
                                <figcaption>
                                <h4 style="color:#8ca084;font-family: comic sans ms;margin-bottom:10px;">ÖZEL BAKIM</h4>
                                <h4>Sağlıklı bir cilt hissi için</h4>
                                <p>LR ALOE VIA Özel Bakım çok hassas, yıpranmış ciltleri ve cilt tahrişlerini düzenler. Aloe Vera'nın doğal yenileme gücü, özel etkin madde bileşenleri ve ferahlatıcı bitki özleri yenilenme sürecini destekler–  serinletici ve yatıştırıcı.</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="prod_items2">
                            <figure class="snip0016">    
                                <img src="Assets\imaj\1avoralcare.png" alt="" >
                                <figcaption>
                                <h4 style="color:#8ca084;font-family: comic sans ms;margin-bottom:10px;">AĞIZ BAKIMI</h4>
                                <h4>Sağlıklı, güzel bir gülümseme için</h4>
                                <p>Güzel, kaygısız bir gülümsemeyi kim istemez ki? Bu, bakımlı dişler ve dudaklar olmadan mümkün değildir. Aloe Vera yenileme gücü ile canlı ve sağlıklı bir ağız florası ve yumuşak, pürüzsüz dudaklar sağlar. Böylece gülüşünüzü her zaman kaygısızca gösterebilirsiniz!</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>Temizlik ve bakım</h2>
                    <p>Aloe Vera bol miktarda jeli ile cildin doğal nem dengesini korur. LR ALOE VIA ürününün size parlak bir tene ve pürüzsüz-yumuşak bir cilde giden yolunuzda eşlik etmesine izin verin.</p>
                    <div class="col-md-6">
                        <div class="prod_items3">
                            <figure class="snip0016">    
                                <img src="Assets\imaj\1avfacecare.png" alt="" >
                                <figcaption>
                                <h4 style="color:#8ca084;font-family: comic sans ms;margin-bottom:10px;">YÜZ BAKIMI</h4>
                                <h4>Parıldayan, güzel bir yüz için</h4>
                                <p>LR ALOE VIA Yüz Bakımı ve Temizliği Aloe Vera'nın gücü ile cildin bakımını yapar ve yüz derisinde günbegün doğru dengeyi sağlar. Organik zeytin özü ve saf Aloe Vera jeli gibi yüksek kaliteli içerik maddeleri doğal nem dengesini korur ve düzenler. Güzel ve sağlıklı bir cilt hissi gibisi yoktur.</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="prod_items4">
                            <figure class="snip0016">    
                                <img src="Assets\imaj\1avbodycare.png" alt="">
                                <figcaption>
                                <h4 style="color:#8ca084;font-family: comic sans ms;margin-bottom:10px;">VÜCUT BAKIMI</h4>
                                <h4>Hissedilir bir şekilde yumuşak bir cilt için</h4>
                                <p>LR ALOE VIA vücut bakımı ve temizliği Aloe Vera'nın en iyisi ile – değerli jeli ile – ferahlatıcı temizlik ve yoğun bakım sunar. Her tür bakım talebi için özel formüller cildi yumuşak bir şekilde temizler ve nem dengesini düzenler.</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
				<div class="clear"></div>
                <div class="col-md-12">
                    <h2>Bireysel bakım ve koruma</h2>
                    <p>Aloe Vera’nın etkisi çok yönlüdür – sadece yenilemek ve nemlendirmekle kalmaz, aynı zamanda rahatlatıcı etkisi de vardır. Bakımınızı ve korumanızı maksimum düzeyde sağlayın -  tepeden tırnağa kadar ve tüm aile için!</p>
                    <div class="col-md-3">
                        <div class="prod_items5">
                            <figure class="snip0016">    
                                <img src="Assets\imaj\1avhaircare.png" alt="">
                                <figcaption>
                                <h4 style="color:#8ca084;font-family: comic sans ms;margin-bottom:10px;">SAÇ BAKIMI</h4>
                                <h4>Sağlıklı, parlak saçlar için</h4>
                                <p>Sağlıklı görünen ve sağlıklı hissedilen parlak, yumuşak saçlar! LR ALOE VIA Saç Bakımı yüksek Aloe Vera oranları ve organik bambu özünden oluşan benzersiz etkin madde kombinasyonu ile saçınızın bakımını nazikçe ve itinalı bir şekilde yapar – dibinden ucuna kadar. Her gün.</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="prod_items6">
                            <figure class="snip0016">
                                <img src="Assets\imaj\1avmancare.png" alt="">
                                <figcaption>
                                <h4 style="color:#8ca084;font-family: comic sans ms;margin-bottom:10px;">ERKEK BAKIMI</h4>
                                <h4>Canlı, bakımlı erkek cildi için</h4>
                                <p>LR ALOE VIA Erkek Bakımı nemlendirici Aloe Vera ve yatıştırıcı organik Calendula özünden oluşan özel kombinasyonu sayesinde erkek cildinin özel taleplerine mükemmel bir şekilde ayarlanmıştır – çünkü erkek cildinin tamamen kendine has bakım ihtiyaçları vardır ve günlük tıraşta ek strese maruz kalır.</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="prod_items7">
                            <figure class="snip0016">
                                <img src="Assets\imaj\1avbabycare.png" alt="">
                                <figcaption>
                                <h4 style="color:#8ca084;font-family: comic sans ms;margin-bottom:10px;">BEBEK BAKIMI</h4>
                                <h4>Bebek cildinin nazikçe korunması için</h4>
                                <p>Bebek cildinde bir şeyin azı iyidir. Bebek cildi doğal olarak çok yumuşaktır, ama aynı zamanda vücuda ait cilt koruma bariyeri henüz tam olarak gelişmediği için çok hassastır. Hassas bebek cildini besleyen, koruyan ve yenileyen son derece uyumlu içerik maddeleri gereklidir.
                                Yeni LR ALOE VIA bebek bakım serisi Aloe Vera'nın en iyisi – işlenmemiş jeli – ve değerli organik bitki özleri ile daha önce hiç olmadığı kadar nazikçe ve doğal bir bakım sağlar. Parabensiz. Mineral yağlar olmadan. Parfüm yağları olmadan.</p>
                                </figcaption>
                            </figure>
                        </div>    
                    </div>
                    <div class="col-md-3">
                        <div class="prod_items8">
                            <figure class="snip0016">
                                <img src="Assets\imaj\1avsuncare.png" alt="sample41"/>
                                <figcaption>
                                    <h4 style="color:#8ca084;font-family: comic sans ms;margin-bottom:10px;">GÜNEŞ BAKIMI</h4>
                                    <h4>Sağlıklı, güneşten korunan bir cilt için</h4>
                                    <p>Her cilt tipinin kendine özgü bir güneş korumasına ihtiyacı vardır. LR ALOE VIA güneşten korunma ürünleri tüm aile için koruma ve bakım sağlar – gerek narin, hassas cilt ve gerekse önceden bronzlaşmış cilt için. Aloe Vera ferahlatıcı nem sağlar, serinletir, yatıştırır ve yeniler</p>
                                </figcaption>			
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 contact_us">
				    <h5>Daha detaylı bilgi için bizimle <a href="#">iletişime</a> geçiniz.</h5>
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