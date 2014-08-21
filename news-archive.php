<?php 
if (isset($_REQUEST["json"]) && $_REQUEST["json"] == "true") {
    PrintArchiveJSON();
    die(); // dont execute rest of page
}

function PrintArchiveJSON() {
    echo '[{"url":"http://blkfeed.com", "title":"deprecated", "preview":"please use blkfeed, blackcoin.co newsfeed is deprecated", "date":"21-08-2014"}]';
}

function PrintArchive($json = false) {
    $newsData = json_decode(file_get_contents("http://blackcoinsquare.org:8080/php-helpers/newsData.php"));
	
	for($i = 0; $i < count($newsData); $i++){
		$item = $newsData[count($newsData)-$i-1];
		$date = isset($item->date) ? $item->date : "???";
		GetNewsArchive($item->url, $item->title, $date);
	}
}

function GetNewsArchive($url, $title, $date) { ?>
<li>
	<div class="event-text">
		<div class="event-details user-content">
			<h4 class="event-title"><a href="<?php echo $url; ?>"><?php echo $title; ?></a></h4>
			<div class="event-date">
				<?php echo $date;?>						
			</div>
		</div>
	</div>
</li>
<?php } ?>

<!DOCTYPE html>

<html lang="en-US">
    <head>
        <title>BlackCoin News Archive</title>
        <meta charset="UTF-8" />
        <meta name="description" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="msapplication-TileColor" content="#FFFFFF" />

        <link rel="shortcut icon" sizes="16x16 32x32 48x48 64x64" href="./img/favicon.png" />
        <link rel='stylesheet' href='./fonts/fonts.css?v=4' type='text/css' media='all' />
        <link rel='stylesheet' href='./css/style.css?v=4' type='text/css' media='all' />

        <script type='text/javascript' src='./js/jquery_main.js'></script>
        <script type='text/javascript' src='./js/jquery-minified.js'></script>
    </head>

    <body>
        <div class="pushWrapper">
            <!-- Header (shown on mobile only) -->

            <header class="pageHeader">
                <!-- Menu Trigger -->
                <button class="menu-trigger">
                    <span class="lines"></span>
                </button>
                <!-- Logo -->
                <a class="headerLogo smoothScroll" href="http://www.blackcoin.co">
                    <img style="margin-top:1.5%;padding-left:9.5%;display:inline-block;" src="./img/navlogo2.png" alt="BlackCoin"> <!--fix this-->
                </a>
            </header>

            <!-- Sidebar -->
            <div class="sidebar">
                <nav class="mainMenu">
                    <ul class="menu">
                        <li><a href="index.php" ><i class="icon-bbshield"></i><span class="text">BlackCoin Homepage</span></a></li>
                    </ul>
                </nav>
                <nav class="backToTop">
                    <ul class="backToTop-menu">
                        <li><a class="smoothScroll" href="#info" title="to the top"><i class="icon-cust-arrow"></i><span class="text">Back to top</span></a></li>
                    </ul>
                </nav>
            </div>

            <!-- Main -->
            <main>

                <!-- News Archive -->
                <section class="section-events" id="news">
                    <!-- Seperator -->
                    <div class="seperator">
                        <div class="contentContainer">
                            <h2>
                                <span class="sub">BlackCoin</span>
                                News Archive  
                            </h2>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="content">
                        <div class="contentContainer">
							<i>Note: all data is taken from <a style="color:#9E9E9E;" href="http://blkfeed.com/" target="_blank">blkfeed</a>, a BlackCoin social hub. If you want to download the official (old) news archive of blackcoin.co, click <a style="color:#9E9E9E;" href="blackcoin-news-archive.pdf" target="_blank">here</a>.</i>
                            <!-- News -->
                            <ul class="events-list" style="margin-top:18px;">
                                <li class="event-titles">
                                    <div class="event-title">Highlights</div>
                                    <div class="event-title">Date</div>
                                </li>
                                <?php
                                PrintArchive(); // call function
                                ?>
                            </ul>
                        </div>
                    </div>
                </section>
            </main>
        </div>
        <!--Analytics-->
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-45840836-2', 'blackcoin.co');
            ga('send', 'pageview');
        </script>

        <script type='text/javascript' src='./js/jquery.mobile.custom.min_2b23bb4a.js'></script>
        <script type='text/javascript' src='./js/modernizr.custom_2b23bb4a.js'></script>
        <script type='text/javascript' src='./js/response.min_2b23bb4a.js'></script>
        <script type='text/javascript' src='./js/idangerous.swiper.min_2b23bb4a.js'></script>
        <script type='text/javascript' src='./js/waypoints.min_2b23bb4a.js'></script>
        <script type='text/javascript' src='./js/jquery.stellar.min_2b23bb4a.js'></script>
        <script type='text/javascript' src='./js/main_2b23bb4a.js'></script>
    </body>
</html>