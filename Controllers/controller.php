<?php
require_once('Models/bugManager.php');

class bugController{
    
    public function list(){
        $bugManager = new bugManager();
        $bugs = $bugManager->find_all();
        $content = $this->render('Views/list.php', ['bugs'=> $bugs]);
        return $this->sendHttpResponse($content, 200);
    }
    
    public function show($id){
        $manager = new bugManager();
        $bug = $manager->find($id);
        $content = $this->render('Views/Show.php',['bug' => $bug]);
        return $this->sendHttpResponse($content,200);
    }
    public function add(){
        if(isset($_POST["Titre"])){
            $bugManager = new bugManager();
            $Bug = new Bug(null,$_POST['Titre'],$_POST['Description'],$_POST['Date'],$_POST['Status']);
            $bugManager->add($Bug);
            header('Location: list');
        }else{
           $content = $this->render('Views/ajoutbug.php',[]);
           return $this->sendHttpResponse($content,200);
    }
                       
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

