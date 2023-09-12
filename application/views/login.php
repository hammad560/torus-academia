<?php include("front/header.php")?>
<div class="container mt-4">
    <div class="jumbotron bg-danger">
        <form action="<?php echo base_url().'welcome/userlogin'?>" method="post">
            <h1>LOGIN </h1><hr>
            <?php  if($msg = $this->session->flashdata('message')): ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-dismissible alert-success">
                    <?php echo $msg;?>
                    </div>
                </div>
            </div>
            <?php  endif;?>
            <div class="row mt-4">
                <div class="col-md-5">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email" value="<?php echo set_value('email'); ?>">
                    <?php echo form_error('email', '<div class="text-light">', '</div>'); ?>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-5">
                    <label for="passowrd">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password" value="<?php echo set_value('password'); ?>">
                    <?php echo form_error('password', '<div class="text-light">', '</div>'); ?>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-5">
                  <button type="submit" class="btn btn-primary">SUBMIT</button>
                  <a href="<?php echo base_url().'welcome/'?>" class="btn btn-dark">BACK</a>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include("front/footer.php")?>