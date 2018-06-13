<?php
require_once(__DIR__."/../php/myPage.php");

$OPIS = "Dodaj opinię";

// generujemy stronę i ustawiamy jej parametry
$P = new myPage("Łukasz Mazurkiewicz- moje przygody z edukacją", "../");
$P->SetDescription($OPIS);

echo $P->Start("Dodaj opinię");

$nick=$opinion=$rez=$imz=$root="";
$success=$nick_error=$opinion_error=$captcha_error=false;
$valid=true;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nick=test_input($_POST["nick"]);
    $opinion=test_input($_POST["opinion"]);
    $rez=test_input($_POST["rez"]);
    $imz=test_input($_POST["imz"]);
    $root=test_input($_POST["root"]);

    if($nick==""){
        $nick_error=true;
        $valid=false;
    }
    if($opinion==""){
        $opinion_error=true;
        $valid=false;
    }
    if(!preg_match("/^[1-9]$/", $rez) || !preg_match("/^[1-9]$/", $imz) || !preg_match("/^[1-9][+,-][1-9]i$/", $root)){
        $captcha_error=true;
        $valid=false;
    }else{
        $split=explode("+",$root);
        if(count($split)==1){
            $split=explode("-", $root);
        }
        $rez_value=intval($rez);
        $imz_value=intval($imz);
        if($rez_value!=$split[0] || $imz_value!=$split[1]){
            $captcha_error=true;
            $valid=false;
        }
    }
    if($valid){
        $db = mysqli_connect('localhost', 'root', '1234', 'projektwww');
        $polecenie=$db->prepare("INSERT INTO opinie (nick, opinion) VALUES (?,?)");
        if($polecenie==false){
            echo "Błąd połączenia z bazą";
        }else{
            $polecenie->bind_param("ss", $nick, $opinion);
            $polecenie->execute();
            $polecenie->close();
            $db->close();
            $success=true;
        }
    }
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

    <div id="control-div" value="<?php if($success){echo "1";}else{echo "0";} ?>"></div>
    <div id="form-div" class="col-6-6">
        <h1>Dodaj opinię</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <?php if($nick_error){echo "<div class='error'>Nick jest wymagany</div>";}?>
            <div class="row">
                <label class="col-1-6">Nick<span class="error">*</span>:</label>
                <input type="text" name="nick" placeholder="Nick" maxlength="100" value="<?php echo $nick;?>">
            </div>
            <?php if($opinion_error){echo "<div class='error'>Opinia jest wymagana</div>";}?>
            <div>
                <label class="col-1-6">Opinia<span class="error">*</span>:</label>
                <textarea name="opinion" cols="30" rows="5"><?php echo $opinion;?></textarea>
            </div>
            <?php if($captcha_error){echo "<div class='error'>Podano niewłaściwą wartość w CAPTCHA. Spróbuj jeszcze raz.</div>";}?>
            <div>
                <input type="text" id="rez" name="rez" style="display: none;" value="">
                <input type="text" id="imz" name="imz" style="display: none;" value="">
                <label id="polynomial"></label>
                <input type="text" name="root" maxlength="10" value="">
            </div>
            <div>
                <div class="col-1-6"></div>
                <input type="submit" name="submit" value="Wyślij">
            </div>
        </form>
    </div>
    <div id="greetings-div" class="col-6-6">
        Dziękujemy za dodanie opinii! Twoje zdanie jest dla nas ważne!
    </div>
<?php
$P->addJS("opinie.js");
// generujemy zamknięcie strony 
echo $P->End();
?>