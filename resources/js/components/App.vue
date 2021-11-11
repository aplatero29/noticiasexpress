<template>
    <main>
        <nav
            class="
            min-w-full
                sticky
                top-0
                flex-row flex
                items-center
                justify-between
                px-4
                py-3
                ring-red-800
                bg-blue-400
                rounded-b-3xl 
            "
        >
            <div class="flex flex-none items-center">
                <span class="">
                    <a
                        href="/"
                        class="
                            fas
                            fa-globe fa-5x
                            hover:text-current hover:no-underline
                        "
                    ></a>
                </span>

                <!-- <a class=""></a> -->
                <!-- <ul class="flex flex-col sm:flex-row space-x-8">
                    <li class="hidden sm:inline"><a href="#">Actualidad</a></li>
                    <li class="hidden sm:inline"><a href="#">Economía</a></li>
                    <li class="hidden md:inline"><a href="#">Educación</a></li>
                    <li class="hidden md:inline"><a href="#">Ciencia</a></li>
                    <li class="hidden sm:inline"><a href="#">About</a></li>
                </ul> -->
            </div>

            <div class="flex items-stretch w-2/5">
                <input
                    type="text"
                    class="
                        bg-gray-50
                        text-md
                        rounded-full
                        w-full
                        mx-10
                        px-2.5
                        py-1
                        outline-none
                        focus:bg-gray-100
                        dark:bg-gray-800
                        dark:text-gray-100
                        dark:focus:bg-gray-700
                    "
                    placeholder=" Buscar..."
                />
            </div>

            <div class="flex flex-none items-center mb-2">
                <a
                    href="#"
                    class="
                        fas
                        fa-user-circle fa-3x
                        rounded-full
                        hover:text-current hover:no-underline
                    "
                ></a>
            </div>
        </nav>
        <div class="container mt-5">
            <router-view></router-view>
        </div>
    </main>
</template>

//TODO: Transformar navbar a componente
<script>
export default {
    components: 1,
};
</script>
