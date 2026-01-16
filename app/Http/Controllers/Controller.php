<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function imgUpload($img, $path, $find = null)
    {
        if ($find) {
            File::delete(public_path($find));
        }
        $img_name = $path . time() . "." . $img->getClientOriginalExtension();
        $img->move($path, $img_name);
        return $img_name;
    }

    function redirectWithMessage($route, $type = 'success', $message = 'Completed successfully!')
    {
        return redirect($route)->with($type, $message);
    }

    function convertIntoText($hash)
    {
        return $id = Crypt::decrypt($hash);
    }
    function passwordConvertIntoHash($password)
    {
        return $password = Hash::make($password);
    }

    public function toggleIsActiveStaus(Request $request, $model)
    {
        $data = $model::find($request->edit_id);
        $data->is_active = $request->is_active;
        $data->save();
    }

    protected function deleteStatus(Request $request, $model)
    {
        $item = $model::find($request->edit_id);

        $item->delete();
        return response()->json(['status' => 201]);
    }


}
