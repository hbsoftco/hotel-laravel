<?php

namespace App\Http\Controllers\Admin;

use App\Hotel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class HotelManageController extends Controller
{
    public function index()
    {
        return view('admin.create-hotel');
    }

    public function hotelList()
    {
        $hotels = Hotel::all();
        return view('admin.list-hotel',['hotels'=> $hotels]);
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

    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'address' => 'required',
        //     'description' => 'required',
        //     'star' => 'required',
        //     'room_count' => 'required',
        //     'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'number_of_floors' => 'required',
        // ]);

        $input = $request->all();

        $imageName = time() . '.' . $request->img->getClientOriginalExtension();
        $upload = $request->img->move(public_path('images/hotels'), $imageName);

        if ($upload) {
            $input['img'] = $imageName;

            $hotel = Hotel::create($input);
            return back()
                ->with('success', 'اطلاعات شما با موفقیت ثبت شد!')
                ->with('hotel', $hotel);
        }

        // //////////////////////////////

        // if ($validator->fails()) {
        //     return $this->sendError('فیلدها را درست پر کنید!', $validator->errors(), 200);
        // } else {
        //     $user = auth('api')->user();
        //     if ($user) {
        //         $input = $request->all();
        //         $input['user_id'] = $user['id'];
        //         $input['status'] = 1;

        //         $hotel = Hotel::create($input);
        //         return $this->sendResponse($hotel, '');
        //     }
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
