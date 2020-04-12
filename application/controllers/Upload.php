<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

	public function index()
	{

        $data['judulapp'] = 'Demo Upload File';
        $gagal['judulapp'] = 'Data Gagal Diupload';

        if( isset($_POST['btnsubmit']) )
        {
            $config = [
                'upload_path'   => './upload_file/',
                'allowed_types' => 'gif|jpg|png',
                'max_size'      => '200000'
            ];

            $this->load->library('upload',$config);

            if( $this->upload->do_upload() )
            {
                $this->load->view('vUploadSuccess',[
                    'data'  => $this->upload->data()
                ]);
            }
            else
            {
                $this->load->view('vUpload',$gagal);
            }
        }
        else
        {
            $this->load->view('vUpload',$data);
        }
	}
}
