<h2><?= $searchPageTitle ?></h2>



<form action='<?= \Url::link("goodSearch/index")?>'>
    <span>Наименование товара</span>
    <input type="text" name="name" placeholder="введите название товара">
    <span>Количество</span>
    <input type="text" name="available" placeholder="сколько единиц товара требуется">
    <span>Цена товара</span>
    <input type="text" name="price_from" placeholder="от" >
    <input type="text" name="price_to"   placeholder="до">
    <input type='submit' name='search' value='Поиск'>
    <input type='hidden' name='route' value='goodSearch/index'>
</form>
<?php foreach ($searchGood['results'] as $k => $v):?>
    <h4>
        <a href="<?= \Url::link("admin/good/index&id=". $searchGood['results'][$k]->id)?>">
            <?= $searchGood['results'][$k]->name; ?>
        </a>
    </h4>
    <p>Цена товара: <?= $searchGood['results'][$k]->price; ?> р.
     В наличии: <?= $searchGood['results'][$k]->available; ?> штук</p>
    <img src="/images/like1.png" height="20px" width="20px" data-modelId="<?= $searchGood['results'][$k]->id?>" data-tableName='goods'>
    <span class="<?= $searchGood['results'][$k]->id?>">
        <?= $searchGood['results'][$k]->getModelLikes($searchGood['results'][$k]->id, 'goods') ?>
    </span>
    <img id="loader-identity" src="/images/ajax-loader.gif" alt="gif">
    <hr><br>    
<?php endforeach; ?>
