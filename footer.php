<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->


             <?php if ( has_nav_menu( 'social' ) ) : ?>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
             <?php 
             endif;
             ?>



	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

<style>

@media (min-width:768px) {

   .footer-main{
      position: relative;
      overflow: visible;
      display: block;
      width: 100%;
      
      clear: both;
      background-color: #00285E;
      padding:2rem;
      color: #ffffff;
      font-size: 1rem;
      font-family: Gentona_Book;  
   }
   .footer-main-wrap{
      max-width: 1440px;
      margin: 0 auto;
   }
   .footer-main p{
       font-family: Gentona_Book;    
      font-size:  1rem; 
   }
   .footer-main h2{
      color: #5789B7;
      font-size:1rem;
      padding:0;
      margin-top: .5rem;
      margin-bottom: .5rem;
      font-family: Gentona_Book;      
   }


   .list-unstyled  {

      text-transform: uppercase;
 
      font-family: "Gentona_Light";
      list-style: none;
      padding: 0px;
      margin: 0px;
   }
   .footer-menu.open ul {
      display: block;
      margin-bottom: 20px; }

  .footer-menu.open h2 .icon-caret {
    margin-top: 8px;
    -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg); }


   .footer-main  .icon-uflogo{
      height:3.835rem;
      width:3.835rem;
   }
   .icon-journeys{
      height: 3.4rem;
      max-width: 15.5rem;
      margin: 0px;
      padding: 0px;
      fill: #ffffff;
      text-align:left;
   }
   .journeys-1{fill:#fff;}
   .journeys-2{fill:none;stroke:#f45a1d;stroke-width:1.67px;}
   .journeys-3{fill:#f45a1d;}
   .gatorgood-1{fill:#f45a1d;}
   .gatorgood-2{fill:#fff;}
   .footer-main a {
      color: #ffffff;
   }
   .footer-main-col-1{ 
      width: 30%;     
      display: table-cell;
      vertical-align: top;
      padding: 2rem;
   }
   .footer-main-col-2{   
      display: table-cell;
      width: 40%;  
      vertical-align: top; 
      padding: 2rem;
   }
   /* SUB COLS FOR footer-main-col-2 */
   .footer-main-sub-col{
      position: relative;
      display: block;
      clear: both;
      color: #ffffff;
      font-size: .9rem;
      line-height: 1.7rem;
   }

      .footer-main-sub-col-1{
         width: 30%; 
         display: inline-block;
         vertical-align: top;        
         padding: 1rem;
         padding-left: 0px;
      }
      .footer-main-sub-col-2{
         width: 30%; 
         display: inline-block;
         vertical-align: top;
         padding: 1rem;
      }
      .footer-main-sub-col-3{
         width: 30%; 
         display: inline-block;
         vertical-align: top;
         padding: 1rem;
         padding-right: 0px;
      }

   .footer-main-col-3{ 
      display: table-cell;
      vertical-align: top;
      width: 30%;    
      padding: 2rem;
   }


.uf-campaign{ 
   text-align:center;
   vertical-align: top;
}

.uf-campaign svg{ 
   max-width:100%;
   height:auto;
   margin-left: auto;
   margin-right: auto;  
}



   .footer-menu h2 {

   }



      .footer-menu ul {
         display: block; 
      } 

      .footer-menu h2 {
        border: none;
        margin-bottom: 12px;
        padding: 0;
      } 

       .footer-menu h2 .icon-caret {
          display: none; 
       } 



 .footer-menu h2 .icon-caret {
      color: #f37021;
      height: 14px;
      margin-top: -7px;
      position: absolute;
      right: 20px;
      top: 50%;
      -webkit-transform: rotate(0deg);
              transform: rotate(0deg);
      -webkit-transition: -webkit-transform .25s ease-out;
              transition: transform .25s ease-out;
      width: 9px;
   }

   .icon-caret-down{
      -webkit-transform: rotate(0deg);
              transform: rotate(0deg);
      -webkit-transition: -webkit-transform .25s ease-out;
              transition: transform .25s ease-out;

   }

   .icon-caret-right{
      -webkit-transform: rotate(45deg);
              transform: rotate(45deg);
      -webkit-transition: -webkit-transform .25s ease-out;
              transition: transform .25s ease-out;

   }

}

/* Mobile Footer */
@media only screen and (min-width:481px) and (max-width :  768px) {
   .footer-main{
      position: relative;
      overflow: visible;
      display: block;
      width: 100%;      
      clear: both;
      background-color: #00285E;
      padding:1rem;
      color: #ffffff;
      font-size: 1rem;
      font-family: Gentona_Book;  
   }
   .footer-main-wrap{
      max-width: 1440px;
      margin: 0 auto;
   }
   .footer-main p{
       font-family: Gentona_Book;    
      font-size:  1rem; 
   }
   .footer-main h2{
      color: #5789B7;
      font-size:1rem;
      padding:0;
      margin-top: .5rem;
      margin-bottom: .5rem;
      font-family: Gentona_Book;      
   }
   .footer-LAS-stacked{
      padding-top: 2rem;
      padding-bottom: 2rem;
    }
  .icon-journeys {

   }

   .footer-main  .icon-uflogo{
      height:3.835rem;
      width:3.835rem;
   }
   .icon-journeys{
      height: 3.4rem;
      margin: 0px;
      padding: 0px;
      fill: #ffffff;
   }
   .journeys-1{fill:#fff;}
   .journeys-2{fill:none;stroke:#f45a1d;stroke-width:1.67px;}
   .journeys-3{fill:#f45a1d;}
   .gatorgood-1{fill:#f45a1d;}
   .gatorgood-2{fill:#fff;}
   .footer-main a {
      color: #ffffff;
   }
   .footer-main-col-1{ 
      width: 100%;     
      display: block;
      vertical-align: top;
      text-align: center;
   }
   .footer-main-col-2{   
      width: 100%;     
      display: block;
      vertical-align: top; 
   }
   /* SUB COLS FOR footer-main-col-2 */
   .footer-main-sub-col{
      position: relative;
      display: block;
      clear: both;
      color: #ffffff;
      font-size: .9rem;
      line-height: 1.7rem;
   }

   .footer-main-sub-col li {
      padding: 0rem;

   }

      .footer-main-sub-col-1{
         width: 100%; 
         display: block;
         padding: 0rem;
         margin: 0rem;
       
      }
      .footer-main-sub-col-2{
         width: 100%; 
         display: block;
         padding: 0rem;
         margin: 0rem;
     
      }
      .footer-main-sub-col-3{
         width: 100%; 
         display: block;
         padding: 0rem;
         margin: 0rem;
     
      }

   .footer-main-col-3{ 
      width: 100%;     
      display: block;
      vertical-align: middle;
   
   }


.uf-campaign{ 
   text-align:center;
   vertical-align: middle;
}

.uf-campaign svg{ 
   max-width:100%;
   height:auto;
   margin-left: auto;
   margin-right: auto;  
}
   .list-unstyled li {
      list-style: none;
      line-height: 1.3rem;
   }
/* Footer Drop Down Menu */
   .footer-menu.open ul {
      display: block;
      margin-bottom: 20px; }

  .footer-menu.open h2 .icon-caret {  
    -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
   }
   .ufcol1{
      position:relative;
      padding-top:22rem;
      width:100%;
      display:block;
      clear:both;
      overflow:hidden;
   }
   .ufcol2{
      position:relative;
      width:100%;
      display:block;
      clear:both;
      overflow:hidden;
   }
   .ufcol3{
      position:relative;
      width:100%;
      display:block;
      clear:both;
      overflow:hidden;
   }
   .ufcol4{
      position:absolute;
      top:0px;
      width:100%;
      display:block;
      clear:both;
      overflow:hidden;
   }
   .footerAddress{
      margin:0 auto;
      text-align:center; 
   }
  .footer-menu{
      cursor:pointer;
      margin:0px;
    }
      .footer-menu ul {
         display: none; 
      } 
   .main-menu-wrap .main-menu-link .icon-caret {
      height: 14px;
      right: 15px;
      margin-top: -7px;
      position: absolute;
      top: 50%;
      width: 9px; 
   }
   .footer-menu.open h2 .icon-caret {
      -webkit-transform: rotate(-90deg);
      transform: rotate(-90deg); 
   }
   .footer-menu ul {
      display: none;
      margin: 0;
   }
    .footer-menu ul li {
      margin: 0;
      text-transform: uppercase;  
      padding-top: .2rem;
      padding-bottom: .2rem;
   }
   .list-unstyled {

  }
   .footer-menu ul li:before {
      display: none; 
   }
   .footer-menu h2 {
      border-top: 1px solid #d4edec;  
      letter-spacing: 1px;
      margin-bottom: 0;
      position: relative;
      text-transform: uppercase;  
   }
   .footer-menu h2 .icon-caret {
      color: #f37021;
      height: 14px;
      margin-top: -7px;
      position: absolute;
      right: 20px;
      top: 50%;
      -webkit-transform: rotate(90deg);
              transform: rotate(90deg);
      -webkit-transition: -webkit-transform .25s ease-out;
              transition: transform .25s ease-out;
      width: 9px; 
   }


}


/* Mobile Footer */
@media only screen and (min-width:0px) and (max-width :  481px) {
   .footer-main{
      position: relative;
      overflow: visible;
      display: block;
      width: 100%;
        
      clear: both;
      background-color: #00285E;
      padding:1rem;
      color: #ffffff;
      font-size: 1rem;
      font-family: Gentona_Book;  
      margin:0px;
   }
   .footer-main-wrap{
      max-width: 1440px;
      margin: 0 auto;
   }
   .footer-main p{
       font-family: Gentona_Book;    
      font-size:  1rem; 
   }
   .footer-main h2{
      color: #5789B7;
      font-size:1rem;
      padding:0;
      margin-top: .5rem;
      margin-bottom: .5rem;
      font-family: Gentona_Book; 
      display: block;
   
   }

   .footer-LAS-stacked {
      padding-top: 1rem;
      padding-bottom: 1rem;
    }

   .footer-main  .icon-uflogo{
      height:3.835rem;
      width:3.835rem;
   }
   .icon-journeys{
      height: 3.4rem;
      margin: 0px;
      padding: 0px;
      fill: #ffffff;
   }
   .journeys-1{fill:#fff;}
   .journeys-2{fill:none;stroke:#f45a1d;stroke-width:1.67px;}
   .journeys-3{fill:#f45a1d;}
   .gatorgood-1{fill:#f45a1d;}
   .gatorgood-2{fill:#fff;}
   .footer-main a {
      color: #ffffff;
   }
   .footer-main-col-1{ 
      width: 100%;     
      display: block;
      vertical-align: top;
      text-align: center;
   }
   .footer-main-col-2{   
      width: 100%;     
      display: block;
      vertical-align: top; 
   }
   /* SUB COLS FOR footer-main-col-2 */
   .footer-main-sub-col{
      position: relative;
      display: block;
      clear: both;
      color: #ffffff;
      font-size: .9rem;
      line-height: 1.7rem;

   }

      .footer-main-sub-col-1{
         width: 100%;     
         display: block;
         padding: 0rem;
         margin: 0rem;
      }
      .footer-main-sub-col-2{
         width: 100%;     
         display: block;
         padding: 0rem;
         margin: 0rem;

      }
      .footer-main-sub-col-3{
         width: 100%;     
         display: block;
         padding: 0rem;
         margin: 0rem;
      }

   .footer-main-col-3{ 
      width: 100%;     
      display: block;
      vertical-align: middle;   
   }


.uf-campaign{ 
   text-align:center;
   vertical-align: middle;
   padding-top: 2rem;
}

.uf-campaign svg{ 
   max-width:100%;
   height:auto;
   margin-left: auto;
   margin-right: auto;  

}
   .list-unstyled  {
      list-style: none;
   }
/* Footer Drop Down Menu */
   .footer-menu.open ul {
      display: block;
      margin-bottom: 20px; }

  .footer-menu.open h2 .icon-caret {  
    -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
   }
   .ufcol1{
      position:relative;
      padding-top:22rem;
      width:100%;
      display:block;
      clear:both;
      overflow:hidden;
   }
   .ufcol2{
      position:relative;
      width:100%;
      display:block;
      clear:both;
      overflow:hidden;
   }
   .ufcol3{
      position:relative;
      width:100%;
      display:block;
      clear:both;
      overflow:hidden;
   }
   .ufcol4{
      position:absolute;
      top:0px;
      width:100%;
      display:block;
      clear:both;
      overflow:hidden;
   }
   .footerAddress{
      margin:0 auto;
      text-align:center; 
   }
  .footer-menu{
      cursor:pointer;
      margin:0px;
    }
      .footer-menu ul {
         display: none; 
      } 
   .main-menu-wrap .main-menu-link .icon-caret {
      height: 14px;
      right: 15px;
      margin-top: -7px;
      position: absolute;
      top: 50%;
      width: 9px; 
   }
   .footer-menu.open h2 .icon-caret {
      -webkit-transform: rotate(-90deg);
      transform: rotate(-90deg); 
   }
   .footer-menu ul {
      display: none;
      margin: 0;
   }
    .footer-menu ul li {
      margin: 0;
      text-transform: uppercase;  
      padding-top: .2rem;
      padding-bottom: .2rem;
   }
   .list-unstyled {

  }
   .footer-menu ul li:before {
      display: none; 
   }
   .footer-menu h2 {
      border-top: 1px solid #d4edec;  
      letter-spacing: 1px;
      margin-bottom: 0;
      position: relative;
      text-transform: uppercase;  
   }
   .footer-menu h2 .icon-caret {
      color: #f37021;
      height: 14px;
      margin-top: -7px;
      position: absolute;
      right: 20px;
      top: 50%;
      -webkit-transform: rotate(90deg);
              transform: rotate(90deg);
      -webkit-transition: -webkit-transform .25s ease-out;
              transition: transform .25s ease-out;
      width: 9px; 
   }


}


</style>
<div class="footer-main">
   <div class="footer-main-wrap">
   <div class="footer-main-col-1"> 
      <div class="uf"  role="SVG" tabindex="0" aria-label="University of Florida Homepage">
         <a href="http://www.ufl.edu" target="_blank"  alt="University of Florida" title="University of Florida"> 
            <img class="footer-LAS-stacked" src="https://t5.publications.clas.ufl.edu/wp-content/themes/CLAS/assets/images/logos/LAS_stacked.svg"><span class="SVGaltText">University of Florida Homepage</span>
         </a>
      </div> 
      <p>Office of the Dean <br />
         2014 Turlington Hall <br />
         PO Box 117300  <br />
         Gainesville FL 32611  <br />
         P: 352.392.0780 <br />
         F: 352.392.3584 <br />
         <a href="mailto: dean@clas.ufl.edu" target="_blank"  alt="Email the Dean" title="University of Florida"> dean@clas.ufl.edu </a>
<br />
<br />
      </p>


      <svg class="icon-journeys"><use xlink:href="#journeys-svg"></use></svg>
    
      </div>

   <div class="footer-main-col-2"> 
      <h2>NAVIGATE</h2>
      <p> <a href="">ABOUT</a>  |  <a href="">ACADEMICS</a>  |  <a href="">FACULTY & RESEARCH</a>  | <a href="">ALUMNI</a> </p>     

   <div class="footer-main-sub-col">
      <div class="footer-main-sub-col-1 footer-menu"> 
         <h2>ACADEMIC PROGRAMS <span class="icon-svg icon-caret"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#caret"></use></svg></span></h2>
            <ul class="list-unstyled footer-list">
               <li><a href="/departments">Departments</a> </li>
               <li><a href="/centers">Centers and Institutes</a> </li>
               <li><a href="/programs">Programs</a> </li>
               <li><a href="/undergraduate">Undergraduate</a> </li>
               <li><a href="/graduate">Graduate</a> </li>
               <li><a href="/international">International</a> </li>
		<li><a href="/study-abroad">Study Abroad</a> </li>
		<li><a href="http://advising.ufl.edu/beyond120">Beyond 120</a> </li>
            </ul>
      </div>

      <div class="footer-main-sub-col-2 footer-menu"> 
         <h2>FACULTY AND RESEARCH <span class="icon-svg icon-caret"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#caret"></use></svg></span></h2>
         <ul class="list-unstyled footer-list">
            <li><a href="https://publications.clas.ufl.edu/category/college-news/research/">News</a> </li>
            <li><a href="http://directory.ufl.edu">UF Directory</a> </li>
		 <li><a href="/research/compliance">Compliance</a></li>
         </ul>
      </div>

      <div class="footer-main-sub-col-3 footer-menu"> 
         <h2>OFFICES <span class="icon-svg icon-caret"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#caret"></use></svg></span></h2>
         <ul class="list-unstyled footer-list">
            <li><a href="http://dean.clas.ufl.edu">Dean</a> </li>
            <li><a href="http://advancement.clas.ufl.edu">Advancement and Alumni Affairs</a> </li>
		<li><a href="http://comms.clas.ufl.edu">Communications</a> </li>
            <li><a href="http://advising.ufl.edu">Advising</a> </li>
            <li><a href="http://it.clas.ufl.edu">IT Support</a> </li>

         </ul>
      </div>

   </div>

</div>


   <div class="footer-main-col-3"> 
          <div class="uf-campaign">
             <a href="http://www.ufl.edu" target="_blank"  alt="University of Florida" title="University of Florida" > 
             <img src="https://t5.publications.clas.ufl.edu/wp-content/themes/CLAS/assets/images/logos/GoGreater_round.svg" ><span class="SVGaltText">University of Florida Homepage</span>
             </a>
         <div class="hashtag">
            <span> #UFLibArtSci</span>
         </div>
        <div class="social">
            <ul class="social-nav">
 <?php 
   // Get all the social media links. These are set on the CLAS DEPT Theme Settings page
   $s = get_option('my_option_name');


   if ( !empty($s["fb"]) ): 
?>
               <li><a href="<?php  echo $s["fb"] ?>" alt="Share this page on Facebook" class="btn-circle icon-svg icon-facebook" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#facebook"></use></svg><span class="visuallyhidden">Facebook</span><span class="SVGaltText">Share this page on Facebook</span></a></li>  

<?php
endif;
 
   if ( !empty($s["twitter"]) ): 
?>
               <li><a href="<?php  echo $s["twitter"] ?>" alt="Share this page on Twitter" class="btn-circle icon-svg icon-twitter" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg><span class="visuallyhidden">Twitter</span><span class="SVGaltText">Share this page on Twitter</span></a></li> 

<?php
endif;

   if ( !empty($s["instagram"]) ): 
?>
              <li><a href="<?php  echo $s["instagram"] ?>" alt="Share this page on Instagram" class="btn-circle icon-svg icon-instagram" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#instagram"></use></svg><span class="visuallyhidden">Instagram</span><span class="SVGaltText">Share this page on Instagram</span></a></li>

<?php
endif;

   if ( !empty($s["youtube"]) ): 
?>
             <li><a href="<?php  echo $s["youtube"]   ?>" class="btn-circle icon-svg icon-youtube"  target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#youtube"></use></svg><span class="visuallyhidden">YouTube</span></a></li>

<?php
endif;


   if ( !empty($s["rss"]) ): 
?>
             <li><a href="<?php  echo $s["rss"]   ?>" alt="RSS feed" class="btn-circle icon-svg icon-rss"  target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#rss"></use></svg><span class="visuallyhidden">RSS</span></a></li>

<?php
endif;
?>









            </ul>
         </div>

          </div>
      
   </div>


</div>
</div>

<style>
   .footer-uf{
      position: relative;
      overflow: visible;
      display: block;
      width:100%;
      clear: both;
      bottom: 0px;
      padding:2rem;
      background-color: #004083;
      font-size:1rem;
      color: #ffffff;

   }

   .footer-uf-wrap{
      width: 100%;
      max-width: 1440px;
      margin: 0 auto;
      display: table;
   }
   .footer-uf a {
      color: #f19d64;
   }

.footer-uf-col-1{
   position: relative;
   display: table-cell;
   width: 70%;
   vertical-align: middle;
}
.footer-uf-col-2{
   position: relative;
   display: table-cell;
   width: 30%;
   vertical-align: middle;
   text-align: right;
}

.footer-uf-campaign-logo {
   float: right;
   text-align: right;
   vertical-align: middle;
}


/* Mobile images */
@media only screen and (min-width:0px) and (max-width :  481px) {
 .footer-uf{
      position: relative;
      overflow: visible;
      display: block;
      width:100%;
      clear: both;
      bottom: 0px;
      padding:2rem;
      background-color: #004083;
      font-size:.9rem;
      color: #ffffff;
   }

   .footer-uf-wrap{
      max-width: 1440px;
      margin: 0 auto;
   }
   .footer-uf a {
      color: #f19d64;
   }

.footer-uf-col-1{
   position: relative;
   display: block;
   width: 100%;
   vertical-align: middle;
  text-align: center; 
}
.footer-uf-col-2{
   position: relative;
   display: block;
   width: 100%;
   vertical-align: middle;
 
    
}

.footer-uf-campaign-logo {
   float: none;
   display: block;
   text-align: center;
   vertical-align: middle;
}


}

</style>
<div class="footer-uf">
   <div class="footer-uf-wrap">
   <div class="footer-uf-col-1"> 
      <p>
      &#169; 2018 University of Florida  |  <a href ="//assistive.usablenet.com/tt/referrer"> Text-only </a> 
      <p>
   </div>

   <div class="footer-uf-col-2"> 
      <div class="footer-uf-campaign-logo"  role="SVG" tabindex="0" aria-label="University of Florida Homepage">
          <a href="http://www.ufl.edu" target="_blank"  alt="University of Florida" title="University of Florida"> 
             <svg id="footer-icon-uf" class="footer-icon-uf"><use xlink:href="#footer-icon-uf"></use></svg><span class="SVGaltText">University of Florida Homepage</span>
          </a>
      </div>       
   </div>

</div>
</div>




<script>
/* Search Form */
   var searchBox = document.querySelector(".CLAS-searchTrigger");
   searchBox.onclick = function(e) { 
      e.preventDefault();
      e.stopPropagation(); 
      var searchIcon = document.getElementById('icon-search-thin-trigger'); 
      if (searchIcon.getElementsByTagName("use")[0].getAttribute('xlink:href') != '#icon-search-close' ) {
         document.getElementsByTagName("body")[0].classList.add('fixedPosition'); 
         searchIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-search-close");  
         searchIcon.classList.toggle('icon-search-thin-close');
         searchIcon.classList.remove('icon-search-thin-open');
      }
      else {
         document.getElementsByTagName("body")[0].classList.remove('fixedPosition'); 
         searchIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-search-thin-open");
         searchIcon.classList.remove('icon-search-thin-close');
         searchIcon.classList.toggle('icon-search-thin-open');


      }

      var searchContainer = document.querySelector(".CLAS-search-form-container");
      searchContainer.classList.toggle('show-search-form');
      var searchField = document.querySelector(".CLAS-search-form-container .search-form .search-field");
      earchField.focus();
      searchField.select();   
   };


/* Menu System */
      var el = document.getElementsByClassName('menuBox')[0];
      clickerFn = function(e) {     
 
      var nav = document.getElementsByClassName('navigation-top')[0];  
      var rowThree = document.getElementsByClassName('CLAS-menu')[0];  
      rowThree.classList.toggle('showMenu');    
      var menuIcon = document.getElementById('icon-menu');
      if (menuIcon.getElementsByTagName("use")[0].getAttribute('xlink:href') != '#icon-close' ) {
         //Global variable to keep track of how far the document has been scrolled
         var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
         // Figure out how far down the page has been scrolled by the user
         var doc = document.documentElement;
         //var left = (window.pageXOffset || doc.scrollLeft) - (doc.clientLeft || 0);
         window.toplocation = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
         menuIcon.classList.toggle('icon-close');
         menuIcon.classList.toggle('icon-menu');
         var XmenuBox = document.getElementsByClassName("menuBox")[0]; 
         XmenuBox.classList.add('show-menuBox'); 
         menuIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-close");
         //document.getElementsByTagName("body")[0].classList.add('fixedPosition'); 
        // nav.setAttribute("position", "relative");
      }
      else {
         menuIcon.classList.toggle('icon-menu');
         menuIcon.classList.toggle('icon-close');

          var XmenuBox = document.getElementsByClassName("menuBox")[0]; 
           XmenuBox.classList.add('show-menuBox'); 
         menuIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-fivelines");        
         //document.getElementsByTagName("body")[0].classList.remove('fixedPosition');
         // Scroll back to where the user was
         window.scrollTo(0, window.toplocation);  
         // Close any open submenus
         var g = document.getElementsByClassName("menu-item-has-children");
         for (var k = 0; k < g.length; k++) {  
            const mq = window.matchMedia( "(max-width: 1024px)" ); 
            if (mq.matches) {            
              g[k].classList.remove('open');   
               }
         }
  
      }

   };
el.addEventListener('click', clickerFn);  

/* Drop Down Menu System */
      var g = document.getElementsByClassName("menu-item-has-children");
      for (var k = 0; k < g.length; k++) {   
       //ONCLICK
         g[k].getElementsByTagName("a")[0].onclick = function(e) {
           // e.preventDefault();
           // e.stopPropagation();   
            const mq = window.matchMedia( "(max-width: 1024px)" ); 
            if (mq.matches) {            
              this.parentNode.classList.toggle('open');     
               }
            }//end mq
      }
    

/* Drop Down for Footer Menu */
      var g = document.getElementsByClassName("footer-menu");

      for (var k = 0; k < g.length; k++) {   
       //ONCLICK
       g[k].onclick = function(e) {
          

            const mq = window.matchMedia( "(max-width: 768px)" ); 
         if (mq.matches) {
            
            this.classList.toggle('open'); 
 
            if(this.getElementsByTagName('ul')[0].style.display == 'block'){
            this.getElementsByTagName("svg")[0].classList.add('icon-caret-down'); 
               e.preventDefault();
              // this.getElementsByTagName('ul')[0].style.display = 'none'; 
               e.stopPropagation(); 

             }  
             else{
            this.getElementsByTagName("svg")[0].classList.add('icon-caret-right'); 
               //this.getElementsByTagName('ul')[0].style.display = 'block';
               this.getElementsByTagName('ul')[0].classList.add('animate'); 
             }

    
       }

   }//end mq
}

</script>



















<script>
/* Menu System */
      var el = document.getElementsByClassName('menuBox')[0];
      clickerFn = function(e) {     
 
      var nav = document.getElementsByClassName('navigation-top')[0];  
      var rowThree = document.getElementsByClassName('X-menu')[0];  
      rowThree.classList.toggle('showMenu');    
      var menuIcon = document.getElementById('icon-menu');
      if (menuIcon.getElementsByTagName("use")[0].getAttribute('xlink:href') != '#icon-close' ) {
         //Global variable to keep track of how far the document has been scrolled
         var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
         // Figure out how far down the page has been scrolled by the user
         var doc = document.documentElement;
         //var left = (window.pageXOffset || doc.scrollLeft) - (doc.clientLeft || 0);
         window.toplocation = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
         menuIcon.classList.toggle('icon-close');
         menuIcon.classList.toggle('icon-menu');
         var XmenuBox = document.getElementsByClassName("menuBox")[0]; 
         XmenuBox.classList.add('show-menuBox'); 
         menuIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-close");
         document.getElementsByTagName("body")[0].classList.add('fixedPosition'); 
        // nav.setAttribute("position", "relative");
      }
      else {
         menuIcon.classList.toggle('icon-menu');
         menuIcon.classList.toggle('icon-close');

          var XmenuBox = document.getElementsByClassName("menuBox")[0]; 
           XmenuBox.classList.add('show-menuBox'); 
         menuIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-fivelines");        
         document.getElementsByTagName("body")[0].classList.remove('fixedPosition');
         // Scroll back to where the user was
         window.scrollTo(0, window.toplocation);  
         // Close any open submenus
         var g = document.getElementsByClassName("menu-item-has-children");
         for (var k = 0; k < g.length; k++) {  
            const mq = window.matchMedia( "(max-width: 1024px)" ); 
            if (mq.matches) {            
              g[k].classList.remove('open');   
               }
         }
  
      }

   };
el.addEventListener('click', clickerFn);  

/* Drop Down Menu System */
      var g = document.getElementsByClassName("menu-item-has-children");
      for (var k = 0; k < g.length; k++) {   
       //ONCLICK
         g[k].getElementsByTagName("a")[0].onclick = function(e) {
           // e.preventDefault();
           // e.stopPropagation();   
            const mq = window.matchMedia( "(max-width: 1024px)" ); 
            if (mq.matches) {            
              this.parentNode.classList.toggle('open');     
               }
            }//end mq
      }
    


      var g = document.getElementsByClassName("footer-menu");

      for (var k = 0; k < g.length; k++) {   
       //ONCLICK
       g[k].onclick = function(e) {
          

            const mq = window.matchMedia( "(max-width: 768px)" ); 
         if (mq.matches) {
            
            this.classList.toggle('open'); 
 
            if(this.getElementsByTagName('ul')[0].style.display == 'block'){
            this.getElementsByTagName("svg")[0].classList.add('icon-caret-down'); 
               e.preventDefault();
              // this.getElementsByTagName('ul')[0].style.display = 'none'; 
               e.stopPropagation(); 

             }  
             else{
            this.getElementsByTagName("svg")[0].classList.add('icon-caret-right'); 
               //this.getElementsByTagName('ul')[0].style.display = 'block';
               this.getElementsByTagName('ul')[0].classList.add('animate'); 
             }

    
       }

   }//end mq
}


/* Search Form */
   var searchBox = document.querySelector(".X-searchTrigger");
   searchBox.onclick = function(e) { 
      e.preventDefault();
      e.stopPropagation(); 
      var searchIcon = document.getElementById('icon-search-thin-trigger'); 
      if (searchIcon.getElementsByTagName("use")[0].getAttribute('xlink:href') != '#icon-search-close' ) {
         document.getElementsByTagName("body")[0].classList.add('fixedPosition'); 
         searchIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-search-close");  
         searchIcon.classList.toggle('icon-search-thin-close');
         searchIcon.classList.remove('icon-search-thin-open');
      }
      else {
         document.getElementsByTagName("body")[0].classList.remove('fixedPosition'); 
         searchIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-search-thin-open");
         searchIcon.classList.remove('icon-search-thin-close');
         searchIcon.classList.toggle('icon-search-thin-open');


      }

      var searchContainer = document.querySelector(".X-search-form-container");
      searchContainer.classList.toggle('show-search-form');
      var searchField = document.querySelector(".X-search-form-container .search-form .search-field");
      earchField.focus();
      searchField.select();   
   };





</script>


<script>
/* INDEX */

// PROTOTYPE: SlideShow 
   // METHOD: setSize
   // METHOD: setupSlides
   // METHOD: setupControls
   // METHOD: moveLeft
   // METHOD: moveRight
   // METHOD: changeImage
   // METHOD: addKeyControls

// PROTOTYPE: SlideShow extends SlideShow
   // METHOD: changeImage

// PROTOTYPE: Boxes 
   // METHOD: move

// PROTOTYPE: Boxes_Menu extends Boxes


/*------PROTOTYPE Slides------*/
// Implements a slideshow
function SlideShow(ID) {
   // CHECKS
   if(ID == null){
      console.error("Slides Module: Missing ID."); 
      return 0;
   }

   // Check if a string was passed
   if(typeof(ID) == "string"){
      this.ID = ID;
      this.mainDiv=document.getElementById(this.ID); 
      if(this.mainDiv == null){
         console.error("Slides Module: Could not find: " + this.ID); 
         return 0;
      }
    }
    else{
    // Check if an object was passed 
      this.mainDiv=ID;
      if(document.body.contains(ID)){
         console.error("Slides Module: Could not find Slide module in document."); 
         return 0;
      }
   }

   // Variables
   this.urlLength=0;               // Number of slide image URLs
   this.position = 0;              // Current slide position  
   this.previousSlide = 0;         // Previous slide position 
   this.slideShowStarted=false;    // Track if slideshow was started
   this.url = new Array();         // Store slide image URLs here 
   this.imageW = new Array();         // Store slide image width here 
   this.imageH = new Array();         // Store slide image height here 
   this.slideDesc = new Array();   // Store slide description here  
   this.magnifyObjs = new Array(); // Store slide image Magnification Objects here

   // Selectors
   this.slideDivs = this.mainDiv.getElementsByClassName('slide');
   this.slideDescDivs = this.mainDiv.getElementsByClassName('slideDesc'); 
   this.images = this.mainDiv.getElementsByTagName("img");

    this.left = this.mainDiv.getElementsByClassName('prev')[0];
    this.right = this.mainDiv.getElementsByClassName('next')[0];

   // STRUCTURE of Divs in document
   //  __SlideShow__
   // |     --slide       |
   // |       --slideDesc | 

    // Check if STRUCTURE is present in document
   //if(this.slideDivs.length==0 || this.slideDescDivs.length==0 || this.images.length==0){
   //   console.error("Slides Module: Detected missing structures in document. Refer to module for structure definition."); 
   //   return 0;
  // }


  

   // Set Defaults
   this.scrollLeft=0; 
   this.scrollTop=0; 

   // Trigger the dynamicResize() method whenever slides need to be re-sized
  // window.addEventListener("load", this.dynamicResize.bind(this), false);
   //window.addEventListener("orientationchange", this.dynamicResize.bind(this));
   //window.addEventListener("resize", this.dynamicResize.bind(this));


   // CSS for slideDiv is set in changeImage()  
   // Execute these once the prototype is created:

   var self=this; // 'this' is not preserved in callbacks, so send a copy to the callback functions
   this.left.onclick = function() {self.moveLeft();self.addKeyControls(self);};
   this.right.onclick = function() {self.moveRight();self.addKeyControls(self);};
   this.setupSlides();
   // All is well!
   console.log('Slides Module instantiated with ID:'+ID);
};


   // METHOD: onLoad()
   SlideShow.prototype.onLoad = function() {
      this.getImageDim.bind(this);
      this.dynamicResize.bind(this);      
   }

  // METHOD: setupControls()
   SlideShow.prototype.setupControls = function() {



      console.log("Setting up controls for " + this.ID); 
   };  



   // METHOD: moveLeft()
   SlideShow.prototype.moveLeft = function() { 
      if (this.position==0){  
         this.position=this.numSlides;
      }
      else{
         this.position--;
      }
     this.changeImage(this.position);

   };

   // METHOD: moveRight()
   SlideShow.prototype.moveRight = function() {
      if (this.position==this.numSlides){
         this.position=0;
      }
      else{      
         this.position++;
      }

      this.changeImage(this.position);
  
   
   };

   // METHOD: addKeyControls(self)
   SlideShow.prototype.addKeyControls = function(self) {
      document.onkeydown = function(e) {
         e = e || window.event;
         if (e.keyCode == '38') { // up arrow       
         }
         else if (e.keyCode == '40') { // down arrow
         }
         else if (e.keyCode == '37') { // left arrow      
            self.moveLeft(); 
         }
         else if (e.keyCode == '39') {       
            self.moveRight(); // right arrow
         }
      }
   };

   // METHOD: changeImage()
   SlideShow.prototype.changeImage = function() {    
     // Show Image         

         this.slideDivs[this.previousSlide].style.display="none"; // default 
         this.previousSlide=this.position;
         this.slideDivs[this.position].classList.add("fadeIn");
         this.slideDivs[this.position].style.display="block";
     


   };

   // METHOD: setupSlides()
   SlideShow.prototype.setupSlides = function() {      


      // Get Image URLs
      for (var i = 0; i < this.images.length; i++){ 
         this.url[i]= this.images[i].src;  
         //this.magnifyObjs[i] = new Magnify(this.images[i]);  
      }  

      // Hide slide descriptions
      for (var i = 0; i < this.slideDivs.length; i++){ 
         this.slideDivs[i].style.display="none";

      } 
      this.numSlides=(this.slideDivs.length-1);
      this.changeImage(this.position); // Setup first slide 
      console.log("Set up slides for " + this.ID); 
   };




  // Module name is the class name of the div
function findModules(ModuleName){
   this.ModuleName=ModuleName;
   // Find Module in document (modules are designated by class name)
   var e = document.getElementsByClassName(ModuleName); // returns an array
   if(e.length==0){
      console.log("Could not find module: " + this.ModuleName + " in document."); 
      return false;
    }
   for (var i = 0; i < e.length; i++){ 
      // Now get the unique instances of each module,
      // that is, get the ID of the div
      ModuleID=e[i].getAttribute("id"); 
      if(ModuleID=='' || ModuleID==null)
         console.error("Missing/wrong ID for Module:" + this.ModuleName); 

      // If a module was found, set it up
      if (ModuleID!=''){
         switch(ModuleName) {
            case 'slides': 
              var a = new SlideShow(ModuleID); 
            break;
            case 'SlideShowCover': 
              var b = new SlideShowCover(ModuleID); 
            break;
            case 'MenuTopLeft': 
               var d = new MenuTopLeft(ModuleID); 
            break;
            case 'MenuTopRight': 
               var e = new MenuTopRight(ModuleID); 
            break;
            case 'Boxes_Menu': 
               var f = new Boxes_Menu(ModuleID); 
            break;
            case 'Drag': 
               var g = new Drag(ModuleID); 
            break;
            case 'Magnify': 
               var h = new Magnify(ModuleID); 
            break;
            default:
               console.log("Could not any matching module for:" + this.ModuleName); 
         }        
      }
      else
         console.log("Could not find ID for Module:" + this.ModuleName); 
   } 
}


// SCRIPTS STARTS HERE: Module name is the class name of the div. Find modules on the page.
findModules('slides');
//findModules('SlideShowCover');

</script>

<script>
      var e = document.getElementsByClassName("X-tile");
      var sublist;
      var self=this; 
      for (var k = 0; k < e.length; k++) {     
          const mq = window.matchMedia( "(max-width: 768px)" ); 
         if (mq.matches) {
           // ONCLICK: Set up click event: toggle sublist 
         e[k].getElementsByClassName("X-tile-img")[0].onclick = function(e) {     
            //this.parentNode.getElementsByClassName('X-tile-desc')[0].classList.toggle('X-tile-desc-show'); 

         }

         } 
      }

</script>


<script>


  

/*
function Menu() {  
   //
   this.toggleSubMenu();
}

   // METHOD: toggleSubMenu
   Menu.prototype.toggleSubMenu = function() {

      var e = document.getElementsByClassName("menu-item-has-children");
      var sublist;
      var self=this; 
      for (var k = 0; k < e.length; k++) {     
         // Hide sublists
      

         const mq = window.matchMedia( "(max-width: 1300px)" ); 
         if (mq.matches) {
           
    e[k].getElementsByTagName('ul')[0].style.display = 'none';    






         // ONCLICK: Set up click event: toggle sublist 
         e[k].getElementsByTagName("a")[0].onclick = function(e) {
            e.preventDefault();
            e.stopPropagation();   
            //this.parentNode.getElementsByTagName('ul')[0].style.display = 'block'; 

            //this.getElementsByTagName("svg")[0].classList.add('icon-angle-down-toggle'); 
            //document.getElementsByTagName("body")[0].classList.add('fixedPosition'); 
            // Show Submenus
            if(this.parentNode.getElementsByTagName('ul')[0].style.display == 'none'){
           
               var n = this.parentNode.parentNode.firstChild;
               var skipMe = this.parentNode;
               // Hide all previous top-level drop down menus
               // If the grandparent is the main menu

               if (this.parentNode.parentNode.classList.contains('menu')){              
                  for ( ; n; n = n.nextSibling ) { 
                     if ( n.nodeType == 1 && n != skipMe){
                       var g= n.getElementsByTagName('ul'); 
                       if (g.length>0) {
                          g[0].style.display = 'none';
                          //n.getElementsByTagName("svg")[0].classList.remove('icon-angle-down-toggle');                        
                          // Hide any sub-menus that the user might have opened
                          var x = n.getElementsByClassName("sub-menu");
                          var i;
                          for (i = 0; i < x.length; i++) {
                             x[i].style.display = 'none';
                          } 
                          // Remove down arrows for any sub-menus that the user might have opened
                          var z = n.getElementsByTagName("svg");
                          var j;
                          for (j = 0; j < z.length; j++) {
                            // z[j].classList.remove('icon-angle-down-toggle'); 
                          } 
                       }
                    }
 
                  }
               } 


               this.parentNode.getElementsByTagName('ul')[0].style.opacity = '1';  
               this.parentNode.getElementsByTagName('ul')[0].style.visibility = 'visible';  
               this.parentNode.getElementsByTagName('ul')[0].style.display = 'block'; 
                   
             }
            // Hide Submenus
            else{          
            
               //this.getElementsByTagName("svg")[0].classList.remove('icon-angle-down-toggle');
                 //document.getElementsByTagName("body")[0].classList.remove('fixedPosition');  
               this.parentNode.getElementsByTagName('ul')[0].style.opacity = '0'; 
               this.parentNode.getElementsByTagName('ul')[0].style.visibility = 'none';
               this.parentNode.getElementsByTagName('ul')[0].style.display = 'none'; 

    
            }
         }


         } 



      }
   };

 var e = new Menu(); 

*/

</script>


<script>

/*
    $(".dropdown li").on('mouseenter mouseleave', function (e) {

        // Get the computed style of the body element
        var cStyle = document.body.currentStyle||window.getComputedStyle(document.body, "");

        // Check the overflow and overflowY properties for "auto" and "visible" values
        var hasVScroll = cStyle.overflow == "visible" 
                 || cStyle.overflowY == "visible"
                 || (hasVScroll && cStyle.overflow == "auto")
                 || (hasVScroll && cStyle.overflowY == "auto");
                 
        if (hasVScroll) {
            $(this).addClass('edge');
        } else {
            $(this).removeClass('edge');
        }
    });

*/


/* EDGE DETECTION */

      var g = document.getElementsByClassName("menu-item-has-children");

      for (var k = 0; k < g.length; k++) {   
       //ONCLICK
       g[k].onmouseover = function(e) {
          var cStyle = document.body.currentStyle||window.getComputedStyle(document.body, "");     
        // Check the overflow and overflowY properties for "auto" and "visible" values
            var elm = this.getElementsByTagName("ul")[0];
            var l = elm.offsetWidth; 
            var w = this.offsetLeft;
                   
            var docW = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
           
            var isEntirelyVisible = (l + w <= docW);
                 
        if (!isEntirelyVisible) { 
            elm.classList.add('X-menu-edge');

        } else {
            elm.classList.remove('X-menu-edge');
   
        }

    
       }
}



</script>


<script>






/*
var clickCount = 0;
   var searchBox = document.querySelector(".X-searchBox .search-form .search-submit");
      searchBox.onclick = function(e, clickCount) { 

    if (this.clickCount == 0){
        event.preventDefault(); 
        this.parentNode.classList.add('X-searchBox-open');
        this.clickCount++;
    }   
    else{
        return true;
    }
  

};

*/

/*
var w = window;
var d = document;
this.scrollStarted= true;


      w.addEventListener( 'scroll', function(scrollStarted) { 

        if ( w.innerHeight + w.scrollY === d.height ) {
            alert("You have hit the bottom!");
        }

        if ( w.scrollY > 50 && this.scrollStarted) { 
           this.scrollStarted = false; 
           var Xmenu = document.getElementsByClassName("X-menu-horizontal")[0]; 
          // Xmenu.style.border = '1px solid red';



           var g = document.getElementsByClassName("X-menu-horizontal")[0];   
           g.classList.add('hide-X-menu-horizontal');     
           g.classList.remove('show-X-menu-horizontal'); 
           var XmenuBox = document.getElementsByClassName("menuBox")[0]; 
           XmenuBox.classList.add('show-menuBox'); 
           XmenuBox.classList.remove('hide-menuBox'); 
 
        }

        if ( w.scrollY < 50 && !this.scrollStarted) {           
           var g = document.getElementsByClassName("X-menu-horizontal")[0];   
           g.classList.remove('hide-X-menu-horizontal');
           g.classList.add('show-X-menu-horizontal');      
           this.scrollStarted= true;  
           //Xmenu.style.border = '1px solid blue';
           var XmenuBox = document.getElementsByClassName("menuBox")[0]; 
           XmenuBox.classList.remove('show-menuBox');
           XmenuBox.classList.add('hide-menuBox'); 
 
        }


      });


*/
/* Detect User Scroll 
    (function( w, d ) {
      w.addEventListener( 'scroll', function() {
        if ( w.innerHeight + w.scrollY === d.height ) {
            alert("You have hit the bottom!");
        }
      });
    })( window, document );
*/
</script>

<script type="text/javascript">


   // var e = document.getElementById("vcv-editor");
   //   alert(e);


</script>



<?php wp_footer(); ?>
</body>
</html>
