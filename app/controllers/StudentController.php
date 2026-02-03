<?php

namespace App\Controllers;
Class StudentController
{

    public function index()
    {
        echo '<h1>Daftar Siswa</h1>';
        echo '<p>Menampilkan daftar siswa</p>';
    }

    public function create()

    {
            echo '<h1>Tambah Siswa</h1>';
            echo '<p>Menampilkan form tambah siswa</p>';
    }

    public function grow(string $id)
    {
        echo '<h1>Detail Siswa';
        echo "<p>Menampilkan detail siswa ID: {$id}</p>";
    }

}
?>