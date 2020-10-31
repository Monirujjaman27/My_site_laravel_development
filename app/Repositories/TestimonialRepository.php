<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Interfaces\CrudInterface;
use App\Models\Testimonial;
use Image;

class TestimonialRepository implements CrudInterface{
    /**
     * get data of the resource.
     * @return \TestimonialController\data
     */
    public function getAll(){
        $getdata = Testimonial::get();
        return $getdata;
    }

    /**
     * get data by id of the resource.
     *  @param  int  $id
     *  @return \TestimonialController\data
     */

    public function fineById($id){
        $GetdataById = Testimonial::find($id);
        return $GetdataById;
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \TestimonialController\data
     */
    public function create(Request $request){

        $data = new Testimonial;
        $data->clientName  = ucfirst($request->clientName);
        $data->description = ucfirst($request->description);
        $data->label       = ucfirst($request->label);
        $data->rating      = $request->rating;

        if($request->hasFile('image')){
            $image = $request->image;
            $fileName = time().'-'.$image->getClientoriginalName();
            $image_resize = Image::make($image)
                ->resize(100, 100)
                ->save(public_path('storage/testimonial/'.$fileName));
                $data->image = $fileName;
                $data->save();
             }
             $data->save();
             return $data;
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \TestimonialController\data
     */
 
    public function edit(Request $request, $id){
        $data = $this->fineById($id);
        $data->clientName  = ucfirst($request->clientName);
        $data->description = ucfirst($request->description);
        $data->label       = ucfirst($request->label);
        $data->rating      = $request->rating;
        
          
        $unlinkImgName  = $data->image;
        if($request->hasFile('image')){
            unlink(public_path('storage/testimonial/'.$unlinkImgName));
            $image = $request->image;
            $fileName = time().'-'.$image->getClientoriginalName();
            $image_resize = Image::make($image)
                ->resize(100, 100)
                ->save(public_path('storage/testimonial/'.$fileName));
                $data->image = $fileName;
                $data->save();
             }
             $data->save();
             return $data;
    }
       /**
     * delete data by id of the resource.
     *  @param  int  $id
     *  @return \TestimonialController\data
     */

    public function delete($id){
        $data = $this->fineById($id);
        $unlinkImgName = $data->image;
        unlink(public_path('storage/testimonial/'.$unlinkImgName));
        $data->delete();
        return $data;
    }
}