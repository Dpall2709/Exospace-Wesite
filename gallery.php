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
      <title>Exospace | Best Coworking Office Space in Bhubaneswar</title>
      <meta name="keyword" content="Coworking space in Bhubaneswar, Office space in Bhubaneswar, Shared office space in Bhubaneswar, Startup in Bhubaneswar, Shared workspace in Bhubaneswar, Coworking office space in Bhubaneswar, Individual office space in Bhubaneswar"/>
      <meta name="description" content="Are you confuse about who is the Best office space in Bhubaneswar ? We are provideing Coworking space, Shared office space, Shared workspace, Individual office space, Coworking office space in Bhubaneswar">
      <!-- For IE -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- master stylesheet -->
      <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="css/fancybox.css">
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
            <h3>Connect Us</h3>
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
                          <!--  <a href="https://twitter.com/Exospacecsocial" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a> -->
           <a href="https://instagram.com/exospacesocial?igshid=1wyniwkpa8513" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>

         </div>
      </div>


      <section class="latest-project-area" id="gallery">
            <div class="container">
                <div class="sec-title pull-left">
                  <h2>Latest <span>Gallery</span></h2>
                  <span class="decor"></span>
               </div>
                <ul class="project-filter post-filter pull-right">
                  <li class="active" data-filter=".filter-item"><span>View All</span></li>
                  <li data-filter=".residential"><span>Esplanade - 618</span></li>
                  <li data-filter=".corporate"><span>Esplanade - 312</span></li>
              </ul>
              </div>
             <div class="container">
              <div class="row project-content masonary-layout filter-layout">
                <div class="col-lg-4 col-md-4 col-xs-6 thumb  filter-item residential">
                   <div class="single-project-item">
                    <a href="images/project/gallery1.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/project/gallery1.jpg" class="img-fluid "  alt="">

                    </a>
                  </div>
                </div>
                 <div class="col-lg-4 col-md-4 col-xs-6 thumb filter-item corporate">
                   <div class="single-project-item">
                    <a href="images/project/gallery9.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/project/gallery9.jpg" class="img-fluid "  alt="">
                    </a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6 thumb filter-item residential">
                   <div class="single-project-item">
                    <a href="images/project/gallery2.jpg"  class="fancybox" rel="ligthbox">
                        <img  src="images/project/gallery2.jpg" class="img-fluid"  alt="">
                    </a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-6 thumb filter-item residential">
                   <div class="single-project-item">
                    <a href="images/project/gallery3.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/project/gallery3.jpg" class="img-fluid "  alt="">
                    </a>
                  </div>
                </div>


                <div class="col-lg-4 col-md-4 col-xs-6 thumb filter-item residential">
                   <div class="single-project-item">
                    <a href="images/project/gallery4.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/project/gallery4.jpg" class="img-fluid "  alt="">
                    </a>
                  </div>
                </div>
                 <div class="col-lg-4 col-md-4 col-xs-6 thumb filter-item corporate">
                   <div class="single-project-item">
                    <a href="images/project/gallery8.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/project/gallery8.jpg" class="img-fluid "  alt="">
                    </a>
                  </div>
                </div>

                 <div class="col-lg-4 col-md-4 col-xs-6 thumb filter-item residential">
                   <div class="single-project-item">
                    <a href="images/project/gallery5.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/project/gallery5.jpg" class="img-fluid "  alt="">
                    </a>
                  </div>
                </div>

                 <div class="col-lg-4 col-md-4 col-xs-6 thumb filter-item residential">
                   <div class="single-project-item">
                    <a href="images/project/gallery6.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/project/gallery6.jpg" class="img-fluid "  alt="">
                    </a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-6 thumb filter-item corporate">
                   <div class="single-project-item">
                    <a href="images/project/gallery7.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/project/gallery7.jpg" class="img-fluid "  alt="">
                    </a>
                  </div>
                </div>







            </div>
      </section>
      <!--End latest project area-->

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

       <script src="js/isotope.js"></script>
      <script src="js/jquery.prettyPhoto.js"></script>
      <!-- thm custom script -->
      <script src="js/custom.js"></script>
     <script src="js/fancybox.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });

    $(".zoom").hover(function(){

    $(this).addClass('transition');
  }, function(){

    $(this).removeClass('transition');
  });
});

    </script>
   </body>
</html>
