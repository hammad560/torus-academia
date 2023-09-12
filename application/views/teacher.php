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
            <a href="<?php echo base_url().'users/addcourse'?>" class="btn btn-success float-right">ADD COURSE</a>
            <h1 class="text-dark">TEACHER DASHBOARD</h1><hr>
            <h1>Welcome <?php echo $teacher['username']?></h1><hr>
            <table class="table table-stritched table-hover">
                <thead>
                    <tr class="bg-primary text-light">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>View Courses</th>
                    </tr>
                </thead>
                <tbody>                    
                    <tr class="text-">
                        <td><?php echo $teacher['id']?></td>
                        <td><?php echo $teacher['username']?></td>
                        <td><?php echo $teacher['gender']?></td>     
                        <td><?php echo $teacher['courses']?></td>                        
                        <td><a href="<?php echo base_url().'users/viewteachercourse/'?><?php echo $teacher['id']?>" class="btn btn-success">VIEW</a></td>
                    </tr>                    
                </tbody>
            </table>
            <a href="<?php echo base_url().'users/logout'?>" class="btn btn-danger float-right">LOGOUT</a>
        </div>
    </div>
</body>
</html>