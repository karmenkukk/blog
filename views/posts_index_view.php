<table>
	<? foreach ($posts as $post): ?>
	<tr>
		<td><h2><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post['post_subject']?></a></h2></td>
	</tr>
	<tr>
		<td><?=$post['post_text']?></td>
	</tr>
	<tr style="height: 60px">
		<td>&nbsp;</td>
	</tr>
	<? endforeach ?>
</table>