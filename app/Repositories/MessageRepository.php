<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Interfaces\CrudInterface;
use App\Models\Category;

class CategoryRepository implements CrudInterface{

    public function getAll(){
        $getdata = Category::get();
        return $getdata;
    }

    public function fineById($id){
        $GetdataById = Category::find($id);
        return $GetdataById;

    }

    public function create(Request $request){

        $data = new Category;
        $data->name = ucfirst($request->name);
        $data->description = ucfirst($request->description);
        $data->save();
        return $data;
    }
 
    public function edit(Request $request, $id){
        $data = $this->fineById($id);
        $data->name = ucfirst($request->name);
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