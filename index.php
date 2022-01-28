<?php
ob_start();
session_start();
if(isset($_REQUEST['action']) && $_REQUEST['action']=="contactmail"){
  $to_email = "hello@exospace.in";
  //$to_email = "lalu.hpm@gmail.com";
  $from = $_REQUEST['Email'];
  $from_name = $_REQUEST['Name'];
  $body = $_REQUEST['RelatedContent']."<br/> Phone Number: ".$_REQUEST['PhoneNumber'];
  $subject = "New contact request";
  $headers = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=UTF-8\n";
  $headers .= "From:".$from_name." <".$from.">\n";
  //echo $body.$subject;exit;
  @mail($to_email,$subject,$body,$headers);
  header("location:./");exit;
}
?>
<?php include_once "gtag.txt";?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <!-- responsive meta -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Exospace | Best Coworking Office Space in Bhubaneswar | office space</title>
      <meta name="keyword" content="Coworking space in Bhubaneswar, Office space in Bhubaneswar, Shared office space in Bhubaneswar, Startup in Bhubaneswar, Shared workspace in Bhubaneswar, Coworking office space in Bhubaneswar, Individual office space in Bhubaneswar"/>
      <meta name="description" content="Are you confuse about who is the Best office space in Bhubaneswar ? We are provideing Coworking space, Shared office space, Shared workspace, Individual office space, Coworking office space in Bhubaneswar">
      <meta name="robots" content="index, follow" />
     <!-- website name -->
        <meta property="og:site_name" content="Exospace" />
        <meta name="document-classification" content="Co working, Indivisual, Office Space in Bhubaneswar" />
        <meta name="publisher" content="Exospace" />
      <meta property="og:title" content="Exospace-: shared workspace,startup in Bhubaneswar" />
      <meta property="og:description"
    content="We are provideing the best shared workspace in Bhubaneswar " />
    <link rel="canonical" href="https://exospace.in/" />
      <!-- For IE -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- master stylesheet -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive stylesheet -->
      <link rel="stylesheet" href="css/responsive.css">
      <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
      <!-- Favicon -->
      <script type="text/javascript">
    function checkValidation(){
      if($("#Name").val()==''){
      alert("Please enter your name");
      $("#Name").focus();
      return false;
    }
    if($("#Email").val()==''){
      alert("Please enter your email");
      $("#Email").focus();
      return false;
    }
    if($("#PhoneNumber").val()==''){
      alert("Please enter your phone number");
      $("#PhoneNumber").focus();
      return false;
    }
    if($("#RelatedContent").val()==''){
      alert("Please enter some contents");
      $("#RelatedContent").focus();
      return false;
    }
    }
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168141944-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-168141944-1');
  </script>
<!-- Global site tag (gtag.js) - Google Ads: 611298384 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-611298384"></script>
<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-611298384'); </script>
   </head>
   <body>
      <section class="top-bar-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-7 col-md-7">
                  <!--Start contact info left-->
                  <div class="contact-info-left clearfix">
                     <ul>
                        <li><span class="flaticon-building"></span> Bhubaneswar</li>
                        <li><span class="flaticon-new-email-outline envelop"></span>hello@exospace.in</li>
                     </ul>
                  </div>
                  <!--End contact info left-->
               </div>
               <div class="col-lg-5 col-md-5">
                  <!--Start contact info right-->
                  <div class="contact-info-right">
                     <div class="phnumber">
                        <p><span class="flaticon-technology"></span>070774 44490</p>
                     </div>
                     <div class="language-switcher">
                        <div id="polyglotLanguageSwitcher">
                        </div>
                     </div>
                     <div class="top-social-links">
                        <ul>
                           <li><a href="https://m.facebook.com/exospacecsocial"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="https://www.linkedin.com/company/exospacebbsr"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                          <!--  <li><a href="https://twitter.com/Exospacecsocial" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
                           <li><a href="https://instagram.com/exospacesocial?igshid=1wyniwkpa8513" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <!--End contact info right-->
               </div>
            </div>
         </div>
      </section>
      <!--Start header-search  area-->
      <!-- <section class="header-search">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="search-form pull-right">
                         <form action="#">
                             <div class="search">
                                 <input type="search" name="search" value="" placeholder="Search Something">
                                 <button type="submit"><span class="icon fa fa-search"></span></button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
         </section> -->
      <!--End header-search  area-->
      <!--Start header area-->
      <header class="header-area stricky">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="outer-box clearfix">
                     <!--Start logo-->
                     <div class="logo">
                        <a href="index.php">
                        <img src="images/logo.png" alt="Awesome Logo">
                        </a>
                     </div>
                     <!--End logo-->
                     <!--Start search box btn-->
                     <!--End cart btn-->
                     <!--Start mainmenu-->
                     <nav class="main-menu">
                        <div class="navbar-header">
                           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                           <ul class="navigation clearfix">

                              <li><a href="gallery.php">Gallery</a></li>
                              <li><a onClick="openNav()">Contact Us</a></li>
                           </ul>
                        </div>
                     </nav>
                     <!--End mainmenu-->
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!--End header area-->
      <div id="mySidenav" class="sidenav">
         <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
         <div>
            <h3>Contact Us</h3>
         </div>
         <form name="frmContact" action="" method="post" onSubmit="return checkValidation();" autocomplete="off">
         <input type="hidden" name="action" value="contactmail">
         <div><input type="text" class="form-control" name="Name" id="Name" placeholder="Name"></div>
         <div><input type="text" class="form-control" name="Email" id="Email" placeholder="Email"></div>
         <div><input type="text" class="form-control" name="PhoneNumber"  id="PhoneNumber" placeholder="Phone Number"></div>
         <div><textarea class="form-control" placeholder="Related Content" name="RelatedContent" id="RelatedContent"></textarea> </div>
         <div align="center"><button class="btn btn-warning">Submit</button></div>
         </form>
         <hr>
         <div align="center" class="social">
           <a href="https://m.facebook.com/exospacecsocial"><i class="fa fa-facebook" aria-hidden="true"></i></a>
           <a href="https://www.linkedin.com/company/exospacebbsr"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
           <a href="https://instagram.com/exospacesocial?igshid=1wyniwkpa8513" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>

         </div>
      </div>

      <!--Start rev slider wrapper-->
      <section class="rev_slider_wrapper">
         <div class="request-button"><a class="btn btn-warning" onClick="openNav()">Query</a></div>
         <div id="slider1" class="rev_slider"  data-version="5.0">
            <ul>
               <li data-transition="slidingoverlayleft">
                  <img src="images/slider/1.jpg"  alt="" width="1920" height="800" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >

               </li>
               <li data-transition="slidingoverlayleft">
                  <img src="images/slider/2.jpg"  alt="" width="1920" height="800" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >

               </li>
               <li data-transition="slidingoverlayleft">
                  <img src="images/slider/3.jpg"  alt="" width="1920" height="800" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >

               </li>
            </ul>
         
         </div>
      </section>
      <!--End rev slider wrapper-->
      <!--Start welcome area-->
      <section class="welcome-area" id="about">
         <div class="container clearfix">
            <div class="sec-title">
               <h2>Welcome to <span>Exospace</span></h2>
               <span class="decor"></span>
            </div>
            <div class="row">
               <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="text-holder">
                     <h3>Exospace, a best co-working space based out for creative thinkers in Bhubaneswar.</h3>
                     <p>Exospace comprises of members professionals from creative industries and communities, who work, collaborate
                        and excel together in workspaces designed that inspire people to innovate ideas of excellence.
                        Exospace is an alternative to traditional serviced, home or shared offices. Suited to individual entrepreneurs,<b> startup</b>,
                        small businesses to larger work pool, we offer first class desk space in great locations. Our prices are
                        inclusive, giving you full access to all the office and meeting room facilities alongside other facilities
                        such as uninterrupted Wi-Fi, locker facilities, printers, outdoor sitting areas with a sip a hot brewed coffee
                        that you require, helping you to focus on what’s really important. Exospace, <b>co-working space in Bhubaneswar</b>,
                        collaborates for all professional, social and wellbeing events where you can meet, connect and grow. Exospace
                        with its<b> shared office space in Bhubaneswar</b> shared a vision to create a workspace that truly embraces and elevates
                        modern working life.
                     </p>

                  </div>
               </div>
               <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="gallery clearfix">
                     <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="video-gallery">
                              <img src="images/main-gallery.jpg" alt="Awesome Video Gallery">
                              <!-- <div class="overlay-gallery">
                                 <div class="icon-holder">
                                     <div class="icon">
                                         <a class="video-fancybox" title="Interrio Gallery" href="#"><img src="images/play-btn.png" alt="Play Button"/></a>
                                     </div>
                                 </div>
                                 </div> -->
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="gallery-bg-img">
                              <img src="images/1_002.jpg" alt="Awesome Image">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
<section class="pricing-table-area">
    <div class="container">
        <div class="sec-title">
            <h2>Why <span>Exospace</span></h2>
            <span class="decor"></span>
        </div>
        <div class="row">
            <div class="col-md-4 btn_1">Ample amount of locker space.</div>
           <div class="col-md-4 btn_1">Dedicated air conditioning</div>
           <div class="col-md-4 btn_1">Special attention to comfort and safety.</div>

       <div class="col-md-4 col-md-offset-2 btn_1">Design to uplift you.</div>
       <div class="col-md-4 btn_1">High quality materials used.</div>
       </div>
        </div>
    </div>
</section>

<section class="pricing-table-area">
    <div class="container">
        <div class="sec-title">
            <h2>Our <span>Packages</span></h2>
            <span class="decor"></span>
        </div>
        <div class="row">
            <!--Start single price box-->

            <!--Start single price box-->
            <!--Start single price box-->
                 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
                <div class="single-price-box">
                    <div class="table-header">
                        <h3>Dedicated Seats</h3>

                       <!--  <div class="packageprice">₹ 5,250 </div>
                        <div>Per Month </div> -->
                        <!-- <div class="mt_10"><button class="btn btn-warning" onclick="openNav()">Quote Your Price</button></div> -->
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
                <div class="single-price-box">
                    <div class="table-header">
                        <h3>Private Cabin</h3>
                        <!-- <div class="packageprice">₹ 15,000</div>
                        <div> Starting Price</div> -->
                        <!-- <div class="mt_10"><button class="btn btn-warning" onclick="openNav()">Quote Your Price</button></div> -->
                    </div>

                </div>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
                <div class="single-price-box">
                    <div class="table-header">
                        <h3>Conference Room</h3>
                        <!-- <div class="packageprice">₹ 600</div>
                      <div>Per Hour</div> -->

                      <!-- <div class="mt_10"><button class="btn btn-warning" onclick="openNav()">Quote Your Price</button></div> -->
                    </div>
            </div>
         </div>

         <div style="margin-right: 20px;
  text-align: right;
  font-weight: bold;
  float: right; margin-top: 10px;"> <span class="fa fa-star red-star"></span>Term & Condition Apply</div>

            <!--Start single price box-->
        </div>
    </div>
</section>
      <!--End welcome area-->

      <!--Start slogan area-->
   <!--    <section class="slogan-area">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="slogan" data-toggle="modal" data-target="#myModal">
                     <div class="blink"><span>Our New Working Space Comming Soon</span></div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
      <!--End slogan area-->
      <!--Start latest project area-->


      <!--Start working area-->
      <section class="latest-blog-area">
         <div class="container">
            <div class="sec-title pull-left">
               <h2>Working<span> Facilities</span></h2>
               <span class="decor"></span>
            </div>
            <div class="clearfix"></div>
            <div class="working-area">
               <div class="row">
                  <!--Start single working item-->
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="single-working-item">
                        <div class="icon-box">
                           <div class="icon">
                              <i class="fa fa-coffee"></i>
                           </div>
                           <div class="facilitytxt">Tea and Coffee</div>
                        </div>
                     </div>
                  </div>
                  <!--End single working item-->
                  <!--Start single working item-->
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="single-working-item">
                        <div class="icon-box">
                           <div class="icon">
                              <i class="fa fa-camera"></i>
                           </div>
                           <div class="facilitytxt">Surveillance</div>
                        </div>
                     </div>
                  </div>
                  <!--End single working item-->
                  <!--Start single working item-->
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="single-working-item">
                        <div class="icon-box">
                           <div class="icon">
                              <img src="images/water.png">
                           </div>
                           <div class="facilitytxt">Purified Water</div>
                        </div>
                     </div>
                  </div>
                  <!--Start single working item-->
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="single-working-item">
                        <div class="icon-box">
                           <div class="icon">
                              <i class="fa fa-wifi"></i>
                           </div>
                           <div class="facilitytxt">Uninterrupted Wi-Fi</div>
                        </div>
                     </div>
                  </div>
                  <!--End single working item-->
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="single-working-item">
                        <div class="icon-box">
                           <div class="icon">
                              <img src="images/air-conditioner.png">
                           </div>
                           <div class="facilitytxt">Dedicated Air Conditioner</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="single-working-item">
                        <div class="icon-box">
                           <div class="icon">
                              <i class="fa fa-clock-o" aria-hidden="true"></i>
                           </div>
                           <div class="facilitytxt">24 Hour Access</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="single-working-item">
                        <div class="icon-box">
                           <div class="icon">
                              <img src="images/housekeeping.png">
                           </div>
                           <div class="facilitytxt">House keeping</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="single-working-item">
                        <div class="icon-box">
                           <div class="icon">
                              <i class="fa fa-lock"></i>
                           </div>
                           <div class="facilitytxt">Personal Locker</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="single-working-item">
                        <div class="icon-box">
                           <div class="icon">
                              <i class="fa fa-envelope"></i>
                           </div>
                           <div class="facilitytxt">Conference Room</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="single-working-item">
                        <div class="icon-box">
                           <div class="icon">
                              <img src="images/metting_icon.png">
                           </div>
                           <div class="facilitytxt">Meeting Space</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="single-working-item">
                        <div class="icon-box">
                           <div class="icon">
                              <i class="fa fa-envelope"></i>
                           </div>
                           <div class="facilitytxt">Mail Handling</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="single-working-item">
                        <div class="icon-box">
                           <div class="icon">
                              <img src="images/seminar.png">
                           </div>
                           <div class="facilitytxt"> Events, Workshops, Seminars</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="single-working-item">
                        <div class="icon-box">
                           <div class="icon">
                              <i class="fa fa-tasks"></i>
                           </div>
                           <div class="facilitytxt">Open Sitting</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="single-working-item">
                        <div class="icon-box">
                           <div class="icon">
                              <i class="fa fa-percent"></i>
                           </div>
                           <div class="facilitytxt">Discount With Tie-ups</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="single-working-item">
                        <div class="icon-box">
                           <div class="icon">
                              <i class="fa fa-gift"></i>
                           </div>
                           <div class="facilitytxt">Welcome Kit</div>
                        </div>
                     </div>
                  </div>
                  <!--End single working item-->
               </div>
            </div>
         </div>
      </section>
      <!--End working area-->
      <!--Start testimonial area-->
      <section class="testimonial-area" id="testimonial">
         <div class="container">
            <div class="sec-title text-center">
               <h2>Customers Feedback</h2>
               <span class="border"></span>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="testimonials-carousel">
                     <!--Start single slide item-->
                     <div class="single-slide-item">
                        <div class="img-box">

                           <div class="client-photo">
                              <img src="images/customer.jpg" alt="Awesome Image">
                           </div>
                        </div>
                        <div class="text-box">
                           <span class="flaticon-right"></span>
                           <div class="text">
                              <p>We have been searching for a place to host our meet-up and found Exospace an amazing Co-Working space. We hosted our first ever WordPress meet-up there and we really impressed the kind of hospitality provided by the Exospace team and the infrastructure. We really recommend others to choose their work place over there. A big thanks to Satyam and his team for helping us in the meet-up.</p>
                              <h3>Basanta Moharana</h3>
                           </div>
                        </div>
                     </div>
                     <!--End single slide item-->
                     <!--Start single slide item-->
                     <div class="single-slide-item">
                        <div class="img-box">

                           <div class="client-photo">
                              <img src="images/customer2.jpg" alt="Awesome Image">
                           </div>
                        </div>
                        <div class="text-box">
                           <span class="flaticon-right"></span>
                           <div class="text">
                              <p>Exospace more likely feel as a home office rather than a corporate cowork with its friendly and appealing environment and ambience.</p>
                              <h3>Bibhu Bahalia</h3>
                           </div>
                        </div>
                      </div>
                        <div class="single-slide-item">
                        <div class="img-box">

                           <div class="client-photo">
                              <img src="images/customer4.jpg" alt="Awesome Image">
                           </div>
                        </div>
                        <div class="text-box">
                           <span class="flaticon-right"></span>
                           <div class="text">
                              <p>Exospace is a very convenient coworking space where you can focus on your work without any worry of how the space has to be managed, who will do the interior and many such. You can come here and leave whatever you want to on the workstation.</p>
                              <h3>Chinmayee Dash</h3>
                           </div>
                        </div>
                     </div>


                  </div>
               </div>
            </div>
         </div>
      </section>

     <section class="latest-blog-area" id="event">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="sec-title pull-left">
                     <h2>Events at <span>Exospace</span></h2>
                     <span class="decor"></span>
                  </div>
                  <div class="more-blog-button pull-right">
                     <a class="thm-btn bg-cl-1" href="https://www.instagram.com/exospacesocial/?igshid=1wyniwkpa8513" target="blank">Upcoming Event</a>
                  </div>
               </div>
            </div>
            <div class="row">
               <!--Start single blog item-->
               <div class="col-md-4">
                  <div class="single-blog-item">
                     <div class="img-holder">
                        <img src="images/blog/lat-blog-1.jpg" alt="Awesome Image">
                       <!--  <div class="overlay">
                           <div class="box">
                              <div class="content">
                                 <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                              </div>
                           </div>
                        </div> -->
                     </div>
                     <div class="text-holder">
                        <a href="#">
                           <h3 class="blog-title">GDG Bhubaneswar </h3>
                        </a>
                       <!--  <ul class="meta-info">
                           <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#">April 21, 2016</a></li>
                        </ul> -->
                        <div class="text">
                           <p> GDG Bhubaneswar is a local group of developers who are specifically interested in Google products and AIPs.
                              In addition to these developers, we also include other developers who live in Bhubaneswar and want to contribute to the group. <!-- The ultimate goal is to bring together all developers of Bhubaneswar to create a thriving developer ecosystem. We host a variety of technical activities for developers - demos and tech talks, to hackathons. The membership is open to and free for all interested.
                              Google Developers supports and recognizes GDG Bhubaneswar, but doesn’t own or manage us. -->
                           </p>
                           <!-- <a class="readmore" href="#">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a> -->
                        </div>
                     </div>
                  </div>
               </div>
               <!--End single blog item-->
               <!--Start single blog item-->
               <div class="col-md-4">
                  <div class="single-blog-item">
                     <div class="img-holder">
                        <img src="images/blog/lat-blog-2.jpg" alt="Awesome Image">
                       <!--  <div class="overlay">
                           <div class="box">
                              <div class="content">
                                 <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                              </div>
                           </div>
                        </div> -->
                     </div>
                     <div class="text-holder">
                        <a href="#">
                           <h3 class="blog-title">eChai</h3>
                        </a>
                        <!-- <ul class="meta-info">
                           <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#">March 4, 2016</a></li>
                        </ul> -->
                        <div class="text">
                           <p>eChai hosts engaging, insightful and content-driven startup networking events which helps you grow your Startup #CoRise Network, Get more business and CoLearn with the community.
                           </p>
                           <!-- <a class="readmore" href="#">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a> -->
                        </div>
                     </div>
                  </div>
               </div>
               <!--End single blog item-->
               <!--Start single blog item-->
               <div class="col-md-4">
                  <div class="single-blog-item">
                     <div class="img-holder">
                        <img src="images/blog/lat-blog-3.jpg" alt="Awesome Image">
                        <!-- <div class="overlay">
                           <div class="box">
                              <div class="content">
                                 <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                              </div>
                           </div>
                        </div> -->
                     </div>
                     <div class="text-holder">
                        <a href="#">
                           <h3 class="blog-title">way2star</h3>
                        </a>
                        <!-- <ul class="meta-info">
                           <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#">Jan 25, 2016</a></li>
                        </ul> -->
                        <div class="text">
                           <p>Way2Star is the first casting agency and company in Orissa. Here you can showcase your talent in film industry.
                              <br>
<!-- Are you an #actor,#Model,#Dancer,#Singer . Way2star is the 1st casting agency and company in odisha .Here you can showcase your talents in film industry. -->

A unit of Destarity Entertainment Pvt. Ltd.
                           </p>
                           <!--  <a class="readmore" href="#">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a> -->
                        </div>
                     </div>
                  </div>
               </div>
                  <div class="col-md-4 col-md-offset-2">
                  <div class="single-blog-item">
                     <div class="img-holder">
                        <img src="images/blog/lat-blog-4.jpg" alt="Awesome Image">
                        <!-- <div class="overlay">
                           <div class="box">
                              <div class="content">
                                 <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                              </div>
                           </div>
                        </div> -->
                     </div>
                     <div class="text-holder">
                        <a href="#">
                           <h3 class="blog-title">Women Tech Maker</h3>
                        </a>
                       <!--  <ul class="meta-info">
                           <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#">Jan 25, 2016</a></li>
                        </ul> -->
                        <div class="text">
                           <p>Women Techmakers is continually launching global scalable initiatives and piloting new programs to support and empower women in the industry.
                           </p>
                           <!--  <a class="readmore" href="#">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a> -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single-blog-item">
                     <div class="img-holder">
                        <img src="images/blog/lat-blog-5.jpg" alt="Awesome Image">
                       <!--  <div class="overlay">
                           <div class="box">
                              <div class="content">
                                 <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                              </div>
                           </div>
                        </div> -->
                     </div>
                     <div class="text-holder">
                        <a href="#">
                           <h3 class="blog-title">Design Now</h3>
                        </a>
                        <!-- <ul class="meta-info">
                           <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#">Jan 25, 2016</a></li>
                        </ul> -->
                        <div class="text">
                           <p>DesignNow is an educative initiative that aims to create 1 million world class designers who will design products of tomorrow.
                           </p>
                           <!--  <a class="readmore" href="#">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a> -->
                        </div>
                     </div>
                  </div>
               </div>


               <!--End single blog item-->
            </div>
         </div>
      </section>
      <!--End latest blog area-->
      <!--Start footer area-->
      <footer class="footer-area">
         <div class="container">
            <div class="row">
               <!--Start single footer widget-->
               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="single-footer-widget pd-bottom">
                     <div class="footer-logo">
                        <a href="index.html">
                        <img src="images/footer-logo.png" alt="Awesome Footer Logo">
                        </a>
                     </div>
                     <div class="interrio-info">
                        <p><span>Exospace</span> a perfect co-working space based out for creative thinkers in Bhubaneswar.</p>
                     </div>
                     <ul class="footer-contact-info">
                        <li>
                           <div class="icon-holder">
                              <span class="flaticon-building"></span>
                           </div>
                           <div class="text-holder">
                              <p>Bhubaneswar</p>
                           </div>
                        </li>
                        <li>
                           <div class="icon-holder">
                              <span class="flaticon-technology"></span>
                           </div>
                           <div class="text-holder">
                              <p>070774 44490</p>
                           </div>
                        </li>
                        <li>
                           <div class="icon-holder">
                              <span class="flaticon-e-mail-envelope"></span>
                           </div>
                           <div class="text-holder">
                              <p>hello@exospace.in</p>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <!--End single footer widget-->
               <!--Start single footer widget-->
               <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                  <div class="single-footer-widget pd-bottom">
                     <div class="title">
                        <h3>Service</h3>
                     </div>
                     <div class="footermenu">
                        <ul>
                           <li class="">
                              <a href="#">Meeting Space</a>
                           </li>
                           <li class="">
                              <a href="#">Conference Room</a>
                           </li>
                           <li class="">
                              <a href="#">Private Cabins</a>
                           </li>
                           <li class="">
                              <a href="#">Dedicated Desk</a>
                           </li>
                           <li class="">
                              <a href="#">Open Space</a>
                           </li>
                           <li class="">
                              <a href="#">Private Desk</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!--End single footer widget-->
               <!--Start single footer widget-->
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="row">
                     <div class="resp-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14968.834480196854!2d85.8558189!3d20.2916302!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xef5531d137a66ec9!2sExospace%20-%20Coworking%20Space%20in%20Bhubaneswar!5e0!3m2!1sen!2sin!4v1582630400156!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>
               <!--End single footer widget-->
            </div>
         </div>
      </footer>
      <!--End footer area-->
      <!--Start footer bottom area-->
      <section class="footer-bottom-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                  <div class="copyright-text mt_10">
                     <p>© 2020 Exospace,  All Rights Reserved </p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <div class="copyright-text mt_10" align="center">
                     <p>Powered by : <a href="https://nirmalyalabs.com/" target="blank">Nirmalyalabs.com</a></p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="footer-menu">
                     <ul>
                         <li><a href="https://m.facebook.com/exospacecsocial"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="https://www.linkedin.com/company/exospacebbsr"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <!-- <li><a href="https://twitter.com/Exospacecsocial" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
                           <li><a href="https://instagram.com/exospacesocial?igshid=1wyniwkpa8513" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <!-- <li><a href="http://meetu.ps/c/4wkNr/B9K90/d" target="blank"><i class="fa fa-meetup"></i></a></li> -->
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Modal -->

      <!--End footer bottom area-->
      <!--Scroll to top-->
      <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
      <!-- main jQuery -->
      <script src="js/jquery-1.11.1.min.js"></script>
      <!-- bootstrap -->
      <script src="js/bootstrap.min.js"></script>
      <!-- bx slider -->
      <script src="js/jquery.bxslider.min.js"></script>
      <!-- count to -->

      <!-- owl carousel -->
      <script src="js/owl.carousel.min.js"></script>

      <!-- mixit up -->
      <script src="js/jquery.mixitup.min.js"></script>
      <!-- easing -->
      <script src="js/jquery.easing.min.js"></script>
      <!-- gmap helper -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>

      <!-- jQuery ui js -->
      <!-- <script src="js/jquery-ui.js"></script> -->
      <!-- Language Switche  -->
      <!-- <script src="language-switcher/jquery.polyglot.language.switcher.js"></script> -->
      <!-- fancy box -->
      <script src="js/jquery.fancybox.pack.js"></script>
      <script src="js/jquery.appear.js"></script>
      <!-- isotope script-->
      <script src="js/isotope.js"></script>
      <script src="js/jquery.prettyPhoto.js"></script>
      <!-- revolution slider js -->
      <script src="revolution/jquery.themepunch.tools.min.js"></script>
      <script src="revolution/jquery.themepunch.revolution.min.js"></script>
      <!-- <script src="revolution/extensions/revolution.extension.actions.min.js"></script> -->
      <script src="revolution/extensions/revolution.extension.carousel.min.js"></script>
      <!-- <script src="revolution/extensions/revolution.extension.kenburn.min.js"></script> -->
      <script src="revolution/extensions/revolution.extension.layeranimation.min.js"></script>
      <!-- <script src="revolution/extensions/revolution.extension.migration.min.js"></script> -->
      <script src="revolution/extensions/revolution.extension.navigation.min.js"></script>
      <!-- <script src="revolution/extensions/revolution.extension.parallax.min.js"></script> -->
      <script src="revolution/extensions/revolution.extension.slideanims.min.js"></script>
      <!-- <script src="revolution/extensions/revolution.extension.video.min.js"></script> -->
      <!-- thm custom script -->
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "350px";
         }

         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>
