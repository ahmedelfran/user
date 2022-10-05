<?php
include "./shared/head.php";
include "./shared/header.php";
include "./shared/Sidebar.php";
?>
<div class="home-profile" id="home">
    <div class="title-home">
        <i class="fa-solid fa-house"></i>
        <h2>Instant Courses</h2>
    </div>
    <div class="hero-features">
        <div class="single-hero-feature-One">
            <i class="fa-solid fa-graduation-cap"></i>
            <h5>+2000 Developer</h5>
            <div class="round-1"></div>
            <div class="round-2"></div>
        </div>
        <div class="single-hero-feature-two">
            <i class="fa-solid fa-chalkboard"></i>
            <h5>2 Months Training</h5>
            <div class="round-1"></div>
            <div class="round-2"></div>
        </div>
        <div class="single-hero-feature-three">
            <i class="fa-solid fa-chalkboard-user"></i>
            <h5>Qualified Instructors</h5>
            <div class="round-1"></div>
            <div class="round-2"></div>
        </div>
        <div class="single-hero-feature-four">
            <i class="fa-solid fa-earth-americas"></i>
            <h5>Online , Offline</h5>
            <div class="round-1"></div>
            <div class="round-2"></div>
        </div>
    </div>
    <div class="Services">
        <h2> Courses</h2>
        <div class="line"></div>
        <div class="card-services">
            <div class="card-body">
                <div class="img-top">
                    <img src="/instant/user/image/web.jpeg" alt="">
                </div>
                <div class="content-body">
                    <h4>WEB DESIGN</h4>
                    <p>Design your site with ease as our web designers work to the highest standards</p>
                </div>
                <button type="button" data-toggle="modal" data-target="#exampleModal">
                    <h6>booking</h6>
                </button>
            </div>
            <div class="card-body">
                <div class="img-top">
                    <img src="/instant/user/image/web-de.jpg" alt="">
                </div>
                <div class="content-body">
                    <h4>WEB DEVELOPMENT</h4>
                    <p>Easily develop your site so our web developers work at the highest quality</p>
                </div>
                <button type="button" data-toggle="modal" data-target="#exampleModal">
                    <h6>booking</h6>
                </button>
            </div>
            <div class="card-body">
                <div class="img-top">
                    <img src="/instant/user/image/ai.webp" alt="">
                </div>
                <div class="content-body">
                    <h4>ARTIFICIAL INTELLIGENCE</h4>
                    <p>Dream about your design and we are talented in designing what you want</p>
                </div>
                <button type="button" data-toggle="modal" data-target="#exampleModal">
                    <h6>booking</h6>
                </button>
            </div>
            <div class="card-body">
                <div class="img-top">
                    <img src="/instant/user/image/flutter.jpg" alt="">
                </div>
                <div class="content-body">
                    <h4>FLUTTER</h4>
                    <p>Do you want an Android or iOS mobile app? We are able to do this easily</p>
                </div>
                <button type="button" data-toggle="modal" data-target="#exampleModal">
                    <h6>booking</h6>
                </button>
            </div>
        </div>
        <div class="card-services">
            <div class="card-body">
                <div class="img-top">
                    <img src="/instant/user/image/network.webp" alt="">
                </div>
                <div class="content-body">
                    <h4>NETWORK</h4>
                    <p>We are working to solve all your software problems as we have a full team</p>
                </div>
                <button type="button" data-toggle="modal" data-target="#exampleModal">
                    <h6>booking</h6>
                </button>
            </div>
            <div class="card-body">
                <div class="img-top">
                    <img src="/instant/user/image/security.jpg" alt="">
                </div>
                <div class="content-body">
                    <h4>SECURITY</h4>
                    <p>We offer different ideas to market your products easily and quickly</p>
                </div>
                <button type="button" data-toggle="modal" data-target="#exampleModal">
                    <h6>booking</h6>
                </button>
            </div>
            <div class="card-body">
                <div class="img-top">
                    <img src="/instant/user/image/android.jpg" alt="">
                </div>
                <div class="content-body">
                    <h4>ANDROID</h4>
                    <p>We modify all images submitted to us with all modern design programs</p>
                </div>
                <button type="button" data-toggle="modal" data-target="#exampleModal">
                    <h6>booking</h6>
                </button>
            </div>
            <div class="card-body">
                <div class="img-top">
                    <img src="/instant/user/image/IT-Consultancy-img.jpg" alt="">
                </div>
                <div class="content-body">
                    <h4>IT CONSULTANCY</h4>
                    <p>We have the best engineers for IT consulting and ready for any technical question</p>
                </div>
                <button type="button" data-toggle="modal" data-target="#exampleModal">
                    <h6>booking</h6>
                </button>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure about booking</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6>name diploma</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-model" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-model">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include "./shared/script.php"
?>