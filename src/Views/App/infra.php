<?php
ob_start();


// if (!isset($_SESSION['user'])) {
//     header('Location: /auth/login/');
// }

?>

<div class="space-y-8">
    <div class="glass-card rounded-3xl p-8">
        <h3 class="text-xl font-black text-slate-900 mb-6 uppercase tracking-tighter italic">Piscines de l'Hôtel</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 bg-blue-50/50 border border-blue-100 rounded-3xl">
                <i class="fas fa-sun text-blue-600 mb-4"></i>
                <h4 class="font-bold text-slate-800">Piscine Extérieure</h4>
                <p class="text-[10px] text-slate-500 mb-4 uppercase tracking-widest font-bold">Ouvert: 08:00 - 20:00</p>
                <div class="text-[10px] bg-white px-3 py-1 rounded-lg border border-blue-100 inline-block text-blue-600 font-bold">MAINTENANCE : 2025-06-01</div>
            </div>
            <div class="p-6 bg-indigo-50/50 border border-indigo-100 rounded-3xl">
                <i class="fas fa-moon text-indigo-600 mb-4"></i>
                <h4 class="font-bold text-slate-800">Piscine Intérieure</h4>
                <p class="text-[10px] text-slate-500 mb-4 uppercase tracking-widest font-bold">Ouvert: 07:00 - 22:00</p>
            </div>
        </div>
    </div>

    <div class="glass-card rounded-3xl overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex justify-between items-center">
            <h3 class="font-bold text-slate-800 uppercase tracking-tighter">Salles de Réception</h3>
            <span class="text-[10px] bg-slate-900 text-white px-3 py-1 rounded-full font-bold">SQL: Table Salle</span>
        </div>
        <table class="w-full text-left">
            <thead class="bg-slate-50 text-[10px] text-slate-400 uppercase font-black tracking-widest">
                <tr>
                    <th class="px-6 py-4">Nom</th>
                    <th class="px-6 py-4">Type</th>
                    <th class="px-6 py-4">Capacité</th>
                    <th class="px-6 py-4">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-4 font-bold text-slate-800">--name--</td>
                    <td class="px-6 py-4 text-xs font-medium">--types--</td>
                    <td class="px-6 py-4 text-xs text-slate-500">--cap-- Pers.</td>
                    <td class="px-6 py-4"><span class="w-2 h-2 rounded-full bg-emerald-500 inline-block mr-2"></span><span class="text-[10px] font-bold text-emerald-600">DISPONIBLE</span></td>
                </tr>
               
            </tbody>
        </table>
    </div>
</div>

<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';
