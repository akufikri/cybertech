<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-72 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-900 dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/"
                    class="flex items-center p-2 transition rounded-lg text-gray-50 hover:text-gray-950  hover:bg-gray-100 dark:hover:bg-gray-900 group {{ request()->is('/') ? 'bg-gray-500 dark:bg-gray-700' : '' }}">
                    <span class="ms-3">Getting Started</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-50 hover:text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">DOCS</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    <li>
                        <a href="/docs/auth"
                            class="flex items-center w-full p-2 text-gray-50 hover:text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{ request()->is('docs/auth') ? 'bg-gray-500 dark:bg-gray-700' : '' }}">API
                            Auth</a>
                    </li>
                    <li>
                        <a href="/docs/division"
                            class="flex items-center w-full p-2 text-gray-50 hover:text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{ request()->is('docs/division') ? 'bg-gray-500 dark:bg-gray-700' : '' }}">API
                            Division</a>
                    </li>
                    <li>
                        <a href="/docs/meeting"
                            class="flex items-center w-full p-2 text-gray-50 hover:text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{ request()->is('docs/meeting') ? 'bg-gray-500 dark:bg-gray-700' : '' }}">API
                            Meeting</a>
                    </li>
                    <li>
                        <a href="/docs/join-meeting"
                            class="flex items-center w-full p-2 text-gray-50 hover:text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{ request()->is('docs/join-meeting') ? 'bg-gray-500 dark:bg-gray-700' : '' }}">API
                            Join Meeting</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/about"
                    class="flex items-center p-2 transition rounded-lg text-gray-50 hover:text-gray-950  hover:bg-gray-100 dark:hover:bg-gray-900 group {{ request()->is('about') ? 'bg-gray-500 dark:bg-gray-700' : '' }}">
                    <span class="ms-3">About API</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebarButton = document.querySelector('[data-collapse-toggle="dropdown-example"]');
        const dropdownMenu = document.getElementById('dropdown-example');

        sidebarButton.addEventListener('click', function() {
            dropdownMenu.classList.toggle('hidden');
        });

        // Tambahkan kode untuk mengecek apakah halaman saat ini adalah halaman dropdown
        const isDropdownActive = Array.from(dropdownMenu.getElementsByTagName('a')).some(a => {
            return a.classList.contains('bg-gray-500') || a.classList.contains('dark:bg-gray-700');
        });

        // Buka dropdown jika halaman dropdown aktif
        if (isDropdownActive) {
            dropdownMenu.classList.remove('hidden');
        }
    });
</script>
