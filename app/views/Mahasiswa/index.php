<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Halaman Mahasiswa</title>
  <link href="../../../public/css/output.css" rel="stylesheet" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
  </style>
</head>

<body class="font-[poppins]">
  <!-- sidebar -->
  <aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-[#132145]">
      <ul class="space-y-2 font-medium">
        <li>
          <div class="flex items-center justify-center text-4xl p-4 text-white rounded-lg ">
            <span class="ms-3 font-bold">ArchieveIT</span>
          </div>
        </li>
        <li>
          <a href="#" class="flex items-center p-2 mt-10 text-[#FEC01A] rounded-lg bg-[#3063C559]">
            <span class="flex-1 ms-3 whitespace-nowrap">Beranda</span>
          </a>
        </li>
        <li>
          <a href="formPrestasi.html" class="flex items-center p-2 text-white rounded-lg hover:bg-[#3063C559]">
            <span class="flex-1 ms-3 whitespace-nowrap">Form Prestasi</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-[#3063C559]">
            <span class="flex-1 ms-3 whitespace-nowrap">Prestasi Saya</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-[#3063C559]">
            <span class="flex-1 ms-3 whitespace-nowrap">Lihat Profil</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  <div class=" sm:ml-64 bg-blue-50">
    <!-- profil -->
    <section class="flex justify-end p-8">
      <p class="font-bold">Haikal Muhammad Rafli</p>
    </section>

    <!-- selamat datang -->
    <section class="flex-col justify-start p-6 space-y-4">
      <p class="font-bold text-4xl">Selamat Datang</p>
      <p class="font-semibold text-2xl text-[#F99D1C]">
        Haikal Muhammad Rafli / 2341720001
      </p>
    </section>

    <!-- prestasi -->
    <section class="flex justify-start p-6 space-x-10 ">
      <!-- total prestasi -->
      <div class="bg-white p-4 rounded-lg shadow-lg border w-1/4">
        <div class="flex justify-start">
          <!-- gambar disini -->
          <div class="flex-col">
            <p class="font-semibold text-[#757575] text-[12px]">Total Prestasi Saat Ini</p>
            <p class="font-bold">11</p>
          </div>
        </div>
      </div>

      <!-- total poin -->
      <div class="bg-white p-4 rounded-lg shadow-lg border w-1/4">
        <div class="flex justify-start">
          <!-- gambar disini -->
          <div class="flex-col">
            <p class="font-semibold text-[#757575] text-[12px]">Total Poin Saat Ini</p>
            <p class="font-bold">24</p>
          </div>
        </div>
      </div>

      <!-- peringkat mapres -->
      <div class="bg-white p-4 rounded-lg shadow-lg border w-1/4">
        <div class="flex justify-start">
          <!-- gambar disini -->
          <div class="flex-col">
            <p class="font-semibold text-[#757575] text-[12px]">Peringkat MaPres</p>
            <p class="font-bold">24</p>
          </div>
        </div>
      </div>
    </section>

    <!-- btn tambah prestasi -->
    <section class="p-6">
      <a href="#">
        <button class="bg-[#132145] rounded-lg text-white p-2 font-semibold">Tambahkan Prestasi</button>
      </a>
    </section>

    <section class="p-6 justify-start">
      <h1 class="text-4xl font-bold ">Daftar Mahasiswa Berprestasi</h1>
    </section>

    <!-- table maPres -->
    <?php include __DIR__ . '/../../components/DaftarMahasiswaBerprestasi.php'; ?>

    <!-- footer -->
    <?php include __DIR__ . '/../../components/Footer.php'; ?>
  </div>


</body>

</html>