<?php
  $current_file = basename($_SERVER['PHP_SELF']);
  $indexarray = array('index.html', 'Home');
  $storiesarray = array('stories.php','Stories');
  $galleryarray = array('gallery.php', 'Gallery');
  $navigation = array ($indexarray, $storiesarray, $galleryarray);
?>

 <header>

    <nav>
      <ul>
        <?php
        foreach ($navigation as $element) {
          if ($current_file == $element[0]) {
            echo "<li class = 'currentpage'> <a href = ".$element[0]."> $element[1] </a> </li>";
          } else
            echo "<li> <a href = ".$element[0]."> $element[1] </a> </li>";
        }

        ?>
      </ul>
    </nav>
</header>
