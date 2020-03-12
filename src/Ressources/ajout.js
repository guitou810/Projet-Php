function getfocus() {
    const url = new URL(document.getElementById("URL").value);
    document.getElementById("NDD").value = url.hostname;
  

  $.ajax({
    url : url.href ,// La ressource ciblée
    type : 'GET',
    success : function(code_html, statut){ // code_html contient le HTML renvoyé
           console.log("coucou");
    }
 });


}