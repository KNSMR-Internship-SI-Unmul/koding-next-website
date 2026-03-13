<nav class="bg-white text-black shadow-md font-sans sticky top-0 z-50">
    <div class="container mx-auto px-12 py-6 flex items-center justify-center">

        <a href="/" class="absolute left-6 px-12 py-8">
            <img src="{{ asset('images/logo-kn.png') }}"
                alt="Koding Next Logo"
                class="h-10 w-auto">
        </a>

        <div class="space-x-8 hidden md:flex font-medium items-center">

            <a href="/" class="{{ request()->is('/') ? 'text-text-pink-600 font-semibold' : 'hover:text-text-pink-500' }}">
                Beranda
            </a>

            <div class="relative group">

                <a href="/kursus"
                    class="flex items-center gap-1 {{ request()->is('kursus') ? 'text-text-pink-600 font-semibold' : 'hover:text-text-pink-500' }}">
                    Kursus

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7" />
                    </svg>

                </a>

                <div class="absolute left-0 top-full w-64 bg-white rounded-2xl shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">

                    <div class="p-4 space-y-3">

                        <a href="/little-koders" class="flex gap-3 p-2 rounded-lg hover:bg-gray-100">
                            <div>
                                <p class="font-semibold">Little Koders</p>
                                <p class="text-sm text-gray-500">Usia 4 - 8 tahun</p>
                            </div>
                        </a>

                        <a href="/junior-koders" class="flex gap-3 p-2 rounded-lg hover:bg-gray-100">
                            <div>
                                <p class="font-semibold">Junior Koders</p>
                                <p class="text-sm text-gray-500">Usia 8 - 16 tahun</p>
                            </div>
                        </a>

                        <a href="/robonext" class="flex gap-3 p-2 rounded-lg hover:bg-gray-100">
                            <div>
                                <p class="font-semibold">RoboNext</p>
                                <p class="text-sm text-gray-500">Usia 4 - 16 tahun</p>
                            </div>
                        </a>

                        <div class="border-t pt-3 mt-3">
                            <a href="/kursus"
                                class="block text-center text-sm text-pink-500 hover:underline">
                                Lihat Semua Kursus →
                            </a>
                        </div>

                    </div>
                </div>

            </div>

            <a href="/kegiatan" class="{{ request()->is('kegiatan') ? 'text-text-pink-600 font-semibold' : 'hover:text-text-pink-500' }}">
                Kegiatan
            </a>

            <a href="/lokasi" class="{{ request()->is('lokasi') ? 'text-text-pink-600 font-semibold' : 'hover:text-text-pink-500' }}">
                Lokasi
            </a>

            <a href="/tentangkami" class="{{ request()->is('tentangkami') ? 'text-text-pink-600 font-semibold' : 'hover:text-text-pink-500' }}">
                Tentang Kami
            </a>

        </div>

        <button class="absolute right-6 bg-black text-white px-4 py-2 rounded-lg shadow-md hover:bg-gray-800 transition duration-300 hidden md:inline-block">
            Hubungi Kami
        </button>

        <button class="absolute right-6 md:hidden">☰</button>

    </div>
</nav>
