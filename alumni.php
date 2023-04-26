<!DOCTYPE html>
<html>
<head>
    <?php include 'newheader.php';?>
    <title>Alumni | Women in Computing</title>
</head>
<body>

<?php include 'newnav.php';?>

<div class="pgcontainer">
    <div class="pgsidebar">
        <div class="eventType">About</div>
        <div class="line"></div>

        <div id="sidebarlinks">
            <a href="/mission.php">Mission</a><br>
            <a href="/faq.php">FAQ</a><br>
            <a style="color:var(--accent); font-weight:700" href="/alumni.php">Alumni</a><br>
            <a href="/scholarships.php">Scholarships</a><br>
            <a href="/tutoring.php">Tutoring</a>
            <!--end of sidebar links-->
        </div>

        <!-- end of page sidebar -->
    </div>
    <div class="pgcontent">

        <div class="pgheading">Alumni</div>
        <div class="pgline"></div>

        <p>
            Women in Computing is dedicated to supporting and showcasing their alumni. We love to stay in contact with our alumni, to find out where they are and what they are doing. Giving our current members people to look up to encourages them to succeed and reminds them why they should work hard. We are so glad you joined the WiC community during your time at RIT and we want you to know you can always have an active part in it. Please send us an email if you have anything to contribute. Whether it is giving a tech talk, hosting a company recruitment event, or sponsoring a WiC event, you are always welcome!

        </p>

        <div class="pgheading">Spotlight</div>
        <div style="margin-bottom:1.5em" class="pgline"></div>

        <div class="alumni-container">

            <div class="alumniSlides">
                <img src="img/alumni/alumni1.png" style="width:100%">
            </div>

            <div class="alumniSlides">
                <img src="img/alumni/alumni2.png" style="width:100%">
            </div>

            <div class="alumniSlides">
                <img src="img/alumni/CaseyKlimkowskyFinal.png" style="width:100%">
            </div>

            <div class="alumniSlides">
                <img src="img/alumni/alumni4.png" style="width:100%">
            </div>

            <div class="alumniSlides">
                <img src="img/alumni/alumni5.png" style="width:100%">
            </div>

            <div class="alumniSlides">
                <img src="img/alumni/KirstieFaileyFinal.png" style="width:100%">
            </div>

            <div class="alumniSlides">
                <img src="img/alumni/alumni7.png" style="width:100%">
            </div>

            <div class="alumniSlides">
                <img src="img/alumni/alumni8.png" style="width:100%">
            </div>

            <div class="alumniSlides">
                <img src="img/alumni/alumni9.png" style="width:100%">
            </div>

            <div class="alumniSlides">
                <img src="img/alumni/alumni10.png" style="width:100%">
            </div>

            <div class="alumniSlides">
                <img src="img/alumni/alumni11.png" style="width:100%">
            </div>

            <div class="alumniSlides">
                <img src="img/alumni/alumni12.png" style="width:100%">
            </div>

            <div class="alumniSlides">
                <img src="img/alumni/alumni13.png" style="width:100%">
            </div>

            <div class="alumniSlides">
                <img src="img/alumni/alumni14.png" style="width:100%">
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
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
            <span class="dot" onclick="currentSlide(9)"></span>
            <span class="dot" onclick="currentSlide(10)"></span>
            <span class="dot" onclick="currentSlide(11)"></span>
            <span class="dot" onclick="currentSlide(12)"></span>
            <span class="dot" onclick="currentSlide(13)"></span>
            <span class="dot" onclick="currentSlide(14)"></span>

        </div>

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
                var slides = document.getElementsByClassName("alumniSlides");
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