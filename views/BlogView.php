<section class="blog-container">
	<? foreach($data as $post) { ?>
	<article class="blog-article">
	<a href="/blog/<?=$post['blog_id'];?>">
		<h2 class="blog-title"><?=$post['blog_id'].''.$post['title'];?></h2>
		
		<br>
		<img src="<?=$post['img'];?>" alt="<?=$post['title']; ?>" class="blog-image"/>		
		<span class="description">
				<?=$post['content'];?>
		</span>
		
		</article>
		</a>
			<? } ?>
	
</section>