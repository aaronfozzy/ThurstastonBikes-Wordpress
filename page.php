<?php get_header(); ?>

<div class="wrapper">
    	<div class="grid fixed">
        	<div class="container">
            	<div class="col-1 maxInner ctrPad16">
                    <!--breadcrumbs -->
                    <div itemscope="" itemtype="http://schema.org/WebPage" class="breadcrumbs">
                        <p class="none"></p>
                        <a class="root" href="/">Home</a>
                        <a class="leaf" href="#">Tracs | Thurstaston Bike Shop | <?php the_title(); ?></a>
                    </div>
                    <h1>Tracs | Thurstaston Bike Shop</h1>
                    <div class="col-1">
                        <h2><?php the_title(); ?></h2>
                       	<p><?php the_content(); ?></p>
                    </div>
                </div>
           	</div>
        </div>
    </div>



<?php get_footer(); ?>
