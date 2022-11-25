<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

		    <header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

                <div class="wrapper masthead">
                    <div class="grid fixed">
                        <div class="container">
                			<div class="col-1">
                				<!-- desktop -->
                				<div class="col-1 navIcons zflex-s">
                					<span class="col- logoContainer">
                						<a class="logo navOption" alt="Shop online at Tracs | Thurstaston Bike Shop & Hire" href="/"></a>
                					</span>
                					<span id="navi" class="col- ctrNavigation tbcnt flex-grow1">
                					    <div class="CSSFacetNavModules"></div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
    
                <div class="col-1 menuOptions">
                    <!-- Search -->
                	<div id="search" class="srchCtr tbcnt">
                	    <div id="TopBanner1_clSearch1_containerSearch">
                	        <input type="hidden" name="TopBanner1$clSearch1$rootCategoryHidden" id="rootCategoryHidden" />
                            <input type="hidden" name="TopBanner1$clSearch1$tierLimitHidden" id="tierLimitHidden" value="3" />
                            <span class="icon-search"></span>
                            <input name="TopBanner1$clSearch1$txtTerm" id="txtTerm" class="searchBoxForm" placeholder="Search" type="search" />
                            <a id="lnkSearch" class="searchButton" href="javascript:__doPostBack(&#39;TopBanner1$clSearch1$lnkSearch&#39;,&#39;&#39;)"></a>
                
                        </div>
                	</div>
                	<!-- Login -->
                	<div id="login" class="loginCtr ctrPad32 tbcnt">
                		<div class="col-1">
                			<div class="boldfont large">Your Profile</div>
                			<div id="clLogin1-dev"></div>
                			<div id="consumercontent" style='display:none'>
                			    <div id="CustomerRewardsDisplay1-dev" ></div>
                			</div>
                		</div>
                	</div>
                	<!-- Basket -->
                	<div id="basket" class="basketCtr tbcnt">
                        <!-- Basket - Start -->
                        <div class="col-1 minibasket-toggles zflex-s">
                            <div class="col- flex-grow1 activeminilink" data-boxlink="minibasket-basket">Your Basket <span class="basketPip2 coWhite bgStandard">0</span></div>
                            <div class="col- flex-grow1 hideme" data-boxlink="minibasket-starbuys">Your Offers <span class="sbuy-offers coWhite">0</span></div>
                        </div>
                        <div class="col-1 ctrPad32" data-boxcontext="minibasket-basket">
                            <div id="CCart-dev" class="col-1">
                                <div class="col-1 centralise">
                                    <div class="cart-lds-ellipsis">
                                        <div data-loadingdot="1"></div>
                                        <div data-loadingdot="2"></div>
                                        <div data-loadingdot="3"></div>
                                        <div data-loadingdot="4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Basket - End -->
                        <!-- Starbuys - Start -->
                        <div class="col-1 ctrPad32" data-boxcontext="minibasket-starbuys" style="display:none;">
                            <div class="col-1">
                                <span class="smiley-loading-anim" data-status="loading">
                                    <img src="/wp-content/themes/custom/assets/images/sad.gif" width="24" height="24" border="0" alt="Star Buy Promotions" title="Star Buy Promotions" />
                                    <img src="/wp-content/themes/custom/assets/images/cool.gif" width="24" height="24" border="0" alt="Star Buy Promotions" title="Star Buy Promotions" />
                                <span></span>
                                </span>
                            </div>
                            <div class="col-1" id="starbuy-header-item-container"></div>
                        </div>
                        <!-- Starbuys - End -->
                        <div class="col-1 ctrPad32 border3 removeborder-bottom removeborder-left removeborder-right">
                			<div id="MiniBasketMerchandiseTotal" class="col-1 small ctrPad8-bottom"></div>
                			<div id="CCartFreeMSG" class="col-1">
                				<span></span>
                            </div>
                            <div class="col-1 zflex-vs CCartBut">
                				<div class="col-2"><a id="ContinueLink" title="Continue Shopping" href="#" onclick="clearAll();return false;" class="col-1 button ghost-button">Continue Shopping</a></div>
                				<div class="col-2"><a href="/shoppingcart.aspx" class="col-1 button btnCDBlue">Checkout</a></div>
                			</div>
                        </div>
                	</div>
                </div>
    
                <div class="col-1" id="topBannerStrip">
                	<div class="grid fixed">
                		<div class="col-1 zflex">
                			<a href="/workshop/"><span class="icon-settings"></span> <h4>Services &amp; Repairs</h4></a>
                			<a href="https://www.delamerebikes.co.uk/"><span class="icon-calendar"></span> <h4>Online Shop</h4></a>
                			<a href="/pricing/"><span class="icon-disc"></span> <h4>Thurstaston Bike Hire</h4></a>
                			<a href="https://www.delamerebikes.co.uk/"><span class="icon-disc"></span><h4>Delamere Bike Hire</h4></a>
                			<a href="https://thurstastonbikes.delta-xray.co.uk/contact/"><span class="icon-phone"></span><h4>Contact Us</h4></a>
                		</div>
                	</div>	
                </div>
                
                <div id="body-wrapper-overlay"></div>
    
                <div id="GDPRCookieBox" class="centralise">
                	<div class="GDPRCookieBox-text col-1">To improve your shopping experience today and in the future, this site uses cookies.</div>
                	<div class="col-1">
                		<a class="GDPRCookieBox-link" href="/privacypolicy/">Read our full Privacy Policy & Cookie information here</a>
                	</div>
                	<div class="GDPRCookieBox-button GDPRCookieBox-accept" onclick="GDPRCookies(false, true);">I Accept Cookies</div>
                </div>
			</header>
