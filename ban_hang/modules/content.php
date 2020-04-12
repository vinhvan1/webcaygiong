<div class="content">
            <section class ="clearfix">
                <aside>
                   <?php 
                     include ('modules/aside/aside.php')
                   ?>
                </aside>
                <article>
                <?php 
                     if (isset($_GET['xem'])){
                         $tam = $_GET['xem'];
                     }
                     else {
                         $tam = '';
                     }
                     if ($tam == 'chitietsanpham') {
                        include('modules/article/chitietsanpham.php');
                        }
                     else {
                        include('modules/article/tatcasanpham.php');
                      }
                         
                    
                   ?>
                </article>   


            </section>
        </div>