<x-app-layout>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600 mb-5">MIS CURSOS MATRICULADOS</h1>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($user->courses_enrolled as $course)
              <a href="{{route('courses.status', $course)}}" class="flex-1 flex flex-col overflow-hidden rounded-2xl shadow-xl">
                  <img
                    alt="Office"
                    src="{{Storage::url($course->image->url)}}"
                    class="h-56 w-full object-cover"
                  />
                
                  <div class="bg-gray-100 p-4 flex-1 flex flex-col">
                    <p class="text-xs text-gray-500">Prof: {{$course->teacher->name}}</p>
                
                    <h3 class="text-lg text-black font-bold">
                      {{Str::limit($course->title, 40)}}
                    </h3>
                
                    <p class="my-2 text-xs text-gray-500">
                      {!!Str::limit($course->description, 40)!!}
                    </p>

                    {{-- <ul class="flex gap-2">
                      <li
                        class="block rounded-full bg-blue-600 px-3 py-1 text-xs font-semibold text-white mb-auto">
                        <a href="">xx</a>
                      </li>
                    </ul> --}}

                    <form action="{{route('courses.verification', $course)}}" method="GET">
                      <button type="submit" class="block rounded-full bg-blue-600 px-3 py-1 text-xs font-semibold text-white mb-auto">Verificacion</button>
                    </form>
                  </div>
                </a>
            @endforeach
      </div>
    </section>
      
</x-app-layout>