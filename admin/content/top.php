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
                <div class="soc_seti">
                    <p><label>Вконтакте</label><br/>
                    <input type="url" value="<?=$page["vk"]?>" disabled></p>
                    <p><label>WhatsApp</label><br/>
                    <input type="text" value="<?=$page["whatsapp"]?>" disabled></p>
                </div>
                <div class="soc_seti">
                    <p><label>Telegram</label><br/>
                    <input type="url" value="<?=$page["telegram"]?>" disabled></p>
                    <p><label>Instagram</label><br/>
                    <input type="url" value="<?=$page["instogram"]?>" disabled></p>
                </div>
                    
                <div class="soc_seti">
                    <p><label>Телефон</label><br/>
                    <input type="text" value="<?=$page["phone"]?>" disabled></p>
                    <p><label>E-mail</label><br/>
                    <input type="email" value="<?=$page["email"]?>" disabled></p>
                </div>
                <div class="soc_seti">
                    <p><label>Адресс</label><br/>
                    <input type="text" value="<?=$page["adress"]?>" disabled></p>
                    <p><label>Режим работы</label><br/>
                    <input type="text" value="<?=$page["time"]?>" disabled></p>
                </div>
                <button type="submit" class="update">Редактировать</button>
        </div>
        <div class="redaction">
            <h2 class="form_title">Редактирование Социальной Информации</h2>
            <form action="" method="POST">
            <div class="soc_seti">
                    <p><label>Вконтакте</label><br/>
                    <input type="url" name="vk" value="<?=$page["vk"]?>"></p>
                    <p><label>WhatsApp</label><br/>
                    <input type="text" name="whatsapp" value="<?=$page["whatsapp"]?>"></p>
                </div>
                <div class="soc_seti">
                    <p><label>Telegram</label><br/>
                    <input type="url" name="telegram" value="<?=$page["telegram"]?>"></p>
                    <p><label>Instagram</label><br/>
                    <input type="url" name="instagram" value="<?=$page["instogram"]?>"></p>
                </div>
                    
                <div class="soc_seti">
                    <p><label>Телефон</label><br/>
                    <input type="text" name="phone" value="<?=$page["phone"]?>"></p>
                    <p><label>E-mail</label><br/>
                    <input type="email" name="email" value="<?=$page["email"]?>"></p>
                </div>
                <div class="soc_seti">
                    <p><label>Адресс</label><br/>
                    <input type="text" name="adress" value="<?=$page["adress"]?>"></p>
                    <p><label>Режим работы</label><br/>
                    <input type="text" name="mode" value="<?=$page["time"]?>"></p>
                </div>
                    <input type="submit" class="btn_form" name="update" value="Сохранить">
            </form>
        </div>
        </div>
    </div>
</section>