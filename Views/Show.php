
<html>
    
    <body>
        <h1>BUG INFORMATIONS</h1>
        <?php
        $Bugss = $parameters["bug"];
        echo 
          "<div class='form-example' style='width:100%'>
        <label for='name'>Title: </label>
            ".$Bugss->get_title()."
        </div>
        
        <div class='form-example' style='width:100%'>
        <label for='name'>Description: </label>
            ".$Bugss->getDescription()."
        </div>"
    

?>
        <a href="index.php"><input class="favorite styled "type="button" value="Retour" name="action"</a>
    </body>

</html>