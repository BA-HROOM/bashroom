<?php

include("session_manager.php");

/* Try ton connect the session */
if( isset($_POST['userName']) && isset($_POST['passwd']) && ""!=$_POST['userName'] && ""!=$_POST['passwd'] ){
    if(connectSession($_POST['userName'], $_POST['passwd']))
    {
        echo("<script>console.log(\"Is connected\\n\");</script>");
    }else{
        echo("<script>console.log(\"Is NNNNNNOTTT connected\\n\");</script>");
    }
}

if(!isConnected()){

echo ('

<div id="loger">
    <form method="POST">
        <p>
            <label for="userName">Adresse mail :</label>
            <input id="userName" name="userName" type="email">
        </p>
        <p>
            <label for="passwd">Password :</label>
            <input id="passwd" name="passwd" type="password">
        </p>
        <p>
            <input type="submit" value="Login">
        </p>
    </form>
</div>

'); 
}else{
    echo ('Is connected'); 
}

?>