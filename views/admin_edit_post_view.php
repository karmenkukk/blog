<script type="text/javascript" src="<?=ASSETS_URL?>js/vendor/bootstrap.js"></script>
<script type="text/javascript" src="<?=ASSETS_URL?>js/vendor/bootstrap-prompts-alert.js"></script>
<script type="text/javascript">
	function check(){
		if (!$('#comment_text').val()){
			alert('Tühi!');
			return false;
		}
	}
</script>
<span class="span6">
<table>
	<form method="post">
	<tr>
		<td><h2><input name="post_subject" type="text" value="<?=$post['post_subject']?>"/></h2></td>
	</tr>
	<tr>
		<td><textarea name="post_text" id="" cols="30" rows="10"><?=$post['post_text']?></textarea></td>
	</tr>
	<tr style="height: 60px">
		<td><button type="submit">Salvesta</button></td>
	</tr>
	</form>
</table>
<h2>Kommentaarid</h2>
<table class="table">
	<? foreach ($comments as $comment): ?>
		<tr>
			<td><?=$comment['comment_author']?><br>
				<?=$comment['comment_time']?>
			</td>
			<td><?=$comment['comment_text']?></td>
		</tr>
	<? endforeach?>
</table>
<form method="post" id="form">
	<input type="text" name="comment_author" placeholder="Nimi"/>
	<textarea name="comment_text" id="comment_text" cols="100" rows="5" style="width: auto" placeholder="Kommentaar..."></textarea>
	<button type="submit" onclick="return check()">Lisa</button>
</form>
</span>