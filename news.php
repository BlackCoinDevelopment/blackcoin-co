<?php
include('lib.pdo.php');
include('config.inc.php');

$id = filter_var($_REQUEST["page"], FILTER_SANITIZE_NUMBER_INT);
$result = Db::Query("SELECT * FROM `wp_posts` WHERE ID = '$id' AND post_status = 'publish'");

$title = "";
$content = "";
$author = "";
$date = "";

while ($row = Db::Fetch($result)) {
    $title = utf8_encode($row->post_title); // title
    $content = nl2br($row->post_content);
//    $content = nl2br($content); // All content of the article

    $date_parts = explode(' ', $row->post_date);
    $date = $date_parts[0];

    $uid = $row->post_author;
    $resultUser = Db::Query("SELECT * FROM `wp_users` WHERE ID = '$uid'");
    while ($rowUser = Db::Fetch($resultUser)) {
        $author = $rowUser->display_name;
    }
}

if (isset($_REQUEST["json"]) && $_REQUEST["json"] == "true") {
    $arr = array();
    $arr["title"] = $title;

    // Get first 20 preview lines
    $preview = implode(' ', array_slice(explode(' ', $content), 0, 20));
    $preview .= "...";
    $preview = utf8_encode($preview);

    $arr["description"] = $preview;
    $arr["content"] = $content;
    $arr["date"] = $date;
    $arr["author"] = $author;
    //print_r(json_encode($arr));
    echo htmlspecialchars(json_encode($arr), ENT_NOQUOTES);
    die();
}
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>BlackCoin, Currency of the Future</title>
        <meta name="description" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <!-- Basic favicons -->
        <link rel="shortcut icon" sizes="16x16 32x32 48x48 64x64" href="../../img/favicon.png" />
        <!-- Windows 8 Tiles -->
        <meta name="msapplication-TileColor" content="#FFFFFF" />

        <link rel='stylesheet' href='../../css/fonts.css?v=4' type='text/css' media='all' />
        <link rel='stylesheet' href='../../css/style.css?v=4' type='text/css' media='all' />
        <script type='text/javascript' src='../../js/jquery_main.js'></script>
        <script type='text/javascript' src='../../js/jquery-minified.js'></script>
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
                    <img style="margin-top:1.5%;padding-left:9.5%;display:inline-block;" src="../../img/navlogo2.png" alt="BlackCoin"> <!--fix this-->
                </a>
            </header>

            <!-- Sidebar -->
            <div class="sidebar">
                <nav class="mainMenu">
                    <ul class="menu">
                        <li><a href="../../index.php" ><i class="icon-bbshield"></i><span class="text">BlackCoin Homepage</span></a></li>
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
                <!-- News -->
                <section class="section-news" id="news">
                    <!-- Seperator -->
                    <div class="seperator">
                        <div class="contentContainer">
                            <h2>
                                <span class="sub">BlackCoin News</span>
                                <?php echo $title; ?>
                            </h2>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="content">
                        <div class="contentContainer">
                            <?php echo $content; ?>						
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

        <script type='text/javascript' src='../../js/jquery.mobile.custom.min_2b23bb4a.js'></script>
        <script type='text/javascript' src='../../js/modernizr.custom_2b23bb4a.js'></script>
        <script type='text/javascript' src='../../js/response.min_2b23bb4a.js'></script>
        <script type='text/javascript' src='../../js/idangerous.swiper.min_2b23bb4a.js'></script>
        <script type='text/javascript' src='../../js/waypoints.min_2b23bb4a.js'></script>
        <script type='text/javascript' src='../../js/jquery.stellar.min_2b23bb4a.js'></script>
        <script type='text/javascript' src='../../js/main_2b23bb4a.js'></script>
    </body>
</html>
