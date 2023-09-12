<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/js/bootstrap.min.js'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/jquery.min.js'?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>STUDENT DASHBOARD</h1><hr>
            <a href="<?php echo base_url().'users/studentcourse'?>" class="btn btn-success float-right">ENROLL COURSES</a>
            <h1>Welcome <?php echo $student['username']?></h1><hr>
            <table class="table table-stritched table-hover">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>Course Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $student['id']?></td>
                        <td><?php echo $student['username']?></td>
                        <td><?php echo $student['gender']?></td>
                        <td><?php echo $student['courses']?></td>
                        <td><a href="<?php echo base_url().'users/viewstudentcourse/'?><?php echo $student['id']?>" class="btn btn-success">VIEW</a></td>
                    </tr>
                </tbody>
            </table>
            <a href="<?php echo base_url().'users/logout'?>" class="btn btn-danger float-right">LOGOUT</a>
        </div>
    </div>
</body>
</html>