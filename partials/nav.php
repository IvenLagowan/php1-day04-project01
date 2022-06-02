 <!-- NAV -->
 <!-- NAV -->
 <div class="row bg-dark p-3">
     <div class="col-12">

         <ul class="nav nav-pills nav-fill">
             <li class="nav-item">
                 <a class="nav-link <?php if (isset($_GET['page']) && $_GET['page'] == 'home') {
                                        echo 'active';
                                    } ?>" aria-current="page" href="?page=home">Home</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link <?php if (isset($_GET['page']) && $_GET['page'] == 'news') {
                                        echo 'active';
                                    } ?>" href="?page=news">News</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link <?php if (isset($_GET['page']) && $_GET['page'] == 'profile') {
                                        echo 'active';
                                    } ?>" href="?page=profile">Profile</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link <?php if (isset($_GET['page']) && $_GET['page'] == 'gallery') {
                                        echo 'active';
                                    } ?>" href="?page=gallery">Gallery</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link <?php if (isset($_GET['page']) && $_GET['page'] == 'contact') {
                                        echo 'active';
                                    } ?>" href="?page=contact">Contact</a>
             </li>
         </ul>

     </div>
 </div>
 <!-- END NAV -->

 <!-- NAV END -->