<?php
    /**
     * the main purpose of this page is to manage the user's session
     * and provide usable fonctions
     */

    session_start();
    //include_once("../conf.php");
    include("assets/conf.php");

    function isConnected(){
        $isConnected = false;
        if(isset($_SESSION['user']) && isset($_SESSION['user']['connected']))
        {
            $isConnected = $_SESSION['user']['connected'];
        }
        return $isConnected;
    }

    function getUserName(){
        $userName = null;
        if(isConnected() && isset($_SESSION['user']) && isset($_SESSION['user']['userName']))
        {
            $isConnected = $_SESSION['user']['userName'];
        }
        return $userName;
    }
    function getUserMail(){
        $userMail = null;
        if(isConnected() && isset($_SESSION['user']) && isset($_SESSION['user']['userMail']))
        {
            $isConnected = $_SESSION['user']['userMail'];
        }
        return $userMail;
    }

    function getUserId(){
        $userId = null;
        if(isConnected() && isset($_SESSION['user']) && isset($_SESSION['user']['userId']))
        {
            $isConnected = $_SESSION['user']['userId'];
        }
        return $userId;
    }

    function logout(){
        session_destroy();
    }

    /**
     * Try to connect a session.
     * If the email & password matches, then the user is connected.
     * 
     * @param $userEmail : email of the user
     * @param $userPasswd : password of the user
     */
    function connectSession($userEmail, $userPasswd)
    {
        include("assets/conf.php");
        
        $isValide = false;

        $query = $pdo->prepare("SELECT id, nom, email, password FROM utilisateur WHERE email LIKE ? AND mdp LIKE ?");
        $query->execute(array($userEmail, $userPasswd));
        if($row = $query->fetch())
        {
            $_SESSION['user'] = array('connected'=>true, 'userId'=>$row['id'], 'userName'=>$row['nom'], 'userMail'=>$row['email']);
            $isValide = true;
        }else{
            $_SESSION['user'] = array('connected'=>false, 'userId'=>null, 'userName'=>null, 'userMail'=>null);
        }
        return $isValide;
    }
    
?>