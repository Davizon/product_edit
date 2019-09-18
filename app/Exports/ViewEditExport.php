<?php
namespace App\Exports;

use App\ViewEdit;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\Auth;
class ViewEditExport implements FromView
{
    public function view(): View
    {
        return view('export.export', [
            'exports' =>  ViewEdit::where('user_id', Auth::user()->id)->where('status_edit', 1)->get()
        ]);
    }
}
