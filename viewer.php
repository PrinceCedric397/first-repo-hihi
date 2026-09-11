<table border="3">
  <tr>
    <td><a href="viewer.php?image=images/pic1.jpg&remark=Picture">
        <img src='images/pic1.jpg' width=500 height=500></a>
        <td rowspan=10>
    
      <?php
        if (isset($_GET['image'])) {
          $a = $_GET['image'];
          $b = $_GET['remark'];
          print "<img src='$a' width='1000' height='1000'><br>$b";
        } else 
          print "<img src='images/pic2.jpg' width='1000' height='1000'><p>my best picture ever";
        
      ?>
  

  <tr><td><a href="viewer.php?image=images/pic2.jpg&remark=Picture"><img src="images/pic2.jpg" width=500 height=500></a></td></tr>
  <tr><td><a href="viewer.php?image=images/pic3.jpg&remark=Picturee"><img src="images/pic3.jpg" width=500 height=500></a></td></tr>
  <tr><td><a href="viewer.php?image=images/pic4.jpg&remark=Picture"><img src="images/pic4.jpg" width=500 height=500></a></td></tr>
  <tr><td><a href="viewer.php?image=images/pic5.jpg&remark=Picture"><img src="images/pic5.jpg" width=500 height=500></a></td></tr>
  <tr><td><a href="viewer.php?image=images/pic6.jpg&remark=Picture"><img src="images/pic6.jpg" width=500 height=500></a></td></tr>
  <tr><td><a href="viewer.php?image=images/pic7.jpg&remark=Picture"><img src="images/pic7.jpg" width=500 height=500></a></td></tr>
  <tr><td><a href="viewer.php?image=images/pic8.jpg&remark=Picture"><img src="images/pic8.jpg" width=500 height=500></a></td></tr>
  <tr><td><a href="viewer.php?image=images/pic9.jpg&remark=Worst Picture"><img src="images/pic9.jpg" width=500 height=500></a></td></tr>
  <tr><td><a href="viewer.php?image=images/pic10.jpg&remark=Worst   Picture"><img src="images/pic10.jpg" width=500 height=500></a></td></tr>
</table>