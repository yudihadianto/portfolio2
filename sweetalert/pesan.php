<?php 

function tambahPesan($data){
	
	$nama = htmlspecialchars($data[" ama"]);
	$email = htmlspecialchars($data["email"]);
	$subject = htmlspecialchars($data["subject"]);
	$pesan = htmlspecialchars($data["pesan"]);

 ?>