<?php

/**
 *
 * Tugas Array Multidimensi
 * Tampilkan isi dari array berikut menjadi sebuah tabel
 * 
*/

$kontakMhs = array(
	array(
		'nama' => 'Rizky',
		'jurusan' => 'Akuntansi',
		'kelas' => '08AK001',
		'alamat' => 'Jakarta Barat',
		'kontak' => [
			'no_hp' => '08131111111',
			'email' => 'rizky@gmail.com'
		]
	),
	array(
		'nama' => 'Zahra',
		'jurusan' => 'Sistem Informasi',
		'kelas' => '02SI006',
		'alamat' => 'Kota Tangerang Selatan',
		'kontak' => [
			'no_hp' => '08131111112',
			'email' => null
		]
	),
	array(
		'nama' => 'Ainun',
		'jurusan' => 'Teknik Informatika',
		'kelas' => '01TI002',
		'alamat' => 'Kota Serang',
		'kontak' => [
			'no_hp' => '08131111113',
			'email' => 'ainun@yahoo.com'
		]
	),
	array(
		'nama' => 'Habibi',
		'jurusan' => 'Teknik Informatika',
		'kelas' => '03TI003',
		'alamat' => 'Kota Tangerang',
		'kontak' => [
			'no_hp' => null,
			'email' => 'habibi@tutanota.com'
		]
	),
	array(
		'nama' => 'Siregar',
		'jurusan' => 'Hukum',
		'kelas' => '02HK001',
		'alamat' => 'Kota Tangerang',
		'kontak' => [
			'no_hp' => '081214211335',
			'email' => 'siregar@gmail.com'
		]
	),
	array(
		'nama' => 'Asiyah',
		'jurusan' => 'Pendidikan Agama Islam',
		'kelas' => '01PAI001',
		'alamat' => 'Kota Tangerang',
		'kontak' => [
			'no_hp' => '089673487340',
			'email' => 'asiyah12@gmail.com'
		]
	)
);

// 1. Tampilkan data kontak Ainun
// 2. Buatlah tabel pertama berisi kontak Mahasiswa Lengkap
// 3. Buatlah tabel kedua yang menampilkan kontak mahasiswa jurusan TI saja
// 4. Buatlah tabel ketiga yang menampilkan kontak mahasiswa beralamat di kota tangerang