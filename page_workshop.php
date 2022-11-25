<?php
/*
 Template Name: Workshop page
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
                        <a class="leaf" href="#">Tracs | Thurstaston Bike Shop &amp; Hire Workshop</a>
                    </div>
                    <div class="col-1">
                    	<h1>Tracs | Thurstaston Bike Shop &amp; Hire Workshop</h1>
                        <p>We offer great service and competitive prices on all aspects of maintenace. Our Cytech level 2 and 3 qualified technicians are here to help you with everything from repairing a flat to building your custom dream bike.</p>
                        
                        <h3>Pricelist</h3>
                        <div class="col-1 workshop gutter32">
                            <div class="silver col-3">
                                <div class="zflex-sb">
                                    <h3>P.D.I (Pre-Despatch Inspection)</h3>
                                    <div class="wsPrice">£45</div>
                                </div>
                                <ul class="checkList">
                                    <li>A basic service and safety check to ensure correct adjustment of brakes, gears, and all moving parts. All bolts are torqued to manufacturers specifications. Replacement parts will cost extra.
                                    </li>
                                </ul>
                            </div>
                            <div class="gold col-3">
                                <div class="zflex-sb">
                                    <h3>Intermediate Service</h3>
                                    <div class="wsPrice">£65</div>
                                </div>
                                <ul class="checkList">
                                    <li>This Intermediate Service includes the above actions as well as inspection for wear and damage of all parts. Bicycle cleaned and degreased. Adjustment of bearings, Cleaning and re-lubrication of drivetrain components. Wheel Truing, Gear cables will be fitted FREE of charge. Recommended every 6 months. Replacement parts extra.
                                    </li>
                                </ul>
                            </div>
                            <div class="platinum col-3">
                                <div class="zflex-sb">
                                    <h3>E-Bike Service</h3>
                                    <div class="wsPrice">£85 (includes software update)
                                    </div>
                                </div>
                                <ul class="checkList">
                                    <li>Run system diagnostic, inspect for wear and damage, configure brakes and gears, complete clean and degrease, adjust bearings, lubricate the drivetrain, and true wheels.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <?php
                        $allprices_repeater = get_field('full_services_prices');
                        
                        if($allprices_repeater){
                            echo '<div class="col-1 gutter32">';
                            foreach($allprices_repeater as $service){
                                $service_name = $service['service_name'];
                                $service_description = $service['service_description'];
                                $service_price = $service['service_price'];
                                $checkbox_value = $service['left_column'];
                                
                               if(in_array('yes', $checkbox_value)){
                                    echo '<div class="prices-left-col">';
                                	echo '<li>';
                                    echo '<strong>'.$service_name.'</strong>';
                                    echo '<strong>£'.$service_price.'</strong>';
                                    echo '</li>';
                                    echo $service_description;
                                    echo '</div>';
                                } else{
                                	echo '<div class="prices-right-col">';
                                	echo '<li>';
                                    echo '<strong>'.$service_name.'</strong>';
                                    echo '<strong>£'.$service_price.'</strong>';
                                    echo '</li>';
                                    echo $service_description;
                                    echo '</div>';
                                }
                            }
                            
                            echo '</div>';
                        }
                    ?>
                    </div>
                </div>
           	</div>
        </div>
    </div>


<?php get_footer(); ?>

<?php echo '<script>
jQuery( ".prices-left-col" ).wrapAll("<div class=\"col-2\" /> <ul class=\"leaders\" />");

jQuery( ".prices-right-col" ).wrapAll("<div class=\"col-2\" /> <ul class=\"leaders\" />");
</script>'; ?>