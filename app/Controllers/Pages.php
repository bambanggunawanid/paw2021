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
		return view('pages/home', $data);
	}
	public function detail($product_id)
	{
		$detail_product = $this->productsModel->getDetailProduct($product_id);
		// dd($detail_product);
		$data = [
			'title' => 'Detail Page',
			'detail_product' => $detail_product,
			// 'image_product' => $image_product
		];
		return view("pages/detail", $data);
	}
}
