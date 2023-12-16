<?php
	$mysqli = new mysqli('localhost', 'jnktmchm_admin', 'Patna@2022', 'jnktmchm_adminDB');
            if ($mysqli->connect_error) {
                die('Connect Error (' .
                $mysqli->connect_errno . ') '.
                $mysqli->connect_error);
            }
            $output="";
        $result = $mysqli->query('SET character_set_results=utf8');
        $tenderssql = "SELECT * FROM `tender` ORDER BY id DESC";
        $result = $mysqli->query($tenderssql);
                $x = 1;
        while($rows=$result->fetch_assoc())
        {
            $output .= '<tr>'.
              '<th scope="row">'.$x++.'</th>'.
              '<td>'.$rows['description'].' </td>'.
              '<td>'.(($rows['booklist']==NULL)?"<span class='badge bg-warning text-dark'>Not Added</span>":"<a href='".$rows['booklist']."'>List in Excel</a>").'</td>'.
              '<td class="text-center"> PDF <a href="'.$rows['detail_pdf'].'" style="text-decoration:none;color:red"><i class="fas fa-file-pdf"></i></a></td>'.
              '<td>'.$rows['pdate'].'</td>'.
              '<td>'.$rows['edate'].'</td>'.
              '<td>'.(($rows['mark']==1)?"<span class='badge bg-success'>New</span>":"<span class='badge bg-secondary px-3'>Old</span>").'</td>'.
              '<td><span class="text-secondary"><i class="far fa-edit" id='.$rows['id'].'></i></span> <span class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Tender"><i class="fas fa-trash-alt" id='.$rows['id'].'></i></span></td>'.
            '</tr>';
        }
        echo $output
?>