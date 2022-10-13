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
                <div class="btn_add"><a href="" class="add_elem">Добавить слайдер</a></div>
                <div class="item_content">
                    <?php foreach($arr as $elem): ?>
                        <div class="elem">
                            <div class="elem_img">
                                <img class="img_elem" src="/img/slider/<?=$elem['img']?>" alt="<?=$elem['title']?>">
                            </div>
                            <div class="elem_title">
                                <p class="slideer_title"><?=$elem['title']?></p>
                            </div>
                            <div class="btm_item">
                                <div class="elem_btm">
                                    <a href="" class="btl del" name = "<?=$elem['id']?>">Удалить</a>
                                    <a href="" class="btl edit" name = "<?=$elem['id']?>">Редактировать</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</section>