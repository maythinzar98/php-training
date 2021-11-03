<?php

namespace App\Http\Controllers;

use App\Contracts\Dao\Shoes\ShoesInterface;
use App\Models\Shoes;
use Illuminate\Http\Request;
use App\Http\Requests\ShoesStoreRequest;

class ShoesController extends Controller
{
    public function __construct(ShoesInterface $ShoesInterface)
    {
        $this->ShoesInterface = $ShoesInterface;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ShowShoesTable()
    {
        $data = Shoes::latest()->paginate(5);
        return view('Shoes.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Shoes.ShoesCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShoesStoreRequest $request)
    {
        $validated = $request->validated();
        //$store = $this->ShoesInterface->store($validated);
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'image'=> $new_name,
            'name' => $request->name,
            'brand_name' => $request->brand_name,
            'code' => $request->code,
            'color' => $request->color,
            'size' => $request->size,
            'price' => $request->price
        );

        Shoes::create($form_data);
        return redirect()
                ->route('Shoes.index')
                ->with('success','Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showShoesDetail($id)
    {
        $data = $this->ShoesInterface->selectShoes($id);
        return view('Shoes.ShoesView',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ShoesEdit($id)
    {
        $data = $this->ShoesInterface->selectShoes($id);
        return view('Shoes.ShoesUpdate',compact('data'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != ''){
            $request->validate([
            'image' => 'required|image|max:2048',
            'name' => 'required',
            'brand_name' => 'required',
            'code' => 'required',
            'color' => 'required',
            'size' => 'required',
            'price' => 'required'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else{
            $request->validate([
                'name' => 'required',
                'brand_name' => 'required',
                'code' => 'required',
                'color' => 'required',
                'size' => 'required',
                'price' => 'required'
            ]);
        }
        $form_data = array(
            'image' => $image_name,
            'name' => $request->name,
            'brand_name' => $request->brand_name,
            'code' => $request->code,
            'color' => $request->color,
            'size' => $request->size,
            'price' => $request->price
        );
        Shoes::whereId($id)->update($form_data);
        return redirect()
            ->route('Shoes.index')
            ->with('success','Data updated successfully');
    }

    /**
     * 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteShoes($id)
    {
        $this->ShoesInterface->deleteShoes($id);
        return redirect()
        ->route('Shoes.index')
        ->with('success', 'Data is successfully deleted');
    }

}