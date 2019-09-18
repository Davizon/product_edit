<?php

namespace App\Http\Controllers;
use App\Aditional;
use App\Category;
use App\Exports\ViewEditExport;
use App\Filter;
use App\FormImport;
use App\Imports\ViewEditImport;
use App\User;
use Maatwebsite\Excel\HeadingRowImport;
use App\Option;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;

use App\ViewEdit;
use Illuminate\Http\Request;


class ViewEditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $counts = ViewEdit::all();
        $viewEdits  = ViewEdit::where('user_id', Auth::user()->id)->where('status_edit',$request->get('filter_option'))->orderBy('updated_at','desc')->paginate(10);
        $viewEdits->withPath('view_edits?filter_option='.$request->get('filter_option'));
        return view('viewEdit.index', compact('viewEdits', 'counts'))
            ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viewEdit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'product_code' => 'required',
            'category' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'quantity' => 'required',
            'detailed_image' => 'required',
            'product_name' => 'required',
            'description' => 'required',
            'meta_description' => 'required',
            'short_description' => 'required',
            'brand' => 'required',

        ]);

        $editProduct = new ViewEdit();
        $editProduct->product_code = $request->get('product_code');
        $editProduct->user_id = $request->get('user_id');
        $editProduct->category = $request->get('category');
        $editProduct->price = $request->get('price');
        $editProduct->list_price = $editProduct->price;
        $editProduct->weight = $request->get('weight');
        $editProduct->quantity = $request->get('quantity');
        $editProduct->detailed_image = $request->get('detailed_image');
        $editProduct->product_name = $request->get('product_name');
        $editProduct->description = $request->get('description');
        $editProduct->meta_description = $request->get('meta_description');
        $editProduct->page_title = $editProduct->product_name;
        $editProduct->options = $request->get('options');
        $editProduct->short_description = $request->get('short_description');
        $editProduct->status = 'H';
        $editProduct->vendor = $request->get('vendor');
        $editProduct->brand = $request->get('brand');
        $editProduct->status_edit = 1;
        $editProduct->save();

        return redirect('/view_edits?filter_option=0');
    }

    /**
     * Display the specified resource.
     *
     * @param ViewEdit $viewEdit
     * @return \Illuminate\Http\Response
     */
    public function show(ViewEdit $viewEdit)
    {
        return view('viewEdit.show',[
            'editProducts' => $viewEdit
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filters = Filter::all();
        $categories = Category::all();
        $options = Option::all();
        $aditionals = Aditional::all();
        $editProduct = ViewEdit::findOrFail($id);
        return view('viewEdit.edit',[
            'editProduct' => $editProduct,
            'filters' => $filters,
            'categories' => $categories,
            'options' => $options,
            'aditionals' => $aditionals,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $editProduct = ViewEdit::findOrFail($id);
        $editProduct->category = $request->get('category');
        $editProduct->price = $request->get('price');
        $editProduct->weight = $request->get('weight');
        $editProduct->quantity = $request->get('quantity');
        $editProduct->detailed_image = $request->get('detailed_image');
        $editProduct->product_name = $request->get('product_name');
        $editProduct->description = $request->get('description');
        $editProduct->meta_description = $request->get('meta_description');
        $optiones = 'Color: ['.
            $request->get('option_color-0').'///image='.$request->get('value_color_img_0').','.
            $request->get('option_color-1').'///image='.$request->get('value_color_img_1').','.
            $request->get('option_color-2').'///image='.$request->get('value_color_img_2').','.
            $request->get('option_color-3').'///image='.$request->get('value_color_img_3').','.
            $request->get('option_color-4').'///image='.$request->get('value_color_img_4').','.
            $request->get('option_color-5').'///image='.$request->get('value_color_img_5').','.
            $request->get('option_color-6').'///image='.$request->get('value_color_img_6').','.
            $request->get('option_color-7').'///image='.$request->get('value_color_img_7').','.
            $request->get('option_color-8').'///image='.$request->get('value_color_img_8').','.
            $request->get('option_color-9').'///image='.$request->get('value_color_img_9').','.
            $request->get('option_color-10').'///image='.$request->get('value_color_img_10').','.
            $request->get('option_color-11').'///image='.$request->get('value_color_img_11').']';
            $optionClear=  str_replace("///image=,", "", $optiones);
            $optionClear2 = str_replace(",///image=]", "]; Size: [XS,XL]",$optionClear );
            $optionClearFinal = str_replace(",]", "]; Size: [XS,XL]",$optionClear2);

            $editProduct->options = $optionClearFinal;

        $editProduct->short_description = $request->get('short_description');
        $editProduct->brand = $request->get('brand');
        $editProduct->vendor = $request->get('vendor');
        $editProduct->page_title = $editProduct->product_name;
        $editProduct->status_edit = 1;
        $features=$request->get('filter1').': M['.$request->get('option1').'];'.
                        $request->get('filter2').': M['.$request->get('option2').'];'.
                        $request->get('filter3').': M['.$request->get('option3').'];'.
                        $request->get('filter4').': M['.$request->get('option4').'];'.
                        $request->get('filter5').': M['.$request->get('option5').'];'.
                        $request->get('filter6').': M['.$request->get('option6').'];'.
                        $request->get('filter7').': M['.$request->get('option7').'];'.
                        $request->get('filter8').': M['.$request->get('option8').'];'.
                        $request->get('filter9').': M['.$request->get('option9').'];'.
                        $request->get('filter10').': M['.$request->get('option10').'];'.
                        $request->get('filter11').': M['.$request->get('option11').'];'.
                        $request->get('filter12').': M['.$request->get('option12').'];'.
                        $request->get('filter13').': M['.$request->get('option13').'];'.
                        $request->get('filter14').': M['.$request->get('option14').'];'.
                        $request->get('filter15').': M['.$request->get('option15').'];'.
                        $request->get('filter16').': M['.$request->get('option16').'];'.
                        $request->get('filter17').': M['.$request->get('option17').'];'.
                        $request->get('filter18').': M['.$request->get('option18').'];'.
                        $request->get('filter19').': M['.$request->get('option19').'];'.
                        $request->get('filter20').': M['.$request->get('option20').'];'.
                        $request->get('filter21').': M['.$request->get('option21').'];'
//            $request->get('custom_filter_1').': M['.$request->get('custom_option_1').'];'.
//            $request->get('custom_filter_2').': M['.$request->get('custom_option_2').'];'.
//            $request->get('custom_filter_3').': M['.$request->get('custom_option_3').'];'.
//            $request->get('custom_filter_4').': M['.$request->get('custom_option_4').'];'.
//            $request->get('custom_filter_5').': M['.$request->get('custom_option_5').'];'
        ;
        $featuresClear = str_replace(": M[];", "", $features);
        $editProduct->features = $featuresClear;
        $editProduct->aditional_column_name =
            '"'.$request->get('aditional_column_name-0').'",'
            .'"'.$request->get('aditional_column_name-1').'",'
            .'"'.$request->get('aditional_column_name-2').'",'
            .'"'.$request->get('aditional_column_name-3').'",'
            .'"'.$request->get('aditional_column_name-4').'"'
        ;
        $editProduct->aditional_column_value =
            '"'.$request->get('aditional_column_value-0').'",'
            .'"'.$request->get('aditional_column_value-1').'",'
            .'"'.$request->get('aditional_column_value-2').'",'
            .'"'.$request->get('aditional_column_value-3').'",'
            .'"'.$request->get('aditional_column_value-4').'"'
        ;

        $editProduct->save();


        return redirect('/view_edits?filter_option=0');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editProduct = ViewEdit::findOrFail($id);
        $editProduct->delete();
        return redirect('/view_edits?filter_option=0')->with('success', 'Product is successfully deleted');
    }
    public function export()
    {
        return Excel::download(new ViewEditExport, Auth::user()->name.'-'.date('Y-m-d H:i:s' ).'.csv');
        return redirect('/view_edits?filter_option=0');

    }
    public function import(Request $request)

    {
        $validData = $request->validate([
            'form_product_code' => 'required',
            'form_product_name' => 'required',
            'form_short_description' => 'required',
            'form_description' => 'required',
            'form_quantity' => 'required',
            'form_price' => 'required',
            'form_weight' => 'required',
            'form_main_image' => 'required',
        ]);
            Excel::import(new ViewEditImport, $request->file('fileView'));
            FormImport::query()->delete();
            return redirect('/view_edits?filter_option=0');

    }
    public function formImport(Request $request){

        $headings = (new HeadingRowImport)->toCollection($request->file('file'));
        foreach ( $headings as $heading){}
        $totalColumn = count($heading[0]);
        for ($a=0; $totalColumn !== $a; $a++){
            $value = json_encode($heading[0][$a]);
            $head_excel = new FormImport();
            $head_excel->head_excel = $value;
            $head_excel->save();
        }
        return redirect('/form_view')->with('success', 'Product is successfully deleted');

//
//
//
//
//

    }
    public function formView(){

        $headings = FormImport::all();
        $users = User::all();
        return view('import.formView',[
            'headings' => $headings,
            'users' => $users
            ]);
    }
    public function clearView(){
        ViewEdit::query()->where('user_id', Auth::user()->id)->getQuery()->delete();
        Aditional::query()->where('user_id', Auth::user()->id)->getQuery()->delete();
        Category::query()->where('user_id', Auth::user()->id)->getQuery()->delete();
        Option::query()->where('user_id', Auth::user()->id)->getQuery()->delete();
        return redirect('/view_edits?filter_option=0');
    }
}
