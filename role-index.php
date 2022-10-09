<?php 
    $page = "Role New";
    include("layouts/navbar.php");
?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4 bg-dark text-center text-info p-5 rounded">
                <h3 class="mb-3"><strong>Create New Role</strong></h3>
                
                <?php if(isset($_SESSION['incorrect'])) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Fail!</strong> <?php echo $_SESSION['incorrect']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; unset($_SESSION['incorrect']); ?> 
                
                <?php if(isset($_SESSION['success'])) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>SUCCESS !</strong> <?php echo $_SESSION['success']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; unset($_SESSION['success']); ?> 
                <form action="role-store.php" method="POST">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-dark text-info" id="basic-addon1"><i class="fa fa-shield" aria-hidden="true"></i></span>
                        <input type="text" name="name" class="form-control" placeholder="Role Name ..." aria-label="Name" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-dark text-info" id="basic-addon1"><i class="fa fa-sort-numeric-desc" aria-hidden="true"></i></span>
                        <input type="text" name="value" class="form-control" placeholder="Role Value ..." aria-label="Value" aria-describedby="basic-addon1" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 float-end mb-4"><i class="fa fa-save"></i> Save</button>
                </form>
            </div>
            <div class="col-sm-8 bg-dark text-center text-info p-5 rounded">
                <h3 class="mb-3"><strong>Role List</strong></h3>
                
                <table class="table table-hover text-info" style="background-color: #3A3B3C;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Role Name</th>
                            <th>Value</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            include("db.php");
                            $db = mySQL();
                        
                            $result = $db->query("SELECT * FROM roles ORDER BY id DESC");
                            $roles = $result->fetchAll();

                            foreach($roles as $role) :
                        ?>
                        <tr>
                            <td><?= $role->id; ?></td>
                            <td><?= $role->name; ?></td>
                            <td><?= $role->value; ?></td>
                            <td>
                                <a href="role-edit.php?id=<?= $role->id ?>" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="role-del.php?id=<?= $role->id ?>" onclick="return(confirm( 'Are you sure?' ))" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
<?php include("layouts/footer.php"); ?>
    
