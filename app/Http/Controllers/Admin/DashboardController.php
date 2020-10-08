<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dashboard;
use Illuminate\Http\Request;
use Image;

class DashboardController extends Controller
{
    public function index()
    {
        $detail = Dashboard::first();
        return view('admin.dashboard', compact('detail'));
    }

    public function update(Request $request, $id)
    {
        // $record = Dashboard::findOrFail($id);

        // $request->validate($this->rules(), $this->messages());
        // $formInput = $request->except(['logo']);

        // if ($request->hasFile('logo')) {
        //     if ($record->logo) {
        //         $this->unlinkImage($record->logo);
        //     }
        //     list($width, $height) = getimagesize($request->file('logo')->getRealPath());
        //     $formInput['logo'] = $this->imageProcessing($request->file('logo'), $width, $height, 'no');
        // }
        // $record->update($formInput);
        // return redirect()->route('dashboard')->with('message', 'Dashboard Update Successfully');
    }

    public function rules()
    {
        $rules = [
            'site_name' => 'required',
            'logo' => 'mimes:jpg,jpeg,png,gif|max:3048',
            // 'contactus_image' => 'dimensions:max_width=2000,max_height=2000|mimes:jpg,jpeg,png,gif|max:3048',
        ];
        return $rules;
    }

    public function messages()
    {
        return [
            // 'contactus_image.dimensions' => 'Upto 2000 * 2000 size is allowed',

        ];
    }

    public function imageProcessing($image, $width, $height, $otherpath)
    {

        $input['imagename'] = Date("D-h-i-s") . '-' . rand() . '-' . '.' . $image->getClientOriginalExtension();
        $thumbPath = public_path('images/thumbnail');
        $mainPath = public_path('images/main');
        $listingPath = public_path('images/listing');

        $img = Image::make($image->getRealPath());
        $img->fit($width, $height)->save($mainPath . '/' . $input['imagename']);

        // with no fit
        // $img->save($mainPath . '/' . $input['imagename']);

        if ($otherpath == 'yes') {
            $img->fit($width / 2, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($listingPath . '/' . $input['imagename']);

            $img->fit(200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($thumbPath . '/' . $input['imagename']);
        }

        $img->destroy();
        return $input['imagename'];
    }

    public function unlinkImage($imagename)
    {
        $thumbPath = public_path('images/thumbnail/') . $imagename;
        $mainPath = public_path('images/main/') . $imagename;
        $listingPath = public_path('images/listing/') . $imagename;
        if (file_exists($thumbPath)) {
            unlink($thumbPath);
        }

        if (file_exists($mainPath)) {
            unlink($mainPath);
        }

        if (file_exists($listingPath)) {
            unlink($listingPath);
        }

        return;
    }
}
