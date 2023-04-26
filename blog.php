<?php $title="Blog";$level="";?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>
<body>
<div class="bread_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Blog</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<main class="site-main category-main">
    <div class="container">
        <div class="row">
            <section class="category-content col-sm-9">
                <h2 class="category-title">BLOG</h2>

                <div id="blog-content"></div>

            </section>
            <aside class="sidebar col-sm-3">
                <div class="widget">
                    <h4>ARCHIVE</h4>
                    <ul id="archive">
                        <li class="current" onclick="getPosts('Fall 2020'); makeCurrent(this);"><a href="javascript:;" title="">Fall 2020</a></li>
                        <li onclick="getPosts('Fall 2019'); makeCurrent(this);"><a href="javascript:;" title="">Fall 2019</a></li>
                        <li onclick="getPosts('Spring 2020'); makeCurrent(this);"><a href="javascript:;" title="">Spring 2020</a></li>
                        <li onclick="getPosts('Spring 2019'); makeCurrent(this);"><a href="javascript:;" title="">Spring 2019</a></li>
                        <li onclick="getPosts('Fall 2018'); makeCurrent(this);"><a href="javascript:;" title="">Fall 2018</a></li>
                        <li onclick="getPosts('Spring 2018'); makeCurrent(this);"><a href="javascript:;" title="">Spring 2018</a></li>
                        <li onclick="getPosts('Fall 2017'); makeCurrent(this);"><a href="javascript:;" title="">Fall 2017</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</main>

<?php include 'footer.php';?>
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

    function makeCurrent(item) {
        //if it is current turn it off
        old = document.getElementsByClassName("current")[0];
        old.classList.remove("current");

        //if it is clicked turn it on
        item.classList.add("current");
    }

    function getPosts(period) {
        ref.on("value", function(snapshot) {
            bigString ="<ul class=\"media-list\">";
            for(i=0; i<snapshot.val().posts.length; i++){
                if(snapshot.val().posts[i].semester == period) {
                    bigString += makePost(snapshot.val().posts[i]);
                }
            }
            bigString += "</ul>";
            document.getElementById("blog-content").innerHTML = bigString;


        }, function (error) {
            console.log("Error: " + error.code);
        });
    }

    
    function makePost(data) {
        bigString = "";
        bigString += "<li class=\"media\">";
        bigString += "<div class=\"media-left\">";
        bigString += "<a href=\"post.php?id="+ data.id +"\" title=\"Post\">";
        bigString += "<img class=\"media-object\" src=\""+ data.thumbnail +"\" alt=\"post thumbnail\"></a></div>";
        bigString += "<div class=\"media-body\">";
        bigString += "<h3 class=\"media-heading\"><a href=\"post.php?id="+ data.id +"\" title=\"Post Title\">"+ data.title +"</a></h3>";
        bigString += "<p>"+ data.excerpt +"</p>";
        bigString += "<aside class=\"meta category-meta\"><div class=\"pull-left\">";
        if(data.category == "company"){
            bigString += "<div class=\"arc-comment\"><i class=\"fa fa-building\"></i> Company Visit</div>";
        }else if(data.category == "projects"){
            bigString += "<div class=\"arc-comment\"><i class=\"fa fa-pencil\"></i> Projects Update</div>";
        }else if(data.category == "alumni"){
            bigString += "<div class=\"arc-comment\"><i class=\"fa fa-graduation-cap\"></i> Alumni Talk</div>";
        }else if(data.category == "event"){
            bigString += "<div class=\"arc-comment\"><i class=\"fa fa-calendar-o\"></i> WiC Event</div>";
        }else if(data.category == "member"){
            bigString += "<div class=\"arc-comment\"><i class=\"fa fa-user\"></i> Member Highlight</div>";
        }
        bigString += "<div class=\"arc-date\">"+ data.date +"</div>";
        bigString += " </div> <div class=\"pull-right\"> <ul class=\"arc-share\">";
        bigString += "<li><a href=\"https://www.facebook.com/sharer/sharer.php?u=http%3A//wic.rit.edu/post.php?\id="+ data.id +"\" target=\"_blank\" title=\"Post\"><i class=\"fa fa-facebook\"></i></a></li>";
        bigString += "<li><a href=\"https://twitter.com/home?status=Check%20out%20this%20WiC%20Blog%20post!%0Ahttp%3A//wic.rit.edu/post.php?\id="+ data.id +"\" target=\"_blank\" title=\"Post\"><i class=\"fa fa-twitter\"></i></a></li>";
        bigString += "</ul></div></aside></div></li>";
        return bigString;

    }

    window.onload = getPosts("Fall 2020"); //CHANGE THIS EVERY SEMESTER

</script>