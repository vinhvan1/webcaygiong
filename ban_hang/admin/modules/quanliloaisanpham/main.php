<div class="aside">
    <?php 
     if (isset($_GET['ac'])) {
         $tam = $_GET['ac'];
     }
     else {
         $tam = '';
     }
     if ($tam == 'them') {
         include('modules/quanliloaisanpham/them.php');     
     }
     if ($tam == 'sua') {
         include('modules/quanliloaisanpham/sua.php');
     }
    ?>
</div>
<div class="article">
    <?php 
       include('modules/quanliloaisanpham/lietke.php')
    ?>
</div>