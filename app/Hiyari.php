<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hiyari extends Model
{
    protected $table = 'hiyari';
    protected $fillable = ['work_id','train_id','day','time','jobs_id','age_id','operation_id','place','text','title'];
 
    public function get_hiyari_by_work_id($id)
    {
        $ret = $this->where('work_id', $id)->get();
        return $ret;
    }
    public function get_hiyari_by_hiyari_id($id)
    {
        $ret = $this->where('id', $id)->first();
        return $ret;
    }
    public function get_hiyari_new()
    {
        $ret = $this->latest()->get();
        return $ret;
    }
    public function jobs(){
        return $this->belongsTo('App\Jobs');
    }
    public function age(){
        return $this->belongsTo('App\Age');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function operation(){
        return $this->belongsTo('App\Operation');
    }
    
}
