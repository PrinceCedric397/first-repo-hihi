<h1><center>Ordering Form</center></h1>

<table border="5" align=center>
    <form action=summary.php method=post>
    <tr><td>Product Name
        <td><input type="text" name="pname" value="<?php print $_GET['item'];?>"
        readonly>
    
    <td rowspan="3">
    
    <?php
    $image=$_GET['image'];
    print "<img src=$image width=200 height=200>"; 
    ?>

    <input type=hidden name="image" value="<?php print $_GET['image'];?>">
<tr><td>Unit Cost
    <td><input type=text name="cost" value="<?php print $_GET['ucost'];?>" 
    readonly>
<tr><td>Quantity
    <td><input type=text name="qty" required>
<tr><td colspan=3 align="center">
    <input type=submit name="submit" value='Order Now'> |