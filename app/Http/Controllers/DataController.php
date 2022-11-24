<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(Request $req , $id = null)
    {
        if ($id != null) {
            $data = Data::find($id);
            $data->name = $req->name;
            $data->email = $req->email;
            $data->save();
            return redirect('/home');
        }
        else{
            $data = new Data();
            $data->name = $req->name;
            $data->email = $req->email;
            $data->save();
            return redirect('/home');
        }
    }
    public function edit($id)
    {
      $data = Data::find($id);
      return view('edit',compact(['data'=>'data']));
    }
    public function del($id)
    {
        $data = Data::find($id);
        $data->delete();
        return redirect('/home');
    }
}
