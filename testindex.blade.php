
@extends('testlayout')
@section('content')
<!------ Include the above in your HEAD tag ---------->
<!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">-->
<style>
.how-section1{
    margin-top:-15%;
    padding: 10%;
}
.how-section1 h4{
    color: #ffa500;
    font-weight: bold;
    font-size: 30px;
}
.how-section1 .subheading{
    color: #3931af;
    font-size: 20px;
}
.how-section1 .row
{
    margin-top: 10%;
}
.how-img 
{
    text-align: center;
}
.how-img img{
    width: 40%;
}


/**  new css for homepage*/
h1{
             font-size:25px;
             text-align: left;
             text-transform:capitalize;
         }
        .service-box{
            position: relative;
            overflow: hidden;
            margin-bottom:10px;
            perspective:1000px;
            -webkit-perspective:1000px;
        }
        .service-icon{
            width: 100%;
            height: 220px;
            padding: 20px;
            text-align: center;
            transition: all .5s ease;
        }

        .service-content{
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            opacity: 0;
            width: 100%;
            height: 220px;
            padding: 20px;
            text-align: center;
            transition: all .5s ease;
            background-color: #474747;
            backface-visibility:hidden;
            transform-style: preserve-3d;
            -webkit-transform: translateY(110px) rotateX(-90deg);
            -moz-transform: translateY(110px) rotateX(-90deg);
            -ms-transform: translateY(110px) rotateX(-90deg);
            -o-transform: translateY(110px) rotateX(-90deg);
            transform: translateY(110px) rotateX(-90deg);
        }
        .service-box .service-icon .front-content{
            position: relative;
            top:80px;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .service-box .service-icon .front-content i {
            font-size: 28px;
            color: #fff;
            font-weight: normal;
        }

        .service-box .service-icon .front-content h3 {
            font-size: 15px;
            color: #fff;
            text-align: center;
            margin-bottom: 15px;
            text-transform: uppercase;
        }
        .service-box .service-content h3 {
            font-size: 15px;
            font-weight: 700;
            color: #fff;
            margin-bottom:10px;
            text-transform: uppercase;
        }
        .service-box .service-content p {
            font-size: 13px;
            color: #b1b1b1;
            margin:0;
        }
        .yellow{background-color: #ffc000;}
        .orange{background-color: #fc7f0c;}
        .red{background-color: #e84b3a;}
        .grey{background-color: #474747;}
        .service-box:hover .service-icon{
            opacity: 0;
            -webkit-transform: translateY(-110px) rotateX(90deg);
            -moz-transform: translateY(-110px) rotateX(90deg);
            -ms-transform: translateY(-110px) rotateX(90deg);
            -o-transform: translateY(-110px) rotateX(90deg);
            transform: translateY(-110px) rotateX(90deg);
        }
        .service-box:hover .service-content {
            opacity: 1;
            -webkit-transform: rotateX(0);
            -moz-transform: rotateX(0);
            -ms-transform: rotateX(0);
            -o-transform: rotateX(0);
            transform: rotateX(0);
        }


/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
}

.section-bg {
  background-color: #f5f9fc;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: 600;
  margin-bottom: 20px;
  padding-bottom: 0;
  color: #5c768d;
}

.section-title p {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
.services {
  padding-bottom: 30px;
}

.services .icon-box {
  margin-bottom: 20px;
  text-align: center;
}

.services .icon {
  display: flex;
  justify-content: center;
}

.services .icon i {
  width: 80px;
  height: 80px;
  margin-bottom: 20px;
  background: #fff;
  border-radius: 50%;
  transition: 0.5s;
  color: #428bca;
  font-size: 40px;
  overflow: hidden;
  padding-top: 20px;
  box-shadow: 0px 0 25px rgba(0, 0, 0, 0.15);
}

.services .icon-box:hover .icon i {
  box-shadow: 0px 0 30px rgba(66, 139, 202, 0.5);
}

.services .title {
  font-weight: 600;
  margin-bottom: 15px;
  font-size: 18px;
  position: relative;
  padding-bottom: 15px;
}

.services .title a {
  color: #444;
  transition: 0.3s;
}

.services .title a:hover {
  color: #428bca;
}

.services .title::after {
  content: '';
  position: absolute;
  display: block;
  width: 50px;
  height: 2px;
  background: #428bca;
  bottom: 0;
  left: calc(50% - 25px);
}

.services .description {
  line-height: 24px;
  font-size: 14px;
}


/*--------------------------------------------------------------
# F.A.Q Section
--------------------------------------------------------------*/
#faq {
  padding: 60px 0;
}

#faq #faq-list {
  padding: 0;
  list-style: none;
}

#faq #faq-list li {
  border-bottom: 1px solid #ddd;
}

#faq #faq-list a {
  padding: 18px 0;
  display: block;
  position: relative;
  font-family: "Raleway", sans-serif;
  font-size: 16px;
  line-height: 24px;
  font-weight: 600;
  color: #0B2848;
  padding-right: 20px;
}

#faq #faq-list i {
  font-size: 24px;
  position: absolute;
  right: 0;
  top: 16px;
}

#faq #faq-list p {
  margin-bottom: 20px;
}

@media (max-width: 768px) {
  #faq #faq-list a {
    font-size: 18px;
  }
  #faq #faq-list i {
    top: 13px;
  }
}

#faq #faq-list a.collapse {
  color: #0B2848;
}

#faq #faq-list a.collapsed {
  color: #000;
}

#faq #faq-list a.collapsed i::before {
  content: "\f055" !important;
}

/* new services */
.mt-60{
    margin-top:20px;
}

.section-block-grey {
    padding: 20px 0px 30px 0px;
    background-color: #f9f9f9;
}

.serv-section-2 {
    position: relative;
    border: 1px solid #eee;
    background: #fff;
    box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.16);
    border-radius: 5px;
    overflow: hidden;
    padding: 30px;
}

.serv-section-2:before {
    position: absolute;
    top: 0;
    right: 0px;
    z-index: 0;
    content: " ";
    width: 120px;
    height: 120px;
    background: #f5f5f5;
    border-bottom-left-radius: 136px;
    transition: all 0.4s ease-in-out;
    -webkit-transition: all 0.4s ease-in-out;
}

.serv-section-2-icon {
    position: absolute;
    top: 18px;
    right: 22px;
    max-width: 100px;
    z-index: 1;
    text-align: center;
}

.serv-section-2-icon i {
    color: #001c48;
    font-size: 48px;
    line-height: 65px;
    transition: all 0.4s ease-in-out;
    -webkit-transition: all 0.4s ease-in-out;
}

.serv-section-desc {
    position: relative;
}

.serv-section-2 h4 {
    color: #333;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.5;
}

.serv-section-2 h5 {
    color: #333;
    font-size: 17px;
    font-weight: 400;
    line-height: 1;
    margin-top: 5px;
}

.section-heading-line-left {
    content: '';
    display: block;
    width: 100px;
    height: 3px;
    background: #001c48;
    border-radius: 25%;
    margin-top: 15px;
    margin-bottom: 5px;
}

.serv-section-2 p {
    margin-top: 25px;
    padding-right: 50px;
}

.serv-section-2:hover .serv-section-2-icon i {
    color: #fff;
}

.serv-section-2 .sbtn{
    display: none;
    
}

.serv-section-2:hover .sbtn{
    display: inline;
    background-color: #0B2848;
}

.serv-section-2:hover:before {
    background: #001c48;
}




</style>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<!-- team  section-->
<!-- Team -->
<section id="team" class="pb-5" style="background-color:#f8f9fa; ">
    <div class="container" >
      
        </div>
        <div class="row" style="background-color:#f8f9fa; ">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0" >
                        <div class="frontside"  >
                            <div class="card">
                                <div class="card-body text-center" >
                                    <p><img class=" img-fluid" src="test/images/report.png" alt="card image"></p>
                                    <h4 class="card-title"  >Check Your Balance</h4>
                                    <p class="card-text">Check your account balance here</p>
                                    <a  href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus" ></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside" style="width:100%">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title" >Check balance below</h4>
                                    <div class="container"style="width:80%">
                                    <form >
                                    <div class="form-group">
                                    <input  class="form-control" type="text" name="cpname" placeholder="Name:" required>
                                    </div>
                                    <div class="form-group">
                                    <input  class="form-control" type="tel" name="cpphone" placeholder="Phone:" required>
                                    </div>
                                    <div class="form-group">
                                    <input class="form-control" type="text" name="cpemail" placeholder="Acc. No:" required>
                                    </div>
                                    
                                    <input type="submit" value="Submit" style="background-color: #DD6E17;">
                                    </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                               <p> <img class=" img-fluid" src="test/images/service1.png" alt="card image"></p>
                                    
                                    <h4 class="card-title">Top Up</h4>
                                    <p class="card-text">Do a quick top up of your account here</p>
                                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside" style="width:100%">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Top Up</h4>
                                    <div class="container"style="width:80%">
                                    <form >
                                    <div class="form-group">
                                    <input  class="form-control" type="text" name="cpname" placeholder="Name:" required>
                                    </div>
                                    <div class="form-group">
                                    <input  class="form-control" type="tel" name="cpphone" placeholder="Phone:" required>
                                    </div>
                                    <div class="form-group">
                                    <input class="form-control" type="text" name="cpemail" placeholder="Acc. No:" required>
                                    </div>
                                    
                                    <input type="submit" value="Submit" style="background-color: #DD6E17;">
                                    </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <p><img class=" img-fluid" src="test/images/report.png" alt="card image"></p>
                                    <h4 class="card-title">Report an Incident</h4>
                                    <p class="card-text">For quick incident report</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside" style="width:100%;">
                            <div class="card" >
                                <div class="card-body text-center mt-4">
                                <h4 class="card-title">Report an Incident</h4>
                                    <div class="container"style="width:80%">
                                    <form >
                                    <div class="row">
                                    <div class="col">
                                    <input  class="form-control" type="text" name="cpname" placeholder="Name:" required>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col">
                                    <input class="form-control" type="email" name="cpemail" placeholder="Email:" required>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col">
                                    <input  class="form-control" type="tel" name="cpphone" placeholder="Phone:" required>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col">
                                    <textarea  class="form-control" name="cpmessage" placeholder="Message:" required></textarea>
                                    </div>
                                    </div>
                                    <input type="submit" value="Send message" style="background-color: #DD6E17;">
                                    </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            
           
           
        </div>
    
</section>

 <!-- ======= Services Section ======= 
 <section id="services" class="services">
      <div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div class="section-title">
          <h2>Services</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="icofont-image"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="icofont-settings"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
     
 <div class="section-block-grey">
    <div class="container col-sm-12 col-lg-12 col-md-12 col-xs-12">
        <div class="section-heading center-holder" style="margin-left:500px;">
            <h3>Quick Actions </h3>
            <div class="section-heading-line"></div>
            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                <br>incididunt ut labore et dolore magna aliqua.</p>-->
        </div>
        <div class="row mt-60">
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"><i class="fa fa-car" aria-hidden="true"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Register For eTag</h4>
                        <h5>For quick registration <span class="btn btn-primary sbtn">Click here</span></h5> </div>
                    <div class="section-heading-line-left"></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2 serv-section-2-act">
                    <div class="serv-section-2-icon serv-section-2-icon-act"><img src="test/images/LCC_LOGO6.png" class="d-block w-100 img-fluid" alt="..."
        style="height:100;width:50">  </div>
                    <div class="serv-section-desc">
                        <h4>Report a staff</h4>
                        <h5>Quick report <span class="btn btn-primary sbtn">Click here</span></h5> </div>
                    <div class="section-heading-line-left"></div>
                   
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fas   fa-credit-card"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Quickpay</h4>
                        <h5>Pay now with Quickteller <span class="btn btn-primary sbtn">Click here</span></h5> </div>
                    <div class="section-heading-line-left"></div>
                    
                </div>
            </div>
        </div>
		<div class="row mt-60">
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fas fa-road"></i> </div>
                    <div class="serv-section-desc">
                        <h4>View Traffic Update</h4>
                        <h5>View Traffic Reports <span class="btn btn-primary sbtn">Click here</span></h5> </div>
                    <div class="section-heading-line-left"></div>
                    
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2 serv-section-2-act">
                    <div class="serv-section-2-icon serv-section-2-icon-act"> <i class="far fa-clock"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Need Help? </h4>
                        <h5>We are always available <span class="btn btn-primary sbtn">Click here</span></h5> </div>
                    <div class="section-heading-line-left"></div>
                   
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> </div>
                    <div class="serv-section-desc">
                        <h4> Request Account Statement </h4>
                        <h5>To reuqest your account update <span class="btn btn-primary sbtn">Click here</span></h5> </div>
                    <div class="section-heading-line-left"></div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
    
    
<div  class="col-lg-12"style="padding-bottom: 10px; background:#f8f9fa;padding-top:20px"></div>



<!--flip services 
<body>
<div class="container">
    <h1>Service box</h1>
    <div class="row">
        <div class="col-md-3 col-sm-6 ">
            <div class="service-box">
                <div class="service-icon yellow">
                    <div class="front-content">
                        <i class="fa fa-trophy"></i>
                        <h3>design</h3>
                    </div>
                </div>
                <div class="service-content">
                    <h3>design</h3>
                    <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <div class="service-box">
                <div class="service-icon orange">
                    <div class="front-content">
                        <i class="fa fa-anchor"></i>
                        <h3>php</h3>
                    </div>
                </div>
                <div class="service-content">
                    <h3>php developer</h3>
                    <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="service-box ">
                <div class="service-icon red">
                    <div class="front-content">
                        <i class="fa fa-trophy"></i>
                        <h3>Ui Developer</h3>
                    </div>
                </div>
                <div class="service-content">
                    <h3>Developer</h3>
                    <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="service-box">
                <div class="service-icon grey">
                    <div class="front-content">
                        <i class="fa fa-paper-plane-o"></i>
                        <h3>java script</h3>
                    </div>
                </div>
                <div class="service-content">
                    <h3>java script</h3>
                    <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>




   
    <!-- =======  F.A.Q Section ======= -->
    <section id="faq" class="wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
            <ul id="faq-list">

              <li>
                <a data-toggle="collapse" class="collapsed" href="#faq1">What do I need to register for etag? <i class="fa fa-minus-circle"></i></a>
                <div id="faq1" class="collapse" data-parent="#faq-list">
                  <p>
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq2" class="collapsed">Can I register more than one vehicle on an account? <i class="fa fa-minus-circle"></i></a>
                <div id="faq2" class="collapse" data-parent="#faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq3" class="collapsed">Where is your head office? <i class="fa fa-minus-circle"></i></a>
                <div id="faq3" class="collapse" data-parent="#faq-list">
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq4" class="collapsed">How do I get my account statement? <i class="fa fa-minus-circle"></i></a>
                <div id="faq4" class="collapse" data-parent="#faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq5" class="collapsed">Can I use the same card a the two toll gates? <i class="fa fa-minus-circle"></i></a>
                <div id="faq5" class="collapse" data-parent="#faq-list">
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq6" class="collapsed">Is your towing service free? <i class="fa fa-minus-circle"></i></a>
                <div id="faq6" class="collapse" data-parent="#faq-list">
                  <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </p>
                </div>
              </li>

            </ul>
          </div>
        </div>

      </div>

    </section><!-- End  F.A.Q Section -->

    
<div  class="col-lg-12"style="padding-bottom: 10px; background:#f8f9fa;padding-top:20px"></div>
   
<!-- video loop here -->
 
<div class="banner  col-lg-12 col-sm-12 col-md-12 col-xs-12" style="height:750px; padding-bottom:20px">
<div class="col-5" style="left:40%; color:#F75700;margin-bottom: 50px"><h2 >USER GUIDE</h2></div>

	   <video autoplay muted loop class="tagline-video" style="margin-bottom: 20px;">
      <source src="video/LCC-VIDEO2.mp4" type="video/mp4">
</video>
</div>
<!-- end video loop -->

<div  class="col-lg-12"style="padding-bottom: 10px; background:#f8f9fa;padding-top:20px"></div>
<div class="container" >
	<div class="row">
		<!-- Form -->
    <div class="nb-form" >
    <p class="title" style="background-color: #F75700;margin-left:40px; margin-right:40px">Chat With US</p>
    <img src="" alt="" class="user-icon">
    <p class="message">Contact Us</p>

    <form>
      <input type="text" name="cpname" placeholder="Name:" required>
      <input type="email" name="cpemail" placeholder="Email:" required>
      <input type="tel" name="cpphone" placeholder="Phone:" required>
      <textarea name="cpmessage" placeholder="Message:" required></textarea>
      <input type="submit" value="Send message" style="background-color: #DD6E17;">
    </form>
  </div>
	</div>
</div>
</div>
<!-- Team -->

@endsection



