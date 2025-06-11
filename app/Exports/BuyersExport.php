<?php

// Tambahan fitur export data Excel untuk Admin
// 1. Tambahkan Laravel Excel jika belum:
// composer require maatwebsite/excel

// 2. Buat export class
// app/Exports/BuyersExport.php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class BuyersExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    public function collection()
    {
        return User::where('role', 'buyer')
            ->select('id', 'name', 'email', 'created_at')
            ->get();
    }

    public function headings(): array
    {
        return ['ID', 'Name', 'Email', 'Registered At'];
    }
}
