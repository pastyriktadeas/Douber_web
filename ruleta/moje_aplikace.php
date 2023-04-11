<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruleta</title>
    <link rel="stylesheet" href="./moje_aplikace.css">
</head>
<body>

    
        
    <form method="post">
        
        <input type="radio" name="barva" id="zelena"  class="barva" value="zelená">zelená
        <input type="radio" name="barva" id="cervena" class="barva" value="barva">červená
        <input type="radio" name="barva" id="cerna"   class="barva" value="barva">černá

        <input type="submit" name="buttonS" id="tlacitkoS"  class="container_spin" value="Spin">

        <input type="submit" name="zapsat" class="container_vyhodnotit"   value="=">
    </form>

    <?php // formulář na tlačítka spin barvy a zapsat

    //čtení ze souboru

    $val = file("./value.txt");     //txt
    $nah = file("./nahoda.txt");    //txt

    
  
    if(isset($_REQUEST["Button"])){    //požadavek jakmile zmáčku button aby něco vykonal                                     
    
        $soubor1 = fopen("./value.txt", "w");                               //otevře soubor a hodí ho do proměné
        $value = $_POST["Button"];                                          //načte value z buttonu
        fwrite($soubor1, $value);                                           //přepíše $soubor1 na $value
        fclose($soubor1);                                                   //zavře soubor
        echo "<p class ='./moje_aplikace.css'>Vsazené číslo: $value </p>";  //vypíše
    }
    
    if(isset($_REQUEST["buttonS"])) {  //požadavek jakmile zmáčku button aby něco vykonal                                                                    
        
        $soubor = fopen("./nahoda.txt", "w");         //otevře soubor, udělá ho w poté vytvoří random číslo, kterým přepíše soubor následně zavře soubor vypíše nahodu
        $nahoda = rand(0,36);
        fwrite($soubor, $nahoda);
        fclose($soubor);
        echo "<p class ='./moje_aplikace.css'>Ruleta: $nahoda</p>";
        
    }
    
    if(isset($_REQUEST["zapsat"])){     //klikne se na zapsat a poté se zkontroluje jestli se hodnoty rovnají a vypíše se echo

        if($val == $nah) {
            echo "<p class = './moje_aplikace.css'>Vaše číslo padlo!</p>";
        }else{
            echo "<p class = './moje_aplikace.css'>Vaše číslo nepadlo!</p>";
        } 
    }
    
                                    //tady máme buttony nebo karty, každá karta má svoji hodnotu název atd.
    ?>                      
    <form method="post">
        <input type="submit" name="Button" id="tlacitko_0"     class="container_0"         value="0">

        <input type="submit" name="Button" id="tlacitko_1"     class="container_cervena"   value="1">
        <input type="submit" name="Button" id="tlacitko_2"     class="container_cerna"     value="2">
        <input type="submit" name="Button" id="tlacitko_3"     class="container_cervena"   value="3">
        <input type="submit" name="Button" id="tlacitko_4"     class="container_cerna"     value="4">
        <input type="submit" name="Button" id="tlacitko_5"     class="container_cervena"   value="5">

        <input type="submit" name="Button" id="tlacitko_6"     class="container_cerna"     value="6">
        <input type="submit" name="Button" id="tlacitko_7"     class="container_cervena"   value="7">
        <input type="submit" name="Button" id="tlacitko_8"     class="container_cerna"     value="8">
        <input type="submit" name="Button" id="tlacitko_9"     class="container_cervena"   value="9">
        <input type="submit" name="Button" id="tlacitko_10"   class="container_cerna"      value="10">
        
        <input type="submit" name="Button" id="tlacitko_11"   class="container_cerna"      value="11">
        <input type="submit" name="Button" id="tlacitko_12"   class="container_cervena"    value="12">
        <input type="submit" name="Button" id="tlacitko_13"   class="container_cerna"      value="13">
        <input type="submit" name="Button" id="tlacitko_14"   class="container_cervena"    value="14">
        <input type="submit" name="Button" id="tlacitko_15"   class="container_cerna"      value="15">

        <input type="submit" name="Button" id="tlacitko_16"   class="container_cervena"    value="16">
        <input type="submit" name="Button" id="tlacitko_17"   class="container_cerna"      value="17">
        <input type="submit" name="Button" id="tlacitko_18"   class="container_cervena"    value="18">
        <input type="submit" name="Button" id="tlacitko_19"   class="container_cervena"    value="19">
        <input type="submit" name="Button" id="tlacitko_20"   class="container_cerna"      value="20">

        <input type="submit" name="Button" id="tlacitko_21"   class="container_cervena"    value="21">
        <input type="submit" name="Button" id="tlacitko_22"   class="container_cerna"      value="22">
        <input type="submit" name="Button" id="tlacitko_23"   class="container_cervena"    value="23">
        <input type="submit" name="Button" id="tlacitko_24"   class="container_cerna"      value="24">
        <input type="submit" name="Button" id="tlacitko_25"   class="container_cervena"    value="25">

        <input type="submit" name="Button" id="tlacitko_26"   class="container_cerna"      value="26">
        <input type="submit" name="Button" id="tlacitko_27"   class="container_cervena"    value="27">
        <input type="submit" name="Button" id="tlacitko_28"   class="container_cervena"    value="28">
        <input type="submit" name="Button" id="tlacitko_29"   class="container_cerna"      value="29">
        <input type="submit" name="Button" id="tlacitko_30"   class="container_cervena"    value="30">

        <input type="submit" name="Button" id="tlacitko_31"   class="container_cerna"      value="31">
        <input type="submit" name="Button" id="tlacitko_32"   class="container_cervena"    value="32">
        <input type="submit" name="Button" id="tlacitko_33"   class="container_cerna"      value="33">
        <input type="submit" name="Button" id="tlacitko_34"   class="container_cervena"    value="34">
        <input type="submit" name="Button" id="tlacitko_35"   class="container_cerna"      value="35">

        <input type="submit" name="Button" id="tlacitko_36"   class="container_cervena"    value="36">

    </form>


</body>
</html>