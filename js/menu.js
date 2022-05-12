var nav = document.querySelector("nav");
var menu = document.querySelector(".el-navigation-niveau-1");

const posYNav = nav.offsetTop;
//console.log(posYNav);

window.addEventListener("scroll", (e) => {
    if(window.scrollY > posYNav - 10){
        nav.classList.add("sticky");
    }else{
        nav.classList.remove("sticky");
    }
});

const btn_open_menu = document.querySelector(".open_menu_phone button");
btn_open_menu.addEventListener('click', (e) => {
    e.preventDefault();
    document.querySelector("body").insertAdjacentHTML("beforeend",`
    <section id="el-lightbox-menu">
        <div class="box-menu-phone" data-aos="fade-left" data-aos-dureation="1000">
            <button data-aos="fade-down" data-aos-dureation="1000" data-aos-delay="200" id="close_menu" class="el-center-box"><i class="fa fa-times"></i></button>
            <ul>
                <li><a href="https://el-jos.github.io/fpmSetaFinal4/index.php">Home</a></li>
                <li>
                    <label>Qualifications</label>
                    <ul>
                        <li><a href="https://el-jos.github.io/fpmSetaFinal4/qualifications.php">Qualifications</a></li>
                        <li><a href="https://el-jos.github.io/fpmSetaFinal4/critical_skills.php">Critical skills</a></li>
                    </ul>
                </li>
                <li>
                    <label>Sub-sectors</label>
                    <ul>
                        <li><a href="https://el-jos.github.io/fpmSetaFinal4/about.php">All about FP&M Seta</a></li>
                        <li><a href="https://el-jos.github.io/fpmSetaFinal4/evolution_processing_manufacturing.php">Evolution of fibre processing and manufacturing</a></li>
                        <li><a href="https://el-jos.github.io/fpmSetaFinal4/manufacturing_process.php">Manufacturing process</a></li>
                        <li><a href="https://el-jos.github.io/fpmSetaFinal4/sub_sectors.php">sub-sectors</a></li>
                    </ul>
                </li>
                <li><a href="https://el-jos.github.io/fpmSetaFinal4/job_search.php">Job search</a></li>
            </ul>
            <div class="el_reseaux_socieaux el-center-box">
                <div>
                    <a href="https://www.facebook.com/fpmseta/photos/?ref=page_internal&_rdc=1&_rdr"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.youtube.com/user/fpmseta/featured"><i class="fa fa-youtube-play"></i></a>
                    <a href="https://www.linkedin.com/company/fp&m-seta/?msclkid=fa1b9c31c0b111ecb0092235c3948864&originalSubdomain=za"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </section>
    `);

    const close_menu = document.getElementById('close_menu');
    close_menu.addEventListener('click', () => {
        document.querySelector('body').removeChild(document.getElementById("el-lightbox-menu"));
    });
});