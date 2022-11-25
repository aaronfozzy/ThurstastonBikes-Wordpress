<?php
/*
 Template Name: Pricing Page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<div class="wrapper">
    	<div class="grid fixed">
        	<div class="container">
            	<div class="col-1 maxInner">
						
                    <div class="col-1">
						<div class="col-2 ctrPad32">
							<h1>Tracs | Thursaston Bikes, Cycle Hire & Repairs</h1><div class="col-1"><h3>Cycle Hire and Repairs</h3><h3>Free collection on repairs in the local area</h3><p>To book bike hire or to arrange a bike collection, call us on: 0151 3192455 or Email us at: info@tracs-uk.co.uk<br>Wirral Country Park, Station Road, Thurstaston, Merseyside, CH61 0HN</p>
							
							<table border="0" width="100%" cellspacing="0" cellpadding="14"><tbody><tr style="background: black;"><td><strong>Hire Prices</strong></td><td></td><td><strong></strong></td></tr><tr><td><strong>Mountain bike</strong></td><td><strong>£20</strong></td><td><strong>3 hour hire</strong></td></tr><tr><td><strong>Kids mountain bike</strong></td><td><strong>£15</strong></td><td><strong>3 hour hire</strong></td></tr><tr><td><strong>Tagalong trailier bike*</strong></td><td><strong>£8</strong></td><td><strong></strong></td></tr><tr><td><strong>Child seat*</strong></td><td><strong>£6</strong></td><td><strong></strong></td></tr><tr><td><strong>Buggy*</strong></td><td><strong>£8</strong></td><td><strong></strong></td></tr><tr><td><strong>Dog trailer</strong></td><td><strong>£8</strong></td><td><strong></strong></td></tr></tbody></table>
							
							<p></p</p><p>Open weekends, pre-book for weekdays.</p><p>Helmet - No additional charge.<br>Minimum Age requirement of 12 months of age for the hire of Buggys and Child seats.</p><p>Prices are inclusive of VAT</p><p>Valid photo ID or authorised payment card must be left as deposit during the period of hire.</p><p>Helmets MUST be worn at all times.</p><p>Please note age restriction applies, a responsible adult must accompany anyone under 16yrs</p><p>* for hire with Tracs rental bikes only</p></div>
						</div>
							
						<div class="col-2 ctrPad32">
							<img src="https://thurstastonbikes.delta-xray.co.uk/wp-content/themes/custom/assets/images/bike-map.jpg">
						</div>
							
                    </div>
						
                </div>
           	</div>
        </div>
    </div>
<!--
			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<//?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<//?php the_ID(); ?>" <//?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><//?php the_title(); ?></h1>

								</header>

								<section class="entry-content cf" itemprop="articleBody">
									<//?php
										// the content (pretty self explanatory huh)
										the_content();

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'customtheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								</section>


								<//?php comments_template(); ?>

							</article>

							<//?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><//?php _e( 'Oops, Post Not Found!', 'customtheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><//?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'customtheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><//?php _e( 'This is the error message in the page-custom.php template.', 'customtheme' ); ?></p>
										</footer>
									</article>

							<//?php endif; ?>

						</main>

				</div>

			</div>

-->
<?php get_footer(); ?>
