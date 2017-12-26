<?php

$result='';
if(isset($_POST['btn'])){

require_once 'FullName.php';
$fullName = new FullName();
$result = $fullName->makeFullName($_POST['firstName'],$_POST['lastName']);


}

?>

<form action= " " method="post">
    <table>
        <tr>
            <th>First Name:</th>
            <td>
                <input type="text" name="firstName">
            </td>
        </tr>

        <tr>
            <th>Last Name:</th>
            <td>
                <input type="text" name="lastName">
            </td>
        </tr>

        <tr>
            <th>Full Name:</th>
            <td>
                <input type="text" name="fullName" value="<?php echo $result;?>">
            </td>
        </tr>


        <tr>
            <th></th>
            <td>
                <input type="submit" value="submit" name="btn">
            </td>
        </tr>

    </table>