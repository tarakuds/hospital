<?php
    // session_start();
     include("nav/nav.php");

     $allUsers = scandir("db/users/");
        $countUser=count($allUsers);
        $userObject = json_decode(file_get_contents("db/users/"));
        if($userObject['designation']=='Patients'){
        print_r($userObject);
        } 

     for($counter=0; $counter < $countUser; $counter++){

    
}

    //or
    // $userObject = json_decode(file_get_contents("db/users"), TRUE);
    // foreach($userObject as $row){
    //     echo "<tr><td>".$row["id"]."</td></tr>";
    // }


    

?>