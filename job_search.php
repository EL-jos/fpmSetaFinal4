<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job search</title>
    <?php require_once "php/head.php" ?>
    <link rel="stylesheet" href="css/pages.css">
    <link rel="stylesheet" href="css/reponsive_index.css">
</head>
<body>
    <main>
        <header>
            <?php require_once "php/between_header.php" ?>
            <section class="header_bg">
                <img src="assets/images/bg_5.jpg" alt="" class="img">
                <div class="el_content_path">
                    <h2 class="text">Job search</h2>
                    <p><a href="">Home</a> <i class="fa fa-chevron-right"></i> <span>Job search</span></p>
                </div>
            </section>
            <?php require_once "php/menu_desktop.php" ?>
        <div class="indicator"></div>
        </header>
        <section class="qualification">
            <div>
                <section id="jobs" class="el-center-box">
                    <div>
                        <div class="el_box_title el-center-box" data-aos="fade-right" data-aos-duration="1000">
                            <h2>Latest Positions</h2>
                            <legend>There is a moment in the life of any aspiring.</legend>
                        </div>
                        <form action="" class="el-grid-jobs">
                            <div class="el_container" data-aos="fade-up" data-aos-duration="1000">
                                <input type="text" name="" id="" placeholder="Type here">
                            </div>
                            <div class="el_container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <input type="text" name="" id="" list="el_list_category" placeholder="Select or type to search">
                                <datalist id="el_list_category">
                                    <option value="High School">
                                    <option value="Bachelors Degree">
                                    <option value="Masters Degree">
                                    <option value="PhD">
                                </datalist>
                            </div>
                            <div class="el_container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <input type="text" name="" id="" list="el_list_location" placeholder="Select or type to search">
                                <datalist id="el_list_location">
                                    <option value="High School">
                                    <option value="Bachelors Degree">
                                    <option value="Masters Degree">
                                    <option value="PhD">
                                </datalist>
                            </div>
                            <button class="el_custom_btn" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                <span><i class="fa fa-search"></i>Search</span>
                                <span></span>
                            </button>
                        </form>
                    </div>
                </section>
            </div>
        </section>
        <?php require_once "php/footer.php" ?>
    </main>
</body>
</html>