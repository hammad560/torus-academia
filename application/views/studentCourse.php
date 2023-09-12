<?php include("front/header.php") ?>
<div class="container mt-4 bg-secondery">
    <div class="jumbotron">
    <a href="<?php echo base_url().'users/coursesDetail'?>" class="btn btn-warning float-right">Courses Detail</a>
        <h1>ENROLL COURSE</h1>
        <hr>        
        <form action="<?php echo base_url() . 'users/enrollStudentCourse' ?>" class="form-horizontal" method="post">
            <?php if ($msg = $this->session->flashdata('message')): ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-dismissible alert-success">
                            <?php echo $msg; ?>
                        </div>  
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="coursename" class="col-md-3">Course Name</label>
                        <div class="col-md-9">
                            <?php if(count($name) ): ?>
                                <select name="course_id" id="course"  class="form-control">
                                <option value="" selected>Select course</option>
                                    <?php foreach ($name as $cname): ?>                            
                                        <option value="<?php echo $cname->course_id; ?>"><?php echo $cname->coursename; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <button type="submit" class="btn btn-success">ENROLL</button>
    <td><a href="<?php echo base_url() . 'users/students' ?>" class="btn btn-dark">Back</a></td>
    </form>
</div>
</div>
<?php include("front/footer.php") ?>



