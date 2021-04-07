<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    public function getAllUser()
    {
        return $this->db->query("SELECT id, kode_barang, nama_barang,nama_kategori, harga 
        FROM tb_barang INNER JOIN tb_kategori 
        ON tb_barang.id_kategori=tb_kategori.id_kategori;")->result_array();

    }
    public function hapusData($id)
    {
        $this->db->delete('tb_barang', ['id' => $id]);
    }

    public function inputData()
    {
        $data = [
            "kode_barang" => $this->input->post('kodebarang',true),
            "id_kategori" => $this->input->post('idkategori', true),
            "nama_barang" => $this->input->post('namabarang',true),
            "harga" => $this->input->post('hargabarang',true)
        ];
        $this->db->insert('tb_barang',$data);
    }
    public function getUserById($id)
    {
        return $this->db->get_where('tb_barang', ['id' => $id])->row_array(); 
    }
    public function updateData()
    {
        $data = [
            "kode_barang" => $this->input->post('kodebarang',true),
            "id_kategori" => $this->input->post('idkategori', true),
            "nama_barang" => $this->input->post('namabarang',true),
            "harga" => $this->input->post('hargabarang',true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_barang', $data);
    }


    

}

/* End of file Barang_model.php */
