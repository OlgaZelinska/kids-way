<?php
class Admin {
	public static function addPost($title, $text, $img) {
		$imgTmpName = $img['tmp_name'];
		$imgName = iconv("UTF-8", "cp1251", $img['name']);
		$path = "/files/".$img['name'];
		if (move_uploaded_file($imgTmpName, ROOT. "/files/$imgName")) {
        echo "File uploaded";
    } else {
        echo "File didn't upload";
    }
		$conn = Db::getConnection();
		$sql = "INSERT INTO new_shop.blog (id, title, text, img)
		VALUES (NULL, '$title', '$text', '$path')";
		return $conn->query($sql);
	}
	public static function deletePost($blogId) {
		echo '$blogId', $blogId;
		$conn = Db::getConnection();
		$sql = "DELETE FROM  `blog` WHERE id =$blogId";
		return $conn->query($sql);
	}
	
	
	public static function addProduct($name, $description, $price, $brand,  $img, $is_available) {
        $imgTmpName = $img['tmp_name'];
        $imgName = iconv("UTF-8", "cp1251", $img['name']);
        $path = "/files/".$img['name'];
        if ( move_uploaded_file($imgTmpName, ROOT. "/files/$imgName")) {
       echo "File uploaded";
   } else {
       echo "File didn't upload";
    }
        $conn = Db::getConnection();
        $sql2= "INSERT INTO product (id, name, description, price, brand, img, is_available)
        VALUES (NULL, '$name', '$description', '$price', '$brand','$path', '$is_available')";
        return $conn->query($sql);
    }
}