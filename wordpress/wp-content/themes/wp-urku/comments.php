<ul class="ae-container-fluid ae-container-fluid--inner rk-comments">

  <?php if (post_password_required()) : ?>
    <p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'wpeasy' ); ?></p>
    </div>
    <?php return; endif; ?>

  <?php if (have_comments()) : ?>
    <h3 class="rk-comments__title ae-u-bolder"><?php comments_number(); ?></h3>

    <?php wp_list_comments('type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>

  <?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
    <p><?php _e( 'Comments are closed here.', 'wpeasy' ); ?></p>
  <?php endif; ?>

  <?php

    $defaults = array(
      'fields'=> array(
        'author' => '<input type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder="* Name" required>',
        'email'  => '<input type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" placeholder="* Email" required>',
        'url'    => '<input value="' . esc_attr( $commenter['comment_author_url'] ) . '" type="text" placeholder="Website">',
        ),
      'comment_field' => '<textarea placeholder="Leave your comment here ..." cols="30" rows="7"></textarea>',
      'must_log_in' => '<p class="must-log-in">' . sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
      'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( '<a href="%1$s" aria-label="Logged in as %2$s. Edit your profile.">Logged in as %2$s</a>. <a href="%3$s">Log out?</a>' ), get_edit_user_link(), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
      'comment_notes_before' => ' ',
      'comment_notes_after'  => '',
      'id_form'              => 'commentform',
      'id_submit'            => 'submit',
      'class_form'           => 'comment-form ae-form--full',
      'class_submit'         => 'submit',
      'name_submit'          => 'submit',
      'title_reply'          => '',
      'title_reply_to'       => '',
      'title_reply_before'   => '',
      'title_reply_after'    => '',
      'cancel_reply_before'  => ' <small>',
      'cancel_reply_after'   => '</small>',
      'cancel_reply_link'    => 'Cancel reply',
      'label_submit'         => 'Post Comment',
      'submit_button'        => '<button name="%1$s" type="submit" id="%2$s" class="%3$s au-mt-2 arrow-button arrow-button--right arrow-button--out" />%4$s <span class="arrow-cont"><svg><use xlink:href="'. get_template_directory_uri() .'/img/symbols.svg#arrow"></use></svg></span></button>',
      'submit_field'         => '<div class="au-pt-3 group-buttons">%1$s %2$s</div>',
      'format'               => 'xhtml',
    );

  ?>
  <div class="ae-grid ae-grid--collapse inner-box-3">
    <div class="ae-grid__item item-lg-8 item-lg--offset-2">
      <?php comment_form( $defaults ); ?>
    </div>
  </div>

</ul>
