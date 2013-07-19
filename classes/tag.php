<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Karmen
 * Date: 18.07.13
 * Time: 21:27
 * To change this template use File | Settings | File Templates.
 */

class tag {
	static function get_tags(){
		$tags = array();
		$tags_raw = get_all("SELECT * FROM post_tags NATURAL JOIN tag");
		foreach ($tags_raw as $tag){
			$tags[$tag['post_id']][] = $tag['tag_name'];
		}
		return $tags;
	}
}