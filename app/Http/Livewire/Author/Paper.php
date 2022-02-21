<?php

namespace App\Http\Livewire\Author;

use Livewire\Component;
use App\Models\Manuscript_Sympozia;
use App\Models\ManuscriptAuthor_Sympozia;
use App\Models\Profile_Sympozia;
use Auth;
class Paper extends Component
{
    public $name;
    public $email;
    public function render()
    {
        $papers = Manuscript_Sympozia::where('user_id', Auth::user()->id)->get();
        return view('livewire.author.paper', compact('papers'));
    }

    public function deleteManuscript($id){
        Manuscript_Sympozia::where('id', $id)->delete();
    }

    public function addAuthor($id){
        $checkProfile = Profile_Sympozia::where('email', $this->email)->first();

        if(!$checkProfile){
            Profile_Sympozia::create([
                'first_name' => $this->name,
                'email' => $this->email,
            ]);
        }

        $profile = Profile_Sympozia::where('email', $this->email)->first();
        ManuscriptAuthor_Sympozia::create([
            'manuscript_id' => $id,
            'author_id' => $profile->id,
        ]);
    }
    
}
