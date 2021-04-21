<?php

namespace App\Controllers;

use CodeIgniter\Database\Query;
use App\Models\UsersModel;
use App\Models\ProductsModel;

class Pages extends BaseController
{
	protected $usersModel;
	protected $productsModel;
	public function __construct()
	{
		$this->usersModel = new UsersModel();
		$this->productsModel = new ProductsModel();
	}
	public function index()
	{
		$products = $this->productsModel->findAll();
		$data = [
			'title' => 'Home Page',
			'products' => $products
		];

		// Connect db without model
		// $db = \Config\Database::connect();
		// $users = $db->query("SELECT * FROM 01_users");
		// dd($users);

		return view('pages/home', $data);
	}
	public function detail($product_id = 0)
	{
		$products = $this->productsModel->findAll();
		$data = [
			'title' => 'Detail Page',
			'pid' => $product_id
		];

		return view('pages/detail', $data);
	}
}
