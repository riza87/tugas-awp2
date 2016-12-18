<?php Header('Content-type: text/xml');
header("Access-Control-Allow-Origin: *"); 
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<xml>
<?php
 $koneksi = mysqli_connect("localhost","root","","db_ktp") 
        or die("Error ".mysqli_error($koneksi));
//Mengambil data pada table dari database MySQL
    $sql = "SELECT * FROM ktp";
    $result = mysqli_query($koneksi, $sql) 
        or die("Error in Selecting " . mysqli_error($koneksi));
    //Membuat array
    $ktp = array();
    while($row = mysqli_fetch_assoc($result))
    {
?>
	<ktp>
	  <nama><?php echo $row['nama']; ?></nama>
	  <ttl><?php echo $row['ttl']; ?></ttl>
	  <jenis_kelamin><?php echo $row['jns_kelamin']; ?></jenis_kelamin>
	  <alamat><?php echo $row['alamat']; ?></alamat>
	  <RT_Rw><?php echo $row['rt/rw']; ?></RT_Rw>
	  <kel_Desa><?php echo $row['kel/desa']; ?></kel_Desa>
	</ktp>
<?php
    }
?>
</xml>
