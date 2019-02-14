<div class = "blog-item">
      <article>
		<h2>
		<?=$data['title'];?>		
		</h2>	
		<div><img src="<?=$data['img'];?>" alt="<?=$data['title']; ?>" class="blog-item-image"/></div>		
		<span class="description">
				<?=$data['text'];?>
		</span>
		
		</article>
</div>
/*<?
$i = 0;
		if($i !== 0) {
			?>
				</section>
				<? if($_SESSION['user_id']) { ?>
					<form action="/blog/comment/<?=$blog_id;?>" method="post">
						<textarea cols="50" rows="5" name="comment"></textarea><br>
						<input type="submit"/>
					</form>
				<? } ?>
				</div>
			<?
		}
		echo '<div class = "blog-item">';
		?>
			<article>
				<h2><?=$data['title'];?>
				<? if($_SESSION['admin'] === 'root') { ?>
				<form action="/blog/deleteBlogItem/" method="post">
					<button class="closer" name="close" value="<?=$data['blog_id'];?>">
						X
					</button>
				</form>
				<? } ?>
				</h2>
				<div><img src="<?=$data['img'];?>" alt="<?=$data['title']; ?>" class="blog-item-image"/></div>	
				<p>					
					<?=$data['text'];?>
				</p>
			</article>
			<section  class="comments">
				<article>
					<h4><?=$data['login'];?></h4>
					<p><?=$data['comment'];?></p>
				</article>
			<article>
				<h4><?=$data['login'];?></h4>
				<p><?=$data['comment'];?></p>
			</article>
		<?	
	$blog_id = $data['blog_id'];
	$i++;

?>
</section>
	<? if($_SESSION['user_id']) { ?>
		<form action="/blog/<?=$blog_id;?>comment/" method="post">
			<textarea cols="50" rows="5" name="comment"></textarea><br>
			<input type="submit"/>
		</form>
	<? } ?>
	</div>
</section>*/


