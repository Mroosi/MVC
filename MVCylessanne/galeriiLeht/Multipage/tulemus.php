<?php
require_once('head.html');
require_once('masiiv.php');
?>

<div id="wrap">
	<h3>Valiku tulemus</h3>
	<p><?php if(isset($_GET)) {
        global $galerii;
        $gPikkus = count($galerii);
        $tulemus = implode($_GET);
        $vastus = intval($tulemus);
        if($vastus > 0 && $vastus <= $gPikkus ){
        echo "Valisid pildi nr. ".htmlspecialchars($vastus);
        }else{
             echo "Palun vali üks pilt.";
        }
    }else{
        echo "Palun vali üks pilt.";
    }
    ?></p>

</div>
<?php
require_once('foot.html');
?>