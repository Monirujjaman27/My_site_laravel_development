<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Interfaces\CrudInterface;
use App\Models\Social;

class SocialRepository implements CrudInterface{
    /**
     * gatting data from the resource.
     *
     * @return App\Http\Controllers\Api\Frontend\SocialController
     */
    public function getAll(){
        $getdata = Social::get();
        return $getdata;
    }
       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function fineById($id){
        $GetdataById = Social::find($id);
        return $GetdataById;
    }
        /**
     * newly created resource in storage.
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return App\Http\Controllers\Api\Frontend\SocialController
     */

    public function create(Request $request){

        $data = new Social;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->linkdin = $request->linkdin;
        $data->github = $request->github;
        $data->save();
        return $data;
    }
         /**
     * Store a Updated resource in storage.
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return App\Http\Controllers\Api\Frontend\SocialController
     */
 
    public function edit(Request $request, $id){
        $data = $this->fineById($id);
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->linkdin = $request->linkdin;
        $data->github = $request->github;
        $data->save();        
        return $data;

    }
   /**
     * Gat data to delete for specified resource from storage
     *
     * @param  int  $id
     * @return App\Http\Controllers\Api\Frontend\SocialController
     */
    public function delete($id){
        $data = $this->fineById($id);
        $data->delete();
        return $data;
    }
}