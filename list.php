<?php
ini_set('display_errors', 1);
include 'bugManager.php';
$Bugs = [];
$bugmanager = new bugManager($Bugs);
$Bugs = $bugmanager->load();

?>
<html>
    <body>


        <table style="width:100%">
            <thead>
                <tr>
                    <th colspan="2">BUG LIST</th>
                </tr>
            </thead>
            <tr>
                <th>ID</th>
                <th>TITRE</th>
                <th>DESCRIPTION</th>
                <th>STATUS</th>
            </tr>
            <?php
            foreach ($Bugs as $bugs) {
                echo
                "<tbody>
                <tr>
                    <td>" . $bugs->getId() . "</td>
                    <td>" . $bugs->getDescription() . "</td>
                    <td>" . $bugs->get_title() . "</td>
                    <td>" . $bugs->get_status() . "</td>
                    <td> <a href='show.php?id=".$bugs->getId()."'> ".$bugs->getId()."</a> </td>
                        
                </tr>
            </tbody>";
            }
            ?>

        </table>
    </body>
</html>
