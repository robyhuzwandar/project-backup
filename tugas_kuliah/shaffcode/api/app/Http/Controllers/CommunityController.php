<?php

namespace App\Http\Controllers;

use App\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
             'name'=> 'required',
            'type'=> 'required',
            'deskription'=> 'required',
            'location'=> 'required',
            'logo'=> 'required'
        ]);

        $name = $request->input('name');
        $type = $request->input('type');
        $deskription = $request->input('deskription');
        $location = $request->input('location');
        $logo = $request->input('logo');


        $community = new Community([
            'name' => $name,
            'type' => $type,
            'deskription' => $deskription,
            'location' => $location,
            'logo'=> $logo
        ]);

        if($community->save()){
            $respon = [
                'msg' => 'Community created success',
                'Community' => $community
            ];

            return response()->json($respon, '201');
        }

        $respon = [
            'msg' => 'Community created failed'
        ];

        return response()->json($respon,'401');
    }


    public function show()
    {
        $community = Community::all();

        $respone = [
            'msg' => ' show all Community',
            'Community' => $community
        ];

        return response()->json($respone, '200');
    }

    public  function showById($id){
        $community = Community::find($id);

        $respone = [
            'msg' => 'Show Community success',
            'Community' => $community
        ];

        return response()->json($respone, '200');
    }

    public function edit(Community $community)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=> 'required',
            'type'=> 'required',
            'deskription'=> 'required',
            'location'=> 'required',
            'logo'=> 'required'
        ]);

        $name = $request->input('name');
        $type = $request->input('type');
        $deskription = $request->input('deskription');
        $location = $request->input('location');
        $logo = $request->input('logo');


        $community = new Community([
            'name' => $name,
            'type' => $type,
            'deskription' => $deskription,
            'location' => $location,
            'logo'=> $logo
        ]);

        if (!$community->update()){
            return response()->json([
                'msg' => 'Updating Failed'
            ], '404');
        }

        $respone = [
            'msg' => 'Community Updated Success',
            'Community' => $community
        ];

        return response()->json($respone, '200');
    }

    public function destroy($id)
    {
        $community = Community::findOrFail($id);

        if (!$community->delete()){
            return response()->json([
                'msg' => 'Community deleting Failed'
            ], '404');
        }

        $respone = [
            'msg' => 'Community deleted'
        ];

        return response()->json($respone, '200');
    }
}
