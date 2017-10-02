<?php
/**
*
Template Name: Home Template
*
 */

get_header(); ?>
<?php
/* The loop: the_post retrieves the content
 * of the new Page you created to list the posts,
 * e.g., an intro describing the posts shown listed on this Page..
 */
if ( have_posts() ) :
    while ( have_posts() ) : the_post();

        // Display content of page
        //get_template_part( 'content', get_post_format() );
        the_content();
        wp_reset_postdata();

    endwhile;
endif; ?>

<div id="lightpurplewrap">
			<div class="grid">			
				<a id="Services"></a>
				<div class="col-1-3">
					<div id="imgcont">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/earth.png" />
						<p class="service-icon-title">Social Media</p>
						<p>Social Marketing is no longer a plus, it is a must! Connect with the world and drive your message. Let us do the hard work providing you with automation tools and statistical analysis, allowing you to focus on your brand.</p>
					</div>
					
				</div> <!-- col-1-3 -->
				<div class="col-1-3">
					<div id="imgcont">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/responsive.png" />
						<p class="service-icon-title">Responsive Design</p>
						<p>56%, That's the number of adults with smartphones according to <a href="http://pewinternet.org/Reports/2013/Smartphone-Ownership-2013/Findings.aspx">Pew</a> in 2013. From the largest screen to the smallest, we can ensure your visitors get the most optimal experience possible on all screen sizes.</p>
					</div>
					
				</div> <!-- col-1-3 -->
				<div class="col-1-3">
					<div id="imgcont">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/SEO.png" />
						<p class="service-icon-title">Search Engine Optimization</p>
						<p>According to <a href="http://chitika.com/google-positioning-value">Chitika</a>, the number 1 spot on Google sees 32.5% of the traffic compared to 17.6% on the number 2 spot. This reinforces the importance of SEO and we can help you drive your website to the top!</p>
					</div>
				</div> <!-- col-1-3 -->
				
			</div> <!-- grid -->
			

			
			<!--<div class="inner">
				<div id="twitwrap">
					<div class="leftcol" id="leftcol1"><p></br>Looking for a great deal on hosting? <a href="http://pixelprecisedesigns.com/deals/">Click here for 10% off!</a></p></div>
				</div>--><!-- id twitwrap --> 
			<!--	<div id="custquote"> 
					<div class="rightcol" id="rightcol1"><p class="quote">The web site that Pixel Precise designed for my company is wonderful, his understanding of what I needed was right on target.</p><p class="quote-source">David Loren <br /> EastbayCustomFlyrods.com</p>
						<p class="quote">The website created by Pixel Precise is awesome.  My ideas were implemented with ease and the end result is tasteful and professional. I will not hesitate to call on Pixel Precise for my future needs.</p><p class="quote-source">Adam Hathaway<br />Founder of ifoundmymoney.com</p></div>--><!-- id rightcol -->
				<!--</div><!-- id custquote -->
			<!--</div><!--inner-->
		<!--</div><!-- lightpurplewrap -->

	<div id="silverwrap">
		<div class="grid">
			<div class="col-1-2">
				<div class="colcont-1-2"><a id="contactlink"></a>
					<h1 id="h1title">Contact Us</h1><p>Call us: <a id="tel" href="tel:+13343576339">33-HELPME-EZ (334-357-6339)</p></a><?php echo do_shortcode('[contact-form-7 id="20" title="Contact form 1"]'); ?>
				</div>
			</div> <!-- col-1-2 -->
			<div class="col-1-2">
				<div class="colcont-1-2">
					<div id="inline-block"><p class="quote">The web site that Pixel Precise designed for my company is wonderful, his understanding of what I needed was right on target.</p><p class="quote-source">David Loren <br /> EastbayCustomFlyrods.com</p></div>
					<div id="inline-block"><p class="quote">The website created by Pixel Precise is awesome.  My ideas were implemented with ease and the end result is tasteful and professional. I will not hesitate to call on Pixel Precise for my future needs.</p><p class="quote-source">Adam Hathaway<br />Founder of ifoundmymoney.com</p></div>
				</div>			
			</div> <!-- col-1-2 -->
		</div> <!-- grid -->
	
	
	
	<!--<div class="inner">
	<a id="contactlink"></a>
			<div class="leftcol" id="leftcol2"><b>Pixel Precise LLC</b>, is a company committed to <b>helping you be the best</b> you can possibly be. We employ only the finest practices in <b>Customer Service, Web Design and Development, Internet Marketing, SEO</b> and much more... We strive to make the process as painless as possible for you; so, you can concentrate <b>on making your business a SUCCESS!</b></div>
			<!--<div class="rightcol" id="rightcol2"><h1 id="h1title">Contact Us</h1><p id="phone">Call us: <a href="tel:+13343576339">33-HELPME-EZ (334-357-6339)</p></a><?php echo do_shortcode('[contact-form-7 id="20" title="Contact form 1"]'); ?> </div>-->  
	<!--</div><!--inner-->
	</div> <!-- id silverwrap -->

<div id="darkpurplewrap">
		<div class="inner">
			<p><img id="twitlogo" src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/twitter-bird-light-bgs.png" /></p>
			<?php echo do_shortcode("[rotatingtweets screen_name='pixelprecise']"); ?>
		</div><!--inner-->				
</div> <!-- id darkpurplewrap -->

<?php get_footer(); ?>