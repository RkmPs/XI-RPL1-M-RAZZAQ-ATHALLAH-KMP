
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotelu</title>
        @vite('resources/css/app.css')
  </head>
<body>


<div class="w-1/2 mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    
    <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
    <img class="max-h-md max-w-xl w-full rounded-lg shadow-xl dark:shadow-gray-800" src="{{ asset('/storage/rooms/'.$rooms -> image) }}" alt="image description">
        <div class=" flex justify-between text-center p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">
       
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-lg font-extrabold">Room No.</dt>
                    <dd class="text-gray-500 dark:text-gray-400">{{$rooms->id}}</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-lg font-extrabold">Roomtype</dt>
                    <dd class="text-gray-500 dark:text-gray-400">{{$rooms->roomType}}</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-lg font-extrabold">Price /Nights</dt>
                    <dd class="text-gray-500 dark:text-gray-400">{{ "Rp " . number_format($rooms -> pricePerNights,2,',','.') }}</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-lg font-extrabold">Status</dt>
                    <dd class="text-gray-500 dark:text-gray-400">{{$rooms->status}}</dd>
                </div>

        </div>
    </div>


    
</body>
</html>