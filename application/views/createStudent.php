<?php include("front/header.php") ?>
<div class="container mt-4 bg-secondery">
    <div class="jumbotron">
        <h1>SIGNUP HERE</h1>
        <hr>
        <form action="<?php  echo base_url() . 'welcome/addStudentTeacher' ?>" class="form-horizontal" method="post">
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
                        <label for="Username" class="col-md-3">User Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="username" placeholder="Enter Name"  value="<?php echo set_value('username'); ?>" />                            
                            <?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="Email" class="col-md-3">Email</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email" placeholder="Enter email"  value="<?php echo set_value('email'); ?>" />
                         <?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="col-md-3">ROLE</label>
                        <select name="role_id" id="role" class="form-control"  value="<?php echo set_value('role_id'); ?>">
                            <!-- these name come from db -->
                            <option value="">Select</option>                                                                           
                                <?php foreach($roles as $role): ?>
                                    <option  value="<?php echo $role['role_id']; ?>"><?php echo $role['rolename']; ?></option>
                                <?php endforeach; ?>                            
                        </select>
                        <?php echo form_error('role_id', '<div class="text-danger">', '</div>'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Gender" class="col-md-3">Gender</label>
                        <select name="gender" id="gender" class="form-control"  value="<?php echo set_value('gender'); ?>">
                            <option value="">select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <?php echo form_error('gender', '<div class="text-danger">', '</div>'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="" class="col-md-3">password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password" placeholder="Enter password"  value="<?php echo set_value('password'); ?>"/>
                            <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="" class="col-md-5">Confirm password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="cpassword" placeholder="Enter password again"  value="<?php echo set_value('cpassword'); ?>"/>
                            <?php echo form_error('cpassword', '<div class="text-danger">', '</div>'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">SUBMIT</button>
            <td><a href="<?php echo base_url().'welcome'?>" class="btn btn-dark">Back</a></td>                            
        </form>
    </div>
</div>
<?php include("front/footer.php") ?>