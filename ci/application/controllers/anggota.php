<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class anggota extends CI_Controller  {
	function __construct(){
		parent::__construct();
		$this->load->model("anggota_model"); //constructor yang dipanggil ketika memanggil products.php untuk melakukan pemanggilan pada model : products_model.php yang ada di folder models
	}

	public function index()
	{
		//Function yang digunakan untuk menampilkan view products_view.php
		$data['listAnggota'] = $this->anggota_model->getAllAnggota(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('anggota_view', $data); //menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
	}

	public function addAnggota()
	{
		//Function yang dipanggil ketika ingin melakukan add produk kemudian menampilkan add_product_view
		$this->load->view('add_anggota_view');
	}

	public function addAnggotaDb()
	{
		//Function yang dipanggil ketika ingin memasukan produk ke dalam database
		$data = array(
			'nim' => $this->input->post('f_nim'),
			'nama' => $this->input->post('f_nama')
			);
		$this->anggota_model->addAnggota($data); //passing variable $data ke products_model

		redirect('anggota'); //redirect page ke halaman utama controller products
	}

	public function updateAnggota($nim)
	{
		//Function yang dipanggil ketika ingin melakukan update produk kemudian menampilkan update_product_view
		$data['anggota'] = $this->anggota_model->getAnggota($nim); //Melakukan pemanggilan fungsi getProduct yang ada di dalam products_model untuk mendapatkan informasi / data mengenai produk berdasarkan productId yang dikirimkan
        
        $this->load->view('update_anggota_view', $data); //menampilkan view 'update_product_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'product'
	}

	public function updateAnggotaDb()
	{
		//Function yang dipanggil ketika ingin melakukan update terhadap produk yang ada di dalam database
		$data = array(
					'nim' => $this->input->post('nim'), //Didapatkan dari form yang disubmit pada file update_product_view.php
					'nama' => $this->input->post('nama') //Didapatkan dari form yang disubmit pada file update_product_view.php
				);
        $condition['nim'] = $this->input->post('nim'); //Digunakan untuk melakukan validasi terhadap produk mana yang akan diupdate nantinya
        
		$this->anggota_model->updateAnggota($data, $condition); //passing variable $data ke products_model

		redirect('anggota'); //redirect page ke halaman utama controller products
	}

	public function deleteAnggotaDb($nim)
	{
		//Function yang dipanggil ketika ingin melakukan delete produk dari database
		$this->anggota_model->deleteAnggota($nim); //Memanggil fungsi deleteProduct yang ada pada model products_model dan mengirimkan parameter yaitu productId yang akan di delete
        
        redirect('anggota'); //redirect page ke halaman utama controller products
	}
}

/* Location: ./application/controllers/anggota.php */