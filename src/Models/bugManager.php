<?php

#include_once('bug.php');
#include_once('Manager.php');

namespace BugApp\Models;
use BugApp\Models\Bug;
use BugApp\Models\Manager;
use GuzzleHttp\Client;

class bugManager extends Manager{
    private $_bugs = [];


    function find($id){
        $dbh=$this->connectDB();
        $bugs = $dbh->query("SELECT * FROM `bug` ORDER BY id='$id'",\PDO::FETCH_ASSOC);
        while($donnees = $bugs->fetch()){     
               $Bug = new Bug($donnees['id'],$donnees['titre'],$donnees['description'],$donnees['createdAt'],$donnees['closed'],$donnees['NDD'],$donnees['IP']);       
        }
        return $Bug;
    }

    // load sur base de données
    function find_all(){
        $dbh=$this->connectDB();
        $bugs = $dbh->query('SELECT * FROM `bug` ORDER BY `id`',\PDO::FETCH_ASSOC);
        if (!$bugs) {
                echo "\nPDO::errorInfo():\n";
                print_r($dbh->errorInfo());
        }
        while($donnees = $bugs->fetch()){     
               $Bug = new Bug($donnees['id'],$donnees['titre'],$donnees['description'],$donnees['createdAt'],$donnees['closed'],$donnees['NDD'],$donnees['IP']);
               $this->_bugs[]=$Bug;
        }
        return $this->_bugs;
    }
// Ajouter un bug à la liste
    function add(Bug $bug) {
        $dbh=$this->connectDB();
        $stmt = $dbh->prepare("INSERT INTO bug (id,titre,description,createdAt,closed,NDD,IP) VALUES (:id,:titre,:desc,:createdAt,:closed,:NDD,:IP)");// si formulaire soumis 
        $stmt->bindValue(':id',$bug->getId());
        $stmt->bindValue(':titre', $bug->get_title());
        $stmt->bindValue(':desc', $bug->getDescription());
        $stmt->bindValue(':createdAt',$bug->get_date());
        $stmt->bindValue(':closed', $bug->get_status());
        $stmt->bindValue(':NDD', $bug->get_ndd());
        $stmt->bindValue(':IP', $bug->get_ip());
        $stmt->execute();
  
    }
    
    
    function updateStatus ($bug){
       $dbh=$this->connectDB();
       $stmt = $dbh->prepare("UPDATE `bug` SET `titre`=:titre, `description`=:desc,`closed`=:closed,`NDD`=:NDD,`IP`=:IP WHERE `id`=:id"); 
       $stmt->execute([
           ':titre'=>$bug->get_title(),
           ':desc'=>$bug->getDescription(),
           ':closed'=>$bug->get_status(),
           ':id'=>$bug->getId(),
           ':NDD'=>$bug->get_ndd(),
           ':IP'=>$bug->get_ip()

 ]);
    } 
    function findByStatut(){
        $dbh=$this->connectDB();
        $bugs = $dbh->query("SELECT * FROM `bug` WHERE closed=0",\PDO::FETCH_ASSOC);
        while($donnees = $bugs->fetch()){     
               $Bug = new Bug($donnees['id'],$donnees['titre'],$donnees['description'],$donnees['createdAt'],$donnees['closed'],$donnees['NDD'],$donnees['IP']);
               $this->_bugs[]=$Bug;
        }
        return $this->_bugs;
        
    }

    function appel_api($domain){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'http://ip-api.com/json/'.$domain);
        $json = $response->getBody();
        $data = json_decode($json, true);
        return $data['query'];

    }
       
       

    

    
    
    
    
}




















?>