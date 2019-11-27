<?php 
class Kategori extends Database{
	//Menampilkan Semua Data
	public function index(){
		$datakategori=mysqli_query(
			$this->koneksi,
			"select*from kategori"
			);
		return $datakategori;
	}
	//menambah Data
	public function create($nama,$slug)
	{
		mysqli_query(
			$this->koneksi,
			"insert into kategori values(null,'$nama','$slug')");
	}
	//Menampilkan Data Berdasarkan Id
	public function show($id)
	{
		$datakategori=mysqli_query(
			$this->koneksi,
			"select*from kategori where id='$id'");
		return $datakategori
	}
	//Menampilkan Data Berdasrkan id
	public function edit($id)
	{
		$datakategori=mysqli_query(
			$this->koneksi,
			"select*from kategori where id='$id'");
		return $datakategori
	}
	//Mengupdate Data Berdasarkan id
	public function update($id,$nama,$slug)
	{
		mysqli_query(
			$this->koneksi,
			"update kategori set nama='$nama',slug='$slug' where id='$id'");
	}
	//Menghapus Data Berdasarkan id
	public function delete($id)
	{
		mysqli_query($this->koneksi, "delete from kategori where id='$id'");
	}
}
 ?>

