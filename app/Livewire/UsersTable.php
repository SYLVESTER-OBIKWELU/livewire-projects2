<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    #[Url(history:true)]
    public $perPage = '5';
    
    #[Url(history:true)]
    public $search = '';

    #[Url(history:true)]
    public $isAdmin = '';

    #[Url(history:true)]
    public $sortBy = 'created_at';

    #[Url(history:true)]
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
            text:'User with Id:'.$user->id.' has been deleted',
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

    //reset page to page?1 when making a search
    public function updatedSearch(){
        $this->resetPage();
    }
}