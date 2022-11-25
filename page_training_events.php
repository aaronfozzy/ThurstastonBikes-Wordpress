<?php
/*
 Template Name: Training & Events page
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
        	<div class="container ctrPad16">
            	<div class="col-1 maxInner ctrPad16">
                    <!--breadcrumbs -->
                    <div itemscope="" itemtype="http://schema.org/WebPage" class="breadcrumbs">
                        <p class="none"></p>
                        <a class="root" href="/">Home</a>
                        <a class="leaf" href="#">Tracs | Thurstaston Bike Shop &amp; Hire Training and Events</a>
                    </div>
                    <div class="col-1 training">
                    	<h1>Tracs | Thurstaston Bike Shop &amp; Hire Training and Events</h1>
                        <?php 
            	           $training_events_repeater = get_field('main_content');
            	           
            	           if( $training_events_repeater ) {
                                foreach( $training_events_repeater as $content ) {
                                    $content_title = $content['title'];
                                    $content_text = $content['body_text'];
                                    echo '<div class="col-2">';
                                    echo '<h3>'.$content_title.'</h3>';
                                    echo '<p>'.$content_text.'</p>';
                                    echo '</div>';
                                }
                            }
            	           ?>
                    </div>
                </div>
           	</div>
        </div>
    </div>


<?php get_footer(); ?>

<?php echo '<script>
var elems = jQuery(".col-2"),
wrapper = jQuery("<div class=\"col-1 gutter32\" />");
for (var i = 0;i < elems.length;i+=2){
    elems.filter(":eq("+i+"),:eq("+(i+1)+")").wrapAll(wrapper);
};
</script>'; ?>