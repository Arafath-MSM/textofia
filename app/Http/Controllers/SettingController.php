<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class SettingController extends Controller
{

    public function index()
    {
        return view('back.settings.index');
    }

    public function meta()
    {
        return view('back.settings.meta_index');
    }

    public function mail()
    {
        return view('back.settings.mail_index');
    }

    public function store($section, Request $request)
    {
        $rules = Setting::getValidationRules($section);
        $data = $this->validate($request, $rules);
        $validSettings = array_keys($rules);
        foreach ($data as $key => $val) {
            if( in_array($key, $validSettings) ) {
                Setting::add($key, $val, Setting::getDataType($key, $section));
                $type = Setting::getInputType($key, $section);
                // handle file upload
                if (in_array($type, [$key, 'file'])) {
                    $this->uploadFile($key, $request, $section);
                }
            }
        }
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        return redirect()->to(route('settings.'.$section))->with('success', 'Settings has been updated.');
    }

    private function uploadFile($key, $request, $section)
    {
        $uploadedPath = Setting::getFilePath($key, $section);
        $settingName = $key;

        if ($request->$settingName) {
            $file = $request->file($settingName);
            $logoName = $file->getClientOriginalName();
            $uploadedPath = storage_path('app/public') .'/'.$uploadedPath;
            Setting::set($settingName, $logoName);
            File::Delete($uploadedPath . $logoName);
            $file->move($uploadedPath, $logoName);
        }
        return $uploadedPath;
    }

    public function postMailSettings(Request $request)
    {
        $section = 'developer_mail';
        $rules = Setting::getValidationRules($section);
        $data = $this->validate($request, $rules);
        $validSettings = array_keys($rules);
        foreach ($data as $key => $val) {
            if( in_array($key, $validSettings) ) {
                Setting::add($key, $val, Setting::getDataType($key, $section));
                $type = Setting::getInputType($key, $section);
            }
        }

        return redirect()->back()->with('success', 'Settings has been saved.');
    }

    public function cacheSettingPage()
    {
        return view('back.settings.cache_index');
    }

    public function clearCache()
    {
        try {
            Artisan::call('cache:clear');
            Artisan::call('config:clear');
            Artisan::call('view:clear');
            Artisan::call('route:clear');

            return redirect()->back()->with('success', 'Cache has been cleared');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'There was a problem with clearing a cache');
        }
    }

}
