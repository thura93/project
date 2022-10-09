<?php 
    $page = "Dashboard";
    include("layouts/header.php");
    include("layouts/navbar.php");

    include("vendor/autoload.php");
    
    use Helpers\Auth;

    $auth = Auth::check();

?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-12 bg-dark text-info p-5 rounded">
                <!-- <?php if(isset($_SESSION['error'])) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Fail!</strong> <?php echo $_SESSION['error']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; unset($_SESSION['error']); ?>   -->

                <?php if(isset($_SESSION['success'])) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> <?php echo $_SESSION['success']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; unset($_SESSION['success']); ?> 

                <div class="row  mb-5">
                    <div class="col-sm-12">
                        <h3><strong>Dashboard</strong></h3>
                    </div>
                </div>
                
            </div>
        </div>
    </div> 
<?php include("layouts/footer.php"); ?>
    
