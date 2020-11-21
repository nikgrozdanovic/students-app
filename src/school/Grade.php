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
}