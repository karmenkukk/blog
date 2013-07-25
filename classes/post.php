<?php

class post {
	static function delete($post_id){
		q("DELETE FROM post WHERE post_id='$post_id'");
	}
	static function edit($post_id){
		global $request;
		$post['post_subject'] = $request->post['post_subject'];
		$post['post_text'] = $request->post['post_text'];
		update('post', $post, "post_id='$post_id'");
	}
}