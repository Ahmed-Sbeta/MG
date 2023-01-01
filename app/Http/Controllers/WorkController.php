<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;

class WorkController extends Controller
{
    public function index($id){
      $project = project::find($id);
      return view('work.add-work',compact('project'));
    }
}
