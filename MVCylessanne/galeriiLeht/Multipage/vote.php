<?php
require_once('head.html');
require_once('masiiv.php');
?>

<div id="wrap">
	<h3>Vali oma lemmik :)</h3>
	<form action="tulemus.php" method="GET">
         <?php
                global $galerii;
                foreach ($galerii as $key => $value) {
                    $key++;
                    echo "<p>";
			            echo "<label for=\"p".$key."\">";
				            echo "<img src=\"".$value ."\"". "alt=\"nimetu".$key."\"". "height=\"100\"/>";
			            echo"</label>";
			            echo "<input type=\"radio\"".  "value=\"".$key."\"". "id=\"p".$key."\"". "name=\"pilt\"/>";
		            echo "</p>";
                }
         ?>
		<br/>
		<input type="submit" value="Valin!"/>
	</form>

</div>
<?php
require_once('foot.html');
?>