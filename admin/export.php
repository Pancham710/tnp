<?php
session_start();

if (!isset($_SESSION["admin_email"])) {
    header('location: ./adminLogin.php?error=Please login before accessing the page.');
    exit;
} 
require('../connection.php');
 

$html = '<table id="example2" class="table text-center mt-3">
<thead class="table-dark">
    <tr>
        <th scope="col">Sr.No</th>
        <th scope="col">Student Name</th>
        <th scope="col">Company Name</th>
        <th scope="col">Package</th>
        <th scope="col">Contact</th>
        <th scope="col">Passout Year</th>
        <th scope="col">Branch</th>

    </tr>
</thead>
<tbody>';
     
        $sql = "select ID, StudentName, CompanyName, Package, ContactNumber,YOP, Branch from placedstudents";

        $result = mysqli_query($conn, $sql);
        $no = 1;

        while ($row = mysqli_fetch_array($result)) {
            $html .= '<tr>';
            $html .= '<td>' . $no . '</td>';
            $html .= '<td>' . $row['StudentName'] . '</td>';
            $html .= '<td>' . $row['CompanyName'] . '</td>';
            $html .= '<td>' . $row['Package'] . '</td>';
            $html .= '<td>' . $row['ContactNumber'] . '</td>';
            $html .= '<td>' . $row['YOP'] . '</td>';
            $html .= '<td>' . $row['Branch'] . '</td>';
            // echo '<td>'.$row['ProfileImage'].'</td>';
            // echo '<td>'.$row['Resumes'].'</td>';
            $no += 1;
        }


$html .= '
</tbody>
</table>';

header('Content-Type: application/xls');
header('Content-Disposition: attachment; filename=report.xls');
echo $html;
?>