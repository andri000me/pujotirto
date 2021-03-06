<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_perantau extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function getInsertData($data_perantau)
    {
        $this->db->insert('t_perantau', $data_perantau);
       
    }
    
    public function getInsertDataKarantina($data_karantina)
    {
        $this->db->insert('t_karantina', $data_karantina);
    }

    public function getInsertDataAktifitas($data_aktifitas)
    {
        $this->db->insert('t_histori_aktifitas', $data_aktifitas);
    }

    public function getInsertDataTamu($data_tamu)
    {
        $this->db->insert('t_tamu', $data_tamu);
    }

    public function getDataTamu()
    {
        return $this->db->get('t_tamu');
    }

    public function updateById($id)
      {
        $this->db->from('t_perantau');
        $this->db->where('nik', $id);
        $query = $this->db->get();

        return $query->row();
      }

      public function UpdateKarantina($where, $data_karantina){
        $this->db->update('t_karantina', $data_karantina, $where);
        return $this->db->affected_rows();
      }

      public function UpdateOdpToPpd($where, $data_perantau)
      {
        $this->db->update('t_perantau', $data_perantau, $where);
        return $this->db->affected_rows();

      }

      public function UpdateDataPerantau($where, $data_perantau)
      {
        $this->db->update('t_perantau', $data_perantau, $where);
        return $this->db->affected_rows();

      }

    public function getDataOdp()
    {
        $this->db->select('*');
        $this->db->where('status_', 'ODP');
        $this->db->from('vw_time_karantina');
        return $this->db->get();
    }

    public function getDataPdp()
    {
      $this->db->select('*');
      $this->db->where('status_', 'PDP');
      $this->db->from('vw_time_karantina');
      return $this->db->get();
    }

    public function createAutoId(){
      $this->db->select('RIGHT(t_perantau.nik,16) as kode', FALSE);
      $this->db->order_by('nik', 'DESC');
      $this->db->limit(1);
      $query  = $this->db->get('t_perantau');
      if($query->num_rows()<>0){
        $data = $query->row();
        $kode = intval($data->kode)+1;
      }
      else {
        $kode = 16;
      }
      $kodemax  = str_pad($kode, 16, "0", STR_PAD_LEFT);
      $kodejadi = $kodemax;
      $kodejadi = $kodemax;
      return $kodejadi;
    }
    

}

/* End of file Model_perantau.php */
