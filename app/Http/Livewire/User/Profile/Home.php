<?php

namespace App\Http\Livewire\User\Profile;

use Livewire\Component;


use App\Models\Profile_Sympozia;
use Auth;

class Home extends Component
{
    public $profileMenu;
    public $profile;
    public $listeners = ['editUserProfile'];
    public function render()
    {
        return view('livewire.user.profile.home');
    }
    
    public function mount(){
        $profile = Profile_Sympozia::where('user_id', Auth::user()->id)->first();
        if(!$profile){
            $this->profileMenu='create';
        }else{
            $this->profileMenu='view';
        }
    }

    public function editUserProfile(){
        $this->profileMenu='edit';
    }
}
