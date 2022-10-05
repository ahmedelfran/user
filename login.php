<?php
    include "./shared/head.php";
?>


<div class="container-fluid" id="container">
    <div class="forms">
        <div class="signin-signup">
            <form class="sign-in-form">

                <h2> Sign in </h2>

                <div class="input">
                    <i class="fa-solid fa-user"></i>
                    <input type="email" placeholder="Email">
                </div>

                <div class="input">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="password">
                </div>

                <button class="btn btn-info"> Login </button>

                <p class="social-text"> Or sign in with social platforms</p>
                <div class="social-madia">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                        </i>
                    </a>
                </div>

            </form>

            <form class="sign-up-form">
                <h2> Sign Up </h2>
                <div class="input">
                    <input type="text" placeholder="Username">
                </div>
                <div class="input">
                    <input type="text" placeholder="Email">
                </div>
                <div class="input">
                    <input type="password" placeholder="password">
                </div>
                <div class="input">
                    <input type="number" placeholder="Age">
                </div>
                <div class="input">
                    <input type="number" placeholder="Phone">
                </div>
                <div class="input">
                    <input type="text" placeholder="Address">
                </div>
                <div class="input">
                    <input type="file" >
                </div>
                <button class="btn btn-info"> SIGN UP </button>
            </form>
        </div>
    </div>


    <div class="panels">

        <div class="panel left-panel">
            <div class="content-login">
                <h3>New here ? </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum nihil, expedita cum dolor maiores
                    voluptate facilis eaque suscipit </p>
                <button class="btn transparent" id="sign-up-btn">Sign up</button>
            </div>
            <img src="/instant/user/image/p1.png" class="image img-fluid" alt="">
        </div>

        <div class="panel right-panel">
            <div class="content-login">
                <h3>One of us ? </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum nihil, expedita cum dolor maiores
                    voluptate facilis eaque suscipit </p>
                <button class="btn transparent" id="sign-in-btn">Sign in</button>
            </div>
            <img src="/instant/user/image/p2.png" class="image img-fluid" alt="">
        </div>
    </div>

</div>
<script>

let sign_in_btn = document.getElementById("sign-in-btn");
let signup_btn = document.getElementById("sign-up-btn");
let container= document.getElementById("container");

signup_btn.addEventListener("click", ()=> {
    container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", ()=> {
    container.classList.remove("sign-up-mode");
});
</script>
<?php
include "./shared/script.php"
?>