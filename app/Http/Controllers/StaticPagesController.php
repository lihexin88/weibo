<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Void_;

class StaticPagesController extends Controller {
    //
    /**
     * @return string
     */
    public function help() {
        return "用户帮助";
    }
    public function about(){
        return "关于页面";
    }
}
