<?php include("front/header.php") ?>
<div class="container mt-4 bg-secondery">
    <div class="jumbotron">
        <h1>ADD COURSE</h1>
        <hr>
        <form action="<?php  echo base_url() . 'users/enrollTeacherCourse' ?>" class="form-horizontal" method="post">
        <?php  if($msg = $this->session->flashdata('message')): ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-dismissible alert-success">
                    <?php echo $msg;?>
                    </div>
                </div>
            </div>
            <?php  endif;?>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="Username" class="col-md-3">Course Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="coursename" placeholder="Enter CourseName"  value="<?php echo set_value('coursename'); ?>" />                            
                            <span class="error text-danger"><?php echo form_error('coursename'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="" class="col-md-3">price</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="price" placeholder="Enter password"  value="<?php echo set_value('price'); ?>"/>
                            <span class="error text-danger"><?php echo form_error('price'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">ADD</button>
            <td><a href="<?php echo base_url().'users/teachers'?>" class="btn btn-dark">Back</a></td>                            
        </form>
    </div>
</div>
<?php include("front/footer.php") ?>