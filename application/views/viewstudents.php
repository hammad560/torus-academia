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
        <a href="<?php echo base_url().'users/teachers'?>" class="btn btn-dark float-right">BACK</a>
        <h1 class="text-dark">TEACHER COURSE</h1><hr>

            <table class="table table-stritched table-hover">
                <thead>
                    <tr class="bg-primary text-light">                    
                    <th>ID</th>
                    <th>STUDENT NAME</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php $count = '1'; ?>
                    <?php foreach($names as $name): ?>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $name['username']; ?></td>       
                    </tr>
                    <?php $count++; ?>
                        <?php endforeach; ?>
                </tbody>   
            </table>
            
        </div>
    </div>
</body>
</html>