<?php

	function kelulusan($rerata){

        if($rerata >= 55 ){
            $keterangan = "Lulus";
            return $keterangan;
        }elseif($rerata <= 55){
            $keterangan = "Tidak Lulus";
            return $keterangan;
        }
	}
	
	function grade($rerata) {

        if($rerata <= 35){
            $grade = "E" ;
            return $grade;
        }elseif($rerata <= 55){
            $grade = "D" ;
            return $grade;
        }elseif($rerata <= 69){
            $grade = "C" ;
            return $grade;
        }elseif($rerata <= 84){
            $grade = "B" ;
            return $grade;
        }elseif($rerata <= 100 ){
            $grade = "A" ;
            return $grade;
        }else{
            $grade = "F";
            return $grade;
        }
    }

	
	function predikat($rerata){
        switch (grade($rerata)) {
            case "A":
                return 'Sangat memuaskan';
                break;
            case "B":
                return 'Memuaskan';
                break;
            case "C":
                return 'Cukup';
                break;
            case "D":
                return 'Kurang';
                break;
            case "E":
                return 'Sangat Kurang';
                break;
            default:
                return 'Tidak Ada';
                break;
        }

	}
?>