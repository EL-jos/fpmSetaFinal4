<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qualifications</title>
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
                    <h2 class="text">Qualifications</h2>
                    <p><a href="">Home</a> <i class="fa fa-chevron-right"></i> <span>Qualification</span></p>
                </div>
            </section>
            <?php require_once "php/menu_desktop.php" ?>
        <div class="indicator"></div>
        </header>
        <section class="qualification">
            <div>
                <div class="el_box_title el-center-box">
                    <h2>Qualifications</h2>
                    <legend>There is a moment in the life of any aspiring.</legend>
                </div>
                <p>The following table is a list of qualifications that fall under the scope of the FP&M SETA. These qualifications are run at accredited Training Providers of the FP&M SETA</p>
            </div>
        </section>
        <section class="table_qualification">
            <article>
                <div class="el-search-and-caption">
                    <h4 class="el-caption">Qualifications that fall under the scope of FP&M SETA</h4>
                    <div class="controls">
                        <!-- <input type="search" name="keyword" id="keyword"> -->
                        <select name="" id="">
                            <option value="" disabled selected>Select by page</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">50</option>
                            <option value="40">100</option>
                            <option value="40">200</option>
                        </select>
                    </div>
                </div>
                <table>
                    <!-- <caption>Qualifications that fall under the scope of FP&M SETA</caption> -->
                    <thead>
                        <tr>
                            <th>Qual.ID</th>
                            <th>Min.Credits</th>
                            <th>NQF Level</th>
                            <th>Qualification Title</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i = 1; $i <= 100; $i++): ?>
                            <tr>
                                <td data-label="Qual.ID"><p>20713</p></td>
                                <td data-label="Min.Credits"><p><?= $i ?></p></td>
                                <td data-label="NQF Level"><p>Level2</p></td>
                                <td data-label="Qualification Title"><p>National Certificate:General Textiles</p></td>
                            </tr>
                        <?php endfor ?>
                    </tbody>
                </table>
                <div class="pagination">
                    <button id="prev" class="prev el-center-box"><i class="fa fa-chevron-left"></i></button>
                    <!-- <button class="el-center-box list">1</button>
                    <button class="el-center-box list">2</button> -->
                    <button id="next" class="next el-center-box"><i class="fa fa-chevron-right"></i></button>
                </div>
            </article>
        </section>
        <?php require_once "php/footer.php" ?>
        <script src="js/pagination_table.js"></script>
    </main>
</body>
</html>