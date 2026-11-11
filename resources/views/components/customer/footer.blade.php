<footer class="bg-[#006B5F] text-white">
    <div class="max-w-7xl mx-auto px-6 py-16">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 lg:gap-16">

            <!-- KOLOM 1: LOGO DAN SLOGAN -->
            <div>
                <div class="flex items-center gap-5">
                    <!-- LOGO DALAM LINGKARAN -->
                    <div class="w-32 h-32 rounded-full bg-white flex items-center justify-center shrink-0 p-4">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo Argopuro Walida"
                            class="w-full h-full object-contain">
                    </div>


                    <!-- NAMA PERUSAHAAN -->
                    <h2 class="text-3xl md:text-4xl font-extrabold leading-none">
                        ARGOPURO<br>
                        WALIDA
                    </h2>

                </div>

                <p class="text-white text-lg leading-relaxed mt-7 max-w-sm">
                    Kepuasan pelanggan adalah tujuan utama kami.
                </p>
            </div>


            <!-- KOLOM 2: KONTAK KAMI -->
            <div>
                <h3 class="text-2xl md:text-3xl font-bold mb-8">
                    Kontak Kami
                </h3>

                <div class="space-y-8">

                    <!-- ALAMAT -->
                    <div class="flex items-start gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z" />
                            <circle cx="12" cy="10" r="2.5" />
                        </svg>

                        <p class="text-base leading-relaxed">
                            Jalan Argopuro No. 11,<br>
                            Desa Tlogosari, Sumbermalang,<br>
                            Situbondo, Jawa Timur.
                        </p>
                    </div>

                    <!-- WHATSAPP -->
                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M21 11.5a8.4 8.4 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.4 8.4 0 0 1-3.8-.9L3 21l1.9-5.7a8.4 8.4 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.4 8.4 0 0 1 3.8-.9h.5a8.5 8.5 0 0 1 8 8v.5Z" />
                            <path d="M9 9a5 5 0 0 0 6 6l1-1-2-2-1 1a4 4 0 0 1-2-2l1-1-2-2-1 1Z" />
                        </svg>

                        <p class="text-base">
                            WhatsApp Argopuro Walida
                        </p>
                    </div>

                    <!-- EMAIL -->
                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="5" width="18" height="14" rx="2" />
                            <path d="m3 7 9 6 9-6" />
                        </svg>

                        <p class="text-base">
                            Email Argopuro Walida
                        </p>
                    </div>

                </div>
            </div>


            <!-- KOLOM 3: SOSIAL MEDIA DAN PEMBAYARAN -->
            <div>

                <!-- SOSIAL MEDIA -->
                <div>
                    <h3 class="text-2xl md:text-3xl font-bold mb-8">
                        Sosial Media
                    </h3>

                    <div class="flex items-center gap-5">

                        <!-- FACEBOOK -->
                        <a href="#" aria-label="Facebook" class="hover:opacity-70 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M24 12a12 12 0 1 0-13.875 11.85v-8.39H7.08V12h3.045V9.37c0-3.006 1.79-4.667 4.53-4.667 1.312 0 2.686.234 2.686.234v2.953h-1.513c-1.49 0-1.955.925-1.955 1.874V12h3.328l-.532 3.46h-2.796v8.39A12.003 12.003 0 0 0 24 12" />
                            </svg>
                        </a>

                        <!-- INSTAGRAM -->
                        <a href="#" aria-label="Instagram" class="hover:opacity-70 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="5" />
                                <circle cx="12" cy="12" r="4" />
                                <circle cx="18" cy="6" r="1" fill="currentColor" />
                            </svg>
                        </a>

                        <!-- TIKTOK -->
                        <a href="#" aria-label="TikTok" class="hover:opacity-70 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M19.6 6.3a5.7 5.7 0 0 1-3.5-3.5A5.8 5.8 0 0 1 15.8 1h-4v14.1a2.5 2.5 0 1 1-2.5-2.5c.4 0 .8.1 1.1.2v-4.1a6.5 6.5 0 1 0 5.4 6.4V8a9.6 9.6 0 0 0 5.6 1.8V5.9c-.6.1-1.2.1-1.8.4Z" />
                            </svg>
                        </a>

                    </div>
                </div>


                <!-- PEMBAYARAN -->
                <div class="mt-12">
                    <h3 class="text-2xl md:text-3xl font-bold mb-8">
                        Pembayaran
                    </h3>

                    <div class="flex flex-wrap items-center gap-3">

                        <div class="bg-white text-[#006B5F] rounded-md px-4 py-2 font-bold text-sm">
                            VA
                        </div>

                        <div class="bg-white text-[#006B5F] rounded-md px-4 py-2 font-bold text-sm">
                            QRIS
                        </div>

                        <div class="bg-white text-[#006B5F] rounded-md px-4 py-2 font-bold text-sm">
                            E-Wallet
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</footer>