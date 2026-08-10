<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected function uploadImage($file, string $path, ?string $old = null): string
    {
        if ($old && file_exists(public_path($old))) {
            @unlink(public_path($old));
        }

        $name = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads/'.$path), $name);

        return 'uploads/'.$path.'/'.$name;
    }
}
