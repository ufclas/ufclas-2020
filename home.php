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

<img class="home-featured-image" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />



	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = ($thumbnail[2] / $thumbnail[1] * 100 ) - 30;
		?>

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
		</div><!-- .panel-image -->

	<?php endif; ?>


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

/*--------------------------- PARENT GRID ---------------------------*/
.X-row {
   clear:both;
   display:block;
   width:100%;
   overflow:hidden; 
   margin:0 auto;
}
   .row > div:nth-child(odd) {
 
   }

   .row > div:nth-child(even) {
 
   }

   .X-col {
      float:left; 
   }

   .pad1{
      padding:1rem;
   }


/* GRID: iPhone*/
@media only screen and (min-width:0px) and (max-width :736px) {
   .X-row {
      width:100%;
   }
   .X-col{
      width:100%;clear:both;display:block;
   }

   .p10, .p20, .p25, .p30, .p33, .p40, .p50, .p60, .p70, .p80, .p90, .p100 {
      width:100%;

   }
   .pad1{
      padding:0rem;
   }
}



/* GRID: iPad, Desktop*/
@media only screen and (min-width:736px)  {
   .X-row {
      width:100%; 
   }
   .X-col{
      float:left;
      clear: none;

   }
   .p10{width:10%;}
   .p20{width:20%;}
   .p25{width:25%;}
   .p30{width:30%;}
   .p33{width:33.333333333%;}
   .p40{width:40%;}
   .p50{width:50%;}
   .p60{width:60%;}
   .p70{width:70%;}
   .p80{width:80%;}
   .p90{width:90%;}
   .p100{width:90%;}

}


   /*--------------------------- PARENT GRID: grid-123 ---------------------------*/
   /* One column for mobile
      Two columns for tablets
      Three columns for desktop
   */

      /* grid-123 GRID: Desktop*/
      @media only screen and (min-width:736px) {
         .grid-123 .X-row {
            width:100%; 
         }
         .grid-123 .X-col{           
            float:left;
            clear:none;
            display:inline;
         }
         .grid-123 .p10{ width:10%; }
         .grid-123 .p20{ width:20%; }
         .grid-123 .p25{ width:25%; }
         .grid-123 .p30{ width:30%; }
         .grid-123 .p33{ width:33.333333333%; }
         .grid-123 .p40{ width:40%; }
         .grid-123 .p50{ width:50%; }
         .grid-123 .p60{ width:60%; }
         .grid-123 .p70{ width:70%; }
         .grid-123 .p80{ width:80%; }
         .grid-123 .p90{ width:90%; }
         .grid-123 .p100{ width:90%; }
      }
   /* grid-123 GRID: Mobile Landscape*/
   @media only screen and (min-width:481px) and (max-width : 768px) {
          .grid-123 .X-row {
            width:100%; 
         }
         .grid-123 .X-col{           
            float:left;
            clear:none;
            display:inline;
         }
         .grid-123 .p10{ width:50%; }
         .grid-123 .p20{ width:50%; }
         .grid-123 .p25{ width:50%; }
         .grid-123 .p30{ width:50%; }
         .grid-123 .p33{ width:50%; }
         .grid-123 .p40{ width:50%; }
         .grid-123 .p50{ width:50%; }
         .grid-123 .p60{ width:50%; }
         .grid-123 .p70{ width:50%; }
         .grid-123 .p80{ width:50%; }
         .grid-123 .p90{ width:50%; }
         .grid-123 .p100{ width:50%; }
   }

   /* grid-123 GRID: Mobile Portrait*/
   @media only screen and (min-width:0px) and (max-width : 481px) {
      .grid-123{
         background-color:#fffff5;
      }
      .grid-123 .X-row {
         width:100%; 
      }
      .grid-123 .X-col{
         width:100%;
         clear:both;
         display:block;
      }
   }


   /*--------------------------- CHILD GRID: .X-stories ---------------------------*/

   /* X-tile: HD Desktop*/
   @media only screen and (min-width:2000px) {
      .X-stories .X-tile-txt a {
         display:block;
         width:100%;
         height:100%;
         font-size:2.5rem;        
         font-family:Quadon_Medium;
         color:#ffffff !important;
         text-align:left;
         vertical-align:middle;
         display:table-cell;  
         padding-top:1%;
         padding-bottom:1%;  
         padding-left:4%;       
      }

       .X-stories .X-tile-desc p {   
            font-family:Gentona_Book;
            color:#4A4A4A;
            font-size:1.2rem;
         }  
       .X-stories{
         background-color:#fffff5;
      }
      .X-stories .X-tile {
         position:relative;
      }
      .X-stories .X-tile-img {
         position:relative;  
      }
         .X-stories .X-tile-txt {
            position:absolute;
            display:table;   
            width:100%;
            height: 6.5vh;
            background:rgba(0,52,108,.8);
            bottom:0px;  
            text-align:center; 
         }
         .X-stories .X-tile-txt a {
            display:block;
            width:100%;
            height:100%;
            font-size:2vh;        
            font-family:Quadon_Medium;
            color:#ffffff;
            text-align:left;
            vertical-align:middle;
            display:table-cell;  
            padding-top:1%;
            padding-bottom:1%;  
            padding-left:8%;       
         }
         .X-stories .X-tile-desc {  
            padding-top:5%;
            padding-left:10%;
            padding-right:10%;
        
          
         }  
         .X-stories .X-tile-desc p {   
            font-family:Gentona_Book;
            color:#4A4A4A;
         }   
         .X-stories .X-tile-desc .read-more {
            font-family:Gentona_Bold;
            text-transform:uppercase;
            color:  rgb(0,82,155);
            text-decoration:none;
            display:block;
            clear:both;
            font-size:1.3rem;
            padding-top:1rem;
            padding-bottom:1rem;
            font-weight: bold;
         } 


   }


   /* X-tile: Desktop*/
   @media only screen and (min-width:768px) and (max-width : 2000px)  {
      .X-stories{
         background-color:#fffff5;
      }
      .X-stories .X-tile {
         position:relative;
      }
      .X-stories .X-tile-img {
         position:relative;  
      }
         .X-stories .X-tile-txt {
            position:absolute;
            display:table;   
            width:100%;
            height: 6.5vw;
            background:rgba(0,52,108,.8);
            bottom:0px;  
            text-align:center; 
         }
         .X-stories .X-tile-txt a {
            display:block;
            width:100%;
            height:100%;
            font-size:2vw;        
            font-family:Quadon_Medium;
            color:#ffffff !important;
            text-align:left;
            vertical-align:middle;
            display:table-cell;  
            padding-top:1%;
            padding-bottom:1%;  
            padding-left:8%;       
         }
         .X-stories .X-tile-desc {  
            padding-top:5%;
            padding-left:10%;
            padding-right:10%;
        
          
         }  
         .X-stories .X-tile-desc p {   
            font-family:Gentona_Book;
            color:#4A4A4A;
         }   
         .X-stories .X-tile-desc .read-more {
            font-family:Gentona_Bold;
            text-transform:uppercase;
            color:  rgb(0,82,155);
            text-decoration:none;
            display:block;
            clear:both;
            font-size:1.3rem;
            padding-top:1rem;
            padding-bottom:1rem;
            font-weight: bold;
         } 
   }

   /* X-tile: Mobile Landscape*/
   @media only screen and (min-width:481px) and (max-width : 768px) {
      .X-stories{
         background-color:#fffff5;
      }
      .X-stories .X-tile {
         position:relative;
      }
         .X-stories .X-tile-img {
            position:relative;   

         }
         .X-stories .X-tile-txt {
            position:absolute;
            display:table;   
            width:100%;
            height: 10vw;
            background:rgba(0,52,108,.8);
            bottom:0px;  
            text-align:center; 
         }
         .X-stories .X-tile-txt a {
            display:block;
            width:100%;
            height:100%;
            font-size:3vw;        
            font-family:Quadon_Medium;
            color:#ffffff !important;
            text-align:left;
            vertical-align:middle;
            display:table-cell;  
            padding-top:1%;
            padding-bottom:1%;  
            padding-left:6%;       
         }
        .X-stories .X-tile-desc p {   
            font-family:Gentona_Book;
            color:#444444;     
            margin:0px;
            padding:1rem;;
            overflow-y:scroll !important;
         } 

     .X-stories .X-tile-desc {  
            display:block;  
            position:absolute; 
            height:100%;
            overflow-y:scroll !important;
            top:0px;
            opacity: 0;     
            /* padding: 0 30px padding is required if using arrow */
            padding:0px;
            pointer-events: none;
            position: absolute;
            /* text-align: center; is required if using arrow */
            text-align: left;
            background-color:rgba(255,255,255,.85);
            color:#ffffff !important;
            visibility: hidden;
            margin:0px;
            padding:0px;
          transition: all 1s ease 0s;
           
         }  

      .X-tile:hover > .X-tile-desc  {
         top:0px;         
         opacity: 1;
         pointer-events: all;
         visibility: visible;
         transition: all 1s ease 0s;
     } 
         .X-stories .X-tile-desc .read-more {
            font-family:Gentona_Bold;
            text-transform:uppercase;
            color:  rgb(0,82,155);
            text-decoration:none;
            display:block;
            clear:both;
            font-size:1.3rem;
            padding-left:1rem;
            padding-bottom:1rem;
            font-weight: bold;
         }   
   }

   /* X-tile: Mobile Portrait*/
   @media only screen and (min-width:0px) and (max-width : 481px) {

     
      .X-stories{
         position: relative;
         background-color:#fffff5;
      }
      .X-tile{
         display:block;position: relative; 

      }
      .X-stories .X-tile-img {
         position:relative; 
      }
         .X-stories .X-tile-txt {
            position:absolute;
            display:table;   
            width:100%;
            height: 20vw;
            background:rgba(0,52,108,.8);
            bottom:0px;  
            text-align:center; 
         }
         .X-stories .X-tile-txt a {
            display:block;
            width:100%;
            height:100%;
            font-size:1.625rem;   /*fallback*/ 
            font-size:6vw;       
            font-family:Quadon_Medium;
            color:#ffffff !important;
            text-align:center;
            vertical-align:middle;
            display:table-cell;  
            padding-top:.5rem;
            padding-bottom:.5rem;           
         }
         .X-stories .X-tile-desc p {   
            font-family:Gentona_Book;
            color:#444444;     
            margin:0px;
            padding:1rem;;
            overflow-y:scroll !important;
         } 

     .X-stories .X-tile-desc {  
            display:block;  
            position:absolute; 
            height:100%;
            overflow-y:scroll !important;
            top:0px;
            opacity: 0;     
            /* padding: 0 30px padding is required if using arrow */
            padding:0px;
            pointer-events: none;
            position: absolute;
            /* text-align: center; is required if using arrow */
            text-align: left;
            background-color:rgba(255,255,255,.85);
            color:#ffffff !important;
            visibility: hidden;
            margin:0px;
            padding:0px;
          transition: all 1s ease 0s;
           
         }  

      .X-tile:hover > .X-tile-desc  {
         top:0px;         
         opacity: 1;
         pointer-events: all;
         visibility: visible;
         transition: all 1s ease 0s;
     } 

     
      /*   Arrow for   .X-tile-desc               
        .X-stories .X-tile-desc:before {
            background: #4c87b5;
            content: '';
            height: 48px;
            left: -24px;
            margin: -24px 0 0 0;
            position: absolute;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            top: 50%;
            width: 48px;
      }

*/
         .X-stories .X-tile-desc .read-more {
            font-family:Gentona_Bold;
            text-transform:uppercase;
            color:  rgb(0,82,155);
            text-decoration:none;
            display:block;
            clear:both;
            font-size:1.3rem;
            padding-left:1rem;
            padding-bottom:1rem;
            font-weight: bold;
         }
         .X-stories .X-tile-desc-toggle {             
            top:0px;
            display:block;
           
         } 
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
      <img src="https://t.publications.clas.ufl.edu/wp-content/uploads/2018/02/taylor-768x768.jpg" alt="" width="736" height="535" class="alignnone size-thumbnail-crop wp-image-64" />
      <div class="X-tile-txt"><a href="" class="">Taylor Rouviere ’18</a></div>
   </div>  
   <div class="X-tile-desc"> 
      <p>Eget nunc lobortis mattis aliquam faucibus purus in. Pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at. Purus in massa tempor nec feugiat nisl pretium fusce. Imperdiet proin fermentum leo vel orci porta non pulvinar. Felis donec et odio pellentesque diam volutpat. Eu non diam phasellus vestibulum lorem sed risus ultricies tristique. Nulla aliquet enim tortor at auctor urna nunc. Nisl nisi scelerisque eu ultrices vitae auctor. Facilisis magna etiam tempor orci eu lobortis elementum nibh tellus. Rhoncus dolor purus non enim. Enim ut sem viverra aliquet.
</p>
<a class="read-more" href="https://t2.publications.clas.ufl.edu/college-news/space-test/">READ MORE</a>
   </div>
</div>

<?php echo do_shortcode('[ENDCOL]'); ?>
<?php echo do_shortcode('[STARTCOL class="p33"]'); ?>
<div class="X-tile">
   <div class="X-tile-img"> 
      <img src="https://t.publications.clas.ufl.edu/wp-content/uploads/2018/01/20160319_NYT_KeyLargo_Day2_1601-768x768.jpg" alt="" width="736" height="535" class="alignnone size-thumbnail-crop wp-image-63" />
      <div class="X-tile-txt"><a href="">Andrea Dutton</a></div>
   </div>  
   <div class="X-tile-desc"> 
      <p>Eget nunc lobortis mattis aliquam faucibus purus in. Pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at. Purus in massa tempor nec feugiat nisl pretium fusce. Imperdiet proin fermentum leo vel orci porta non pulvinar. Felis donec et odio pellentesque diam volutpat. Eu non diam phasellus vestibulum lorem sed risus ultricies tristique. Nulla aliquet enim tortor at auctor urna nunc. Nisl nisi scelerisque eu ultrices vitae auctor. Facilisis magna etiam tempor orci eu lobortis elementum nibh tellus. Rhoncus dolor purus non enim. Enim ut sem viverra aliquet.
</p>
      <a class="read-more" href="https://t2.publications.clas.ufl.edu/college-news/space-test/">READ MORE</a>
   </div>
</div>
<?php echo do_shortcode('[ENDCOL]'); ?>
<?php echo do_shortcode('[STARTCOL class="p33"]'); ?>
<div class="X-tile">
   <div class="X-tile-img"> 
      <img src="https://t.publications.clas.ufl.edu/wp-content/uploads/2018/02/Hernandez_BuckyBall-768x768.jpg" alt="" width="736" height="535" class="alignnone size-thumbnail-crop wp-image-62" />
      <div class="X-tile-txt"><a href="">Joe Hernandez ’96</a></div>
   </div>  
   <div class="X-tile-desc"><p>
Eget nunc lobortis mattis aliquam faucibus purus in. Pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at. Purus in massa tempor nec feugiat nisl pretium fusce. Imperdiet proin fermentum leo vel orci porta non pulvinar. Felis donec et odio pellentesque diam volutpat. Eu non diam phasellus vestibulum lorem sed risus ultricies tristique. Nulla aliquet enim tortor at auctor urna nunc. Nisl nisi scelerisque eu ultrices vitae auctor. Facilisis magna etiam tempor orci eu lobortis elementum nibh tellus. Rhoncus dolor purus non enim. Enim ut sem viverra aliquet.
</p>
<a class="read-more" href="https://t2.publications.clas.ufl.edu/college-news/space-test/">READ MORE</a>
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
   .table-cell-1-num span{ position:relative;top:-30px; } 
   .table-cell-2-num{ font-size:16rem; line-height:.8 }
   .table-cell-3-num{ width:35% !important;display:table-cell; vertical-align:middle; font-size:29rem;line-height:.7; padding-left:4rem; }
   .table-cell-3-num span{ position:relative;top:-26px } 
   .table-cell-4-num{ font-size:10.5rem; }
   .table-cell-5-num{ font-size:16rem; line-height:.9 }
   .table-cell-5-num span{ position:relative;top:-30px }  
   .table-cell-6-num{ font-size:12.5rem;letter-spacing:-2px; }
   .table-cell-1-txt{ font-size:4rem; }
   .table-cell-1-txt span{ position:relative;top:-14px;}  
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
