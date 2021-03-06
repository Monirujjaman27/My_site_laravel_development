<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Interfaces\CrudInterface;
use App\Models\Code;

class CodeRepository implements CrudInterface{

    public function getAll(){
        $getdata = Code::get();
        return $getdata;
    }

    public function fineById($id){
        $GetdataById = Code::find($id);
        return $GetdataById;

    }

    public function create(Request $request){

        $data = new Code;
        $data->title = ucfirst($request->title);
        $data->description = ucfirst($request->description);
        $data->save();
        return $data;
    }
 
    public function edit(Request $request, $id){
        $data = $this->fineById($id);
        $data->title = ucfirst($request->title);
        $data->description = ucfirst($request->description);
        $data->save();        
        return $data;

    }

    public function delete($id){
        $data = $this->fineById($id);
        $data->delete();
        return $data;
    }
}