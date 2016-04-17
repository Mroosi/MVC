<?php
function controller_add($nimetus, $kogus){
     global $model_data;
     $kogus = intval($kogus);
    // kontrollime kas sisendväärtused on oodatud kujul või mitte
        if ($nimetus == '' || $kogus <= 0) {
            header('Content-Type: text/plain; charset=utf-8');
            return false;
        }

        // lisame kirje "andmebaasi", st. et lisame massiivi uue indeksi koos vormi andmetega
        $model_data[] = array(
            'nimetus' => $nimetus,
            'kogus' => $kogus,
        );
        return model_save();
    }
    
function controller_delete($index){
      global $model_data;
      
      $index =intval($index);
      
      $uus_massiiv = array();
      foreach ($model_data as $key => $value) {
         if($key != $index){
             $uus_massiiv[] = $val;
         }
      }
      $model_data = $uus_massiiv;
      return model_save();
}
?>