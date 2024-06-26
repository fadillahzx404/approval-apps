<aside
    class="flex flex-col min-h-screen w-72  px-5 py-8 bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700 relative overflow-hidden">
    <a href="#" class="self-center text-center hover:scale-90 transition-all duration-300 z-10">
        <img class="w-auto h-16" src="https://merakiui.com/images/logo.svg" alt="">
        <p class="text-xl pt-4">Delta</p>
    </a>

    <div class="flex flex-col justify-between flex-1 mt-6 z-10">
        <nav class="-mx-3 space-y-6 ">
            @include('includes.sidebar-menu')
        </nav>
    </div>

    <div
        class="absolute  w-48 h-96 rotate-45 -bottom-40 left-44 bg-gradient-to-b from-red-400 from-35% to-blue-500 to-80%">
    </div>
    <div
        class="absolute w-48 h-96 -bottom-32  rotate-45 z-0 left-64 bg-gradient-to-b from-red-600 from-40% to-blue-300 to-90%">
    </div>
</aside>
