<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="/css/output.css">

<body class="flex flex-col min-h-screen bg-gray-100">
    <header class="bg-blue-400 text-white shadow">
        <div class="flex items-center justify-between container mx-auto py-4">
            <a class="font-bold" href="/students">sistem-sekolah</a>
            <a class="py-2 px-4 bg-white text-blue-500 rounded-lg" href="/students/create">+ Tambah Siswa</a>
        </div>
    </header>
    <main class="grow container mx-auto">
        <div class="mt-8 space-y-4">
            <div class="bg-white shadow p-4 rounded-lg">
                <h1 class="font-bold text-2xl">
                    Edit Siswa
                </h1>
                <p>
                    Melakukan perubahan data siswa yang terdaftar
                </p>
            </div>
            <div class="bg-white rounded-lg shadow">
                <form action="" class="p-4">
                    <div class="mb-5">
                        <label for="name" class="font-bold block text-gray-700  mb-2">Nama</label>
                        <input type="text" id="name" name="name" placeholder="Masukkan nama"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:border-blue-500">
                    </div>
                    <div class="mb-5">
                        <label for="class" class="block text-gray-700 font-bold mb-2">Kelas</label>
                        <input type="text" id="class" name="class" placeholder="Masukkan kelas"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:border-blue-500">
                    </div>
                    <div class="mb-5">
                        <label for="nis" class="block text-gray-700 font-bold mb-2">NIS</label>
                        <input type="text" id="nis" name="nis" placeholder="Masukkan NIS"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:border-blue-500">
                    </div>
                    <div class="mb-5">
                        <label for="no_telpon" class="block text-gray-700 font-bold mb-2">No Telpon</label>
                        <input type="text" id="no_telpon" name="no_telpon" placeholder="Masukkan no telpon"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:border-blue-500">
                    </div>
                    <div class="mb-6">
                        <label for="address" class="block text-gray-700 font-bold mb-2">Alamat</label>
                        <textarea id="address" name="address" placeholder="Masukkan alamat"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:border-blue-500"></textarea>
                    </div>
                    <div class="flex justify-end items-center gap-4">
                        <a href="/students" class="px-4 py-2 rounded-lg bg-gray-100 text-blue-500 hover:underline">Kembali</a>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="bg-gray-900 text-white p-4 text-center">
        2026 - SMK Kristen Immanuel Pontianak - Sistem Sekolah
    </footer>
</body>

</html>