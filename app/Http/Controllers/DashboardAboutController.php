<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class DashboardAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Admin Dashboard',
            'about' => About::all()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('dashboard.index', [
            'about' =>$about
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
      
        $about=About::findorFail($id);

        $file=$request->file('image');                
       
        if($request->hasFile('image')){
            if(File::exists('img/'.$about->image)){
                File::delete('img/'.$about->image);
            }   
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('img/'),$imageName); 

        } else{
            $imageName=$about->image;
        }
        $about->update([
            'image' => $imageName,
            'tiket' => $request->tiket,
            'hari_buka' => $request->hari_buka,
            'jam_buka' => $request->jam_buka,
            'no_whatsapp' => $request->no_whatsapp,
            'email' => $request->email,
            'about' => $request->about,
        ]);
        return redirect('dashboard/about')->with('success', 'Data Berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
