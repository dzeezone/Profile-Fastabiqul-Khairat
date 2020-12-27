<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Responsive</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style-css.css">
</head>
<body>

	<div class="container">

		<div class="header">
			<img src="Logo.png" width="100" alt="">
			<h1>
			Al-Banjari Fastabiqul Khairat
			</h1>
			<strong>Ds.BalongWono</strong>
		</div>

		<div class="main">
			
			<div class="left">
				<h3>Akses</h3>	
				<p>
				<script type="text/javascript">
				var hari_ini = new Date()
				var tahun = hari_ini.getFullYear()
				var bulan = hari_ini.getMonth()+1
				var tanggal = hari_ini.getDate()
				var hari = hari_ini.getDay()
				document.write("Tanggal hari ini: ")
				document.write(tanggal+"-"+bulan+"-"+tahun)
				</script>
				</p>
			</div>
			
			<!-- left -->

			<div class="midle">
				<h3>Profile</h3>
				<p><strong>Pengenalan</a></strong> - Fastabiqul Khairat atau di singkat (FK) adalah Grub Al-banjari yang terdiri dari sekumpulan pemuda pemudi dari Ds.BalongWono dan sekitarnya, grub ini didirikan pada tahun 2017, tujuan dari didirikannya grub ini untuk memperkenalkan lantunan sholawat, yang di tujukan kepada anak" maupun orang dewasa, dan yang paling penting yaitu mendapat syafa'at dari nabi besar Muhammad SAW. Al-banjari ini dimainkan dari beberapa orang, yaitu dari 5 vokal dan 5 penabuh, alur Al-banjari ini ketika vokal menyanyi mereka di iringi dengan tabuhan(musik). Berikut foto" dari grub Al-banjari Fastabiqul Khairat :</p>
					<div class="head">
						<div class="frame-slider">
							<img src="P-K-1.jpg" class="mySlides fade">
							<img src="P-K-2.jpg" class="mySlides fade">
							<img src="P-K-3.jpg" class="mySlides fade">
							<img src="P-K-4.jpg" class="mySlides fade">
							<img src="P-K-5.jpg" class="mySlides fade">
							<img src="P-K-6.jpeg" class="mySlides fade">
							<img src="P-K-7.jpeg" class="mySlides fade">
							<img src="P-K-8.jpeg" class="mySlides fade">
							<img src="P-K-9.jpeg" class="mySlides fade">
							<img src="P-K-10.jpeg" class="mySlides fade">
							<img src="P-K-11.jpeg" class="mySlides fade">
							<img src="P-K-12.jpeg" class="mySlides fade">
							<img src="P-K-13.jpeg" class="mySlides fade">
						</div>
					</div>
				<p>Pentingkah Arti logo?</b>Logo ini mempunyai arti : kita grub Al-banjari berdiri di lingkup masjid yang di dasarkan dengan bintang songo(9) yang kita namai dengan Fastabiqul Khairat, di dalam kitab Al-Qur'an kalimat fastabiqul khairat mempunyai arti : Berlomba-lomba dalam kebaikan, Gambar 1: BackGround bewarna hitam (lingkungan yang awalnya suram), Gambar 2: Kubah Masjid dan Menaranya (kita bertempat di masjid dan mempunyai ambisi yang tinggi seperti menara itu), Gambar 3: Bintang songo(Nahdlatul Ulama), Gambar 4: Kaligrafi di dalam masjid(di dalam masjid tersebut terdapat grub Al-banjari yang bernama Fastabiqul Khairat), Gambar 5: Garis lurus di bawah lambang(Kita berjalan lurus di jalan kebenaran).</p>
				<p><img src="BackUp1.png" alt=""></p>
			</div>
			<!-- midle -->

			<div class="right">
				<h3>Pembuat</h3>
				<p><strong>DzeeZone</strong>/<strong>Dzee_xs</strong>/<strong>WebProgramIT</strong> adalah Istilah nama seseorang untuk pembuat WebSite, Terdiri dari WebSite School, WebSite Organisasi, WebSite UjianOnline Sekolah, WebSite OnlineShop seperti TokoPedia Shopee BukaLapak, dan WebSite Adminstrasi Desa/Sekolah dll.</p>
				<h3>Artikel Lain</h3>
				<p>
					<ul>
						<li><a href="#">Lagu-Lagu Banjari itu apa saja sih?</a></li>
						<li><a href="#">Rumus-Rumus Ketukan nya gimana sih?</a></li>
					</ul>
				</p>
			</div>
			<!-- right -->
		</div>
		<!-- main -->

		<div class="footer">
			<h4>Footer</h4>
			<p>Copyright &copy; 2020 WebProgramIT by:DzeeZone</p>
		</div>
		<!-- footer -->

	</div>

	<!--  -->
	<script>
	// Carousel
    var slideIndex = 0;
    showSlides();

	function showSlides() {
	var i;
	var slides = document.getElementsByClassName("mySlides");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		slideIndex++;
		if (slideIndex > slides.length) {
			slideIndex = 1;
		}
		slides[slideIndex - 1].style.display = "block";
		setTimeout(showSlides, 3000);
		}
	  
	//   Alert
	alert("Lanjut klik 'OK' guys")
    </script>
</body>
</html>