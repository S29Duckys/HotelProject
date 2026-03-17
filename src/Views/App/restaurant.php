<?php
ob_start();


if (!isset($_SESSION['user'])) {
    header('Location: /auth/login/');
}
?>

<div class="glass-card rounded-3xl p-8">
    <h2 class="text-2xl font-black text-slate-900 mb-8">Menus & Carte (Table: Menu)</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php foreach ($menus as $menu) { ?>
        <a href="/restaurant/<?= $menu->getIdMenu() ?>">
        <div class="border border-slate-100 rounded-3xl p-6 hover:bg-slate-50 transition-colors cursor-pointer">
            <div class="w-12 h-12 bg-blue-600 text-white rounded-2xl flex items-center justify-center mb-4 font-black">M<?= $menu->getIdMenu() ?></div>
            <h4 class="font-bold text-slate-800 mb-1"><?= $menu->getMenuName() ?></h4>
            <p class="text-xs text-slate-400 mb-4 italic"><?= $menu->getDescription() ?></p>
            <p class="font-black text-blue-600 text-lg"><?= $menu->getPrixUn() ?> €</p>
        </div>
        </a>
        <?php } ?>
    </div>
</div>

<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';
