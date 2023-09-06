<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class WorkerController extends Controller
{
    public function index()
    {
        $imageDirectory = public_path('data/skill/');
        $images = [];

        if (is_dir($imageDirectory)) {
            $imageFiles = scandir($imageDirectory);
            foreach ($imageFiles as $file) {
                if (is_file($imageDirectory . '/' . $file)) {
                    $images[] = $file;
                }
            }
        }
        return view('worker.index', compact('images'));
    }
}
