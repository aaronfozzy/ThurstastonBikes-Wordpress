<?php
/*
 Template Name: Delivery page
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
            	<div class="col-1 maxInner ctrPad16">
                    <!--breadcrumbs -->
                    <div itemscope="" itemtype="http://schema.org/WebPage" class="breadcrumbs">
                        <p class="none"></p>
                        <a class="root" href="/">Home</a>
                        <a class="leaf" href="#">Tracs | Thurstaston Bike Shop &amp; Hire Delivery Details</a>
                    </div>
                    <h1>Tracs | Thurstaston Bike Shop &amp; Hire Delivery Details</h1>
                    <div class="col-1" style="display:none"></div>
                    <div class="col-1">


                   		<!-- Chart information -->
                    	<span id="ShippingChartCourierIntegration_lblError" class="ErrorMessage"></span>


        <div class="col-1 courierchart" style="">
                            
                                    <ul class="col-1 zflex-ws courierservicewrap">
                                
									<li class="ctrPad16 courierservice"><span class="col-1 courierserviceheader">Standard Delivery</span>
                                                                              

                                        
                                                <ul class="col-1">
                                            
                                                <li><span style="display: none;">For orders weighing between 0kg -1000000kg </span>
                                                    <span class="col-1 courierservicecharge" style="display: block;">Delivery Charges</span>
                                                    <!-- This will show if the service has different prices by weight and a weight table will render -->
                                                    
                                                            <ul class="col-1">
                                                        
                                                            <li>
                                                                <span class="courierprice" style="display: block;">
                                                               		<span style="display: block;">
																		£6.00
																	</span>
                                                               		<span style="display: none;">
																		Spend over £0, delivery is £6.00
																	</span>
                                                                </span>
                                                                 <span class="courierprice" style="display: none;">£6.00</span>
                                                            </li>
                                                        
                                                            <li>
                                                                <span class="courierprice" style="display: block;">
                                                               		<span style="display: none;">
																		FREE
																	</span>
                                                               		<span style="display: block;">
																		Spend over £50, delivery is FREE
																	</span>
                                                                </span>
                                                                 <span class="courierprice" style="display: none;">FREE</span>
                                                            </li>
                                                        </ul>
                                                </li>
                                            
                                                </ul>
                                            

                                    </li>


                                
                                    </ul>
                                
                        </li></div>
    

                    </div>
                    
                    <div class="col-70p" id="click-collect">
							 <h1>Tracs | Thurstaston Bike Shop &amp; Hire Click &amp; Collect</h1>  
						   <div style="display:">
								<div class="midleText">
                                <?php 
                                $main_copy = get_field('click_and_collect_copy');
                                echo $main_copy;
                                ?>
							  </div>
                        </div>
                </div>
           	</div>
        </div>
    </div>


<?php get_footer(); ?>