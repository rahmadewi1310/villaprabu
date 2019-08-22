 <?php

class LoginAdmin extends CI_Controller{

public function __construct()

	{
		parent::__construct();
		//load model admin
        $this->load->model('LoginAdmin_model');
        //load library penyewa
        $this->load->library('form_validation');
	}

	public function index()
	{

                //jika session belum terdaftar

                //set form validation
                $this->form_validation->set_rules('USERNAME', 'USERNAME', 'required');
                $this->form_validation->set_rules('PASSWORD', 'PASSWORD', 'required');

                //set message form validation
                $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $USERNAME = $this->input->post("USERNAME", TRUE);
                $PASSWORD = $this->input->post('PASSWORD', TRUE);

                //checking data via model
                $checking = $this->LoginAdmin_model->check_login('tb_user_role', array('USERNAME' => $USERNAME), array('PASSWORD' => $PASSWORD));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'ID_USER_ROLE'    => $apps->ID_USER_ROLE,
                            'ROLE_NAME'      => $apps->ROLE_NAME,
                            'USERNAME'       => $apps->USERNAME,
                            'PASSWORD'       => $apps->PASSWORD,

                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        redirect('admin/dashboard');

                    }
                }else{

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah dan belum aktif!</div></div>';
                    $this->load->view('admin/login_v', $data);
                }

            }else{

                $this->load->view('Admin/login_v');
            }

    }
}