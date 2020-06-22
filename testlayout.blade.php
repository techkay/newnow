
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <link  href="//fonts.googleapis.com/css?family=Lemon" />
<link href="/bootstrap-4.1.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="/bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="/jquery/jquery.min.js"></script>
<script src="/jquery/jquery-3.1.1.min.js"></script>

<link rel="stylesheet" href="/fontawesome-free-5.13.0-web/css/all.css">
<link href="test/css/test.css" rel="stylesheet">


<style>
 .navbar{
     background: #fff;
     padding-top: 0;
     padding-bottom: 0;
     box-shadow: 1px 3px 4px 0 #adadad33;
}
 .navbar-light .navbar-brand {
     color: #3931af;
}
 .navbar-light .navbar-nav .nav-link {
     color: #fff;
}
 .navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
     color: #1ebdc2;
}
 .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
     color: #fff;
}
 .navbar-light .navbar-nav .nav-link{
     padding-top: 22px;
     padding-bottom: 22px;
     transition: 0.3s;
     padding-left: 24px;
     padding-right: 24px;
         font-size: 14px;
}
 .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover{
     background: #0B2848;
     transition: 0.3s;
}
.dropdown-item:focus, .dropdown-item:hover {
    color: #fff;
    text-decoration: none;
    background-color: #1ebdc2 !important;
}
.sm-menu{
    border-radius: 0px;
    border: 0px;
    top: 97%;
    box-shadow: rgba(173, 173, 173, 0.2) 1px 3px 4px 0px;
}
.dropdown-item {
    color: #3c3c3c;
        font-size: 14px;
}
.dropdown-item.active, .dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #3931af;
}
.navbar-toggler{
    outline: none !important;
}
.navbar-tog{
    color: #1ebdc2;
}
.megamenu-li {
  position: static;
 

}

.megamenu {
	position: absolute;
	width: 100%;
	left: 0;
	right: 0;
	padding: 15px;
}
.megamenu h6{
    margin-left: 21px;
}
.megamenu i{
    width: 20px;
}


/* slider styles */

#myCarousel .carousel-item .mask {
    position: absolute;
    top: 0;
	left:0;
	height:100%;
    width: 100%;
    background-attachment: fixed;
    background-color: #0B2848;
}
#myCarousel h4{
	font-size:50px;
	margin-bottom:15px;
	color:#FFF;
	line-height:100%;
	letter-spacing:0.5px;
	font-weight:600;
}
#myCarousel p{
	font-size:18px;
	margin-bottom:15px;
	color:#d5d5d5;
}
#myCarousel .carousel-item a{background:#0B2848; font-size:14px; color:#FFF; padding:13px 32px; display:inline-block; }
#myCarousel .carousel-item a:hover{background:#394fa2; text-decoration:none;  }

#myCarousel .carousel-item h4{-webkit-animation-name:fadeInLeft; animation-name:fadeInLeft;} 
#myCarousel .carousel-item p{-webkit-animation-name:slideInRight; animation-name:slideInRight;} 
#myCarousel .carousel-item a{-webkit-animation-name:fadeInUp; animation-name:fadeInUp;}
#myCarousel .carousel-item .mask img{-webkit-animation-name:slideInRight; animation-name:slideInRight; display:block; height:auto; max-width:100%;}
#myCarousel h4, #myCarousel p, #myCarousel a, #myCarousel .carousel-item .mask img{-webkit-animation-duration: 1s;
    animation-duration: 1.2s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}
#myCarousel .container {max-width: 1430px;  background-color: #0B2848;}
#myCarousel .carousel-item{height:400px; min-height:350px; }
#myCarousel{position:relative; z-index:1; background:url(https://i.imgur.com/6axE29k.jpg) center center no-repeat; background-size:cover; background-color: #0B2848; }

.carousel-control-next, .carousel-control-prev{height:40px; width:40px; padding:12px; top:50%; bottom:auto; transform:translateY(-50%); background-color: #f47735; }


.carousel-item {
    position: relative;
    display: none;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    transition: -webkit-transform .6s ease;
    transition: transform .6s ease;
    transition: transform .6s ease,-webkit-transform .6s ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px;
}
.carousel-fade .carousel-item {
	opacity: 0;
	-webkit-transition-duration: .6s;
	transition-duration: .6s;
	-webkit-transition-property: opacity;
	transition-property: opacity
}
.carousel-fade .carousel-item-next.carousel-item-left, .carousel-fade .carousel-item-prev.carousel-item-right, .carousel-fade .carousel-item.active {
	opacity: 1
}
.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-right.active {
	opacity: 0
}
.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
	-webkit-transform: translateX(0);
	-ms-transform: translateX(0);
	transform: translateX(0)
}
@supports (transform-style:preserve-3d) {
	.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
	-webkit-transform:translate3d(0, 0, 0);
	transform:translate3d(0, 0, 0)
	}
}
.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
}


 
@-webkit-keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.fadeInLeft {
  -webkit-animation-name: fadeInLeft;
  animation-name: fadeInLeft;
}

@-webkit-keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}

@-webkit-keyframes slideInRight {
  from {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes slideInRight {
  from {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.slideInRight {
  -webkit-animation-name: slideInRight;
  animation-name: slideInRight;
}

/*newwwwwwwwwwww*/

.lemon { font-family: "Lemon"; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 22px; } 

.luckiest{ font-family: "Luckiest Guy"; font-size: 20px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; } 

.social{ font-family: "Luckiest Guy"; font-size: 17px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; } 

</style>
</head>

<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="margin-top:10px; margin-right:0px;padding-right:0px">
    <div class="container col-sm-12 col-lg-12 col-md-12 col-xs-12" >
        <a class="navbar-brand" href="#">
        <img src="test/images/LCC-LOGO-new1.jpg" class="d-block w-100 img-fluid" alt="..."
        style="height:100;width:50"></a>
        
        <button style="background:#DD6E17;color:#fff"class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile_nav" aria-controls="mobile_nav" aria-expanded="false" aria-label="Toggle navigation">
         <i class="fa fa-bars" arial-hidden="true">Menu</i>
        <!--<span class="navbar-toggler-icon"></span> -->
        </button>
        <div class="collapse navbar-collapse " id="mobile_nav" style="background-color:#DD6E17;
        padding-left:50px; margin-right:150px">
       
        <ul class="navbar-nav navbar-light" >
            <li class="nav-item"><a class="nav-link" href="{{url('/')}}">	Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target=".aboutus" data-ui-class="a-fadeRight">
              About Us</a></li>
            <li class="nav-item dmenu dropdown">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  	Services
                </a>
                <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Toll Tarrif/Price Incentives</a>
                    <a class="dropdown-item" href="#">Apply for a Toll Device</a>
                    <a class="dropdown-item" href="#">Pay Now with Quickteller</a>
                    <a class="dropdown-item" href="#">Users Guide</a>
                    <a class="dropdown-item" href="#">Toll Banks</a>
                    <a class="dropdown-item" href="#">Account Balance</a>
                   	
                  </a>
                </div>
            </li>

            <!--new mega menu here-->
            

            <!--end new mage menu-->
            <!--========-->
            <li class="nav-item dmenu dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Services</a>
                <div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown01"
                style="width:1000px">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3 border-right mb-4">
                            <h6>Tolling</h6>
                            <a class="dropdown-item" href="#"><i class="fab fa-magento"></i> Apply for a Toll Device</a>
                            <a class="dropdown-item" href="#"><i class="fab fa-magento"></i> Pay Now with Quickteller</a>
                            <a class="dropdown-item" href="#"><i class="fab fa-magento"></i> User Guide</a>
                            <a class="dropdown-item" href="#"><i class="fab fa-magento"></i> Toll Bank</a>
                            <a class="dropdown-item" href="#"><i class="fab fa-magento"></i> Account Balance</a>
                        </div>
                       <div class="col-sm-6 col-lg-3 border-right mb-4">
                            <h6>Electronic Payment</h6>
                            <a class="dropdown-item" href="#"><i class="fab fa-php"></i> Quickteller</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-circle"></i> Unified Payment</a>
                            <a class="dropdown-item" href="#"><i class="fab fa-laravel"></i> Simple Pay</a>
                            <a class="dropdown-item" href="#"><i class="fab fa-wordpress-simple"></i> Toll Banks</a>
                            <a class="dropdown-item" href="#"><i class="fab fa-php"></i> NFC</a>
                        </div>
                        <div class="col-sm-6 col-lg-3 border-right mb-4">
                            <h6>Route and Incidents</h6>
                            
                            <a class="dropdown-item" href="#"><i class="fab fa-apple"></i> Report an Incident</a>
                            <a class="dropdown-item" href="#"><i class="fab fa-android"></i> Traffic Update</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-mobile-alt"></i> Request Towing Assistance</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-tablet-alt"></i> User Guide</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-mobile-alt"></i> All services</a>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-4">
                            <h6>Customer Service</h6>
                            <a class="dropdown-item" href="#"><i class="fas fa-cubes"></i> Tarrif Information</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cube"></i> Report a Staff</a>
                            <a class="dropdown-item" href="#"><i class="fab fa-angular"></i> Request Balance Statements</a>
                            <a class="dropdown-item" href="#"><i class="fab fa-node-js"></i> Speak with an Agent</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-leaf fa-rotate-90"></i> Email Us</a>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-sm-6 col-lg-3 border-right mb-4">
                            <h6>Gallery</h6>
	
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="test/images/lcc01.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item news-title">
      <img src="test/images/lcc01.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
				
                <!-- /.carousel -->
             
                <a href="#">View more <span class="glyphicon glyphicon-chevron-right pull-right"></span></a>
				</div>
				
             
							
							<!--
                            <a class="dropdown-item" href="#"><i class="fab fa-windows"></i> Microsoft App Development</a>
                            <a class="dropdown-item" href="#"><i class="fab fa-windows"></i> MS Desktop App Development</a>
                            <a class="dropdown-item" href="#"><i class="fab fa-windows"></i> SharePoint Development</a>
                            <a class="dropdown-item" href="#"><i class="fab fa-windows"></i> ASP.NET Development</a>
                            <a class="dropdown-item" href="#"><i class="fab fa-windows"></i> CMS Development</a>-->
                        
                        
                        
                        <div class="col-sm-6 col-lg-3 border-right mb-4">
                            <h6>Other Services</h6>
                            <a class="dropdown-item" href="#"><i class="fas fa-cloud"></i> CRM</a>
                            <a class="dropdown-item" href="#"><i class="fab fa-amazon"></i> Road Maintenance</a>
                            <a class="dropdown-item" href="#"><i class="fab fa-windows"></i> Services</a>
                            <a class="dropdown-item" href="#"><i class="fab fa-google"></i> Metro News</a>
                        </div>
                        <div class="col-sm-6 col-lg-3 border-right mb-4">
                            <h6>Social Media</h6>
                            <a class="dropdown-item" href="#"><i class="fas fa-laptop"></i> Service 1</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-laptop"></i> CRM</a>
                            <a class="dropdown-item" href="#"><i class="fab fa-buromobelexperte"></i>  Services</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-th-large"></i> Services</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-briefcase"></i> Service 2</a>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-4">
                            <h6>Advertising</h6>
                            <a class="dropdown-item" href="#"><i class="fas fa-laptop"></i> Advertise With Us</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-laptop"></i> Waylaeve Charges</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-laptop"></i> Services</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-laptop"></i> Service 1</a>
                        </div>
                    </div>
                </div>
            </li>
            <!--=========-->
            <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target=".aboutus" data-ui-class="a-fadeRight">Project Info</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Careers</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target=".contact" data-ui-class="a-fadeRight">Contact Us </a></li>
   
        </ul>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 float-md-right" >
        </ul>
        </div>
        <div style="background-color:; font-size:9pt " class="col-lg-2">
        <a class="lemon" href="#" style="color:#0B2848; "><i class="fa fa-envelope"></i>&nbsp;Email us: info@lcc.com.ng</a> <br>
        <a class="lemon"href="" style="color:#0B2848; "><i class="fa fa-phone"></i> &nbsp;Call us: 0800 225 5522 </a><br>
        <a class="lemon"href="" style="color:#0B2848; ">&nbsp;Follow us: <i class="fab fa-twitter"></i>&nbsp;<i class="fab fa-linkedin"></i>
        &nbsp;<i class="fab fa-instagram"></i>&nbsp;<i class="fab fa-facebook"></i></a>

        </div>
    </div>
</nav>
<!--nav link modal here -->
  @include ("modals.contact") 
  @include ("modals.aboutus")  

    <!--news caurosel -->

    <!--start code-->
    
        <div class="row col-12  " style="margin-left:0px;  position: fixed;
    z-index: 99; background-color:#546169">
            <!--Breaking box-->
            <div class="col-md-2 col-lg-2 col-sm-2 pr-md-0" >
                <div class="p-1  text-white text-center " style="background: #546169"><span >Latest News</span></div>
            </div>
            <!--end breaking box-->
            <!--Breaking content-->
            <div class="col-md-9 col-lg-10 pl-md-4 py-1">
                <div class="breaking-box">
                    <div id="carouselbreaking" class="carousel slide" data-ride="carousel">
                        <!--breaking news-->
                        <div class="carousel-inner">
                            <!--post-->
                            <div class="carousel-item">
                                <a href="#">
                                <span class="position-relative mx-2 badge rounded-0 news">Tolling</span></a> 
                                <a class="text-white" href="#">
                                Lekki-Ikoyi link brigde is now fully electonic, no eTag no passage</a>
                            </div>
                            <!--post-->
                            <div class="carousel-item">
                                <a href="#">
                                <span class="position-relative mx-2 badge badge-primary rounded-0 news">Live Traffic</span></a>
                                 <a class="text-white" href="#">
                                 Heavy traffic along Lekki-Epe expressway, take alternative route</a>
                            </div>
                            <!--post-->
                            <div class="carousel-item">
                                <a href="#">
                                <span class="position-relative mx-2 badge badge-primary rounded-0 news">Health</span></a> 
                                <a class="text-white" href="#">
                                Coronavirus is real, wash your hand regularly and maintain social distancing guildlines</a>
                            </div>
                            <!--post-->
                            <div class="carousel-item">
                                <a href="#">
                                <span class="position-relative mx-2 badge badge-primary rounded-0 news">Live Traffic</span></a> 
                                <a class="text-white" href="#">
                                Heavy traffic along Lekki-Epe expressway, take alternative route</a>
                            </div>
                            <!--post-->
                            <div class="carousel-item active">
                                <a href="#">
                                <span class="position-relative mx-2 badge badge-primary rounded-0 news">Sport</span></a>
                                 <a class="text-white" href="#">
                                 5 Takeaways From Elon Musk’s Interview With The Times About Tesla</a>
                            </div>
                        </div>
                        <!--end breaking news-->
                        
                        <!--navigation slider-->
                        <div class="navigation-box p-1 d-none d-sm-block">
                            <!--nav left-->
                            <a class="carousel-control-prev text-primary" href="#carouselbreaking" role="button" data-slide="prev">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <!--nav right-->
                            <a class="carousel-control-next text-primary" href="#carouselbreaking" role="button" data-slide="next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--end navigation slider-->
                    </div>
                </div>
            </div>
            <!--end breaking content-->
        </div>
       
  


<!--end news carousel-->

<!--<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="https://dummyimage.com/1200x400/1EBDC2/ffffff&text=Bootstrap+Mega+Menu" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://dummyimage.com/1200x400/1EBDC2/ffffff&text=Bootstrap+Mega+Menu" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://dummyimage.com/1200x400/1EBDC2/ffffff&text=Bootstrap+Mega+Menu" class="d-block w-100" alt="...">
    </div>
  </div>
</div>-->

<!--header slider goes here -->

<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Intoducing E-payment Only<br>
                At Lekki-Ikoyi Link Bridge </h4>
              <p>No more cash payment at Lekki-Ikoyi bridge. Get your electronic device today</p>
              <a href="#">READ MORE</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1" style="margin-top: 20px;"><img style="height: 300px;
          margin-top: 50px;"src="/test/images/new-img1.jpg" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Go eTAG <br>
              Apply for your eTag today</h4>
              <p>Go eTag. Register for your eTag today. It is cheaper and more convenient <br>
                </p>
              <a href="#">READ MORE</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img style="height: 300px;
          margin-top: 50px;"src="/test/images/new-img2.jpg" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4> E-TOP NOW AVAILABLE <br>
                </h4>
              <p>You can now top up your account on your mobile devices using our various e-payment platforms</p>
              <a href="#">READ MORE</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img style="height: 300px;
          margin-top: 50px;" src="/test/images/new-img3.jpg" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
</div>
  <!--slide end--> 
<!--end header slider-->

@yield('content') 
    
<!-- Footer -->

<!--footer starts from here-->
<footer class="footer" style="background-color: #0B2848; color:#fff;padding-top:30px">
<div class="container bottom_border">
<div class="row" >
<div class=" col-sm-4 col-md col-sm-4  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2"style="align: left;">CORPORATE OFFICE</h5>
<!--headin5_amrc-->
<p class="mb10">
Lekki Concession Company Limited
Conservation Plaza, 
Km 13.6 Eti-Osa Lekki-Epe Expressway
Lagos.
Tel: +234-1-2719700
Email: info@lcc.com.ng</p>
<!--<p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
<p><i class="fa fa-phone"></i>  +234 (0) 811 377 7009  </p>
<p><i class="fa fa fa-envelope"></i> email@barnabasmission.org  </p>-->

</div>


<div class=" col-sm-4 col-md  col-6 col" >
<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc" style="margin-left:5px;" >
<li><a style="color:#fff;"href="{{url('/events')}}">Register</a></li>
<li><a style="color:#fff;" href="{{url('/contact')}}">Top up</a></li>
<li><a style="color:#fff;" href="{{url('/services')}}">Check Balance</a></li>
<li><a style="color:#fff;" style="color:#fff;" href="{{url('/contact')}}">Contact Us</a></li>
<li><a style="color:#fff;" href="{{url('/contact')}}">Contact</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc"style="margin-left:5px">
<li><a style="color:#fff;" href="{{url('/')}}">Home</a></li>
<li><a style="color:#fff;" href="{{url('/aboutus')}}">About</a></li>
<li><a style="color:#fff;" href="{{url('/services')}}">Services</a></li>
<li><a style="color:#fff;" href="{{url('/posts')}}">Report Incidents</a></li>
<li><a style="color:#fff;" href="{{url('/contact')}}">Contact</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
<!--headin5_amrc ends here-->
<p style="margin-left:5px"><a style="color:#fff"href="https://twitter.com/"><i class="fab fa-twitter "></i>&nbsp; Twitter:  @lccng</a></p>
<p style="margin-left:5px"><a style="color:#fff"href="https://twitter.com/"><i class="fab fa-instagram "></i>&nbsp;&nbsp;Instagram:  @lccng</a></p>
<p style="margin-left:5px"><a style="color:#fff"href="https://twitter.com/"><i class="fab fa-facebook "></i>&nbsp;&nbsp;Facebook:  @lccng</a></p>
<p style="margin-left:5px"><a style="color:#fff"href="https://twitter.com/"><i class="fab fa-whatsapp "></i>&nbsp;&nbsp;WhatsApp:  0800000000</a></p>

<!--footer_ul2_amrc ends here-->
</div>
</div>
</div>


<div class="container">
<!--<ul class="foote_bottom_ul_amrc">
<li><a href="{{url('/')}}">Home</a></li>
<li><a href="{{url('/aboutus')}}">About</a></li>
<li><a href="{{url('/services')}}">Services</a></li>
<li><a href="{{url('/posts')}}">Blog</a></li>
<li><a href="{{url('/contact')}}">Contact</a></li>
</ul>-->
<!--foote_bottom_ul_amrc ends here-->
<p></p>
<p class="text-center">Copyright &copy;   <a href="#" style="color:#fff">Lekki Concession Company Ltd</a>&nbsp;2020
<br><small>Designed by: Kayotech</small></p>
<!--
<ul class="social_footer_ul">
<li><a href="http://webenlance.com"><i class="fab fa-twitter"></i></a></li>

<li><a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-instagram"></i></a></li>
</ul>-->
<!--social_footer_ul ends here-->
</div>

</footer>
<!-- Footer --> 
</html>

  <!--js for test layout -->
  <script src="test/js/test.js"></script>
  <!--end test layout js -->
<script>

    $(document).ready(function () {
$('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });
}); 
 
    $(document).ready(function() {
	$(".megamenu").on("click", function(e) {
		e.stopPropagation();
	});
});

//slider js 
$('#myCarousel').carousel({
    interval: 2000,
 })

</script>
<script src="{{asset('/bootstrap-4.0.0/js/dist/carousel.js')}}"></script>

<script src="{{asset('css/js/jquery.min.js')}}"></script>
        <script src="{{asset('css/js/modernizr.min.js')}}"></script>
        <script src="{{asset('site-assets/bootstrap-3.3.7/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('site-assets/js/datepicker.js')}}"></script>
        <script src="{{asset('test/js/index.js')}}"></script>
        <!-- animate css -->
        <link rel="stylesheet" href="{{asset('site-assets/css/animate.css')}}"> 

        <!-- Chosen -->
        <link rel="stylesheet" href="{{asset('site-assets/plugins/chosen/chosen.min.css')}}">  
        <script src="{{asset('site-assets/plugins/chosen/chosen.jquery.min.js')}}"></script>
