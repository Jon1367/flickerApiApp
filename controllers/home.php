<?php


//home controller
include 'models/view.php';



// views model
$viewmodel = new view();


// / index if not action
if(empty($_GET["action"])){

    $viewmodel->getView("views/header.php");
    $viewmodel->getView("views/form.php");


}else{
       // home action
    if ($_GET["action"] == "home"){//the action is what the user clicks to navigate through site

        

        $viewmodel->getView("views/header.php");
        $viewmodel->getView("views/form.php");


    //    process Form 
    }elseif($_GET["action"] == "inJSON"){

        // grabs user's input 
        $search = $_POST["search"];
 
        // api call
        $data = file_get_contents("https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=2b345e3e9550c3047952ba28d7147738&text=".$search."&format=json&nojsoncallback=1");

        // format the data
        $jsonarr = json_decode($data,true);

        //var_dump($jsonarr); 


        //echo json_encode($jsonarr);
        //var_dump($jsonarr);

        // Template using views models
        $viewmodel->getView("views/header.php");
        // Sends data to the Dom
        $viewmodel->getView("views/image.php",$jsonarr);


    }
}


?>