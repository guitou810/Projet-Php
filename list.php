<?php
   echo 'Bonjour! Ca marche!';


$array = array();

$fichier_array = file('data.txt');
foreach($fichier_array as $ligne) {
        $delemiteur_position = strpos($ligne, '||');
        if($delemiteur_position !== false) {
                $clef = trim(substr($ligne, 0, $delemiteur_position));
                $valeur = trim(substr($ligne, $delemiteur_position + 2));

                if(!array_key_exists($clef, $array))
                        //On cr�er la nouvelle entr�e
                        $array[$clef] = $valeur;
        }
}

print_r($array);

?>




