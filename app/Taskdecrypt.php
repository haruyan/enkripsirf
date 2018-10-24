<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taskdecrypt extends Model
{
    protected $fillable = ['pertanyaan', 'jawabanA', 'jawabanB', 'jawabanC', 'jawabanD'];
    protected $table = "tasks";
    
    //decrypt
    public function getPertanyaanAttribute($value){
    	$rail=5;
    	return $this->attributes['pertanyaan'] = $this->decode($value, $rail);
    }
    public function getJawabanAAttribute($value){
    	$rail=4;
    	return $this->attributes['jawabanA'] = $this->decode($value, $rail);
    }
    public function getJawabanBAttribute($value){
    	$rail=4;
    	return $this->attributes['jawabanB'] = $this->decode($value, $rail);
    }
    public function getJawabanCAttribute($value){
    	$rail=4;
    	return $this->attributes['jawabanC'] = $this->decode($value, $rail);
    }
    public function getJawabanDAttribute($value){
    	$rail=4;
    	return $this->attributes['jawabanD'] = $this->decode($value, $rail);
    }


	function decode($cipherMessage, $rails)
	{
	    $position = ($rails * 2) - 2;
	    $textLength = strlen($cipherMessage);
	    $minLength = floor($textLength / $position);
	    $balance = $textLength % $position;
	    $lengths = [];
	    $strings = [];
	    $totalLengths = 0;
	    //find no of characters in each row
	    for ($rowIndex = 0; $rowIndex < $rails; $rowIndex++) {
	        $lengths[$rowIndex] = $minLength;
	        if ($rowIndex != 0 && $rowIndex != ($rails - 1)) {
	            $lengths[$rowIndex] += $minLength;
	        }
	        if ($balance > $rowIndex) {
	            $lengths[$rowIndex]++;
	        }
	        if ($balance > ($rails + ($rails - $rowIndex) - 2)) {
	            $lengths[$rowIndex]++;
	        }
	        $strings[] = substr($cipherMessage, $totalLengths, $lengths[$rowIndex]);
	        $totalLengths += $lengths[$rowIndex];
	    }
	    //convert row of characters to plain message
	    $plainText = '';
	    while (strlen($plainText) < $textLength) {
	        for ($charIndex = 0; $charIndex < $position; $charIndex++) {
	            if (isset($strings[$charIndex])) {
	                $index = $charIndex;
	            } else {
	                $index = $position - $charIndex;
	            }
	            $plainText .= substr($strings[$index], 0, 1);
	            $strings[$index] = substr($strings[$index], 1);
	        }
	    }
	    return $plainText;
	}

}
