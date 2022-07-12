<?php
class Page extends CI_Controller {

    public function home() 
    {
      $this->load->view('home');
    }

    public function report() 
    {
      $this->load->view('report'); 
    }

    public function tambah()
    {
        $name           = $this->input->post('name');
        $address        = $this->input->post('address');
        $email          = $this->input->post('email');
        $link           = $this->input->post('link');
        $userfile       = $_FILES['userfile'];
        $comments       = $this->input->post('comments');

        if ($userfile=''){}else{
          $config['upload_path']    = 'assets/images';
          $config['allowed_types']  = 'jpg|png|jpeg';

          $this->load->library('upload',$config);
          if (!$this->upload->do_upload('userfile')){
            echo "Upload gagal"; die();
          }else{
            $userfile=$this->upload->data('file_name'); 
          }
          
        }
    
        $data = array(
            'name'      => $name,
            'email'     => $email,
            'address'   => $address,
            'link'      => $link,
            'userfile'  => $userfile,
            'comments'  => $comments,
        );

      $this->m_reportholes->input_data($data, 'tb_laporan');
      redirect('Page/report');
    }

    public function projects()
	  {
		$this->load->view('projects');
	  }

    public function about()
	  {
		  $data['judul'] = 'About';
	    $this->load->view('about');
	  }

}