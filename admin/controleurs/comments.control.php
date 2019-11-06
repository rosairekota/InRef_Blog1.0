
   <?php

            function delete_comments_control(){

                if (isset($_GET['id'])){

                       $id=htmlspecialchars(trim($_GET['id']));

                            delete_comments($id);


              }

            }

            function update_comments_control(){

              if (isset($_GET['id'])):

                   $id=htmlspecialchars(trim($_GET['id']));

                        update_comments($id);


             endif;

            }





































    ?>
