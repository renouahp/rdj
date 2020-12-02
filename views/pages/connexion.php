<?php
function protection_minimal($conn, $var)
{
    return mysqli_real_escape_string($conn, $_POST[$var]);
}
require_once 'login.inc.php';
require_once 'assets/fonctions_util.php';
session_start();
$_SESSION['connected'] = 'no';

    $err = false;
    $msg_badlogin = '&nbsp;'; // erreur sur le couple (email/mot de passe)
    $txt_email_err = '&nbsp;'; // erreur de saisie
    $txt_password_err  = '&nbsp;'; // erreur de saise

    $email='';
    $password='';

    if (isset($_POST['btn_submit'])){

        if(empty($_POST["txt_email"])){
            $txt_email_err = "L'email est obligatoire.";
            $err = true;
        }else {
            $email = protect_montexte($_POST["txt_email"]); 
            if( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
                $email ='';
                $txt_email_err = "L'email est invalid.";
                $err = true;
            }
        }         

        if( empty($_POST["txt_password"])  || (strlen($_POST["txt_password"]) < 7 ) ){ 
            $txt_password_err = "Le mot de passe est obligatoire (7 cara minimum).";
            $err = true;
        }else {
            $password = protect_montexte($_POST["txt_password"]); 
        } 
        if (!$err){  
            $sql = "select * from user where email = $email && password = $password";
            $result = mysqli_query($conn, $sql);
            if(!$result){ 
                $msg_badlogin = "L'email et/ou le mot de passe : NON correct.."; 
            } else {
                $r = mysqli_fetch_assoc($result);
                $_SESSION['connected'] = 'yes'; 
                $_SESSION['email'] = $email; 
                $_SESSION['idPers'] = $r['idpers'];
                header('Location: index.php');
            }
        }
    }

?>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="cover-login cover d-flex">
            <h1 class="align-self-center ml-auto mr-auto">Connexion</h1>
        </div>
    </div>
</div>
    <div class="container">
    <div class="row justify-content-center">
            <div class="col-4 myform mt-3 mb-5">
                <form class="form-horizontal" action="index.php?page=login" method="post">
                    <fieldset>
                        <legend>Veuillez vous connecter :</legend>

                        <!-- Email -->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="txt_email">E-mail</label>
                            <div class="col-md-12">
                                <input id="txt_email" name="txt_email" type="text" placeholder="entrez votre émail" value="<?php echo $email; ?>"
                                    class="form-control input-md" required="">
                                    <span class="help-block myerr"><?php echo $txt_email_err;?></span> 

                            </div>
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="txt_password">Mot de passe :</label>
                            <div class="col-md-12">
                                <input id="txt_password" name="txt_password" type="password"
                                    placeholder="entrez votre mot de passe"  value="<?php echo $password; ?>"
                                    class="form-control input-md" required="">
                                    <span class="help-block myerr"><?php echo $txt_password_err ;?></span> 

                            </div>
                        </div>
                        <!-- Button -->
                        <div class="row">
                            <div class="form-group col-md-3">
                                <div class="col-md-12">
                                    <button id="btn_submit" name="btn_submit" class="btn btn-primary" value="connexion">connexion</button>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <span class="col-md-12  myerr"><?php echo $msg_badlogin;?></span>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-6">
                <h3>Lorem ipsum dolor sit amet consectetur </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Pariatur, quis commodi reprehenderit molestias iste similique inventore voluptatum doloribus asperiores harum rem odio, 
                labore ut praesentium, in earum tempora eos aperiam!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Pariatur, quis commodi reprehenderit molestias iste similique inventore voluptatum doloribus asperiores harum rem odio, 
                labore ut praesentium, in earum tempora eos aperiam!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Pariatur, quis commodi reprehenderit molestias iste similique inventore voluptatum doloribus asperiores harum rem odio, 
                labore ut praesentium, in earum tempora eos aperiam!</p>
            </div>
        </div>

    </div>
