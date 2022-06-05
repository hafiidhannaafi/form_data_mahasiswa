<?php

Class proses{
public $nama;
public $nim;
public $password;
public $ttl;
public $jeniskelamin;
public $prodi;
public $kewarganegaraan;
public $keterangan;


function add_data($data)
{
		require('database.php');
		if(isset($_POST['submit'])){
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$password = $_POST['password'];
            $ttl = $_POST['ttl'];
            $jeniskelamin = $_POST['jeniskelamin'];
            $prodi = $_POST['prodi'];
			$status = "Aktif";
            $ket = $_POST['ket'];
			if(isset($_POST['kewarganegaraan'])){
                $kewarganegaraan = $_POST['kewarganegaraan'];
            }else {
                $kewarganegaraan = "WNA";
            }
			
			
			$sql="INSERT INTO datamahasiswa (NIM, nama, password, ttl, jeniskelamin, prodi, kewarganegaraan, status, ket)
					VALUES ('$nim','$nama','$password','$ttl','$jeniskelamin','$prodi','$kewarganegaraan','$status','$ket')";
			$query=mysqli_query ($koneksi, $sql);
			if($query==1)
				{echo "<script>window.alert('Tambah Data Ke Database?');
					window.location('inputanmhs.php')</script>";
				}
			if($query==1)
				{echo "<center>Data Berhasil Diinput Ke Database</center>";
                    
                    "<script> window.location('inputanmhs.php') </script>";
				}
				else
				{echo"<center>Data Gagal Diinput Ke Database</center></br>";}
		}





		
}
}