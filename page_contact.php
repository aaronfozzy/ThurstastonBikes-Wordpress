<?php
/**
  * Template name: Contact form
 *
 * @package custom
 */

get_header(); ?>

<div class="wrapper">
    <div class="grid fixed">
        <div class="container">
		    <div class="col-1 maxInner ctrPad32">
        
                <!--breadcrumbs -->
                <div itemscope="" itemtype="http://schema.org/WebPage" class="breadcrumbs">
                    <p class="none"></p>
                    <a class="root" href="/">Home</a> <a class="leaf" href="#:;">Contact Tracs | Thurstaston Bike Shop &amp; Hire</a> 
                </div>
              
                <h1>Contact Tracs | Thurstaston Bike Shop &amp; Hire</h1>
              
                <div class="col-70p">
                    <?php echo do_shortcode( '[contact-form-7 id="14" title="Contact us form"]' );?>
                </div>
                    
                <div class="col-30p">
                    <div class="further-contact">
                        <h3>Quick Contact</h3>
                        <p>(Book via email info@tracs-uk.co.uk or phone 01513192455)</p>
                        <p>Thurstaston Bike Hire,
                        Wirral Country Park,
                        Station Road,
                        Thurstaston,
                        Merseyside,
                        CH61 0HN
                        </p>
                    </div>
        			
                    <div class="contact-hours">
                        <h3>Opening Hours</h3>
                        <p>Saturday 10:00am - 5:00pm</p>
                        <p>Sunday 10:00am - 5:00pm</p>
                        <p>Weekday's by appointment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();