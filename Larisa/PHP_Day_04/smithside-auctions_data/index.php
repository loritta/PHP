<?php
/*
 * index.php
 * 
 * content for the Main
 * 
 * @version 1.2.2018-04-16
 * @package SmithSide Auction RS
 * @copyright (c) 2018, Larisa Sabalin
 * @license GNU General Public License
 * @since Release 1.0
 */
require_once 'includes/functions.php'
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Home | Smithside Auctions 2018</title>
        <link href="css/main.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div id="container">

            <div id="header">
                <a href="index.php">
                    <img src="images/banner.jpg"  alt="Smithside Auctions" />
                </a> 
            </div><!-- end header -->

            <div id="navigation">
                <h3 class="element-invisible">Menu</h3>
                <ul class="mainnav">
                    <li><a href="index.php?content=categories">Lot Categories</a></li>
                    <li><a href="index.php?content=about">About Us</a></li>
                    <li><a href="index.php?content=home">Home</a></li>


                </ul>
                <div class="clearfloat"></div>
            </div><!-- end navigation -->

            <div class="message">
            </div><!-- end message -->	

            <div class="sidebar">
                <?php
                loadContent('sidebar','')
                /*
                if (isset($_GET['content'])):
                    switch (($_GET['content'])):
                        case 'gents':
                        case 'sporting':
                        case 'women':
                            include 'content/catnav.php';
                    endswitch;
                endif;*/
                ?>

            </div><!-- end sidebar -->

            <div class="content">
                <?php
                loadContent('content','home')
                ?>

            </div><!-- end content -->

            <div class="clearfloat"></div>

            <div id="footer">
                <p>&copy; <?php date('Y')?> Your Initials Smithside Auctions</p>
            </div><!-- end footer -->

        </div><!-- end container -->
    </body>
</html>
