<?php
namespace App\Controllers;

use CodeIgniter\Database\Query;
use App\Models\UsersModel;
use App\Models\ProductsModel;
class Auth extends BaseController
{
  // public function __construct()
  // {
  //   parent::__construct();
  // }

  // Func Login Page
  public function index()
  {
    $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[01_users.email]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->session->userdata('email')) {
      redirect('user');
    }

    if ($this->form_validation->run() == false) {
      $data['title'] = 'CI-Admin Login';
      $this->load->view('layouts/header_auth', $data);
      $this->load->view('auth/login');
      $this->load->view('layouts/footer_auth');
    } else {

      //Ketika Succes... Cara Pak Dika kasih tau func private adalah dengan underskor
      $this->_login();
    }
  }
  // Func Login Method Algorithm
  private function _login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    //Jadi ini maksudnya, sebuah query get_where jika email = email pada db maka masuk ke auth/ auth success
    $user = $this->db->get_where('user', ['email' => $email])->row_array();

    if ($user) {
      //user ada
      if ($user['is_active'] == 1) {

        //jika usernya sudah active
        if (password_verify($password, $user['password'])) {

          //jika benar maka :
          $data = [
            'email' => $user['email'],
            'role_id' => $user['role_id']
          ];

          //memasukkan data ke dalam session
          $this->session->set_userdata($data);
          if ($user['role_id'] == 1) {

            //jika dia admin maka
            redirect('admin');
          } else {
            redirect('user');
          }
          redirect('user');
        } else {

          //jika salah maka :
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed, Wrong Password!</div>');
          redirect('auth');
        }
      } else {

        //jika belum maka :
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed, Your Account not Activated</div>');
        redirect('auth');
      }
    } else {

      //user tidak ada
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed, Your Account not Registered</div>');
      redirect('auth');
    }
  }

  // Func Registration
  public function registration()
  {

    if ($this->session->userdata('email')) {
      redirect('user');
    }
    // Set Form Validation error
    if(!$this->validate([
      'name' => 'required|trim',
      'email' => 'required|trim|is_unique[user.email]',
      'password1' => 'required|trim|min_length[4]|matches[password2]',
      'password2' => 'required|trim|min_length[4]|matches[password1]',

    ])){
      $validation = \Config\Services::validation();
      return redirect()->to('/auth/registration');
    }

    if ($this->form_validation->run() == (false)) {
      $data['title'] = 'CI-Admin Registration';
      $this->load->view('templates/header_auth', $data);
      $this->load->view('auth/registration');
      $this->load->view('templates/footer_auth');
    } else {
      $data = [
        'name' => htmlspecialchars($this->input->post('name', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'image' => 'default.jpg',
        //cara enskripsi
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        //default member
        'role_id' => 2,
        'is_active' => 1,
        'date_created' => time()
      ];
      $this->db->insert('user', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Registration Success, Your Account has been Created. Please Login! </div>');
      redirect('auth');
    };
  }

  //Func Logout
  public function logout()
  {
    //Bersihin Session dan Kembali ke login
    if ($this->session->userdata('email') == null) {
      redirect('auth');
    } else {
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('role_id');
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success, You have been Logout</div>');
      redirect('auth');
    }
  }

  //View jika user tidak boleh masuk ke admin
  public function blocked()
  {
    $this->load->view('auth/blocked');
  }
}
