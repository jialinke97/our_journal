
<!DOCTYPE html>
<html lang="en">

<?php include('includes/head.php'); ?>

<body>
<?php include('includes/header.php'); ?>

<main>

<section class="index">
<div class="index"> 
<p class="index"> We wanted, it seemed, what we already had, <br> a lover and a friend to create with, side by side. To be loyal, yet be free. 
<br> <br> Escape with me. </p>
</div>    

<div data-tilt> <!-- Tilt element -->
<div id="videosList"> 

<div class="video">
<div> <p> 01. Dreams </p> </div>
    <video height="600" width="330" class="thevideo" loop preload="none">
    <source src="videos/Fountain.mp4" type="video/mp4">
    Your browser does not support the video tag.
    </video>
</div>
</div>
</div>

</section>

</main>
<script type="text/javascript">
var figure = $(".video").hover( hoverVideo, hideVideo );

function hoverVideo(e) {  
    $('video', this).get(0).play(); 
}

function hideVideo(e) {
    $('video', this).get(0).pause(); 
}
</script>

<script src="scripts/tilt.jquery.js"></script> <!-- Load Tilt.js library -->

</body>
</html>
