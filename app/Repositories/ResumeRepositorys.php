<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Interfaces\CrudInterface;
use App\Models\Resume;

class ResumeRepositorys implements CrudInterface{
    /**
     * get data of the resource.
     * @return \ResumeController\data
     */
    public function getAll(){
        $getdata = Resume::get();
        return $getdata;
    }

    /**
     * get data by id of the resource.
     *  @param  int  $id
     *  @return \ResumeController\data
     */

    public function fineById($id){
        $GetdataById = Resume::find($id);
        return $GetdataById;
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \ResumeController\data
     */
    public function create(Request $request){
        $data = new Resume;
             //  resume 
             if($request->hasFile('resume')){
                $resume = $request->resume;
                $resumeName = time().'-'.$resume->getClientoriginalName();
                $resume->move('public/storage/resume/', $resumeName);
                $data->resume = $resumeName;
              }
        $data->save();
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \ResumeController\data
     */
 
    public function edit(Request $request, $id){
        $data = $this->fineById($id);
        $unlinkresume   = $data->resume;

        if($request->hasFile('resume')){
            unlink(public_path('storage/Resume/'.$unlinkresume));
            $resume = $request->resume;
            $resumeName = time().'-'.$resume->getClientoriginalName();
            $resume->move('public/storage/resume/',$resumeName);
            $data->resume = $resumeName;
          }
             $data->save();
             return $data;
    }
       /**
     * delete data by id of the resource.
     *  @param  int  $id
     *  @return \ResumeController\data
     */

    public function delete($id){
        $data = $this->fineById($id);
        $unlinkresume = $data->resume;
        unlink('public/storage/resume/'.$unlinkresume);
        $data->delete();
        return $data;
    }
}