<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        
        <table id="tableBug" class="table table-dark">
            <thead>
                <tr>
                    <th scope="col" colspan="4" id="titre" >BUG LIST</th>
                    <th scope="col" ><a href="ajoutbug"><input class="btn btn-info" type="button" value="Add Bugs"</a></th>
                </tr>
                <tr>
                    <input type="checkbox" id="Tri" name="checkbox" value='on'>
                    <label for="scales">Tri Bugs non-résolus
                </tr>
            </thead>

            <tr>
                <th scope="col">ID</th>
                <th scope="col">TITRE</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">DATE</th>
                <th scope="col"></th>
                <th scope="col">STATUT</th>
                <th scope="col">NON DE DOMAINE</th>
                <th scope="col">ADDRESS IP</th>
                <th scope="col">SHOW</th>
                <th scope="col">MODIFY</th>
            </tr> 
        <?php
            $bugs = $parameters["bugs"];
            foreach ($bugs as $bug) {
                if ($bug->get_status() == 0){
                    $etat = "<td scope='row' id=td_".$bug->getId()."><a class='trigger' href='update?".$bug->getId()."'>Non traité</a>";
                }
                else {
                    $etat = "<td id='stat' scope='row'><span>Traité</span>";
                }
                echo
                "<tbody>
                <tr id=BUG_" . $bug->getId() . ">
                    <td scope='row'>" . $bug->getId() . "</td>
                    <td scope='row'>" . $bug->getDescription() . "</td>
                    <td scope='row'>" . $bug->get_title() . "</td>
                    <td scope='row'>" . $bug->get_date() ."</td>
                    <td scope='row'>" . $etat . "</td>
                    <td scope='row'>" . $bug->get_ndd() ."</td>
                    <td scope='row'>" . $bug->get_ip() ."</td>
                    <td scope='row'> <a href=show$".$bug->getId()."><input class='favorite styled 'type='button' style='background-color: #4CAF50; color:white' value=show:".$bug->getId()."></a> </td>
                    <td scope='row'> <a href=modify?".$bug->getId()."><input class='favorite styled 'type='button' style='background-color: #4CAF50; color:white' value=modify.></a> </td> 
                </tr>
            </tbody>";
            }
?>
        </table>
        
    </body>
     <script src="src/Ressources/ajax.js"></script>
</html>
