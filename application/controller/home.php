<?php
session_start();

class Home extends Controller
{

    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }









    public function login()
    {
        if (isset($_POST["loginSubmit"])) {
            //print_r($_POST); exit;
            $user = $this->model->loginVerify($_POST["usrname"], $_POST["pwd"]);
            print_r($user); exit;
            if($user->type == 'admin'){
                header('location: ' . URL . 'top/index');
                echo 'admin';
                exit;
            }
            else{
                header('location: ' . URL . 'counsellor/index');
                echo 'non admin';
                exit;
            }

            /*print_r($_POST); exit;
             if (isset(list)) {
             if (log($type) == 'counsellor') {
               header('location: ' . URL . 'leads/index');
             }
             else {
               header('location: ' . URL . 'leads/view');
             }
           }
         else {
             header('location: ' . URL . 'error/index');
           }
           // $_SESSION['id'] =
         }*/

        }

    }
}
