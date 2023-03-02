<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    //
    public function create(Request $request)

    {
           
        if($request->hasFile('imagem')){
            $fileNameWithExt = $request->file('imagem')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('imagem')->getClientOriginalExtension();
            $nameStore = $fileName."_".time() . "." . $extension;
            $patch = $request->file('imagem')->storeAs('public/senai', $nameStore);
            
        }else{
            $nameStore = "noImagem.png";
        }

        $db = new About;
        $db->description = $request->description;
        $db->patch = 'senai/'. $nameStore;
        $db->save();

        return view('dashboard',['x'=>"",'msg'=>"Successfully registered item !"]);
    }

    public function getAboutAll()
    {
        return view('dashboard',['x'=>"list",'type'=>"about",'list'=> About::all()]);
    }

    public function getAbout(Request $request)
    {
        return view('editAbout', ['list'=> About::find($request->id)]);
    }

    public function updateAbout(Request $request)
    {
        if($request->hasFile('imagem')){
            $fileNameWithExt = $request->file('imagem')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('imagem')->getClientOriginalExtension();
            $nameStore = $fileName."_".time() . "." . $extension;
            $patch = $request->file('imagem')->storeAs('public/senai', $nameStore);
            $nameStore = 'senai/'.$nameStore;
        }else{
            $nameStore = $request->patch;
        }

        $db = About::find($request->id);
        $db->description = $request->description;
        $db->patch = $nameStore; 
        $db->save();
        return $this->getAboutAll();
    }

    public function deleteAbout(Request $request)
    {
        $db = About::find($request->id);
        $db->delete();
        return $this->getAboutAll();
    }

    public function searchAbout(Request $request)
    {
        $db = About::where('description', 'LIKE', '%' . $request->search . '%')
               ->get();
        return view('dashboard',['x'=>"list",'type'=>'about','list'=>$db]);
    }

}