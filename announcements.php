<?php $title="Announcements";$level="";?>
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
                    <li class="active">Announcements</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<main class="site-main category-main">
    <div class="container">
        <div class="row">
            <section class="category-content col-sm-9">
                <h2 class="category-title">ANNOUNCEMENTS</h2>

                <div id="announcements-content"></div>

            </section>
            <aside class="sidebar col-sm-3">
                <div class="widget">
                    <h4>ARCHIVE</h4>
                    <ul id="archive">
                        <li class="current" onclick="getPosts('Fall 2019'); makeCurrent(this);"><a href="javascript:;" title="">Fall 2019</a></li>
                </div>
            </aside>
        </div>
    </div>
</main>

<?php include 'footer.php';?>

<script src="https://www.gstatic.com/firebasejs/6.3.3/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.3.3/firebase-database.js"></script>
<script>

    // Your web app's Firebase configuration
    const firebaseConfig = {
        apiKey: "AIzaSyDWjDu6xik5sE2LFOTbVdF5q_IXKiYh-Vk",
        authDomain: "wic-announcements.firebaseapp.com",
        databaseURL: "https://wic-announcements.firebaseio.com",
        projectId: "wic-announcements",
        storageBucket: "wic-announcements.appspot.com",
        messagingSenderId: "625263131467",
        appId: "1:625263131467:web:aadfcf7d5b9c9c40"
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);

    var ref = firebase.database().ref();


    function displayTest(){
        ref.on("value", function (snapshot) {
            var data = snapshot.val().masterSheet;
            bigString = "";
            for(i=0;i<data.length; i++){
                //length - i - 1 to put most recent at the top
                bigString += makeAnnouncement(data[data.length-i-1]);
            }
            document.getElementById("announcements-content").innerHTML = bigString;
        });
    }
    function makeAnnouncement(row){
        var T = row.date.indexOf("T");
        bigString = "<div class='single_announce'>";
        bigString += "<h2>" + row.title + "</h2>";
        bigString += "<h4>" + row.date.substring(0, T) + "</h4>";
        bigString += "<p>" + row.body + "</p>";
        bigString += "</div>";
        return bigString;
    }

    window.onload = displayTest();
</script>



</body>
</html>