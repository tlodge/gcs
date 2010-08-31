<?php
// $Id: page.tpl.php,v 1.28.2.1 2009/04/30 00:13:31 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
    <head>
     	<?php print $head ?>
  		<title><?php print $head_title ?></title>
  		<?php print $styles ?>
  		<?php print $scripts ?>
  		<script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
        <link rel="stylesheet" media="print" type="text/css" href="css/print.css" />
       
    </head>
    <body>
        <div id="main">
            <!-- Header -->
            <div id="header">
                <h1 id="logo"><a href="./" title="[Go to homepage]"><img src="/sites/all/themes/gcs/tmp/logo.png" alt="" /></a></h1><hr class="noscreen" /><!-- Navigation -->
                <div id="nav">
                   <?php if (isset($secondary_links)) { ?><?php print theme('links', $secondary_links, array('class' => 'links', 'id' => 'subnavlist')) ?><?php } ?>
                </div><!-- /nav -->
            </div>
            
          
            <?php if ($top) { ?>
            	<div id="col-top"></div>
            	<div id="col" class="box">
            		<?php print $top?>
            	</div><!-- /col -->
      			<div id="col-bottom"></div>
             <?php } ?>
            
            <!-- /header --><!-- Tray -->
            <div id="tray">
             	<?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' => 'links', 'id' => 'navlist')) ?><?php } ?>
                <!-- Search -->
                <div id="search" class="box">
                    <form action="#" method="get">
                        <div class="box">
                            <div id="search-input">
                                <span class="noscreen">Search:</span>
                                <input type="text" size="30" name="" value="Search" />
                            </div>
                            <div id="search-submit">
                                <input type="image" src="/sites/all/themes/gcs/design/search-submit.gif" value="OK" />
                            </div>
                        </div>
                    </form>
                </div><!-- /search --><hr class="noscreen" />
            </div><!-- /tray --><!-- Promo -->
            
            <hr class="noscreen" /><!-- 2 columns -->
            <div id="cols2-top">
            	 
            </div>
            <div id="cols2" class="box">
            
                <!-- Column I. -->
                
                <div id="col-left">
                	
                 	<?php if ($show_messages) { print $messages; } ?>
        			<?php print $help ?>
                	<div class="tabs"><?php print $tabs ?></div>
                    <!-- <div class="col-text">-->
                        <?php print $content; ?>
                    <!-- </div>-->
                </div><!-- /col -->
                
                <hr class="noscreen" />
                
                <!-- Column II. -->
                
                <div id="col-right">
                 		<?php if ($right) { ?>
      					<?php print $right ?>
    					<?php } ?>     
                </div>
                <!-- /col --><hr class="noscreen" />
            </div><!-- /cols3 -->
            <div id="cols2-bottom">
            </div>
            <!-- 2 columns -->
            <div id="cols2-top">
            </div>
            <div id="cols2" class="box">
                <!-- Blog -->
                <div id="col-left">
                    <div class="title">
                        <span class="f-right"><a href="#" class="ico-rss">RSS feed</a></span>
                        <h4>Blog</h4>
                    </div>
                    <!-- /title -->
                    <ul class="ul-list nomb">
                        <li>
                            <span class="f-right"><a href="#" class="ico-comment">45 comments</a></span>
                            <span class="date">27.09.2008</span>
                            <a href="#" class="article">Lorem ipsum dolor sit amet</a>
                        </li>
                        <li>
                            <span class="f-right"><a href="#" class="ico-comment">45 comments</a></span>
                            <span class="date">27.09.2008</span>
                            <a href="#" class="article">Lorem ipsum dolor sit amet</a>
                        </li>
                        <li>
                            <span class="f-right"><a href="#" class="ico-comment">45 comments</a></span>
                            <span class="date">27.09.2008</span>
                            <a href="#" class="article">Lorem ipsum dolor sit amet</a>
                        </li>
                        <li>
                            <span class="f-right"><a href="#" class="ico-comment">45 comments</a></span>
                            <span class="date">27.09.2008</span>
                            <a href="#" class="article">Lorem ipsum dolor sit amet</a>
                        </li>
                        <li>
                            <span class="f-right"><a href="#" class="ico-comment">45 comments</a></span>
                            <span class="date">27.09.2008</span>
                            <a href="#" class="article">Lorem ipsum dolor sit amet</a>
                        </li>
                    </ul>
                </div>
                <!-- /col-left --><hr class="noscreen" /><!-- Testimonials -->
                <div id="col-right">
                    <h4><span>Testimonials</span></h4>
                    <div class="box">
                        <div class="col-right-img">
                            <img src="tmp/65x65.gif" width="65" height="65" alt="" />
                        </div>
                        <div class="col-right-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc feugiat. <strong>In a massa.</strong>
                                In feugiat pharetra lacus. In non arcu nec libero pharetra rutrum.
                            </p>
                            <p class="high smaller">
                                &ndash; 
                                <cite>
                                    John Doe, Some Corporation
                                </cite>
                            </p>
                        </div>
                        <!-- /col-right-text -->
                    </div>
                    <!-- /box -->
                </div>
                <!-- /col-right -->
            </div>
            <!-- /cols2 -->
            <div id="cols2-bottom">
            </div>
            <hr class="noscreen" /><!-- Footer -->
            <div id="footer">
                <?php print $footer_message ?>
  				<?php print $footer ?>
                <!-- 
                <p class="f-right">
                    <a href="http://www.nuviotemplates.com/">Free web templates</a>
                    by <a href="http://www.nuvio.cz/">Nuvio</a>
                    &ndash; Our tip: <a href="http://last-minute.invia.pl">Wakacje</a>
                    <a href="http://dovolenka.invia.sk">Dovolenka</a>
                </p>
                <p>
                    Copyright &copy;&nbsp;2008 <strong><a href="#">Your Name</a></strong>, All Rights Reserved &reg;
                </p>
                 -->
            </div>
            <!-- /footer -->
        </div>
        <!-- /main -->
        <?php print $closure?>
    </body>
</html>

