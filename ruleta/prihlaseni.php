<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přihlášení do Rulety</title>
    <link rel="stylesheet" href="./moje_aplikace.css">
</head>
<body>

    <h1>Ruleta</h1>

    <header class="log">
    <form method="post">
    <label for="j"><h3>jmeno: <br> </h3>
            </label><input type="text" name="jmeno" id="jmen" value="">

            <br>
            <br>
    
    <label for="h"><h3>heslo: <br></h3>
            </label><input type="password" name="heslo" id="h" value="">

            <br> 
            <br>

    <h3 class="bila"> </h3>

    <input class="container_prihlasit" type="submit" name="prihlasit" value="Login">
    <button type="submit" name="Logout">Logout</button>
    </form>  

                                                                                                                           
    
    <?php
                    //nahoře jsou okénka na přihlášení
    session_start();     //session se starte
    if (isset($_POST["prihlasit"])) { //uživatel klikne na přihlásit
        $jmeno = htmlspecialchars(trim($_POST["jmeno"])); //jmeno heslo se ochrání
        $heslo = htmlspecialchars(trim($_POST["heslo"]));   
        if($jmeno == "pasta"){ //if se rovná užv. jméno tak udělej:
            if ($heslo == "veverka123") {   //if se rovná heslo tak udělej:
                $_SESSION['j'] = $_POST["heslo"];     //startni session j-----------------------------------------------------------------------*      
            }else {echo "<br><p1>Zadal jsi špatné údaje.</p1>";}                                                                     
        }else {echo "<br><p1>Zadal jsi špatné údaje.</p1>";}                                                                          
        
        
    }
    echo "</header>";
    if (isset($_POST['Logout'])) { //uživatel klikne na logout a session se uknčí tím se odhlásí
        session_unset();                                    
    }

    if (isset($_SESSION['j'])) { //--------------------------------------------------------------------------------------------------------------*
        include './moje_aplikace.php';
    }
    ?>
</body>
</html>