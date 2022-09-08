<?php
session_start();
$connect = new mysqli('localhost', 'root', '', 'pos_db');
$sql = "SELECT * FROM users";
$result = $connect->query($sql);
?>


<!-- เลือกตึกและห้องเรียน -->
<h1 class="h3 mb-2 text-gray-800"></h1>
<hr>

<article class="row-12">

    <div class="card shadow mb-4">



        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">เพิ่มข้อมูลสมาชิก</h6>
        </div>

        <div class="card border-0">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->

                <div class="card-body">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mt-3 mb-0">

                                    <form action="signup_db.php" method="POST">
                                        <?php if (isset($_SESSION['error'])) { ?>
                                            <div class="alert alert-danger" role="alert">
                                                <?php
                                                echo $_SESSION['error'];
                                                unset($_SESSION['error']);
                                                ?>
                                            </div>
                                        <?php } ?>
                                        <?php if (isset($_SESSION['success'])) { ?>
                                            <div class="alert alert-success" role="alert">
                                                <?php
                                                echo $_SESSION['success'];
                                                unset($_SESSION['success']);
                                                ?>
                                            </div>

                                        <?php } ?>
                                        <?php if (isset($_SESSION['warning'])) { ?>
                                            <div class="alert alert-warning" role="alert">
                                                <?php
                                                echo $_SESSION['warning'];
                                                unset($_SESSION['warning']);
                                                ?>
                                            </div>

                                        <?php } ?>
                                        <div class="form-group row">
                                            <div class="col-lg-2 my-2">
                                                <!-- <label for="firstname" class="form-label">First name</label> -->
                                                <input type="text" class="form-control form-control" name="firstname" aria-describedby="firstname" placeholder="First Name">
                                            </div>
                                            <div class="col-lg-2 my-2">
                                                <!-- <label for="lastname" class="form-label">Last name</label> -->
                                                <input type="text" class="form-control form-control" name="lastname" aria-describedby="lastname" placeholder="Last Name">
                                            </div>
                                            <div class="col-lg-2 my-2">
                                                <!-- <label for="lastname" class="form-label">Last name</label> -->
                                                <input type="email" class="form-control form-control" name="email" aria-describedby="email" placeholder="Email Address">
                                            </div>
                                            <div class="col-lg-2 my-2">
                                             
                                                    <!-- <label for="password" class="form-label">Password</label> -->
                                                    <input type="password" class="form-control  " name="password" aria-describedby="password" placeholder="Password">      
                                                    
                                                    </div>     
                                            <div class="col-lg-2 my-2">                              
                                                    <!-- <label for="password" class="form-label">Password</label> -->
                                                    <input type="password" class="form-control  " name="c_password" aria-describedby="c_password" placeholder="Repeat Password">
                                                
                                            </div>
                                            <div class="col-lg-auto my-2">
                                                <select class="form-control" name="urole">
                                                    <option>Admin</option>
                                                    <option>User</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-auto my-2">
                                                <button type="submit" name="singup" class="btn btn-dark" data-toggle="button" aria-pressed="false">
                                                    Add
                                                </button>
                                                <button type="submit" name="singup" class="btn btn-dark" data-toggle="button" aria-pressed="false">
                                                    Edit
                                                </button>
                                                <!-- <button type="reset" class="btn btn-warning btn-md" data-toggle="button" aria-pressed="false">Reset</button> -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">



        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">ข้อมูลสมาชิก</h6>
        </div>

        <div class="card border-0">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->

                <div class="card-body">


                    <div class="table-responsive">

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                            <thead>

                                <tr>
                                    <th>No.</th>
                                    <th>ชื่อ</th>
                                    <th>สกุล</th>
                                    <th>Email </th>
                                    <th>สถานะ</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>ชื่อ</th>
                                    <th>สกุล</th>
                                    <th>Email </th>
                                    <th>สถานะ</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>



                                <?php
                                while ($row = $result->fetch_assoc()) :
                                ?>

                                    <tr>
                                        <td class="text-center"><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['firstname']; ?></td>
                                        <td><?php echo $row['lastname']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td class="text-center"><?php echo $row['urole']; ?></td>
                                        <td class="text-center"><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a></td>
                                        <td class="text-center"><a href="delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                <?php endwhile ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</article>


<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>