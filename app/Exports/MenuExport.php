<?php

namespace App\Exports;

use App\Exports\MenuExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Menu;
use Maatwebsite\Excel\Concerns\FromCollection;

class MenuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Menu::all();
    }
}
