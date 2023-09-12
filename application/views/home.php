<?php include("front/header.php") ?>
<body>
<div id="header-top" class="container-fluid bg-dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1">
                    <a href="#">
                        <img src="https://torusacademia.com/uploads/system/1a37546d1929c0ff3ca32d2ddacc41a9.png"
                            alt="flag" style="width:90px;"></a>
                </div>
                <div class="col-md-1 mt-4">
                    <a href="" class="courses float-lg-start text-decoration-none text-muted"> <i class="fa fa-th" style="color:#747d8c"> </i>courses </a>
                </div>
                <div class="col-md-7 mt-3 form-group">
                    <form class="input-group">
                        <input type="text" class="form-control" placeholder="Search for course" name="search" id="header-form">
                        <button type="submit"><i class="fa fa-search input-group"></i></button>
                    </form>
                </div>
                <div class="col-md-1 mt-3">
                    <div class="notification">
                        <a href=""><i class="fa fa-shopping-cart" style="font-size:35px; color: #57606f;"></i></a>
                    </div>
                </div>
                <div class="col-md-1 mt-3">
                    <div class="float-end">
                        <a class="btn btn-primary" href="<?php echo base_url().'welcome/login'?>">LOGIN</a>
                    </div>
                </div>
                <div class="col-md-1 mt-3">
                    <div class="float-end">
                    <a class="btn btn-danger" href="<?php echo base_url().'welcome/signup'?>">SIGNUP</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="image">
        <div class="row">
            <div class="column text-white">
                <h1><b>Best Online Tuition Academy</h1></b>
                <h2>Ambitious to score A* but don't know how?</h2>
                <p>TORUS is here to walk you trough it. <br>
                    TORUS Academy Provider : </p>

                <ul class="text-white">
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
                <div class="input-group">
                    <form class="input-group">
                        <input type="search" name="" id="" placeholder="What you want to learn?" required>
                        <button class="btn btn-secondary bg-light" type="button">
                            <i class="fa fa-search bg-light " style="color: red;;"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="icon-text">
        <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex">
                <div class="home-fect-box ml-md-auto">
                    <i class="fa fa-bullseye float-left text-light" style="padding-top: 30px; font-size: 50px;"></i>
                </div>
                <div class="text-box offset-1 text-light" style="padding-top: 30px;">
                    <h4>42 Online Couses</h4>
                    <p>explore a verity of fresh</p>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="home-fect-box ml-md-auto">
                    <i class="fa fa-check float-left text-light" style="padding-top: 30px; font-size: 50px;"></i>
                </div>
                <div class="text-box offset-1 text-light" style="padding-top: 30px;">
                    <h4>Expert instruction</h4>
                    <p>find the right couse for you</p>
                </div>
            </div>
            <div class="col-md-4 d-flex ">
                <div class="home-fect-box ml-md-auto">
                    <i class="fa fa-clock-o float-left text-light" style="padding-top: 30px; font-size: 50px;"></i>
                </div>
                <div class="offset-1 text-light" style="padding-top: 30px;">
                    <h4>Lifetime Access</h4>
                    <p>explore a verity of fresh</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid text-light" id="form-image-all">
        <div class="row">
            <div class="col-md-4" id="form-content">
                <form action="">
                    <div class="content">
                        <h2 id="line" class="text-center">Book A Demo</h2>
                    </div>
                    <div class="form-group">
                        <label for="">Full Name</label><br><input type="text" class="form-control" name="Name"
                            id="ful-name" placeholder="Enter Your Full Nmae"><br>
                    </div>
                    <div class="form-group">
                        <label for="">Emial Address</label><br><input type="email" class="form-control" name="Name"
                            id="email" placeholder="Enter your Email Address"><br>
                    </div>
                    <div class="form-group">
                        <label for="">Phone/WhatsApp</label><br><input type="number" class="form-control" name="Name"
                            id="number" placeholder="Phone/ WhatsApp Number"><br>
                    </div>
                    <div class="form-group">
                        <label for="">Level</label><br><input type="text" class="form-control" name="Name" id="level"
                            placeholder="O/A Level etc"><br>
                    </div>
                    <div class="form-group">
                        <label for="">Subject</label><br><input type="text" class="form-control" name="Name"
                            id="subjecy" placeholder="Chemistry/Biology/Physics etc"><br>
                    </div>
                    <div class="course-sidebar-text-box p-1 text-center bg-danger">
                        <div class="form-group">
                            <button type="submit" class="btn btn-buy-now">Get A Demo</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <div class="position-relative">
                    <img src="https://torusacademia.com/blog/wp-includes/images/torus-image-1.webp" class="img-fluid"
                        alt="Your Image" style="height: 615px;">
                    <div class="image-tontent translate-middle-y mb-5">
                        <h2 class="text-light">EXPERT INLINE TOTUR WITHIN FEW CLICKS!</h2>
                        <ul class="fs-3 " id="list-on-image">
                            <li class="fw-bold">
                                <i class="fa fa-check"> </i>
                                Your One-Stop solution!
                            </li>
                            <li class="fw-bold">
                                <i class="fa fa-check"> </i>
                                Get your free demo before signing up with us.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End of Form -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <img src="https://torusacademia.com/blog/wp-includes/images/torus-image-2.webp"
                                alt="Tourest" style="width: 660px;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <h2 id="line" class="text-center">Teach Online With Torus</h2>
                        </div>
                        <div>
                            <p style="font-size: 20px;">Shere your expert knowledge with student and earn!.Sign up to
                                <br> start tutoring online
                                with <b>Torus</b>
                            </p>
                        </div>
                        <div>
                            <ul style="font-size: 20px;">
                                <li>
                                    <i class="fa fa-search"></i>
                                    Find new student
                                </li>
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    Grow your business
                                </li>
                                <li>
                                    <i class="fa fa-comment"></i>
                                    get a paid salery
                                </li>
                            </ul>
                        </div>
                        <div class="course-sidebar-text-box">
                            <div>
                                <a class="btn btn-danger form-control" href="https://torusacademia.com/sign_up"
                                    id="torus-form">Become a Torus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of shere portion-->
            <div class="container-fluid bg-light" style="color: black;">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h2 id="line" class="text-center " style="padding-top: 90px;">General Notes Online</h2>
                        </div>
                    </div>
                    <div class="col-md-12 py-4">
                        <div class="text-center">
                            <i class="fa fa-hand-o-right"></i>
                            Trusted by the parent and student.
                        </div>
                        <div class="col-md-12">
                            <div class="text-center">
                                <i class="fa fa-hand-o-right"></i>
                                Torus also provides supports for university courses, assignments, synopsis, Research,
                                etc.
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-center">
                                <i class="fa fa-hand-o-right"></i>
                                More and more students are using TORUS online classes for enhance their grades.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid" style="background-color: #f5f6fa;">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <img src="https://torusacademia.com/blog/wp-includes/images/torus-image-3.webp"
                                alt="computer" style="height: 600px; width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-4" style="background: #f5f6fa; color: black;">
                <div class="row">
                    <div class="col-md-11">
                        <div>
                            <h2>Let Torus Academy Help You To Achieve Your Desired Academic Results!</h2>
                        </div>
                        <div>
                            <p>We understand that it can be quite hard for students to have a stellar grasp of each and
                                every concept they are being taught in schools. While some students tend to excel at
                                everything effortlessly, others take time. Of course, as a parent, you want to do
                                everything you can to help your child do the best at every stage. This is exactly what
                                we want to ensure with our online tutoring.</p>
                        </div>
                        <div>
                            <p>At Torus Academy, we provide online tutors who are experts in their respective subjects.
                                They are known for conveying their concepts to the students in a way that helps them
                                understand everything completely. Your child will be given individual attention at all
                                times, ensuring that they have a full grasp of the subject being taught.</p>
                        </div>
                        <div>
                            <p>Although if you are worried about virtual learning not being effective, we are here to
                                put your worries to rest. Whether your child is taking an A-Level English Language
                                course or primary tutoring lessons, our online tutors ensure they have proper
                                understanding at all times. They not only provide feedback to their students but also
                                take feedback from them regarding the pace of learning or any other thing.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-4" style="background: #f5f6fa; color: black;">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h2>Using The Most Advanced Technology To Deliver Results!</h2>
                        </div>
                        <div>
                            <p>We at Torus Academy are very particular when it comes to ensuring effective learning for
                                the students. Hence, we have started online tutoring in Saudia Arabia that makes use of
                                all the latest technology and online tools to ensure that each and every child is being
                                taught in a way they fully understand. These tools include meeting platforms,
                                whiteboards, and various other things that ultimately make it easier for the teacher and
                                the student to have an effective learning session.</p>
                        </div>
                        <div>
                            <p>So, whether you are taking an online course in graphic design or enrolling your child in
                                O level tuition, you will be given access to the most amazing online tools. All you have
                                to do is contact us regarding the online course you or your child wishes to enroll in,
                                and we will take care of everything else.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-4" style="background: #f5f6fa; color: black;">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h2>Get In Touch With Us!
                            </h2>
                        </div>
                        <div>
                            <p>Now, if you wish to hire an A level online tutor in Saudia Arabia or take online classes
                                for any other course we offer, give Torus Academy a call. We will align you with some of
                                the best tutors we have on board and further ensure you achieve the results you had
                                wished originally. The tutor will not only teach you about the subject but will also
                                listen to your expectations and help you reach them. They will guide you through the
                                entire syllabus plan and will further offer you tips on how to memorize concepts in an
                                effective and efficient manner. All in all, you can be assured that if you hire our
                                online tutoring services, you are guaranteed to excel in your exams.</p>
                        </div>
                        <div>
                            <p>We guarantee only the best for our students, continuously monitor quality teaching and
                                overlook tutors to make sure they are assisting you to reach your potential. This way,
                                you can feel confident that your grades will not drop unexpectedly. With our help, they
                                will rise steadily higher than before. Just give us a call and tell us what you are
                                looking for, and we will provide you with an online tutor that will help you make your
                                dream grades a reality.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid" style="background: #f5f6fa; color: black;">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h2 id="line" class="text-center fw-bold">Join As A Student</h2>
                        </div>
                        <div>
                            <p class="text-center fs-4">More and more students are joining TORUS and scoring A s*. </p>
                        </div>
                        <div>
                            <p class="text-center fs-4">Your goals is closer than you think. What are you waiting for?
                            </p>
                        </div>
                        <div class="text-center py-3">
                            <a href="<?php echo base_url().'welcome/createStudent'?>" class="btn btn-danger">Become a student</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid" id="footer-links" style="background: #ffffff; ">
                <div class="row">
                    <div class="col-md-1">
                        <a href="#">
                            <img src="https://torusacademia.com/uploads/system/1a37546d1929c0ff3ca32d2ddacc41a9.png"
                                alt="flag">
                        </a>
                    </div>
                    <div class="col-md-4 py-4">
                        <div>
                            <p style="color: blue;"> © 2021-2023 All Rights Reserved. Developed By TriTechTeal</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="py-4">
                            <ul class="text-warning">
                                <li class="d-inline "> <a href="# " class="text-decoration-none">About</a> </li>
                                <li class="d-inline"> <a href="#" class="text-decoration-none">Contect Us</a> </li>
                                <li class="d-inline"> <a href="#" class="text-decoration-none">Blog</a></li>
                                <li class="d-inline"> <a href="#" class="text-decoration-none">Refund policy</a></li>
                                <li class="d-inline"> <a href="#" class="text-decoration-none">Instruction for
                                        teacher</a></li>
                                <li class="d-inline"> <a href="#" class="text-decoration-none">Privacy policy</a></li>
                                <li class="d-inline"> <a href="#" class="text-decoration-none">Terms and condition</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
</body>
<?php include("front/footer.php") ?>

