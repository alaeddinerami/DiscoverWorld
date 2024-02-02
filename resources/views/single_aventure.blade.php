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
    <section class="relative mx-auto">
        <!-- navbar -->
      <nav class="flex justify-between bg-gray-900 text-white w-screen">
        <div class="px-5 xl:px-12 py-6 flex w-full items-center">
          <a href="{{route('index')}}" class="text-3xl font-bold font-heading" >
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
<!-- component -->
<div class="container mx-auto p-4">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 flex items-center justify-center">
        @foreach($aventure->image as $image)
            <img class="h-auto max-w-full rounded-lg"
                src="{{ asset('storage/' . $image->image) }}" alt="Image Description">
        @endforeach
    </div>
</div>

  <!-- component -->
<div class="max-w-screen-xl mx-auto">
    <!-- header -->
  
    <!-- header ends here -->

    <main class="mt-10">


      <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
       
        <h1 class="mb-4" style="font-size: 40px; text-align: center;">{{$aventure->titelAventure}}</h1>
       
       <p class="pb-6">{{$aventure->descriptionsAventeur}}</p>
       <p class="pb-6">{{$aventure->conseils}}</p>


        
      </div>
    </main>
    <!-- main ends here -->

    <!-- footer -->
    <footer class="border-t mt-32 pt-12 pb-32 px-4 lg:px-0">
      <div class="flex">

        <div class="w-full md:w-1/3 lg:w-1/4">
          <h6 class="font-semibold text-gray-700 mb-4">Company</h6>
          <ul>
            <li> <a href="" class="block text-gray-600 py-2">Team</a> </li>
            <li> <a href="" class="block text-gray-600 py-2">About us</a> </li>
            <li> <a href="" class="block text-gray-600 py-2">Press</a> </li>
          </ul>
        </div>

        <div class="w-full md:w-1/3 lg:w-1/4">
          <h6 class="font-semibold text-gray-700 mb-4">Content</h6>
          <ul>
            <li> <a href="" class="block text-gray-600 py-2">Blog</a> </li>
            <li> <a href="" class="block text-gray-600 py-2">Privacy Policy</a> </li>
            <li> <a href="" class="block text-gray-600 py-2">Terms & Conditions</a> </li>
            <li> <a href="" class="block text-gray-600 py-2">Documentation</a> </li>
          </ul>
        </div>

      </div>
    </footer>
  </div>
</body>
</html>