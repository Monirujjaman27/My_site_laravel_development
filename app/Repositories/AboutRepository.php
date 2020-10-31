<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Interfaces\CrudInterface;
use App\Models\About;
use Image;

class AboutRepository implements CrudInterface{
    /**
     * get data of the resource.
     * @return \AboutController\data
     */
    public function getAll(){
        $getdata = About::get();
        return $getdata;
    }

    /**
     * get data by id of the resource.
     *  @param  int  $id
     *  @return \AboutController\data
     */

    public function fineById($id){
        $GetdataById = About::find($id);
        return $GetdataById;
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \AboutController\data
     */
    public function create(Request $request){
        $data = new About;
        $data->name  = ucfirst($request->name);
        $data->description = ucfirst($request->description);
        // image 
        if($request->hasFile('image')){
            $image = $request->image;
            $fileName = time().'.'.$image->getClientoriginalName();
            $image_resize = Image::make($image)
                ->resize(300, 350)
                ->save(public_path('storage/about/'.$fileName));
                $data->image = $fileName;
             }
        $data->save();
        return $data;
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \AboutController\data
     */
 
    public function edit(Request $request, $id){
        $data = $this->fineById($id);
        $data->name  = ucfirst($request->name);
        $data->description = ucfirst($request->description);
        
          
        $unlinkImgName  = $data->image;

        // image
        if($request->hasFile('image')){
            unlink(public_path('storage/about/'.$unlinkImgName));
            $image = $request->image;
            $fileName = time().'.'.$image->getClientoriginalExtension();
            $image_resize = Image::make($image)
                ->resize(300, 300)
                ->save(public_path('storage/about/'.$fileName));
                $data->image = $fileName;
             }
             $data->save();
             return $data;
    }
       /**
     * delete data by id of the resource.
     *  @param  int  $id
     *  @return \AboutController\data
     */

    public function delete($id){
        $data = $this->fineById($id);
        $unlinkImgName = $data->image;
        unlink(public_path('storage/about/'.$unlinkImgName));
        $data->delete();
        return $data;
    }
}