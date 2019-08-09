<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Herb;
use DB;
use App\Spa;
use App\Docter;
use Validator;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/dashboard');
    }

    // DOCTER---------------------------------
    public function docter()
    {
        $docter = DB::table('docter')
            ->orderBy('docter.id', 'asc')
            ->paginate(15);
        return view('admin.docter.docter', compact('docter'));
    }
    public function add_docter()
    {
        return view('admin.docter.add');
    }
    public function add_docter_store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'history' => 'nullable',
            'disease' => 'nullable',
            'age' => 'nullable',
            'address' => 'required',
            'subdis' => 'required',
            'district' => 'required',
            'province' => 'required',
            'price' => 'required',
            'worktime_start' => 'nullable',
            'worktime_stop' => 'nullable',
            'image' => 'nullable',
        ]);

        $images = array();
        if (!$request->image == null) {
            if ($files = $request->file('image')) {
                foreach ($files as $file) {
                    $name = $file->getClientOriginalName();
                    $file->move('image', $name);
                    $images[] = $name;
                }
            }
            // $path = $request->file('image')->store('public/image');
            // $sub = str_replace("public","storage" , $path);

            Docter::create([
                'name' => $request['name'],
                'history' => $request['history'],
                'disease' => $request['disease'],
                'age' => $request['age'],
                'address' => $request['address'],
                'subdis' => $request['subdis'],
                'district' => $request['district'],
                'province' => $request['province'],
                'price' => $request['price'],
                'worktime_start' => $request['worktime_start'],
                'worktime_stop' => $request['worktime_stop'],
                'image' => implode("|", $images),
            ]);
        } else {
            Docter::create([
                'name' => $request['name'],
                'history' => $request['history'],
                'disease' => $request['disease'],
                'age' => $request['age'],
                'address' => $request['address'],
                'subdis' => $request['subdis'],
                'district' => $request['district'],
                'province' => $request['province'],
                'price' => $request['price'],
                'worktime_start' => $request['worktime_start'],
                'worktime_stop' => $request['worktime_stop'],
            ]);
        }

        return redirect('admin/docter-dashboard')->with('add', 'เพิ่มข้อมูลหมอสำเร็จ');
    }
    public function edit_docter($id)
    {
        $docter = DB::table('docter')
            ->where('docter.id', '=', $id)->first();
        return view('admin.docter.edit', compact('docter'));
    }
    public function edit_docter_store(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'history' => 'nullable',
            'disease' => 'nullable',
            'age' => 'nullable',
            'address' => 'required',
            'subdis' => 'required',
            'district' => 'required',
            'province' => 'required',
            'price' => 'required',
            'worktime_start' => 'nullable',
            'worktime_stop' => 'nullable',
            'image' => 'nullable',
        ]);

        $images = array();
        if (!$request->image == null) {
            if ($files = $request->file('image')) {
                foreach ($files as $file) {
                    $name = $file->getClientOriginalName();
                    $file->move('image', $name);
                    $images[] = $name;
                }
            }
            // $path = $request->file('image')->store('public/image');
            // $sub = str_replace("public", "storage", $path);

            DB::table('docter')
                ->where('docter.id', $id)
                ->update([
                    'name' => $request['name'],
                    'history' => $request['history'],
                    'disease' => $request['disease'],
                    'age' => $request['age'],
                    'address' => $request['address'],
                    'subdis' => $request['subdis'],
                    'district' => $request['district'],
                    'province' => $request['province'],
                    'price' => $request['price'],
                    'worktime_start' => $request['worktime_start'],
                    'worktime_stop' => $request['worktime_stop'],
                    'image' => implode("|", $images),
                ]);
        } else {
            DB::table('docter')
                ->where('docter.id', $id)
                ->update([
                    'name' => $request['name'],
                    'history' => $request['history'],
                    'disease' => $request['disease'],
                    'age' => $request['age'],
                    'address' => $request['address'],
                    'subdis' => $request['subdis'],
                    'district' => $request['district'],
                    'province' => $request['province'],
                    'price' => $request['price'],
                    'worktime_start' => $request['worktime_start'],
                    'worktime_stop' => $request['worktime_stop'],
                ]);
        }

        return redirect('admin/docter-dashboard')->with('update', 'แก้ไขข้อมูลสำเร็จ');
    }
    public function view_docter($id)
    {
        $docter = DB::table('docter')
            ->where('docter.id', '=', $id)->first();
        $images = DB::table('docter')
            ->select('image')
            ->where('docter.id', '=', $id)->first();
        foreach ($images as $fileString) {
            // now we have one single file record
            $imagesArray = explode('|', $fileString);
        }
        // dump($imagesArray);

        return view('admin.docter.view', compact('docter', 'imagesArray'));
    }
    public function delete_docter($id)
    {
        DB::table('docter')->where('id', $id)->delete();
        return redirect('admin/docter-dashboard')->with('del', 'ลบข้อมูลเรียบร้อย');
    }
    // DOCTER---------------------------------

    // SPA------------------------------------
    public function spa()
    {
        $spa = DB::table('spa')
            ->orderBy('spa.id', 'asc')
            ->paginate(15);
        return view('admin.spa.spa', compact('spa'));
    }
    public function add_spa()
    {
        return view('admin/spa/add');
    }
    public function add_spa_store(Request $request)
    {
        dump($request);
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'district' => 'required',
            'province' => 'required',
            'zipcode' => 'required',
            'detail' => 'nullable',
            'phone' => 'nullable|min:9|max:10',
            'price' => 'required',
            'worktime_start' => 'nullable',
            'worktime_stop' => 'nullable',
            'image' => 'nullable',
        ]);


        $images = array();
        if (!$request->image == null) {
            if ($files = $request->file('image')) {
                foreach ($files as $file) {
                    $name = $file->getClientOriginalName();
                    $file->move('image', $name);
                    $images[] = $name;
                }
            }
            Spa::create([
                'name' => $request['name'],
                'address' => $request['address'],
                'district' => $request['district'],
                'province' => $request['province'],
                'zipcode' => $request['zipcode'],
                'detail' => $request['detail'],
                'phone' => $request['phone'],
                'price' => $request['price'],
                'worktime_start' => $request['worktime_start'],
                'worktime_stop' => $request['worktime_stop'],
                'image' => implode("|", $images),
            ]);
        } else {
            Spa::create([
                'name' => $request['name'],
                'address' => $request['address'],
                'district' => $request['district'],
                'province' => $request['province'],
                'zipcode' => $request['zipcode'],
                'detail' => $request['detail'],
                'phone' => $request['phone'],
                'price' => $request['price'],
                'worktime_start' => $request['worktime_start'],
                'worktime_stop' => $request['worktime_stop'],
            ]);
        }

        return redirect('admin/spa-dashboard')->with('add', 'เพิ่มร้านสปาสำเร็จ');
    }
    public function view_spa($id)
    {
        $spa = DB::table('spa')
            ->where('spa.id', '=', $id)->first();
        $images = DB::table('spa')
            ->select('image')
            ->where('spa.id', '=', $id)->first();
        foreach ($images as $fileString) {
            // now we have one single file record
            $imagesArray = explode('|', $fileString);
        }
        return view('admin.spa.view', compact('spa', 'imagesArray'));
    }
    public function edit_spa($id)
    {
        $spa = DB::table('spa')
            ->where('spa.id', '=', $id)->first();
        return view('admin.spa.edit', compact('spa'));
    }
    public function edit_spa_store(Request $request, $id)
    {
        // dump($request);
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'district' => 'required',
            'province' => 'required',
            'zipcode' => 'required',
            'detail' => 'nullable',
            'phone' => 'nullable|min:9|max:10',
            'price' => 'required',
            'worktime_start' => 'nullable',
            'worktime_stop' => 'nullable',
            'image' => 'nullable',
        ]);
        $images = array();
        if (!$request->image == null) {
            if ($files = $request->file('image')) {
                foreach ($files as $file) {
                    $name = $file->getClientOriginalName();
                    $file->move('image', $name);
                    $images[] = $name;
                }
            }
            DB::table('spa')
                ->where('spa.id', $id)
                ->update([
                    'name' => $request['name'],
                    'address' => $request['address'],
                    'district' => $request['district'],
                    'province' => $request['province'],
                    'zipcode' => $request['zipcode'],
                    'detail' => $request['detail'],
                    'phone' => $request['phone'],
                    'price' => $request['price'],
                    'worktime_start' => $request['worktime_start'],
                    'worktime_stop' => $request['worktime_stop'],
                    'image' => implode("|", $images),
                ]);
        } else {
            DB::table('spa')
                ->where('spa.id', $id)
                ->update([
                    'name' => $request['name'],
                    'address' => $request['address'],
                    'district' => $request['district'],
                    'province' => $request['province'],
                    'zipcode' => $request['zipcode'],
                    'detail' => $request['detail'],
                    'phone' => $request['phone'],
                    'price' => $request['price'],
                    'worktime_start' => $request['worktime_start'],
                    'worktime_stop' => $request['worktime_stop'],
                ]);
        }


        return redirect('admin/spa-dashboard')->with('update', 'แก้ไขข้อมูลสำเร็จ');
    }
    public function delete_spa($id)
    {
        DB::table('spa')->where('id', $id)->delete();
        return redirect('admin/spa-dashboard')->with('del', 'ลบข้อมูลเรียบร้อย');
    }
    // SPA------------------------------------

    // HERB---------------------------------
    public function herb()
    {
        $herb = DB::table('herbs')
            ->orderBy('herbs.id', 'asc')
            ->paginate(15);
        return view('admin.herb.herb', compact('herb'));
    }
    public function view_herb($id)
    {
        $herb = DB::table('herbs')
            ->where('herbs.id', '=', $id)->first();
        $images = DB::table('herbs')
            ->select('image')
            ->where('herbs.id', '=', $id)->first();
        // dump($images);
        foreach ($images as $fileString) {
            // now we have one single file record
            $imagesArray = explode('|', $fileString);
        }
        return view('admin.herb.view', compact('herb','imagesArray'));
    }
    public function add_herb()
    {
        return view('admin/herb/add');
    }
    public function add_herb_store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'detail' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'image' => 'nullable',
        ]);


        $images = array();
        if (!$request->image == null) {
            if ($files = $request->file('image')) {
                foreach ($files as $file) {
                    $name = $file->getClientOriginalName();
                    $file->move('image', $name);
                    $images[] = $name;
                }
            }
            $herb =  Herb::create([
                'name' => $request['name'],
                'detail' => $request['detail'],
                'price' => $request['price'],
                'stock' => $request['stock'],
                'image' => implode("|", $images),
            ]);
        } else {
            $herb =  Herb::create([
                'name' => $request['name'],
                'detail' => $request['detail'],
                'price' => $request['price'],
                'stock' => $request['stock'],
            ]);
        }

        return redirect('admin/herb-dashboard')->with('add', 'เพิ่มสมุนไพรสำเร็จ');
    }
    public function edit_herb_store(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'detail' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'image' => 'nullable',
        ]);
        $images = array();
        if (!$request->image == null) {
            if ($files = $request->file('image')) {
                foreach ($files as $file) {
                    $name = $file->getClientOriginalName();
                    $file->move('image', $name);
                    $images[] = $name;
                }
            }
            DB::table('herbs')
                ->where('herbs.id', $id)
                ->update([
                    'name' => $request['name'],
                    'detail' => $request['detail'],
                    'price' => $request['price'],
                    'stock' => $request['stock'],
                    'image' => implode("|", $images),
                ]);
        } else {
            DB::table('herbs')
                ->where('herbs.id', $id)
                ->update([
                    'name' => $request['name'],
                    'detail' => $request['detail'],
                    'price' => $request['price'],
                    'stock' => $request['stock'],
                ]);
        }


        return redirect('admin/herb-dashboard')->with('update', 'แก้ไขข้อมูลสำเร็จ');
    }
    public function edit_herb($id)
    {
        $herb = DB::table('herbs')
            ->where('herbs.id', '=', $id)->first();
        return view('admin.herb.edit', compact('herb'));
    }
    public function delete_herb($id)
    {
        DB::table('herbs')->where('id', $id)->delete();
        return redirect('admin/herb-dashboard')->with('del', 'ลบข้อมูลเรียบร้อย');
    }
    // HERB---------------------------------


    // ORDER--------------------------------
    public function order()
    {
        $orders = DB::table('order')
            ->orderBy('order.id', 'asc')
            ->paginate(15);
        $orders->transform(function ($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('admin/order/order', ['orders' => $orders]);
    }
    public function view_order($id)
    {
        $orders = DB::table('order')
            ->join('users', 'order.user_id', '=', 'users.id')
            ->select('order.*', 'users.name')
            ->where('order.id', '=', $id)->get();
        $orders->transform(function ($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });
        // dd($orders);
        return view('admin/order/view', ['orders' => $orders]);
    }
    public function getUpdate(Request $request)
    {
        // dd($id);
        // DB::table('order')
        //     ->where('order.id', $id)
        //     ->update([
        //         'status' => $request['status'],
        // ]);

        //  $orders = DB::table('order')
        //  ->join('users', 'order.user_id', '=', 'users.id')
        //     ->select('order.*', 'users.name')
        // ->where('order.id', '=', $id)->get();
        // $orders->transform(function($order, $key){
        //     $order->cart = unserialize($order->cart);
        //     return $order;
        // });
        // // dd($orders);
        $request->all();
    }
    // ORDER--------------------------------


}
