<?php

namespace App\Http\Livewire\User\Profile;

use Livewire\Component;
use App\Models\Profile_Sympozia;
use Auth;
class Data extends Component
{
    public function render()
    {
        $profile = Profile_Sympozia::where('user_id', Auth::user()->id)->first();
        return view('livewire.user.profile.data', ['profile' => $profile]);
    }

   
}
