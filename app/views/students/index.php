<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">

<body class="flex flex-col min-h-screen bg-gray-100">
<header class="bg-blue-400 text-white shadow">
    <div class="flex items-center justify-between container mx-auto py-4">
    <a class="font-bold" href="/students">sistem-sekolah</a>
    <a class="py-2 px-4 bg-white text-blue-500 rounded-lg" href="/students/create">+ Tambah Siswa</a>
    </div>
</header>
<main class="grow container mx-auto">
    <div class="mt-8">
    <div class="bg-white shadow p-4 rounded-lg">
        <h1 class="font-bold text-2xl">
            Daftar Siswa
        </h1>
        <p>
            Menampilkan daftar siswa
        </p>
    </div>
    <div class="bg-white rounded-lg shadow">
        <table>
            <thead class="bg-gray-200">
                <tr>
                    <th class="text-left py-3 px-4">No</th>
                    <th class="text-left py-3 px-4">Nama</th>
                    <th class="text-left py-3 px-4">Kelas</th>
                    <th class="text-left py-3 px-4">NIS</th>
                    <th class="text-left py-3 px-4">No Telpon</th>
                    <th class="text-left py-3 px-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-3 px-4">1</td>
                    <td class="py-3 px-4">Andi</td>
                    <td class="py-3 px-4">XI TKJ 1</td>
                    <td class="py-3 px-4">1234</td>
                    <td class="py-3 px-4">0812 3456 7890</td>
                    <td class="py-3 px-4">
                        <div class="flex justify-center item-center">
                            <a href="" class="text-green-500">Detail</a>
                            <a href="" class="text-yellow-500">Edit</a>
                            <a href="" class="text-red-500">Hapus</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</main>
<footer class="bg-gray-600 text-white p-4 text-center">
    2026 - SMK Kristen Immanuel Pontianak - Sistem Sekolah 
</footer>
</body>

</html>