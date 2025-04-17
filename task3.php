<?php
$employees = [
    ["name" => "Ahmed", "salary" => 5000, "age" => 30, "insurance" => "Yes"],
    ["name" => "Sara", "salary" => 6000, "age" => 28, "insurance" => "No"],
    ["name" => "Ali", "salary" => 4500, "age" => 35, "insurance" => "Yes"]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 30px;
        }
        table {
            width: 70%;
            margin: auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {background-color: #f9f9f9;}
        tr:hover {background-color: #e1f5e1;}
    </style>
</head>
<body>

<h2 style="text-align: center;">Employee Data</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Salary</th>
        <th>Age</th>
        <th>Insurance</th>
    </tr>

    <?php
    foreach ($employees as $employee) {
        echo "<tr>";
        echo "<td>" .($employee['name']) . "</td>";
        echo "<td>$" .($employee['salary']) . "</td>";
        echo "<td>" . $employee['age'] . "</td>";
        echo "<td>" . $employee['insurance'] . "</td>";
        echo "</tr>";
    }
    ?>
</table> 


</body>
</html>
