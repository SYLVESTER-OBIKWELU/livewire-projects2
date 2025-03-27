<thead class="text-xs text-gray-700 uppercase bg-gray-50">
    <tr>
        <th scope="col" class="px-4 py-3" wire:click="setSortBy('name')">
            <button class="flex items-center">
                Name 
                @if ($sortBy !== 'name')
                    <i class="fa fa-arrows-v font-bold p-1" aria-hidden="true"></i>
                @elseif($sortDir === 'ASC')
                    <i class="fa fa-arrow-down font-bold p-1" aria-hidden="true"></i>
                @else
                    <i class="fa fa-arrow-up font-bold p-1" aria-hidden="true"></i>
                @endif
            </button>
        </th>
        <th scope="col" class="px-4 py-3" wire:click="setSortBy('email')">
            <button class="flex items-center">
                email 
                @if ($sortBy !== 'email')
                    <i class="fa fa-arrows-v font-bold p-1" aria-hidden="true"></i>
                @elseif($sortDir === 'ASC')
                    <i class="fa fa-arrow-down font-bold p-1" aria-hidden="true"></i>
                @else
                    <i class="fa fa-arrow-up font-bold p-1" aria-hidden="true"></i>
                @endif
            </button>
        </th>
        <th scope="col" class="px-4 py-3" wire:click="setSortBy('isAdmin')">
            <button class="flex items-center">
                Role 
                @if ($sortBy !== 'isAdmin')
                    <i class="fa fa-arrows-v font-bold p-1" aria-hidden="true"></i>
                @elseif($sortDir === 'ASC')
                    <i class="fa fa-arrow-down font-bold p-1" aria-hidden="true"></i>
                @else
                    <i class="fa fa-arrow-up font-bold p-1" aria-hidden="true"></i>
                @endif
            </button>
        </th>
        <th scope="col" class="px-4 py-3">Joined</th>
        <th scope="col" class="px-4 py-3">Last update</th>
        <th scope="col" class="px-4 py-3 flex justify-center">Actions</th>
    </tr>
</thead>