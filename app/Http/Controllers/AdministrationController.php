<?php

namespace App\Http\Controllers;
use App\Administration;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class AdministrationController extends Controller
{
    public function index(){
        $administrations = Administration::all();
        return view('backsite/backadministration', compact('administrations'));
    }
    // public function show($id){
    //     $Administrations = Administration::all()->where('id_user',$id);
    //     $user = User::find($id);
    //     return view('backsite/showAdministration',compact('Administrations','user'));
    //}
    public function create(){
        $administrations = new Administration();
        return view('create/creadministration', compact('administrations'));
    }
    public function store(Request $request){
             $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email:rfc,dns',
            'age' => 'required|max:15',
             'img' => 'image'
            ]);
        $image=Storage::disk('public')->put('',$request->file('img'));
        $administration = new Administration();
        $administration->name = $request->input('name');
        $administration->email = $request->input('email');
        $administration->age = $request->input('age');
        $administration->img = $image;
        $administration->save();
        return redirect()->route('intro');
    }
    public function edit($id){
        $administration = Administration::find($id);
        return view('edit/editadministration', compact('administration'));
    }
    public function update(Request $request, $id){
        $image=Storage::disk('public')->put('',$request->file('img'));
        $administration = Administration::find($id);
        $administration->name = $request->input('name');
        $administration->email = $request->input('email');
        $administration->age = $request->input('age');
        $administration->img = $image;

        $administration->save();
        return redirect()->route('intro');
    }
    public function destroy($id){
        $administration = Administration::find($id);
        Storage::disk('public')->delete($administration->img);
        $administration->delete();
        return redirect()->route('intro');
    }
}
