<?php

namespace utility;
//namespace MyProject\mvcName;

class htmlTable
{
    public static function genarateTableFromMultiArray($array)
    {

        $tableGen = '<table border="1"cellpadding="10">';
        $tableGen .= '<tr>';
        //this grabs the first element of the array so we can extract the field headings for the table
        $fieldHeadings = $array[0];
        $fieldHeadings = get_object_vars($fieldHeadings);
        $fieldHeadings = array_keys($fieldHeadings);
        //this gets the page being viewed so that the table routes requests to the correct controller
        $referingPage = $_REQUEST['page'];
        foreach ($fieldHeadings as $heading) {
            $tableGen .= '<th>' . $heading . '</th>';
        }
        $tableGen .= '</tr>';
        foreach ($array as $record) {
            $tableGen .= '<tr>';
            foreach ($record as $key => $value) {
                if ($key == 'id') {
                    //$tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '">View</a></td>';
                } 
		//else {
                    $tableGen .= '<td>' . $value . '</td>';
                //}
            }
	    //print_r($record['id'];
	    //echo $id1;
	    $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=show&id=' . $id1 . '">edit</a></td>';
	    $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=edit&id=' . $id1 . '">delete</a></td>';
	    //$tableGen .= '<td><form action="index.php?page='.$referingPage . '&action=delete&id=' . $id1 . '" method="post" id="form1">;
	    //$tableGen .= '<button type="submit" form="form1" value="delete">Delete</button>';
	    //$tableGen .= '</form></td>';
	    $id1='';
            $tableGen .= '</tr>';
        }

        $tableGen .= '</table>';

        return $tableGen;
    }

    public static function generateTableFromOneRecord($innerArray)
    {
        $tableGen = '<table border="1" cellpadding="10"><tr>';

        $tableGen .= '<tr>';
        foreach ($innerArray as $innerRow => $value) {
            $tableGen .= '<th>' . $innerRow . '</th>';
        }
        $tableGen .= '</tr>';

        foreach ($innerArray as $value) {
            $tableGen .= '<td>' . $value . '</td>';
        }

        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
}

?>
