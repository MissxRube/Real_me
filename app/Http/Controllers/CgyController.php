<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cgy;


class CgyController extends Controller
{

        public function index()
        {
            //顯示在前台資料篩選
            $cgy = Cgy::where('enabled',true)->get();
            return view('cgies.index',compact('cgies'));
        }

        public function gethome(Cgy $cgy)
        {
            $cgy=Cgy::where('id',1)->get();
            
            return view('front.content',compact('cgy'));

      
        }
    

}
?>