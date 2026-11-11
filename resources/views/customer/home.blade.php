@extends('layouts.customer')

@section('content')


<!-- HERO SECTION -->
<section id="beranda" class="bg-white">
    <div class="max-w-7xl mx-auto px-6 py-12 md:py-16">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

            <!-- Logo -->
            <div class="flex justify-center items-center">
                <img src="{{ asset('img/logo.png') }}" alt="Logo Argopuro Walida" class="w-64 h-auto object-contain">
            </div>

            <!-- Informasi Perusahaan -->
            <div class="flex flex-col items-start">

                <h2 class="text-2xl font-semibold text-gray-900">
                    Selamat Datang di
                </h2>

                <h1
                    class="mt-2 bg-orange-600 text-white
                                                                                                                                                        text-2xl font-bold px-4 py-2 rounded-lg">
                    ARGOPURO WALIDA
                </h1>

                <p class="mt-5 text-gray-700 text-sm leading-relaxed">
                    Jelajahi Argopuro Walida: profil perusahaan kami,
                    lokasi operasional, visi-misi dan tata nilai yang
                    membedakan kami, struktur tim profesional kami,
                    testimoni produk dari pelanggan setia, hingga
                    rangkaian produk kopi premium kami.
                </p>

                <a href="#produk"
                    class="mt-8 bg-[#006B5F] text-white
                                                                                                                                                        px-12 py-3 text-sm font-semibold
                                                                                                                                                        hover:bg-[#005449] transition">
                    Shop
                </a>

            </div>

        </div>

    </div>
</section>

<!-- NAVBAR 2 -->
<div class="sticky top-[70px] z-40 bg-white shadow-sm border-y border-gray-300">
    <div class="w-full">
        <div class="grid grid-cols-6 w-full">

            <a href="#profil"
                class="flex items-center justify-center text-center px-3 py-5 text-sm font-medium text-gray-700 border-r border-gray-300 hover:bg-[#006B5F] hover:text-white transition">
                Sekilas Argopuro Walida
            </a>

            <a href="#lokasi"
                class="flex items-center justify-center text-center px-3 py-5 text-sm font-medium text-gray-700 border-r border-gray-300 hover:bg-[#006B5F] hover:text-white transition">
                Lokasi
            </a>

            <a href="#visi-misi"
                class="flex items-center justify-center text-center px-3 py-5 text-sm font-medium text-gray-700 border-r border-gray-300 hover:bg-[#006B5F] hover:text-white transition">
                Visi, Misi, dan Tata Nilai
            </a>

            <a href="#struktur"
                class="flex items-center justify-center text-center px-3 py-5 text-sm font-medium text-gray-700 border-r border-gray-300 hover:bg-[#006B5F] hover:text-white transition">
                Struktur Perusahaan
            </a>

            <a href="#review"
                class="flex items-center justify-center text-center px-3 py-5 text-sm font-medium text-gray-700 border-r border-gray-300 hover:bg-[#006B5F] hover:text-white transition">
                Review Produk
            </a>

            <a href="#produk"
                class="flex items-center justify-center text-center px-3 py-5 text-sm font-medium text-gray-700 hover:bg-[#006B5F] hover:text-white transition">
                Produk
            </a>

        </div>
    </div>
</div>

<!-- PROFIL PERUSAHAAN -->
<section id="profil">
    <div class="max-w-7xl mx-auto px-6 py-12 md:py-16">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

            <!-- Informasi Perusahaan -->
            <div class="flex flex-col items-start">

                <h2 class="text-2xl font-semibold text-gray-900">
                    Sekilas Argopuro Walida
                </h2>

                <p class="mt-5 text-gray-700 text-sm leading-relaxed">
                    Argopuro Walida merupakan sebuah badan usaha yang berada di bawah naungan Yayasan Walida, yang telah
                    berdiri sejak tahun 1999. Sementara itu, unit usaha kopinya sendiri mulai beroperasi sejak tahun
                    2015. Nama "WALIDA" merupakan singkatan dari "Wali Santri Sabda Rianada". Sistem usaha ini dirancang
                    untuk saling menguntungkan dan mendukung. Anak-anak dari para petani kopi mendapatkan kesempatan
                    untuk bersekolah secara gratis di lembaga pendidikan milik yayasan. Para ayah bekerja sebagai petani
                    kopi, sementara para ibu dilibatkan sebagai tenaga sortasi di pabrik kopi. Dengan begitu, seluruh
                    keluarga dapat berkontribusi sekaligus merasakan manfaat dari sistem ini. Sebanyak 20% dari
                    keuntungan penjualan kopi disalurkan kembali ke yayasan untuk mendukung operasional pendidikan
                    gratis. Hingga saat ini, Yayasan Walida mengelola enam lembaga pendidikan, mulai dari PAUD/TK, MI,
                    MTs, MA, SMK, hingga pondok pesantren
                </p>

            </div>

            <!-- Logo -->
            <div class="flex justify-center items-center">
                <img src="{{ asset('img/logo.png') }}" alt="Logo Argopuro Walida" class="w-64 h-auto object-contain">
            </div>

        </div>

    </div>
</section>

<!-- LOKASI -->
<section id="lokasi" class="bg-white py-20 scroll-mt-20">
    <div class="w-full px-6">

        <!-- Judul -->
        <h2 class="text-3xl md:text-4xl font-bold text-[#006B5F] text-center mb-10">
            Lokasi
        </h2>

        <!-- Google Maps -->
        <div class="w-full h-[450px] rounded-xl overflow-hidden border border-gray-300 shadow-sm">
            <iframe
                src="https://maps.google.com/maps?q=Jalan%20Argopuro%20No.%2011%2C%20Tlogosari%2C%20Sumbermalang%2C%20Situbondo%2C%20Jawa%20Timur&output=embed"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </div>
</section>



<!-- VISI, MISI, DAN NILAI-NILAI KAMI -->
<section id="visi-misi" class="bg-white py-20 scroll-mt-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- JUDUL -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-[#006B5F]">
                Visi, Misi, dan Nilai-Nilai Kami
            </h2>
        </div>

        <!-- VISI DAN MISI -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- VISI -->
            <div class="bg-[#F5F8F6] border border-gray-200 rounded-xl p-8">
                <h3 class="text-2xl font-bold text-[#006B5F] mb-5">
                    Visi
                </h3>

                <p class="text-gray-700 leading-relaxed text-justify">
                    Kami percaya bahwa kopi bukan sekadar minuman,
                    tetapi jembatan untuk meningkatkan kualitas hidup
                    masyarakat desa melalui pemberdayaan ekonomi
                    berbasis kopi.
                </p>
            </div>

            <!-- MISI -->
            <div class="bg-[#F5F8F6] border border-gray-200 rounded-xl p-8">
                <h3 class="text-2xl font-bold text-[#006B5F] mb-5">
                    Misi
                </h3>

                <h4 class="font-bold text-gray-700 mb-4">
                    Kami berkomitmen untuk:
                </h4>

                <ol class="list-decimal list-inside space-y-3 text-gray-700 leading-relaxed">
                    <li>
                        Mengembangkan usaha kopi dengan kualitas yang konsisten.
                    </li>
                    <li>
                        Memberdayakan warga lokal dalam setiap proses pengolahan kopi.
                    </li>
                    <li>
                        Menciptakan dampak positif bagi masyarakat sekitar.
                    </li>
                    <li>
                        Memperkenalkan keunggulan kopi Argopuro ke pasar internasional.
                    </li>
                </ol>
            </div>

        </div>

        <!-- NILAI-NILAI KAMI -->
        <div class="mt-8 bg-[#F5F8F6] border border-gray-200 rounded-xl p-8 md:p-12">

            <!-- JUDUL NILAI -->
            <div class="text-center mb-10">
                <h3 class="text-2xl md:text-3xl font-bold text-[#006B5F]">
                    Nilai-Nilai Kami
                </h3>

                <p class="text-gray-600 mt-3 font-semibold">
                    Di Argopuro Walida, kami menjunjung tinggi:
                </p>
            </div>

            <!-- DAFTAR NILAI -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- NILAI 1 -->
                <div>
                    <h4 class="font-bold text-[#006B5F] mb-3">
                        1. Keberlanjutan & Lingkungan
                    </h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Setiap proses produksi dirancang ramah lingkungan
                        untuk generasi mendatang.
                    </p>
                </div>

                <!-- NILAI 2 -->
                <div>
                    <h4 class="font-bold text-[#006B5F] mb-3">
                        2. Pemberdayaan Keluarga
                    </h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Melibatkan ayah sebagai petani, ibu sebagai tenaga
                        sortasi, dan anak mendapat pendidikan gratis.
                    </p>
                </div>

                <!-- NILAI 3 -->
                <div>
                    <h4 class="font-bold text-[#006B5F] mb-3">
                        3. Komitmen Kualitas
                    </h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Konsisten menghasilkan kopi premium berkelas
                        internasional.
                    </p>
                </div>

                <!-- NILAI 4 -->
                <div>
                    <h4 class="font-bold text-[#006B5F] mb-3">
                        4. Kepedulian Sosial
                    </h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        20% keuntungan dikembalikan untuk pendidikan
                        gratis melalui Yayasan Walida.
                    </p>
                </div>

                <!-- NILAI 5 -->
                <div>
                    <h4 class="font-bold text-[#006B5F] mb-3">
                        5. Kekeluargaan
                    </h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Membangun ekosistem yang saling mendukung
                        dan menguntungkan.
                    </p>
                </div>

                <!-- NILAI 6 -->
                <div>
                    <h4 class="font-bold text-[#006B5F] mb-3">
                        6. Keaslian Lokal
                    </h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Bangga menghadirkan cita rasa otentik kopi Argopuro.
                    </p>
                </div>

            </div>
        </div>

    </div>
</section>


<!-- REVIEW PELANGGAN -->
<section id="review" class="bg-white py-20 scroll-mt-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- JUDUL -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-[#006B5F]">
                Review Pelanggan
            </h2>

            <p class="text-gray-600 mt-4">
                Pengalaman dan ulasan pelanggan terhadap produk Argopuro Walida.
            </p>
        </div>

        <!-- DAFTAR REVIEW -->
        <div
            class="grid grid-flow-col auto-cols-[calc((100%-2rem)/3)] gap-4 overflow-x-auto pb-5 snap-x snap-mandatory">

            <!-- REVIEW 1 -->
            <div class="bg-[#F5F8F6] border border-gray-200 rounded-xl p-6 snap-start">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('img/Orang.jpg') }}" alt="Foto reviewer"
                        class="w-12 h-12 rounded-full object-cover">

                    <div>
                        <h4 class="font-bold text-gray-900">Andi Pratama</h4>
                        <p class="text-xs text-gray-500">Pelanggan</p>
                    </div>
                </div>

                <div class="mt-5 text-yellow-500">★ ★ ★ ★ ★</div>

                <p class="text-sm font-semibold text-[#006B5F] mt-4">
                    Produk: Kopi Arabika Green Bean
                </p>

                <p class="text-gray-600 text-sm leading-relaxed mt-3">
                    Produk memiliki kualitas yang sangat baik.
                    Biji kopi bersih dan sesuai dengan harapan.
                    Pengemasan juga rapi.
                </p>
            </div>

            <!-- REVIEW 2 -->
            <div class="bg-[#F5F8F6] border border-gray-200 rounded-xl p-6 snap-start">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('img/Orang.jpg') }}" alt="Foto reviewer"
                        class="w-12 h-12 rounded-full object-cover">

                    <div>
                        <h4 class="font-bold text-gray-900">Siti Rahma</h4>
                        <p class="text-xs text-gray-500">Pelanggan</p>
                    </div>
                </div>

                <div class="mt-5 text-yellow-500">★ ★ ★ ★ ★</div>

                <p class="text-sm font-semibold text-[#006B5F] mt-4">
                    Produk: Kopi Arabika Roasted Bean
                </p>

                <p class="text-gray-600 text-sm leading-relaxed mt-3">
                    Aroma kopi sangat menarik dengan cita rasa
                    yang khas. Produk diterima dalam kondisi baik
                    dan sesuai pesanan.
                </p>
            </div>

            <!-- REVIEW 3 -->
            <div class="bg-[#F5F8F6] border border-gray-200 rounded-xl p-6 snap-start">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('img/Orang.jpg') }}" alt="Foto reviewer"
                        class="w-12 h-12 rounded-full object-cover">

                    <div>
                        <h4 class="font-bold text-gray-900">Budi Santoso</h4>
                        <p class="text-xs text-gray-500">Pelanggan</p>
                    </div>
                </div>

                <div class="mt-5 text-yellow-500">★ ★ ★ ★ ★</div>

                <p class="text-sm font-semibold text-[#006B5F] mt-4">
                    Produk: Kopi Arabika Ground
                </p>

                <p class="text-gray-600 text-sm leading-relaxed mt-3">
                    Kopi memiliki rasa yang nikmat dan aroma
                    yang khas. Sangat cocok untuk dinikmati
                    setiap hari.
                </p>
            </div>

            <!-- REVIEW 4 -->
            <div class="bg-[#F5F8F6] border border-gray-200 rounded-xl p-6 snap-start">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('img/Orang.jpg') }}" alt="Foto reviewer"
                        class="w-12 h-12 rounded-full object-cover">

                    <div>
                        <h4 class="font-bold text-gray-900">Dewi Lestari</h4>
                        <p class="text-xs text-gray-500">Pelanggan</p>
                    </div>
                </div>

                <div class="mt-5 text-yellow-500">★ ★ ★ ★ ★</div>

                <p class="text-sm font-semibold text-[#006B5F] mt-4">
                    Produk: Cascara Tea
                </p>

                <p class="text-gray-600 text-sm leading-relaxed mt-3">
                    Produk memiliki karakter rasa yang unik.
                    Pengemasan baik dan produk sampai dengan aman.
                </p>
            </div>

            <!-- REVIEW 5 -->
            <div class="bg-[#F5F8F6] border border-gray-200 rounded-xl p-6 snap-start">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('img/Orang.jpg') }}" alt="Foto reviewer"
                        class="w-12 h-12 rounded-full object-cover">

                    <div>
                        <h4 class="font-bold text-gray-900">Rizky Maulana</h4>
                        <p class="text-xs text-gray-500">Pelanggan</p>
                    </div>
                </div>

                <div class="mt-5 text-yellow-500">★ ★ ★ ★ ★</div>

                <p class="text-sm font-semibold text-[#006B5F] mt-4">
                    Produk: Kopi Arabika Green Bean
                </p>

                <p class="text-gray-600 text-sm leading-relaxed mt-3">
                    Kualitas biji kopi bagus dan sesuai dengan
                    kebutuhan. Sangat puas dengan produknya.
                </p>
            </div>

            <!-- REVIEW 6 -->
            <div class="bg-[#F5F8F6] border border-gray-200 rounded-xl p-6 snap-start">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('img/Orang.jpg') }}" alt="Foto reviewer"
                        class="w-12 h-12 rounded-full object-cover">

                    <div>
                        <h4 class="font-bold text-gray-900">Putri Amelia</h4>
                        <p class="text-xs text-gray-500">Pelanggan</p>
                    </div>
                </div>

                <div class="mt-5 text-yellow-500">★ ★ ★ ★ ★</div>

                <p class="text-sm font-semibold text-[#006B5F] mt-4">
                    Produk: Kopi Arabika Roasted Bean
                </p>

                <p class="text-gray-600 text-sm leading-relaxed mt-3">
                    Aroma kopi terasa khas dan kualitasnya
                    memuaskan. Cocok untuk dijadikan kopi harian.
                </p>
            </div>

        </div>

        <!-- PETUNJUK SCROLL -->
        <p class="text-center text-xs text-gray-400 mt-3">
            Geser ke samping untuk melihat review lainnya →
        </p>

    </div>
</section>

<!-- PRODUCT SECTION -->
<section id="produk" class="bg-white py-20 scroll-mt-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- HEADER PRODUCT -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-10">

            <h2 class="text-4xl font-extrabold text-black">
                PRODUCT
            </h2>

            <div class="flex items-center gap-4">
                <a href="#"
                    class="bg-[#006B5F] text-white text-sm px-10 py-4 text-center hover:bg-[#005449] transition">
                    View Product
                </a>

                <a href="#" class="bg-black text-white text-sm px-10 py-4 text-center hover:bg-gray-800 transition">
                    How To Order
                </a>
            </div>

        </div>

        <!-- PRODUCT LIST -->
        <div
            class="grid grid-flow-col auto-cols-[80%] sm:auto-cols-[calc((100%-1rem)/2)] lg:auto-cols-[calc((100%-6rem)/4)] gap-8 overflow-x-auto pb-6 snap-x snap-mandatory scroll-smooth">

            <!-- PRODUCT 1 -->
            <div class="snap-start min-w-0">
                <img src="{{ asset('img/kopi.png') }}" alt="Kopi Arabika Green Bean"
                    class="w-full aspect-square object-cover rounded-[20px]">

                <div class="mt-4">
                    <h3 class="text-xl font-bold text-black">
                        Arabika Green Bean
                    </h3>

                    <div class="flex items-center gap-2 mt-2">
                        <span class="text-yellow-400 text-xl">★</span>
                        <span class="text-sm text-black">4.5</span>
                    </div>

                    <p class="text-sm text-gray-700 mt-1">
                        Green Bean
                    </p>
                </div>
            </div>

            <!-- PRODUCT 2 -->
            <div class="snap-start min-w-0">
                <img src="{{ asset('img/kopi.png') }}" alt="Kopi Arabika Roasted Bean"
                    class="w-full aspect-square object-cover rounded-[20px]">

                <div class="mt-4">
                    <h3 class="text-xl font-bold text-black">
                        Arabika Roasted Bean
                    </h3>

                    <div class="flex items-center gap-2 mt-2">
                        <span class="text-yellow-400 text-xl">★</span>
                        <span class="text-sm text-black">4.5</span>
                    </div>

                    <p class="text-sm text-gray-700 mt-1">
                        Roasted Bean
                    </p>
                </div>
            </div>

            <!-- PRODUCT 3 -->
            <div class="snap-start min-w-0">
                <img src="{{ asset('img/kopi.png') }}" alt="Kopi Arabika Ground"
                    class="w-full aspect-square object-cover rounded-[20px]">

                <div class="mt-4">
                    <h3 class="text-xl font-bold text-black">
                        Arabika Ground
                    </h3>

                    <div class="flex items-center gap-2 mt-2">
                        <span class="text-yellow-400 text-xl">★</span>
                        <span class="text-sm text-black">4.5</span>
                    </div>

                    <p class="text-sm text-gray-700 mt-1">
                        Ground Coffee
                    </p>
                </div>
            </div>

            <!-- PRODUCT 4 -->
            <div class="snap-start min-w-0">
                <img src="{{ asset('img/kopi.png') }}" alt="Cascara Tea"
                    class="w-full aspect-square object-cover rounded-[20px]">

                <div class="mt-4">
                    <h3 class="text-xl font-bold text-black">
                        Cascara Tea
                    </h3>

                    <div class="flex items-center gap-2 mt-2">
                        <span class="text-yellow-400 text-xl">★</span>
                        <span class="text-sm text-black">4.5</span>
                    </div>

                    <p class="text-sm text-gray-700 mt-1">
                        Cascara
                    </p>
                </div>
            </div>

            <!-- PRODUCT 5 -->
            <div class="snap-start min-w-0">
                <img src="{{ asset('img/kopi.png') }}" alt="Arabika Green Bean Premium"
                    class="w-full aspect-square object-cover rounded-[20px]">

                <div class="mt-4">
                    <h3 class="text-xl font-bold text-black">
                        Arabika Green Bean Premium
                    </h3>

                    <div class="flex items-center gap-2 mt-2">
                        <span class="text-yellow-400 text-xl">★</span>
                        <span class="text-sm text-black">4.5</span>
                    </div>

                    <p class="text-sm text-gray-700 mt-1">
                        Green Bean
                    </p>
                </div>
            </div>

            <!-- PRODUCT 6 -->
            <div class="snap-start min-w-0">
                <img src="{{ asset('img/kopi.png') }}" alt="Arabika Roasted Bean Premium"
                    class="w-full aspect-square object-cover rounded-[20px]">

                <div class="mt-4">
                    <h3 class="text-xl font-bold text-black">
                        Arabika Roasted Premium
                    </h3>

                    <div class="flex items-center gap-2 mt-2">
                        <span class="text-yellow-400 text-xl">★</span>
                        <span class="text-sm text-black">4.5</span>
                    </div>

                    <p class="text-sm text-gray-700 mt-1">
                        Roasted Bean
                    </p>
                </div>
            </div>

        </div>

        <!-- PETUNJUK SCROLL -->
        <p class="text-center text-xs text-gray-400 mt-2">
            Geser ke samping untuk melihat produk lainnya →
        </p>

    </div>
</section>


@endsection