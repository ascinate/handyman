<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function insertservice(Request $request)
    {
        $service = new Service();

        $service->service_type = $request->service_type;
        $service->service_name = $request->service_name;

        $service->save();
        return redirect('service');
    }

    public function index()
    {
        $data = Service::all();
        return view('admin/services',['services'=>$data]);
    }

    public function showData($id)
    {
        $data = Service::find($id);
        return view('admin/editservice',['data'=>$data]);
    }


    public function updateservice(Request $request)
    {
        $service = Service::find($request->id);

        $service->service_type = $request->service_type;
        $service->service_name = $request->service_name;

        $service->save();
        return redirect('service');
    }

    public function delete($id)
    {
        $service = Service::find($id);
        $service->delete();

        return redirect('service');
    }
}
