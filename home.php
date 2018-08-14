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
       <p>Pursuing both a PhD in geography and a Master of Health Science degree at UF means that Dowhaniuk indeed does quite a bit of office work, but he is no stranger to adventure. A National Geographic Explorer, Dowhaniuk studies the sociocultural and spatial effects of oil development in Uganda, as well as conservation issues there and in South Africa. His dissertation research on Ugandans’ access to healthcare serves his career goal of founding an NGO devoted to community-based health intervention.</p>
 <a class="read-more" style="text-transform:uppercase;" href="https://publications.clas.ufl.edu/college-newsletter/las-winter-2018/renaissance-man/">Read More About Nick</a>
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
      <p>Before Andrea Dutton was a geologist, she was an amateur gymnast. So, when her field research on sea level rise requires her to free-climb granite cliffs in search of fossil corals, while carrying a surveyor’s tripod, a drill, and a jug of seawater, that ingrained nimbleness is a big help. On the beaches of the Seychelles Islands off the coast of Africa, Dutton and colleagues looked for intact corals that once grew just below the surface of the Indian Ocean some 125,000 years ago, the last time Earth was warm enough to cause glaciers to retreat. Today, some of those corals stand 25 feet above the beach, resting on granite boulders. The tropical rains and sea air have eroded the granite into billow as smooth as gray silk, and few of the ancient corals are intact. But those that survived may help us understand how much sea levels could rise if greenhouse gas emissions continue at their present rate.</p>
      <p>Before Andrea Dutton was a geologist, she was an amateur gymnast. So, when her field research on sea level rise requires her to free-climb granite cliffs in search of fossil corals, while carrying a surveyor’s tripod, a drill, and a jug of seawater, that ingrained nimbleness is a big help. On the beaches of the Seychelles Islands off the coast of Africa, Dutton and colleagues looked for intact corals that once grew just below the surface of the Indian Ocean some 125,000 years ago, the last time Earth was warm enough to cause glaciers to retreat.</p>
      <a class="read-more" style="text-transform:uppercase;" href="https://publications.clas.ufl.edu/ytori-magazine/ytori-fall-2016/of-islands-and-ice/">Read More About Andrea</a>
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
