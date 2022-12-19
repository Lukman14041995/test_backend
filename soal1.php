<?php

    for ($i = 1; $i <= 5; $i++) {
      $j = 1;
      while ($j <= 5 + 3) {
        echo $j;
        if ($i == $j) {
          echo "**";
          $j += 2;
        }
        $j++;
      }
      echo "<br>";
    }

  
?>