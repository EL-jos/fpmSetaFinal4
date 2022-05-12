
<section id="contact" class="el-center-box">
    <div>
        <article class="el_img_box" data-aos="fade-right" data-aos-duration="1000">
            <img src="assets/images/ceo_contact.png" alt="" class="img">
        </article>
        <article class="contact-us" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <h2>Contact Us !</h2>
            <form action="">
                <div class="ligne" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="colonne">
                        <input type="text" name="firstName" id="firstName" required>
                        <label for="firstName">First name</label>
                    </div>
                    <div class="colonne">
                        <input type="text" name="lastName" id="lastName" required>
                        <label for="lastName">Last name</label>
                    </div>
                </div>
                <div class="ligne" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="colonne">
                        <input type="tel" name="phone" id="phone" required>
                        <label for="phone">phone</label>
                    </div>
                    <div class="colonne">
                        <input type="email" name="email" id="email" required>
                        <label for="email">E-mail</label>
                    </div>
                </div>
                <div class="ligne" data-aos="fade-up" data-aos-duration="1000">
                    <div class="colonne textarea">
                        <textarea name="message" id="message" required></textarea>
                        <label for="message">Message</label>
                    </div>
                </div>
                <button class="el_custom_btn" data-aos="fade-up" data-aos-duration="1000">
                    <span><i class="fa fa-paper-plane"></i>Send</span>
                    <span></span>
                </button>
            </form>
        </article>
    </div>
</section>
<footer class="el-center-box">
    <div>
        <div class="el_container_logo_footer" data-aos="fade-right" data-aos-duration="1000">
            <a href="https://el-jos.github.io/fpmSetaFinal4/index.php"><img src="assets/svg/logo.svg" alt=""></a>
            <div class="el_reseaux_socieaux">
                <p>Follow us on social media</p>
                <div>
                    <a href="https://www.facebook.com/fpmseta/photos/?ref=page_internal&_rdc=1&_rdr"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.youtube.com/user/fpmseta/featured"><i class="fa fa-youtube-play"></i></a>
                    <a target="" href="https://www.linkedin.com/company/fp&m-seta/?msclkid=fa1b9c31c0b111ecb0092235c3948864&originalSubdomain=za"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <section>
            <article class="el_qualification" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <h2>Qualifications</h2>
                <a href="">
                    <i class="fa fa-angle-right"></i>
                    Qualifications
                </a>
                <a href="">
                    <i class="fa fa-angle-right"></i>
                    Critical skills
                </a>
            </article>
            <article class="el_qualification" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <h2>SUB-SECTORS</h2>
                <a href="">
                    <i class="fa fa-angle-right"></i>
                    All about FP&M seta
                </a>
                <a href="">
                    <i class="fa fa-angle-right"></i>
                    Evolution of processing <br>
                    and manufacturing
                </a>
                <a href="">
                    <i class="fa fa-angle-right"></i>
                    Manufacturing process
                </a>
                <a href="">
                    <i class="fa fa-angle-right"></i>
                    Sub-sectors
                </a>
            </article>
            <article class="el_qualification" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                <h2>contact details </h2>
                <a href="tel:+27114031700">
                    <i class="fa fa-phone"></i>
                    +27 114 031 700
                </a>
                <a href="mailto:info@fpmseta.org.za">
                    <i class="fa fa-envelope-o"></i>
                    info@fpmseta.org.za
                </a>
                <a href="https://www.google.com/maps/place/1+Newtown+Ave,+Killarney,+Johannesburg,+2193,+Afrique+du+Sud/@-26.1696199,28.0502813,17z/data=!3m1!4b1!4m5!3m4!1s0x1e950c45e1ca664f:0xf9f367c83adeedc6!8m2!3d-26.1696199!4d28.05247">
                    <i class="fa fa-map-o"></i>
                    1 Newtown Avenue Killarney,<br /> Johannesburg 2193
                </a>
            </article>
        </section>
    </div>
    <p class="el_copyright">Copyright © <script>document.write(new Date().getFullYear());</script> All rights reserved</p>
</footer>
<div id='lightbox-alert' class='el-center-box'>
    <iframe src='https://www.youtube.com/embed/RyFYvJaUrFM' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
</div>
<a href="https://api.whatsapp.com/send?phone=27114031700&text=Hello, Need help" id="el_whatsapp" class="el-center-box">
    <img src="assets/svg/whatsapp.svg" alt="">
</a>
<!-- JQUERY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!-- AOS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<!-- MENU -->
<script src="js/menu.js"></script>
<!-- ANIMATION TEXT -->
<script src="js/anime.min.js"></script>
<!-- VIDEO -->
<script src="js/video.js"></script>
<!-- ANIME TITRE -->
<script src="js/anime_titre.js"></script>
<script>
    AOS.init();

    const register_your_cv = document.getElementById("register_your_cv");
    const login = document.getElementById("login");

    register_your_cv.addEventListener('click', (e) => {
        e.preventDefault();
        document.querySelector("body").insertAdjacentHTML("beforeend", `
        <section id="lightbox_register" class="el-center-box">
            <form action="" class="form" data-aos="fade-up" data-aos-duration="1000">
                <h1>Register your cv</h1>
                <div class="form-step form-step-active">
                    <div class="el-form-ligne">
                        <div class="el-form-colonne input-group">
                            <input type="text" name="title" id="title" list="el_list_title"  required/>
                            <label for="title">Title</label>
                            <datalist id="el_list_title">
                                <option value="Dr">
                                <option value="Hon">
                                <option value="Mr">
                                <option value="Mrs">
                                <option value="Ms">
                                <option value="Prof">
                                <option value="Rev">
                            </datalist>
                        </div>
                        <div class="el-form-colonne input-group">
                            <input type="text" name="gender" id="gender" list="el_list_gender" required>
                            <label for="gender">Gender</label>
                            <datalist id="el_list_gender">
                                <option value="Dr">
                                <option value="Hon">
                            </datalist>
                        </div>
                    </div>
                    <div class="el-form-ligne">
                        <div class="el-form-colonne el-total-width input-group">
                            <input type="text" name="last_name" id="last_name" required>
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="el-form-ligne">
                        <div class="el-form-colonne el-total-width input-group">
                            <input type="text" name="first_name" id="first_name" required>
                            <label for="first_name">First Name</label>
                        </div>
                    </div>
                    <div class="el-form-ligne">
                        <div class="el-form-colonne input-group">
                            <input type="text" name="ethnicity" id="ethnicity" list="el_list_ethnicity"  required/>
                            <label for="ethnicity">Ethnicity</label>
                            <datalist id="el_list_ethnicity">
                                <option value="Dr">
                                <option value="Hon">
                                <option value="Mr">
                                <option value="Mrs">
                                <option value="Ms">
                                <option value="Prof">
                                <option value="Rev">
                            </datalist>
                        </div>
                        <div class="el-form-colonne el-no-border-bottom input-group">
                            <select name="disabled" id="disabled" required>
                                <option value="" disabled selected></option>
                                <option value="no">No</option>
                                <option value="yes">Yes</option>
                            </select>
                            <label for="">Disabled</label>
                        </div>
                    </div>
                    <div class="el-form-ligne">
                        <div class="el-form-colonne input-group">
                            <input type="text" name="citizenship" id="citizenship" list="el_list_citizenship"  required/>
                            <label for="citizenship">Citizenship</label>
                            <datalist id="el_list_citizenship">
                                <option value="Dr">
                                <option value="Hon">
                                <option value="Mr">
                                <option value="Mrs">
                                <option value="Ms">
                                <option value="Prof">
                                <option value="Rev">
                            </datalist>
                        </div>
                        <div class="el-form-colonne input-group">
                            <input type="date" name="birth_date" id="birth_date" required>
                        </div>
                    </div>
                    <div class="el-form-ligne">
                        <div class="el-form-colonne el-total-width input-group">
                            <input type="text" name="current_home_location" id="current_home_location" required>
                            <label for="current_home_location">Current Home Location</label>
                        </div>
                    </div>
                    <div class="el-form-ligne">
                        <div class="el-form-colonne el-total-width input-group">
                            <input type="text" name="village" id="village" required>
                            <label for="village">Enter the Village/Township you reside in?</label>
                        </div>
                    </div>
                    <!-- <div class="el-form-next-step">
                        <button class="el-width-50">Next</button>
                    </div> -->
                </div>
                <div class="form-step">
                    <div class="el-form-ligne">
                        <div class="el-form-colonne el-total-width input-group">
                            <input type="email" name="email" id="email" required>
                            <label for="email">E-mail</label>
                        </div>
                    </div>
                    <div class="el-form-ligne">
                        <div class="el-form-colonne el-total-width input-group">
                            <input type="tel" name="phone" id="phone" required>
                            <label for="phone">Mobile Phone</label>
                        </div>
                    </div>
                    <div class="el-form-ligne">
                        <div class="el-form-colonne el-total-width input-group">
                            <input type="tel" name="alt_phone" id="alt_phone" required>
                            <label for="alt_phone">Alternate Telephone</label>
                        </div>
                    </div>
                </div>
                <div class="form-step">
                    <div class="el-form-ligne">
                        <div class="el-form-colonne el-total-width input-group">
                            <input type="text" name="preferred_jobtitle" id="preferred_jobtitle" required>
                            <label for="preferred_jobtitle">Preferred Jobtitle</label>
                        </div>
                    </div>
                    <div class="el-form-ligne">
                        <div class="el-form-colonne el-total-width input-group">
                            <input type="text" name="availability" id="availability" list="el_list_availability"  required/>
                            <label for="availability">Availability</label>
                            <datalist id="el_list_availability">
                                <option value="Dr">
                                <option value="Hon">
                                <option value="Mr">
                                <option value="Mrs">
                                <option value="Ms">
                                <option value="Prof">
                                <option value="Rev">
                            </datalist>
                        </div>
                    </div>
                    <div class="el-form-ligne">
                        <div class="el-form-colonne el-total-width input-group">
                            <input type="text" name="current_salary" id="current_salary" list="el_list_current_salary" required>
                            <label for="current_salary">Current Salary</label>
                            <datalist id="el_list_current_salary">
                                <option value="Dr">
                                <option value="Hon">
                            </datalist>
                        </div>
                    </div>
                    <div class="el-form-ligne">
                        <div class="el-form-colonne el-total-width input-group">
                            <input type="text" name="desired_salary" id="desired_salary" list="el_list_desired_salary" required>
                            <label for="desired_salary">Desired Salary</label>
                            <datalist id="el_list_desired_salary">
                                <option value="Dr">
                                <option value="Hon">
                            </datalist>
                        </div>
                    </div>
                    <div class="el-form-ligne">
                        <div class="el-form-colonne el-total-width input-group">
                            <input type="text" name="willing_to_relate" id="willing_to_relate" list="el_list_willing_to_relate" required>
                            <label for="willing_to_relate">Are you willing to relate?</label>
                            <datalist id="el_list_willing_to_relate">
                                <option value="Dr">
                                <option value="Hon">
                            </datalist>
                        </div>
                    </div>
                </div>
                <div class="form-step">
                    <div class="el-form-ligne">
                        <div class="el-form-colonne input-group">
                            <input type="text" name="experience" id="experience" list="el_list_experience"  required/>
                            <label for="experience">Experience</label>
                            <datalist id="el_list_experience">
                                <option value="Dr">
                                <option value="Hon">
                                <option value="Mr">
                                <option value="Mrs">
                                <option value="Ms">
                                <option value="Prof">
                                <option value="Rev">
                            </datalist>
                        </div>
                        <div class="el-form-colonne input-group">
                            <input type="text" name="training_program" id="training_program" list="el_list_training_program" required>
                            <label for="training_program">Training Program</label>
                            <datalist id="el_list_training_program">
                                <option value="Dr">
                                <option value="Hon">
                            </datalist>
                        </div>
                    </div>
                    <div class="el-form-ligne">
                        <div class="el-form-colonne input-group">
                            <input type="text" name="seta_category" id="seta_category" list="el_list_seta_category"  required/>
                            <label for="seta_category">Seta Category</label>
                            <datalist id="el_list_seta_category">
                                <option value="Dr">
                                <option value="Hon">
                                <option value="Mr">
                                <option value="Mrs">
                                <option value="Ms">
                                <option value="Prof">
                                <option value="Rev">
                            </datalist>
                        </div>
                        <div class="el-form-colonne input-group">
                            <input type="text" name="seta_qualification" id="seta_qualification" list="el_list_seta_qualification" required>
                            <label for="seta_qualification">Seta Qualification</label>
                            <datalist id="el_list_seta_qualification">
                                <option value="Dr">
                                <option value="Hon">
                            </datalist>
                        </div>
                    </div>
                </div>
                <div class="form-step">
                    <div class="el-form-ligne">
                        <div class="el-form-colonne textarea el-total-width input-group">
                            <textarea name="introduction" id="introduction"></textarea>
                            <label for="introduction">Introduction</label>
                        </div>
                    </div>
                </div>
                <div class="form-step">
                    <div class="el-form-ligne">
                        <div class="el-form-colonne el-total-width el-your-cv el-no-border-bottom input-group">
                            <input type="file" name="cv" id="cv" placeholder="cv" style="display: none;" required/>
                            <label for="cv"> <i class="fa fa-download"></i> Select your CV file</label>
                        </div>
                    </div>
                </div>
                <div class="el-form-next-step">
                    <button class="el_custom_btn right">
                        <span><i class="fa fa-paper-plane"></i>Send</span>
                        <span></span>
                    </button>
                </div>
            </form>
        </section>
        `);
        const cv = document.getElementById('cv');
        cv.addEventListener('change', () => {
            //var filesize = (event.target.files[0].size/1024)/1024; // en MB
            let file = event.target.files[0];
            console.log(file);
            document.querySelector("label[for='cv']").textContent = `${file.name}`
        });
        document.getElementById('lightbox_register').addEventListener("click", (e) => {
            if(e.target !== e.currentTarget) return
            document.querySelector("body").removeChild(document.getElementById('lightbox_register'));
        });
    });

    login.addEventListener('click', (e)=>{
        e.preventDefault();
        
        document.querySelector("body").insertAdjacentHTML("beforeend", `
        <section id="lightbox_login" class="el-center-box">
            <form action="" class="form login" data-aos="fade-up" data-aos-duration="1000">
                <h1>Log In</h1>
                <div class="form-step">
                    <div class="el-form-ligne">
                        <div class="el-form-colonne el-total-width input-group">
                            <input type="text" name="username" id="username" required>
                            <label for="username">Username</label>
                        </div>
                    </div>
                    <div class="el-form-ligne">
                        <div class="el-form-colonne el-total-width input-group">
                            <input type="password" name="password" id="password" required>
                            <label for="password">Password</label>
                            <button type="button" class="el-show-password active">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="el-mask-password">
                                <i class="fa fa-eye-slash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="el-form-ligne">
                        <div class="el-form-colonne el-total-width el-no-border-bottom input-group">
                            <a href="">Forgot password?</a>
                        </div>
                    </div>
                </div>
                <div class="el-form-next-step">
                    <button type="submit" class="el_custom_btn right">
                        <span><i class="fa fa-paper-plane"></i>Send</span>
                        <span></span>
                    </button>
                </div>
            </form>
        </section>
        `);

        const show_password = document.querySelector('.el-show-password');
        const mask_password = document.querySelector('.el-mask-password');
        const password = document.querySelector('#password');

        show_password.addEventListener('click', (e)=>{

            e.preventDefault();

            password.type = "text";
            show_password.classList.toggle('active');
            mask_password.classList.toggle('active');
        });

        mask_password.addEventListener('click', (e)=>{

            e.preventDefault();

            password.type = "password";
            mask_password.classList.toggle('active');
            show_password.classList.toggle('active');
        });

        document.getElementById('lightbox_login').addEventListener("click", (e) => {
            if(e.target !== e.currentTarget) return
            document.querySelector("body").removeChild(document.getElementById('lightbox_login'));
        });
    });
</script>