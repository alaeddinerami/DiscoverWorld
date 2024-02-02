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
	<!-- component -->
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex items-center space-x-5 p-3 max-w-md mx-auto">
                    <div class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">i</div>
                    <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                        <h2 class="leading-relaxed">Create an Event</h2>
                        <p class="text-sm text-gray-500 font-normal leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" >
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="titelAventure" id="title" value="" required>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Description</label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="descriptionsAventeur" id="description" placeholder="(Optional)">
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Continent</label></br>
                            <select class="w-full border-2 border-gray-300 border-r p-2" name="distination_id">
                               @foreach($distinations as $distination)
                                <option value="{{$distination->id}}">{{$distination->nameDistination}}</option>
                               @endforeach
                            </select>
                        </div>

                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Consiel <span class="text-red-500">*</span></label></br>
                            <textarea name="conseils" class="border-2 border-gray-500">

                            </textarea>
                        </div>
                        <div class="mb-8">
                            <label class="text-xl text-gray-600 mb-2">choose images</label></br>
                            <input type="file" class="border-2 border-gray-300 p-2 w-full" name="image[]" multiple id="description" >
                        </div>

                        <div class="flex p-1">
                            <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
