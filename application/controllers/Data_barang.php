<?php   
    defined('BASEPATH') OR exit('No direct script access allowed');  
    class Data_barang extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
            $this->load->model('Barang_model');
            
            
        }  
        public function index()
        {
           $data['barang'] = $this->Barang_model->getAllUser();
           $data['content'] = $this->load->view('web/data_barang', $data, TRUE);
           $this->load->view('template/head_foot', $data, FALSE);
        }

        //hapus data
        public function hapus($id)
        {
            $this->Barang_model->hapusData($id);
            redirect('Data_barang');
        }

        public function formTambah()
        {
            $data['content'] = $this->load->view('web/input_data', '', TRUE);
            $this->load->view('template/head_foot', $data, FALSE);
        }
        public function simpanData()
        {
            $this->Barang_model->inputData();
            
            redirect('data_barang/formTambah','refresh');
            
        }

        public function formEdit($id)
        {
            $data['barang'] = $this->Barang_model->getUserById($id);
            $data['content'] = $this->load->view('web/ubah_data', $data, TRUE);
            $this->load->view('template/head_foot', $data, FALSE);
        }

        public function ubahData()
        {
            $this->Barang_model->updateData();
            redirect('Data_barang');
        }


    }   
    /* End of file Controllername.php */
?>