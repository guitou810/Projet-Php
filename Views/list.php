<?php
include_once('../Controllers/index.php');

?>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col" colspan="4" id="titre" >BUG LIST</th>
                    <th scope="col" ><a href="../Views/ajoutbug.php"><input class="btn btn-info" type="button" value="Add Bugs"</a></th>
                </tr>
            </thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">TITRE</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">DATE</th>
                <th scope="col">STATUS</th>
                <th scope="col">SHOW</th>
            </tr> 
        <?= $content ?>
        </table>
        
    </body>
</html>
