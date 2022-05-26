

        <li class="lots__item lot">
            <div class="lot__image">
                <img src="<?=htmlspecialchars($lot['img_link']); ?>" width="350" height="260" alt="">
            </div>
            <div class="lot__info">
                <span class="lot__category"><?=htmlspecialchars($lot['cat_name']);?></span>
                <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?=htmlspecialchars($lot['name']);?></a></h3>
                <div class="lot__state">
                    <div class="lot__rate">
                        <span class="lot__amount"><?=htmlspecialchars($lot['start_price']); ?></span>
                        <span class="lot__cost"><?=htmlspecialchars(retail_price($lot['max_price'])); ?></span>
                    </div>
                    <div class="lot__timer timer<?=view_class($lot['end_date'])?>">
                        <?=expired_time($lot['end_date']);?>
                    </div>
                </div>
            </div>

        </li>
