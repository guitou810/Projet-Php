
/* global ID1 */

let els = document.getElementsByClassName('trigger');
let tri = document.getElementById('Tri');



var xhr = new XMLHttpRequest();
Array.from(els).forEach((el)=> {
    el.addEventListener('click',makeRequest);
});


var checkbox = document.querySelector("input[name=checkbox]");




function makeRequest(e){
    e.preventDefault(e); 
    let ID1 = ((this.parentElement.parentElement).id).substring(4);
    xhr.onreadystatechange = alertContent;
    var params = "Status=" + 1;
    var url = 'update?' + ID1;
    xhr.open('POST',url);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send(params);  

}


function alertContent(){
    if (xhr.readyState === XMLHttpRequest.DONE) {

        let tabl = JSON.parse(xhr.responseText);
        td = document.getElementById("td_"+tabl.id);
        td.innerHTML="Traité";
        console.log(xhr.responseText);

    }
    



}


checkbox.addEventListener('change', function() {
    if(this.checked) {
        xhr.onreadystatechange = alertContente;
        var params = "filter";
        var url = 'list';
        xhr.open('POST',url);
    } else {
        xhr.open('POST','index');
    }
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.setRequestHeader('XMLHttpRequest', true);
    xhr.send(params);
});


function alertContente(){
    if (xhr.readyState === XMLHttpRequest.DONE) {
        ListeId=[];
        ListebugT=[];
        console.log(xhr.responseText);
        let tabl = JSON.parse(xhr.responseText);
        //console.log(tabl['bugs']);
        Content ="<tr><th scope='col'>ID</th><th scope='col'>TITRE</th><th scope='col'>DESCRIPTION</th><th scope='col'>DATE</th><th scope='col'>NOM DE DOMAINE</th><th scope='col'>ADRESS IP</th><th scope='col'>STATUT</th><th scope='col'>SHOW</th><th scope='col'>MODIFY</th></tr>" 
        Contentt ="";
        for (i =0; i<tabl['bugs'].length; i++){
        element=tabl['bugs'][i];
        console.log(element);
            if(element.closed == 0){
                etat = "<td scope='row' id=td_"+element.closed+"><a class='trigger' href='update?"+element.id+"'>Non traité</a>";
            }
            else {
                etat = "<td id='stat' scope='row'><span>Traité</span>";
            }
            
            Contentbody = "<tbody>"+
            "<tr id=BUG_" + element.id + ">"+
                "<td scope='row'>" + element.id + "</td>"+
                "<td scope='row'>" + element.description + "</td>"+
                "<td scope='row'>" + element.titre + "</td>"+
                "<td scope='row'>" + element.createdAt +"</td>"+
                "<td scope='row'>" + element.NDD +"</td>"+
                "<td scope='row'>" + element.IP +"</td>"+
                etat +
                "<td scope='row'> <a href=show$"+element.id+"><input class='favorite styled 'type='button' style='background-color: #4CAF50; color:white' value=show:"+element.id+"></a> </td>"+
                "<td scope='row'> <a href=modify?"+element.id+"><input class='favorite styled 'type='button' style='background-color: #4CAF50; color:white' value=modify.></a> </td>"+
            "</tr>"+
        "</tbody>";
        Contentt = Contentt + Contentbody;
        }

        let table = document.getElementById('tableBug');
        table.innerHTML = Content + Contentt;
        console.log(table);







    }
    }




