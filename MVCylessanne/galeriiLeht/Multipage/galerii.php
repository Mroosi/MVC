﻿<?php
require_once('head.html');
require_once('masiiv.php');
?>
<div id="wrap">
	<h3>Fotod</h3>
	<div id="gallery">
        <?php
                global $galerii;
                foreach ($galerii as $key => $value) {
                    echo "<img src=\"".$value."\"". "alt=\"nimetu".$key." \"". "/>";
                }
                
         ?>
	</div>
</div>

<?php
require_once('foot.html');
?>
