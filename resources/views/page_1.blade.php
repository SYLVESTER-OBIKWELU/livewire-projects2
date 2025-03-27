<x-app>
    
    <div>
        <a wire:navigate href="{{route('home')}}" class="{{Route::is('home') ? 'bg-blue-500' : 'bg-red-500'}} hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Table</a>
        <a wire:navigate href="{{route('page2')}}" class="{{Route::is('page2') ? 'bg-blue-500' : 'bg-red-500'}} hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Text</a>
    </div>

    <div class="progress">
        <div class="progress-bar  bg-${2|success,info,success,warning,wardanger}}" role="progressbar" style="width: 25%;"
            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" ${6| ,progress-bar-animated}>Description</div>
    </div>

</x-app>