<h3>Reviews</h3>
<?php
   if(have_comments()):
      while(have_comments()):
         the_comment();
?>

      <ul class="list-unstyled">
         <li class='media'>
            <img src="<?= get_avatar_url($comment->comment_author); ?>" class="mr-3" alt="<?= get_comment_author($comment->comment_ID); ?>">
            <div class="media-body">
               <h4 class="mt-0"><?= get_comment_author($comment->comment_ID); ?></h4>
               <p><?= $comment->comment_content; ?></p>
            </div>
         </li>
      </ul>
</div>
<?php
      endwhile;
   else:
?>

   <p>No hay comentarios disponibles</p>

<?php
   endif;

   if(comments_open()):

      comment_form([
         'title_reply' =>'',
         'fields'=>[
            'author'=>'<div class="form-group">
               <label for="autor">Nombre</label>
               <input type="text" class="form-control" name="author" id="autor"></div>',
            "url" => '<div class="form-group">
               <label for="email">Email</label>
               <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com"></div>',
            'cookies'=>'<div class="custom-control           custom-switch">
               <input type="checkbox" class="custom-control-input" name="wp-comment-cookies-consent" id="cookies">
               <label class="custom-control-label" for="cookies">Guardar mis datos para la próxima vez que haga un comentario</label>
               </div>',
         ],
         'label_submit'=>'Comentar',
         'comment_field'=>'<div class="form-group">
            <label for="comentario">Comentario</label><textarea name="comment" class="form-control" id="comentario"></textarea></div>',
         "comment_notes_before" => "",
         "comment_notes_after" => "",
         "class_submit" => "btn btn-piburger"
      ]);
   
   endif;
?>