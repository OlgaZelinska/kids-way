<div class="menu1">
  <br id="tab2"/><br id="tab3"/>
  <a href="#tab1">Добавить новость</a><a href="#tab2">Добавить товар</a><a href="#tab3">Выход</a>
  <div>
<form action="/admin/addPost" method="post" style="text-align:center" enctype="multipart/form-data">
	<br>
	<span>Заглавие</span>
	<input type="text" name="postTitle"><br>
	<br>
	<span>Текст</span>
	<textarea cols='100' rows='20' name="postText"></textarea><br><br>
	<input type="file" name="userfile"><br><br>
	<input type="submit" name="sub-blog"><br><br>
</form></div>
  <div>
 <form action="/admin/addProduct" method="post" style="text-align:center" enctype="multipart/form-data">
	<br>
	<span>Зазвание товара</span>
	<input type="text" name="postName"><br>
	<br>
	<span>Описание</span>
	<textarea cols='100' rows='20' name="postDescription"></textarea><br><br>
	<input type="file" name="userfile"><br><br>
	<br>
	<input type="number" name="postPrice"><br>Стоимость
	<br>
	<br>
	<input type="text" name="postBrand"><br> Бренд
	<br>
	<br>
	<input type="file" name="userfile"><br><br>
	<br>
	<br>
	<input type="number" name="postIs_available"><br>Количество
	<br>
	<input type="submit" name="sub-product"><br><br>	
	</form></div><div>

<a href='/exit'>Exit</a>
</div>
 </div>
