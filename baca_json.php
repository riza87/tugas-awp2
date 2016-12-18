<!DOCTYPE html>
<html>
	<head>
		<title>
			baca data json dari data encoding jorgi
		</title>
	</head>
	<body>
		<div id="demo"></div>
	</body>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script type="text/javascript">
			var source = "http://randiraju.pe.hu/Rubah%20ke%20json.php
			$.getJSON(source, function(data){
				$("#demo").append("<table border='1'>");
				$("#demo table").append("<tr><td>No.</td><td>Nama</td><td>Ttl</td><td>Nim</td><td>Angkatan</td><td>Jurusan</td><td>Alamat</td></tr>");
				$.each(data, function(i,id_mhs){
					$("#demo table").append(
						"<tr><td>" + (i + 1) + ". " + "</td><td>" + id_mhs.nama + "</td>" +
						"<td>" + id_mhs.nama +  "</td>" +
						"<td>" + id_mhs.alamat +  "</td>" +
						"<td>" + id_mhs.masa_kerja +  "</td>" +
						"<td>" + id_mhs.status +  "</td>" +
						"<td>" + id_mhs.jml_anak +  "</td></tr>"
					);
				});
				$("#demo").append("</table>");
			});
		</script>
</html>