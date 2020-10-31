<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Interfaces\CrudInterface;
use App\Models\Skill;

class SkillRepository implements CrudInterface{
    /**
     * get data of the resource.
     * @return \skillController\data
     */
    public function getAll(){
        $getdata = Skill::get();
        return $getdata;
    }

    /**
     * get data by id of the resource.
     *  @param  int  $id
     *  @return \skillController\data
     */

    public function fineById($id){
        $GetdataById = Skill::find($id);
        return $GetdataById;
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \skillController\data
     */
    public function create(Request $request){

        $data = new Skill;
        $data->name       = ucfirst($request->name);
        $data->skillrange = $request->skillrange;
        $data->color      = $request->color;
        $data->save();
        return $data;
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \skillController\data
     */
 
    public function edit(Request $request, $id){
        $data = $this->fineById($id);
        $data->name       = ucfirst($request->name);
        $data->skillrange = $request->skillrange;
        $data->color      = $request->color;
        $data->save();        
        return $data;

    }
       /**
     * delete data by id of the resource.
     *  @param  int  $id
     *  @return \skillController\data
     */

    public function delete($id){
        $data = $this->fineById($id);
        $data->delete();
        return $data;
    }
}