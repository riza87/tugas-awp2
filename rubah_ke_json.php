    <?php 
	header("Access-Control-Allow-Origin: *");
    //Koneksi database MySQL
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
      $ktp[] = $row;
    }
    //Menampilkan konversi data pada tabel identitas ke format JSON
    echo json_encode($ktp);
	
    //close the db connection
    mysqli_close($koneksi);
    ?>
