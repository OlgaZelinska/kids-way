<div class = "container">
	<aside class="categories">
		<ul>
			<li><a href="/product">Всe товары</a></li>
			<? foreach($categories as $cat) { ?>
			<li>
				<a href="/<?=$cat['id'];?>"><?=$cat['name'];?></a>
					<?
					if($subCategories[$cat['id']]){
						echo '<ul>';
						foreach($subCategories[$cat['id']] as $key => $sub) { ?>
						<li style="padding-left: 10px;"><a href="/<?=$cat['id'];?>/<?=$sub['subId'];?>"><?=$sub['subName'];?></a></li>

					<? } echo '</ul>'; }?>
			</li>
			<?}?>
		</ul>		
	</aside>
	<section class="content">
		<? foreach($products as $product) { ?>
		
		<article class="card">
		<a href="/product/<?=$product['id']; ?>">
			<img src="<?=$product['img'];?>" alt="<?=$product['name']; ?> " class="product-img"/>
			<h2 class="title">				
					<?=$product['name']; ?>			
			</h2>
			<h3>
				<?=$product['category_name'];?>
			</h3>
			<span>
				<?=$product['brand'];?>
			</span><br>
			<span class="price">
				<?=$product['price'].'грн.';?>
			</span><br>
			<?
			if($product['is_available']>0) {
			 	echo "<span class='available' style='color:green'>В наличии</span>";
			}else {
				echo "<span class='available' style='color:red'>Нет в наличии</span>";}?>
					</a>
		</article>
		<? } ?>
	</section>
</div>