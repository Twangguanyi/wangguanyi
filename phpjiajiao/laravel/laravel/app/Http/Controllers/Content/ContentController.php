<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 2018/5/30
 * Time: 14:02
 */
namespace App\Http\Controllers\Content;

use App\Models\Student;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
class ContentController extends Controller
{
    public function teacher1()
    {
        return view('Content.teacher1');
    }
    public function teacher2()
    {
        return view('Content.teacher2');
    }
    public function teacher3()
    {
        return view('Content.teacher3');
    }
    public function teacher4()
    {
        return view('Content.teacher4');
    }
}