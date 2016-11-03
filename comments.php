<ol class="commentList">
<?php
wp_list_comments( array(
	'css'       => 'ol',
	'short_ping'  => true,
	'avatar_size' => 56,
) );
?>
</ol>

<?php paginate_comments_links(); ?> 

<?php

$comment_form_fields = array(

	'author' =>
		'
			<div class="comment-form-author form-group">
				<label for="author" class="control-label">Name</label>
				<div class="">
					<input id="author" class="form-control" name="author" type="text" value="' . esc_attr(  $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' required />
					' . ( $req ? '<p class="help-inline"><span class="required">Pflichtfeld</span></p>' : '' ) . '
				</div>
			</div>
			',

	'email' =>
		'
			<div class="comment-form-email form-group">
				<label for="email" class="control-label">E-Mail</label>
				<div class="">
					<input id="email" class="form-control" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' required />
					<p class="help-inline">' . ( $req ? '<span class="required">Pflichtfeld</span>, ' : '' ) . ' wird nicht angezeigt!' . '</p>
				</div>
			</div>
			',

	'url' =>
		'
			<div class="comment-form-url form-group">
				<label for="url" class="control-label">Website</label>
				<div class="">
					<input id="url" class="form-control" name="url" type="url" value="' . esc_attr(  $commenter['comment_author_url'] ) . '" size="30" />
				</div>
			</div>
			'
);

$comment_form_args = array(
	'id_form'           => 'commentform',
	'class_form'      	=> 'comment-form',
	'id_submit'         => 'submit',
	'class_submit'      => 'submit',
	'name_submit'       => 'submit',
	'title_reply'       => 'Schreibe eine Antwort',
	'title_reply_to'    => 'Schreibe eine Antwort als %s',
	'cancel_reply_link' => 'Antwort abbrechen',
	'label_submit'      => 'Post Kommentar' ,
	'format'            => 'html',

	'comment_field' => '
        <label for="comment" class="control-label">Kommentar</label>
        <div class="">
        	<textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true" required></textarea>
        </div>
    ',

	'must_log_in' => '<p class="must-log-in">' .
		sprintf(
			'Du musst <a href="%s">eingeloggt sein</a> um zu posten.',
			wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
		) . '</p>',

	'logged_in_as' => '<p class="logged-in-as">' .
		sprintf(
			'Logge dich ein als <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Ausloggen?</a>',
			admin_url( 'profile.php' ),
			$user_identity,
			wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
		) . '</p>',

	'comment_notes_before' => '<p class="comment-notes">' .
		'Your email address will not be published.' . ( $req ? $required_text : '' ) .
		'</p>',

	'comment_notes_after' => '<div class=""> <p class="form-allowed-tags">' .
		sprintf(
			'Du kannst folgendes nutzen <abbr title="HyperText Markup Language">HTML</abbr> Tags und Attribute: %s',
			' <code>' . allowed_tags() . '</code>'
		) . '</p></div>',

	'fields' => apply_filters( 'comment_form_default_fields', $comment_form_fields ),
);


comment_form( $comment_form_args ); ?>