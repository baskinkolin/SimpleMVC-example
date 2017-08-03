<h2><?= $editGoodTitle ?>
    <span>
        <?= \core\User::get()->returnIfAllowed("admin/good/delete", 
            "<a href=" . \Url::link("admin/good/delete&id=" . $_GET['id']) 
            . ">[Удалить]</a>");?>
    </span>
</h2>

<form method="post" action="<?= \Url::link("admin/good/edit&id=" . $_GET['id'])?>">
    
    <h5>Введите наименование товара</h5>
    <input type="text" name="name" value="<?= $viewGood->name ?>"><br>
    <h5>Введите описание товара</h5>
    <input type="text" name="description" value="<?= $viewGood->description ?>"<br>
    <h5>В наличии на складе</h5>
    <input type="text" name="available" value="<?= $viewGood->available ?>"><br>
    <h5>Цена товара</h5>
    <input type="text" name="price" value="<?= $viewGood->price ?>"><br>
    
    <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
    <input type="submit" name="saveChanges" value="Сохранить">
    <input type="submit" name="cancel" value="Назад">
</form>