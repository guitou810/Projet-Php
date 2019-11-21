<?php

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
                    <th scope="col" ><a href="ajoutbug"><input class="btn btn-info" type="button" value="Add Bugs"</a></th>
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
        <?php
            $bugs = $parameters["bugs"];
            foreach ($bugs as $bug) {
                echo
                "<tbody>
                <tr>
                    <td scope='row'>" . $bug->getId() . "</td>
                    <td scope='row'>" . $bug->getDescription() . "</td>
                    <td scope='row'>" . $bug->get_title() . "</td>
                    <td scope='row'>" . $bug->get_date() ."</td>
                    <td scope='row'>" . $bug->get_status() . "</td>
                    <td scope='row'> <a href=show$".$bug->getId()."><input class='favorite styled 'type='button' style='background-color: #4CAF50; color:white' value=show:".$bug->getId()."></a> </td>
                        
                </tr>
            </tbody>";
            }
?>
        </table>
        
    </body>
</html>
