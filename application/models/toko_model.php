<?php
class Toko_model extends CI_Model
{
	function simpan_barang()
	{
		$nama_buku = $_POST['nama_buku'];
		$harga_buku = $_POST['harga_buku'];
		$jumlah = $_POST['jumlah'];
		$total = ((int)$harga_buku * (int)$jumlah);

		//

		$simpan = $this->db->insert('tb_kasir', [
			'nama_buku' => $nama_buku,
			'harga_buku' => $harga_buku,
			'jumlah' => $jumlah,
			'total' => $total
		]);
		return $simpan;
	}
	function get_user_last()
	{
		$query = $this->db->query("SELECT * FROM tb_kasir ORDER BY id_buku DESC LIMIT 1");
		return $query->result();
	}
	function get_user_all()
	{
		$query = $this->db->query("SELECT * FROM tb_kasir ORDER BY id_buku ASC");
		return $query->result();
	}
	function delete_user($where, $nama_buku)
	{
		$query = $this->db->query("delete from user where nama_buku='$nama_buku'");
		$this->db->where($where);
		$this->db->delete($nama_buku);
	}
}
