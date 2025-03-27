<x-app>

    <div>
        <a wire:navigate href="{{route('home')}}" class="{{Route::is('home') ? 'bg-blue-500' : 'bg-red-500'}} hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Table</a>
        <a wire:navigate href="{{route('page2')}}" class="{{Route::is('page2') ? 'bg-blue-500' : 'bg-red-500'}} hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Text</a>
    </div>
    
    <livewire:users-table />

</x-app>