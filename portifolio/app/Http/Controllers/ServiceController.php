<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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

        $db = new Service;
        $db->title = $request->title;
        $db->description = $request->description;
        $db->icon = $nameStore;
        $db->save();

        return view('dashboard',['msg'=>"Successfully registered item !"]);
    }
}
