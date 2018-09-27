<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['pertanyaan', 'jawabanA', 'jawabanB', 'jawabanC', 'jawabanD'];

    
    //encrypt
    public function setPertanyaanAttribute($value){
    	$rail=5;
    	$this->attributes['pertanyaan'] = $this->encode($value, $rail);
    	
    }
    public function setJawabanAAttribute($value){
    	$rail=4;
    	$this->attributes['jawabanA'] = $this->encode($value, $rail);
    	
    }
    public function setJawabanBAttribute($value){
    	$rail=4;
    	$this->attributes['jawabanB'] = $this->encode($value, $rail);
    	
    }
    public function setJawabanCAttribute($value){
    	$rail=4;
    	$this->attributes['jawabanC'] = $this->encode($value, $rail);
    	
    }
    public function setJawabanDAttribute($value){
    	$rail=4;
    	$this->attributes['jawabanD'] = $this->encode($value, $rail);
    	
    }



    //function library
    function encode($plainMessage, $rails)
	{
	    $cipherMessage = [];
	    $position = ($rails * 2) - 2;
	    // for ($index = 0; $index < strlen($plainMessage); $index++) {
	    for ($index = 0; $index < strlen($plainMessage); $index++) {
	        for ($step = 0; $step < $rails; $step++) {
	            if (!isset($cipherMessage[$step])) {
	                $cipherMessage[$step] = '';
	            }
	            if ($index % $position == $step || $index % $position == $position-$step) {
	                $cipherMessage[$step] .= $plainMessage[$index];
	            } else {
	                $cipherMessage[$step] .= ".*..";
	            }
	        }
	    }
	    // return $cipherMessage;
	    return implode('', str_replace('.*..', '', $cipherMessage));
	}


}
