<?
class BlogController {
	public function actionList() {
		$data = Blog::getBlogPosts();
		include ROOT.'/views/BlogView.php';
		}
	public function actionArticle($id) { 
        $id = $id[0];		
		$id = intval($id);
		if($id) {
			$data = Blog::getBlogById($id) ;
	}
		include ROOT.'/views/BlogItemView.php';	
	}
	public function actionAddComment($blog_id) {
		$blog_id=$blog_id[0];
		if(isset($_POST['comment'])) {
			Blog::addComment($blog_id, $_POST['comment']);
		}
		$this->actionList();
	}
	public function actionDeleteBlogItem($blog_id) {
		if(isset($_POST['close'])) {
			$blog_id = intval($_POST['close']);
			Admin::deletePost($blog_id);
		}
		$this->actionList();
	}
}