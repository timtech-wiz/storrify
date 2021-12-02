<?php

namespace App\Http\Controllers;
 


use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\ProfileRequest;
class ProfilesController extends Controller
{
    public function editProfile(){
        
        $user = auth()->user();
        return view('profiles.edit',[
            'user' => $user,
        ]
                   
                   );
    }
    
    
     public function updateProfile(ProfileRequest $request, User $user){
        
         
        $user->name = $request->name;
         $user->save();
         if($user->profile){
             
             $user->profile()->update($request->only(['biography', 'address'])); 
             
         }else{
             $user->profile()->create($request->all());   
         }

         
 return redirect()->route('profile.edit')->with('status', 'Profile Updated Successfully!');
    }
}
