<?php

require_once('controller.php');
echo $_SERVER['SCRIPT_NAME'];
if (isset($_SERVER['SCRIPT_NAME'])) {
    if ($_SERVER['SCRIPT_NAME'] == '/dashboard/works/Appli/Controllers/index.php') {
            list1();
    }
    elseif ($_SERVER['SCRIPT_NAME'] == '/dashboard/works/Appli/Views/show.php'){
        show();
        }
    elseif ($_SERVER['SCRIPT_NAME'] == '/dashboard/works/Appli/Views/ajoutbug.php') {
        if (isset($_POST['action'])){
            Ajout();
        }
        }
else {
    echo 'Erreur 404';
}
}

?>

