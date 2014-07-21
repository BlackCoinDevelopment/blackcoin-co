<?php include ('lib.pdo.php'); ?>
<?php include ('news.fn.php'); ?>

<?php
$wallet = array();
$wallet["windows"] = "http://www.maarx.nl/maarx.nl/blackcoin/files/blackcoin-1.1.0.1-windows.zip";
$wallet["windows_ver"] = "v1.1.0.1";
$wallet["linux"] = "http://www.maarx.nl/maarx.nl/blackcoin/files/blackcoin-1.1.0.1-linux.zip";
$wallet["linux_ver"] = "v1.1.0.1";
$wallet["mac"] = "http://www.maarx.nl/maarx.nl/blackcoin/files/BlackCoin-Qt-MacOSX-v1.1.0.1.zip";
$wallet["mac_ver"] = "v1.1.0.1";

// edit test
?>

<!DOCTYPE html>

<html lang="en-US">
    <head>
        <title>BlackCoin, Currency of the Future</title>
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
                        <li><a class="smoothScroll" href="#info" ><i class="icon-cust-help"></i><span class="text">What is BlackCoin?</span></a></li>
                        <li><a class="smoothScroll" href="#uses" ><i class="icon-cust-book"></i><span class="text">Why use BlackCoin?</span></a></li>
                        <li><a class="smoothScroll" href="#specs" ><i class="icon-cust-analytics"></i><span class="text">Specs &amp; Features</span></a></li>				 
                        <li><a class="smoothScroll" href="#getting-started" ><i class="icon-cust-write"></i><span class="text">Getting Started</span></a></li>
                        <li><a class="smoothScroll" href="#wallets" ><i class="icon-cust-laptop-user"></i><span class="text">Wallets</span></a></li>
                        <li><a class="smoothScroll" href="#community" title="Membership Form"><i class="icon-cust-user"></i><span class="text">Community</span></a></li>
                        <li><a class="smoothScroll" href="#news" ><i class="icon-cust-calendar"></i><span class="text">News</span></a></li>
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

                <!-- Intro -->
                <section class="section-intro" id="intro" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
                    <div class="content">
                        <div class="contentContainer">
                            <h1>
                                <span class="sub">BlackCoin</span>
                                <span class="main">Currency of the future</span>
                            </h1>

                        </div>
                    </div>
                </section>

                <div id="notifications">
                    <p>The BlackCoin wallet has been updated to v1.1.0.1. Please update. Hardfork at block 319000!</p>
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
                            <p>Choose your option: <span id="blackcoin-hl" onclick="$('#blackhaloshowdiv').hide();
                        $('#blackcoinshowdiv').show();
                        $('#blackcoin-hl').attr('style', 'color:#584930');
                        $('#blackhalo-hl').attr('style', 'color:#9E9E9E;');
                        $('#blackhalo-hl').addClass('hoverable');">BlackCoin</span> | <span id="blackhalo-hl" onclick="$('#blackhaloshowdiv').show();
                        $('#blackcoinshowdiv').hide();
                        $('#blackcoin-hl').attr('style', 'color:#9E9E9E');
                        $('#blackhalo-hl').attr('style', 'color:#584930;');
                        $('#blackcoin-hl').addClass('hoverable');">BlackHalo (Smart Contracts Client Beta)</span></p>
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
                                    <h2>Innovation</h2>
                                    <p><a href="#proof-of-stake" class="modalbtn modal-trigger">Proof of Stake</a> adds speed, security and energy efficiency over most digital currencies. <!--<a href="http://www.blackhalo.info/" class="modalbtn modal-trigger" target="_blank" alt="BlackHalo Website">BlackHalo client</a> brings smart contracts, multi-signature and more. --></p>
                                    <div class="btnContainer">
                                        <a href="#info" class="smoothScroll btn">What is BlackCoin?</a>
                                    </div>
                                </div>
                                <div class="quarters">
                                    <h2>Liberation</h2>		
                                    <p>Free from central authorities and banks, BlackCoin and BlackHalo gives the power back to the people.</p>	
                                    <div class="btnContainer">
                                        <a href="#uses" class="smoothScroll btn">Why use BlackCoin?</a>
                                    </div>							
                                </div>					
                            </div>
                            <div class="contentRight">
                                <div class="quarters">
                                    <h2>Adoption</h2>
                                    <p>BlackCoin is quickly gaining the support of people, merchants and services worldwide.</p>
                                    <div class="btnContainer">
                                        <a href="#getting-started" class="smoothScroll btn">Get Started Now</a>
                                    </div>
                                </div>
                                <div class="quarters">
                                    <h2>Dedication</h2>
                                    <p>BlackCoin has a large, supportive online community of both users and developers.</p>
                                    <div class="btnContainer">
                                        <a href="#community" class="smoothScroll btn">Join the Community</a>
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
                                <span class="sub">What is</span>
                                BlackCoin	    
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
                                <h3>A new <span class="em">form</span> of currency</h3>
                                <br>
                                <div class="user-content">
                                    <p>BlackCoin is a peer-to-peer digital currency with a distributed, <a href="#decentralized-network" class="modalbtn modal-trigger">decentralized</a> public ledger; that unlike ones held at traditional banks, are viewable and easily audited by the people.</p>

                                    <p>The ability to manage transactions and issue additional BlackCoins is all handled by the network of users utilizing BlackCoin. Because the BlackCoin network is run by the people, holders of BlackCoin receive a <a href="#one-percent-interest" class="modalbtn modal-trigger">1% yearly interest</a> through a process called <a href="#staking" class="modalbtn modal-trigger">staking</a>.</p>
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
                                <h3>An innovative new <span class="em">way</span> to transfer money</h3>
                                <br>
                                <div class="user-content">
                                    <p>BlackCoin’s technology allows people to send and receive fast, easy and secure payments with friends, family, and merchants anywhere in the world. BlackCoin allows you to manage your finances without the need for a central authority or bank.</p> 

                                    <p>BlackCoin is <a href="#open-source" class="modalbtn modal-trigger">open-source</a> too, meaning that the software that makes it function is completely available for public scrutiny — giving you peace of mind. No one owns BlackCoin, it is not a single entity; anyone can be a part of it.</p>

                                    <p><a href="http://blackhalo.info/" class="modalbtn modal-trigger">BlackHalo</a> is the worlds first functional smart contracting multisig client! It adds many new features, directly into the users hands.</p>

                                </div>
                            </div>
                        </div>

                        <div class="btnContainer">
                            <a href="#getting-started" class="smoothScroll btn">Get Started Now</a>
                        </div>

                    </div>
                </section>

                <!-- Specifications -->
                <section class="section-pricing" id="uses">
                    <!-- Seperator -->
                    <div class="seperator">
                        <div class="contentContainer">
                            <h2>
                                <span class="sub">Why use</span>
                                BlackCoin		    
                            </h2>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="content">
                        <div class="contentContainer">
                            <!-- Menu -->
                            <ul class="pricing-menu">
                                <li class="selected"><a href="#">Individuals</a></li>
                                <li><a href="#">Businesses</a></li>
                                <li><a href="#">Developers</a></li>
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
                                                <span class="main">Individuals</span>
                                                <span class="sub">Why individuals use</span>
                                                <span class="super-sub">BlackCoin</span>
                                            </h3>
                                        </hgroup>
                                        <div class="pricing-slide-content user-content">
                                            <p>Individuals use BlackCoin to transfer money to and from friends, family, and merchants anywhere in the world. BlackCoin is an ideal currency for both <a href="#point-of-sale" class="modalbtn modal-trigger">face to face</a> and <a href="#international-payments" class="modalbtn modal-trigger">international</a> digital commerce. With the <a href="http://blackhalo.info/" class="modalbtn modal-trigger">BlackHalo</a> client you can make unbreakable contracts and barter anything you like.</p>

                                            <p>Using BlackCoin is fast, secure, and rewarding.</p>

                                            <ul>
                                                <li>Security and control over your money</li>
                                                <li><a href="#international-payments" class="modalbtn modal-trigger">Fast international payments</a></li>
                                                <li>Zero or low fees</li>
                                                <li>Decentralized Ebay</li>
                                                <li><a href="#one-percent-interest" class="modalbtn modal-trigger">1% compound interest yearly</a></li>
                                                <li>Mobile payments made easy</li>
                                            </ul>

                                            <div class="btnContainer">
                                                <a href="#getting-started" class="smoothScroll btn">Get Started Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-slide">
                                        <hgroup>
                                            <h3>
                                                <span class="main">Businesses</span>
                                                <span class="sub">Why businesses use</span>
                                                <span class="super-sub">BlackCoin</span>
                                            </h3>
                                        </hgroup>
                                        <div class="pricing-slide-content user-content">
                                            <p>Businesses use BlackCoin to join an emerging market in support of a faster, easier way to transfer value between two parties. BlackCoin offers a number of advantages over traditional <a href="#point-of-sale" class="modalbtn modal-trigger">point of sale</a> and <a href="#international-payments" class="modalbtn modal-trigger">international</a> payment systems. The <a href="http://blackhalo.info/" class="modalbtn modal-trigger">BlackHalo</a> client is a powerful tool for any type of contract or trade.</p>
                                            <p>Accepting BlackCoin makes accepting digital currency easy.</p>

                                            <ul>
                                                <li>Protection against fraud</li>
                                                <li>The lowest fees out there</li>
                                                <li>No PCI compliance required</li>
                                                <li>Accounting transparency</li>
                                                <li>Unbreakable contracts</li>
                                                <li><a href="#international-payments" class="modalbtn modal-trigger">Fast international payments</a></li>
                                            </ul>

                                            <div class="btnContainer">
                                                <a href="#features" class="smoothScroll btn">BlackCoin's Features</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-slide">
                                        <hgroup>
                                            <h3>
                                                <span class="main">Developers</span>
                                                <span class="sub">Why developers use</span>
                                                <span class="super-sub">BlackCoin</span>
                                            </h3>
                                        </hgroup>
                                        <div class="pricing-slide-content user-content">
                                            <p>Developers use BlackCoin as an effective platform to send, hold, and receive payments. BlackCoin is already supported by loads of useful digital infrastructure and has large, dedicated user and development communities.</p>
                                            <p>BlackCoin's network and specs make it a wise choice as a development platform.</p>
                                            <ul>
                                                <li>Simplest of all payment systems</li>
                                                <li>Many third party APIs</li>
                                                <li>Cheap micro payments</li>
                                                <li>Most of the security is client side</li>
                                                <li>BlackCoin addresses to track invoices</li>
                                            </ul>								
                                            <div class="btnContainer">
                                                <a href="#specs" class="smoothScroll btn">BlackCoin's Tech Specs</a>
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
                                <span class="sub">BlackCoin</span>
                                Specs &amp; Features    
                            </h2>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="content">
                        <div class="contentContainer">
                            <hgroup>
                                <h2>
                                    <span class="sub">BlackCoin's</span>
                                    <span class="main">Specifications</span>
                                </h2>
                            </hgroup>
                            <div class="intro user-content">
                                <p>Info and data behind BlackCoin</p>
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
                                            <div class="tooltip-label">Minted Coins</div>
                                            <div class="tooltip-value">75,000,000</div>
                                        </div>
                                    </div>
                                    <div class="bar" data-percentage="40">
                                        <div class="tooltip tooltip-topRight">
                                            <div class="tooltip-label">Multi-pool Miners</div>
                                            <div class="tooltip-value">3,911</div>
                                        </div>
                                    </div>
                                    <div class="bar" data-percentage="15">
                                        <div class="tooltip tooltip-right">
                                            <div class="tooltip-label">Blockchain</div>
                                            <div class="tooltip-value">250mb</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Icon Statistics -->
                                <ul class="iconStats">
                                    <li>
                                        <div class="iconStats-icon"><i class="icon-cust-barchart"></i></div>
                                        <div class="iconStats-value">75 Million</div>
                                        <div class="iconStats-label">Coins</div>
                                    </li>
                                    <li>
                                        <div class="iconStats-icon"><i class="icon-cust-analytics"></i></div>
                                        <div class="iconStats-value">Proof of Stake</div>
                                        <div class="iconStats-label">Short PoW Phase</div>
                                    </li>
                                    <li>
                                        <div class="iconStats-icon"><i class="icon-cust-user"></i></div>
                                        <div class="iconStats-value">One Percent</div>
                                        <div class="iconStats-label">Stake Interest</div>
                                    </li>	  
                                    <li>
                                        <div class="iconStats-icon"><i class="icon-cust-stopwatch"></i></div>
                                        <div class="iconStats-value">30 seconds</div>
                                        <div class="iconStats-label">First Confirmation</div>
                                    </li>
                                    <li>
                                        <div class="iconStats-icon"><i class="icon-cust-arrow-cross"></i></div>
                                        <div class="iconStats-value">1 Minute</div>
                                        <div class="iconStats-label">Blocks</div>
                                    </li>
                                    <li>
                                        <div class="iconStats-icon"><i class="icon-cust-paper"></i></div>
                                        <div class="iconStats-value">Difficulty</div>
                                        <div class="iconStats-label">Retarget Every Block</div>
                                    </li>

                                </ul>
                            </div>

                            <div class="section-blackBook" id="features">

                                <hgroup>
                                    <h2 class="in-view">
                                        <span class="sub">BlackCoin's</span>
                                        <span class="main">Key Features</span>
                                    </h2>
                                </hgroup>
                                <div class="intro user-content">
                                    <p>BlackCoin has many fundamental advantages</p>
                                </div>
                                <div class="user-content" style="text-align:center;">
                                    <div class="contentLeft">
                                        <ul>
                                            <li>Low Inflation<br />
                                                <span class="featurelist">BlackCoin was widely distributed over a short proof of work mining phase. No new BlackCoins will ever be minted aside from the <a href="#one-percent-interest" class="modalbtn modal-trigger">1% yearly interest</a> paid to holders of BlackCoin.</span>

                                            <li>Fast Transactions<br />
                                                <span class="featurelist">BlackCoin's <a href="#proof-of-stake" class="modalbtn modal-trigger">proof of stake</a> system makes the BlackCoin network lightning fast. BlackCoin is the ideal digital currency for face to face transactions and all applications that value speed.</span>							  	  
                                            <li>Blockchain Security<br />
                                                <span class="featurelist">BlackCoin's network is <a href="#decentralized-network" class="modalbtn modal-trigger">secure</a> against the attacks other digital currencies face due to their reliability on large-scale mining operations to run their networks.</span>
                                        </ul>
                                    </div>
                                    <div class="contentRight">
                                        <ul>
                                            <li>Environmentally Sound<br />
                                                <span class="featurelist">The BlackCoin network does not require the use of large-scale, specialized hardware operations. BlackCoin is far more <a href="#energy-efficient" class="modalbtn modal-trigger">energy-efficient</a> than traditional digital currency networks.</span>	

                                            <li>Innovative Community<br />
                                                <span class="featurelist">BlackCoin has a strong and dedicated community made up of both talented developers and users working hard to push BlackCoin as far as it will go. <a href="http://blackhalo.info/" class="modalbtn modal-trigger">BlackHalo</a> is a perfect example of this. </span>									  

                                            <li>Wide Merchant Adoption<br />
                                                <span class="featurelist">New online merchants and services accept BlackCoin every day. Look for BlackCoin in more point of sale applications soon with recent addition to <a href="https://www.coinkite.com">CoinKite</a> merchant services.</span>							  
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
                                <span class="sub">Getting</span>
                                Started	    
                            </h2>
                        </div>
                    </div>
                    <div class="content">
                        <div class="contentContainer">
                            <hgroup>
                                <h2 class="in-view">
                                    <span class="sub">Getting Started with</span>
                                    <span class="main">BlackCoin</span>
                                </h2>
                            </hgroup>
                            <div class="intro user-content">
                                <p><strong>Enough technical jargon, lets get started with BlackCoin </strong></p>
                            </div>
                            <ul class="timeline">
                                <li class="year">1.</li>
                                <li>
                                    <span class="title"><a href="wallets" class="smoothScroll">Download a wallet</a></span>
                                    <span class="timeline-content">
                                        <p>First, you need to get a wallet to store your BlackCoins.</p>

                                        <a href="#wallets" class="smoothScroll btn-sm">PC Wallets</a>
                                        <a href="#web-wallets" class="btn-sm modalbtn modal-trigger">Web Wallets</a>
                                        <!--<a href="#wallet-guide" class="btn-sm modalbtn modal-trigger">Wallet How-To</a>-->
                                    </span>
                                </li>
                                <li class="year">2.</li>
                                <li>
                                    <span class="title">Buy BlackCoins</span>
                                    <span class="timeline-content">
                                        <p>Once you've got your wallet, you can now buy BlackCoins directly or trade for them with Bitcoins.</p>
                                        <p>BlackCoin Retailers:<br />
                                            <a href="https://expresscoin.com" target="_blank">Expresscoin <small>(USD, CND)</small></a>
                                            <a href="https://anycoindirect.eu/buy/blackcoins" target="_blank">Anycoin Direct <small>(EUR)</small></a>
                                            <!--<a href="http://litecoinfever.com/buy-cryptocurrency/" target="_blank">Litecoinfever <small>(USD, Paypal)</small></a>-->
                                        </p>
                                        <p>Fiat Exchanges:<br />
                                            <a href="https://bittylicious.com/" target="_blank">Bittylicious <small>(GBP)</small></a>, 
                                            <a href="https://bter.com/trade/bc_cny" target="_blank">BTER <small>(CNY)</small></a>, 
                                            <a href="https://www.litebit.eu/coin/bc/en/" target="_blank">LiteBit <small>(EURO)</small></a>, 
                                            <a href="https://prelude.io/trade/usd/bc" target="_blank">Prelude <small>(USD)</small></a>,<br />
                                            <a href="https://www.vaultofsatoshi.com/" target="_blank">Vault of Satoshi <small>(USD, CAD)</small></a></p>
                                        <p>Coin Exchanges:<br />
                                            <a href="https://bittrex.com/Market/Index?MarketName=BTC-BC" target="_blank">Bittrex</a>, <a href="https://bter.com/trade/bc_cny" target="_blank">BTER</a>, 
                                            <a href="https://www.cryptsy.com/markets/view/179" target="_blank">Cryptsy</a>, 
                                            <a href="https://www.mintpal.com/market/BC/BTC" target="_blank">Mintpal</a>, 
                                            <a href="https://poloniex.com/exchange/btc_bc" target="_blank">Poloni.ex</a></p>
                                        <!--
                                        <a href="http://howtobuyblackcoin.com" class="btn-sm">How To Buy BlackCoin</a>
                                        -->
                                    </span>
                                </li>
                                <li class="year">3.</li>
                                <li>
                                    <span class="title">Stake your BlackCoins</span>
                                    <span class="timeline-content">
                                        <p>BlackCoin holders receive 1% compounded yearly interest through a process called staking.</p>
                                        <a href="#staking" class="btn-sm modalbtn modal-trigger">Staking How-To</a>
                                    </span>
                                </li>
                                <li style="padding-top:40px;">
                                    <span class="title">Mine for BlackCoins</span>
                                    <span class="timeline-content">
                                        <p>BlackCoin is no longer mineable, but your mining power can be used to mine other coins, trade them, and pay in BlackCoin.</p>
                                        <a href="http://blackcoinpool.com/" class="btn-sm">BlackCoin Pool</a>
                                        <a href="http://cryptoalts.com/" class="btn-sm">CryptoAlts</a>
                                    </span>
                                </li>
                                <li class="year">4.</li>
                                <li>
                                    <span class="title">Spend your BlackCoins</span>
                                    <span class="timeline-content">
                                        <p>Now that you've got some BlackCoins you can do some shopping at many online and retail merchants.</p>

                                        <p>You can locate merchants accepting BlackCoin with these links:</p>

                                        <a href="http://blackcoindirectory.com#products" class="btn-sm">BlackCoin Directory</a>
                                        <a href="http://blackcoinmap.com" class="btn-sm">BlackCoin Map</a>
                                    </span>
                                </li>
                                <li class="year">5.</li>
                                <li>
                                    <span class="title"><a href="#community">Join the community</a></span>
                                    <span class="timeline-content">
                                        <p>We have a dedicated, positive and friendly community made up of both BlackCoin users and developers.</p> 


                                        <a href="#community" class="smoothScroll btn-sm">Join Us Today</a>
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
                                <span class="sub">BlackCoin</span>
                                Wallets		    
                            </h2>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="content">
                        <div class="contentContainer">
                            <hgroup>
                                <h2>
                                    <span class="sub">Download</span>
                                    <span class="main">A Wallet</span>
                                </h2>
                            </hgroup>
                            <!-- L/R Nav -->
                            <a href="#" class="profile-nav profile-nav-prev"><i class="icon-cust-arrow-left"></i></a>
                            <a href="#" class="profile-nav profile-nav-next"><i class="icon-cust-arrow-right"></i></a>
                            <!-- Profile Gallery -->
                            <div class="profile-pagination">
                                <div class="profile-pagination">
                                    <div class="swiper-pagination-switch swiper-visible-switch swiper-active-switch">PC</div>
                                    <div class="swiper-pagination-switch">Smartphone</div>
                                </div>
                            </div>
                            <div class="profile-container">
                                <div class="profile-wrapper">
                                    <div class="profile-slide profile-imac">
                                        <div class="profile-slide-wrapper">
                                            <!-- Windows --> 
                                            <img src="./img/profile/windows.png" alt="" />
                                            <div class="btnContainer">
                                                <a href="<?php echo $wallet["windows"]; ?>" class="btn" target="_blank">Download Windows <?php echo $wallet["windows_ver"]; ?></a>
                                            </div>
                                            <!-- Linux--> <br><br><br>
                                            <img src="./img/profile/linux.png" alt="" />
                                            <div class="btnContainer">
                                                <a href="<?php echo $wallet["linux"]; ?>" class="btn" target="_blank">Download Linux <?php echo $wallet["linux_ver"]; ?></a>
                                            </div>
                                            <!-- Mac--> <br><br><br>
                                            <img src="./img/profile/mac.png" alt="" />
                                            <div class="btnContainer">
                                                <a href="<?php echo $wallet["mac"]; ?>" class="btn" target="_blank">Download Mac <?php echo $wallet["mac_ver"]; ?></a>
                                            </div>
                                            <!-- Github--> <br><br><br>
                                            <img src="./img/profile/github.png" alt="" />
                                            <div class="btnContainer">
                                                <a href="https://github.com/rat4/blackcoin" class="btn" target="_blank">BlackCoin Codebase</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-slide profile-iphone">
                                        <div class="profile-slide-wrapper">
                                            <!-- Android --> <br>
                                            <img src="./img/profile/android.png" alt="" />
                                            <div class="btnContainer">
                                                <a href="https://play.google.com/store/apps/details?id=com.sinet3k.blkice" class="btn" target="_blank"><i>Download Android</i></a>
                                            </div>
                                            <!-- iOS--> <br><br><br>
                                            <img src="./img/profile/ios.png" alt="" />
                                            <div class="btnContainer">
                                                <a href="#" class="btn" target="_blank"><i>iOS Coming Soon</i></a>
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
                                <span class="sub">Join the</span>
                                Community		  
                            </h2>
                            <br>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="content">
                        <div class="contentContainer">
                            <hgroup>
                                <h2>
                                    <span class="sub">Join</span>
                                    <span class="main">Our Community</span>
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
                                        <a href="http://www.reddit.com/r/blackcoin/" class="btn" target="_blank">Join Reddit</a>
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
                                        <a href="https://twitter.com/coinblack" class="btn" target="_blank">Follow us on Twitter</a>
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
                                        <a href="http://webchat.freenode.net/?channels=%23blackcoinpool&amp;uio=d4" class="btn" target="_blank">Chat on IRC</a>
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
                                        <a href="https://www.facebook.com/coinblack" class="btn" target="_blank">Like us on Facebook</a>
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
                                <span class="sub">BlackCoin</span>
                                News		    
                            </h2>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="content">
                        <div class="contentContainer">
                            <!-- News -->

                                <?php // Yayaya we gonna do some php tricks ?>

                            <ul class="events-list">
                                <li class="event-titles">
                                    <div class="event-title">Article</div>
                                    <div class="event-title">Date</div>
                                    <div class="event-title">Author</div>
                                </li>
                                <?php // GetSingleNewsItem("d1f41b86a9da"); ?>
                                <?php
                                Db::Connect('mysql:dbname=blackcoin_wp1;host=localhost', 'blackcoin_wp1', 'E*RWoUYf4O17#(6');

                                $result = Db::Query("SELECT * FROM `wp_posts` WHERE post_status = 'publish' AND post_type='post' ORDER BY  `wp_posts`.`post_date` DESC LIMIT 0 , 5");

                                while ($row = Db::Fetch($result)) {
                                    // echo "kings";

                                    $uid = $row->post_author;
                                    $author = "";

                                    $resultUser = Db::Query("SELECT * FROM `wp_users` WHERE ID = '$uid'");
                                    while ($rowUser = Db::Fetch($resultUser)) {
                                        $author = $rowUser->display_name;
                                    }

                                    $url = $row->post_name;
                                    $url = "news/" . $url;

                                    $title = $row->post_title;
                                    $title = utf8_encode($title);

                                    $date = $row->post_date;
                                    $date = explode(' ', $date);
                                    $date = $date[0];

                                    // Get first 20 preview lines
                                    $preview = $row->post_content;
                                    $preview = strip_tags($preview);
                                    $preview = implode(' ', array_slice(explode(' ', $preview), 0, 20));
                                    $preview .= "...";
                                    $preview = utf8_encode($preview);

                                    $img = "";

                                    GetNewsItem($url, $author, $title, $date, $preview, $img);
                                }
                                ?>
                            </ul>

                            <div class="btnContainer">
                                <a href="news-archive.php" class="btn" style="margin-top:3em;">News Archive</a>
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
