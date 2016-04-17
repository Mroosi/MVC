
<div id="wrap">
	<h3>Valiku tulemus</h3>
	<p><?php if(isset($_POST)) {
                require_once('masiiv.php');
                global $galerii;
                $gPikkus = count($galerii);
                $tulemus = implode($_POST);
                $vastus = intval($tulemus);
                if($vastus > 0 && $vastus <= $gPikkus ){
                    echo "Valisid pildi nr. ".htmlspecialchars($vastus);
                    echo "<br>";
                    echo "<img src=\"".$galerii[$vastus]."\"". "alt=\"nimetu".$vastus." \"". "/>";
                }else{
                    echo "Palun vali üks pilt!!!.";
                }
              }else{
                echo "Palun vali üks pilt.";
              }
       ?></p>
</div>
<?php
    require_once('foot.html');
?>