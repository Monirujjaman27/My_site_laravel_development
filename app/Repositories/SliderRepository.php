<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Interfaces\CrudInterface;
use App\Models\Slider;
use Image;

class SliderRepository implements CrudInterface{
    /**
     * gatting data from the resource.
     *
     * @return App\Http\Controllers\Api\Frontend\SliderController
     */
    public function getAll(){
        $getdata = Slider::get();
        return $getdata;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function fineById($id){
        $GetdataById = Slider::find($id);
        return $GetdataById;
    }
      /**
     * newly created resource in storage.
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return App\Http\Controllers\Api\Frontend\SliderController
     */
    public function create(Request $request){
        $data = new Slider;
        $data->title       = ucfirst($request->title);
        $data->subtitle    = ucfirst($request->subtitle);
        $data->counter     = $request->counter;
        $data->counterText = ucfirst($request->counterText);
        $data->buttonName  = $request->buttonName;
        $data->buttonUrl   = $request->buttonUrl;

         if($request->hasFile('sliderbg')){
            $image = $request->sliderbg;
            $fileName = time().'.'.$image->getClientoriginalExtension();
            $image_resize = Image::make($image)
                ->resize(450, 300)
                ->save(public_path('storage/slider/'.$fileName));
                $data->sliderbg = $fileName;
                $data->save();
         }
         
        $data->save();
        return $data;

    }
       /**
     * Store a Updated resource in storage.
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return App\Http\Controllers\Api\Frontend\SliderController
     */
    public function edit(Request $request, $id){
        $data = $this->fineById($id);
        $data->title    = ucfirst($request->title);
        $data->subtitle = ucfirst($request->subtitle);
        $data->counter  = $request->counter;
        $data->counterText = ucfirst($request->counterText);
        $data->buttonName  = $request->buttonName;
        $data->buttonUrl   = $request->buttonUrl;
        
        $unlinkImgName  = $data->sliderbg;
        if($request->hasFile('sliderbg')){
            unlink(public_path('storage/slider/'.$unlinkImgName));
            $image = $request->sliderbg;
            $fileName = time().'.'.$image->getClientoriginalExtension();
            $image_resize = Image::make($image)
                ->resize(450, 300)
                ->save(public_path('storage/slider/'.$fileName));
                $data->sliderbg = $fileName;
                $data->save();
             }
             $data->save();
             return $data;

    }
      /**
     * Gat data to delete for specified resource from storage
     *
     * @param  int  $id
     * @return App\Http\Controllers\Api\Frontend\SliderController
     */
    public function delete($id){
        $data = $this->fineById($id);
        $unlinkImgName = $data->sliderbg;
        unlink(public_path('storage/slider/'.$unlinkImgName));
        $data->delete();
        return $data;
    }
}