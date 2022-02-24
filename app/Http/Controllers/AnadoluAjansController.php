<?php


namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Buki\AnadoluAgency;
use DOMAttr;
use DOMDocument;
use Illuminate\Http\Request;
use function Tinify\compressionCount;

//use App\Http\Controllers\Crawler;

class AnadoluAjansController extends Controller
{
    public function add(Request $request)
    {
        //  dd($request->sehir);

                return view('backend.anadoluajans.index');


    }


    public
    function index()
    {

        $xmlDataString = file_get_contents(public_path('anadoluajans.xml'));


        $xml = simplexml_load_string($xmlDataString);
        $json = json_encode($xml);
        $array = json_decode($json, TRUE);

        $newss = array();

        $ison = count($array['haber']);

        if ($array['haber'] != []) {


            for ($i = 0; $i <= $ison -1; $i++) {

                $newss[$i]["title"] = $array['haber'][$i]['title'];
                $newss[$i]["content"] = $array['haber'][$i]['content'];
                $newss[$i]["created_at"] = $array['haber'][$i]['created_at'];
                $newss[$i]["city"] = $array['haber'][$i]['city'];


            }
            $yeni = count($array['haber']);

            $category = Category::latest()->paginate(20);
            return view('backend.anadoluajans.index', compact('newss', 'yeni', 'category'));
        } else {

            return view('backend.anadoluajans.index');
        }
    }


    public
    function insert(Request $request)
    {

        return Redirect()->route('anadoluajans.index')->with([
            'message' => 'Haber Başarıyla Eklendi',
            'alert-type' => 'success'
        ]);;

    }

    public
    function Editpage($id)
    {
        $editiha = \DB::table('anadoluajans')->where('id', '=', $id)->get();
        $data = $editiha[0];
        return view('backend.anadoluajans.settingAA.edit', compact('data'));
    }

    public
    function Settingindex()
    {
        $setting = \DB::table('anadoluajans')->get();
        $sayi = \DB::table('anadoluajans')->count('id');

        return view('backend.anadoluajans.settingAA.settingindex', compact('setting', 'sayi'));
    }


    public
    function UserAdd(Request $request)
    {


        $notification = array(
            'message' => 'Kullanıcı Başarıyla Eklendi',
            'alert-type' => 'success'
        );
        return redirect()->route('anadoluajans.settingindex');

    }

    public
    function Userupdate(Request $request)
    {


        $notification = array(
            'message' => 'Kullanıcı Başarıyla Güncellendi',
            'alert-type' => 'success'
        );

//	*Yhsmedya88    3005498
        return redirect()->route('anadoluajans.settingindex');

    }

}
