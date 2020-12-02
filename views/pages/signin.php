<?php
    $err = false;
    $msg_goodsignin = '';
    $msg_badsignin = '';
    $txt_nom_err = '&nbsp;'; // erreur de saisie
    $txt_email_err = '&nbsp;'; // erreur de saisie
    $txt_password_err  = '&nbsp;'; // erreur de saise

    $nom='';
    $email='';
    $password='';

    if (isset($_POST['btn_submit'])){

        if(empty($_POST["txt_nom"])){
            $txt_nom_err = "Le nom est obligatoire.";
            $err = true;
        }else {
            //$nom = protect_montexte($_POST["txt_nom"]); 
            $nom = $_POST["txt_nom"]; 
            if( !filter_var($nom, FILTER_SANITIZE_STRING) ){
                $nom ='';
                $txt_nom_err = "Le nom est invalid.";
                $err = true;
            }
        }   

        if(empty($_POST["txt_email"])){
            $txt_email_err = "L'email est obligatoire.";
            $err = true;
        }else {
            //$email = protect_montexte($_POST["txt_email"]); 
            $email = $_POST["txt_email"]; 
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
            //$password = protect_montexte($_POST["txt_password"]); 
            $password = $_POST["txt_password"]; 
        } 
        if (!$err){  
            $hn = 'localhost';
            $db = 'shop';
            $un = 'root';
            $pw = 'root';
            $conn = new mysqli($hn, $un, $pw, $db);

            $sql = "insert into user (pseudo, email, password) values ('$nom', '$email', '$password')";
            $res = mysqli_query($conn, $sql);

            if($res == true) header('Location: index.php?page=login');
            else $msg_badsignin = 'Une erreur est survenue lors de l\'inscription, veuillez réessayer.';
        }
    }

?>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="cover-signin cover d-flex">
            <h1 class="align-self-center ml-auto mr-auto">S'enregistrer</h1>
        </div>
    </div>
</div>
    <div class="container">
    <div class="row justify-content-center">
            <div class="col-4 myform mt-3 mb-5">
                <form class="form-horizontal" action="index.php?page=signin" method="post">
                    <fieldset>
                        <!-- Nom -->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="txt_nom">Nom</label>
                            <div class="col-md-12">
                                <input id="txt_nom" name="txt_nom" type="text" placeholder="Veuillez entrez votre nom." class="form-control input-md" required>
                                    <span class="help-block myerr"><?php echo $txt_nom_err;?></span> 
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="txt_email">E-mail</label>
                            <div class="col-md-12">
                                <input id="txt_email" name="txt_email" type="email" placeholder="Veillez entrez votre émail." class="form-control input-md" required>
                                    <span class="help-block myerr"><?php echo $txt_email_err;?></span> 
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="txt_password">Mot de passe :</label>
                            <div class="col-md-12">
                                <input id="txt_password" name="txt_password" type="password" placeholder="Veillez choisir votre mot de passe." class="form-control input-md" required="">
                                    <span class="help-block myerr"><?php echo $txt_password_err ;?></span> 
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="row">
                            <div class="form-group col-md-3">
                                <div class="col-md-12">
                                    <button id="btn_submit" name="btn_submit" class="btn btn-primary" value="signin">S'enregistrer</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-6">
                <h3>Merci de remplir le formulaire pour vous enregistrer </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Pariatur, quis commodi reprehenderit molestias iste similique inventore voluptatum doloribus asperiores harum rem odio, 
                labore ut praesentium, in earum tempora eos aperiam!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Pariatur, quis commodi reprehenderit molestias iste similique inventore voluptatum doloribus asperiores harum rem odio, 
                labore ut praesentium, in earum tempora eos aperiam!</p>
                <?php if($msg_badsignin != '') echo "<p class=' bg-danger text-light p-3 text-center'> $msg_badsignin </p> ";?>
            </div>
        </div>

    </div>
