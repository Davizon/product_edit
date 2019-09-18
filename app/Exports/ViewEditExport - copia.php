<?php

namespace App\Exports;


use App\ViewEdit;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\Auth;

class ViewEditExport implements FromCollection , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        return ViewEdit::select('product_code','language','category','list_price','price','weight','quantity','detailed_image','product_name','description'
            ,'meta_keywords','meta_description' ,'page_title','options' ,'short_description','status','vendor','brand','features','aditional_column_name','aditional_column_value')->where('user_id',Auth::user()->id)->where('status_edit', 1 )->get();
    }

    public function headings(): array
    {
        return [
            'Product code',
            'Language',
            'Category',
            'List price',
            'Price',
            'Weight',
            'Quantity',
            'Detailed image',
            'Product name',
            'Description',
            'Meta keywords',
            'Meta description',
            'Page title',
            'Options',
            'Short description',
            'Status',
            'Vendor',
            'Brand',
            'Features',
            'Aditional Column Name',
            'Aditional Column Value'
        ];
    }



}
