<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dashboard;
use Illuminate\Http\Request;
use Image;

class SettingController extends Controller
{
    public function index()
    {
        $detail = Dashboard::first();
        return view('admin.setting', compact('detail'));
    }

    public function update(Request $request, $id)
    {
        $record = Dashboard::findOrFail($id);

        $request->validate($this->rules(), $this->messages());
        $formInput = $request->except([
            'logo',
            'banner_image',
            'middlesection_image',
            'footer_logo',
            'blog_banner_image',
            'team_banner_image',
            'imagegallery_banner_image',
            'videogallery_banner_image',
            'contactus_banner_image',
        ]);

        if ($request->hasFile('logo')) {
            if ($record->logo) {
                $this->unlinkImage($record->logo);
            }
            list($width, $height) = getimagesize($request->file('logo')->getRealPath());
            $formInput['logo'] = $this->imageProcessing($request->file('logo'), $width, $height, 'no');
        }

        if ($request->hasFile('banner_image')) {
            if ($record->banner_image) {
                $this->unlinkImage($record->banner_image);
            }
            list($width, $height) = getimagesize($request->file('banner_image')->getRealPath());
            $formInput['banner_image'] = $this->imageProcessing($request->file('banner_image'), $width, $height, 'no');
        }

        if ($request->hasFile('middlesection_image')) {
            if ($record->middlesection_image) {
                $this->unlinkImage($record->middlesection_image);
            }
            list($width, $height) = getimagesize($request->file('middlesection_image')->getRealPath());
            $formInput['middlesection_image'] = $this->imageProcessing($request->file('middlesection_image'), $width, $height, 'no');
        }

        if ($request->hasFile('footer_logo')) {
            if ($record->footer_logo) {
                $this->unlinkImage($record->footer_logo);
            }
            list($width, $height) = getimagesize($request->file('footer_logo')->getRealPath());
            $formInput['footer_logo'] = $this->imageProcessing($request->file('footer_logo'), $width, $height, 'no');
        }

        if ($request->hasFile('blog_banner_image')) {
            if ($record->blog_banner_image) {
                $this->unlinkImage($record->blog_banner_image);
            }
            $formInput['blog_banner_image'] = $this->imageProcessing($request->file('blog_banner_image'), '1255', '450', 'no');
        }

        if ($request->hasFile('team_banner_image')) {
            if ($record->team_banner_image) {
                $this->unlinkImage($record->team_banner_image);
            }
            $formInput['team_banner_image'] = $this->imageProcessing($request->file('team_banner_image'), '1255', '450', 'no');
        }

        if ($request->hasFile('imagegallery_banner_image')) {
            if ($record->imagegallery_banner_image) {
                $this->unlinkImage($record->imagegallery_banner_image);
            }
            $formInput['imagegallery_banner_image'] = $this->imageProcessing($request->file('imagegallery_banner_image'), '1255', '450', 'no');
        }

        if ($request->hasFile('videogallery_banner_image')) {
            if ($record->videogallery_banner_image) {
                $this->unlinkImage($record->videogallery_banner_image);
            }
            $formInput['videogallery_banner_image'] = $this->imageProcessing($request->file('videogallery_banner_image'), '1255', '450', 'no');
        }

        if ($request->hasFile('contactus_banner_image')) {
            if ($record->contactus_banner_image) {
                $this->unlinkImage($record->contactus_banner_image);
            }
            $formInput['contactus_banner_image'] = $this->imageProcessing($request->file('contactus_banner_image'), '1255', '450', 'no');
        }

        $record->update($formInput);
        return redirect()->route('setting')->with('message', 'Setting Update Successfully');
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
