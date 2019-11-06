<?php
    require_once("control/_contact.php");
 ?>
<?php

      if (isset($_POST['send_message'])) :
        $auteur=htmlspecialchars(trim($_POST['auteur']));
        $email =htmlspecialchars(trim($_POST['email']));
        $sujet =htmlspecialchars(trim($_POST['sujet']));
        $message =htmlspecialchars(trim($_POST['message']));

        $errors=[];
        if (empty($auteur)||empty($email)||empty($sujet)||empty($message)):

            $errors['champ_vides']="veuillez remplir tous les champs!";
        elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)):
            $errors['errEmail']="L'adresse doit contenir un @ svp... veuillez recommencer!";
        endif;
        if(!empty($errors)):
            foreach($errors as $error):?>
              <p class="alert-danger"><?=$error?></p>
              <?php
            endforeach;
        else:
            send_mail($email,$sujet,$message,$name);
        endif;

      endif



























?>
