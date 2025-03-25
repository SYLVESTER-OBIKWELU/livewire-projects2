<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    public $perPage = '5';
    public $search = '';
    public $isAdmin = '';

    public $sortBy = 'created_at';
    public $sortDir = 'DESC';
    
    public function render()
    {
        // import search() from user model where Scope Search was created 
        $users = User::search($this->search)
        ->when($this->isAdmin != '', function($query){ 
            $query->where('isAdmin',$this->isAdmin);
        })
        ->orderBy($this->sortBy,$this->sortDir)
        ->paginate($this->perPage);
        

        return view('livewire.users-table',compact('users'));
    }

    public function delete(User $user){
        $user->delete();

        $this->dispatch(
            'alert',
            text:'User name with ID:'.$user->id.' has been deleted',
            icon:'success'
        );
    }

    public function setSortBy($sortByField){
        if($this->sortBy === $sortByField){
            $this->sortDir = ($this->sortDir == 'ASC') ? 'DESC' : 'ASC';
            return;
        }
        
        $this->sortBy = $sortByField;
        $this->sortDir ='DESC';
    }
}