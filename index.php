<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
   <!-- OWL CAROUSEL -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl_carousel.css">
    <?php require_once "php/head.php" ?>
    <link rel="stylesheet" href="css/reponsive_index.css">
</head>
<body>
    <main>
        <header class="header_home_page">
            <?php require_once "php/between_header.php" ?>
            <div class="owl-carousel owl-theme">
                <div class="slide el-center-box slider-1">
                    <img class="img" src="assets/images/bg-1.png" alt="">
                </div>
                <div class="slide el-center-box slider-2">
                    <img class="img" src="assets/images/bg-2.png" alt="">
                </div>
                <div class="slide el-center-box slider-2">
                    <img class="img" src="assets/images/bg-3.png" alt="">
                </div>
            </div>
            <div class="slide-content el-center-box">
                <article>
                    <h1 class="text">FUTURE PERFECT</h1>
                    <p>
                        SKILLS DEVELOPMENT
                    </p>
                    <button class="el_custom_btn">
                        <span>register your cv <i class="fa fa-address-card-o"></i></span>
                        <span></span>
                    </button>
                </article>
            </div>
            <?php require_once "php/menu_desktop.php" ?>
            <div class="indicator"></div>
        </header>
        <section id="el_begin_and_presentation" class="el-center-box">
            <section id="el_begin" class="el-center-box">
                <div>
                    <article>
                        <header  class="el-center-box"><p>future</p></header>
                        <div class="el_body el-center-box">
                            <svg version="1.2" baseProfile="tiny" id="earth" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="-63 65 128 128" xml:space="preserve">
                            <path id="Layer_1_1_" d="M47.7,155.4L18.9,162c-0.2,1.4-0.8,2.9-1.7,4.1c-1.7,2.6-4.3,4.5-7.3,5.3c-3,0.7-6.2,0.2-8.8-1.6L-23.7,154
                                c-1.2-0.7-1.4-2.1-0.7-3.2s2.1-1.4,3.1-0.7l24.9,15.8c3.3,2,7.6,1.1,9.7-2.1s1.1-7.6-2.1-9.7l-31-19.6c-5.1-3.2-11-5.7-16.6-2.9
                                l-25.7,14.6l0.1,28.4l18.3-12.7c2.9-0.7,6.1-0.1,8.8,1.6l21.6,13.6c5.3,3.3,11.8,4.1,17.4,2.6L50.9,169c3.7-0.8,6.2-4.5,5.3-8.5
                                C55.2,156.9,51.5,154.6,47.7,155.4z M27.6,147.9c21.6-1.3,38-19.9,36.6-41.5c-1.3-21.6-19.9-38-41.5-36.6
                                c-21.6,1.3-38,19.9-36.6,41.5C-12.6,132.8,6,149.2,27.6,147.9z M16.4,100.8c-1.1-2.1,2-3.3,3.6-4.9c2-2.1,6.3-5.6,5.8-6.9
                                c-0.5-1.4-4.9-5.3-7.3-4.4c-0.5,0-3.3,3.1-3.9,3.6c0-1.1-0.2-1.7-0.2-2.7c0-0.7-1.4-1.3-1.3-1.8c0.1-1.2,3.1-3.5,3.8-4.4
                                c-0.6-0.4-2.6-1.8-3.1-1.6c-1.3,0.7-2.9,1.2-4.3,1.8c0-0.5-0.1-1-0.2-1.3c2.7-1.4,5.6-2.4,8.6-3.1l2.7,1l2,2.1l2,1.9
                                c0,0,1.2,0.5,1.7,0.5c0.6-0.1,2.5-2.6,2.5-2.6L28,76.1l-0.1-1.7c5.4,0.5,10.4,2.1,14.9,4.9c-0.7,0.1-1.7,0.2-2.6,0.5
                                c-0.4-0.2-2.5,0.2-2.4,1.1c0.1,0.7,3.8,3.7,5.4,6.3c1.6,2.7,6.1,4.4,6.9,7.4c0.8,3.5-0.5,8,0.1,12.2c0.6,4.1,5.1,8.4,5.1,8.4
                                s2,0.6,3.6,0.2c-1.2,6.1-3.9,11.7-8.1,16.5c-4.7,5.3-10.6,9-17.3,10.6c0.8-2.4,2.4-4.7,3.9-6c1.3-1.2,2.9-3.3,3.5-4.9
                                c0.6-1.7,1.4-3.1,2.4-4.7c1.2-2.1-3.7-5.1-5.3-5.6c-3.6-1.3-6.3-3.1-9.4-5.1c-2.3-1.4-9.2,1.8-11.8,0.8c-3.5-1.3-4.7-2.4-7.8-4.4
                                c-3.2-2.1-2.3-6.6-2.5-9.9c2.4,0,5.7-1,7.4,0.8c0.5,0.6,2.4,3.1,3.5,2.1C18.6,104.5,16.8,101.5,16.4,100.8z M-2.8,88.5
                                c0.2,1.7,1.1,3,1.1,4.2c0,4.7-0.4,7.5,2.6,11.2c1.2,1.4,1.6,3.6,2.1,5.4c0.6,1.7,2.6,2.5,4.1,3.5c2.9,1.9,5.7,4.3,8.8,6
                                c2,1.1,3.2,1.7,2.9,4.1c-0.4,1.9-0.4,3.1-1.3,4.9c-0.2,0.6,1.4,3.8,1.9,4.2c1.6,1.3,3.1,2.6,4.8,3.8c2.6,1.9,0,4.7-1,7.6
                                c-7.6-0.5-14.9-3.5-20.8-8.6c-6.9-6.1-11-14.6-11.6-23.7C-9.8,102.7-7.8,95-2.8,88.5z"/>
                            </svg>
                        </div>
                    </article>
                    <article>
                        <header  class="el-center-box"><p>perfect</p></header>
                        <div class="el_body el-center-box">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 442.311 442.311" style="enable-background:new 0 0 442.311 442.311;"
                                xml:space="preserve">
                                <g>
                                    <path d="M440.496,250.577l-20.711-29.42l20.713-29.42c2.135-3.036,2.402-7.008,0.693-10.301c-1.707-3.294-5.109-5.361-8.822-5.361
                                        l-38.766-0.001c-2.635,0.001-5.164,1.048-7.029,2.911l-28.916,28.919l-120.993-0.001
                                        c-4.054-104.124-55.514-186.748-118.198-186.748C53.144,21.155,0,110.875,0,221.155c0,110.279,53.144,200,118.466,200
                                        c62.684,0,114.144-82.621,118.198-186.744h120.994l28.918,28.918c1.863,1.863,4.391,2.911,7.027,2.91h38.766
                                        c3.713,0.001,7.113-2.066,8.822-5.361C442.904,257.585,442.633,253.613,440.496,250.577z M134.967,378.951
                                        c-51.538,0-93.467-70.787-93.467-157.796S83.429,63.359,134.967,63.359c48.894,0,89.135,63.714,93.135,144.545h-57.12
                                        c-3.608-27.971-18.381-48.986-36.015-48.986c-20.329,0-36.868,27.919-36.868,62.237c0,34.32,16.539,62.241,36.868,62.241
                                        c17.633,0,32.406-21.015,36.015-48.985h57.12C224.099,315.239,183.86,378.951,134.967,378.951z"/>
                                </g>
        
                            </svg>
                        </div>
                    </article>
                    <article>
                        <header  class="el-center-box"><p>skills</p></header>
                        <div class="el_body el-center-box">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 403.34 403.34" style="enable-background:new 0 0 403.34 403.34;" xml:space="preserve">
                            <g>
                                <path d="M201.675,115.898c-24.577,0-44.571,19.994-44.571,44.571c0,24.578,19.994,44.573,44.571,44.573
                                    c24.571,0,44.561-19.995,44.561-44.573C246.235,135.892,226.246,115.898,201.675,115.898z"/>
                                <path d="M403.335,179.276c0-10.931-8.208-20.135-19.094-21.408l-22.891-2.676c-3.251-11.672-7.892-23.087-13.818-33.992
                                    l14.091-17.808c6.768-8.547,6.077-20.858-1.622-28.652l-30.214-30.212c-4.074-4.072-9.482-6.315-15.23-6.315
                                    c-4.844,0-9.612,1.666-13.427,4.69l-17.195,13.629c-11.289-6.424-23.367-11.483-35.967-15.067l-2.599-22.329
                                    c-1.283-10.889-10.489-19.098-21.415-19.098h-42.848c-10.933,0-20.135,8.209-21.406,19.098l-2.603,22.325
                                    c-12.919,3.657-25.341,8.908-36.984,15.633l-17.898-14.191c-3.793-3.008-8.546-4.664-13.382-4.664
                                    c-5.744,0-11.164,2.226-15.28,6.285L43.275,74.81c-7.736,7.738-8.436,20.059-1.63,28.656l15.104,19.105
                                    c-5.851,10.925-10.406,22.456-13.567,34.343l-24.085,2.748c-10.884,1.28-19.091,10.483-19.091,21.405L0,223.917
                                    c0.008,10.927,8.221,20.13,19.108,21.409l25.604,2.973c3.32,10.84,7.718,21.283,13.097,31.11l-16.157,20.387
                                    c-6.771,8.546-6.078,20.86,1.625,28.66l30.282,30.279c4.072,4.072,9.479,6.315,15.227,6.315c4.845,0,9.614-1.666,13.43-4.69
                                    l20.227-16.007c10.31,5.74,21.219,10.355,32.495,13.747l3.037,26.103c1.279,10.888,10.484,19.099,21.412,19.099h42.849
                                    c10.925,0,20.128-8.211,21.408-19.106l2.894-25.033c12.137-3.347,23.911-8.107,35.064-14.176l19.524,15.448
                                    c3.799,3.007,8.555,4.664,13.391,4.664c5.744,0,11.163-2.228,15.271-6.289l30.285-30.287c7.736-7.739,8.433-20.058,1.626-28.646
                                    l-15.151-19.222c6.191-11.052,11.035-22.617,14.426-34.446l23.268-2.674c10.889-1.285,19.1-10.492,19.1-21.417L403.335,179.276z
                                    M155.997,275.09v31.424c-6.142-2.686-12.003-5.895-17.528-9.571L155.997,275.09z M247.34,275.088l17.529,21.855
                                    c-5.525,3.678-11.388,6.886-17.529,9.571V275.088z M249.976,218.598c-3.499-5.056-9.265-8.074-15.424-8.074
                                    c-0.221,0-65.55,0-65.767,0c-6.157,0-11.924,3.018-15.371,8.001l-41.705,53.693c-15.284-19.447-24.41-43.953-24.41-70.55
                                    c0-63.064,51.307-114.37,114.371-114.37c63.064,0,114.371,51.307,114.371,114.37c0,26.598-9.126,51.104-24.411,70.551
                                    L249.976,218.598z"/>
                            </g>
        
                            </svg>
                        </div>
                    </article>
                </div>
            </section>
            <section id="presentation" >
                <div class="about_and_mask">
                    <!-- Only visible for small screens -->
                    <article class="about_responsive">
                        <img src="assets/images/ceo_a2.png" alt="" />
                        <h2 class="title" data-aos="fade-down" data-aos-duration="1000">
                            <span>welcom</span> to the FP&M Seta
                        </h2>
                        <p>
                            The Fibre Processing and Manufacturing (FP&M) SETA 
                            was established by the Honourable Minister of Higher 
                            Education and Training on 1 April 2011 after government 
                            took a decision to cluster sectors in order to strengthen 
                            value-chain linkages between related industries.
                            The FP&M SETA consist of 13 sub-sectors namely the clothing, 
                            footwear, forestry, furniture, general goods, leather, packaging, 
                            printing, print media, publishing, pulp and paper, textiles and 
                            wood products sectors. Although classified individually, 
                            the sub-sectors are closely integrated. Together they create 
                            tremendous value in the lives of consumers, by converting lumber, 
                            pulp, natural or synthetic fibres, animal skins/hides into finished 
                            products such as furniture, clothing, shoes, protective equipment, 
                            paper and paper board, printing (books, magazines, etc), industrial 
                            fabrics and extending into high-tech applications in many different 
                            industries (automotive, health and building construction to name a few). 
                            If you think about it, you can't go through a day without using one or more of 
                            the products manufactured in the fibre processing and manufacturing sector.
                        </p>
                        
                    </article>
                    <article class="about">
                        <h2 class="title" data-aos="fade-down" data-aos-duration="1000">
                            <span>welcom</span><br>
                            to the FP&M Seta
                        </h2>
                        <i class="fa fa-quote-left start" data-aos="fade-right" data-aos-duration="1000"></i>
                        <p data-aos="fade-down" data-aos-duration="1000">
                            The Fibre Processing and Manufacturing (FP&M) SETA 
                            was established by the Honourable Minister of Higher 
                            Education and Training on 1 April 2011 after government 
                            took a decision to cluster sectors in order to strengthen 
                            value-chain linkages between related industries.
                        </p>
                        <p data-aos="fade-down" data-aos-duration="1000">
                            The FP&M SETA consist of 13 sub-sectors namely the clothing, 
                            footwear, forestry, furniture, general goods, leather, packaging, 
                            printing, print media, publishing, pulp and paper, textiles and 
                            wood products sectors. Although classified individually, 
                            the sub-sectors are closely integrated. Together they create 
                            tremendous value in the lives of consumers, by converting lumber, 
                            pulp, natural or synthetic fibres, animal skins/hides into finished 
                            products such as furniture, clothing, shoes, protective equipment, 
                            paper and paper board, printing (books, magazines, etc), industrial 
                            fabrics and extending into high-tech applications in many different 
                            industries (automotive, health and building construction to name a few). 
                            If you think about it, you can't go through a day without using one or more of 
                            the products manufactured in the fibre processing and manufacturing sector.
                        </p>
                        <i class="fa fa-quote-left end" data-aos="fade-right" data-aos-duration="1000"></i>
                        <button class="el_custom_btn" data-aos="fade-up" data-aos-duration="1000">
                            <span>interested <i class="fa fa-long-arrow-right"></i></span>
                            <span></span>
                        </button>
                    </article>
                    <article class="el_img_mask">
                        <img src="assets/images/ceo_a2.png" class="img" alt="" data-aos="zoom-in-up" data-aos-delay="200">
                    </article>
                </div>
                <div class="el_counter_up">
                    <article class="el-center-box">
                        <img src="assets/svg/documents.svg" alt="">
                        <aside>
                            <span>30</span>
                            <p>REGISTERED <br>SDPs</p>
                        </aside>
                    </article>
                    <article class="el-center-box">
                        <img src="assets/svg/student.svg" alt="">
                        <aside>
                            <span>1,500</span>
                            <p>STUDENTS<br>REGISTERED</p>
                        </aside>
                    </article>
                    <article class="el-center-box">
                        <img src="assets/svg/card.svg" alt="">
                        <aside>
                            <span>100</span>
                            <p>ACCREDITED<br>PROGRAMS</p>
                        </aside>
                    </article>
                    <article class="el-center-box">
                        <img src="assets/svg/happy.svg" alt="">
                        <aside>
                            <span>300</span>
                            <p>HAPPY<br>CUSTOMERS</p>
                        </aside>
                    </article>
                </div>
            </section>
        </section>
        <section id="services" class="el-center-box">
            <div class="el_box_title el-center-box">
                <h2>FP&M SETA SUB-SECTORS</h2>
                <legend>There is a moment in the life of any aspiring.</legend>
            </div>
            <div class="grid-services" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="el_card">
                    <div class="el_imgBox  el-center-box">
                        <img class="img" src="assets/images/features/unknown.jpeg" alt="">
                        <div class="el-content">
                            <h3 class="title">Clothing Manufacturing and Fashion Design</h3>
                            <span class="span1"></span>
                            <span class="span2"></span>
                            <span class="span3"></span>
                            <span class="span4"></span>
                        </div>
                    </div>
                    <div class="details">
                        <h2>Clothing Manufacturing and Fashion Design</h2>
                        <p>
                            Design is the beginning of any manufacturing process, whether it is the manufacture of textiles, clothing, footwear, or leather goods. Fashion design is geared for the creative person who has a flair for fashion, style and an interest in prevailing trends, cultural influences and production.
                        </p>
                    </div>
                </div>
                <div class="el_card">
                    <div class="el_imgBox el-center-box">
                        <img class="img" src="assets/images/features/manufacture_of_footwear.jpeg" alt="">
                        <div class="el-content">
                            <h3 class="title">Footwear Manufacturing</h3>
                            <span class="span1"></span>
                            <span class="span2"></span>
                            <span class="span3"></span>
                            <span class="span4"></span>
                        </div>
                    </div>
                    <div class="details">
                        <h2>Footwear Manufacturing</h2>
                        <p>
                            Footwear use different types of material with widely varying characteristics and properties that dictate the type of manufacturing process to be used. The various component pieces of the footwear are first manufactured individually and then assembled into what we see on the retailer’s shelves.
                        </p>
                    </div>
                </div>
                <div class="el_card">
                    <div class="el_imgBox el-center-box">
                        <img class="img" src="assets/images/features/wood_treatment.jpeg" alt="">
                        <div class="el-content">
                            <h3 class="title">Furniture Manufacturing</h3>
                            <span class="span1"></span>
                            <span class="span2"></span>
                            <span class="span3"></span>
                            <span class="span4"></span>
                        </div>
                    </div>
                    <div class="details">
                        <h2>Furniture Manufacturing</h2>
                        <p>
                            This sub-sector is made up of employers in the upholstery, bedding and curtaining (textiles) in addition to timber. Companies that manufacture wood furniture dominate this sub-sector.
                        </p>
                    </div>
                </div>
                <div class="el_card">
                    <div class="el_imgBox el-center-box">
                        <img class="img" src="assets/images/features/treatment_of_other_materials.jpeg" alt="">
                        <div class="el-content">
                            <h3 class="title">Wood Manufacturing</h3>
                            <span class="span1"></span>
                            <span class="span2"></span>
                            <span class="span3"></span>
                            <span class="span4"></span>
                        </div>
                    </div>
                    <div class="details">
                        <h2>Wood Manufacturing</h2>
                        <p>
                            Wood products are diverse in their very nature. These products are used in a number of industries, including the home industry. Wood is also used as a source of energy, i.e. wood pellets are one form of a wood product used to generate fuel.
                        </p>
                    </div>
                </div>
                <div class="el_card">
                    <div class="el_imgBox el-center-box">
                        <img class="img" src="assets/images/features/manufacture_of_general.jpeg" alt="">
                        <div class="el-content">
                            <h3 class="title">General Goods Manufacturing</h3>
                            <span class="span1"></span>
                            <span class="span2"></span>
                            <span class="span3"></span>
                            <span class="span4"></span>
                        </div>
                    </div>
                    <div class="details">
                        <h2>General Goods Manufacturing</h2>
                        <p>
                            This sub-sector is responsible for the manufacture of general goods, luggage and handbags from leather or other products. These companies make use of a number of textile, leather and other products to generate items used to compliment apparel, for use in households and the corporate environment.
                        </p>
                    </div>
                </div>
                <div class="el_card">
                    <div class="el_imgBox el-center-box">
                        <img class="img" src="assets/images/features/newspaper_publishing.jpeg" alt="">
                        <div class="el-content">
                            <h3 class="title">Print media</h3>
                            <span class="span1"></span>
                            <span class="span2"></span>
                            <span class="span3"></span>
                            <span class="span4"></span>
                        </div>
                    </div>
                    <div class="details">
                        <h2>Print media</h2>
                        <p>
                            Publishing is defined as “The business of issuing printed matter for sale or distribution.” Increasingly publishing is about the distribution of content and information, whether the distribution is done physically or electronically
                        </p>
                    </div>
                </div>
                <div class="el_card">
                    <div class="el_imgBox el-center-box">
                        <img class="img" src="assets/images/features/leather_processing.jpeg" alt="">
                        <div class="el-content">
                            <h3 class="title">Leather Manufacturing</h3>
                            <span class="span1"></span>
                            <span class="span2"></span>
                            <span class="span3"></span>
                            <span class="span4"></span>
                        </div>
                    </div>
                    <div class="details">
                        <h2>Leather Manufacturing</h2>
                        <p>
                            Leather and leather goods such as handbags, luggage and saddlery, is manufactured from hides and skins, a natural resource obtained from animals, reptiles and birds (ostrich). The process of leather manufacture involves primarily a sequence of chemical operations.
                        </p>
                    </div>
                </div>
                <div class="el_card">
                    <div class="el_imgBox el-center-box">
                        <img class="img" src="assets/images/features/paper_manufacture.jpeg" alt="">
                        <div class="el-content">
                            <h3 class="title">Pulp and Paper Manufacturing</h3>
                            <span class="span1"></span>
                            <span class="span2"></span>
                            <span class="span3"></span>
                            <span class="span4"></span>
                        </div>
                    </div>
                    <div class="details">
                        <h2>Pulp and Paper Manufacturing</h2>
                        <p>
                            It is difficult to imagine a world without pulp, paper and tissue products. Think about the cereal box on your breakfast table, the tissue products throughout your home, the posters you pass in the streets, the tickets issued when you go to the movies. Then there are the newspapers, books and magazines that are so much a part of our daily lives.
                        </p>
                    </div>
                </div>
                <div class="el_card">
                    <div class="el_imgBox el-center-box">
                        <img class="img" src="assets/images/features/printing.jpeg" alt="">
                        <div class="el-content">
                            <h3 class="title">Printing</h3>
                            <span class="span1"></span>
                            <span class="span2"></span>
                            <span class="span3"></span>
                            <span class="span4"></span>
                        </div>
                    </div>
                    <div class="details">
                        <h2>Printing</h2>
                        <p>
                            The Printing sub sector is responsible for the printing of newspapers, books, magazines, packaging, labels and other related materials.
                        </p>
                    </div>
                </div>
                <div class="el_card">
                    <div class="el_imgBox el-center-box">
                        <img class="img" src="assets/images/features/book_publishing.jpeg" alt="">
                        <div class="el-content">
                            <h3 class="title">Publishing</h3>
                            <span class="span1"></span>
                            <span class="span2"></span>
                            <span class="span3"></span>
                            <span class="span4"></span>
                        </div>
                    </div>
                    <div class="details">
                        <h2>Publishing</h2>
                        <p>
                            Publishing of books, company brochures, musical books and many other publications and the publishing of recorded media and other publishing activities.
                        </p>
                    </div>
                </div>
                <div class="el_card">
                    <div class="el_imgBox el-center-box">
                        <img class="img" src="assets/images/features/pulp_production.jpeg" alt="">
                        <div class="el-content">
                            <h3 class="title">Forestry – Providing Raw Materials</h3>
                            <span class="span1"></span>
                            <span class="span2"></span>
                            <span class="span3"></span>
                            <span class="span4"></span>
                        </div>
                    </div>
                    <div class="details">
                        <h2>Forestry – Providing Raw Materials</h2>
                        <p>
                            This sub-sector is made up of employers who grow trees on a commercial basis. There are four activities that dominate this sub-sector, transport, forestry and tree nurseries, harvesting and maintenance. The value chain is also versatile as it feeds into a number of other sectors of the FP&M environment.
                        </p>
                    </div>
                </div>
                <div class="el_card">
                    <div class="el_imgBox el-center-box">
                        <img class="img" src="assets/images/features/textile_manufacturing.jpeg" alt="">
                        <div class="el-content">
                            <h3 class="title">Textile Manufacturing</h3>
                            <span class="span1"></span>
                            <span class="span2"></span>
                            <span class="span3"></span>
                            <span class="span4"></span>
                        </div>
                    </div>
                    <div class="details">
                        <h2>Textile Manufacturing</h2>
                        <p>
                            Textile manufacturing is the process of converting fibre (man-made or natural fibres) into yarn through a variety of processes, which typically involve a cleaning stage to remove any impurities, followed by spinning and twisting of the fibres.
                        </p>
                    </div>
                </div>
                <div class="el_card">
                    <div class="el_imgBox el-center-box">
                        <img class="img" src="assets/images/features/box.jpeg" alt="">
                        <div class="el-content">
                            <h3 class="title">Packaging</h3>
                            <span class="span1"></span>
                            <span class="span2"></span>
                            <span class="span3"></span>
                            <span class="span4"></span>
                        </div>
                    </div>
                    <div class="details">
                        <h2>Packaging</h2>
                        <p>
                            Packaging includes the manufacture of paper and paper-board, containers of paper and paper-board (including cardboard boxes) and the manufacture of metal containers such as cans and tins. Packaging is the medium through which products are branded.
                        </p>
                    </div>
                </div>
            </div>
        </section>
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
        <section id="iwillAndVideo" class="el-center-box">
            <div>
                <article class="el_modal">
                    <button class="el_custom_btn" data-aos="fade-up" data-aos-duration="1000">
                        <span><i class="fa fa-video-camera"></i>Watch video</span>
                        <span></span>
                    </button>
                </article>
                <article class="el_box_img" data-aos="fade-right" data-aos-duration="1000">
                    <a href="https://protect-de.mimecast.com/s/jyChCPjnWnuKxG49UzLu1P?domain=webapps.dhet.gov.za" target="_blank">
                        <img src="assets/images/iwill.jpeg" class="img" alt="">
                    </a>
                </article>
            </div>
        </section>
        <section id="offers" class="el-center-box">
            <div>
                <div class="grid-offers">
                    <article class="el-center-box" data-aos="flip-left" data-aos-duration="1000">
                        <div class="el_img_box"><img src="assets/images/services/career.jpg" alt="" class="img"></div>
                        <h2>Which subject to choose for a career at FP&M Seta?</h2>
                        <div class="el_stars">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div>
                        <a href="#">See more</a>
                    </article>
                    <article class="el-center-box" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200">
                        <div class="el_img_box"><img src="assets/images/services/qualification.jpg" alt="" class="img"></div>
                        <h2>Find out which industry qualifications are available!</h2>
                        <div class="el_stars">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div>
                        <a href="#">See more</a>
                    </article>
                    <article class="el-center-box" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="400">
                        <div class="el_img_box"><img src="assets/images/services/skills.jpg" alt="" class="img"></div>
                        <h2>Are you interested to know which skills are in demand?</h2>
                        <div class="el_stars">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div>
                        <a href="#">See more</a>
                    </article>
                    <article class="el-center-box" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="600">
                        <div class="el_img_box"><img src="assets/images/services/video.jpg" alt="" class="img"></div>
                        <h2>View our video clips in the FP&M Seta Sector</h2>
                        <div class="el_stars">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div>
                        <a href="#">See more</a>
                    </article>
                    <article class="el-center-box" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="800">
                        <div class="el_img_box"><img src="assets/images/services/e_learning.jpg" alt="" class="img"></div>
                        <h2>e-Learning</h2>
                        <div class="el_stars">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div>
                        <a href="#">See more</a>
                    </article>
                </div>
            </div>
        </section>
        <section id="el_gallery">
            <div class="el_box_title el-center-box" data-aos="fade-right" data-aos-duration="1000">
                <h2>our gallery</h2>
                <legend>There is a moment in the life of any aspiring.</legend>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="slide">
                    <img class="img" src="assets/images/18.jpg" alt="">
                </div>
                <div class="slide">
                    <img class="img" src="assets/images/19.jpg" alt="">
                </div>
                <div class="slide">
                    <img class="img" src="assets/images/22.jpg" alt="">
                </div>
                <div class="slide">
                    <img class="img" src="assets/images/25.jpg" alt="">
                </div>
            </div>
        </section>
        <?php require_once "php/footer.php" ?>
    </main>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- MAGNIFIC POPUP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" ></script>
    <!-- WAY POINT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/3.0.0/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>
    <!-- COUNTER UP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <!-- ALL SLIDERS -->
    <script src="js/slide_header.js"></script>
    <script>
        $(document).ready(() => {
            $(".el_counter_up aside span").counterUp({
                delay: 10,
                time: 2000
            });
        })
    </script>
</body>
</html>
