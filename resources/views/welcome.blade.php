<x-app-layout>
    
    {{-- Portada --}}


    <section class="bg-cover" style="background-image: url({{asset('img/home/people-ge056781d6.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36 ">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-4xl"> Reapertura: Cursos a tan solo 9.99 US$</h1>
                <p class="text-white text-lg mt-2 mb-4">SLTC se renueva. Aprovecha los mejores descuentos hasta el 31 de diciembre. SLTC se renueva. Aprovecha los mejores descuentos hasta el 31 de diciembre.</p>

                @livewire('search')
            </div>
        </div>
    </section>


    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-2xl mb-6">CONTENIDO</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover"  src="{{asset('img/cursos/img_1-stlc.jpeg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y Certificados</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero architecto neque excepturi nihil dolores hic eligendi vel voluptate nisi</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/cursos/img_2-stlc.jpeg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Manuales</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero architecto neque excepturi nihil dolores hic eligendi vel voluptate nisi</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/cursos/img_3-stlc.jpeg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Diplomado</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero architecto neque excepturi nihil dolores hic eligendi vel voluptate nisi</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover " src="{{asset('img/cursos/img_5-stlcs.jpeg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Talleres</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero architecto neque excepturi nihil dolores hic eligendi vel voluptate nisi</p>
            </article>

        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">Get Our Updates</h1>
        <p class="text-center  text-white">Find out about events and other news</p>
        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4">
                Catalogo de Cursos
            </a>
        </div>
        
    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">ULTIMOS CURSOS</h1>
        <p class="text-gray-500 text-center text-sm mb-6">Enterate cuales son los ultimos cursos subidos</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

            @foreach ($courses as $course)
                <x-course-card :course="$course" />
            @endforeach

        </div>

    </section>

</x-app-layout>


