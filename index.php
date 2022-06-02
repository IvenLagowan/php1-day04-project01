<?php include('partials/header.php'); ?>
<?php include('partials/nav.php'); ?>

<?php 

    if(isset($_GET['page']) && $_GET['page'] == 'home'){
        // tampilkan halaman home.php
        include('pages/home.php');
    } elseif((isset($_GET['page']) && $_GET['page'] == 'profile')){
        // tampilkan halaman profile.php
        include('pages/profile.php');
    } elseif((isset($_GET['page']) && $_GET['page'] == 'gallery')){
        // tampilkan halaman gallery.php
        include('pages/gallery.php');
    } elseif((isset($_GET['page']) && $_GET['page'] == 'contect')){
        // tampilkan halaman contact.php
        include('pages/contect.php');
    } else{
        // tampilkan halaman error 404.php
    }

?>


<?php include('partials/footer.php'); ?>