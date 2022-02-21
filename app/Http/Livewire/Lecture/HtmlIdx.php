<?php

namespace App\Http\Livewire\Lecture;

use Livewire\Component;

class HtmlIdx extends Component
{
    public function render()
    {
        return view('livewire.lecture.html-idx')->layout('adminlte::page');
    }
}
