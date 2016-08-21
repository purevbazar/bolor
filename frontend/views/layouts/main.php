<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- DEFAULT TEMPLATE FONTS DO NOT REMOVE -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,300,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- EXTRA FONT FOR SLIDER -->
    <link href='http://fonts.googleapis.com/css?family=Six+Caps' rel='stylesheet' type='text/css'>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <style>
        #slide {width: 100%;}
        .about_image {background-position-x: -180px;}
    </style>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

       ga('create', 'UA-37029667-7', 'auto');
      ga('require', 'displayfeatures');
      ga('send', 'pageview');

    </script>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?= $content ?>
</div>



<!-- *** FOOTER START *** -->
<div id="footer" class="animated" data-animation-target="21">
    <div class="col_footer">
        <h2>About Us</h2>
        <div class="footer_logo"><img src="images/logo_footer.png" alt=""></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae aspernatur, ratione voluptatum a, quam voluptate quibusdam reiciendis cupiditate quia fugiat earum, vero eveniet reprehenderit.</p>

        <div class="divider_padding small"></div>

        <h2>Our location</h2>

        <ul class="footer_adress">
            <li><i class="fa fa-map-marker fa-2x"></i>1090 California Street, 3dn Floor, Punta del Este, Uruguay.</li>
            <li><i class="fa fa-mobile fa-2x"></i>+124 456 789 / +000 123 456</li>
        </ul>
    

        <div class="divider_padding small"></div>

        <h2>Social</h2>

        <ul class="footer_icon">
            <li><a href="#"><i class="fa fa-pinterest fa-2x"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
            <li><a href="#"><i class="fa fa-behance fa-2x"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble fa-2x"></i></a></li>
            <li><a href="#"><i class="fa fa-github-square fa-2x"></i></a></li>
        </ul>

    </div>

    <div class="col_footer middle">
            <h2>Our latest tweets</h2>  
        <div class="tweet"></div>
    </div>

    <div class="col_footer">
        <h2>Contact</h2>

        <form method="post" class="reply-input" action="http://bypixels.com/themes/anderson/send.php">

            <input type="text" name="name" id="comment-name" required="" value="Your name (required)" onblur="if(this.value=='')this.value='Your name (required)'" onfocus="if(this.value=='Your name (required)')this.value=''"/>
            <input type="email" name="email" id="comment-email" required="" value="Your email (required)" onblur="if(this.value=='')this.value='Your email (required)'" onfocus="if(this.value=='Your email (required)')this.value=''"/>
            <input type="text" name="website" id="comment-url" value="Your website" onblur="if(this.value=='')this.value='Your website'" onfocus="if(this.value=='Your website')this.value=''"/>
            <textarea name="message" id="comment-message" cols="88" rows="6" required="" onblur="if(this.value=='')this.value='Your message'" 
            onfocus="if(this.value=='Your message')this.value=''">Your message</textarea>
            <div class="clear"></div>
            <input class="submit_buttom" type="submit" value="Send Message">

        </form>
            
    </div>
    <div class="clear"></div>
</div>
<!-- *** FOOTER END *** -->


<?php $this->endBody() ?>
<script type="text/javascript">

    jQuery(document).ready(function() {
    
    jQuery('.tp-banner').show().revolution(
        {
            dottedOverlay:"none",
            delay:7000,
            startwidth:1170,
            startheight:900,
            hideThumbs:200,
            
            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:5,
            
            navigationType:"bullet",
            navigationArrows:"solo",
            navigationStyle:"preview4",
            
            touchenabled:"on",
            onHoverStop:"on",
            
            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,
                                    
            parallax:"mouse",
            parallaxBgFreeze:"on",
            parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
                                    
            keyboardNavigation:"off",
            
            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:20,

            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,

            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,
                    
            shadow:0,
            fullWidth:"on",
            fullScreen:"off",

            spinner:"spinner4",
            
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,

            shuffle:"off",
            
            autoHeight:"off",                       
            forceFullWidth:"on",                        
                                    
                                    
                                    
            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,                      
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution:0,
            
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            startWithSlide:0,
                
        });
                
    }); //ready
                
</script>
    <script>

// Switcher CSS 
  $(document).ready(function() {
"use strict";
    $("#hide, #show").click(function () {
        if ($("#show").is(":visible")) {
           
            $("#show").animate({
                "margin-left": "-200px"
            }, 500, function () {
                $(this).hide();
            });
            
            $("#switch").animate({
                "margin-left": "0px"
            }, 500).show();
        } else {
            $("#switch").animate({
                "margin-left": "-200px"
            }, 500, function () {
                $(this).hide();
            });
            $("#show").show().animate({
                "margin-left": "0"
            }, 500);
        }
    });
                      
});

</script>
</body>
</html>
<?php $this->endPage() ?>
