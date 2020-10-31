<?php

namespace App\Http\Controllers\Api\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\SiteDefaultRepository;
use Illuminate\Support\Facades\Validator;

class SiteDefaultController extends Controller
{

    public $dataRepository;
    public function __construct(SiteDefaultRepository $dataRepository)
    {
        $this->dataRepository = $dataRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->dataRepository->getAll();
        return response()->json([
            'success' => true,
            'message' => 'Get Data',
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData = $request->all();
        $validator = Validator::make($formData,[
            'site_title'   => 'required', 
            'site_about'   => 'required', 
            'favicon'       => 'required', 
            'businessmail' => 'required|email', 
            'address'      => 'required', 
            'phone'        => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10', 
        ]);
        if($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => $validator->getMessageBag()->first(),
                'errors' => $validator->getMessageBag(),
            ]);
        }
        $storeData = $this->dataRepository->create($request);
        return response()->json([
            'success' => true ,
            'message' => 'Insert Success',
            'data' => $storeData,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataById = $this->dataRepository->fineById($id);
        if(is_null($dataById)){
            return response()->json([
                'success' => false,
                'message' => 'Not Found',
                'data' => null,
            ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'details',
            'data' => $dataById,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataId = $this->dataRepository->fineById($id);
        if(is_null($dataId)){
            return response('data Not found');
        }
        $formData = $request->all();
        $validator = Validator::make($formData, [
            'site_title'   => 'required', 
            'site_about'   => 'required', 
            'favicon'      => 'mimes:png,jpg,gif,svg', 
            'businessmail' => 'required|email', 
            'address'      => 'required', 
            'phone'        => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ]);
        if($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => $validator->getMessageBag()->first(),
                'errors' => $validator->getMessageBag(),
            ]);
        }
        
        $upadateData = $this->dataRepository->edit($request, $id);
        return response()->json([
            'success' => true,  
            'message' => 'Update Successfully',  
            'data' =>$upadateData,  
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $dataById = $this->dataRepository->fineById($id);
        if(is_null($dataById)){
            return response()->json([
                'success' => false,
                'message' => 'Not Found',
                'data' => null,
            ]);
        }
        $delData = $this->dataRepository->delete($id);
        return response()->json([
            'success' => true,
            'message' => 'Delete Successfully',
        ]);

    }
}