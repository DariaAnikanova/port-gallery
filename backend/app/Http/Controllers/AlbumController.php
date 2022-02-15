<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Http\Resources\PhotoResource;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all();
        return PhotoResource::collection($photos);
    }
}
