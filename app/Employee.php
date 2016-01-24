<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = [
    'emp_id', 
    'fname', 
    'mname', 
    'lname', 
    'address', 
    'phone', 
    'email',
    'user_id' //temp!!
    ];
    public $timestamps = false;
    protected $table = 'employees';
    



/*an employee can have many Appointments*/  
   

public function appointments()
{

    	return $this->belongsTo('App\Appointments');
    }

public function user(){

	return $this->belongsTo('App\User');
}


}