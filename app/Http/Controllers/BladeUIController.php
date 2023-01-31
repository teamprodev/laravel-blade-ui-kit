<?php

namespace App\Http\Controllers;

use App\Models\BladeUI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Yajra\DataTables\DataTables;

class BladeUIController extends Controller
{
    public function BladeUI(Request $request){
        $bladeui = new BladeUI();
        $bladeui->email = $request->email;
        $bladeui->password = $request->password;
        $bladeui->about = $request->about;
        $bladeui->markdown = $request->markdown;
        $bladeui->color = $request->color;
        $bladeui->date_1 = $request->date_1;
        $bladeui->date_2 = $request->date_2;
        $bladeui->save();

        return view('bladeui', ['bladeui' => $bladeui]);
    }
    public function yajraGetData()
    {
        return Datatables::of(BladeUI::query())
            ->make(true);
    }
    public function uppy(Request $request,BladeUI $application)
    {
        $upload = json_decode($application->upload);
        $upload_to = config('uppy.upload_file');

        if ($request->hasFile('uppy')) {
            $fileName = time() . '_' . $request->uppy->getClientOriginalName();
            $filePath = $request->file('uppy')
                ->move(public_path($upload_to), $fileName);

            $upload[] = $fileName;
        }

        $application->upload = json_encode($upload);
        $application->update();
    }
}
