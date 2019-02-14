<?php
class Blog {
	public static function getBlogPosts() {
		$conn = Db::getConnection();
		$sql = "SELECT title, img, blog.text AS content, blog.id AS blog_id
                FROM blog";
		$result = $conn->query($sql);
		$data = $result->fetch_all(MYSQLI_ASSOC);
		return $data;
	}
	public static function getBlogById($id) {
		$id = intval($id);
		if($id) {
			$conn = Db::getConnection();
			$sql = "SELECT * FROM blog where id=$id";
			$result = $conn->query($sql);
			$data = $result->fetch_all(MYSQLI_ASSOC);
				return $data[0];
		}
	}

}