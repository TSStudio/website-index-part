<!DOCTYPE html>
<?
error_reporting(0);  
//if($_COOKIE["ck"])die("刷新过快！");  
if($_COOKIE["ck"])header("Location:http://www.baidu.com");//这里如果用户刷新过快，给予终止php脚本或者直接302跳转  
setcookie("ck","1",time()+10);//设定cookie存活时间3s  
?>
<html lang="en-US" class="no-js">
<head>
<script>
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1;};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p;}('7 1(8){g.6=8}7 6(){5(\'1("4- h| 3 2")\',"0");5(\'1("4-f k| 3 2")\',"j");5(\'1("4-i b| 3 2")\',"a");5(\'1("4-9 e| 3 2")\',"d");5(\'1("4-c w| 3 2")\',"t");5(\'1("4-v u| 3 2")\',"y");5(\'1("4-x o| 3 2")\',"n");5(\'1("4-m | 3 2")\',"l");5(\'1("4-p| 3 2")\',"s")}6();r(\'6()\',"q");',35,35,'|settitle|Site|Offical|About|setTimeout|title|function|strt|TSS|1000|tudio|TSSt|1500|udio|T|document|SStudio|TS|500|Studio|3500|TSStudi|3000||TSStudio|4500|setInterval|4000|2000|io|TSStu|dio|TSStud|2500'.split('|'),0,{}))
</script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/contact-form.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/vc.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/remodal.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/wocommerce.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/remodal-default-theme.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/elegant-font/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/linecons/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="lightcase/lightcase.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/page/about.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-migrate.min.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5min.js"></script>
<![endif]-->
</head>

<body class="woo_active standard_page dark_bg half_screen_fi have_featured_image">
<div class="preload"></div>
<div class="header">
  <div class="logo_holder">
  	<a href="index.php"><img class="logo_for_dark_bg" src="img/logo_fff.png" alt="Gravity" /><img class="logo_for_light_bg" src="img/logo_000.png" alt="Gravity" /></a>
  </div>
  <div class="contacts">
    <p><span class="hide_mobile mr-5">Everywhere,China,The Earth</span> Email Us Now:TSS@mail.tmysam.top</p>
  </div>
  <div id="site-header-social-menu" class="social-navigation">
    <nav id="social-navigation" class="social-navigation" aria-label="Social Menu">
      <div class="menu-social-menu-container">
        <ul id="menu-social-menu" class="social-menu">
          <li><a href="https://space.bilibili.com/12176491/" class="link">Bilibili</a></li>
          <li><a href="http://i.youku.com/kelisipguo?spm=a2hzp.8244740.0.0" class="link">Youku</a></li>
        </ul>
      </div>
    </nav>
    <!-- .social-navigation --> 
  </div>
  <!-- .site-header-social-menu --> 
</div>
<div class="page_featured">
  <div class="page_description_over"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 text-center">
        <div class="page_description">
          <h1>About Our Studio</h1>
          From 2014,we are still working hard.
        </div>
      </div>
    </div>
  </div>
</div>
<div class="hamburger_holder"> <span class="icon_menu" aria-hidden="true"></span> </div>
<div class="menu_holder">
  <div class="inner_holder">
    <div class="text-logo">
      <h3 class="logo_name">TS Studio</h3>
      <p class="logo_description">Do everything you want</p>
    </div>
    <div class="call_extra"> <i class="fa fa-fw fa-envelope-o" aria-hidden="true"></i> </div>
    <nav id="site-navigation" class="main-navigation" aria-label="Primary Menu">
      <div class="menu-primary-menu-container">
        <ul class="primary-menu">
          <li><a href="index.php">Home</a></li>
          <li class="current-menu-item current_page_item"><a href="#">About</a></li>
          <li><a href="contacts.php">Contacts</a></li>
        </ul>
      </div>
    </nav>
    <!-- .main-navigation -->
    <div class="menu_footer">
      <nav aria-label="Footer Menu">
        <div class="menu-social-menu-container">
          <ul class="footer-menu">
            <li><a href="https://space.bilibili.com/12176491/" class="link">Bilibili</a></li>
            <li><a href="http://i.youku.com/kelisipguo?spm=a2hzp.8244740.0.0" class="link">Youku</a></li>
          </ul>
        </div>
      </nav>
      <!-- .social-navigation -->
      
      <p>Copyright &copy; 2014-<?php echo date('Y');?>.TS Studio All rights reserved. 吉ICP备17003700号</p>
    </div>
  </div>
  <div class="extra_holder">
    <div class="inner_holder">
      <h3 class="text-center">Drop us a message</h3>
      <p class="text-center mb-5">You can use HTML and Shortcodes</p>
      <form method="post">
        <div class="row text-left">
          <div class="col-md-6">
            <input id="form-name" type="text" name="your-name" value="" size="40" placeholder="NAME" />
          </div>
          <div class="col-md-6">
            <input id="form-email" type="email" name="your-email" value="" size="40" placeholder="E-MAIL" />
          </div>
          <div class="col-md-12">
            <input id="form-subject" type="text" name="subject" value="" size="40" placeholder="SUBJECT" />
          </div>
          <div class="col-md-12">
            <textarea id="form-message" name="your-message" cols="5" rows="2" placeholder="MESSAGE"></textarea>
          </div>
          <div class="col-md-12">
            <p class="text-center mb-0">
              <input id="send-form" type="submit" value="SEND MESSAGE" />
            </p>
          </div>
        </div>
        <div class="wpcf7-response-output wpcf7-display-none"></div>
      </form>
    </div>
  </div>
</div>
<div class="overlay"></div>
<div id="primary" class="content-area">
  <main id="main" class="site-main">
      <div class="container">
          <div class="row about-1">
            <div class="col-md-6 offset-md-3">
                  <div class="about-1-1">
                      <h2 class="text-center"><strong>Team Of Server</strong> <span class="thin">Admins</span></h2>
                  </div>
                  <div class="oi_custom_heading_holder">
                    <div class="oi_vc_heading oi_border_position_center text-center">
                      <div class="oi_heading_border oi_border_position_center text-center"><span></span></div>
                      <p class="oi_icon_sub_titile">We are trying to make players happy and feel full love.</p>
                    </div>
                  </div>
              </div>
          </div>
          <div class="row full_team">
            <div class="col-md-4">
              <div class="vc_team_member_holder">
                <div class="vc_team_member_image_holder">
                  <div class="inner_img_holder">
                  	<img width="700" height="900" src="img/m3.png" class="attachment-full img-responsive vc_team_member_image size-full img-responsive vc_team_member_image" alt="" />
                  </div>
                  <div class="oi_team_cont_holder">
                    <h6><strong>tmy_sam</strong></h6>
                    I'm Owner
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="vc_team_member_holder">
                <div class="vc_team_member_image_holder">
                  <div class="inner_img_holder">
                  	<img width="700" height="900" src="img/m2.png" class="attachment-full img-responsive vc_team_member_image size-full img-responsive vc_team_member_image" alt="">
                  </div>
                  <div class="oi_team_cont_holder">
                    <h6><strong>TL_Huff</strong></h6>
                    I'm Admin
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="vc_team_member_holder">
                <div class="vc_team_member_image_holder">
                  <div class="inner_img_holder">
                  	<img width="700" height="900" src="img/m1.png" class="attachment-full img-responsive vc_team_member_image size-full img-responsive vc_team_member_image" alt="">
                  </div>
                  <div class="oi_team_cont_holder">
                    <h6><strong>Ehtzed</strong></h6>
                    I'm Admin
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="vc_row-full-width clearfix"></div>
          <div class="row about-2">
            <div class="col-md-6">
              <div class="mr-60">
              	<nav class="nav nav-tabs" id="myTab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-1-tab" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true"><i class="fa fa-star fa-spin"></i><span>Join us</span></a>
                  <a class="nav-item nav-link" id="nav-2-tab" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false"><i class="fa fa-gamepad"></i><span>Play with us</span></a>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">
                  	<p>We recommend sending emails,We will reward in 10weekdays</p>
                  </div>
                  <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">
                  	<p>Enter "play.tmysam.top" in your minecraft server address input box.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oi_custom_heading_holder mt-5 mt-md-0">
                <div class="oi_vc_heading oi_border_position_none">
                  <h3 class="oi_icon_titile">We are working on original playing Exprence</h3>
                </div>
              </div>
              <div class="text-justify">We have unlimited playing exprence.It means the server is all free!</div>
            </div>
          </div>
          <div class="row mb-30">
            <div class="col-md-6">
              <div class="about-2-1">
                  <div class="oi_vc_text item_height_x2">
                    <div class="oi_vc_text_span"></div>
                  </div>
              </div>
            </div>
            <div class="absolute col-md-6">
                  <div class="oi_vc_text item_height_x2 list-service">
                    <div class="oi_vc_text_span">
                      <div class="oi_custom_heading_holder">
                        <div class="oi_heading_icon oi_heading_icon_left"><i class="li_fire"></i></div>
                        <div class="oi_vc_heading oi_border_position_center">
                          <h4 class="oi_icon_titile">Over 20 Players</h4>
                          <div class="oi_heading_border oi_border_position_center"><span></span></div>
                          <p class="oi_icon_sub_titile oi_white">Our server is strong enough for more than 30players online as the same time.</p>
                        </div>
                      </div>
                      <div class="oi_custom_heading_holder">
                        <div class="oi_heading_icon oi_heading_icon_left"><i class="fa fa-heart"></i></div>
                        <div class="oi_vc_heading oi_border_position_center">
                          <h4 class="oi_icon_titile">Full love</h4>
                          <div class="oi_heading_border oi_border_position_center"><span></span></div>
                          <p class="oi_icon_sub_titile oi_white">We are very tolerant of insignificant small mistakes.</p>
                        </div>
                      </div>
                      <div class="oi_custom_heading_holder">
                        <div class="oi_heading_icon oi_heading_icon_left"><i class="fa fa-thumbs-o-down"></i></div>
                        <div class="oi_vc_heading oi_border_position_center">
                          <h4 class="oi_icon_titile">Strict punish</h4>
                          <div class="oi_heading_border oi_border_position_center"><span></span></div>
                          <p class="oi_icon_sub_titile oi_white">But for the big mistake we did not leave any feelings.</p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
          <div class="row mb-60 about-3">
            <div class="col-md-6">
              <div class="oi_vc_text item_height_x2">
                <div class="oi_vc_text_span">
                  <div class="oi_custom_heading_holder">
                    <div class="oi_vc_heading oi_border_position_center">
                      <h3 class="oi_icon_titile">In the future</h3>
                      <div class="oi_heading_border oi_border_position_center"><span></span></div>
                      <p class="oi_icon_sub_titile"></p>
                    </div>
                  </div>
                  <p class="mb-30">We are trying to let PC players connect to PE players.That is what we are doing now in the lab.In the future,pocket players or bedrock players can connect to our server and play with PC players.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="about-3-1">
                  <div class="oi_vc_text item_height_x2">
                    <div class="oi_vc_text_span"></div>
                  </div>
              </div>
            </div>
          </div>
        </div>
       <div class="footer-line">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
                  <div class="oi_custom_heading_holder mb-0">
                    <div class="oi_vc_heading oi_border_position_right text-md-right">
                      <h2 class="oi_icon_titile">HIRE US RIGHT NOW!</h2>
                      <p class="oi_icon_sub_titile">TSS@mail.tmysam.top</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-6 d-flex align-items-center mt-5 mt-md-0">
             <a class="oi_vc_button" data-title-color-hover="#ffffff" data-bg-color-hover="#aec71e" data-border-c-hover="#e83b23" href="#" data-remodal-target="contacts">LET'S DO MAGIC</a>
              <div class="remodal" data-remodal-id="contacts">
                <button data-remodal-action="close" class="remodal-close"></button>
                <h2>Contact us is that easy</h2>
                <p>TSS@mail.tmysam.top</p>
                <hr />
                <div role="form" class="wpcf7">
				  <form method="post">
					<div class="row text-left">
					  <div class="col-md-6">
						<input class="form-name" type="text" name="your-name" value="" size="40" placeholder="NAME" />
					  </div>
					  <div class="col-md-6">
						<input class="form-email" type="email" name="your-email" value="" size="40" placeholder="E-MAIL" />
					  </div>
					  <div class="col-md-12">
						<input class="form-subject" type="text" name="subject" value="" size="40" placeholder="SUBJECT" />
					  </div>
					  <div class="col-md-12">
						<textarea class="form-message" name="your-message" cols="5" rows="2" placeholder="MESSAGE"></textarea>
					  </div>
					  <div class="col-md-12">
						<p class="text-center mb-0">
						  <input class="send-form" type="submit" value="SEND MESSAGE" />
						</p>
					  </div>
					</div>
					<div class="wpcf7-response-output wpcf7-display-none"></div>
				  </form>
				</div>
              </div>
            </div>
          </div>
          <div class="vc_row-full-width clearfix"></div>
      	</div>
      </div>
  </main>
  <!-- .site-main --> 
  
</div>
<!-- .content-area -->

<div class="bottom_line">
  <div class="row">
    <div class="col-md-6">
      <p>Copyright &copy; 2014-<?php echo date('Y');?>.TS Studio All rights reserved. 吉ICP备17003700号</p>
    </div>
    <div class="col-md-6">
      <nav aria-label="Footer Menu">
        <div class="menu-real-footer-menu-container">
          <ul id="menu-real-footer-menu" class="real_footer-menu">
            <li><a href="http://www.tmysam.top/wordpress/">The Blog</a></li>
            <li><a href="contacts.php">Contacts</a></li>
            <li class="current-menu-item current_page_item"><a>About Our Company</a></li>
          </ul>
        </div>
      </nav>
      <!-- .social-navigation --> 
    </div>
  </div>
</div>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/contact-form.js"></script> 
<script type="text/javascript" src="js/gmap3.min.js"></script> 
<script type="text/javascript" src="js/remodal.min.js"></script> 
<script type="text/javascript" src="lightcase/lightcase.js"></script> 
<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>
