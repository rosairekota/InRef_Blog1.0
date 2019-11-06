<section id="mu-page-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-page-breadcrumb-area">
          <h2>Contact</h2>
          <ol class="breadcrumb">
           <li><a href="#">Home</a></li>
           <li class="active">Contact</li>
         </ol>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End breadcrumb -->

<!-- Start contact  -->
<section id="mu-contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-contact-area">
         <!-- start title -->
         <div class="mu-title">
           <h2>Contactez-Nous</h2>
           <p>Si vous avez une préocupation, veuillez nous la faire parvenir en remplissant le formulaire ci-dessous:</p>
         </div>
         <!-- end title -->
         <!-- start contact content -->
         <div class="mu-contact-content">
           <div class="row">
             <div class="col-md-6">
               <div class="mu-contact-left">
                 <form class="contactform" method="post">

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
                                     $desinateur="rkota@nsat.africa";
                                     $messages="bonjour \r\n";
                                     $header="MIME-Version:1.0\r\n";
                                     $header.="Content-type:text/html; charset=UTF-8\r\n";
                                     $header.='From:rosairekota@gmail.com'."\r\n";
                                     $header.='Reply-To:rosairekota@gmail.com'."\r\n";
                                    $success= mail($desinateur,$sujet,$messages,$header);
                                    if (!$success) {
                                      echo "echec";
                                    }
                                    else {
                                      echo "Felicitation votre mail a ete envoyé";
                                    }
                           endif;

                         endif?>

                   <p class="comment-form-author">
                     <label for="auteur">Nom <span class="required">*</span></label>
                     <input type="text" required="required" size="30" value="" name="auteur">
                   </p>
                   <p class="comment-form-email">
                     <label for="email">Email <span class="required">*</span></label>
                     <input type="email" required="required" aria-required="true" value="" name="email">
                   </p>
                   <p class="comment-form-url">
                     <label for="sujet">Sujet</label>
                     <input type="text" name="sujet">
                   </p>
                   <p class="comment-form-comment">
                     <label for="message">Préocupation</label>
                     <textarea required="required" aria-required="true" rows="8" cols="45" name="message"></textarea>
                   </p>
                   <p class="form-submit">
                     <input type="submit" value="envoyer le message" class="mu-post-btn" name="submit">
                   </p>
                 </form>
               </div>
             </div>
             <div class="col-md-6">
               <div class="mu-contact-right">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d6249.345033302234!2d-80.02791918555701!3d40.45935344513505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8834f411a7b748bd%3A0xaec8197db3de9a9e!2sCalifornia-Kirkbride%2C+Pittsburgh%2C+PA%2C+USA!3m2!1d40.4600435!2d-80.0213538!5e0!3m2!1sen!2sbd!4v1464270878470" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
               </div>
             </div>
           </div>
         </div>
         <!-- end contact content -->
        </div>
      </div>
    </div>
  </div>
</section>
