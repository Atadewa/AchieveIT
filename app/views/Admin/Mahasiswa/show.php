	<!-- sidebar -->
	<aside id="default-sidebar"
		class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
		aria-label="Sidebar">
		<div class="h-full px-3 py-4 overflow-y-auto bg-[#132145]">
			<ul class="space-y-2 font-medium">
				<li>
					<div class="flex items-center justify-center text-4xl p-4 text-white rounded-lg">
						<span class="ms-3 font-bold">AchieveIT</span>
					</div>
				</li>
				<li>
					<a href="#" class="flex items-center p-2 mt-10 text-white rounded-lg hover:bg-[#3063C559]">
						<img src="../../../../public/img/Home_fill (1).png" alt="logo" class="w-5 h-5" />
						<span class="flex-1 ms-3 whitespace-nowrap">Beranda</span>
					</a>
				</li>
				<li>
					<a href="formPrestasi.html"
						class="flex items-center p-2 text-white rounded-lg hover:bg-[#3063C559]">
						<img src="../../../../public/img/File_dock_add_fill.png" alt="logo" class="w-5 h-5" />
						<span class="flex-1 ms-3 whitespace-nowrap">Form Prestasi</span>
					</a>
				</li>
				<li>
					<a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-[#3063C559]">
						<img src="../../../../public/img/File_dock_search_fill.png" alt="logo" class="w-5 h-5" />
						<span class="flex-1 ms-3 whitespace-nowrap">Daftar Prestasi</span>
					</a>
				</li>
				<li>
					<a href="#" class="flex items-center p-2 text-[#FEC01A] rounded-lg bg-[#3063C559]">
						<img src="../../../../public/img/Layers_fill.png" alt="logo" class="w-5 h-5" />
						<span class="flex-1 ms-3 whitespace-nowrap">Administrasi Data</span>
					</a>
				</li>
				<li>
					<a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-[#3063C559]">
						<img src="../../../../public/img/User_circle.png" alt="logo" class="w-5 h-5" />
						<span class="flex-1 ms-3 whitespace-nowrap">Lihat Profil</span>
					</a>
				</li>
			</ul>
		</div>
	</aside>

	<section class="sm:ml-64 bg-blue-50 min-h-screen">
		<!-- profil -->
		<section class="flex justify-end items-center p-8 space-x-3">
			<p class="font-bold">Admin12345</p>
			<img src="../../../../public/img/Logo_archhieveIT.png" alt="logo" class="w-8 h-auto" />
		</section>

		<!-- Detail Mahasiswa-->
		<section class="flex-col justify-start pl-6">
			<p class="font-bold text-3xl">Detail Mahasiswa</p>
		</section>

		<!-- informasi mahasiswa -->
		<section class="relative p-6">
			<!-- Static parent -->
			<div class="absolute ml-8 py-2 px-4 rounded-lg text-white bg-[#F99D1C]">
				Informasi Mahasiswa
			</div>
			<div class="static mt-5 p-6 bg-white border-2 rounded-lg border-[#FEC01A] space-y-2">
				<div class="flex flex-row justify-start items-start space-x-40">
					<div class="flex flex-col space-y-4">
						<div class="flex flex-col justify-start items-start pt-5">
							<p class="text-[#757575]">NIM</p>
							<p class="font-semibold">2341720001</p>
						</div>

						<div class="flex flex-col justify-start items-start pt-5">
							<p class="text-[#757575]">Nama Mahasiswa</p>
							<p class="font-semibold">HAIKAL MUHAMMAD RAFLI</p>
						</div>

						<div class="flex flex-col justify-start items-start pt-5">
							<p class="text-[#757575]">Program Studi</p>
							<p class="font-semibold">D-IV Teknik Informatika</p>
						</div>

						<div class="flex flex-col justify-start items-start pt-5">
							<p class="text-[#757575]">Total Poin</p>
							<p class="font-semibold">125</p>
						</div>
					</div>

					<div class="flex flex-col space-y-4">
						<div class="flex flex-col justify-start items-start pt-5">
							<p class="text-[#757575]">Tanggal Lahir</p>
							<p class="font-semibold">25-07-2004</p>
						</div>

						<div class="flex flex-col justify-start items-start pt-5">
							<p class="text-[#757575]">Tempat Lahir</p>
							<p class="font-semibold">Malang</p>
						</div>

						<div class="flex flex-col justify-start items-start pt-5">
							<p class="text-[#757575]">Agama</p>
							<p class="font-semibold">Islam</p>
						</div>

						<div class="flex flex-col justify-start items-start pt-5">
							<p class="text-[#757575]">Jenis Kelamin</p>
							<p class="font-semibold">Laki-laki</p>
						</div>
					</div>

					<div class="flex flex-col space-y-4">
						<div class="flex flex-col justify-start items-start pt-5">
							<p class="text-[#757575]">No Telepon</p>
							<p class="font-semibold">0812345678</p>
						</div>

						<div class="flex flex-col justify-start items-start pt-5">
							<p class="text-[#757575]">Email</p>
							<p class="font-semibold">haikalmura123@gmail.com</p>
						</div>

						<div class="flex flex-col justify-start items-start pt-5">
							<p class="text-[#757575]">Password</p>
							<p class="font-semibold">******</p>
						</div>
					</div>
				</div>

			</div>
		</section>

		<!-- btn -->
		<section class="justify-center p-6">
			<a href="<?=BASEURL;?>./">
				<button class="flex items-center space-x-2 py-2 px-6 text-white bg-[#132145] rounded-lg w-auto">
					<img src="../../../../public/img/Back.png" alt="logo" class="w-5 h-5" />
					<p>Kembali</p>
				</button>
			</a>
		</section>
	</section>

	<!-- footer -->
	<?php include __DIR__ . '/../../components/Footer.php'; ?>
</body>

</html>