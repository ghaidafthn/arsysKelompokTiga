<?php

namespace App\Http\Livewire\User\Profile;

use Livewire\Component;

use App\Models\Profile_Sympozia;
use App\Models\ProfileTitle_Sympozia;
use App\Models\ProfileStatus_Sympozia;
use Auth;

class Edit extends Component
{
    public $lastName;
    public $title;
    public $firstName;
    public $email;
    public $affiliation;
    public function render()
    {
        $titles = ProfileTitle_Sympozia::all();
        $profile = Profile_Sympozia::where('user_id', Auth::user()->id)->first();
        $statusprofiles = ProfileStatus_Sympozia::all();
        return view('livewire.user.profile.edit', ['titles' => $titles,'statusprofiles' => $statusprofiles, 'profile' => $profile]);
    }
}
