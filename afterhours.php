<!DOCTYPE html>
<html>
<head>
    <?php include 'newheader.php';?>
    <title>After Hours | Women in Computing</title>
</head>
<body>

<?php include 'newnav.php';?>


<div class="pgcontainer">
    <div class="afterhourssidebar">
        <div class="eventType">Information</div>
        <div class="line"></div>

        <div id="sidebarlinks">
            <!-- <a target="_blank" href="/pdfs/2020FAQWiCOvernight.pdf">FAQ</a><br> -->
            <!-- <a target="_blank" href="/pdfs/Tentative_Schedule20.pdf">Tentative Schedule</a><br> -->
            <a target="_blank" href="/pdfs/PackingList.pdf">Packing List</a><br>
            <a target="_blank" href="https://maps.rit.edu/">Campus Map</a><br>
            <img style="margin-top:1em; width:150px" src="img/afterhours/afterhourslogo.png">
            <!--end of sidebar links-->
        </div>

        <!-- end of page sidebar -->
    </div>
    <div class="pgcontent">

        <div class="pgheading">After Hours</div>
        <div style="margin-bottom:2em;" class="pgline"></div>

        <div class="alumni-container">

            <div class="afterhourSlides">
                <img src="img/afterhours/afterhours1.jpeg" style="width:100%">
            </div>

            <div class="afterhourSlides">
                <img src="img/afterhours/afterhours2.jpeg" style="width:100%">
            </div>

            <div class="afterhourSlides">
                <img src="img/afterhours/afterhours3.jpeg" style="width:100%">
            </div>

            <div class="afterhourSlides">
                <img src="img/afterhours/afterhours4.jpeg" style="width:100%">
            </div>

            <div class="afterhourSlides">
                <img src="img/afterhours/afterhours5.jpeg" style="width:100%">
            </div>

            <a style="text-decoration:none; color:var(--accent)!important;" class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a style="text-decoration:none; color:var(--accent)!important;" class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>

        </div>

        <p style="margin-top:2em;">The Women in Computing (WiC) After Hours Program is a yearly event by invitation only for students accepted into the B. Thomas Golisano College of Computing and Information Sciences. It is typically held at the end of March and first week in April. Students choose one weekend to attend.</p>

        <p>At After Hours you will learn about RIT and WiC, as well as meet other accepted and current students. It is organized and hosted by Women in Computing students and in conjunction with the RIT Admission’s Office. It is a great opportunity to meet new friends and possibly your future roommate! This program is BY INVITATION ONLY. Don’t miss this opportunity to get connected to your home away from home! Check out some of our current <a href="http://wic.rit.edu/studentstories.php">Student Stories</a>!</p>

        <!-- <p>Invitations are sent to all female students who have been accepted to RIT's B. Thomas Golisano College of Computing and Information Sciences.</p> -->

        <!-- <p>Read about: <a href="http://wic.rit.edu/post.php?id=20">After Hours 2019</a>, <a href="http://wic.rit.edu/post.php?id=5">After Hours 2018</a>.</p> -->

        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("afterhourSlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
            }
        </script>





        <!--end of page content-->
    </div>
    <!-- end of page container -->
</div>

<?php include 'newfooter.php';?>

</body>

</html>