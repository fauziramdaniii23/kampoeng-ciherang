<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\wahana;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class DashboardWahanaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wahana=wahana::all();
        return view('dashboard.wahana.index')->with('wahana',$wahana);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.wahana.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required | max:255',
            'cover' => 'required|mimes:jpg,jpeg,png,gif',
            // 'images' => 'required',
            'body' => 'required'
        ]);
        if($request->hasFile('cover')){
            $file=$request->file('cover');
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('cover/'),$imageName);

            $wahana=new wahana([
                'name' => $request->name,
                'excerpt' => Str::limit(strip_tags($request->body), 100, '...'),
                'cover' => $imageName,
                'body' => $request->body,
                ]);

            $wahana->save();
        }

        if($request->hasFile('images')){
            $files=$request->file('images');
            
            foreach ($files as $file) {
                $imageName=time().'_'.$file->getClientOriginalName();
               
                $request['wahana_id']=$wahana->id;
                $request['image']=$imageName;
                $file->move(\public_path('/images'),$imageName);
                Image::create($request->all());
            }
        }
        // $validatedData = $request->validate([
        //     'name' => 'required | max:255',
        //     'cover' => 'image|file',
        //     'body' => 'required'
        // ]);

        // if($request->file('cover')){
        //     $validatedData['cover'] = $request->file('cover')->store('wahana-images');
        // }
        // $validatedData['excerpt'] =Str::limit(strip_tags($request->body), 100, '...');

        // wahana::create($validatedData);

        return redirect('/dashboard/wahana')->with('success', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(wahana $wahana)
    {
        return view('dashboard.wahana.show', [
            'wahana' => $wahana
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(wahana $wahana)
    {
        
        return view('dashboard.wahana.edit', [
            'wahana' =>$wahana
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $wahana=wahana::findorFail($id);

        $file=$request->file('cover');                
       
        if($request->hasFile('cover')){
            if(File::exists('cover/'.$wahana->cover)){
                File::delete('cover/'.$wahana->cover);
            }   
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('cover/'),$imageName); 

        } else{
            $imageName=$wahana->cover;
        }
        $wahana->update([
            'name' => $request->name,
            'excerpt' => Str::limit(strip_tags($request->body), 100, '...'),
            'cover' => $imageName,
            'body' => $request->body,
        ]);
            // wahana::where('id', $wahana->id)->update($validatedData);
            // $wahana->save();
        return redirect('/dashboard/wahana')->with('success', 'Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $wahana=wahana::findorFail($id);

        if(File::exists('cover/'.$wahana->cover)){
            File::delete('cover/'.$wahana->cover);
        }

        $images=Image::where('wahana_id',$wahana->id)->get();
        foreach($images as $image){
            if(File::exists('images/'.$image->image)){
                File::delete('images/'. $image->image);
              
            }
            $images=Image::where('wahana_id',$wahana->id)->delete();
        }
        $wahana->delete();
        return back();
        // wahana::destroy($wahana->id);
        // return redirect('/dashboard/wahana')->with('success', 'Data berhasil dihapus');
    }
  
}