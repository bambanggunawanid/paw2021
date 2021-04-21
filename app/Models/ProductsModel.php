<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $table = '01_products';
    protected $useTimestamps = true;
    $this->db->from('products');
    $this->db->join('tbl_lining', 'products.lining=tbl_lining.id', 'left');
    $this->db->where('products.id', $id);  // Also mention table name here
    $query = $this->db->get();
    if($query->num_rows() > 0)
        return $data->result();
}
