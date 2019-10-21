<?php

require_once('../Views/list.php');
?>
<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>   
<?php
            foreach ($Bugs as $bugs) {
                echo
                "<tbody>
                <tr>
                    <td scope='row'>" . $bugs->getId() . "</td>
                    <td scope='row'>" . $bugs->getDescription() . "</td>
                    <td scope='row'>" . $bugs->get_title() . "</td>
                    <td scope='row'>" . $bugs->get_date() ."</td>
                    <td scope='row'>" . $bugs->get_status() . "</td>
                    <td scope='row'> <a href='show.php?id=".$bugs->getId()."'><input class='favorite styled 'type='button' style='background-color: #4CAF50; color:white' value=show:".$bugs->getId()."></a> </td>
                        
                </tr>
            </tbody>";
            }
?>
<?php $content = ob_get_clean(); ?>
<?php require('list.php'); ?>

