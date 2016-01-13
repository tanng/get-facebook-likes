<?php

function gfl_setting( $setting_name = '' )
{
 	$settings = array(
		'actions' 	=> array( 'like_count', 'share_count', 'comment_count', 'total_count' ),
		'mode'		=> 'advanced'
	);

 	if ( ! empty( $settings ) && isset( $settings[$setting_name] ) )
 		return $settings[$setting_name];

	return $settings;
}


function get_likes( $post_id = null )
{
	return fb_action_count();
}

function the_likes()
{
	$likes = get_likes();

	echo $likes;
}


function fb_action_count( $action = 'fb_like_count', $post_id = null  )
{
	if ( is_null( $post_id ) )
		$post_id = get_the_ID();

	$action_count = intval( get_post_meta( $post_id, $action, true ) );

	return $action_count;
}

function the_fb_action_count( $action = 'fb_like_count', $post_id = null )
{
	echo fb_action_count( $action, $post_id );
}