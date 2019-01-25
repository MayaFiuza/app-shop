<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

//(in web.php) Route::get('/', 'TestController@welcome');

class testController extends Controller
{
    public function welcome(){     //method
        /*$a = 5; $b=10; 
        $c = $a+$b;
        return 'El valor de la suma es '.$c;*/

        return view('welcome');    //view
    }
}
