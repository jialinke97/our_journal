
<!DOCTYPE html>
<html lang="en">

<?php include('includes/head.php'); ?>

<body>

<main>

<section>
<div class="start">
<figure> <img alt="Cassette Tape" src="images/cassette.gif"> </figure>
</div>
</section>

<section>
<div> 
<p class="start"> <span class="typing"> </span> </p>
</div>
</section>

<section>
<div>
<a href="index.php" class="button" ::before> Continue</a>
</div>
</section>

</main>
<script src="scripts/jquery-3.4.1.js"></script>
<script src="scripts/typed.min.js"></script>
<script type="text/javascript">

var typed = new Typed('.typing', {
  strings: ["T.","This is the story of a girl who fell in love with a boy. <br> This boy turns 23 on June 3rd, 2019."],
  // strings: ["T.",'npm install^1000\n `installing components...` ^1000\n `Fetching from source...`'],
  typeSpeed: 70
});

</script>

</body>
</html>
