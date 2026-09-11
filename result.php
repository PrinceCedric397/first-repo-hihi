<h1><center>Summary of Orders</center></h1>
<table border="5" align=center>
    <tr><td>Product Name
        <td><?php print $_POST['pname'];?>
        <td rowspan="3">
            <?php
            $image=$_POST['image'];
            print "<img src=$image width=200 height=200>"; ?>
<tr><td>Unit Cost
    <td><?php print $_POST['cost'];?> 
<tr><td>Quantity
    <td><?php print $_POST['qty'];?>
<tr><td>Total
    <td> <?php print $_POST['qty']*$_POST['cost'];?>
</table>
<p align=center><a href=ordering.php>Order Another</a>