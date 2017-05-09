<?php
	//File products_model.php
	class anggota_model extends CI_Model  {
		function __construct() { parent::__construct(); } function getAllAnggota() {
		//select semua data yang ada pada table msProduct $this--->db->select("*");
		$this->db->from("anggota");

		return $this->db->get();
	}

	function getAnggota($nim)
	{
		//select produk berdasarkan id yang dimiliki
		$this->db->where('nim', $nim); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
        $this->db->select("*");
        $this->db->from("anggota");
        
        return $this->db->get();
	}

	function addAnggota($data)
	{
		//untuk insert data ke database
		$this->db->insert('anggota', $data);
	}

	function updateAnggota($data, $condition)
	{
		//update produk berdasarkan id
		$this->db->where($condition); //Hanya akan melakukan update sesuai dengan condition yang sudah ditentukan
        $this->db->update('anggota', $data); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller
	}

	function deleteAnggota($nim)
	{
		//delete produk berdasarkan id
		$this->db->where('nim', $nim);
        $this->db->delete('anggota');
	}
}