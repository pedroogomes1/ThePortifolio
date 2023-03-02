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
            $patch = $request->file('imagem')->storeAs('public/icon', $nameStore);
            
        }else{
            $nameStore = "noImagem.png";
        }

        $db = new Service;
        $db->title = $request->title;
        $db->description = $request->description;
        $db->icon = 'senai/'. $nameStore;
        $db->save();

        return view('dashboard',['x'=>"",'msg'=>"Successfully registered item !"]);
    }

    public function getServicesAll()
    {
        return view('dashboard',['x'=>"list",'type'=>"service",'list'=> Service::all()]);
    }

    public function getService(Request $request)
    {
        return view('editService', ['list'=> Service::find($request->id)]);
    }

    public function updateService(Request $request)
    {
        if($request->hasFile('imagem')){
            $fileNameWithExt = $request->file('imagem')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('imagem')->getClientOriginalExtension();
            $nameStore = $fileName."_".time() . "." . $extension;
            $patch = $request->file('imagem')->storeAs('public/icon', $nameStore);
            $nameStore = 'senai/'.$nameStore;
        }else{
            $nameStore = $request->patch;
        }

        $db = Service::find($request->id);
        
        $db->description = $request->description;
        $db->icon = $nameStore; 
        $db->save();
        return $this->getServicesAll();
    }

    public function deleteService(Request $request)
    {
        $db = Service::find($request->id);
        $db->delete();
        return $this->getServicesAll();
    }

    public function searchService(Request $request)
    {
        $db = Service::where('description', 'LIKE', '%' . $request->search . '%')
               ->get();
        return view('dashboard',['x'=>"list",'type'=>'service','list'=>$db]);
    }
}
