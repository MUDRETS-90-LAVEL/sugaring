<section>
    <div class="content">
        <div class="breadcrumbs_link"><a class="bred" href="/admin">Главная</a> <span>&rArr;</span> <a href="<?=$url;?>"><?=$title;?></a></div>
    </div>
</section>
<section class="contener">
    <div class="content">
        <div class="content_body">
            <div class="info">
                <h2 class="form_title"><?=$title;?></h2>

                
                <!-- Сдесь выводить циклом надо  -->

                <?php foreach($arr as $elem): ?>
                        <div class="item_wrapp">
                            <div class="item_img"><img class="img_elem" src="/img/slider/<?=$elem['img']?>" alt="<?=$elem['title']?>"></div>
                            <div class="item_info">
                                <p><label>Название</label>
                                <input type="text" value="<?=$elem['title']?>" disabled></p>
                                <p><label>Краткая информация</label>
                                <textarea disabled><?=$elem['mini_description']?></textarea></p>
                                <p><label>Ссылка</label>
                                <input type="url" value="<?=$elem['link']?>" disabled></p>
                            </div>
                        </div>
                <?php endforeach;?>       
            </div>
        </div>
    </div>
</section>