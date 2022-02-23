<?php
	include 'koneksi.php';
	$kabupaten = $_POST['kabupaten'];

	echo "<option value=''>Pilih Kecamatan</option>";

	$query = "SELECT * FROM kecamatan WHERE kabupaten_id=? ORDER BY nama_kecamatan ASC";
	$dewan1 = $db1->prepare($query);
	$dewan1->bind_param("i", $kabupaten);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id'] . "'>" . $row['nama_kecamatan'] . "</option>";
	}
?>