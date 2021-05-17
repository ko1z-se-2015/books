$(function (){
    var item = $(".books");
    var by_p = $(".text1");
    var by_low = $(".text2");
    var by_high = $(".text3");
    var by_name = $(".text4");
    // by_p.click(function (){
    //     item.html('<div class="row_books">\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga1"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Маг, который смог</div>\n' +
    //         '                    <div class="des">Жанр:приключения, комедия</div>\n' +
    //         '                    <div class="price">Цена: 2000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga2"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Елхан, человек из бездны</div>\n' +
    //         '                    <div class="des">Жанр:драма, фантастика, насилие</div>\n' +
    //         '                    <div class="price">Цена: 5000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga3"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Отбитая группа SE</div>\n' +
    //         '                    <div class="des">Жанр:комедия,посевдневность</div>\n' +
    //         '                    <div class="price">Цена: 2500тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga4"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Данчик - целитель, история СЕшника</div>\n' +
    //         '                    <div class="des">Жанр:ужастик,войны,насилие</div>\n' +
    //         '                    <div class="price">Цена: 10000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '        </div>\n' +
    //         '        <div class="row_books">\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga5"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Боксер - Талыг</div>\n' +
    //         '                    <div class="des">Жанр: спорт, комедия, драки</div>\n' +
    //         '                    <div class="price">Цена: 2500тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga6"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Амир!Это мастер пикапа!</div>\n' +
    //         '                    <div class="des">Жанр: комедия, романтика</div>\n' +
    //         '                    <div class="price">Цена: 3000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga7"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Суетолог</div>\n' +
    //         '                    <div class="des">Жанр: ужастик, насилие</div>\n' +
    //         '                    <div class="price">Цена: 9000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga8"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Программист, попавший в иной мир</div>\n' +
    //         '                    <div class="des">Жанр: приключение, фантастика</div>\n' +
    //         '                    <div class="price">Цена: 5000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '        </div>\n' +
    //         '        <div class="row_books">\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga9"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Демон из Венеры</div>\n' +
    //         '                    <div class="des">Жанр:триллер, детектив</div>\n' +
    //         '                    <div class="price">Цена: 500тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga10"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Юху!Спорт!</div>\n' +
    //         '                    <div class="des">Жанр:комедия, спорт, гарем</div>\n' +
    //         '                    <div class="price">Цена: 3000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga11"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Если бы ты был как я</div>\n' +
    //         '                    <div class="des">Жанр: романтика, драма</div>\n' +
    //         '                    <div class="price">Цена: 6000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga12"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Да, я повар.И что?</div>\n' +
    //         '                    <div class="des">Жанр: кулинария, драки</div>\n' +
    //         '                    <div class="price">Цена: 2000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '        </div>');
    // });
    // by_low.click(function (){
    //     item.html('  <div class="row_books">\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga4"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Данчик - целитель, история СЕшника</div>\n' +
    //         '                    <div class="des">Жанр:ужастик,войны,насилие</div>\n' +
    //         '                    <div class="price">Цена: 10000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga7"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Суетолог</div>\n' +
    //         '                    <div class="des">Жанр: ужастик, насилие</div>\n' +
    //         '                    <div class="price">Цена: 9000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga11"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Если бы ты был как я</div>\n' +
    //         '                    <div class="des">Жанр: романтика, драма</div>\n' +
    //         '                    <div class="price">Цена: 6000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga8"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Программист, попавший в иной мир</div>\n' +
    //         '                    <div class="des">Жанр:драма, фантастика, насилие</div>\n' +
    //         '                    <div class="price">Цена: 5000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '        </div>\n' +
    //         '        <div class="row_books">\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga2"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Елхан, человек из бездны</div>\n' +
    //         '                    <div class="des">Жанр: спорт, комедия, драки</div>\n' +
    //         '                    <div class="price">Цена: 5000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga6"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Амир!Это мастер пикапа!</div>\n' +
    //         '                    <div class="des">Жанр: комедия, романтика</div>\n' +
    //         '                    <div class="price">Цена: 3000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga10"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Юху!Спорт!</div>\n' +
    //         '                    <div class="des">Жанр: ужастик, насилие</div>\n' +
    //         '                    <div class="price">Цена: 3000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga5"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Боксер - Талыг</div>\n' +
    //         '                    <div class="des">Жанр: спорт, комедия, драки</div>\n' +
    //         '                    <div class="price">Цена: 2500тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '        </div>\n' +
    //         '        <div class="row_books">\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga3"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Отбитая группа SE</div>\n' +
    //         '                    <div class="des">Жанр:комедия,посевдневность</div>\n' +
    //         '                    <div class="price">Цена: 2500тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga1"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Маг, который смог</div>\n' +
    //         '                    <div class="des">Жанр:приключения, комедия</div>\n' +
    //         '                    <div class="price">Цена: 2000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga12"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Да, я повар.И что?</div>\n' +
    //         '                    <div class="des">Жанр: кулинария, драки</div>\n' +
    //         '                    <div class="price">Цена: 2000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga9"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Демон из Венеры</div>\n' +
    //         '                    <div class="des">Жанр:триллер, детектив</div>\n' +
    //         '                    <div class="price">Цена: 500тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '        </div>')
    // });
    by_high.click(function (){
        item.html(' <div class="row_books">\n' +
            '                <?php\n' +
            '                $book = mysqli_query($mysql, "SELECT * FROM `books` LIMIT 0,4");\n' +
            '                while ($b = mysqli_fetch_assoc($book)) {\n' +
            '                    ?>\n' +
            '                    <div class="book">\n' +
            '                        <div class="img_manga" style="background-image: url("icon_manga/<?php echo $b[\'picture\'] ?>\")"></div>\n' +
            '                        <div class="description">\n' +
            '                            <div class="title_product"><?php echo $b[\'name\']?></div>\n' +
            '                            <div class="des">Жанр:<?php echo $b[\'genres\']?></div>\n' +
            '                            <div class="price">Цена: <?php echo $b[\'price\']?>тенге</div>\n' +
            '                        </div>\n' +
            '                    </div>\n' +
            '                <?php } ?>\n' +
            '            </div>\n' +
            '            <div class="row_books">\n' +
            '                <?php\n' +
            '                $book = mysqli_query($mysql, "SELECT * FROM `books` LIMIT 4,4");\n' +
            '                while ($b = mysqli_fetch_assoc($book)) {\n' +
            '                    ?>\n' +
            '                    <div class="book">\n' +
            '                        <div class="img_manga" style="background-image: url("icon_manga/<?php echo $b[\'picture\'] ?>\")"></div>\n' +
            '                        <div class="description">\n' +
            '                            <div class="title_product"><?php echo $b[\'name\']?></div>\n' +
            '                            <div class="des">Жанр:<?php echo $b[\'genres\']?></div>\n' +
            '                            <div class="price">Цена: <?php echo $b[\'price\']?>тенге</div>\n' +
            '                        </div>\n' +
            '                    </div>\n' +
            '                <?php } ?>\n' +
            '            </div>\n' +
            '            <div class="row_books">\n' +
            '                <?php\n' +
            '                $book = mysqli_query($mysql, "SELECT * FROM `books` LIMIT 8,4");\n' +
            '                while ($b = mysqli_fetch_assoc($book)) {\n' +
            '                    ?>\n' +
            '                    <div class="book">\n' +
            '                        <div class="img_manga" style="background-image: url("icon_manga/<?php echo $b[\'picture\'] ?>\")"></div>\n' +
            '                        <div class="description">\n' +
            '                            <div class="title_product"><?php echo $b[\'name\']?></div>\n' +
            '                            <div class="des">Жанр:<?php echo $b[\'genres\']?></div>\n' +
            '                            <div class="price">Цена: <?php echo $b[\'price\']?>тенге</div>\n' +
            '                        </div>\n' +
            '                    </div>\n' +
            '                <?php } ?>\n' +
            '            </div>')
    });
    // by_name.click(function (){
    //     item.html('<div class="row_books">\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga6"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Амир!Это мастер пикапа!г</div>\n' +
    //         '                    <div class="des">Жанр: комедия, романтика</div>\n' +
    //         '                    <div class="price">Цена: 3000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga5"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Боксер - Талыг</div>\n' +
    //         '                    <div class="des">Жанр: спорт, комедия, драки</div>\n' +
    //         '                    <div class="price">Цена: 2500тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga4"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Данчик - целитель, история СЕшника</div>\n' +
    //         '                    <div class="des">Жанр:ужастик,войны,насилие</div>\n' +
    //         '                    <div class="price">Цена: 10000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga9"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Демон из Венеры</div>\n' +
    //         '                    <div class="des">Жанр:триллер, детектив</div>\n' +
    //         '                    <div class="price">Цена: 500тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '        </div>\n' +
    //         '        <div class="row_books">\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga12"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Да, я повар.И что?</div>\n' +
    //         '                    <div class="des">Жанр: кулинария, драки</div>\n' +
    //         '                    <div class="price">Цена: 2000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga2"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Елхан, человек из бездны</div>\n' +
    //         '                    <div class="des">Жанр:драма, фантастика, насилие</div>\n' +
    //         '                    <div class="price">Цена: 5000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga11"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Если бы ты был как я</div>\n' +
    //         '                    <div class="des">Жанр: романтика, драма</div>\n' +
    //         '                    <div class="price">Цена: 6000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga1"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Маг, который смог</div>\n' +
    //         '                    <div class="des">Жанр:приключения, комедия</div>\n' +
    //         '                    <div class="price">Цена: 2000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '        </div>\n' +
    //         '        <div class="row_books">\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga3"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Отбитая группа SE</div>\n' +
    //         '                    <div class="des">Жанр:комедия,посевдневность</div>\n' +
    //         '                    <div class="price">Цена: 2500тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga8"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Программист, попавший в иной мир</div>\n' +
    //         '                    <div class="des">Жанр: приключение, фантастика</div>\n' +
    //         '                    <div class="price">Цена: 5000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga7"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Суетолог</div>\n' +
    //         '                    <div class="des">Жанр: ужастик, насилие</div>\n' +
    //         '                    <div class="price">Цена: 9000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '            <div class="book">\n' +
    //         '                <div class="img_manga" id="manga10"></div>\n' +
    //         '                <div class="description">\n' +
    //         '                    <div class="title_product">Юху!Спорт!</div>\n' +
    //         '                    <div class="des">Жанр:комедия, спорт, гарем</div>\n' +
    //         '                    <div class="price">Цена: 3000тенге</div>\n' +
    //         '                </div>\n' +
    //         '            </div>\n' +
    //         '        </div>')
    // });
});