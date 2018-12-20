<?php

namespace App\Exports;

use App\Product_Masuk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class ExportProdukMasuk implements FromView
{
    /**
     * melakukan format dokumen menggunakan html, maka package ini juga menyediakan fungsi lainnya agar dapat me-load data tersebut dari file html / blade di Laravel
     */
    use Exportable;

    public function view(): View
    {
        // TODO: Implement view() method.
        return view('product_masuk.productMasukAllExcel',[
            'product_masuk' => Product_Masuk::all()
        ]);
    }
}
