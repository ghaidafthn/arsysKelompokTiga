<?php

namespace App\Http\Livewire\Committee\Submission;

use Livewire\Component;
use App\Models\Manuscript_Sympozia;
use PDF;

class AbstractList extends Component
{
    public function render()
    {
        $papers = Manuscript_Sympozia::all();
        return view('livewire.committee.submission.abstract-list', compact('papers'));
    }

    public function exportToPDF(){
        $abstracts = Manuscript_Sympozia::all();
        $pdf = PDF::loadview('livewire.committee.print.abstract-list-print', compact('abstracts'))
                ->setPaper('a4', 'portrait');
        return response()->streamDownload(function() use($pdf){
            echo $pdf->stream();
        }, 'abstract of ismee.pdf');
    }
}
