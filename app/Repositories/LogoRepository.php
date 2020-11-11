<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Interfaces\CrudInterface;
use App\Models\Logo;
use Image;

class LogoRepository implements CrudInterface{
    /**
     * get data of the resource.
     * @return \LogoController\data
     */
    public function getAll(){
        $getdata = Logo::get();
        return $getdata;
    }

    /**
     * get data by id of the resource.
     *  @param  int  $id
     *  @return \LogoController\data
     */

    public function fineById($id){
        $GetdataById = Logo::find($id);
        return $GetdataById;
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \LogoController\data
     */
    public function create(Request $request){
        $data = new Logo;
             //  Logo 
             if($request->hasFile('logo')){
                $logo = $request->logo;
                $fileName = time().'-'.$logo->getClientoriginalName();
                $image_resize = Image::make($image)
                ->resize(100, 100)
                ->save(public_path('storage/logo/'.$fileName));
                $data->logo = $fileName;
              }
        $data->save();
        return $data;
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \LogoController\data
     */
 
    public function edit(Request $request, $id){
        $data = $this->fineById($id);
        $unlinklogo   = $data->logo;
        if($request->hasFile('logo')){
            unlink(public_path('storage/logo/'.$unlinklogo));
            $fileName = $request->logo;
            $fileName = time().'-'.$fileName->getClientoriginalName();
            $image_resize = Image::make($image)
                ->resize(100, 100)
                ->save(public_path('storage/logo/'.$fileName));
                $data->logo = $fileName;
                $data->save();
            }
             $data->save();
             return $data;
    }
       /**
     * delete data by id of the resource.
     *  @param  int  $id
     *  @return \LogoController\data
     */

    public function delete($id){
        $data = $this->fineById($id);
        $unlinklogo = $data->logo;
        unlink('public/storage/logo/'.$unlinklogo);
        $data->delete();
        return $data;
    }
}