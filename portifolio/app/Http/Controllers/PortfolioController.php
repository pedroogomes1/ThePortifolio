<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    
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

        $db = new Portfolio;
        $db->title = $request->title;
        $db->description = $request->description;
        $db->type = $request->type;
        $db->url = $request->url;
        $db->patch = $nameStore;
        $db->save();
        //Rever este codigo com o Igor

        return view('dashboard',['msg'=>"Successfully registered item !"]);
    }
}
