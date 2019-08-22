 <?php

class LoginHousekeeping extends CI_Controller{

public function __construct()

	{
		parent::__construct();
		//load model admin
        $this->load->model('LoginHousekeeping_model');
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
                $checking = $this->LoginHousekeeping_model->check_login('tb_housekeeping', array('USERNAME' => $USERNAME), array('PASSWORD' => $PASSWORD));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'ID_HOUSEKEEPING'    => $apps->ID_HOUSEKEEPING,
                            'NAMA'            => $apps->NAMA,
                            'EMAIL'           => $apps->EMAIL,
                            'JENIS_KELAMIN'   => $apps->JENIS_KELAMIN,
                            'TELP'            => $apps->TELP,
                            'USERNAME'       => $apps->USERNAME,
                            'PASSWORD'       => $apps->PASSWORD,

                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        redirect('housekeeping/dashboard');



                    }
                }else{

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah dan belum aktif!</div></div>';
                    $this->load->view('housekeeping/login_v', $data);
                }

            }else{

                $this->load->view('housekeeping/login_v');
            }

    }
}