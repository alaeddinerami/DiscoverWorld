
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
    <section class="dark:bg-gray-800 dark:text-gray-100">
        <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
            <a rel="noopener noreferrer" href="#" class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-900">
                <img src="images/ford.jpg" alt="" class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">
                <div class="p-6 space-y-2 lg:col-span-5">
                    <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">Noster tincidunt reprimique ad pro</h3>
                    <span class="text-xs dark:text-gray-400">February 19, 2021</span>
                    <p>Ei delenit sensibus liberavisse pri. Quod suscipit no nam. Est in graece fuisset, eos affert putent doctus id.</p>
                </div>
            </a>
            <div class=" grid md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($distinations as $distination)
            <a href="#" class=" max-w-sm mx-auto sm:max-w-60 group hover:no-underline focus:no-underline flex flex-col dark:bg-gray-900">
               
                
                <div class="lg:col-span-4 mb-3">
                    <img src="{{ asset('storage/'. $distination->image->image) }}" alt="Description de l'image" class="w-full h-auto rounded-md">
                </div>
             
                
                <div class="lg:col-span-8 text-center">
                    <h2 class="text-xl font-bold mb-2 text-white">{{$distination->nameDistination}}</h2>
                    <!-- Add other information or content here -->
                </div>
            </a>
            @endforeach
        </div>
            
            <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($aventures as $aventure)
                <a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">
                    @foreach($aventure->image as $img)
                    <img role="presentation" class=" object-cover w-full rounded h-44 dark:bg-gray-500" src="{{asset('storage/'.$img->image)}}">
                    @break
                    @endforeach
                    <div class="p-6 space-y-2">
                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">{{$aventure->titelAventure}}</h3>
                        <span class="text-xs dark:text-gray-400">{{$aventure->created_at->diffForHumans()}}</span>
                        <p>{{ Str::limit($aventure->descriptionsAventeur, 90, '...') }}</p>
                        <p>{{ Str::limit($aventure->conseils, 80, '...') }}</p>
                        <p>{{ $aventure->distination->nameDistination}}</p>
                    </div>
                    
                </a>
                @endforeach
            </div>
            <div class="flex justify-center">
                <button type="button" class="px-6 py-3 text-sm rounded-md hover:underline dark:bg-gray-900 dark:text-gray-400">Load more posts...</button>
            </div>
        </div>
    </section>
</body>
</html>