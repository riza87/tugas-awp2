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
			var source = "http://randiraju.pe.hu/rubah%20ke%20XML%202.php";
			$.ajax({
				url : source,
				method : 'GET',
				success : function(xml){
						$("#demo").append("<table border='1'>");
						$("#demo table").append("<thead><tr><td>No.</td><td>nama</td><td>Ttl</td><td>nim</td><td>angkatan</td><td>jurusan</td><td>alamat</td></tr></thead><tbody></tbody>");
						$(xml).find('tbkaryawan').each(function(i){
							var row = $(this);
							$("#demo table tbody").append(
								"<tr><td>"+(i+1)+"</td><td>" + row.find('nama').text() + "</td>" +
								"<td>" + row.find('ttl').text() +  "</td>" +
								"<td>" + row.find('nim').text() +  "</td>" +
								"<td>" + row.find('angkatan').text() +  "</td>" +
								"<td>" + row.find('jurusan').text() +  "</td>" +
								"<td>" + row.find('alamat').text() +  "</td></tr>"
							);
						});
						$("#demo").append("</table>");
				},
				error : function(data){
					alert(data);
				}
			});
		</script>
</html>