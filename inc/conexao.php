<?php

$conn = mysqli_connect('localhost', 'guilherme', 'adb55kts','sweet-store');

if(mysqli_connect_errno()){
	echo "Deu Ruim".mysqli_connect_error();
}else{
	//echo "Connection established";
}

?>