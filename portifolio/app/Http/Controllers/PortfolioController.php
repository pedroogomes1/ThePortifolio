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
            $patch = $request->file('imagem')->storeAs('public/portfolio', $nameStore);
            
        }else{
            $nameStore = "noImagem.png";
        }

        $db = new Portfolio;
        $db->title = $request->title;
        $db->description = $request->description;
        $db->type = $request->type;
        $db->url = $request->url;
        $db->patch = 'senai/'. $nameStore;
        $db->save();

        return view('dashboard',['x'=>"",'msg'=>"Successfully registered item !"]);
    }

    public function getPortfolioAll()
    {
        return view('dashboard',['x'=>"list",'type'=>"portfolio",'list'=> Portfolio::all()]);
    }

    public function getPortfolio(Request $request)
    {
        return view('editPortfolio', ['list'=> Portfolio::find($request->id)]);
    }

    public function updatePortfolio(Request $request)
    {
        if($request->hasFile('imagem')){
            $fileNameWithExt = $request->file('imagem')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('imagem')->getClientOriginalExtension();
            $nameStore = $fileName."_".time() . "." . $extension;
            $patch = $request->file('imagem')->storeAs('public/portfolio', $nameStore);
            $nameStore = 'senai/'.$nameStore;
        }else{
            $nameStore = $request->patch;
        }

        $db = Portfolio::find($request->id);
        $db->description = $request->description;
        $db->patch = $nameStore; 
        $db->save();
        return $this->getPortfolioAll();
    }

    public function deletePortfolio(Request $request)
    {
        $db = Portfolio::find($request->id);
        $db->delete();
        return $this->getPortfolioAll();
    }

    public function searchPortfolio(Request $request)
    {
        $db = Portfolio::where('description', 'LIKE', '%' . $request->search . '%')
               ->get();
        return view('dashboard',['x'=>"list",'type'=>'portfolio','list'=>$db]);
    }
}
