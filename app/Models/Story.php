<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Softdeletes;


class Story extends Model
{
    use HasFactory;
    use SoftDeletes;
    
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
        'type',
        'status',
    ];
    
     public function user(){
        return $this->belongsTo(User::class);
    }
    
    public static function booted(){
        
   
//        static::addGlobalScope('active', function(Builder $builder){
//        $builder->where('status', 1);
    // });
}
    
    
    public function getTitleAttribute( $value ){
        return ucfirst($value);
    }
    
    
     public function getFootnoteAttribute( ){
        return $this->type. ' Type, created at '. date('Y-m-d', strtotime($this->created_at));
    }
    
    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
