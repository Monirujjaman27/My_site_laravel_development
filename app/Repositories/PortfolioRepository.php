<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Interfaces\CrudInterface;
use App\Models\Portfolio;
use Image;

class PortfolioRepository implements CrudInterface{
    /**
     * get data of the resource.
     * @return \PortfolioController\data
     */
    public function getAll(){
        $getdata = Portfolio::get();
        return $getdata;
    }

    /**
     * get data by id of the resource.
     *  @param  int  $id
     *  @return \PortfolioController\data
     */

    public function fineById($id){
        $GetdataById = Portfolio::find($id);
        return $GetdataById;
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \PortfolioController\data
     */
    public function create(Request $request){
        $data = new Portfolio;
        $data->title       = ucfirst($request->title);
        $data->description = ucfirst($request->description);
        $data->category_id = $request->category_id;
        // image 
        if($request->hasFile('image')){
            $image = $request->image;
            $fileName = time().'-'.$image->getClientoriginalName();
            $image_resize = Image::make($image)
                ->resize(250, 300)
                ->save(public_path('storage/portfolio/'.$fileName));
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
     * @return \PortfolioController\data
     */
 
    public function edit(Request $request, $id){
        $data = new Portfolio;
        $data->title  = ucfirst($request->title);
        $data->description = ucfirst($request->description);
        $data->category_id = $request->category_id;

        $unlinkImgName  = $data->image;
        // image
        if($request->hasFile('image')){
            unlink(public_path('storage/portfolio/'.$unlinkImgName));
            $image = $request->image;
            $fileName = time().'-'.$image->getClientoriginalName();
            $image_resize = Image::make($image)
                ->resize(250, 300)
                ->save(public_path('storage/portfolio/'.$fileName));
                $data->image = $fileName;
             }
             $data->save();
             return $data;
    }
       /**
     * delete data by id of the resource.
     *  @param  int  $id
     *  @return \PortfolioController\data
     */

    public function delete($id){
        $data = $this->fineById($id);
        $unlinkImgName = $data->image;
        unlink(public_path('storage/portfolio/'.$unlinkImgName));
        $data->delete();
        return $data;
    }
}