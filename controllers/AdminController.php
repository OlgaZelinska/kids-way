<?
class AdminController {
	public function actionIndex() {
		if($_POST['adminLogin'] === 'root' AND $_POST['adminPass'] === '111111') {
			$_SESSION['admin'] = 'root';
			include ROOT.'/views/admin/adminView.php';
			return;
		}
		if($_SESSION['admin'] === 'root') {	
			include ROOT.'/views/admin/adminView.php';
		} else {
			include ROOT.'/views/admin/adminFormView.php';
		}
		
	}
	public function actionAddPost() {
		if(isset($_POST['sub-blog'])){
			echo '<pre>';
			var_dump($_FILES['userfile']);
			echo '</pre>';
			$userfile = array (
				'name' => $_FILES['userfile']['name'],
				'tmp_name' => $_FILES['userfile']['tmp_name']
			);
			$postTitle = $_POST['postTitle'];
			$postText = $_POST['postText'];
			if(Admin::addPost($postTitle, $postText, $userfile)) {
				echo '<h2>Post has been added</h2>';
			} else {	
				echo '<h2>Error</h2>';
			}
		}
		$this->actionIndex();		
	}
    public function actionAddProduct() {
		if(isset($_POST['sub-product'])){
			$userfile = array (
				'name' => $_FILES['userfile']['name'],
				'tmp_name' => $_FILES['userfile']['tmp_name']
			);
			$postName = $_POST['Name'];
			$postDescription = $_POST['Description'];
			$postPrice = $_POST['Price'];
			$postBrand = $_POST['Brand'];
			$postIs_available = $_POST['Is_available'];
			if( Admin::addProduct($postName, $postDescription, $postPrice, $postBrand, $postIs_available, $userfile)) {
				echo '<h2>Post has been added</h2>';
			} else {	
				echo '<h2>Error</h2>';
			}
		}
		$this->actionIndex();		
	}
}