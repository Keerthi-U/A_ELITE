<?php
/**
* Template Name:home
* Template Post Type: post, page
*
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
get_header();
?>
<style>
    
.carousel-indicators li {
    box-sizing: content-box;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 30px;
    height: 7px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: .5;
    transition: opacity .6s ease;
}
#main-slider .cycle-prev:hover, #main-slider .cycle-next:hover {
    background-color: #9cc900;
    color: #fff;
    border-color: #9cc900;
}



img.img-logo {
    width: 100%;
}

.custom-button:hover, .custom-button:focus, .custom-button:active {
    background: #9cc900;
}

.carousel-caption {
    position: absolute;
    right: 13%;
    bottom: 18.25rem;
    left: 15%;
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
    color: #fff;
    text-align: center;
    font-family: "Montserrat", sans-serif;
}
.cycle-caption{
  position: absolute;
    right: 13%;
    bottom: 10.25rem;
    left: 15%;
    color: #fff;
    text-align: center;
    font-family: "Montserrat", sans-serif;
}
.carousel-caption h1 {
    font-size:70px;
    text-shadow: 0px 0px 1px #222;
    font-family: "Montserrat", sans-serif;
}
.cycle-caption p{
  font-size: 22px;
    color: #fff;
    margin-bottom: 45px;
    display: block;
    margin-top: 10px;
    font-family: "Montserrat", sans-serif;
    text-shadow: 0px 0px 1px #222;
}
.carousel-caption h1::after{
  content: "";
    display: inline-block;
    height: 56%;
    background-color: #fff509;
    opacity: 0.7;
    width: 2px;
    position: absolute;
    left:0;
}
.carousel-caption h1::before{
  content: "";
    display: inline-block;
    height: 56%;
    background-color: #fff509;
    opacity: 0.7;
    width: 2px;
    position: absolute;
    right:0;
}
.slider-buttons a {
    padding: 12px 37px;
    font-size: 17px;
    text-transform: capitalize;
    position: relative;
    top: 60px;
    left: -12px;
    background-color:#568c11;
    color:#fff;
    text-decoration: none;
    color: #fff;
}
.carousel-control-next-icon {
    background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e);
    border: 2px solid #fff;
    height: 50px;
    width: 30px;
    width: 30px;
    z-index: 1;
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: .9;
}
.carousel-control-prev-icon {
    background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e);
    border: 2px solid #fff;
    height: 50px;
    width: 30px;
    z-index: 1;
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: .9;
}
.carousel-control-prev span:hover{
    color:white;
    background-color: #568c11;
}
.carousel-control-next span:hover{
    color:white;
    background-color: #568c11;
}
.vision {
  /* margin: 12px 117px; */
    text-align: center;
    text-transform: capitalize;
    font-weight: 500;
    font-family: 'Montserrat', sans-serif;
   
}
.vision h1{
    font-size:1.5rem;
}
.our::after{
  clear: both;
    content: "";
    display: block;
    left: 0;
    width: 111px ;
    margin: 6px 217px;
    border-top: 4px solid #d52a2a;
    font-weight: 500;
    /* border-top: 4px double #ffda44; */
  
}
.vision-title p{
  margin: 0 auto 35px;
    font-size: 16px;
    text-align: center;
    max-width: 700px;
    color: #aaa;
    font-style: italic;
}



.main{
  max-width: 1200px;
  margin: 0 auto;
}

img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}

/* .btn {
  color: #ffffff;
  padding: 0.8rem;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 4px;
  font-weight: 400;
  display: block;
  width: 100%;
  cursor: pointer;
  border: 1px solid rgba(255, 255, 255, 0.2);
  background: transparent;
} */

/* .btn:hover {
  background-color: rgba(255, 255, 255, 0.12);
} */

.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards_item {
  display: flex;
  padding: 1rem;
}

@media (min-width: 40rem) {
  .cards_item {
    width: 50%;
  }
}

@media (min-width: 56rem) {
  .cards_item {
    width: 33.3333%;
  }
}

.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card_content {
  padding: 1rem;
  
}

.card_title {
  color: #151515;
  font-size: 1.1rem;
  font-weight: 700;
  letter-spacing: 1px;
  /* text-transform: capitalize; */
  margin: 0px;
  font-size: 15px;
  text-transform:uppercase;
}

.card_text {
  font-size:15px;
    line-height: 1.8;
    margin-bottom: 1.25rem;
    font-weight: 400;
    margin-top: 24px;
    color: #515151;
    font-family: sans-serif;
}
.made_by{
  font-weight: 400;
  font-size: 13px;
  margin-top: 35px;
  text-align: center;
}
.card_image {
    height: auto;
    max-width: 95%;
    vertical-align: middle;
 
    height: 268px;
    max-width: 95%;
    vertical-align: middle;
    margin: 8px;
    background: #ffffff;
    overflow: hidden;
    box-shadow: 0px 2px 15px rgb(0 0 0 / 50%);
    border-radius: 5px;
}
.latest-blog {
    background: #f1f1f1;
    padding: 2.5rem 0 5rem;
}
img.attachment-feature_image.size-feature_image.wp-post-image {
  max-width:372px!important;
   height: 269px!important;
}
.late {
    text-align:center;
    margin: 0 0 0 17px;
    font-weight: 500;
    font-family: 'Montserrat', sans-serif;
}
.late>h1 {
    font-size: 28px;
    font-weight: 200;
    font-family: 'Montserrat', sans-serif;
}
.blog-late::after {
    clear: both;
    content: "";
    display: block;
    left: 0;
    border: 2px solid #e71620;
    width: 67px;
    margin: 7px auto;
}


.toggle-text {
  max-width: 400px;
  margin: 26px auto;
}
    .toggle-text-content  {

      span {
          display: none;
      }
    }

    .toggle-text-link {
        display: block;
        margin: 20px 0;
    }
    .carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 20px;
    left: 0;
    z-index: 15;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none;
}
.menu-items{
   
    color: #007bff;
    text-decoration: none;
    background-color: transparent;

}
.card:hover{
  background: #fff;
  box-shadow: 0px 15px 26px rgba(0, 0, 0, 0.50);
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.1s ease-in;
  
}
.card_image{
-webkit-transition:all .9s ease; 
  -moz-transition:all .9s ease; 
  -o-transition:all .9s ease;
  -ms-transition:all .9s ease; 
}
.card_image:hover{
opacity: 0.7;
  -webkit-transform:scale(1.15);
  -moz-transform:scale(1.15);
  -ms-transform:scale(1.15);
  -o-transform:scale(1.15);
  transform:scale(1.15);
}
.card_text p{
  margin-top: 25px;
    font-size: 21px;
    text-align: center;
    animation: fadein 2s;
    -moz-animation: fadein 2s; /* Firefox */
    -webkit-animation: fadein 2s; /* Safari and Chrome */
    -o-animation: fadein 2s; /* Opera */
}
.fade-in{
  animation: fadeIn ease 3s;
  -webkit-animation: fadeIn ease 3s;
  -moz-animation: fadeIn ease 3s;
  -o-animation: fadeIn ease 3s;
  -ms-animation: fadeIn ease 3s;
  font-weight:500;
}@keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

@-moz-keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

@-webkit-keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

@-o-keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

@-ms-keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
}
}
.u-container-layout {
    position: relative;
    flex: 1;
    max-width: 100%;
}
p.u-text.u-text-4 {
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    line-height: 24.5px;
}
 .u-shape-1 {
  width: 501px;
    height: 393px;
    /* background-image: linear-gradient(#6ac17d, #9bf194); */
    background-color:#568c11;
    margin: 0 auto 0 0;
}
img.u-image.u-image-1 {
  width: 542px;
    height: 426px;
    padding: 26px;
    margin-left: 22px;
}
 .u-image-1 {
    width: 555px;
    height: 499px;
    margin: -351px auto 0;
}
.our-mission {
    background: #ffff;
    padding: 2.5rem 0 1.9rem;
}
.mission{
  margin-top: 37px;
}
/* .u-gutter-30 .u-layout .u-layout-cell {
    border: 15px solid transparent;
}
.u-container-layout-3 {
    padding: 30px;
}
.u-section-2 .u-icon-1 {
    height: 119px;
    width: 119px;
    margin: 0 auto 0 -30px;
}
.u-text-palette-1-base svg {
    fill: #6ac17d;
}
 .u-text-3 {
    margin: -39px 0 0;
}
.u-text-4 {
    margin: 21px 0 0; */
/* } */
p.u-text.u-text-4 {
    border-left: 2px solid red;
    /* margin: 5px; */
    padding: 34px;
    height: 212px;
}
.u-align-left.u-container-style.u-layout-cell.u-right-cell.u-size-24.u-layout-cell-2 {
    box-shadow: 0 4px 10px rgb(0 0 0 / 25%);
}
/*Animations*/

[data-animate-in] {
    opacity: 0;
    transition: transform 0.8s ease, opacity 0.8s ease
}

[data-animate-in="up"] {
    transform: translate3d(0, 34px, 0)
}

[data-animate-in="left"] {
    transform: translate3d(-25%, 0, 0)
}

[data-animate-in="right"] {
    transform: translate3d(25%, 0, 0)
}

[data-animate-in="down"] {
    transform: translate3d(0, -24px, 0)
}

[data-animate-in="fadeIn"] {
    transform: translate3d(0, 0, 0)
}

[data-animate-in].in-view {
    opacity: 1;
    transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    transition: transform 0.6s ease, opacity 0.6s ease
}

.fade-in {
    opacity: 0;
    transition: opacity 1s ease
}

.page-loaded .fade-in,.page-loaded.fade-in {
    opacity: 1
}

.isSafari.isTouch [data-animate-in],.isSafari.isTouch [data-animate-in="up"] {
    opacity: 1;
    transition: none;
    transform: none
}
ul.u-text.u-text-4.in-view {
    border-left: 2px solid red;
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    padding: 38px;
}
.moretext {
  display: none;
}
/* .hide {
  display: none;
} */
/* .scroll-mission {
    border-left: 2px solid red;
} */
.navbar-expand-sm .navbar-nav .nav-link a:after{
  content:"";
border-bottom:1px solid red;
}
div#n2-ss-2 .nextend-arrow img {
    width: 32px;
    border: 2px solid #fff;
    height: 50px;
    width: 30px;
    width: 30px;
    z-index: 1;
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: .9;
}
div#n2-ss-2 .n2-style-d4035adfa79ada5f228d87142ef0c01f-heading::after{
    border-left:1px solid yellow;
}
a.read-more-link, a.read-less-link  {
    color: #0a58ca;
}

/* .text-overflow {
      width:100%;
      height:120px;
      display:block; 
      overflow:hidden;
      word-break: break-word;
      word-wrap: break-word;
  }

  .btn-overflow {
    display: none;
    text-decoration: none; 
  } */
    </style>
<section>
<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>
</section>

<section>
  <div class="our-mission">
    
    <div class="container mission">
      <div class="row">
      <div class="col-sm-6">
      <div class="vision">
      <h1 class="our"><?php the_field('our-vision');?></h1>
    </div>
         <div class="mission">
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-24 u-layout-cell-2">
                       <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-3">
                           <!-- <h2 class="u-text u-text-3"><i class="fa fa-quote-left" style="font-size:48px;color:#568c11;"></i>Our Mission</h2> -->
                              <p class="u-text u-text-4" ><i class="fa fa-quote-left" style="font-size:26px;color: #d52222;"></i><?php the_field('our-visions');?></p>
                          </div>
                        </div>
                   </div>
            </div>

    
  <div class="col-sm-6">
  <div class="vision">
      <h1 class="our"><?php the_field('our-mission');?></h1>
    </div>
         <div class="mission">
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-24 u-layout-cell-2">
                       <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-3">
                           <!-- <h2 class="u-text u-text-3"><i class="fa fa-quote-left" style="font-size:48px;color:#568c11;"></i>Our Mission</h2> -->
                              <ul class="u-text u-text-4"data-animate-in="up">
                              <li class="text-overflow"><p><?php the_field('our-missions');?></p></li>
                              <!-- <a class="read-more-show hide btn-overflow"  id="1">Read More</a>  -->
    

  </ul>
                          </div>
                        </div>
                   </div>
            </div>
    </div>
    </div>
  </div>
</section>
<section class="blog">
  <div class="latest-blog">
    <div class="latest">
    <div class="main">
      <div class="late">  <h1 class="blog-late">Latest</h1></div>

 <ul class="cards ">
 <?php 
                   $args = array(  
                    'post_type' => 'news',
                    'post_status' => 'publish',
                    'order'   =>'ASC',
                    'posts_per_page' => 6
                  
     );
            
                $loop = new WP_Query( $args ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post(); 
               ?>
 <li class="cards_item">
      <div class="card">
        <div class="card_image"><?php the_post_thumbnail('feature_image');?></div>
        <div class="card_content">
          <h2 class="card_title" data-animate-in="right" data-animate-in-delay="100"><?php the_field('news-card-title');?></h2>
          <p class="card_text "data-animate-in="left"><?php the_field('news-card-text');?> <a class="read-more-show hide" href="<?php echo get_permalink($post->ID);?>" id="3">Read More</a></p>
        </div>
      </div>
    </li>
   
    <?php
      endwhile;
      
            wp_reset_postdata(); 
               
      ?>

  </ul>
</div>
    </div>
  </div>
</section>


<?php
get_footer();
?>
  <script>
    $(function() {
  
  var html = $('html');
  // Detections
  if (!("ontouchstart" in window)) {
    html.addClass("noTouch");
  }
  if ("ontouchstart" in window) {
    html.addClass("isTouch");
  }
  if ("ontouchstart" in window) {
    html.addClass("isTouch");
  }
  if (document.documentMode || /Edge/.test(navigator.userAgent)) {
    if (navigator.appVersion.indexOf("Trident") === -1) {
      html.addClass("isEDGE");
    } else {
      html.addClass("isIE isIE11");
    }
  }
  if (navigator.appVersion.indexOf("MSIE") !== -1) {
    html.addClass("isIE");
  }
  if (
    navigator.userAgent.indexOf("Safari") != -1 &&
    navigator.userAgent.indexOf("Chrome") == -1
  ) {
    html.addClass("isSafari");
  }

  // On Screen

  $.fn.isOnScreen = function() {
    var elementTop = $(this).offset().top,
      elementBottom = elementTop + $(this).outerHeight(),
      viewportTop = $(window).scrollTop(),
      viewportBottom = viewportTop + $(window).height();
    return elementBottom > viewportTop && elementTop < viewportBottom;
  };

  function detection() {
    for (var i = 0; i < items.length; i++) {
      var el = $(items[i]);

      if (el.isOnScreen()) {
        el.addClass("in-view");
      } else {
        el.removeClass("in-view");
      }
    }
  }

  var items = document.querySelectorAll(
    "*[data-animate-in], *[data-detect-viewport]"
  ),
    waiting = false,
    w = $(window);

  w.on("resize scroll", function() {
    if (waiting) {
      return;
    }
    waiting = true;
    detection();

    setTimeout(function() {
      waiting = false;
    }, 100);
  });

  $(document).ready(function() {
    setTimeout(function() {
      detection();
    }, 500);

    for (var i = 0; i < items.length; i++) {
      var d = 0,
        el = $(items[i]);
      if (items[i].getAttribute("data-animate-in-delay")) {
        d = items[i].getAttribute("data-animate-in-delay") / 1000 + "s";
      } else {
        d = 0;
      }
      el.css("transition-delay", d);
    }
  });
});

    </script>
<script>
// $('.read-more-content').addClass('hide')
// $('.read-more-show, .read-more-hide').removeClass('hide')

// // Set up the toggle effect:
// $('.read-more-show').on('click', function(e) {
//   $(this).next('.read-more-content').removeClass('hide');
//   $(this).addClass('hide');
//   e.preventDefault();
// });

// $('.read-more-hide').on('click', function(e) {
//   $(this).parent('.read-more-content').addClass('hide');
//   // var moreid=$(this).attr("more-id");
//   // $('.read-more-show#'+moreid).removeClass('hide');

//   $('.read-more-show').removeClass('hide');
//   e.preventDefault();
// });


// var text = $('.text-overflow'),
//      btn = $('.btn-overflow'),
//        h = text[0].scrollHeight; 

// if(h > 120) {
// 	btn.addClass('less');
// 	btn.css('display', 'block');
// }

// btn.click(function(e) 
// {
//   e.stopPropagation();

//   if (btn.hasClass('less')) {
//       btn.removeClass('less');
//       btn.addClass('more');
//       btn.text('Show less');

//       text.animate({'height': h});
//   } else {
//       btn.addClass('less');
//       btn.removeClass('more');
//       btn.text('Show more');
//       text.animate({'height': '120px'});
//   }  
// });
// $('.text-overflow').each(function() {
//     var $pTag = $(this).find('p');
//     if($pTag.text().length > 200){
//   alert('hi');
//    }
// });
$('.text-overflow').each(function() {
    var $pTag = $(this).find('p');
    if($pTag.text().length > 300){
        var shortText = $pTag.text();
        shortText = shortText.substring(0, 300);
        $pTag.addClass('fullArticle').hide();
        shortText += '<a  class="read-more-link"> Read more </a>';
        $pTag.append('<a  class="read-less-link">  Read less </a>');
        $(this).append('<p class="preview">'+shortText+'</p>');
    }
});

$(document).on('click', '.read-more-link', function () {
    $(this).parent().hide().prev().show();
});

$(document).on('click', '.read-less-link', function () {
    $(this).parent().hide().next().show();
});
  </script>



