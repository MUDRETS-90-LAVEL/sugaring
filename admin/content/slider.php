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
                        <img style="width: 100px" src="/img/slider/<?=$elem['img']?>" alt="<?=$elem['title']?>">
                        <p><label>Название</label>
                        <input type="text" value="<?=$elem['title']?>" disabled></p>
                        <p><label>Описание</label>
                        <p><textarea rows="10" cols="45" disabled><?=$elem['mini_description']?></textarea></p>
                        <p><label>Ссылка</label>
                        <input type="url" value="<?=$elem['link']?>" disabled></p>
                <?php endforeach;?>       
            </div>
        </div>
    </div>
</section>