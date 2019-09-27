<?php
include 'ConnexionBDD.php';




?>
<html>
    <body>
<style>
    p {
  margin-top: 0px;
}
 
fieldset {
  margin-bottom: 15px;
  padding: 10px;
}
 
legend {
  padding: 0px 3px;
  font-weight: bold;
  font-variant: small-caps;
}
 
label {
  width: 110px;
  display: inline-block;
  vertical-align: top;
  margin: 6px;
}
 
em {
  font-weight: bold;
  font-style: normal;
  color: #f00;
}
 
input, textarea {
  width: 249px;
}
 
textarea {
  height: 100px;
}
</style>
<h2>Ajouter un Bug</h2>
<form action="#" method="post">
  <p><i>Complétez le formulaire. Les champs marqué par </i><em>*</em> sont <em>obligatoires</em></p>
  <fieldset>
    <legend>ID</legend>
      <label for="nom">Auto Incrémenté </label>
  </fieldset>
  <fieldset>
    <legend>Titre</legend>
      <label for="Titre">Titre<em>*</em></label>
      <input id="Titre" autofocus="" required="" name="Titre"><br>
  </fieldset>
  <fieldset>
    <legend>Description<em>*</em></legend>
      <textarea id="comments" rows="10" cols="40" name="Description"></textarea>
  </fieldset>
    <fieldset>
    <legend>Status<em>*</em></legend>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>0 </option>
      <option>1 </option>
    </select>
  </fieldset>
  <p><input type="submit" name="Soummettre"></p>

      <?php
$Connect = new Connect();
$dbh = new PDO('mysql:host=localhost;dbname='.$Connect->getTable().';charset=utf8', $Connect->get_user(), $Connect->get_passwd());
$stmt = $dbh->prepare("INSERT INTO bug (id,titre,description,status) VALUES (:id, :titre, :desc, :status)");
if(isset($_POST['Soummettre'])){ // si formulaire soumis 
$ID = NULL;
$stmt->bindParam(':id',$ID);
$stmt->bindParam(':titre', $_POST['Titre']);
$stmt->bindParam(':desc', $_POST['Description']);
$stmt->bindParam(':status', $_POST['status']);
$stmt->execute();
}
?>
</form>
<a href="list.php"><input class="favorite styled "type="button" value="Retour"</a>
</body>
</html>