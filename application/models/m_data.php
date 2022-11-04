<?php

class M_data extends CI_Model
{
    private $table='biodata';
    //validasi form
    public function rules(){
        return[
            [
                'field'=>'nama',
                'label'=>'Nama',
                'rules'=>'trim|required'
            ],
            [
                'field'=>'jk',
                'label'=>'Jenis Kelamin',
                'rules'=>'trim|required'
            ],
            [
                'field'=>'alamat',
                'label'=>'Alamat',
                'rules'=>'trim|required'
            ],
            [
                'field'=>'pekerjaan',
                'label'=>'Pekerjaan',
                'rules'=>'trim|required'
            ]
        ];
    }
    public function getbyId($id){
        return $this->db->get_where($this->table,["id"=>$id])->row();
    }
    function ambil_data(){
        return $this->db->get('biodata');
    }
    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }
    function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('biodata');
    }
    function edit_data($where){		
        return $this->db->get_where('biodata',$where);
    }
    function update_data($where,$data){
		$this->db->where($where);
		$this->db->update('biodata',$data);
	}	
}