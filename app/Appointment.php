<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{

	protected $timestamps = false;
	protected $dates = ['start_date', 'end_date'];    
    
    /*public function appointment(){
    	return $this->hasMany(App\Appointment);

    }*/

/*an appointment is owned by an employee*/
	public functions scopedDates(){

		$query->where('start_date', 'end_date', '<=', Carbon::now());
	}
	

     public function employee(){

    	return $this->belongsTo('App\employee');
    }
}

    public function setdatesAttribute{
    	$this->attribute['start_date', 'end_date'] = Carbon::parse($date);
    }

}





