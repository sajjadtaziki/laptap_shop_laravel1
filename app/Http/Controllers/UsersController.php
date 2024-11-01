<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserInfoReguest;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function SayHello()
    {
        return 'Hello';
    }

    public function store(UserInfoReguest $UserInfoReguest)
    {
        $User = User::create($UserInfoReguest->all());
        if ($UserInfoReguest->hasFile('pitcher'))
        {
            $pitcherUrl = Storage::putFile('article', $UserInfoReguest->pitcher);
            $User->update([ 'pitcherUrl'=>$pitcherUrl
                ]);
        }
        return response()->json([
            "message"=>"کاربر با موفقیت ثبت گردید",
            "deta"=>new UserResource(  $User)
        ],200);
    }

    public function show($id)
    {
        $User = User::find($id);
        if ($User == null)
        {
            return response()->json(
                [
                    'message' => "کاربر مورد نظر یافت نشد",
                ],
                404
            );
        }
        else
        {
            return response()->json([
                "message" => "کاربر مورد نظر یافت شد",
                "data" => new UserResource($User)
            ]);
        }
    }

    public function show_list()
    {
        $Users = User::simplePaginate(1); // اصلاح شده برای استفاده از مدل User

        if ($Users->isEmpty())
        {
            return response()->json(
                [
                    'message' => "کاربری وجود ندارد",
                ],
                404
            );
        }
        else
        {
            return response()->json([
                "message" => "لیست کاربران",
                "data" => UserResource::collection($Users) // استفاده از UserResource::collection
            ]);
        }
    }
}
