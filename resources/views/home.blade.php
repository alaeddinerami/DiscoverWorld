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

<div class="flex flex-wrap place-items-center ">
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
  </div>
  <!-- Does this resource worth a follow? -->
  
    <section class="dark:bg-gray-800 dark:text-gray-100">
        <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
            <a rel="noopener noreferrer" href="#"
                class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-900">
                <img src="images/ford.jpg" alt=""
                    class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">
                <div class="p-6 space-y-2 lg:col-span-5">
                    <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">Noster
                        tincidunt reprimique ad pro</h3>
                    <span class="text-xs dark:text-gray-400">February 19, 2021</span>
                    <p>Ei delenit sensibus liberavisse pri. Quod suscipit no nam. Est in graece fuisset, eos affert
                        putent doctus id. </p>
                </div>
            </a>
            

<!-- component -->
<div class="min-w-screen  flex items-center justify-center ">
    <div class="max-w-7xl w-full mx-auto py-6 sm:px-6 lg:px-8">
        <div class="flex justify-center flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4">

            <div class="w-full lg:w-1/5">
                <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-purple-400">
                    <div class="flex items-center">
                        <div class="icon w-14 p-3.5 bg-purple-400 text-white rounded-full mr-3">
                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col justify-center text-black">
                            <div class="text-lg">{{$aventuresCount}}</div>
                            <div class="text-sm text-gray-400">total aventures</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/5">
                <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-blue-400">
                    <div class="flex items-center">
                        <div class="icon w-14 p-3.5 bg-blue-400 text-white rounded-full mr-3">
                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <div class="flex flex-col justify-center text-black">
                            <div class="text-lg">{{ $mostPopularDistination->adventure_count }}</div>
                            <div class="text-sm text-gray-400">{{ $mostPopularDistination->nameDistination }}</div>
                        </div>
                    </div>
                </div>
            </div>

          
        </div>
    </div>
</div>
            <div class=" grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($distinations as $distination)
                    <a href="{{route('filter',$distination)}}"  class=" max-w-sm mx-auto sm:max-w-60 group hover:no-underline focus:no-underline flex flex-col dark:bg-gray-900">
                        <div class="lg:col-span-4 mb-3">
                            <img src="{{ asset('storage/' . $distination->image->image) }}" alt="Description de l'image"
                                class="w-full h-auto rounded-md">
                        </div>
                        <div class="lg:col-span-8 text-center">
                            <h2 class="text-xl font-bold mb-2 text-white">{{ $distination->nameDistination }}</h2>
                            <!-- Add other information or content here -->
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="flex justify-center">
            <form class=" flex  ms-2 mt-2" action="{{route('order')}}" method="post">
                @csrf
                <input type="hidden" value="1" name="order">
                <button type="submit" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Latest</button>
              </form>
              <form class="mt-2" action="{{route('order')}}" method="post">
                @csrf
                <input type="hidden" value="0" name="order">
                <button type="submit" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Oldest</button>
              </form>
            </div>
            <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($aventures as $aventure)
                    <a rel="noopener noreferrer" href="{{route('single',$aventure->id)}}"
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
