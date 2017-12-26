<?php
$result= '';
if (isset($_POST['btn'])){
    require_once 'FullName.php';
    $fullName=new FullName();
    $result=$fullName->myCalculator($_POST);
}
?>

<form action= " " method="post">
    <table>
        <tr>
            <th>First Number:</th>
            <td>
                <input type="text" name="firstNumber" value="<?php echo $_POST['firstNumber']?>">
            </td>
        </tr>

        <tr>
            <th>Second Number:</th>
            <td>
                <input type="text" name="secondNumber" value="<?php echo $_POST['secondNumber']?>">
            </td>
        </tr>

        <tr>
            <th>Result:</th>
            <td>
                <input type="text" name="result" value="<?php echo $result;?>">
            </td>
        </tr>


        <tr>
            <th></th>
            <td>
                <input type="submit" value="+" name="btn">
                <input type="submit" value="-" name="btn">
                <input type="submit" value="*" name="btn">
                <input type="submit" value="/" name="btn">
                <input type="submit" value="%" name="btn">

            </td>
        </tr>

    </table>
