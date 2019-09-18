<?php

namespace App\Imports;

use App\Category;
use App\Option;
use App\ViewEdit;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Illuminate\Support\Facades\Validator;
HeadingRowFormatter::default('none');
class ViewEditImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */



    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            ViewEdit::create([
            'product_code'=> $row[$_POST['form_product_code']] ?? null,
            'language' => $row['Language'] ?? 'en' ?? null,
            'category' => $row[$_POST['form_category']] ?? null,
            'price' => $row[$_POST['form_price']] ?? null,
            'weight' => $row[$_POST['form_weight']] ?? $row['Weight Lbs'] ?? null,
            'quantity'=> $row[$_POST['form_quantity']] ?? $row['Qty Inventory'] ?? null,
            'detailed_image' => $row[$_POST['form_main_image']] ?? $row['Main'] ?? null,
            'product_name' => $row['Product name'] ?? $row[$_POST['form_product_name']] ?? null,
            'description'=> $row['Description'] ?? $row['Long Description'] ?? $row['Explicacion'] ?? $row[$_POST['form_description']] ?? null,
            'meta_keywords' => $row['Meta keywords'] ?? $row['metakeywords'] ?? $row[$_POST['form_meta_keywords']] ?? null,
            'meta_description' => $row['Meta description'] ?? $row[$_POST['form_meta_keywords']] ?? null,
            'page_title'=> $row['Page title'] ?? $row['Product name'] ?? $row[$_POST['form_product_name']] ?? null,
            'options'=> $row['Options'] ?? null,
            'short_description'=> $row['Short Description'] ?? $row['Short description'] ?? $row[$_POST['form_short_description']] ?? null,
            'vendor' => $row['Vendor'] ?? 'Default' ?? null,
            'brand' => $row['Brand'] ?? null,
            'features' => $row['Features'] ?? null ,
            'aditional_column_name' => '"'.$_POST['fields_aditional1'].'",'
                .'"'.$_POST['fields_aditional2'].'",'
                .'"'.$_POST['fields_aditional3'].'",'
                .'"'.$_POST['fields_aditional4'].'",'
                .'"'.$_POST['fields_aditional5'].'"'
                ?? '',
                'aditional_column_value' => '"' .$row[$_POST['form_aditional_1']].'",'
                    .'"'.$row[$_POST['form_aditional_2']].'",'
                    .'"'.$row[$_POST['form_aditional_3']].'",'
                    .'"'.$row[$_POST['form_aditional_4']].'",'
                    .'"'.$row[$_POST['form_aditional_5']].'"'
                    ?? '',
            'status_edit' => 0,
            'user_id' =>  $_POST['form_user_id'],

        ]);
            Option::create([
                'product_code'=> $row[$_POST['form_product_code']],
                'color' => $row['Color'] ?? null,
                'size' => $row['Size'] ?? null,
                'brand' => $row['Brand'] ?? null,
                'material' => $row['Material'] ?? null,
                'piece' => $row['Piece'] ?? null,
                'gender' => $row['Gender'] ?? null,
                'user_id' =>  $_POST['form_user_id'],
            ]);
            Category::create([
                'product_code'=> $row[$_POST['form_product_code']],
                'category' => $row['Category'] ?? $row[$_POST['form_category']] ?? null,
                'Subcategory_1' => $row['Subcategory_1'] ?? null,
                'Subcategory_2' => $row['Subcategory_2'] ?? null,
                'Subcategory_3' => $row['Subcategory_3'] ?? null,
                'piece' => $row['Piece'] ?? null,
                'user_id' =>  $_POST['form_user_id'],
            ]);

        }
    }

}

//            'aditional_columns' => '{"Aditional":{'
//                .'"'.$_POST['fields_aditional1'].'"'.':'.'"'.$row[$_POST['form_aditional_1']].'",'
//                .'"'.$_POST['fields_aditional2'].'"'.':'.'"'.$row[$_POST['form_aditional_2']].'",'
//                .'"'.$_POST['fields_aditional3'].'"'.':'.'"'.$row[$_POST['form_aditional_3']].'"'
//
//                .'}}' ?? null ,
