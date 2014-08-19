<?php include ('lib.pdo.php'); ?>
<?php include ('news.fn.php'); ?>
<?php include ('config.inc.php'); ?>
<?php
if (isset($_REQUEST["lang"]) && $_REQUEST["lang"] == "cn") {
    include ('lang.cn.php');
} else if (isset($_REQUEST["lang"]) && $_REQUEST["lang"] == "es") {
    include ('lang.es.php');
} else if (isset($_REQUEST["lang"]) && $_REQUEST["lang"] == "en") {
    include ('lang.en.php');
} else {
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    switch ($lang) {
        case "zh":
            include('lang.cn.php');
            break;
        case "es":
            include('lang.es.php');
            break;
        default:
            include('lang.en.php');
            break;
    }
}
?>

<?php
$wallet = array();
$wallet["windows"] = "http://www.maarx.nl/maarx.nl/blackcoin/files/blackcoin-1.1.1-windows.zip";
$wallet["windows_ver"] = "v1.1.1";
$wallet["linux"] = "http://www.maarx.nl/maarx.nl/blackcoin/files/blackcoin-1.1.1-linux.zip";
$wallet["linux_ver"] = "v1.1.1";
$wallet["mac"] = "http://www.maarx.nl/maarx.nl/blackcoin/files/BlackCoin-Qt-MacOSX-v1.1.1.zip";
$wallet["mac_ver"] = "v1.1.1";

// edit test
?>

<!DOCTYPE html>

<html lang="en-US">
    <head>
        <title><?= PAGE_TITLE; ?></title>
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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </head>

    <body class="noscript">
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
                        <li><a class="smoothScroll" href="#info" ><i class="icon-cust-help"></i><span class="text"><?= SIDEBAR_WHAT; ?></span></a></li>
                        <li><a class="smoothScroll" href="#uses" ><i class="icon-cust-book"></i><span class="text"><?= SIDEBAR_WHY; ?></span></a></li>
                        <li><a class="smoothScroll" href="#specs" ><i class="icon-cust-analytics"></i><span class="text"><?= SIDEBAR_SPECS; ?></span></a></li>				 
                        <li><a class="smoothScroll" href="#getting-started" ><i class="icon-cust-write"></i><span class="text"><?= SIDEBAR_GET_STARTED; ?></span></a></li>
                        <li><a class="smoothScroll" href="#wallets" ><i class="icon-cust-laptop-user"></i><span class="text"><?= SIDEBAR_WALLETS; ?></span></a></li>
                        <li><a class="smoothScroll" href="#community" title="Membership Form"><i class="icon-cust-user"></i><span class="text"><?= SIDEBAR_COMMUNITY; ?></span></a></li>
                        <li><a class="smoothScroll" href="#news" ><i class="icon-cust-calendar"></i><span class="text"><?= SIDEBAR_NEWS; ?></span></a></li>
                    </ul>
                </nav>
                <nav class="backToTop">
                    <ul class="backToTop-menu">
                        <li><a class="smoothScroll" href="#info" title="to the top"><i class="icon-cust-arrow"></i><span class="text"><?= BACK_TO_TOP; ?></span></a></li>
                    </ul>
                </nav>
            </div>

            <!-- Main -->
            <main>

                <!-- Intro -->
                <section class="section-intro" id="intro" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
                    <div class="content">
                        <div class="contentContainer">
                            <h1>
                                <span class="sub"><?= BLACKCOIN; ?></span>
                                <span class="main"><?= BC_SUBTITLE; ?></span>
                            </h1>

                        </div>
                    </div>
                </section>

                <div id="notifications" style="display:none;">
                    <p><?= ALERT_NOTIFICATION; ?></p>
                </div>

                <style>
                    #blackcoin-hl {
                        color:#584930;
                    }
                    #blackcoin-hl:hover, #blackhalo-hl:hover {
                        color:#584930;
                    }
                    .hoverable:hover { color:#584930; }

                </style>
                <script>
                    $("#blackcoin-hl").click(function() {
                        $('#blackhaloshowdiv').toggle();
                        $('#blackcoinshowdiv').toggle();
                    });
                    $("#blackhalo-hl").click(function() {
                        $('#blackhaloshowdiv').toggle();
                        $('#blackcoinshowdiv').toggle();
                    });
                </script>

                <!-- Quick Wallet Links -->
                <section class="section-quickwallet">
                    <div class="content">
                        <div class="quickwalletContainer">
                            <p><?= CHOOSE_OPTION; ?> <span id="blackcoin-hl" onclick="$('#blackhaloshowdiv').hide();
                        $('#blackcoinshowdiv').show();
                        $('#blackcoin-hl').attr('style', 'color:#584930');
                        $('#blackhalo-hl').attr('style', 'color:#9E9E9E;');
                        $('#blackhalo-hl').addClass('hoverable');"><?= BLACKCOIN; ?></span> | <span id="blackhalo-hl" onclick="$('#blackhaloshowdiv').show();
                        $('#blackcoinshowdiv').hide();
                        $('#blackcoin-hl').attr('style', 'color:#9E9E9E');
                        $('#blackhalo-hl').attr('style', 'color:#584930;');
                        $('#blackcoin-hl').addClass('hoverable');"><?= BLACKHALO_OPT; ?></span></p>
                            <div id="blackcoinshowdiv">
                                <a class="btn-wallet" href="<?php echo $wallet["windows"]; ?>"><img class="icon" src="./img/profile/windows-sm.png" alt="">Windows</a>
                                <a class="btn-wallet" href="<?php echo $wallet["linux"]; ?>"><img class="icon" src="./img/profile/linux-sm.png" alt="">Linux</a>
                                <a class="btn-wallet" href="<?php echo $wallet["mac"]; ?>"><img class="icon" src="./img/profile/mac-sm.png" alt="">OS X</a>
                                <a class="btn-wallet modalbtn modal-trigger" href="https://play.google.com/store/apps/details?id=com.sinet3k.blkice"><img class="icon" src="./img/profile/android-sm.png" alt="">Android</a>
                                <a class="btn-wallet modalbtn modal-trigger" href="#mobile-soon"><img class="icon" src="./img/profile/mac-sm.png" alt=""><span style="text-transform:lowercase;">i</span>OS</a>
                                <a class="btn-wallet modalbtn modal-trigger" href="#web-wallets"><img class="icon" src="./img/profile/web-sm.png" alt="">Web Wallets</a>
                                <!--<a class="btn-wallet modalbtn modal-trigger" href="#web-wallets"><img class="icon" src="./img/profile/web-sm.png" alt="">Apps</a>-->
                                <br>
                                <a class="btn-wallet" href="blackcoin-pos-protocol-v2-whitepaper.pdf"><img class="icon" src="./img/profile/whitepaper.png" width="27px" target="_blank" alt="">POS 2.0 Whitepaper</a>
                                <br>
                                <p style="margin-top:9px;">Latest wallet update: 3rd of July, 2014</p>
                            </div>
                            <div id="blackhaloshowdiv" style="display:none;">
                                <a class="btn-wallet" href="http://www.davtonia.com/blackhalo/blackhalo32.zip"><img class="icon" src="./img/profile/windows-sm.png" alt="">Windows 32-bit</a>
                                <a class="btn-wallet" href="http://www.davtonia.com/blackhalo/blackhalo.zip"><img class="icon" src="./img/profile/windows-sm.png" alt="">Windows 64-bit</a>
                                <a class="btn-wallet" href="#"><img class="icon" src="./img/profile/linux-sm.png" alt="">Linux (coming soon!)</a>
                                <a class="btn-wallet" href="#"><img class="icon" src="./img/profile/mac-sm.png" alt="">OS X (coming soon!)</a>
                                <br>
                                <a class="btn-wallet" href="http://blackhalo.info/wp-content/uploads/2014/06/whitepaper_twosided.pdf"><img class="icon" src="./img/profile/whitepaper.png" target="_blank" width="27px" alt="">BlackHalo Whitepaper</a>
                                <a class="btn-wallet" href="http://www.blackhalo.info/"><img class="icon" src="./img/profile/link.png" width="27px" target="_blank" alt="">More Information</a>
                            </div>

                        </div>
                    </div>
                </section>


                <!-- Sub-intro -->
                <section class="section-subintro">
                    <div class="content">
                        <div class="contentContainer">
                            <div class="contentLeft">						
                                <div class="quarters">
                                    <h2><?= SUB_INTRO_INNOVATION; ?></h2>
                                    <p style="height:99px;"><?= SUB_INTRO_INNOVATION_TEXT; ?></p>
                                    <div class="btnContainer">
                                        <a href="#info" class="smoothScroll btn" style="font-size:15px;"><?= SUB_INTRO_INNOVATION_EXTRA; ?></a>
                                    </div>
                                </div>
                                <div class="quarters">
                                    <h2><?= SUB_INTRO_LIBERATION; ?></h2>		
                                    <p style="height:99px;"><?= SUB_INTRO_LIBERATION_TEXT; ?></p>	
                                    <div class="btnContainer">
                                        <a href="#uses" class="smoothScroll btn" style="font-size:15px;"><?= SUB_INTRO_LIBERATION_EXTRA; ?></a>
                                    </div>							
                                </div>					
                            </div>
                            <div class="contentRight">
                                <div class="quarters">
                                    <h2><?= SUB_INTRO_ADOPTION; ?></h2>
                                    <p style="height:99px;"><?= SUB_INTRO_ADOPTION_TEXT; ?></p>
                                    <div class="btnContainer">
                                        <a href="#getting-started" class="smoothScroll btn" style="font-size:15px;"><?= SUB_INTRO_ADOPTION_EXTRA ?></a>
                                    </div>
                                </div>
                                <div class="quarters">
                                    <h2><?= SUB_INTRO_DEDICATION; ?></h2>
                                    <p style="height:99px;"><?= SUB_INTRO_DEDICATION_TEXT; ?></p>
                                    <div class="btnContainer">
                                        <a href="#community" class="smoothScroll btn" style="font-size:15px;"><?= SUB_INTRO_DEDICATION_EXTRA ?></a>
                                    </div>
                                </div>					
                            </div>
                            <a class="smoothScroll arrow" href="#info"><img src="./img/arrow-down.png" alt="" /></a>
                        </div>
                    </div>
                </section>  

                <!-- What is BlackCoin -->			   
                <section class="section-audience" id="info">
                    <!-- Seperator -->
                    <div class="seperator">
                        <div class="contentContainer">
                            <h2>
                                <span class="sub"><?= WHAT_IS_TITLE; ?></span>
                                <?= BLACKCOIN; ?>	    
                            </h2>
                        </div>
                    </div>
                    <div class="content">
                        <div class="contentContainer">
                            <div class="contentLeft">
                                <ul class="figure">
                                    <li>A</li>
                                    <li>B</li>
                                </ul>
                            </div>
                            <div class="textContent contentRight">
                                <h3><?= WHAT_IS_AB_TITLE; ?></h3>
                                <br>
                                <div class="user-content">
                                    <p><?= WHAT_IS_AB_TEXT1; ?></p>
                                    <p><?= WHAT_IS_AB_TEXT2; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="contentContainer">
                            <div class="contentRight">
                                <ul class="figure">
                                    <li>B</li>
                                    <li>C</li>
                                </ul>
                            </div>
                            <div class="textContent contentLeft">
                                <h3><?= WHAT_IS_BC_TITLE; ?></h3>
                                <br>
                                <div class="user-content">
                                    <p><?= WHAT_IS_BC_TEXT1; ?></p>
                                    <p><?= WHAT_IS_BC_TEXT2; ?></p>
                                    <p><?= WHAT_IS_BC_TEXT3; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="btnContainer">
                            <a href="#getting-started" class="smoothScroll btn"><?= WHAT_IS_BC_GETSTARTED; ?></a>
                        </div>
                    </div>
                </section>

                <!-- Specifications -->
                <section class="section-pricing" id="uses">
                    <!-- Seperator -->
                    <div class="seperator">
                        <div class="contentContainer">
                            <h2>
                                <span class="sub"><?= WHY_USE_TITLE; ?></span>
                                BlackCoin		    
                            </h2>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="content">
                        <div class="contentContainer">
                            <!-- Menu -->
                            <ul class="pricing-menu">
                                <li class="selected"><a href="#"><?= WHY_USE_INDIVIDUALS; ?></a></li>
                                <li><a href="#"><?= WHY_USE_BUSINESSES; ?></a></li>
                                <li><a href="#"><?= WHY_USE_DEVELOPERS; ?></a></li>
                            </ul>
                            <!-- L/R Nav -->
                            <a href="#" class="pricing-nav pricing-nav-prev"><i class="icon-cust-arrow-left"></i></a>
                            <a href="#" class="pricing-nav pricing-nav-next"><i class="icon-cust-arrow-right"></i></a>
                            <!-- Slides -->
                            <div class="pricing-container">
                                <div class="pricing-wrapper">
                                    <div class="pricing-slide">
                                        <hgroup>
                                            <h3>
                                                <span class="main"><?= WHY_USE_INDIVIDUALS; ?></span>
                                                <span class="sub"><?= WHY_USE_INDIVIDUALS_WHY; ?></span>
                                                <span class="super-sub"><?= BLACKCOIN; ?></span>
                                            </h3>
                                        </hgroup>
                                        <div class="pricing-slide-content user-content">
                                            <p><?= WHY_USE_INVIDIVUALS_TEXT1; ?></p>
                                            <p><?= WHY_USE_INVIDIVUALS_TEXT2; ?></p>
                                            <ul>
                                                <li><?= WHY_USE_INVIDIVUALS_LI1; ?></li>
                                                <li><?= WHY_USE_INVIDIVUALS_LI2; ?></li>
                                                <li><?= WHY_USE_INVIDIVUALS_LI3; ?></li>
                                                <li><a href="http://www.blackauctions.eu/" target="_blank"><?= WHY_USE_INVIDIVUALS_LI4; ?></a></li>
                                                <li><?= WHY_USE_INVIDIVUALS_LI5; ?></li>
                                                <li><?= WHY_USE_INVIDIVUALS_LI6; ?></li>
                                            </ul>
                                            <div class="btnContainer">
                                                <a href="#getting-started" class="smoothScroll btn"><?= WHY_USE_INVIDIVUALS_EXTRA; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-slide">
                                        <hgroup>
                                            <h3>
                                                <span class="main"><?= WHY_USE_BUSINESSES; ?></span>
                                                <span class="sub"><?= WHY_USE_BUSINESSES_WHY; ?></span>
                                                <span class="super-sub"><?= BLACKCOIN; ?></span>
                                            </h3>
                                        </hgroup>
                                        <div class="pricing-slide-content user-content">
                                            <p><?= WHY_USE_BUSINESSES_TEXT1; ?></p>
                                            <p><?= WHY_USE_BUSINESSES_TEXT2; ?></p>
                                            <ul>
                                                <li><?= WHY_USE_BUSINESSES_LI1; ?></li>
                                                <li><?= WHY_USE_BUSINESSES_LI2; ?></li>
                                                <li><?= WHY_USE_BUSINESSES_LI3; ?></li>
                                                <li><?= WHY_USE_BUSINESSES_LI4; ?></li>
                                                <li><?= WHY_USE_BUSINESSES_LI5; ?></li>
                                            </ul>
                                            <div class="btnContainer">
                                                <a href="#features" class="smoothScroll btn"><?= WHY_USE_BUSINESSES_EXTRA; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-slide">
                                        <hgroup>
                                            <h3>
                                                <span class="main"><?= WHY_USE_DEVELOPERS; ?></span>
                                                <span class="sub"><?= WHY_USE_DEVELOPERS_WHY; ?></span>
                                                <span class="super-sub"><?= BLACKCOIN; ?></span>
                                            </h3>
                                        </hgroup>
                                        <div class="pricing-slide-content user-content">
                                            <p><?= WHY_USE_DEVELOPERS_TEXT1; ?></p>
                                            <p><?= WHY_USE_DEVELOPERS_TEXT2; ?></p>
                                            <ul>
                                                <li><?= WHY_USE_DEVELOPERS_LI1; ?></li>
                                                <li><?= WHY_USE_DEVELOPERS_LI2; ?></li>
                                                <li><?= WHY_USE_DEVELOPERS_LI3; ?></li>
                                                <li><?= WHY_USE_DEVELOPERS_LI4; ?></li>
                                                <li><?= WHY_USE_DEVELOPERS_LI5; ?></li>
                                            </ul>								
                                            <div class="btnContainer">
                                                <a href="#specs" class="smoothScroll btn"><?= WHY_USE_DEVELOPERS_EXTRA; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Specs -->
                <section class="section-statistics" id="specs">
                    <!-- Seperator -->
                    <div class="seperator">
                        <div class="contentContainer">
                            <h2>
                                <span class="sub"><?= BLACKCOIN; ?></span>
                                <?= SIDEBAR_SPECS; ?>   
                            </h2>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="content">
                        <div class="contentContainer">
                            <hgroup>
                                <h2>
                                    <span class="sub"><?= SPECS_SUPER; ?></span>
                                    <span class="main"><?= SPECS_TITLE; ?></span>
                                </h2>
                            </hgroup>
                            <div class="intro user-content">
                                <p><?= SPECS_SUBTITLE; ?></p>
                            </div>
                            <!-- Statistics -->
                            <div class="statistics">
                                <!-- Bar Chart -->
                                <div class="barChart">
                                    <div class="dummybar">
                                        <!-- dummy bar for postitioning -->
                                    </div>
                                    <div class="bar" data-percentage="100">
                                        <div class="tooltip tooltip-left">
                                            <div class="tooltip-label"><?= SPECS_MINTED_COINS; ?></div>
                                            <div class="tooltip-value">75,000,000</div>
                                        </div>
                                    </div>
                                    <div class="bar" data-percentage="40">
                                        <div class="tooltip tooltip-topRight">
                                            <div class="tooltip-label"><?= SPECS_MINERS; ?></div>
                                            <div class="tooltip-value">3,911</div>
                                        </div>
                                    </div>
                                    <div class="bar" data-percentage="15">
                                        <div class="tooltip tooltip-right">
                                            <div class="tooltip-label"><?= SPECS_BLOCKCHAIN; ?></div>
                                            <div class="tooltip-value">250mb</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Icon Statistics -->
                                <ul class="iconStats">
                                    <li>
                                        <div class="iconStats-icon"><i class="icon-cust-barchart"></i></div>
                                        <div class="iconStats-value"><?= SPECS_TITLE1; ?></div>
                                        <div class="iconStats-label"><?= SPECS_TEXT1; ?></div>
                                    </li>
                                    <li>
                                        <div class="iconStats-icon"><i class="icon-cust-analytics"></i></div>
                                        <div class="iconStats-value"><?= SPECS_TITLE2; ?></div>
                                        <div class="iconStats-label"><?= SPECS_TEXT2; ?></div>
                                    </li>
                                    <li>
                                        <div class="iconStats-icon"><i class="icon-cust-user"></i></div>
                                        <div class="iconStats-value"><?= SPECS_TITLE3; ?></div>
                                        <div class="iconStats-label"><?= SPECS_TEXT3; ?></div>
                                    </li>	  
                                    <li>
                                        <div class="iconStats-icon"><i class="icon-cust-stopwatch"></i></div>
                                        <div class="iconStats-value"><?= SPECS_TITLE4; ?></div>
                                        <div class="iconStats-label"><?= SPECS_TEXT4; ?></div>
                                    </li>
                                    <li>
                                        <div class="iconStats-icon"><i class="icon-cust-arrow-cross"></i></div>
                                        <div class="iconStats-value"><?= SPECS_TITLE5; ?></div>
                                        <div class="iconStats-label"><?= SPECS_TEXT5; ?></div>
                                    </li>
                                    <li>
                                        <div class="iconStats-icon"><i class="icon-cust-paper"></i></div>
                                        <div class="iconStats-value"><?= SPECS_TITLE6; ?></div>
                                        <div class="iconStats-label"><?= SPECS_TEXT6; ?></div>
                                    </li>

                                </ul>
                            </div>
                            <div class="section-blackBook" id="features">
                                <hgroup>
                                    <h2 class="in-view">
                                        <span class="sub"><?= KEY_FEATURES_SUPER; ?></span>
                                        <span class="main"><?= KEY_FEATURES_TITLE; ?></span>
                                    </h2>
                                </hgroup>
                                <div class="intro user-content">
                                    <p><?= KEY_FEATURES_SUBTITLE; ?></p>
                                </div>
                                <div class="user-content" style="text-align:center;">
                                    <div class="contentLeft">
                                        <ul>
                                            <li><?= KEY_FEATURES_UL1_LI1; ?></li>
                                            <li><?= KEY_FEATURES_UL1_LI2; ?></li>
                                            <li><?= KEY_FEATURES_UL1_LI3; ?></li>
                                        </ul>
                                    </div>
                                    <div class="contentRight">
                                        <ul>
                                            <li><?= KEY_FEATURES_UL2_LI1; ?></li>
                                            <li><?= KEY_FEATURES_UL2_LI2; ?></li>
                                            <li><?= KEY_FEATURES_UL2_LI3; ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>							
                    </div>
                </section>

                <!-- Getting Started -->
                <section class="section-timeline" id="getting-started">
                    <!-- Seperator -->
                    <div class="seperator">
                        <div class="contentContainer">
                            <h2>
                                <span class="sub"><?= GETTING_STARTED_GETTING; ?></span>
                                <?= GETTING_STARTED_STARTED; ?>	    
                            </h2>
                        </div>
                    </div>
                    <div class="content">
                        <div class="contentContainer">
                            <hgroup>
                                <h2 class="in-view">
                                    <span class="sub"><?= GETTING_STARTED_SUPER; ?></span>
                                    <span class="main"><?= BLACKCOIN; ?></span>
                                </h2>
                            </hgroup>
                            <div class="intro user-content">
                                <p><strong><?= GETTING_STARTED_SUBTITLE; ?></strong></p>
                            </div>
                            <ul class="timeline">
                                <li class="year">1.</li>
                                <li>
                                    <span class="title"><a href="wallets" class="smoothScroll"><?= GETTING_STARTED_STEP1_TITLE; ?></a></span>
                                    <span class="timeline-content">
                                        <p><?= GETTING_STARTED_STEP1_TEXT; ?></p>
                                        <a href="#wallets" class="smoothScroll btn-sm"><?= GETTING_STARTED_WALLETS_PC; ?></a>
                                        <a href="#web-wallets" class="btn-sm modalbtn modal-trigger"><?= GETTING_STARTED_WALLETS_WEB; ?></a>
                                    </span>
                                </li>
                                <li class="year">2.</li>
                                <li>
                                    <span class="title"><?= GETTING_STARTED_STEP2_TITLE; ?></span>
                                    <span class="timeline-content">
                                        <p><?= GETTING_STARTED_STEP2_TEXT; ?></p>
                                        <p><?= GETTING_STARTED_RETAILERS; ?><br />
                                            <a href="https://expresscoin.com" target="_blank">Expresscoin <small>(USD, CND)</small></a>, 
                                            <a href="https://anycoindirect.eu/buy/blackcoins" target="_blank">Anycoin Direct <small>(EUR)</small></a>
                                        </p>
                                        <p><?= GETTING_STARTED_FIATEX; ?><br />
                                            <a href="https://bittylicious.com/" target="_blank">Bittylicious <small>(GBP)</small></a>, 
                                            <a href="https://bter.com/trade/bc_cny" target="_blank">BTER <small>(CNY)</small></a>, 
                                            <a href="https://www.litebit.eu/coin/bc/en/" target="_blank">LiteBit <small>(EURO)</small></a>, 
                                            <a href="https://prelude.io/trade/usd/bc" target="_blank">Prelude <small>(USD)</small></a>,<br />
                                            <a href="https://www.vaultofsatoshi.com/" target="_blank">Vault of Satoshi <small>(USD, CAD)</small></a></p>
                                        <p><?= GETTING_STARTED_COINEX; ?><br />
                                            <a href="https://bittrex.com/Market/Index?MarketName=BTC-BC" target="_blank">Bittrex</a>, <a href="https://bter.com/trade/bc_cny" target="_blank">BTER</a>, 
                                            <a href="https://www.cryptsy.com/markets/view/179" target="_blank">Cryptsy</a>, 
                                            <a href="https://www.mintpal.com/market/BC/BTC" target="_blank">Mintpal</a>, 
                                            <a href="https://poloniex.com/exchange/btc_bc" target="_blank">Poloni.ex</a></p>
                                    </span>
                                </li>
                                <li class="year">3.</li>
                                <li>
                                    <span class="title"><?= GETTING_STARTED_STEP3_TITLE; ?></span>
                                    <span class="timeline-content">
                                        <p><?= GETTING_STARTED_STEP3_TEXT; ?></p>
                                        <a href="#staking" class="btn-sm modalbtn modal-trigger"><?= GETTING_STARTED_STEP3_TEXT1; ?></a>
                                    </span>
                                </li>
                                <li style="padding-top:40px;">
                                    <span class="title"><?= GETTING_STARTED_STEP3_TITLE2; ?></span>
                                    <span class="timeline-content">
                                        <p><?= GETTING_STARTED_STEP3_TEXT2; ?></p>
                                        <a href="http://blackcoinpool.com/" class="btn-sm">BlackCoin Pool</a>
                                    </span>
                                </li>
                                <li class="year">4.</li>
                                <li>
                                    <span class="title"><?= GETTING_STARTED_STEP4_TITLE; ?></span>
                                    <span class="timeline-content">
                                        <p><?= GETTING_STARTED_STEP4_TEXT; ?></p>
                                        <p><?= GETTING_STARTED_STEP4_TEXT1; ?></p>
                                        <a href="http://blackcoindirectory.com" class="btn-sm">BlackCoin Directory</a>
                                        <a href="http://blackcoinmap.com" class="btn-sm">BlackCoin Map</a>
                                    </span>
                                </li>
                                <li class="year">5.</li>
                                <li>
                                    <span class="title"><a href="#community"><?= GETTING_STARTED_STEP5_TITLE; ?></a></span>
                                    <span class="timeline-content">
                                        <p><?= GETTING_STARTED_STEP5_TEXT; ?></p>
                                        <a href="#community" class="smoothScroll btn-sm"><?= GETTING_STARTED_STEP5_EXTRA; ?></a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Wallets -->
                <section class="section-profile" id="wallets">
                    <!-- Seperator -->
                    <div class="seperator">
                        <div class="contentContainer">
                            <h2>
                                <span class="sub"><?= BLACKCOIN; ?></span>
                                <?= SIDEBAR_WALLETS; ?>
                            </h2>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="content">
                        <div class="contentContainer">
                            <hgroup>
                                <h2>
                                    <span class="sub"><?= WALLETS_DOWNLOAD; ?></span>
                                    <span class="main"><?= WALLETS_WALLET; ?></span>
                                </h2>
                            </hgroup>
                            <!-- L/R Nav -->
                            <a href="#" class="profile-nav profile-nav-prev"><i class="icon-cust-arrow-left"></i></a>
                            <a href="#" class="profile-nav profile-nav-next"><i class="icon-cust-arrow-right"></i></a>
                            <!-- Profile Gallery -->
                            <div class="profile-pagination">
                                <div class="profile-pagination">
                                    <div class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"><?= WALLETS_PC; ?></div>
                                    <div class="swiper-pagination-switch"><?= WALLETS_SMARTPHONE; ?></div>
                                </div>
                            </div>
                            <div class="profile-container">
                                <div class="profile-wrapper">
                                    <div class="profile-slide profile-imac">
                                        <div class="profile-slide-wrapper">
                                            <!-- Windows --> 
                                            <img src="./img/profile/windows.png" alt="" />
                                            <div class="btnContainer">
                                                <a href="<?php echo $wallet["windows"]; ?>" class="btn" target="_blank"><?= WALLETS_WINDOWS; ?> <?php echo $wallet["windows_ver"]; ?></a>
                                            </div>
                                            <!-- Linux--> <br><br><br>
                                            <img src="./img/profile/linux.png" alt="" />
                                            <div class="btnContainer">
                                                <a href="<?php echo $wallet["linux"]; ?>" class="btn" target="_blank"><?= WALLETS_LINUX; ?> <?php echo $wallet["linux_ver"]; ?></a>
                                            </div>
                                            <!-- Mac--> <br><br><br>
                                            <img src="./img/profile/mac.png" alt="" />
                                            <div class="btnContainer">
                                                <a href="<?php echo $wallet["mac"]; ?>" class="btn" target="_blank"><?= WALLETS_MACOSX; ?> <?php echo $wallet["mac_ver"]; ?></a>
                                            </div>
                                            <!-- Github--> <br><br><br>
                                            <img src="./img/profile/github.png" alt="" />
                                            <div class="btnContainer">
                                                <a href="https://github.com/rat4/blackcoin" class="btn" target="_blank"><?= WALLETS_SOURCE; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-slide profile-iphone">
                                        <div class="profile-slide-wrapper">
                                            <!-- Android --> <br>
                                            <img src="./img/profile/android.png" alt="" />
                                            <div class="btnContainer">
                                                <a href="https://play.google.com/store/apps/details?id=com.sinet3k.blkice" class="btn" target="_blank"><i><?= WALLETS_ANDROID; ?></i></a>
                                            </div>
                                            <!-- iOS--> <br><br><br>
                                            <img src="./img/profile/ios.png" alt="" />
                                            <div class="btnContainer">
                                                <a href="#" class="btn" target="_blank"><i><?= WALLETS_IOS; ?></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Community -->
                <section class="section-team" id="community">
                    <!-- Seperator -->
                    <div class="seperator">
                        <div class="contentContainer">
                            <h2>
                                <span class="sub"><?= COMMUNITY_SUPER; ?></span>
                                <?= SIDEBAR_COMMUNITY; ?>		  
                            </h2>
                            <br>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="content">
                        <div class="contentContainer">
                            <hgroup>
                                <h2>
                                    <span class="sub"><?= COMMUNITY_TITLE; ?></span>
                                    <span class="main"><?= COMMUNITY_SUBTITLE; ?></span>
                                </h2>
                            </hgroup>
                            <!-- Social Outlets -->
                            <ul class="team-members">
                                <li>
                                    <div class="team-member-image">
                                        <img src="./img/social/reddit.png" alt="Reddit" /> 					
                                    </div>
                                    <h3 class="team-member-title">
                                        <span class="sub">Reddit</span> 						
                                    </h3>
                                    <div class="btnContainer">
                                        <a href="http://www.reddit.com/r/blackcoin/" class="btn" target="_blank"><?= COMMUNITY_REDDIT; ?></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="team-member-image">
                                        <img src="./img/social/twitter.png" alt="Twitter" /> 					
                                    </div>
                                    <h3 class="team-member-title">
                                        <span class="sub">Twitter</span> 						
                                    </h3>
                                    <div class="btnContainer">
                                        <a href="https://twitter.com/coinblack" class="btn" target="_blank"><?= COMMUNITY_TWITTER; ?></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="team-member-image">
                                        <img src="./img/social/irc.png" alt="IRC" /> 					
                                    </div>
                                    <h3 class="team-member-title">
                                        <span class="sub">IRC</span> 						
                                    </h3>
                                    <div class="btnContainer">
                                        <a href="http://webchat.freenode.net/?channels=%23blackcoinpool&amp;uio=d4" class="btn" target="_blank"><?= COMMUNITY_IRC; ?></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="team-member-image">
                                        <img src="./img/social/facebook.png" alt="Facebook" /> 					
                                    </div>
                                    <h3 class="team-member-title">
                                        <span class="sub">Facebook</span> 						
                                    </h3>
                                    <div class="btnContainer">
                                        <a href="https://www.facebook.com/coinblack" class="btn" target="_blank"><?= COMMUNITY_FACEBOOK; ?></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- News -->
                <section class="section-events" id="news">
                    <!-- Seperator -->
                    <div class="seperator">
                        <div class="contentContainer">
                            <h2>
                                <span class="sub"><?= BLACKCOIN; ?></span>
                                <?= SIDEBAR_NEWS; ?>		    
                            </h2>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="content">
                        <div class="contentContainer">
                            <!-- News -->
                            <ul class="events-list">
                                <li class="event-titles">
                                    <div class="event-title"><?= NEWS_ARTICLE; ?></div>
                                    <div class="event-title"><?= NEWS_DATE; ?></div>
                                    <div class="event-title"><?= NEWS_AUTHOR; ?></div>
                                </li>
                                <?php
                                $result = Db::Query("SELECT * FROM `wp_posts` WHERE post_status = 'publish' AND post_type='post' ORDER BY  `wp_posts`.`post_date` DESC LIMIT 0 , 5");

                                while ($row = Db::Fetch($result)) {
                                    $uid = $row->post_author;
                                    $author = "";

                                    $resultUser = Db::Query("SELECT * FROM `wp_users` WHERE ID = '$uid'");
                                    while ($rowUser = Db::Fetch($resultUser)) {
                                        $author = $rowUser->display_name;
                                    }

                                    $url = $row->post_name;
                                    $url = "news/" . $row->ID . "/" . $url;

                                    $title = utf8_encode($row->post_title);

                                    $date = explode(' ', $row->post_date);
                                    $date = $date[0];

                                    // Get first 20 preview lines
                                    $preview = strip_tags($row->post_content);
                                    $preview = implode(' ', array_slice(explode(' ', $preview), 0, 20));
                                    $preview .= "...";
                                    $preview = utf8_encode($preview);

                                    GetNewsItem($url, $author, $title, $date, $preview, "");
                                }
                                ?>
                            </ul>

                            <div class="btnContainer">
                                <a href="news-archive.php" class="btn" style="margin-top:3em;"><?= NEWS_ARCHIVE; ?></a>
                            </div>

                        </div>
                    </div>
                </section>
            </main>
        </div>
        <?php include ('inc/modals.php'); ?>
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
