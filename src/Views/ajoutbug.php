
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
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
<form action="" method="post">
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
    <legend>Date<em>*</em></legend>
    <input type="date" value="<?php echo date("Y-m-d" ); ?>" name="Date">
  </fieldset>
    <fieldset>
    <legend>Status<em>*</em></legend>
    <select multiple class="form-control" id="exampleFormControlSelect2" name="Status">
      <option selected="selected">0 </option>
      <option>1 </option>
    </select>
  </fieldset>
  <fieldset>
    <legend>URL<em>*</em></legend>
    <input id="URL" autofocus="" required="" name="URL"><br>
  </fieldset>
  <fieldset>
    <legend>NON DE DOMAINE<em>*</em></legend>
    <input id="NDD" autofocus="" required="" name="NDD" onclick="getfocus()" ><br> 
  </fieldset>
  <p><input type="submit" name="action"></p>


</form>
<a href="list"><input class="favorite styled "type="button" value="Retour"></a>
</body>
<script src="src/Ressources/ajout.js"></script>
</html>