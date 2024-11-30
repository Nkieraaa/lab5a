<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "Nursyakirah Ruslan";
        $matric = "DI210006";
        $course = "Web Programming";
        $year = "3";
        $address = "Kolej Tun Fatimah";
    ?>
    <table>
        <tr>
            <td>Name </td>
            <td>Matric </td>
            <td>Course </td>
            <td>Year</td>
            <td>Address</td>
        </tr>
        <tr>
            <td><?php echo "$name"; ?></td> 
            <td><?php echo "$matric"; ?></td> 
            <td><?php echo "$course"; ?></td> 
            <td><?php echo "$year"; ?></td>  
            <td><?php echo "$address"; ?></td> 
        </tr>
    </table>
</body>
</html>

