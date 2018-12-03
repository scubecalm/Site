<?php

$db_ip="<myip>";
$db_name="<mydb>";
$db_user="<mydbuser>";
$db_pass="<mydbpass>";

// Create connection
$conn = new mysqli($db_ip, $db_user, $db_pass, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$nbresult= mysql_num_rows ($result);

?>

<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.5.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.5.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-rvb-554x128.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse mbr-navbar--transparent" id="menu-0" data-rv-view="0">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href="https://mobirise.com"><img src="assets/images/logo-rvb-554x128.png" class="mbr-navbar__brand-img mbr-brand__img" alt="Mobirise"></a></span>
                        <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="https://mobirise.com"></a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column">
                            <ul class="mbr-navbar__items mbr-navbar__items--right float-left mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links"><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#">HOME</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#">ABOUT</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#">CONTACT</a></li></ul>                            
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="engine"><a href="https://mobirise.co/l">bootstrap theme</a></section><section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-5" data-rv-view="23" style="background-image: url(assets/images/bg.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center mbr-after-navbar">
        
        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-center">
                <div class="row"><div class=" col-sm-8 col-sm-offset-2">
                    <div class="mbr-hero animated fadeInUp">
                        <h1 class="mbr-hero__text">My Website</h1>
                        <p class="mbr-hero__subtext">Server:&nbsp;<?php echo gethostname();?></p>
                        <p class="mbr-hero__subtext">BD ip :&nbsp;<?php echo $db_ip;?></p>
                        <p class="mbr-hero__subtext">NB Users:&nbsp;<?php echo $nbresult;?></p>


                    </div>
                    
                </div></div>
            </div></div>
        </div>
        
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="features1-6" data-rv-view="26" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 93px;">
        <div class="mbr-section__row row">
            <div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
                <div class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
                    <figure class="mbr-figure"><img src="assets/images/bootstrap.png" class="mbr-figure__img"></figure>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text">BOOTSTRAP 3</h3>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-article mbr-article--wysiwyg">
                        <p>Bootstrap 3 has been noted as one of the most reliable and proven frameworks and Mobirise has been equipped to develop websites using this framework.</p>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-buttons mbr-buttons--center"><a href="https://mobirise.com" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">LEARN MORE</a></div>
                </div>
            </div>
            <div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
                <div class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
                    <figure class="mbr-figure"><img src="assets/images/responsive.png" class="mbr-figure__img"></figure>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text">RESPONSIVE</h3>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-article mbr-article--wysiwyg">
                        <p>One of Bootstrap 3's big points is responsiveness and Mobirise makes effective use of this by generating highly responsive website for you.</p>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-buttons mbr-buttons--center"><a href="https://mobirise.com" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">LEARN MORE</a></div>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
                <div class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
                    <figure class="mbr-figure"><img src="assets/images/google-fonts.png" class="mbr-figure__img"></figure>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text">WEB FONTS</h3>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-article mbr-article--wysiwyg">
                        <p>Google has a highly exhaustive list of fonts compiled into its web font platform and Mobirise makes it easy for you to use them on your website easily and freely.</p>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-buttons mbr-buttons--center"><a href="https://mobirise.com" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">LEARN MORE</a></div>
                </div>
            </div>
            
            <div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
                <div class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
                    <figure class="mbr-figure"><img src="assets/images/unlimited-websites.png" class="mbr-figure__img"></figure>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text">UNLIMITED WEBSITES</h3>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-article mbr-article--wysiwyg">
                        <p>Mobirise gives you the freedom to develop as many websites as you like given the fact that it is a desktop app.</p>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-buttons mbr-buttons--center"><a href="https://mobirise.com" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">LEARN MORE</a></div>
                </div>
            </div>
            
            
            
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-parallax-background" id="content5-7" data-rv-view="29" style="background-image: url(assets/images/bg3.jpg);">
    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(40, 50, 78);"></div>
    <div class="mbr-section__container container mbr-section__container--first" style="padding-top: 93px;">
        <div class="mbr-header mbr-header--wysiwyg row">
            <div class="col-sm-8 col-sm-offset-2">
                <h3 class="mbr-header__text">EASY TO USE!</h3>
                
            </div>
        </div>
    </div>
    <div class="mbr-section__container container mbr-section__container--last" style="padding-bottom: 93px;">
        <div class="row">
            <div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2"><p>Make your own website in a few clicks! Mobirise helps you cut down development time by providing you with a flexible website editor with a drag and drop interface. MobiRise Website Builder creates responsive, retina and mobile friendly websites in a few clicks. Mobirise is one of the easiest website development tools available today. It also gives you the freedom to develop as many websites as you like given the fact that it is a desktop app.</p></div>
        </div>
    </div>
    
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="pricing-table1-8" data-rv-view="32" style="background-color: rgb(240, 240, 240);">
    
    <div class="mbr-section__container mbr-section__container--std-top-padding container" style="padding-top: 93px; margin-bottom: 0px;">
        <div class="row">
            <div class="mbr-plan col-xs-12 mbr-plan--first col-md-3 col-sm-6">
                <div class="mbr-plan__box">
                    <div class="mbr-plan__header">
                        <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">STANDARD</h3>
                        </div>
                    </div>
                    <div class="mbr-plan__number">
                        <div class="mbr-number mbr-number--price">
                            <div class="mbr-number__num">
                                <div class="mbr-number__group">
                                    <sup class="mbr-number__left">$</sup><span class="mbr-number__value">0</span>
                                </div>
                            </div>
                            <div class="mbr-number__caption">per month</div>
                        </div>
                    </div>
                    <div class="mbr-plan__details"><ul><li><strong>32 GB</strong> Storage</li><li><strong>Unlimited</strong> Users</li><li><strong>15 GB</strong> Bandwidth</li></ul></div>
                    <div class="mbr-plan__buttons">
                        <div class="mbr-buttons mbr-buttons--center"><a href="https://mobirise.com" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">DEMO LINK</a></div>
                    </div>
                </div>
            </div>
            <div class="mbr-plan col-xs-12 mbr-plan--success col-md-3 col-sm-6">
                <div class="mbr-plan__box">
                    <div class="mbr-plan__header">
                        <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">BUSINESS</h3>
                        </div>
                    </div>
                    <div class="mbr-plan__number">
                        <div class="mbr-number mbr-number--price">
                            <div class="mbr-number__num">
                                <div class="mbr-number__group">
                                    <sup class="mbr-number__left">$</sup><span class="mbr-number__value">0</span>
                                </div>
                            </div>
                            <div class="mbr-number__caption">per month</div>
                        </div>
                    </div>
                    <div class="mbr-plan__details"><ul><li><strong>80 GB</strong> Storage</li><li><strong>Unlimited</strong> Users</li><li><strong>20 GB</strong> Bandwidth</li></ul></div>
                    <div class="mbr-plan__buttons">
                        <div class="mbr-buttons mbr-buttons--center"><a href="https://mobirise.com" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">DEMO LINK</a></div>
                    </div>
                </div>
            </div>
            <div class="mbr-plan col-xs-12 mbr-plan--danger mbr-plan--favorite col-md-3 col-sm-6">
                <div class="mbr-plan__box">
                    <div class="mbr-plan__header">
                        <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">PREMIUM</h3>
                        </div>
                    </div>
                    <div class="mbr-plan__number">
                        <div class="mbr-number mbr-number--price">
                            <div class="mbr-number__num">
                                <div class="mbr-number__group">
                                    <sup class="mbr-number__left">$</sup><span class="mbr-number__value">0</span>
                                </div>
                            </div>
                            <div class="mbr-number__caption">per month</div>
                        </div>
                    </div>
                    <div class="mbr-plan__details"><ul><li><strong>100 GB</strong> Storage</li><li><strong>Unlimited</strong> Users</li><li><strong>50 GB</strong> Bandwidth</li></ul></div>
                    <div class="mbr-plan__buttons">
                        <div class="mbr-buttons mbr-buttons--center"><a href="https://mobirise.com" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">DEMO LINK</a></div>
                    </div>
                </div>
            </div>
            <div class="mbr-plan col-xs-12 mbr-plan--warning mbr-plan--last col-md-3 col-sm-6">
                <div class="mbr-plan__box">
                    <div class="mbr-plan__header">
                        <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">ULTIMATE</h3>
                        </div>
                    </div>
                    <div class="mbr-plan__number">
                        <div class="mbr-number mbr-number--price">
                            <div class="mbr-number__num">
                                <div class="mbr-number__group">
                                    <sup class="mbr-number__left">$</sup><span class="mbr-number__value">0</span>
                                </div>
                            </div>
                            <div class="mbr-number__caption">per month</div>
                        </div>
                    </div>
                    <div class="mbr-plan__details"><ul><li><strong>Unlimited</strong> Storage</li><li><strong>Unlimited</strong> Users</li><li><strong>1 TB</strong> Bandwidth</li></ul></div>
                    <div class="mbr-plan__buttons">
                        <div class="mbr-buttons mbr-buttons--center"><a href="https://mobirise.com" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">DEMO LINK</a></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="form1-9" data-rv-view="35" style="background-color: rgb(239, 239, 239);">
    
    <div class="mbr-section__container mbr-section__container--std-padding container" style="padding-top: 93px; padding-bottom: 93px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text">CONTACT FORM</h2>
                        </div>
                        
                        <form action="https://mobirise.com/" method="post">
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required="" placeholder="Name*">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" required="" placeholder="Email*">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="phone" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="7" placeholder="Message"></textarea>
                            </div>
                            <div class="mbr-buttons mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-danger">CONTACT US</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contacts1-a" data-rv-view="44" style="background-color: rgb(60, 60, 60);">
    
    <div class="mbr-section__container container">
        <div class="mbr-contacts mbr-contacts--wysiwyg row" style="padding-top: 45px; padding-bottom: 45px;">
            <div class="col-sm-4">
                <div><img src="assets/images/s-low-def-white-125x156.png" class="mbr-contacts__img mbr-contacts__img--left"></div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-4">
                        <p class="mbr-contacts__text"><strong>ADDRESS</strong><br>
1234 Street Name<br>
City, AA 99999</p>
                    </div>
                    <div class="col-sm-4">
                        <p class="mbr-contacts__text"><strong>CONTACTS</strong><br>
Email: support@mobirise.com<br>
Phone: +1 (0) 000 0000 001<br>
Fax: +1 (0) 000 0000 002</p>
                    </div>
                    <div class="col-sm-4"><p class="mbr-contacts__text"><strong>LINKS</strong></p><ul class="mbr-contacts__list"><li><a class="mbr-contacts__link text-gray" href="https://mobirise.com/">Website builder</a></li><li><a class="mbr-contacts__link text-gray" href="https://mobirise.com/mobirise-free-win.zip">Download for Windows</a></li><li><a class="mbr-contacts__link text-gray" href="https://mobirise.com/mobirise-free-mac.zip">Download for Mac</a></li></ul></div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-b" data-rv-view="46" style="background-color: rgb(68, 68, 68);">
    
    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row" style="padding-top: 36.9px; padding-bottom: 36.9px;">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright">Copyright (c) 2015 Company Name. <a class="mbr-footer__link text-gray" href="https://mobirise.com/">Terms of Use</a>  | <a class="mbr-footer__link text-gray" href="https://mobirise.com/">Privacy Policy</a></p>
            </div>
        </div>
    </div>
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <!--[if lte IE 9]>
    <script src="assets/jquery-placeholder/jquery.placeholder.min.js"></script>
  <![endif]-->
  <script src="assets/mobirise/js/script.js"></script>
  
  
</body>
</html>