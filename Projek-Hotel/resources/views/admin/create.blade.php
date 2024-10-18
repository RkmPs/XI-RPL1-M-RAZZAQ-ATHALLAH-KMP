<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="vz0yYFNPLKumtzIUznfPLDXvCD0U6sASV8TP26xc">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script>
            type="module" src="http://[::1]:5173/resources/js/app.js"
        </script>
        
        <link rel="stylesheet" href="http://[::1]:5173/resources/css/app.css" />
        @vite('resources/css/app.css')

    </head>

    <body class="font-sans antialiased">
        <div class="flex justify-center pt-5">

            <div class="block max-w-2xl w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class=" text-start mb-1 pb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Add Room</h5>
                            
                <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg text-left">
                    @csrf
                  <label class="block mb-1 pt-2 text-lg font-medium  text-gray-900 dark:text-white" for="user_avatar">Upload file</label>
                  <input class="block w-full text-base text-gray-900  border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file" name="image">

                    <label for="roomType" class="block mt-3 mb-1 text-lg font-medium text-gray-900 dark:text-white">Tipe Ruangan</label>
                    <select name="roomType" id="roomType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">--Pilih--</option>
                        <option value="Single">Single</option>
                        <option value="Double">Double</option>
                        <option value="Twin">Twin</option>
                        <option value="Suite">Suite</option>
                        <option value="Deluxe">Deluxe</option>
                    </select>

                    <label for="base-input" class="block mt-3 mb-1 text-lg font-medium text-gray-900 dark:text-white">Price /Night</label>
                    <input type="text" id="base-input" name="pricePerNights" placeholder="Masukan Harga Permalam" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  
                    <label for="status" class="block mt-3 mb-1 text-lg font-medium text-gray-900 dark:text-white">Tipe Ruangan</label>
                    <select name="status" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">--Pilih--</option>
                        <option value="Available">Available</option>
                        <option value="Occupied">Occupied</option>
                        <option value="Reserved">Reserved</option>
                        <option value="Out of order">Out of order</option>
                    </select>

                    <button type="submit" class="mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SAVE</button>
                    <button type="reset" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">RESET</button>

                </form>
            </div>

        </div>

    </body>

</html>