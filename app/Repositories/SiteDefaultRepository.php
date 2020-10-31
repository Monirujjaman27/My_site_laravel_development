<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Interfaces\CrudInterface;
use App\Models\Sitedefault;
use Image;

class SiteDefaultRepository implements CrudInterface{
    /**
     * get data of the resource.
     * @return \SitedefaultController\data
     */
    public function getAll(){
        $getdata = Sitedefault::get();
        return $getdata;
    }

    /**
     * get data by id of the resource.
     *  @param  int  $id
     *  @return \SitedefaultController\data
     */

    public function fineById($id){
        $GetdataById = Sitedefault::find($id);
        return $GetdataById;
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \SitedefaultController\data
     */
    public function create(Request $request){
        $data = new Sitedefault;
        $data->site_title   = ucfirst($request->site_title);
        $data->site_about   = ucfirst($request->site_about);
        $data->businessmail = $request->businessmail;
        $data->address      = $request->address;
        $data->phone        = $request->phone;
        // image 
        if($request->hasFile('favicon')){
            $image = $request->favicon;
            $fileName = time().'-'.$image->getClientoriginalName();
            $image_resize = Image::make($image)
                ->resize(100, 100)
                ->save(public_path('storage/sitedefault/'.$fileName));
                $data->favicon = $fileName;
             }
        $data->save();
        return $data;
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \SitedefaultController\data
     */
 
    public function edit(Request $request, $id){
        $data = new Sitedefault;
        $data->site_title   = ucfirst($request->site_title);
        $data->site_about   = ucfirst($request->site_about);
        $data->businessmail = $request->businessmail;
        $data->address      = $request->address;
        $data->phone        = $request->phone;

        $unlinkfaviconName  = $data->favicon;
        // image
        if($request->hasFile('favicon')){
            unlink(public_path('storage/sitedefault/'.$unlinklogoName));
            $favicon = $request->favicon;
            $fileName = time().'-'.$favicon->getClientoriginalName();
            $image_resize = Image::make($favicon)
                ->resize(100, 100)
                ->save(public_path('storage/sitedefault/'.$fileName));
                $data->favicon = $fileName;
             }
             $data->save();
             return $data;
    }
       /**
     * delete data by id of the resource.
     *  @param  int  $id
     *  @return \SitedefaultController\data
     */

    public function delete($id){
        $data = $this->fineById($id);
        $unlinkImgName = $data->favicon;
        unlink(public_path('storage/sitedefault/'.$unlinkImgName));
        $data->delete();
        return $data;
    }
}