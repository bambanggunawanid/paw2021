<?php
namespace App\Controllers;

use CodeIgniter\Database\Query;
use App\Models\UsersModel;
use App\Models\ProductsModel;
class Admin extends BaseController
{
  // public function __construct()
  // {
  //   parent::__construct();
  //   is_logged_in();
  // }
  public function index()
  {
    //Bacanya gini : Jadi jika kan sebelumnya kita ceritanya deklarasi var data dengan parameter user. Disini kita manfaatkan parameter user sebagai masukan untuk ke input get_where agar isi dari this db get where.. masuk ke var data. Dengan melakukan session func userdata. Maka semua data yg ada di "Baris" dengan email terkait akan terambil. Kan tadi di login udah dilakukan metode session. Jadi sessionnya udh masuk nih ke Browser. Yaudah tinggal pake aja deh buat keperluan tampilan usernya
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //cara aksesnya dimensi 1 nya nama tablenya.. dimensi 2nya nama col table nya
    $data['title'] = 'Dashboard';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('admin/index.php', $data);
    $this->load->view('templates/footer');
  }
  public function role()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['role'] = $this->db->get('user_role')->result_array();

    //cara aksesnya dimensi 1 nya nama tablenya.. dimensi 2nya nama col table nya
    $data['title'] = 'Role';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('admin/role.php', $data);
    $this->load->view('templates/footer');
  }

  public function roleAccess($role_id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

    $this->db->where('id!=', 1);
    $data['menu'] = $this->db->get('user_menu')->result_array();

    //cara aksesnya dimensi 1 nya nama tablenya.. dimensi 2nya nama col table nya
    $data['title'] = 'Role Access';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('admin/role-access.php', $data);
    $this->load->view('templates/footer');
  }
  public function changeAccess()
  {
    $menu_id = $this->input->post('menuId');
    $role_id = $this->input->post('roleId');

    $data = [
      'role_id' => $role_id,
      'menu_id' => $menu_id
    ];

    $result = $this->db->get_where('user_access_menu', $data);
    if ($result->num_rows() < 1) {
      $this->db->insert('user_access_menu', $data);
    } else {
      $this->db->delete('user_access_menu', $data);
    }

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access has been Changed</div>');
  }
}
