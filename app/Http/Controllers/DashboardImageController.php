<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\wahana;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class DashboardImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.image.index', [
            'image' => Image::all(),
            'wahana' => wahana::all()
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.image.create', [
            'wahana' => wahana::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->file('name')->store('wahana-images');

        // $validateData = $request->validate([
        //     'wahana_id' => 'required',
        //     'image' => 'image|file'
        // ]);

        // if($request->file('image')){
        //     $validatedData['image'] = $request->file('image')->store('images');
        // }

        // Image::create($validateData);
        
      
      $this->validate($request, [
        'wahana_id' => 'required',
        // 'image' => 'required|image|mimes:jpg,jpeg,png,gif'
      ]);

      $file=$request->file('image');
      
      foreach($file as $item){
          $imageName=time().'_'.$item->getClientOriginalName();
          $item->move(\public_path('images/'),$imageName); 


          Image::create([
              'wahana_id' => $request->wahana_id,
              'image' => $imageName
          ]);

      }

    //   $file_name = $request->image->getClientOriginalName();
    //   $image = $request->image->storeAs('images', $file_name);
      

        return redirect('/dashboard/image')->with('success', 'Gambar berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $images=Image::findorFail($id);
        if(File::exists('images/'.$images->image)){
            File::delete('images/'. $images->image);
        }
        $images->delete();
        return redirect('/dashboard/image')->with('success', 'gambar Berhasil Dihapus');
    }
}
