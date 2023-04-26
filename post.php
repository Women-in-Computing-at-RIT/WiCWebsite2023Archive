<?php $title="Blog";
$level="" ?>
<!DOCTYPE html>
<html lang="en">
<body>
<?php include $level.'header.php';?>
<div class="bread_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="<?php echo($level)?>index.php">Home</a></li>
                    <li><a href="<?php echo($level)?>blog.php">Blog</a></li>
                    <li class="semester"></li>
                    <li class="active title"></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<main class="site-main page-main">
    <div class="container">
        <div class="row">
            <section class="page col-sm-9">
                <h2 class="page-title title"></h2>
                <div class="entry">
                    <div class="text"></div>
                    <br>
                    <img class="blogimg image" src="" alt="pic">

                    <div class="blogbtminfo">
                        <span class="blogdate date"></span>
                        <span class="pipe">| </span>
                        <span class="blogtype"><i class="category"></i><span class="categorytxt">Company Visit</span></span>
                    </div>

                    <div class="blogbtmback">
                        <a href="<?php echo($level)?>blog.php"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Back to Blog</a>
                    </div>

                </div>
            </section>
            <aside class="sidebar col-sm-3">
                <p class="blogback"><a href="<?php echo($level)?>blog.php"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>Back to Blog</a></p>
                <img class="logo" src="" alt="logo">
            </aside>
        </div>
    </div>
</main>
<?php include $level.'footer.php';?>
</body>
</html>

<script src="https://www.gstatic.com/firebasejs/4.9.0/firebase.js"></script>
<script>
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyAV5cn423SBSGbGQLwTXwTJqJc-kHM444k",
        authDomain: "wic-blog.firebaseapp.com",
        databaseURL: "https://wic-blog.firebaseio.com",
        projectId: "wic-blog",
        storageBucket: "wic-blog.appspot.com",
        messagingSenderId: "888807489798"
    };
    firebase.initializeApp(config);

    // Get a reference to the database service
    var ref = firebase.database().ref();

    function getQueryVariable(variable)
    {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i=0;i<vars.length;i++) {
            var pair = vars[i].split("=");
            if(pair[0] == variable){return pair[1];}
        }
        return(false);
    }

    function start() {
        id = getQueryVariable("id");
        ref.on("value", function(snapshot) {
            data = snapshot.val().posts[id];
            if(data == undefined){
                window.location.href = "/blog-old.php";
            }else{
                for(i=0; i<document.getElementsByClassName("semester").length; i++){
                    document.getElementsByClassName("semester")[i].innerHTML = data.semester;
                }
                for(i=0; i<document.getElementsByClassName("title").length; i++){
                    document.getElementsByClassName("title")[i].innerHTML = data.title;
                }
                for(i=0; i<document.getElementsByClassName("text").length; i++){
                    document.getElementsByClassName("text")[i].innerHTML = data.text;
                }
                for(i=0; i<document.getElementsByClassName("date").length; i++) {
                    document.getElementsByClassName("date")[i].innerHTML = "Posted: " + data.date;
                }
                for(i=0; i<document.getElementsByClassName("image").length; i++) {
                    if(data.image == ""){
                        document.getElementsByClassName("image")[i].style.display = "none";
                    }else {
                        document.getElementsByClassName("image")[i].src = data.image;
                    }
                }
                for(i=0; i<document.getElementsByClassName("logo").length; i++) {
                    if(data.logo == ""){
                        document.getElementsByClassName("logo")[i].style.display = "none";
                    }else {
                        document.getElementsByClassName("logo")[i].src = data.logo;
                    }
                }

                //category
                if(data.category == "company"){
                    for(i=0; i<document.getElementsByClassName("category").length; i++) {
                        document.getElementsByClassName("category")[i].classList.add("fa");
                        document.getElementsByClassName("category")[i].classList.add("fa-building");
                        document.getElementsByClassName("categorytxt")[i].innerHTML = " Company Visit";
                    }
                }else if(data.category == "projects"){
                    for(i=0; i<document.getElementsByClassName("category").length; i++) {
                        document.getElementsByClassName("category")[i].classList.add("fa");
                        document.getElementsByClassName("category")[i].classList.add("fa-pencil");
                        document.getElementsByClassName("categorytxt")[i].innerHTML = " Projects Update";
                    }
                }
                else if(data.category == "alumni"){
                    for(i=0; i<document.getElementsByClassName("category").length; i++) {
                        document.getElementsByClassName("category")[i].classList.add("fa");
                        document.getElementsByClassName("category")[i].classList.add("fa-graduation-cap");
                        document.getElementsByClassName("categorytxt")[i].innerHTML = " Alumni Talk";
                    }
                }
                else if(data.category == "event"){
                    for(i=0; i<document.getElementsByClassName("category").length; i++) {
                        document.getElementsByClassName("category")[i].classList.add("fa");
                        document.getElementsByClassName("category")[i].classList.add("fa-calendar-o");
                        document.getElementsByClassName("categorytxt")[i].innerHTML = " WiC Event";
                    }
                }
            }


        }, function (error) {
            console.log("Error: " + error.code);
        });

    }
    window.onload = start();
</script>