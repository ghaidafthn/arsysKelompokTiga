<?php

namespace App\Http\Livewire\User\Profile;

use Livewire\Component;
use App\Models\Profile_Sympozia;
use App\Models\ProfileTitle_Sympozia;
use App\Models\ProfileStatus_Sympozia;
use Auth;
use \Carbon\Carbon;

class Create extends Component
{
    public $lastName;
    public $title;
    public $firstName;
    public $email;
    public $affiliation;
    public function render()
    {

        $titles = ProfileTitle_Sympozia::all();
        $statusprofiles = ProfileStatus_Sympozia::all();
        return view('livewire.user.profile.create', ['titles' => $titles, 'statusprofiles' => $statusprofiles]);
    }

    public function createProfile(){
        $this->validate([
            //'title' =>   'required',
            'lastName' => 'required',
            'firstName' => 'required',
            //'status' => required,
            'email' => 'required',
            'affiliation' => 'required',
        ]);

       
        
        $profile = Profile_Sympozia::where('user_id', Auth::user()->id)->first();
        $userCode = Carbon::parse(Carbon::now())->format('YM').'-'.Auth::user()->id;
        
        if($profile){
            Profile_Sympozia::where('user_id', Auth::user()->id)->update([
                'last_name' => $this->lastName,
                'first_name' => $this->firstName,
                'affiliation' => $this->affiliation,
                'email' => $this->email,
                'user_code' => $userCode,
            ]);
            dd('update');
            session()->flash('success','Profile has been updated');
        }else{
            Profile_Sympozia::create([
                'last_name' => $this->lastName,
                'first_name' => $this->firstName,
                'affiliation' => $this->affiliation,
                'email' => $this->email,
                'user_code' => $userCode,
                'user_id' =>  Auth::user()->id,
            ]);
            dd('save');
            session()->flash('success','Profile has been created');
        }
        
    }
}
