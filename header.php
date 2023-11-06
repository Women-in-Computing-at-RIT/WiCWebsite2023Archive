<!-- cookie stuff -->
<script>
    function setCookie(cname,cvalue,exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    function checkCookie() {
        var cookie = getCookie("wicalert");
        if (cookie == "true") {
            document.getElementsByClassName("alertwic")[0].style.display = "none";
        }
    }
</script>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118010790-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-118010790-1');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="qtyip_WLR-DScsdgFgnjSDFbH7vB_ftpnDFHdIBFVFU" />
    <title><?php echo $title;?> | Women in Computing</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=latin-ext" rel="stylesheet">


    <!-- <base href="http://localhost:8888/" />-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
    <link href="<?php echo $level ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $level ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $level ?>style.css" rel="stylesheet">
    <link href="<?php echo $level ?>ritstyle.css" rel="stylesheet">
    
    <link rel="shortcut icon" href="<?php echo $level ?>favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo $level ?>favicon.ico" type="image/x-icon">
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<header class="site-header">

    <!--
        <div class="top">
            <div id="metanav">
		      <p>Site-wide links</p>
                <ul>
                    <li id="metaskip"><a href="#pagecontent" title="Skip to content">Skip to content</a></li>
                    <li id="metarithome"><a href="https://www.rit.edu/" title="RIT Home"><span id="metarithometext">RIT Home</span><span id="metaritlogo"></span></a></li>
                    <li id="metaritdirectories"><a href="https://www.rit.edu/directories.html">Directories</a></li>
                </ul>
	        </div>
        </div>

        -->


<div class="ritlogo">
    <img style="width:250px; padding:.5em; box-sizing:border-box;" src="ritlogo.png" alt="rit logo">
</div>


        <!--<div class="alertwic">
            <span class="closebtn" onclick="this.parentElement.style.display='none';setCookie('wicalert', 'true', 1);">x</span>
             <a href="/statement.php">
                 <strong >A statement from WiC about these unprecedented times</strong>
             </a>
        </div>-->




        <!--<div class="alertwic">
            <span class="closebtn" onclick="this.parentElement.style.display='none';setCookie('wicalert', 'true', 1);">&times;</span>
             <a href="https://wichacks.io">
                 <strong >Registration for WiCHacks is now open! </strong> <u>Click here</u> to apply!
             </a>
        </div>-->


    <!-- <div class="alertcyber">
            <span class="closebtn" onclick="this.parentElement.style.display='none';setCookie('wicalert', 'true', 1);">&times;</span>
             <a href="/WiCstatement.php" style="color: white">
                 <strong>A statement from WiC regarding violence against the Asian community</strong>
             </a>
        </div>-->




        <nav class="navbar navbar-default">
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-bars"></i></button>
				<a href="<?php echo $level ?>index.php" class="navbar-brand">
					<img id="headerlogo" src="<?php echo($level)?>img/logo.png" alt="header logo">
				</a>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                    <ul class="nav navbar-nav main-navbar-nav">
                        <li <?php if($title=="Home"){echo "class='active'";} ?> ><a href="<?php echo $level ?>index.php" title="">HOME</a></li>
                        <li class="dropdown <?php if(($title=="Mission") || ($title=="FAQ") || ($title=="Alumni") || ($title=="Scholarships") || ($title=="Tutoring")){echo "active";} ?>">
                            <a href="<?php echo $level ?>mission.php" title="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $level ?>mission.php" title="">MISSION</a></li>
                                <li><a href="<?php echo $level ?>faq.php" title="">FAQ</a></li>
                                <!--<li><a href="<?php echo $level ?>committees.php" title="">COMMITTEES</a></li>-->
                                <!--<li><a href="<?php echo $level ?>allies.php" title="">ALLIES</a></li>-->
                                <!--<li><a href="<?php echo $level ?>projects.php" title="">PROJECTS</a></li>-->
                                <li><a href="<?php echo $level ?>alumni.php" title="">ALUMNI</a></li>
                                <li><a href="<?php echo $level ?>scholarships.php" title="">SCHOLARSHIPS</a></li>
                                <li><a href="<?php echo $level ?>tutoring.php" title="">TUTORING</a></li>
                            </ul>
                        </li>
                        <li class="dropdown  <?php if(($title=="Events") || ($title=="Annual Events") || ($title=="WiCHacks") || ($title=="In The News") || ($title=="After Hours")){echo "active";} ?>">
                            <a href="<?php echo $level ?>events.php" title="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EVENTS<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $level ?>afterhours.php" title="">AFTER HOURS</a></li>
                                <li><a href="<?php echo $level ?>rocgirlhacks.php" title="">ROCGIRL HACKS</a></li>
                                <li><a href="<?php echo $level ?>events.php" title="">UPCOMING CALENDAR</a></li>
                                <li><a href="<?php echo $level ?>wichacks.php" title="">WICHACKS</a></li>
                                <li><a href="<?php echo $level ?>annual_events.php" title="">ANNUAL EVENTS</a></li>
                                <li><a href="<?php echo $level ?>news.php" title="">IN THE NEWS</a></li>
                                <!--<li><a href="<?php echo $level ?>tutoring.php" title="">TUTORING</a></li>-->
                            </ul>
                        </li>
                        <li class="dropdown  <?php if(($title=="Committees") || ($title=="Projects") || ($title=="Allies") || ($title=="Outreach")){echo "active";} ?>">
                            <a href="<?php echo $level ?>events.php" title="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">COMMITTEES<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $level ?>committees.php" title="">COMMITTEE HEADS</a></li>
                                <li><a href="<?php echo $level ?>projects.php" title="">PROJECTS</a></li>
                                <li><a href="<?php echo $level ?>allies.php" title="">ALLIES</a></li>
                                <li><a href="<?php echo $level ?>outreach.php" title="">OUTREACH</a></li>
                                <!--<li><a href="<?php echo $level ?>tutoring.php" title="">TUTORING</a></li>-->
                            </ul>
                        </li>
                        <!--<li <?php if($title=="After Hours"){echo "class='active'";} ?>><a href="<?php echo $level ?>afterhours.php" title="">AFTER HOURS</a></li>-->
                        <!--<li <?php if($title=="Student Stories"){echo "class='active'";} ?>><a href="<?php echo $level ?>studentstories.php" title="">STUDENT STORIES</a></li>-->
                        <li <?php if($title=="Blog"){echo "class='active'";} ?>><a href="<?php echo $level ?>blog.php" title="">BLOG</a></li>
                        <li <?php if($title=="Sponsor"){echo "class='active'";} ?>><a href="<?php echo $level ?>sponsor.php" title="">SPONSOR</a></li>
                        <li <?php if($title=="Contact Us"){echo "class='active'";} ?>><a href="<?php echo $level ?>contact.php" title="">CONTACT US</a></li>
                    </ul>                           
                </div><!-- /.navbar-collapse -->                
				<!-- END MAIN NAVIGATION -->
			</div>
		</nav>        
    </header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <script src="<?php echo $level ?>js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('.carousel[data-type="multi"] .item').each(function(){
          var next = $(this).next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));

          for (var i=0;i<4;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
          }
        });
        window.onload = checkCookie();


    </script>


