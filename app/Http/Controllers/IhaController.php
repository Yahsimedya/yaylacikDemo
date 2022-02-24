<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\District;
use App\Models\OrderImages;
use App\Models\Post;
use Carbon\Carbon;
use http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Storage;

class IhaController extends Controller
{

    public function ihanewsAdd()
    {
        return view('backend.iha.add');
    }


    public function ihaxmlread()
    {
        return view('backend.iha.ihaxmlread');
    }


    public function Editpage($id)
    {
        $editiha = \DB::table('iha')->where('id', '=', $id)->get();
        $data = $editiha[0];
        return view('backend.iha.settingiha.edit', compact('data'));
    }

    public function Settingindex()
    {
        $setting = \DB::table('iha')->get();
        $sayi = \DB::table('iha')->count('id');

        return view('backend.iha.settingiha.settingindex', compact('setting', 'sayi'));
    }


    public function UserAdd(Request $request)
    {
        $iha = array();

        $iha['iha_usercode'] = $request->iha_usercode;
        $iha['iha_username'] = $request->iha_username;
        $iha['iha_password'] = $request->iha_password;
        $iha['iha_rss'] = $request->iha_rss;

      //  \DB::table('iha')->insert($iha);

        $notification = array(
            'message' => 'Kullanıcı Başarıyla Eklendi',
            'alert-type' => 'success'
        );
        return Redirect()->route('setting.settingindex')->with($notification);

    }

    public function Userupdate(Request $request)
    {
   //
        $notification = array(
            'message' => 'Kullanıcı Başarıyla Güncellendi',
            'alert-type' => 'success'
        );
        return Redirect()->route('setting.settingindex')->with($notification);
    }
    public function iha(Request $request)
    {


          return view('backend.iha.add');


    }


    public function ihaInsert(Request $request)
    {


        return Redirect()->route('addpage.iha');
    }

}

