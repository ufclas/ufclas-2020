<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>




<style>


/* -------------------------SLIDESHOW------------------------- */

.slides{
   width:100%;   
   position: relative;
   display: block;
   clear: both;
   background-color:#000000;

}

   .slideImage{
   position:relative;
   width:100%;
   height:100%;
 
   height: auto;
   left:0px;
   top:0px;
   margin:0px;
   padding:0px;
    
      }

.slideImage img {
    display:block;
    width: 100%;
    width: 100vw !important;
    height: auto;
   margin:0px;
   padding:0px;
}
.controls {
   position:absolute;
   top:0px;
   display:block;
   height:100%;
   width:100%;
   margin: 0 auto;
   padding:0px;

}

.controls .inner {
    max-width: 90%;
    margin: 0 auto;
    height:90%;
}

.inner .prev {
    float: left;
    margin-top:30%;
    margin-left:1rem;
 
}

.inner .prev::after {
    left: 23px;
}

.inner .next {
    float: right;
    margin-top:30%;
  margin-right:1rem;
}

.next::after {
    right: 17px;
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}


.inner .btn::after {
    width: 26px;
    height: 26px;
    top: 15px;
}

.inner .btn {
     width: 57px;
    height: 57px;
    /* background: rgba(51,51,51,0.5); */
    cursor: pointer;
    position: relative;
    transition: all .2s ease-in-out;

}

.inner .btn:hover {
     /*  background-color:rgba(0, 64, 131,.5); */
    -webkit-transform: scale( 1.5 );
    -moz-transform: scale( 1.5  );
    -o-transform: scale( 1.5  );
    -ms-transform: scale( 1.5  );
    transform: scale( 1.5  );
 


  
}

.prev::after {
    left: 17px;
    -ms-transform: rotate(225deg);
    -webkit-transform: rotate(225deg);
    transform: rotate(225deg);
}

.btn::after {
    content: '';
    display: block;
    width: 19px;
    height: 19px;
    border-top: 2px solid #fff;
    border-right: 2px solid #fff;
    position: absolute;
    top: 12px;
}
.btn:hover::after{
    border-top: 2px solid #F37021;
    border-right: 2px solid #F37021;



}




.controls *::after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

@-webkit-keyframes fadeout {
    0% {opacity:1;}
    100% {opacity:0;}
}
@keyframes fadeout {
    0% {opacity:1;}
    100% {opacity:0;}
}
.fadeOut {
  opacity:0;
  -moz-animation   : fadeout 1s linear;
  -webkit-animation: fadeout 1s linear;
  animation        : fadeout 1s linear;
}

@-webkit-keyframes fadein {
    0% {opacity:0;}
    100% {opacity:1;}
}
@keyframes fadein {
    0% {opacity:0;}
    100% {opacity:1;}
}
.fadeIn {
  opacity:1;
  -moz-animation   : fadein 1s linear;
  -webkit-animation: fadein 1s linear;
  animation        : fadein 1s linear;
}


.menu-scroll-down{
   display:none;

}


/* CIRCLE ANIMATION  */

.circle,.content {
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 2s ease-in-out;
    -ms-transition: all 2s ease-in-out;
    transition: all 2s ease-in-out;
}

.circle {    
    background: rgba( 99, 99, 99, 0.8 );
    box-shadow: 1px 2px 2px rgba( 0, 0, 0, 0.8 );
    border-radius: 100%;
    color: white;
    text-align: center;
    font-family: sans-serif;
    padding: 20px;
    overflow: hidden;
    
    -webkit-transform: scale( 0.1 );
    -moz-transform: scale( 0.1 );
    -o-transform: scale( 0.1 );
    -ms-transform: scale( 0.1 );
    transform: scale( 0.1 );
    
    width: 400px;
    height: 400px;
    line-height: 400px;
}

.circle:hover {
    -webkit-transform: scale( 1 );
    -moz-transform: scale( 1 );
    -o-transform: scale( 1 );
    -ms-transform: scale( 1 );
    transform: scale( 1 );
    
    vertical-align: middle;
}

.content {
    opacity: .1;
}
.circle:hover .content {
    opacity: 1;
}


/* ANIMATION */



.cinema2
{
   animation-duration: 2s;
    animation-name: fadeAndScale;
    animation-timing-function: cubic-bezier(.71,.55,.62,1.57);
}

@keyframes fadeAndScale {
    from {
        opacity: 0;
        transform: scale(.1, .1);
    }
    to {
        opacity: 1;
        transform: scale(2, 2);
    }
}


.container{
	width: 100%;
	position: relative;
	overflow:hidden;
}

a {
  text-decoration:none;
}

h1.main,p.demos {
	-webkit-animation-delay: 18s;
	-moz-animation-delay: 18s;
	-ms-animation-delay: 18s;
	animation-delay: 18s;
}
.sp-container {
	position: fixed;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	z-index: 0;

}
.sp-content {
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0px;
	top: 0px;
	z-index: 2;
}
.sp-container h2 {
	position: absolute;
	top: 50%;
	line-height: 100px;
	height: 90px;
	margin-top: -50px;
	font-size: 90px;
	width: 100%;
	text-align: center;
	color: transparent;
	-webkit-animation: blurFadeInOut 3s ease-in backwards;
	-moz-animation: blurFadeInOut 3s ease-in backwards;
	-ms-animation: blurFadeInOut 3s ease-in backwards;
	animation: blurFadeInOut 3s ease-in backwards;
}
.sp-container h2.frame-1 {
	-webkit-animation-delay: 0s;
	-moz-animation-delay: 0s;
	-ms-animation-delay: 0s;
	animation-delay: 0s;
}
.sp-container h2.frame-2 {
	-webkit-animation-delay: 3s;
	-moz-animation-delay: 3s;
	-ms-animation-delay: 3s;
	animation-delay: 3s;
}
.sp-container h2.frame-3 {
	-webkit-animation-delay: 6s;
	-moz-animation-delay: 6s;
	-ms-animation-delay: 6s;
	animation-delay: 6s;
}
.sp-container h2.frame-4 {
	font-size: 200px;
	-webkit-animation-delay: 9s;
	-moz-animation-delay: 9s;
	-ms-animation-delay: 9s;
	animation-delay: 9s;
}
.sp-container h2.frame-5 {
	-webkit-animation: none;
	-moz-animation: none;
	-ms-animation: none;
	animation: none;
	color: transparent;
	text-shadow: 0px 0px 1px #fff;
}
.sp-container h2.frame-5 span {
	-webkit-animation: blurFadeIn 3s ease-in 12s backwards;
	-moz-animation: blurFadeIn 1s ease-in 12s backwards;
	-ms-animation: blurFadeIn 3s ease-in 12s backwards;
	animation: blurFadeIn 3s ease-in 12s backwards;
	color: transparent;
	text-shadow: 0px 0px 1px #fff;
}
.sp-container h2.frame-5 span:nth-child(2) {
	-webkit-animation-delay: 13s;
	-moz-animation-delay: 13s;
	-ms-animation-delay: 13s;
	animation-delay: 13s;
}
.sp-container h2.frame-5 span:nth-child(3) {
	-webkit-animation-delay: 14s;
	-moz-animation-delay: 14s;
	-ms-animation-delay: 14s;
	animation-delay: 14s;
}
.sp-globe {
	position: absolute;
	width: 282px;
	height: 273px;
	left: 50%;
	top: 50%;
	margin: -137px 0 0 -141px;
	background: transparent url() no-repeat top left;
	-webkit-animation: fadeInBack 3.6s linear 14s backwards;
	-moz-animation: fadeInBack 3.6s linear 14s backwards;
	-ms-animation: fadeInBack 3.6s linear 14s backwards;
	animation: fadeInBack 3.6s linear 14s backwards;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=30)";
	filter: alpha(opacity=30);
	opacity: 0.3;
	-webkit-transform: scale(5);
	-moz-transform: scale(5);
	-o-transform: scale(5);
	-ms-transform: scale(5);
	transform: scale(5);
}
.sp-circle-link {
	position: absolute;
	left: 50%;
	bottom: 100px;
	margin-left: -50px;
	text-align: center;
	line-height: 100px;
	width: 100px;
	height: 100px;
	background: #fff;
	color: #F37021;
	font-size: 25px;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	-webkit-animation: fadeInRotate 1s linear 16s backwards;
	-moz-animation: fadeInRotate 1s linear 16s backwards;
	-ms-animation: fadeInRotate 1s linear 16s backwards;
	animation: fadeInRotate 1s linear 16s backwards;
	-webkit-transform: scale(1) rotate(0deg);
	-moz-transform: scale(1) rotate(0deg);
	-o-transform: scale(1) rotate(0deg);
	-ms-transform: scale(1) rotate(0deg);
	transform: scale(1) rotate(0deg);
}
.sp-circle-link:hover {
	background:  #F37021;
	color: #fff;
}
/**/
@-webkit-keyframes blurFadeInOut{
	0%{
		opacity: 0;
		text-shadow: 0px 0px 40px #fff;
		-webkit-transform: scale(1.3);
	}
	20%,75%{
		opacity: 1;
		text-shadow: 0px 0px 1px #fff;
		-webkit-transform: scale(1);
	}
	100%{
		opacity: 0;
		text-shadow: 0px 0px 50px #fff;
		-webkit-transform: scale(0);
	}
}
@-webkit-keyframes blurFadeIn{
	0%{
		opacity: 0;
		text-shadow: 0px 0px 40px #fff;
		-webkit-transform: scale(1.3);
	}
	50%{
		opacity: 0.5;
		text-shadow: 0px 0px 10px #fff;
		-webkit-transform: scale(1.1);
	}
	100%{
		opacity: 1;
		text-shadow: 0px 0px 1px #fff;
		-webkit-transform: scale(1);
	}
}
@-webkit-keyframes fadeInBack{
	0%{
		opacity: 0;
		-webkit-transform: scale(0);
	}
	50%{
		opacity: 0.4;
		-webkit-transform: scale(2);
	}
	100%{
		opacity: 0.2;
		-webkit-transform: scale(5);
	}
}
@-webkit-keyframes fadeInRotate{
	0%{
		opacity: 0;
		-webkit-transform: scale(0) rotate(360deg);
	}
	100%{
		opacity: 1;
		-webkit-transform: scale(1) rotate(0deg);
	}
}
/**/
@-moz-keyframes blurFadeInOut{
	0%{
		opacity: 0;
		text-shadow: 0px 0px 40px #fff;
		-moz-transform: scale(1.3);
	}
	20%,75%{
		opacity: 1;
		text-shadow: 0px 0px 1px #fff;
		-moz-transform: scale(1);
	}
	100%{
		opacity: 0;
		text-shadow: 0px 0px 50px #fff;
		-moz-transform: scale(0);
	}
}
@-moz-keyframes blurFadeIn{
	0%{
		opacity: 0;
		text-shadow: 0px 0px 40px #fff;
		-moz-transform: scale(1.3);
	}
	100%{
		opacity: 1;
		text-shadow: 0px 0px 1px #fff;
		-moz-transform: scale(1);
	}
}
@-moz-keyframes fadeInBack{
	0%{
		opacity: 0;
		-moz-transform: scale(0);
	}
	50%{
		opacity: 0.4;
		-moz-transform: scale(2);
	}
	100%{
		opacity: 0.2;
		-moz-transform: scale(5);
	}
}
@-moz-keyframes fadeInRotate{
	0%{
		opacity: 0;
		-moz-transform: scale(0) rotate(360deg);
	}
	100%{
		opacity: 1;
		-moz-transform: scale(1) rotate(0deg);
	}
}
/**/
@keyframes blurFadeInOut{
	0%{
		opacity: 0;
		text-shadow: 0px 0px 40px #fff;
		transform: scale(1.3);
	}
	20%,75%{
		opacity: 1;
		text-shadow: 0px 0px 1px #fff;
		transform: scale(1);
	}
	100%{
		opacity: 0;
		text-shadow: 0px 0px 50px #fff;
		transform: scale(0);
	}
}
@keyframes blurFadeIn{
	0%{
		opacity: 0;
		text-shadow: 0px 0px 40px #fff;
		transform: scale(1.3);
	}
	50%{
		opacity: 0.5;
		text-shadow: 0px 0px 10px #fff;
		transform: scale(1.1);
	}
	100%{
		opacity: 1;
		text-shadow: 0px 0px 1px #fff;
		transform: scale(1);
	}
}
@keyframes fadeInBack{
	0%{
		opacity: 0;
		transform: scale(0);
	}
	50%{
		opacity: 0.4;
		transform: scale(2);
	}
	100%{
		opacity: 0.2;
		transform: scale(5);
	}
}
@keyframes fadeInRotate{
	0%{
		opacity: 0;
		transform: scale(0) rotate(360deg);
	}
	100%{
		opacity: 1;
		transform: scale(1) rotate(0deg);
	}
}


.blue{
   color:rgba(0, 64, 131, .4) !important;

}

.one{
   color:rgba(0, 64, 131, 1) !important;
}

.two{
   color:rgba(3, 140, 45, 1) !important;
}

.three{
   color:rgba(244, 147, 8, 1) !important;

}

</style>


 <div class="slides" id="homepageSlideshow" >
      <?php 
      $query1 = new WP_Query( array( 'category_name' => 'homepage-slideshow' ) );

      if ( $query1->have_posts() ) {
      // The Loop
         while ( $query1->have_posts() ) {
         $query1->the_post();
         $url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "featured-image-crop" );
         //apply_filters( 'the_title', $post->post_title, $post->ID );  
         
    

      ?>

      <div class="slide">
         <div class="slideImage" ><img src="<?php echo $url[0]; ?>" /> </div>
         <?php if ( $caption = get_post( get_post_thumbnail_id() )->post_excerpt ) : ?>
            <div class="slideCaption" ><div class="wrap">'.$post->post_content.'</div>
 


         <?php endif; ?>
      </div>  


   <?php
         }// end while		
	 wp_reset_postdata(); /* Restore original Post Data  */
      }
   ?>
 <div class="controls">
            <div class="inner">       




        <div class="btn prev previous-arrow"></div>
               <div class="btn next next-arrow"></div>
            </div>
         </div>
      </div><!-- END SLIDES -->


<style>

.wrap1440{

   max-width: 2000px;
   margin: 0 auto;
   }


/* HOME PAGE BLOCKS */



   @media only screen and (min-width:1024px)  {
   .blueBox{
      display:table;
      width:100% !important;
      background-color: #4f8fe1;
      width:100%;
      height:4.6875rem;
      text-align:center;

   }
   .blueboxH2{
      display:block;
      color:#ffffff;
      font-family: Gentona_Medium;
      text-transform:uppercase;
      font-size:1.875rem;
      line-height:1;
      color:#ffffff;
      text-decoration:none; 
      text-align:center;    
      margin:0 auto; 
      margin-top:1.3rem;
      margin-bottom:1rem;
   }  

 }


   @media only screen and (min-width:768px) and (max-width : 1024px) {
   .blueBox{
      display:table;
      width:100% !important;
      background-color: #4f8fe1;
      width:100%;
      height:2.375rem;
      text-align:center;

   }
   .blueboxH2{
      display:block;
      color:#ffffff;
      font-family: Gentona_Medium;
      text-transform:uppercase;
      font-size:1.375rem;
      line-height:1;
      color:#ffffff;
      text-decoration:none; 
      text-align:center;    
      margin:0 auto; 
      margin-top:.7rem;
      margin-bottom:.5rem;
   }  

 }

   @media only screen and (min-width:481px) and (max-width : 768px) {
   .blueBox{
      display:table;
      width:100% !important;
      background-color: #4f8fe1;
      width:100%;
      height:2.375rem;
      text-align:center;

   }
   .blueboxH2{
      display:block;
      color:#ffffff;
      font-family: Gentona_Medium;
      text-transform:uppercase;
      font-size:1.375rem;
      line-height:1;
      color:#ffffff;
      text-decoration:none; 
      text-align:center;    
      margin:0 auto; 
      margin-top:.5rem;
      margin-bottom:.5rem;
   }  

 }


   @media only screen and (min-width:0px) and (max-width : 481px) {
   .blueBox{
      display:table;
      width:100% !important;
      background-color: #4f8fe1;
      width:100%;
      height:2.375rem;
      text-align:center;

   }
   .blueboxH2{
      display:block;
      color:#ffffff;
      font-family: Gentona_Medium;
      text-transform:uppercase;
      font-size:1.375rem;
      line-height:1;
      color:#ffffff;
      text-decoration:none; 
      text-align:center;    
      margin:0 auto; 
      margin-top:.5rem;
      margin-bottom:.5rem;
   }  

 }



.darkBlue{
   display:table;
   width:100% !important;
   background-color: #084B81;
   width:100%;
   height:5rem;
   text-align:center;
}

.darkBlue h2{
   display:block;
   vertical-align:middle;
   margin:0 auto; 
   color:#ffffff;
   font-family: Gentona_Medium;
   text-transform:uppercase;
   font-size:1.875rem;
   color:#ffffff;
   text-decoration:none;
   line-height:5rem;
   text-align:center;
}


/* GRID: X-bigNums */
   /* X-bigNums: Desktop*/
   @media only screen and (min-width:736px) {
      .X-bigNums{
         text-align:center;
      }


   }

   /* X-X-bigNums: Mobile Landscape*/
   @media only screen and (min-width:481px) and (max-width : 736px) {

   }

   /* X-X-bigNums: Mobile Portrait*/
   @media only screen and (min-width:0px) and (max-width : 481px) {

   }

</style>
      <div class="blueBox">
         <div class="wrap1440 ">
          
               <span class="blueboxH2">COLLEGE PROFILES</span>
          
         </div>
      </div>

         <div class="wrap1440">
<?php echo do_shortcode('[STARTROW class="grid-123 X-stories"]'); ?>
<?php echo do_shortcode('[STARTCOL class="p33"]'); ?>

<div class="X-tile">
   <div class="X-tile-img"> 
      <img src="https://publications.clas.ufl.edu/wp-content/uploads/2018/01/Nick_Nyiragongo-768x768.jpeg" alt="" width="736" height="535" class="alignnone size-thumbnail-crop wp-image-64" />
      <div class="X-tile-txt"><a href="https://publications.clas.ufl.edu/college-newsletter/las-winter-2018/renaissance-man/" class="">Nick Dowhaniuk PhD’21</a></div>
   </div>  
   <div class="X-tile-desc"> 
      <p>Pursuing both a PhD in geography and a Master of Health Science degree at UF means that Dowhaniuk indeed does quite a bit of office work, but he is no stranger to adventure. A National Geographic Explorer, Dowhaniuk studies the sociocultural and spatial effects of oil development in Uganda, as well as conservation issues there and in South Africa. His dissertation research on Ugandans’ access to healthcare serves his career goal of founding an NGO devoted to community-based health intervention.</p>
<a class="read-more" style="text-transform:uppercase;" href="https://publications.clas.ufl.edu/college-newsletter/las-winter-2018/renaissance-man/">Read More About Nick</a>
   </div>
</div>

<?php echo do_shortcode('[ENDCOL]'); ?>
<?php echo do_shortcode('[STARTCOL class="p33"]'); ?>
<div class="X-tile">
   <div class="X-tile-img"> 
      <img src="https://publications.clas.ufl.edu/wp-content/uploads/2017/01/20160319_NYT_KeyLargo_Day2_1601-1-736x535.jpg" alt="" width="736" height="535" class="alignnone size-thumbnail-crop wp-image-63" />
      <div class="X-tile-txt"><a href="https://publications.clas.ufl.edu/ytori-magazine/ytori-fall-2016/of-islands-and-ice/">Andrea Dutton</a></div>
   </div>  
   <div class="X-tile-desc"> 
      <p>Before Andrea Dutton was a geologist, she was an amateur gymnast. So, when her field research on sea level rise requires her to free-climb granite cliffs in search of fossil corals, while carrying a surveyor’s tripod, a drill, and a jug of seawater, that ingrained nimbleness is a big help. On the beaches of the Seychelles Islands off the coast of Africa, Dutton and colleagues looked for intact corals that once grew just below the surface of the Indian Ocean some 125,000 years ago, the last time Earth was warm enough to cause glaciers to retreat. Today, some of those corals stand 25 feet above the beach, resting on granite boulders. The tropical rains and sea air have eroded the granite into billow as smooth as gray silk, and few of the ancient corals are intact. But those that survived may help us understand how much sea levels could rise if greenhouse gas emissions continue at their present rate.</p>
      <a class="read-more" style="text-transform:uppercase;" href="https://publications.clas.ufl.edu/ytori-magazine/ytori-fall-2016/of-islands-and-ice/">Read More About Andrea</a>
   </div>
</div>
<?php echo do_shortcode('[ENDCOL]'); ?>
<?php echo do_shortcode('[STARTCOL class="p33"]'); ?>
<div class="X-tile">
   <div class="X-tile-img"> 
      <img src="https://publications.clas.ufl.edu/wp-content/uploads/2017/08/2017-04-04_Mindfulness_talk-3625-768x768.jpg" alt="" width="736" height="535" class="alignnone size-thumbnail-crop wp-image-62" />
      <div class="X-tile-txt"><a href="https://publications.clas.ufl.edu/college-newsletter/las-summer-2017/in-the-moment/">Trish Ring MS'93, PhD'96</a></div>
   </div>  
   <div class="X-tile-desc"><p>
Trish Ring draws a distinction between “sorrow and suffering,” believing the first is part of life and the second is unnecessary. She’s a Certified Equus Coach who has her clients talk through their concerns in a round pen with horses, which are very sensitive to human emotions. “When there’s a 2,000-pound animal in the ring with you, it shakes up your framework a bit,” she explains. Her program takes place at Blue Star Ranch, which she and her husband Carl created out of “several derelict plots of land” to create a refuge for people to enjoy nature and seek self-improvement. The ranch is the largest equine coaching facility in the Southeast.

</p>
<a class="read-more" style="text-transform:uppercase;" href="https://publications.clas.ufl.edu/college-newsletter/las-summer-2017/in-the-moment/">Read More About Trish</a>
   </div>
</div>
<?php echo do_shortcode('[ENDCOL]'); ?>
<?php echo do_shortcode('[ENDROW]'); ?>







<!--
      <div class="darkBlue">
         <div class="wrap1440">
            <h2 class="center">ADDITIONAL CONTENT</h2>
         </div>
      </div>

-->








<style>


   /*--------------------------- GRID: grid-123-b ---------------------------*/
   /* One column for mobile portrait
      Two columns for mobile landscape AND tablets
      Three columns for desktop
   */

      /* grid-123 GRID: Desktop*/
      @media only screen and (min-width:1024px) {
         .grid-123-b .X-row {
            width:100%; 
         }
         .grid-123-b .X-col{           
            float:left;
            clear:none;
            display:inline;
         }
         .grid-123 .p10{ width:10%; }
         .grid-123-b .p20{ width:20%; }
         .grid-123-b .p25{ width:25%; }
         .grid-123-b .p30{ width:30%; }
         .grid-123-b .p33{ width:33.333333333%; }
         .grid-123-b .p40{ width:40%; }
         .grid-123-b .p50{ width:50%; }
         .grid-123-b .p60{ width:60%; }
         .grid-123-b .p70{ width:70%; }
         .grid-123-b .p80{ width:80%; }
         .grid-123-b .p90{ width:90%; }
         .grid-123-b .p100{ width:100%; }
      }


   /* grid-123-b GRID: Mobile Landscape*/
   @media only screen and (min-width:736px) and (max-width : 1024px) {
          .grid-123-b .X-row {
            width:100%; 
         }
         .grid-123-b .X-col{           
            float:left;
            clear:none;
            display:inline;
         }
         .grid-123 .p10{ width:10%; }
         .grid-123-b .p20{ width:20%; }
         .grid-123-b .p25{ width:25%; }
         .grid-123-b .p30{ width:30%; }
         .grid-123-b .p33{ width:33.333333333%; }
         .grid-123-b .p40{ width:40%; }
         .grid-123-b .p50{ width:50%; }
         .grid-123-b .p60{ width:60%; }
         .grid-123-b .p70{ width:70%; }
         .grid-123-b .p80{ width:80%; }
         .grid-123-b .p90{ width:90%; }
         .grid-123-b .p100{ width:100%; }
   }



   /* grid-123-b GRID: Mobile Landscape*/
   @media only screen and (min-width:481px) and (max-width : 768px) {
          .grid-123-b .X-row {
            width:100%; 
         }
         .grid-123-b .X-col{           
            float:left;
            clear:none;
            display:inline;
         }
         .grid-123-b .p10{ width:50%; }
         .grid-123-b .p20{ width:50%; }
         .grid-123-b .p25{ width:50%; }
         .grid-123-b .p30{ width:50%; }
         .grid-123-b .p33{ width:50%; }
         .grid-123-b .p40{ width:50%; }
         .grid-123-b .p50{ width:50%; }
         .grid-123-b .p60{ width:50%; }
         .grid-123-b .p70{ width:50%; }
         .grid-123-b .p80{ width:50%; }
         .grid-123-b .p90{ width:50%; }
         .grid-123-b .p100{ width:50%; }
   }

   /* grid-123-b GRID: Mobile Portrait*/
   @media only screen and (min-width:0px) and (max-width : 481px) {
      .grid-123-b{
         background-color:#fffff5;
      }
      .grid-123-b .X-row {
         width:100%; 
      }
      .grid-123-b .X-col{
         width:100%;
         clear:both;
         display:block;
      }
   }



.table{
   display:block;;
   width:100%; 
}

.table-row{
   display:block;
   clear:both;
   width:100%; 
}

.table-cell{
   display:inline-block;
   float:left;
   text-align:center;
   height:24rem;
   vertical-align:middle;
   overflow:hidden;
   


}
   .color1{ background-color:#F37021; }
   .color2{ background-color:#084B81; }
   .color3{ background-color:#4F8FE1; }
   .color4{ background-color:#4C87B5; }
   .color5{ background-color:#00529B; }
   .color6{ background-color:#F37021; }



 
   .table-cell-1{        
      width:100%;
      background-color:#F37021;
      color:#ffffff;
      text-align:center; 
      /* Vertically Center */         
         position: relative;
         top: 50%;
         transform: translateY(-50%);   
        
   }
   .table-cell-2{
      width:100%;
      background-color:#084B81;
      color:#ffffff;
      text-align:center; 
      /* Vertically Center */         
         position: relative;
         top: 50%;
         transform: translateY(-50%);  
   }
   .table-cell-3{
      width:100%;
      background-color: #4F8FE1;
      color:#ffffff;
      text-align:center; 
      /* Vertically Center */         
         position: relative;
         top: 50%;
         transform: translateY(-50%);  
   }
   .table-cell-4{
      width:100%;
      background-color:#4C87B5;
      color:#ffffff;
      text-align:center; 
      /* Vertically Center */         
         position: relative;
         top: 50%;
         transform: translateY(-50%);  
   }
   .table-cell-5{
      width:100%;
      background-color:#00529B;
      color:#ffffff;
      text-align:center; 
      /* Vertically Center */         
         position: relative;
         top: 50%;
         transform: translateY(-50%);  
   }
   .table-cell-6{

      width:100%;
      background-color:#F37021;
      color:#ffffff;
      text-align:center; 
      /* Vertically Center */         
         position: relative;
         top: 50%;
         transform: translateY(-50%);  
   }


/* Typography */

   .table-cell-1-num{     
      line-height:1;
      font-family: "Surveyor Display A", "Surveyor Display B";
      font-style: normal;
      font-weight: 800;
      color:#084B81; 
      margin:0px;
      padding:0px; 
   }
   .table-cell-2-num{
     line-height:1; 
      font-family:Quadon_Heavy;
      line-height:1;
      color:#ffffff;
      margin:0px;
      padding:0px; 
   }
   .table-cell-3-num{
      line-height:1;  
      font-family:Gentona_Thin;
      line-height:1;
      color:#ffffff;
      margin:0px;
      padding:0px;  
   }
   .table-cell-4-num{
      line-height:1;
      font-family:Quadon_Bold;
      line-height:1;
      color:#ffffff;
      margin:0px;
      padding:0px;  
   }
   .table-cell-5-num{  
      line-height:1;   
      font-family:Gentona_Heavy; 
      color:#ffffff;
      margin:0px;
      padding:0px;  
   }
   .table-cell-6-num{   
      line-height:1;
      font-family: "Surveyor Display A", "Surveyor Display B";
      font-style: italic;
      font-weight: 400;
      color:#084B81;
      margin:0px;
      padding:0px;  
   }

   .table-cell-1-txt{
      line-height:1;
      font-family:Gentona_Light;
      line-height:1;
      color:#084B81;
      margin:0px;
      padding:0px;  text-transform:uppercase; 
   }
   .table-cell-2-txt{
      line-height:1;  
      font-family:Gentona_ExtraBold;
      line-height:1;
      color:#ffffff; 
      text-transform:uppercase;
      margin:0px;
      padding:0px; 
      text-transform:uppercase;
   }
   .table-cell-3-txt{
      line-height:1;
      font-family:Quadon_MediumItalic;
      line-height:1;
      color:#ffffff;
      margin:0px;
      padding:0px; text-transform:uppercase; 
   }
   .table-cell-4-txt{
      line-height:1;
      font-family:Gentona_Light;
      line-height:1;
      color:#ffffff;
      margin:0px;
      padding:0px; text-transform:uppercase;

   }
   .table-cell-5-txt{
      line-height:1;
      font-family:Quadon_BoldItalic;
      line-height:1;
      color:#ffffff;
      margin:0px;
      padding:0px;  text-transform:uppercase; 
 
   }
   .table-cell-6-txt{
      line-height:1;
      font-family:Gentona_Light;
      line-height:1;
      color:#084B81;
      margin:0px;
      padding:0px;  text-transform:uppercase; 

   }



/* Font sizes for HD Desktop */
@media only screen and (min-width:1920px)  {
   /* FONT SIZE is in rems for old browsers that don't support vw (view window width) */
   /* SPAN tags around text are used to move txt up or down, as required */
   .table-cell{
      /* EQUATION FOR DETERMINING BOX HEIGHT: .007991660875608 x + 8.65601111883251   where x is the screen width, 1920px in this case*/
      height:24rem;
   }
   .table-cell-1-num { font-size:21rem; line-height:.75; }
   .table-cell-1-num span{ position:relative;top:20px; } 
   .table-cell-2-num{ font-size:16rem; line-height:.8 }
   .table-cell-3-num{ width:35% !important;display:table-cell; vertical-align:middle; font-size:29rem;line-height:.7; padding-left:4rem; }
   .table-cell-3-num span{ position:relative;top:-26px } 
   .table-cell-4-num{ font-size:10.5rem; }
   .table-cell-5-num{ font-size:16rem; line-height:.9 }
   .table-cell-5-num span{ position:relative;top:-30px }  
   .table-cell-6-num{ font-size:12.5rem;letter-spacing:-2px; }
   .table-cell-1-txt{ font-size:4rem; }
   .table-cell-1-txt span{ position:relative;top:14px;}  
   .table-cell-2-txt{ font-size:3.8rem; }
   .table-cell-3-txt{ width:65%; display:table-cell; vertical-align:middle; font-size:3.5rem; padding:2rem; padding-right:3rem; line-height:1.2;  }
   .table-cell-4-txt{ font-size:3.5rem; }
   .table-cell-5-txt{ font-size:2.65rem; }
   .table-cell-5-txt span{ position:relative;top:-4px }  
   .table-cell-6-txt{ font-size:3.5rem; }
}



/* Font sizes for Desktop */
/*  Proportionally decrease all fonts and padding by 33.33%. In other words, multiply numbers from the above breakpoint by 0.666666667 */
@media only screen and (min-width:768px) and (max-width:1920px)  {
   .table-cell{
      height:18.9rem; 
   height:20vw;
   }
   .table-cell-1-num { font-size:14vw; line-height:.75; }
   .table-cell-1-num span{ position:relative;top:-.65vw; } 
   .table-cell-2-num{ font-size:13vw; line-height:.8 }
   .table-cell-3-num{ font-size:24vw;  padding-left:4vw; width:35% !important;display:table-cell; vertical-align:middle; ;line-height:.7; }
   .table-cell-3-num span{ position:relative;top:-1.3vw } 
   .table-cell-4-num{ font-size:9vw; }
   .table-cell-4-num span{ position:relative;top:-.5vw } 
   .table-cell-5-num{ font-size:12vw; line-height:.9 }
   .table-cell-5-num span{ position:relative;top:-2vw }  
   .table-cell-6-num{ font-size:9vw; letter-spacing:-2px; }
   .table-cell-6-num span{ position:relative;top:-1vw;}  

   .table-cell-1-txt{ font-size:3vw; }
   .table-cell-1-txt span{ position:relative;top:-.5vw}  
   .table-cell-2-txt{ font-size:3vw;  }
   .table-cell-3-txt{ font-size:2.7vw; padding-right:4vw; width:65%; display:table-cell; vertical-align:middle;line-height:1.2;  }
   .table-cell-3-txt span{ position:relative;}  
   .table-cell-4-txt{font-size:3vw;  }
   .table-cell-5-txt{ font-size:2vw;  }
   .table-cell-5-txt span{ position:relative;top:-.3vw }  
   .table-cell-6-txt{ font-size:3vw;}
   .table-cell-6-txt span{ position:relative; top:-.65vw;  }  
}


   /* grid-123 GRID: Mobile Landscape*/
@media only screen and (min-width:481px) and (max-width : 768px) {
   /* FONT SIZE is in rems for old browsers that don't support vw (view window width) */
   /* SPAN tags around text are used to move txt up or down, as required */
   .table-cell{
      height:12.5rem;
      height:50vw;
   }
   .table-cell-1-num { font-size:8.05rem; font-size:20vw; line-height:.75; }
   .table-cell-1-num span{ position:relative;top:-11.5px; } 
   .table-cell-2-num{ font-size:8rem; font-size:30vw; line-height:.8 }
   .table-cell-3-num{ font-size:11.116666666rem; font-size:55vw; line-height:.7; display:block; width:100%; }
   .table-cell-3-num span{ position:relative;top:-4vw; } 
   .table-cell-4-num{ font-size:4.025rem; font-size:14vw;  }
   .table-cell-4-num span{ position:relative;top:-1vw; } 
   .table-cell-5-num{ font-size:5.2rem; font-size:14vw; line-height:.9 }
   .table-cell-5-num span{ position:relative;top:-11.5px; top:-3vw}  
   .table-cell-6-num{ font-size:4.791666666rem; font-size:14vw; letter-spacing:-1px; }
   .table-cell-6-num span{ position:relative;top:-7px }  

   .table-cell-1-txt{ font-size:1.533333334rem; font-size:5vw; }
   .table-cell-1-txt span{ position:relative;top:-5.366666666px; }  
   .table-cell-2-txt{ font-size:2rem; font-size:10vw; }
   .table-cell-3-txt{  font-size:1.341666666rem; font-size:3.65vw;  line-height:1.2;  display:block; width:90%;margin:0 auto; }
   .table-cell-3-txt span{ position:relative; } 


   .table-cell-4-txt{ font-size:1.341666666rem; font-size:5.5vw; }

   .table-cell-5-txt{ font-size:1.015833334rem;font-size:5.5vw;line-height:1.2  }
   .table-cell-5-txt span{ position:relative;top:-1.5333525px }  
   .table-cell-6-txt{ font-size:1.3416475rem; }
   .table-cell-6-txt span{ position:relative;top:-1.5333525px }  

         


         }

   /* grid-123 GRID: Mobile Portrait*/
@media only screen and (min-width:0px) and (max-width:481px)  {
   /* FONT SIZE is in rems for old browsers that don't support vw (view window width) */
   /* SPAN tags around text are used to move txt up or down, as required */
   .table-cell{
      height:12.5rem;
      height:50vw;
   }

   .table-cell-1-num{ font-size:6.6375rem; font-size:40vw; line-height:.7;  }
   .table-cell-1-num span{ position:relative;top:0px; } 
   .table-cell-2-num{ font-size:6.72875rem; font-size:40vw; line-height:.8;     }
   .table-cell-3-num{ width:40%; display:table-cell; vertical-align:middle; font-size:13rem;  font-size:55vw; line-height:.7;    }
   .table-cell-3-num span{ position:relative ;top:-15px; }  
   .table-cell-4-num{ font-size:5.625rem; font-size:22vw;  }
   .table-cell-4-num span{ position:relative;top:-6px } 
   .table-cell-5-num{ font-size:4.385625rem; font-size:26vw;    }
   .table-cell-5-num span{ position:relative; top:-11.5px }  
   .table-cell-6-num{ font-size:4rem; font-size:22vw;   }
   .table-cell-6-num span{ position:relative; top:-7px }  

   .table-cell-1-txt{ font-size:1.8rem; font-size:10vw;     }
   .table-cell-1-txt span{ position:relative; top:4px; } 
   .table-cell-2-txt{ font-size:10vw; }
   .table-cell-2-txt span{ position:relative; top:-3px; } 
   .table-cell-3-txt{ width:60%; display:table-cell; vertical-align:middle; font-size:1.7rem; text-align:center; line-height:1.1; font-size:8.1vw; margin-right:.5rem; margin-left:.5rem; }
   .table-cell-3-txt span{ position:relative;top:-2px; } 
   .table-cell-4-txt{ font-size:2rem;font-size:9vw;    }
   .table-cell-5-txt{ font-size:1.3rem; font-size:7vw;   }
   .table-cell-5-txt span{ position:relative;top:-1.5333525px }  
   .table-cell-6-txt{ font-size:1.8rem;  font-size:10vw; }
   .table-cell-6-txt span{ position:relative;top:-1.5333525px }  
}




</style>



<div class="table grid-123-b">

   

      <div class="table-cell p40 color1">
         <div class="table-cell-1">
            <div class="table-cell-1-num"><span>743</span></div> <div class="table-cell-1-txt"><span>FACULTY</span></div>
         </div>
      </div>

      <div class="table-cell p20 color2">
         <div class="table-cell-2">
            <div class="table-cell-2-num"><span>42</span></div> <div class="table-cell-2-txt"><span>Majors</span></div>
         </div>
      </div>

      <div class="table-cell p40 color3">
         <div class="table-cell-3">
            <div class="table-cell-3-num"><span>9</span></div> <div class="table-cell-3-txt"><span>NATIONAL ACADEMY OF SCIENCES MEMBERS</span></div>
      </div>
      </div>




      <div class="table-cell p30 color4">
         <div class="table-cell-4">
            <div class="table-cell-4-num"><span>11,000</span></div> <div class="table-cell-4-txt"><span>Undergraduates</span></div>
         </div>
      </div>

      <div class="table-cell p40 color5">
         <div class="table-cell-5">
            <div class="table-cell-5-num"><span>3,500</span></div> <div class="table-cell-5-txt"><span>Degrees Awarded Annually</span></div>
         </div>
      </div>

      <div class="table-cell p30 color6">
         <div class="table-cell-6">
            <div class="table-cell-6-num"><span>1,800</span></div> <div class="table-cell-6-txt"><span>Graduates</span></div>
         </div>
      </div>



</div>



         </div><!-- END wrap -->

 </div><!-- END X-topMargin -->
<!-- CONTENT -->
 


<div class="wrap">

	<div id="primary" class="content-area" >
		<main id="main" class="site-main" role="main">

			<?php

			?>

		</main><!-- #main -->
	</div><!-- #primary -->


</div><!-- .wrap -->

<?php get_footer();
