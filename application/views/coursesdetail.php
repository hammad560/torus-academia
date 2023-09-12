<?php include("front/header.php") ?>
<div class="container mt-4 bg-secondery">
    <div class="jumbotron">
        <a href="<?php echo base_url() . 'users/studentCourse' ?>" class="btn btn-dark float-right">Back</a>
        <h1>COURSE DETAIL</h1>

        <hr>

        <div class="container">
            <div class="jumbotron">
                <table class="table table-stritched table-hover">
                    <thead>
                        <tr class="bg-primary text-light">
                            <th>course_list</th>
                            <th>Course Name</th>
                            <th>Price</th>
                            <th>Teacher Name</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $count = 1; ?>
                        <?php foreach ($name as $course): ?>
                            <tr>
                                <td>
                                    <?php echo $count ?>
                                </td>
                                <td>
                                    <?php echo $course['coursename'] ?>
                                </td>
                                <td>
                                    <?php echo $course['price'] ?>
                                </td>                        
                                <td>
                                    <?php echo $course['username'] ?>
                                </td>                            
                            </tr>
                            <?php $count++; ?>
                        <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include("front/footer.php") ?>