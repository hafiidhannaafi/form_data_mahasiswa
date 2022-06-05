<html>
    <head>
        <title>Data Mahasiswa</title>
        <link rel="stylesheet" type="text/css" href="stylemahasiswa.css">
    </head>
    <body>
    <style type="text/css">
    body {
    background: url(b.jpg) no-repeat fixed;
   -webkit-background-size: 100% 100%;
   -moz-background-size: 100% 100%;
   -o-background-size: 100% 100%;
   background-size: 100% 100%;
    }
    </style>
     <h2>FORMULIR DATA MAHASISWA</h2>
<?php
require ('classForm.php');
require ('proses.php');


    $formMhs = new Form("", "Input Mahasiswa");
    $formMhs-> addField("nim","Nomor Induk Mahasiswa",);
    $formMhs-> addField("nama","Nama Mahasiswa");
    $formMhs-> addPassword("password","Password");
    $formMhs-> addDate("ttl","Tanggal Lahir");

    $formMhs-> addRadio("jeniskelamin","Jenis Kelamin", "radio",array(
        array("indeks" => 0,"value" => "Pria"),
        array("indeks" => 1,"value" => "Wanita")));

    $formMhs-> addSelect("prodi","prodi", "select",array(
        array('indeks' => 'Teknik Informatika','value' => 'Teknik Informatika'),
        array('indeks' => 'Teknik Sipil','value' => 'Teknik Sipil'),
        array('indeks' => 'Teknik Arsitektur','value' => 'Teknik Arsitektur'),
        array('indeks' => 'Teknik Industri','value' => 'Teknik Industri'),
        array('indeks' => 'Teknik Mesin','value' => 'Teknik Mesin')),
        array('indeks' => 'selected'));
    

    $formMhs-> addCheckbox("Kewarganegaraan","Kewarganegaraan", "checkbox",array(
            array("indeks" => 0,"value" => "WNI")));
    $formMhs-> addTextarea("ket","Keterangan");
    
    if(isset($_POST['submit']))
	{
	$formMhs->getForm();
		$data['nim']=$_POST['nim'];	
        $data['nama']=$_POST['nama'];
        $data['password']=$_POST['password'];
        $data['ttl']=$_POST['ttl'];
        $data['jeniskelamin']=$_POST['jeniskelamin'];
        $data['prodi']=$_POST['prodi'];
        $data['ket']=$_POST['ket'];

        if(isset($_POST['Kewarganegaraan'])){
            $data['Kewarganegaraan'] = $_POST['Kewarganegaraan']; 
        }else {
            $data['Kewarganegaraan'] = "WNA";
        } 
 
        

	$tambahdata=new proses(); 
    $tambahdata->add_data($data);
    cetakdata();
	}
	else
	{
	$data=$formMhs->displayForm();
	}

    function cetakdata (){
        include "database.php";
        echo
        "
            <h2>DATA MAHASISWA</h2>
            <a href='inputanmhs.php'>Input Data</a>
            <table border='1'>
            <tr>
                <th>NIM</th>
                <th>Nama Lengkap</th>
				<th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
				<th>Prodi</th>
				<th>Kewarganegaraan</th>
				<th>Status</th>
				<th>Keterangan</th>
            </tr>
        ";

        $query=mysqli_query($koneksi, "SELECT * from datamahasiswa");
        while($z = mysqli_fetch_array($query)){
            echo"<tr>";
            echo"<td>".$z['NIM']."</td>";
            echo"<td>".$z['nama']."</td>";
			echo"<td>".$z['ttl']."</td>";
			echo"<td>".$z['jeniskelamin']."</td>";
			echo"<td>".$z['prodi']."</td>";
			echo"<td>".$z['kewarganegaraan']."</td>";
			echo"<td>".$z['status']."</td>";
			echo"<td>".$z['ket']."</td>";
            echo "</tr>";
        }
    
	}
 

?>

</form>
    </body>
</html>
