<?php

namespace StudentsApp\School;

use StudentsApp\Data\Connection;
use StudentsApp\School\Grade;

class Student extends Connection
{
    public function show(int $id)
    {
        $show = $this->conn()->query('SELECT * FROM students WHERE  students.id = ' . $id);
        $grades = new Grade();
        $grades = $grades->grades($id);

        $student = [];

        if ($show->num_rows) {
            while ($row = $show->fetch_assoc()) {
                if ($row['board'] == 'CSM') {
                    $student['id'] = $row['id'];
                    $student['name'] = $row['name'];
                    $student['grades'] = $grades;
                }
                
            }
        }

        return json_encode($student);
    }
}