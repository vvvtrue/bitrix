    
<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

    <div class="container">
        <div class = "row">

           <? foreach ($arResult['ITEMS'] as $aItem): ?>
                <div class="row">
                    <div class="col-4">
                    <?php var_dump($aItem['DETAIL_PICTURE']['src']);?>

                        <a href="<?  $aItem ?>"><img src="<?= $aItem['DETAIL_PICTURE']['src']; ?>"></a>

                        <div><?= $aItem['AUTHOR']; ?></div>

                    </div>

                </div>

            <? endforeach; ?>
        </div>
    </div>
