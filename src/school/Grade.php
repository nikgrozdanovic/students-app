<?php

namespace StudentsApp\School;

use StudentsApp\Data\Connection;

class Grade extends Connection
{
    public function grades($student)
    {
        $getGrades = $this->conn()->query('SELECT grade FROM grades WHERE student_id = ' . $student);
        $grades = [];
        if ($getGrades->num_rows) {
            while ($row = $getGrades->fetch_assoc()){
                $grades[] = $row['grade'];
            }
        }

        return $grades;
    }

    public function average(array $arr, string $board)
    {
        $sum = 0;

        foreach ($arr as $grade) {
            $sum += $grade;
        }

        if ($board == 'CSM') {
            $average = $sum / count($arr);
        }

        if ($board == 'CSMB') {
            $lowest = min($arr);
            $lowestIndex = array_search($lowest, $arr);
            unset($arr[$lowestIndex]);
            
            $highest = max($arr);

            $average = $highest;
        }
        

        return number_format($average,1,".",",");
    }
}