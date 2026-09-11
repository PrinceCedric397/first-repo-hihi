<table border=2>
    <form action=pages.php method=post>
        <tr>
            <td>Num1
            <td><input type=number name=n1 required>
        <tr>
            <td>Num2
            <td><input type=number name=n2 required>
        <tr>
            <td colspan-2>
            <input type=submit value=compute name=compute style="background-color: red; color:white">
    </form>
</table>


<?php
if (isset($_POST['compute']))
{
$a=$_POST['n1'];
$b=$_POST['n2'];
$sum=$a+$b;
print "The sum of $a and $b is $sum";
}
?>