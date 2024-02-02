<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

<!-- component -->




    <section class="relative mx-auto">
        <!-- navbar -->
      <nav class="flex justify-between bg-gray-900 text-white w-screen">
        <div class="px-5 xl:px-12 py-6 flex w-full items-center">
          <a class="text-3xl font-bold font-heading" href="#">
            <!-- <img class="h-9" src="logo.png" alt="logo"> -->
            Discover World
          </a>
          <!-- Nav Links -->
          <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
            <li><a class="hover:text-gray-200" href="{{route('index')}}">Home</a></li>
            <li><a class="hover:text-gray-200" href="{{route('create')}}">Recite</a></li>
          
          </ul>
          <!-- Header Icons -->

        </div>
        <!-- Responsive navbar -->
       
     
      </nav>
      
    </section>




    <div class="w-full pt-4 pr-5 pb-6 pl-5 mt-0 mr-auto mb-0 ml-auto space-y-5 sm:py-8 md:py-12 sm:space-y-8 md:space-y-16
    max-w-7xl">
  <div class="flex flex-col items-center sm:px-5 md:flex-row">
    <div class="flex flex-col items-start justify-center w-full h-full pt-6 pr-0 pb-6 pl-0 mb-6 md:mb-0 md:w-1/2">
      <div class="flex flex-col items-start justify-center h-full space-y-3 transform md:pr-10 lg:pr-16
          md:space-y-5">
        <div class="bg-green-500 flex items-center leading-none rounded-full text-gray-50 pt-1.5 pr-3 pb-1.5 pl-2
            uppercase inline-block">
          <p class="inline">
            <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewbox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0
                00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755
                1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1
                0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          </p>
          <p class="inline text-xs font-medium">New</p>
        </div>
        <a class="text-4xl font-bold leading-none lg:text-5xl xl:text-6xl">Discover all aventures in
            
            @foreach ($aventures as $aventure)

            
            {{ $aventure->distination->nameDistination }}
            @break

            @endforeach

        </a>

      </div>
    </div>
    <div class="w-full md:w-1/2">
      <div class="block">
                
        @foreach ($aventures as $aventure)

            
        @foreach ($aventure->image as $img)
        <img role="presentation" class=" object-cover w-full rounded h-44 dark:bg-gray-500"
            src="{{ asset('storage/' . $img->image) }}">
            @break
        
            @endforeach
            @break

        @endforeach
      </div>
    </div>
  </div>

</div>


    <section class="dark:bg-gray-800 dark:text-gray-100">
        <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
          
    <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($aventures as $aventure)
            <a rel="noopener noreferrer" href="#"
                class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">
                @foreach ($aventure->image as $img)
                    <img role="presentation" class=" object-cover w-full rounded h-44 dark:bg-gray-500"
                        src="{{ asset('storage/' . $img->image) }}">
                @break
            @endforeach
            <div class="p-6 space-y-2">
                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">
                    {{ $aventure->titelAventure }}</h3>
                <span class="text-xs dark:text-gray-400">{{ $aventure->created_at->diffForHumans() }}</span>
                <p>{{ Str::limit($aventure->descriptionsAventeur, 90, '...') }}</p>
                <p>{{ Str::limit($aventure->conseils, 80, '...') }}</p>
                <p>{{ $aventure->distination->nameDistination }}</p>
            </div>

        </a>
        @endforeach
    </div>
    </div>
    </section>
</body>
</html>