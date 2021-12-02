<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyAdmin;
use App\Mail\emailNotification;
class DashboardController extends Controller
{
    //
    
    public function index(){

        //DB::enableQueryLog();
    $query = Story::active();
        
        $type = request()->input('type');
        if(in_array($type, ['long', 'short'])){
            $query->where('type', $type);
        }
        
        $stories = $query->with('user')->orderBy('id', 'DESC')->paginate(10);

 
    return view('dashboard.index',
    [
    'stories' => $stories
    ]);
        
         
    }
    
    
      public function show(Story $activeStory){
      
         return view('dashboard.show',
                   [
                       'story' => $activeStory 
                   ]);
         
    }
    
    
 
    
}

