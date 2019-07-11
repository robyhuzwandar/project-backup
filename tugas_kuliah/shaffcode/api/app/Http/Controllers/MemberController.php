<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
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
            'name' => 'required',
            'address' => 'required',
            'birtday' => 'required' ,
            'phone' => 'required',
            'email' => 'required',
            'about' => 'required',
            'photo' => 'required'
        ]);

        $name = $request->input('name');
        $address = $request->input('address');
        $birtday = $request->input('birtday');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $about = $request->input('about');
        $photo = $request->input('photo');


        $member = new Member([
            'name'=> $name,
            'address'=> $address,
            'birtday'=> $birtday,
            'phone'=> $phone,
            'email'=> $email,
            'about'=> $about,
            'photo'=> $photo
        ]);

        if($member->save()){
            $respon = [
                'msg' => 'Member created success',
                'Member' => $member
            ];

            return response()->json($respon, '201');
        }

        $respon = [
            'msg' => 'Member created failed'
        ];

        return response()->json($respon,'401');
    }


    public function show()
    {
        $member = Member::all();

        $respone = [
            'msg' => ' show all Member',
            'Member' => $member
        ];

        return response()->json($respone, '200');
    }

    public  function showById($id){
        $member = Member::find($id);

        $respone = [
            'msg' => 'Show Member success',
            'Member' => $member
        ];

        return response()->json($respone, '200');
    }

    public function edit(Member $member)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'birtday' => 'required' ,
            'phone' => 'required',
            'email' => 'required',
            'about' => 'required',
            'photo' => 'required'
        ]);

        $name = $request->input('name');
        $address = $request->input('address');
        $birtday = $request->input('birtday');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $about = $request->input('about');
        $photo = $request->input('photo');


        $member = new Member([
            'name'=> $name,
            'address'=> $address,
            'birtday'=> $birtday,
            'phone'=> $phone,
            'email'=> $email,
            'about'=> $about,
            'photo'=> $photo
        ]);

        if (!$member->update()){
            return response()->json([
                'msg' => 'Updating Failed'
            ], '404');
        }

        $respone = [
            'msg' => 'Member Updated Success',
            'Member' => $member
        ];

        return response()->json($respone, '200');
    }


    public function destroy($id)
    {
        $member = Member::findOrFail($id);

        if (!$member->delete()){
            return response()->json([
                'msg' => 'Member deleting Failed'
            ], '404');
        }

        $respone = [
            'msg' => 'Member deleted'
        ];

        return response()->json($respone, '200');
    }
}
