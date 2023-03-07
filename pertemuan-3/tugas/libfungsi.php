<?php
/**
* Task 4 - Function
* function kelulusan
* function grade
* function predikat
*/

	function kelulusan($rerata){
		/**
		* Function kelulusan, jika:
		* total nilai lebih dari 55 maka lulus
		* total nilai kurang dari 55 maka tidak lulus
		*/

        if($rerata >= 55 ){
            $keterangan = "Lulus";
            return $keterangan;
        }elseif($rerata <= 55){
            $keterangan = "Tidak Lulus";
            return $keterangan;
        }
	}
	
	function grade($rerata) {
	  /**
		* Function grade, jika:
		* total nilai <= 100 maka A
		* total nilai <= 84 maka B
		* total nilai <= 69 maka C
		* total nilai <= 55 maka D
		* total nilai <= 35 maka E
		* selain itu maka I
		*/ 

        if($rerata <= 100 ){
            $grade = "A" ;
            return $grade;
        }elseif($rerata <= 84){
            $grade = "B" ;
            return $grade;
        }elseif($rerata <= 69){
            $grade = "C" ;
            return $grade;
        }elseif($rerata <= 55){
            $grade = "D" ;
            return $grade;
        }elseif($rerata <= 35){
            $grade = "E" ;
            return $grade;
        }else{
            $grade = "F";
            return $grade;
        }
    }

	
	function predikat($rerata){
		/**
		* Function predikat, jika:
		* grade A maka Sangat Memuaskan
		* grade B maka Memuaskan
		* grade C maka Cukup
		* grade D maka Kurang
		* grade E maka Sangat Kurang
		* selain itu maka Tidak Ada
		*
		* Tips: Gunakan switch untuk mempermudah 
		* melakukan pengecekan kondisi berdasarkan function grade
		*/ 
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