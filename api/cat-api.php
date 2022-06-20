<?php 
    include './header.php';
    include '../database/connection.php';
    include '../database/cat-service.php';
    include '../model/model.php';
    
    $db = new Database();

    $catService = new CatService($db);

    $requestMethod = $_SERVER['REQUEST_METHOD'];
    
    if($requestMethod === 'POST') {

        $data = json_decode(file_get_contents("php://input"));
        $history = new History($data->cat_id, $_COOKIE['authenticated']);
    
        if($catService->adopt_cat($history)){
            http_response_code(201);
            echo json_encode(array("message" => "Cart is created", "status" => 201));
            header("Refresh:1");
        } else {
            http_response_code(500);
            echo json_encode(array("message" => "Cart creation failed", "status" => 500));
        }
        
    }

    if($_SERVER['REQUEST_METHOD'] === 'GET'){

        $results = $catService->get_adopted_cats_by_user($_COOKIE['authenticated']);
        if($results->num_rows > 0){
            http_response_code(200);
            echo json_encode($results->fetch_all(MYSQLI_ASSOC));
            // header("Location: ./userPage.php");
        } else {
            http_response_code(404);
        }
    }
    // else if($requestMethod === 'POST') {
    //     $data = json_decode(file_get_contents("php://input"));
    //     echo $_SESSION['user_id'];
    //     $cart = new Cart($data->cat_id, $_SESSION['user_id']);
    //     // $results = $userService->checkIfUserExists($user->email);
    //     // if($results->num_rows > 0){
    //     //     http_response_code(500);
    //     //     echo json_encode(array("message" => "user already exists", "status" => 500));
    //     // } else {
    //         if($catService->create($cart)){
    //             http_response_code(201);
    //             echo json_encode(array("message" => "Cart is created", "status" => 201));
    //         } else {
    //             http_response_code(500);
    //             echo json_encode(array("message" => "Cart creation failed", "status" => 500));
    //         }
    //     // }
        
    // }
    // else if($requestMethod === 'PATCH'){
    //     $data = json_decode((file_get_contents("php://input")));
    //     $user = new User('', '', $data->email, $data->county);
    //     $user->userId = $data->userId;

    //     if($userService->update($user)){
    //         http_response_code(202);
    //         echo json_encode(array("message"=>"User updated", "status"=>202));
    //     } else{
    //         http_response_code(500);
    //         echo json_encode(array("message"=>"User update failed.", "status"=>500));
    //     }
    // }
    // else if($requestMethod === 'DELETE'){
    //     $data = json_decode((file_get_contents("php://input")));
    //     if($userService->delete($data->userId)){
    //         http_response_code(200);
    //         echo json_encode(array("message"=>"User deleted", "status"=>200));
    //     } else{
    //         http_response_code(500);
    //         echo json_encode(array("message"=>"User delete failed.", "status"=>500));
    //     }
    // }
?>