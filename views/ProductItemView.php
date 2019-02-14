<script>
		$(document).ready(function(){
		$('input[name=submit]').on('input', function() {			
			let obj = {};
			obj[$(this).attr('data-id')] = $(this).val();
			console.log(obj);
			$.post( "http://kids-way.ru/basket", obj);
		})

		});
</script>

<div class = "container-product-item">
	<section class="product-item">
		<article class="product-article">
		<h2>
			<?=$products['id'].' '.$products['name'];?>
		</h2>	
			 <img src="<?=$products['img'];?>" alt="<?=$products['name']; ?>"class="product-image"/>	
		<p class="description"> 		
				<?=$products['description'];?>
		</p> <br>		
		<input type="submit" name="submit" value="Добавить в корзину" class="myButton" id="cart" data-id="<?=$products['id'];?>"><br>	
		<button item-id="item1" onclick="toBasket(this);">Добавить в корзину</button>
		</article>
	</section>
</div>
