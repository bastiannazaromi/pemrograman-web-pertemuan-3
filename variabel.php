<?php

// echo 'Selamat datang!';

$nama = 'Alex';
$umur = 17;

$a = 10;
$b = 2;

$c = $a * $b;

//echo 'Nama saya ' . $nama . ', umur saya ' . $umur . ' tahun.';

$nama2 = 'Budi';
$umur2 = 20;

// echo 'Nama saya ' . $nama2 . ', umur saya ' . $umur2 . ' tahun.';

// $user = array(

// );

$user = [
	0 => [
		'nama' => 'Alex',
		'umur' => 17
	],
	1 => [
		'nama' => 'Budi',
		'umur' => 20
	]
];

// echo json_encode($user);

// foreach ($user as $hasil) {
// 	echo '<br> Nama saya ' . $hasil['nama'] . ', umur saya ' . $hasil['umur'] . ' tahun.';
// }

foreach ($user as $hasil) {
	if ($hasil['nama'] == 'Alex') {
		echo 'Brebes';
	} elseif ($hasil['nama'] == 'Budi') {
		echo 'Tegal';
	}

	echo '<br>';
}
