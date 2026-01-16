<?php

namespace App\Http\Controllers;

use App\Models\StoreTimeModel;
use App\Models\User;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class SurveyController extends Controller
{
    public function complete(Request $request)
    {

        // return "hello";
        // return $request->all();


        $store_time = StoreTimeModel::orderby('id', 'desc')
            // ->where('pid', $request->pid)
            ->where('uid', $request->uid)
            ->first();

        $data = Survey::where('status', 'complete')
            ->where('pid', $request->pid)
            ->where('uid', $request->uid)
            ->get();
        if ($data->count() > 0) {
            $dublicate = (object)[
                'pid' => $request->pid,
                'uid' => $request->uid,
                'status' => 'complete',
                'ip' => request()->ip(),
            ];
            if ($store_time) {
                $deleteStoreTime = StoreTimeModel::find($store_time->id)->delete();
            }
            return view('home.show-result-dublicate', compact('dublicate'));
        }
        $dashboard = new Survey();
        $dashboard->status = 'complete';
        $dashboard->uid = $request->uid;
        $dashboard->pid = $request->pid;
        $dashboard->start_ip = $store_time->ip ?? $request->ip();
        $dashboard->end_ip = $request->ip();
        $dashboard->created_at = $store_time->created_at ?? now();
        $dashboard->updated_at = now();
        $dashboard->save();
        if ($store_time) {
            $deleteStoreTime = StoreTimeModel::find($store_time->id)->delete();
        }



        return Redirect::to("/complete?pid=" . $request->pid . "&uid=" . $request->uid);
    }



    public function terminate(Request $request)
    {

        $store_time = StoreTimeModel::orderby('id', 'desc')
            // ->where('pid', $request->pid)
            ->where('uid', $request->uid)
            ->first();
        $data = Survey::where('status', 'terminate')
            ->where('pid', $request->pid)
            ->where('uid', $request->uid)
            ->get();
        if ($data->count() > 0) {
            $dublicate = (object)[
                'pid' => $request->pid,
                'uid' => $request->uid,
                'status' => 'terminate',
                'ip' => request()->ip(),
            ];
            if ($store_time) {
                $deleteStoreTime = StoreTimeModel::find($store_time->id)->delete();
            }
            return view('home.show-result-dublicate', compact('dublicate'));
        }
        $dashboard = new Survey();
        $dashboard->status = 'terminate';
        $dashboard->uid = $request->uid;
        $dashboard->pid = $request->pid;
        $dashboard->start_ip = $store_time->ip ?? $request->ip();
        $dashboard->end_ip = $request->ip();
        $dashboard->created_at = $store_time->created_at ?? now();
        $dashboard->updated_at = now();
        $dashboard->save();
        if ($store_time) {
            $deleteStoreTime = StoreTimeModel::find($store_time->id)->delete();
        }
        return Redirect::to("/terminate?pid=" . $request->pid . "&uid=" . $request->uid);
    }




    public function quotafull(Request $request)
    {

        $store_time = StoreTimeModel::orderby('id', 'desc')
            // ->where('pid', $request->pid)
            ->where('uid', $request->uid)
            ->first();

        $data = Survey::where('status', 'quotafull')
            ->where('pid', $request->pid)
            ->where('uid', $request->uid)
            ->get();
        if ($data->count() > 0) {
            $dublicate = (object)[
                'pid' => $request->pid,
                'uid' => $request->uid,
                'status' => 'quotafull',
                'ip' => request()->ip(),
            ];
            if ($store_time) {
                $deleteStoreTime = StoreTimeModel::find($store_time->id)->delete();
            }
            return view('home.show-result-dublicate', compact('dublicate'));
        }
        $dashboard = new Survey();
        $dashboard->status = 'quotafull';
        $dashboard->uid = $request->uid;
        $dashboard->pid = $request->pid;
        $dashboard->start_ip = $store_time->ip ?? $request->ip();
        $dashboard->end_ip = $request->ip();
        $dashboard->created_at = $store_time->created_at ?? now();
        $dashboard->updated_at = now();
        $dashboard->save();
        if ($store_time) {
            $deleteStoreTime = StoreTimeModel::find($store_time->id)->delete();
        }

        return Redirect::to("/quotafull?pid=" . $request->pid . "&uid=" . $request->uid);
    }


    public function surveyData($page_no = 0, $status = null,  $uid = null, $pid = null, $sdate = null, $edate = null)
    {
        // return "hi";
        // Set pagination size based on $page_no
        if ($page_no == 'all') {
            $page_no = 500000;
        } elseif ($page_no == '0') {
            $page_no = 50;
        }

        $query = Survey::query();

        // Add filters conditionally
        if ($status && $status != 'null') {
            $query->where('status', $status);
        }

        if ($pid && $pid != '') {
            $query->where('pid', $pid);
        }

        if ($uid && $uid != '') {
            $query->where('uid', 'like', '%' . $uid . '%');
        }

        if ($sdate && $edate && $sdate != 'sdate' && $edate != 'edate') {
            $query->whereBetween('created_at', [$sdate, $edate]);
        }

        // Order results and paginate
        $query->orderBy('id', 'desc');
        $post = $query->paginate(intval($page_no));

        return view('admin.survey.index', compact('post', 'status', 'page_no', 'uid', 'pid', 'sdate', 'edate'));
    }



    public function changePassword()
    {

        return view('admin.password');
    }

    public function storePassword(Request $request)
    {

        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($request->password);
        $user->save();
        Auth::logout();
        return redirect('/login');
        // return Redirect("/dashboard");
    }
}
