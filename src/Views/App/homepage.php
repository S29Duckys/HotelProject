<?php
ob_start();


if (!isset($_SESSION['user'])) {
    header('Location: /auth/login/');
}
?>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
    <?php foreach ($homes as $home) { ?>
    <div class="glass-card p-6 rounded-3xl">
        <div class="flex justify-between items-start mb-4">
            <div class="p-3 bg-blue-500/10 text-blue-600 rounded-2xl"><i class="fas fa-file-invoice-dollar text-xl"></i></div>
            <span class="text-emerald-500 text-xs font-bold">+12.5%</span>
        </div>
        <p class="text-slate-400 text-[10px] font-black uppercase tracking-widest">CA Total (Factures)</p>
        <h3 class="text-2xl font-black text-slate-800 mt-1"><?= $home->getTotaux(); ?> €</h3>
    </div>
    <?php } ?>
    <?php foreach ($homes as $home) { ?>
    <div class="glass-card p-6 rounded-3xl">
        <div class="flex justify-between items-start mb-4">
            <div class="p-3 bg-indigo-500/10 text-indigo-600 rounded-2xl"><i class="fas fa-users text-xl"></i></div>
        </div>
        <p class="text-slate-400 text-[10px] font-black uppercase tracking-widest">Clients Inscrits</p>
        <h3 class="text-2xl font-black text-slate-800 mt-1"><?= $home->getNombreClient(); ?></h3>
    </div>
    <?php } ?>
    <?php foreach ($homes as $home) { ?>
    <div class="glass-card p-6 rounded-3xl">
        <div class="flex justify-between items-start mb-4">
            <div class="p-3 bg-amber-500/10 text-amber-600 rounded-2xl"><i class="fas fa-bed text-xl"></i></div>
        </div>
        <p class="text-slate-400 text-[10px] font-black uppercase tracking-widest">Chambres Occupées</p>
        <h3 class="text-2xl font-black text-slate-800 mt-1"><?= $home->getOccupe(); ?> / <?= $home->getTotalChambre(); ?></h3>
    </div>
    <?php } ?>
    <div class="glass-card p-6 rounded-3xl">
        <div class="flex justify-between items-start mb-4">
            <div class="p-3 bg-purple-500/10 text-purple-600 rounded-2xl"><i class="fas fa-wine-glass-alt text-xl"></i></div>
        </div>
        <p class="text-slate-400 text-[10px] font-black uppercase tracking-widest">Alerte Stock Bar</p>
        <h3 class="text-2xl font-black text-slate-800 mt-1">01 Ref.</h3>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <div class="lg:col-span-2 glass-card rounded-3xl overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex justify-between items-center">
            <h3 class="font-bold text-slate-800">Dernières Factures (Table: Facture)</h3>
            <button class="text-blue-600 text-xs font-bold underline">Tout voir</button>
        </div>
        <table class="w-full text-left">
            <thead class="bg-slate-50 text-[10px] text-slate-400 uppercase font-black tracking-widest">
                <tr>
                    <th class="px-6 py-4">Référence</th>
                    <th class="px-6 py-4">Date</th>
                    <th class="px-6 py-4">Total TTC</th>
                    <th class="px-6 py-4">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
            <?php foreach ($factures as $facture) { ?>
                <tr class="hover:bg-blue-50/50 transition-colors">
                    <td class="px-6 py-4 font-bold text-slate-700"><?= $facture->getNumReference(); ?></td>
                    <td class="px-6 py-4 text-xs text-slate-500"><?= $facture->getDate(); ?></td>
                    <td class="px-6 py-4 font-black text-blue-600"><?= $facture->getTotalTtc(); ?></td>
                    <td class="px-6 py-4"><i class="fas fa-ellipsis-h text-slate-300"></i></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- <div class="glass-card p-6 rounded-3xl">
        <h3 class="font-bold text-slate-800 mb-6">Prochaines Salles (Table: Client_Salle)</h3>
        <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-2xl border border-slate-100">
                <div class="bg-blue-600 w-1 h-8 rounded-full"></div>
                <div>
                    <p class="text-xs font-black text-slate-800">Salle Versailles</p>
                    <p class="text-[10px] text-slate-400">Client: Jean Dupont</p>
                </div>
                <div class="ml-auto text-[10px] font-bold text-blue-600">CONFIRMÉ</div>
            </div>
            <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-2xl border border-slate-100">
                <div class="bg-amber-500 w-1 h-8 rounded-full"></div>
                <div>
                    <p class="text-xs font-black text-slate-800">Salle Riviera</p>
                    <p class="text-[10px] text-slate-400">Client: Pierre Leroy</p>
                </div>
                <div class="ml-auto text-[10px] font-bold text-amber-500">ATTENTE</div>
            </div>
        </div>
    </div> -->
</div>

<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';
