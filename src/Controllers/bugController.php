<?php
namespace BugApp\Controllers;
#require_once('Models/bugManager.php');
use BugApp\Models\bugManager;
use BugApp\Models\bug;

class bugController{
    
    public function list(){
        $headers = apache_request_headers();
        $listebugs=[];
        $bugManager = new bugManager(); 
        if(isset($headers['XMLHttpRequest'])){    
                if (isset($_POST['filter'])){
                    $bugs = $bugManager->findByStatut();
                    foreach($bugs as $bug){
                        array_push(
                            $listebugs,
                            [
                                'id'=>$bug->getId(),
                                'titre'=>$bug->get_title(),
                                'description'=>$bug->getDescription(),
                                'createdAt'=>$bug->get_date(),
                                'closed'=>$bug->get_status()
    
                            ]
                            );
                    }
                    $response=[
                        'sucess'=> true,
                            'bugs'=> $listebugs];
                        echo json_encode($response);
                }   
                else{
                    $bugs = $bugManager->find_all();
                    $response=[
                        'sucess'=> true,
                            'bugs'=> $bugs];
                        echo json_encode($response);
                }
            }
        else{
        $bugs = $bugManager->find_all();
        $content = $this->render('src/Views/list.php', ['bugs'=> $bugs]);
        return $this->sendHttpResponse($content, 200);
        }
    }
    
    public function show($id){
        $manager = new bugManager();
        $bug = $manager->find($id);
        $content = $this->render('src/Views/Show.php',['bug' => $bug]);
        return $this->sendHttpResponse($content,200);
    }
    public function add(){
        if(isset($_POST["Titre"])){
            $bugManager = new bugManager();
            $url = $_POST['URL'];
            $host = parse_url($url);
            $domain = $bugManager->appel_api($host['host']);
            //$domain = $bugManager->appel_api($_POST['NDD']);
            $Bug = new Bug(null,$_POST['Titre'],$_POST['Description'],$_POST['Date'],$_POST['Status'],$_POST['NDD'],$domain);
            $bugManager->add($Bug);
            header('Location: list');
        }else{
           $content = $this->render('src/Views/ajoutbug.php',[]);
           return $this->sendHttpResponse($content,200);
    }
                       
        }
        
    public function update($id){
        $manager = new bugManager();
        $bug = $manager->find($id);
        
        if (isset($_POST['Status'])){
            $bug->set_status($_POST['Status']);
        }
        
        $manager->updateStatus($bug);
        http_response_code(200);
        header('Content-Type: application/json');
        $response=[
            'sucess'=> true,
            'id'=> $bug->getId()
        ];
        echo json_encode($response);

        
    }
    
    
    public function modify($id){
        $manager = new bugManager();
        $bug = $manager->find($id);
        
        if (isset($_POST['titre'])){
            $bug->set_title($_POST['titre']);
            $bug->set_description($_POST['desc']);
            $bug->set_date($_POST['date']);
            $manager->updateStatus($bug);
            header('Location: list');
        }else{
            $content = $this->render('src/Views/modify.php',[]);
            return $this->sendHttpResponse($content,200);
        }

    }

    public function RequestApi(){
        $manager = new bugManager();
        $bug = $manager->appel_api();
    }
    
        
    public function render($templatePath, $parameters){
        ob_start();
        $parameters;
        require($templatePath);
        return ob_get_clean();
        
    }
    
    public static function sendHttpResponse($content,$code = 200){
        http_response_code($code);
        header('Content-Type: text/html');
        
        echo $content;
    }
            
}
?>

