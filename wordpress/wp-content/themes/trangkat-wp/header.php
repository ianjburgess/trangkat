<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Simple Blog Theme
 */
?>
<!DOCTYPE html>
<html lang="en-AU">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head(); ?>
    </head>

    <body>
        <div class="logo navbar-fixed-top" style="height: 50px">
            <a href="index.html" title="Trang Kat Photography - Melbourne Newborn, Maternity & Family Photographer"><img style="height:100px;" src="../img/logo2.png" alt="Trang Kat Photography - Melbourne Newborn, Maternity & Family Photographer"></a>
        </div>
        
        <nav class="navbar navbar-default navbar-fixed-top" id="nav1" role="navigation">
            <!-- Nav toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-main-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

             <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'nav-main-collapse',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker())
                );
            ?>

        </nav>

            <?php /*
            

            <nav class="navbar navbar-default navbar-fixed-top" id="nav1" role="navigation">

                <!-- Nav toggle -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Nav Items -->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <li class=""><a href="pages/about.html">About</a></li>
                        <li class="">
                            <a id="dLabel" data-target="#" href="pages/pricing.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                Pricing
                                <span class="caret"></span>    
                            </a>
                            <ul class="dropdown-menu dropdown" aria-labelledby="dLabel">
                                <li class=""><a href="pages/pricing.html">Packages</a></li>
                                <li class=""><a href="pages/prints.html">Prints</a></li>
                            </ul>
                        </li>

                        <li class="">
                            <a id="dLabel" data-target="#" href="pages/sessions-newborn.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                Session Information
                                <span class="caret"></span>    
                            </a>
                            <ul class="dropdown-menu dropdown" aria-labelledby="dLabel">
                                <li class=""><a href="pages/sessions-newborn.html">Newborn FAQ's</a></li>
                                <li class=""><a href="pages/sessions-family.html">Baby & Family FAQ's</a></li>
                                <li class=""><a href="pages/sessions-maternity.html">Maternity FAQ's</a></li>
                            </ul>
                        </li>
                        <li class=""><a id="dLabel" data-target="#" href="pages/gallery.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Gallery
                            <span class="caret"></span>    
                        </a>
                        <ul class="dropdown-menu dropdown" aria-labelledby="dLabel">
                            <li class=""><a href="pages/gallery.html">Newborn</a></li>
                            <li class=""><a href="pages/gallery/maternity.html">Maternity</a></li>
                            <li class=""><a href="pages/gallery/kids.html">Baby + Kids</a></li>
                            <li class=""><a href="pages/gallery/family.html">Family</a></li>
                            <li class=""><a href="pages/gallery/cakesmash.html">Cake Smash</a></li>
                        </ul>
                        </li>
                        <li class=""><a href="pages/contact.html">Contact</a></li>
                        <div class="social-icon list-style-none" style="right: 0px;">
                            <li><a href="https://www.facebook.com/TrangKatphoto/" target="_blank"><img src="img/glyphicons-social-31-facebook.png" alt="button to our facebook page"></a><a href="https://www.instagram.com/trangkatphotography/" alt="button to our instagram page"><img src="img/glyphicons-social-33-instagram.png"></a></li>
                        </div>
                    </ul>
                </div>
            </nav> 
           */ ?>