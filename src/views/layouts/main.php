<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use izi\dashboard\assets\AppAsset;
use izi\dashboard\Bootstrap4Asset;

AppAsset::register($this);
 
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="no-js">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?= Html::csrfMetaTags() ?>
    
    <title><?= Html::encode($this->title) ?></title>
    <?php 
	$this->registerMetaTag([
	    'name'=>'robots',
	    'content'=>'noindex,nofollow'
	]);
	$this->head();    
	
	?>
	
</head>
<body class="fixed-sn white-skin">
<?php $this->beginBody() ?>

<?php 

$partialFile = Yii::getAlias('@dashboard/views/partials/header.php');

echo $this->renderPhpFile($partialFile);

echo $content;

$partialFile = Yii::getAlias('@dashboard/views/partials/footer.php');

echo $this->renderPhpFile($partialFile);

$this->endBody(); ?> 
</body>
</html>
<?php $this->endPage() ?>