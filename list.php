<?php
ini_set('display_errors', 1);
include 'bugManager.php';
$Bugs = [];
$bugmanager = new bugManager($Bugs);
$Bugs = $bugmanager->load();

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
                    <th scope="col" ><a href="ajoutbug.php"><input class="btn btn-info" type="button" value="Add Bugs"</a></th>
                </tr>
            </thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">TITRE</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">STATUS</th>
                <th scope="col">SHOW</th>
            </tr>
            <?php
            foreach ($Bugs as $bugs) {
                echo
                "<tbody>
                <tr>
                    <td scope='row'>" . $bugs->getId() . "</td>
                    <td scope='row'>" . $bugs->getDescription() . "</td>
                    <td scope='row'>" . $bugs->get_title() . "</td>
                    <td scope='row'>" . $bugs->get_status() . "</td>
                    <td scope='row'> <a href='show.php?id=".$bugs->getId()."'><input class='favorite styled 'type='button' style='background-color: #4CAF50; color:white' value=show:".$bugs->getId()."></a> </td>
                        
                </tr>
            </tbody>";
            }
            ?>
            
        </table>
        
    </body>
</html>
