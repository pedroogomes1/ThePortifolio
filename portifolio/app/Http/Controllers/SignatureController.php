<?php

namespace App\Http\Controllers;

use App\Models\Signature;
use Illuminate\Http\Request;

class SignatureController extends Controller
{
    public function create(Request $request)

    {
           
        if($request->hasFile('imagem')){
            $fileNameWithExt = $request->file('imagem')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('imagem')->getClientOriginalExtension();
            $nameStore = $fileName."_".time() . "." . $extension;
            $patch = $request->file('imagem')->storeAs('public/signatures', $nameStore);
            
        }else{
            $nameStore = "noImagem.png";
        }

        $db = new Signature;
        $db->description = $request->description;
        $db->type = $request->type;
        $db->payament_type = $request->payamentType;
        $db->price = $request->price;
        $db->icon = 'signatures/'. $nameStore;
        $db->save();

        return view('dashboard',['x'=>"",'msg'=>"Successfully registered item !"]);
    }

    public function getSignatureAll()
    {
        return view('dashboard',['x'=>"list",'type'=>"signature",'list'=> Signature::all()]);
    }

    public function getSignature(Request $request)
    {
        return view('editSignature', ['list'=> Signature::find($request->id)]);
    }

    public function updateSignature(Request $request)
    {
        if($request->hasFile('imagem')){
            $fileNameWithExt = $request->file('imagem')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('imagem')->getClientOriginalExtension();
            $nameStore = $fileName."_".time() . "." . $extension;
            $patch = $request->file('imagem')->storeAs('public/signatures', $nameStore);
            $nameStore = 'signatures/'.$nameStore;
        }else{
            $nameStore = $request->patch;
        }

        $db = Signature::find($request->id);
        $db->description = $request->description;
        $db->patch = $nameStore; 
        $db->save();
        return $this->getSignatureAll();
    }

    public function deleteSignature(Request $request)
    {
        $db = Signature::find($request->id);
        $db->delete();
        return $this->getSignatureAll();
    }

    public function searchSignature(Request $request)
    {
        $db = Signature::where('description', 'LIKE', '%' . $request->search . '%')
               ->get();
        return view('dashboard',['x'=>"list",'type'=>'signature','list'=>$db]);
    }
}

?>