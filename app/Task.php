<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['pertanyaan', 'jawabanA', 'jawabanB', 'jawabanC', 'jawabanD'];

    
    public function setPertanyaanAttribute($value){
    	// $this->attributes['pertanyaan'] = 'ubah ' . $value;
    	$this->attributes['pertanyaan'] = $this->enkripsi($value);
    	
    }

    public function enkripsi($value){
    	$text = $value;
		$max_rows = 3;

		$array = array();

		$m= 0;
		$down = true;

		for($i=0; $i < strlen($text); $i++){
		    $sub_array = array();
		    if($m > ($max_rows-1)){
		        $m = ($max_rows-2);
		        $down = false;
		    } 
		    if($m < 0){
		        $m=1;
		        $down = true;
		    }  
		    
		    for($j=0; $j < $max_rows; $j++){
		        
		        if($m == $j)
		            array_push($sub_array, $text[$i]);
		        else
		            array_push($sub_array, '');
		            
		    }
		    
		    array_push($array, $sub_array);
		    if($down){
		        $m++;   
		    }else{
		        $m--;
		    }
		}

		$result = "";
	    for($i=0; $i < $max_rows; $i++){
	        $result .= implode('', array_map(function ($entry) use ($i) {
	            return $entry[$i];
	        }, $array));
	    }
	    return $result;   
	}

    //deencrypt
    // public function getPertanyaanAttribute($value){
    // 	return "zulham ganteng ".$value;
    // }
    
    // public function encrypt($value, $rails = 4){
    // 	$plainText = $value;
    // 	$cipherText = null;
    //     if ($rails < 2) $rails = 2;
    //     for ($rail = 0; $rail < $rails; $rail++)
    //     {
    //         for ($index = $rail; $index <= strlen($plainText); $index += $rails)
    //         {
    //             $cipherText .= substr($plainText, $index, 1);
    //         }
    //     }
    //     return $cipherText;
    
    // }

}
