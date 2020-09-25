<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>My blog</h1>
<div style=" background-color: yellow; width: 110px;">
    <?= Html::a('Создать новость',['create']) ?>
</div>

<ul><hr>
<?php foreach ($blogs as $blog): ?>
<!--Форма вывода новстей-->
       <h3> <?= $blog->title ?></h3>
        <br>
        Имя "<?= $blog->name ?>"
        <br>
       <h4> <?= $blog->post ?></h4>
        <hr>
<?php endforeach; ?>
</ul>
