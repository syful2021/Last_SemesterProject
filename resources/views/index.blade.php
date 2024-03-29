<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Last Semester Project </title>

<link rel="shortcut icon" href=" {{ url('frontend/images/logotitle.jpg') }} ">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<link rel="stylesheet" href="{{ url('frontend/css/animate.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ url('frontend/style.css') }}"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<!-- Font Google -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container"> <a class="navbar-brand navbar-logo" href="#"> <img src="{{ url('frontend/images/logo.png')}} " alt="logo" class="logo-1"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"> <a class="nav-link" href="" data-scroll-nav="0">Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="1">About</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="2">Features</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="3">Team</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="4">Testimonials</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="5">Faq</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="6">Contact</a> </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
<!-------Banner Start------->
<section class="banner" data-scroll-index='0'>
  <div class="banner-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <div class="banner-text">
            <h2 class="white"> {{ @$getRecord[0]->title }} </h2>
            <h6 class="white"> {{ @$getRecord[0]->sub_title }} <a href="{{ @$getRecord[0]->home_url }}" target="_blank" rel="dofollow" class="weblink"> {{ @$getRecord[0]->sub_title_two }} </a>.</h6>
            <p class="banner-text white"> {{ @$getRecord[0]->description }}</p>
            <ul>
              <li><a href="#"><img src=" {{ url('public/img/'.@$getRecord[0]->image_one )}} " class="wow fadeInUp" data-wow-delay="0.4s"/></a></li>
              <li><a href="#"><img src=" {{ url('public/img/'.@$getRecord[0]->image_two )}}" class="wow fadeInUp" data-wow-delay="0.7s"/></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-12"> <img src=" {{ url('public/img/'.@$getRecord[0]->image_three )}}"  class="img-fluid wow fadeInUp"/> </div>
      </div>
    </div>
  </div>
  <span class="svg-wave"> <img class="svg-hero" src=" {{ url('frontend/images/applight-wave.svg')}} "> </span> </section>

<!-------Banner End------->

<!-------About End------->

<section class="about section-padding prelative" data-scroll-index='1'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3> {{ @$getAbout[0]->title }}</h3>
          <span class="line"></span>
          <p> {{ @$getAbout[0]->description }} </p>
        </div>
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-4">
              <div class="icon-box wow fadeInUp" data-wow-delay="0.2s"> <i class="fa fa-life-ring" aria-hidden="true"></i>
                <h5> {{ @$getAbout[0]->title_one }}</h5>
                <p> {{ @$getAbout[0]->description_one }} </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box wow fadeInUp" data-wow-delay="0.4s"> <i class="fa fa-mobile" aria-hidden="true"></i>
                <h5> {{ @$getAbout[0]->title_two }} </h5>
                <p> {{ @$getAbout[0]->description_two }} </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box wow fadeInUp" data-wow-delay="0.6s"> <i class="fa fa-bolt" aria-hidden="true"></i>
                <h5> {{ @$getAbout[0]->title_three }} </h5>
                <p>{{ @$getAbout[0]->description_three }} </p>
              </div>
            </div>
          </div>
          <a href="#" class="about-btn">Learn More</a> </div>
      </div>
    </div>
  </div>
</section>
<!-------About End------->

<!-------Video Start------->
<section class="video-section prelative text-center white">
  <div class="section-padding video-overlay">
    <div class="container">
      <h3> {{ @$getWatchNow[0]->title }} </h3>
      <i class="fa fa-play" id="video-icon" aria-hidden="true"></i>
      <div class="video-popup">
        <div class="video-src">
          <div class="iframe-src">
            <iframe src="https://www.youtube.com/embed/{{ @$getWatchNow[0]->url}}?rel=0&amp;showinfo=0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-------Video End------->

<!-------Features Start------->
<section class="feature section-padding" data-scroll-index='2'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3> {{ @$getFeatures[0]->title }} </h3>
          <span class="line"></span>
          <p> {{ @$getFeatures[0]->description }} </p>
        </div>
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.2s">
                <div class="media-body text-right media-right-margin">
                  <h5>  {{ @$getFeatures[0]->name_one }} </h5>
                  <p> {{ @$getFeatures[0]->description_one }} </p>
                </div>
                <div class="media-right icon-border"> <span class="fa fa-bolt" aria-hidden="true"></span> </div>
              </div>
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.4s">
                <div class="media-body text-right media-right-margin">
                  <h5> {{ @$getFeatures[0]->name_two }} </h5>
                  <p> {{ @$getFeatures[0]->description_two }} </p>
                </div>
                <div class="media-right icon-border"> <span class="fa fa-battery-full" aria-hidden="true"></span> </div>
              </div>
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.6s">
                <div class="media-body text-right media-right-margin">
                  <h5> {{ @$getFeatures[0]->name_three }} </h5>
                  <p> {{ @$getFeatures[0]->description_three }} </p>
                </div>
                <div class="media-right icon-border"> <span class="fa fa-wifi" aria-hidden="true"></span> </div>
              </div>
            </div>
            <div class="col-md-4 d-none d-md-block d-lg-block">
              <div class="feature-mobile">
                @if(@$getFeatures[0]->image)
                <img src=" {{ url('public/features/'.@$getFeatures[0]->image) }} " class="img-fluid wow fadeInUp"/>
                @endif
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.2s">
                <div class="media-left icon-border media-right-margin"> <span class="fa fa-check-double" aria-hidden="true"></span> </div>
                <div class="media-body text-left">
                  <h5> {{ @$getFeatures[0]->name_four }} </h5>
                  <p> {{ @$getFeatures[0]->description_four }} </p>
                </div>
              </div>
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.4s">
                <div class="media-left icon-border media-right-margin"> <span class="fa fa-dollar-sign" aria-hidden="true"></span> </div>
                <div class="media-body text-left">
                  <h5> {{ @$getFeatures[0]->name_five }} </h5>
                  <p> {{ @$getFeatures[0]->description_five }} </p>
                </div>
              </div>
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.6s">
                <div class="media-left icon-border media-right-margin"> <span class="fa fa-hdd" aria-hidden="true"></span> </div>
                <div class="media-body text-left">
                  <h5> {{ @$getFeatures[0]->name_six }} </h5>
                  <p> {{ @$getFeatures[0]->description_six }} </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-------Features End------->

<!-------Team Start------->
<section class="team section-padding" data-scroll-index='3'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">

          <h3> {{ @$getOurTeam[0]->title }} </h3>
          <span class="line"></span>
          <p> {{ @$getOurTeam[0]->description }} </p>

        </div>
        <div class="section-content text-center">
          <div class="row">

            @foreach ($getPosition as $value)
                <div class="col-md-4">
                    <div class="team-detail wow bounce" data-wow-delay="0.2s"> <img src=" {{ url('public/our_team/'.$value->image)}} " class="img-fluid"/>
                    <h4> {{ $value->name}} </h4>
                    <p> {{ $value->position_name}} </p>
                    </div>
                </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-------Team End------->

<!-------Testimonial Start------->
<section class="testimonial section-padding" data-scroll-index='4'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center white">
          <h3> {{ @$getTestimonials[0]->title }} </h3>
          <span class="line"></span>
          <p class="white"> {{ @$getTestimonials[0]->description }} </p>
        </div>

      <div class="section-content">
        <div class="row">
          <div class="offset-md-2 col-md-8 col-sm-12">
            <div class="slider">


                @foreach ($getTestimonialsDetails as $value_t )

                    <div class="slider-item">
                        <div class="test-img"><img src=" {{ url('public/testimonials/'.$value_t->image )}} " alt="Placeholder" width="157" height="157"></div>
                        <div class="test-text"><span class="title"><span> {{ $value_t->name}} </span> {{ $value_t->position_name}} </span> {{ $value_t->description}} </div>
                    </div>

                @endforeach


            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>

<!-------Testimonial End------->

<!-------FAQ Start------->
<section class="faq section-padding prelative" data-scroll-index='5'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3> {{ @$getFaq[0]->title }} </h3>
          <span class="line"></span>
          <p> {{ @$getFaq[0]->description }} </p>
        </div>

        <div class="section-content">
          <div class="row">

            @foreach ($getFaqDetails as $value_faq )

                <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.2s">
                    <h4> {{ $value_faq->title }} </h4>
                    <p> {{ $value_faq->description }} </p>
                </div>

            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-------FAQ End------->

<!-------Contact Start------->
<section class="contact section-padding" data-scroll-index='6'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3> {{ @$getContact[0]->title }} </h3>
          <span class="line"></span>
          <p> {{ @$getContact[0]->description }} </div>
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
              <form id="contact_form" action="">
                <div class="row">
                  <div class="col">
                    <input type="text" id="your_name" class="form-input w-100" name="full-name" placeholder="Full Name" required>
                  </div>
                  <div class="col">
                    <input type="email" id="email" class="form-input w-100" name="email" placeholder="Email" required>
                  </div>
                </div>
                <input type="text" id="subject" class="form-input w-100" name="subject" placeholder="Subject">
                <textarea class="form-input w-100" id="message" placeholder="Message" name="message"></textarea>
                <button class="btn-grad w-100 text-uppercase" type="submit" name="button">submit</button>
              </form>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-4">
              <div class="contact-info white">
                <div class="contact-item media"> <i class="fa fa-map-marker-alt media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase"> {{ @$getContact[0]->address1 }} </p>
                    <p class="text-uppercase"> {{ @$getContact[0]->address2 }} </p>
                  </div>
                </div>
                <div class="contact-item media"> <i class="fa fa-mobile media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase"> {{ @$getContact[0]->phone1 }} </p>
                    <p class="text-uppercase"><a class="text-white" href="tel:+15173977100"> {{ @$getContact[0]->phone2 }} </a> </p>
                  </div>
                </div>
                <div class="contact-item media"> <i class="fa fa-envelope media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase"> {{ @$getContact[0]->email1 }}  </p>
                    <p class="text-lowercase"><a class="text-white" href="mailto:abcdefg@gmail.com"> {{ @$getContact[0]->email2 }}  </a> </p>
                  </div>
                </div>
                <div class="contact-item media"> <i class="fa fa-clock media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase"> {{ @$getContact[0]->working1 }}  </p>
                    <p class="text-uppercase"> {{ @$getContact[0]->working2 }}  </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-------Contact End------->

<!-------Download End------->
<section class="download section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center white">
          <h3>Download Our App</h3>
          <span class="line"></span>
          <p class="white">Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem faucibus, vestibulum ante in, pharetra ante.</p>
        </div>
      </div>
      <div class="col-md-12">
        <div class="section-content text-center">
          <ul>
            <li><a href="#"><img src=" {{ url('frontend/images/appstore.png')}} " class="wow fadeInUp" data-wow-delay="0.4s"/></a></li>
            <li><a href="#"><img src=" {{ url('frontend/images/playstore.png')}} " class="wow fadeInUp" data-wow-delay="0.7s"/></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-------Download End------->

<footer class="footer-copy">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <p>2018 &copy; Applight. Website Designed by <a href="http://w3Template.com" target="_blank" rel="dofollow">W3 Template</a></p>
      </div>
    </div>
  </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<!-- scrollIt js -->

<script src=" {{ url('frontend/js/scrollIt.min.js')}} "></script>
<script src=" {{ url('frontend/js/wow.min.js')}} "></script>
<script>
	wow = new WOW();
	wow.init();
$(document).ready(function(e) {

	$('#video-icon').on('click',function(e){
	e.preventDefault();
	$('.video-popup').css('display','flex');
	$('.iframe-src').slideDown();
	});
	$('.video-popup').on('click',function(e){
	var $target = e.target.nodeName;
	var video_src = $(this).find('iframe').attr('src');
	if($target != 'IFRAME'){
	$('.video-popup').fadeOut();
	$('.iframe-src').slideUp();
	$('.video-popup iframe').attr('src'," ");
	$('.video-popup iframe').attr('src',video_src);
	}
	});

	$('.slider').bxSlider({
	pager: false
	});
});

$(window).on("scroll",function () {

	var bodyScroll = $(window).scrollTop(),
	navbar = $(".navbar");

	if(bodyScroll > 50){
	$('.navbar-logo img').attr('src','images/logo-black.png');
	navbar.addClass("nav-scroll");

}else{
	$('.navbar-logo img').attr('src','images/logo.png');
	navbar.removeClass("nav-scroll");
}

});
$(window).on("load",function (){
	var bodyScroll = $(window).scrollTop(),
	navbar = $(".navbar");

	if(bodyScroll > 50){
	$('.navbar-logo img').attr('src','images/logo-black.png');
	navbar.addClass("nav-scroll");
	}else{
	$('.navbar-logo img').attr('src','images/logo-white.png');
	navbar.removeClass("nav-scroll");
	}

	$.scrollIt({

	easing: 'swing',      // the easing function for animation
	scrollTime: 900,       // how long (in ms) the animation takes
	activeClass: 'active', // class given to the active nav element
	onPageChange: null,    // function(pageIndex) that is called when page is changed
	topOffset: -63
	});
});

</script>
</body>
</html>
