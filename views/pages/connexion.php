<?php
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
            if($email == 'iamthephp@thebest.io' && $password == 'rasmuslerdorf'){ 
                $_SESSION['connected'] = 'yes'; 
                $_SESSION['email'] = $email; 
                header('Location: accueil.php');
            } else {
                $msg_badlogin = "L'email et/ou le mot de passe : NON correct..";
            }
        }
    }

?>
    <div class="container">

        <div class="row mylogin">
            <div class="offset-3 col-md-6 myform">
                <form class="form-horizontal" action="index.php" method="post">
                    <fieldset>
                        <legend>Connexion :</legend>

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
        </div>

    </div>