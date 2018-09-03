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

    //decrypt
    public function getPertanyaanAttribute($value){
    	$rail=5;
    	return $this->attributes['pertanyaan'] = $this->decode($value, $rail);;
    }
    public function getJawabanAAttribute($value){
    	$rail=4;
    	return $this->attributes['jawabanA'] = $this->decode($value, $rail);;
    }
    public function getJawabanBAttribute($value){
    	$rail=4;
    	return $this->attributes['jawabanB'] = $this->decode($value, $rail);;
    }
    public function getJawabanCAttribute($value){
    	$rail=4;
    	return $this->attributes['jawabanC'] = $this->decode($value, $rail);;
    }
    public function getJawabanDAttribute($value){
    	$rail=4;
    	return $this->attributes['jawabanD'] = $this->decode($value, $rail);;
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

	function decode($cipherMessage, $rails)
	{
	    $position = ($rails * 2) - 2;
	    // $textLength = strlen(utf8_decode($cipherMessage));
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
	    // while (strlen($plainText) < $textLength) {
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
