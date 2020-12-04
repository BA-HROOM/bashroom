<?php

include("session_manager.php");

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
}
else{

echo ('
    <div id="loger">
        <form>
            <p>
                <label for="userName">Adresse mail :</label>
                <input id="userName" name="userName" type="email" value="'.getUserMail().'">
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
}

/* Try ton connect the session */
if( isset($_POS['userName']) && isset($_POST['passwd']) && ""!=$_POST['userName'] && ""!=$_POST['userName'] ){
    if(connectSession($_POST['userName'], $_POST['passwd'])){
        echo("<script>alert(\"Is connected\n\");</script>");
    }else{
        echo("AVADA KEDAVRA");
        echo("<script>alert(\"Is NNNNNNOTTT connected\n\");</script>");
    }
}

?>