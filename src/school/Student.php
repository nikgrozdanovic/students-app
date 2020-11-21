<?php

namespace StudentsApp\School;

use StudentsApp\Data\Connection;
use StudentsApp\School\Grade;

class Student extends Connection
{
    public function show(int $id)
    {
        $show = $this->conn()->query('SELECT * FROM students WHERE  students.id = ' . $id);
        $grade = new Grade();
        $grades = $grade->grades($id);

        $student = [];

        if ($show->num_rows) {
            while ($row = $show->fetch_assoc()) {
                $average = $grade->average($grades, $row['board']);
                if ($row['board'] == 'CSM') {
                    $board = 'CSM';

                    if ($average > 7) {
                        $final = 'Passed';
                    } else {
                        $final = 'Failed';
                    }
                } else {
                    $board = 'CSMB';

                    if ($average > 8) {
                        $final = 'Passed';
                    } else {
                        $final = 'Failed';
                    }
                }

                $student['id'] = $row['id'];
                $student['name'] = $row['name'];
                $student['grades'] = $grades;
                $student['average'] = $average;
                $student['final_result'] = $final;
            }

            if ($board == 'CSM') {
                $response = json_encode($student);
            } else {
                $xml_header = '<?xml version="1.0" encoding="UTF-8"?><Student></Student>';
                $xml = new \SimpleXMLElement($xml_header);
    
                $id = $xml->addChild('id', $student['id']);
                $name = $xml->addChild('name', $student['name']);
                $grades = $xml->addChild('grades');
                
                foreach ($student['grades'] as $grade) {
                    $grades->addChild('grade', $grade);
                }
    
                $average = $xml->addChild('average', $student['average']);
                $final_result = $xml->addChild('final_result', $student['final_result']);
    
                $response = $xml->asXML();
            }

        }
         
        $response = 'Student with ID - ' . $id . ' does not exist.';
        
        return $response;
    }
}