<?php
class Toko_controller extends CI_Controller
{

	function toko()
	{
		$data['judul'] = 'Entry Data Barang';
		$this->load->view('Toko', $data);
	}
	public function simpan()
	{
		$this->load->model('toko_model');
		$this->toko_model->simpan_barang();
		return redirect('Toko_controller/view');
	}
	function view()
	{
		$data['judul'] = 'Menampilkan Data';
		$data['daftar_user'] = $this->toko_model->get_user_last();
		$this->load->view('view', $data);
	}
	function user()
	{
		$data['judul'] = 'Menampilkan Data pembeli';
		$data['daftar_user'] = $this->toko_model->get_user_all();
		$this->load->view('notivikasi', $data);
	}
	function delete_user($id)
	{
		$this->db->query("DELETE FROM `tb_kasir` WHERE `tb_kasir`.`id_buku` = '$id'");
		redirect('Toko_controller/user');
	}
}
