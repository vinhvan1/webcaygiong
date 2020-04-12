<div class="content clearfix">
       <?php
           if(isset($GET['quanly'])) {
               $tam = $GET['quanly'];
           }
           else {
               $tam = '';
           }
          
               include("modules/quanliloaisanpham/main.php");
           
        ?>    
</div>