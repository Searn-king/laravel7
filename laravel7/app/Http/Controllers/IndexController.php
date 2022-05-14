<?php

namespace App\Http\Controllers;



class IndexController
{
    public function shouYe()
    {
        $data['text'] = 'this is text';
        return view('shouYe',$data);
    }
}
