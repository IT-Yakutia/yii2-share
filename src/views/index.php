<?php

?>


<div class="share-btn"
    <?= $url === null ? '' : ('data-url="' . $url . '"') ?>
    <?= $title === null ? '' : ('data-title="' . $title . '"') ?>
    <?= $desc === null ? '' : ('data-desc="' . $desc . '"') ?>
>
    <?php foreach ($buttons as $button) { ?>
        <a style="color:<?= $button['color'] ?>;" data-id="<?= $button['key'] ?>"><i class="<?= $button['icon'] ?>"></i> <?= $button['label'] ?></a>
    <?php } ?>
</div>

<!-- 
<div class="share-btn" data-url="https://..." data-title="..." data-desc="...">
    <a data-id="vk">VK</a>
    <a data-id="fb">Facebook</a>
    <a data-id="tw">Twitter</a>
    <a data-id="tg">Telegram</a>
    <a data-id="mail">EMail</a>
</div> -->


<!-- <div class="share-btn" data-url="https://..." data-title="..." data-desc="...">
    <a data-id="vk"><i class="fab fa-vk"></i> VK</a>
    <a data-id="fb"><i class="fab fa-facebook-square"></i> Facebook</a>
    <a data-id="tw"><i class="fab fa-twitter"></i> Twitter</a>
    <a data-id="tg"><i class="fab fa-telegram"></i> Telegram</a>
    <a data-id="mail"><i class="fas fa-at"></i> EMail</a>
</div> -->