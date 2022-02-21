<?php

namespace App\Http\Livewire\Committee\Submission;

use Livewire\Component;

class AbstractIdx extends Component
{
    public function render()
    {
        return view('livewire.committee.submission.abstract-idx')->layout('adminlte::page');
    }
}
