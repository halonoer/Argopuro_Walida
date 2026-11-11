<nav class="sticky top-0 bg-[#174D3A] text-white">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between gap-6">

        <!-- Logo dan nama perusahaan -->
        <a href="/" class="flex items-center gap-3 shrink-0">
            <div>
                <h1 class="font-bold text-lg leading-tight">
                    ARGOPURO WALIDA
                </h1>
                <p class="text-xs text-green-100">
                    Store
                </p>
            </div>
        </a>

        <!-- Menu navigasi -->
        <div class="flex items-center gap-8 text-sm font-medium">
            <a href="#" class="hover:text-green-200 transition">Shop</a>
            <a href="#" class="hover:text-green-200 transition">FAQ</a>
            <a href="#" class="hover:text-green-200 transition">Contact Us</a>
        </div>

        <!-- Pencarian dan akun -->
        <div class="flex items-center gap-4">

            <!-- Search -->
            <div class="w-80 shrink-0">
                <div class="flex items-center bg-white rounded-full px-4 py-2 w-full">
                    <input type="text" placeholder="Search products..."
                        class="w-full text-sm text-gray-700 outline-none">

                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="#006B5F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="shrink-0">
                        <circle cx="11" cy="11" r="8" />
                        <path d="m21 21-4.35-4.35" />
                    </svg>
                </div>
            </div>

            <a href="#" class="text-xl hover:text-green-200 " title="Keranjang">
                <a href="#" title="Keranjang Belanja" class="hover:text-green-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="9" cy="21" r="1" />
                        <circle cx="20" cy="21" r="1" />
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                    </svg>
                </a>
            </a>

            <a href="#" class="text-xl hover:text-green-200" title="Akun">
                <a href="#" title="Profil Pengguna"
                    class="flex items-center justify-center hover:opacity-80 transition">

                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">

                        <circle cx="12" cy="12" r="10.5" />
                        <circle cx="12" cy="9" r="3.2" />
                        <path d="M5.5 19a7 7 0 0 1 13 0" />

                    </svg>
                </a>
            </a>

            <!-- Pilihan Bahasa -->

            <div class="relative" id="language-dropdown">

                <!-- Tombol Bahasa -->
                <button type="button" onclick="toggleLanguageDropdown()"
                    class="flex items-center gap-2 bg-white text-[#006B5F] rounded-full px-3 py-2 text-sm font-medium hover:bg-gray-100 transition">

                    <span id="selected-language">ID</span>

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <!-- Menu Dropdown -->
                <div id="language-menu"
                    class="hidden absolute right-0 top-full mt-2 w-28 bg-white rounded-lg shadow-lg border border-gray-200 overflow-hidden z-50">

                    <button onclick="changeLanguage('ID')"
                        class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-green-50 hover:text-[#006B5F]">
                        🇮🇩 Indonesia
                    </button>

                    <button onclick="changeLanguage('ENG')"
                        class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-green-50 hover:text-[#006B5F]">
                        🇬🇧 English
                    </button>

                </div>
            </div>

        </div>
    </div>
</nav>


<script>
    function toggleLanguageDropdown() {
        document.getElementById('language-menu')
            .classList.toggle('hidden');
    }

    function changeLanguage(language) {
        document.getElementById('selected-language').textContent = language;

        document.getElementById('language-menu')
            .classList.add('hidden');
    }
</script>