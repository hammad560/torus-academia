<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Home Page</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/js/bootstrap.min.js'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/jquery.min.js'?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>

</head>
<style>
    .background-container {
    background-image: url('<?php echo base_url().'images/student.png' ?>');
    background-size: cover;
    width: 100%;
    height: 100vh;
    
}
.column{
        margin-top: 300px;   
    }
</style>
<div class="container-fluid background-container">
<div class="row">
            <div class="column text-warning mt-5 ml-5">
                <h1><b>Best Online Tuition Academy</h1></b>
                <h2>Ambitious to score A* but don't know how?</h2>
                <p>TORUS is here to walk you trough it. <br>
                    TORUS Academy Provider : </p>

                <ul class="text-white text-warning">
                    <li class="toriest ">
                        <i class="fa fa-hand-o-right ">
                        </i>
                        Top notch worldwide ONLINE TUTORS who produce higher achivers.
                    </li>
                    <li class="toriest">
                        <i class="fa fa-hand-o-right">
                        </i>
                        Inquery based learning
                    </li>
                    <li class="toriest">
                        <i class="fa fa-hand-o-right">
                        </i>
                        Individualized support
                    </li>
                    <li class="toriest">
                        <i class="fa fa-hand-o-right">
                        </i>
                        Resource that Energize Virtual Learning
                    </li>
                    <li class="toriest">
                        <i class="fa fa-hand-o-right">
                        </i>
                        Frequent Feedbacks
                    </li>
                </ul>
            </div>
        </div>
</div>
<div class="container">
<div class="jumbotron mt-5">
    <a href="<?php echo base_url().'welcome'?>" class="btn btn-dark mb-5"> BACK</a>
    <div class="row">            
        <div class="col-md-6">
        <h1>SIGNUP HERE</h1><hr>
        <a href="<?php echo base_url().'welcome/createStudent'?>" class="btn btn-success">SIGNUP</a>
        </div>
        </div>
    </div>
</div>
<?php include("front/footer.php")?>