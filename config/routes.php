<?php
return array(
    '/admin/addProduct' => '/admin/addProduct',
    '/admin/addPost' => 'admin/addPost',	
	'/admin' => 'admin/index',
	'/blog/([0-9]+)' => 'blog/article/$1',
    '/blog' => 'blog/list',
	'/blog/comment/([0-9]+)' => 'blog/addComment/$1',
    '/blog/deleteBlogItem' => 'blog/deleteBlogItem',
	'/exit' => 'registration/destroy',
	'/registration/confirm/([0-9]+)' => 'registration/confirm/$1',
	'/login' => 'registration/autorisation',
	'/registration' => 'registration/register',
	'/product/([0-9]+)' => 'product/product/$1',
	'/([0-9]+)/([0-9]+)/page-([0-9]+)' => 'product/index/$1/$2/$3',
	'/([0-9]+)/page-([0-9]+)' => 'product/index/$1//$2',
	'/page-([0-9]+)' => 'product/index///$1',
	'/([0-9]+)/([0-9]+)' => 'product/index/$1/$2',
	'/([0-9]+)' => 'product/index/$1',	
	'/product' => 'product/index',
	'/([a-zA-Z/]+)' => 'error/notfound',
	'/' => 'mainpage/index');
	
