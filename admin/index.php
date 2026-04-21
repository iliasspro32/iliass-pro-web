<?php
session_start();
$dataDir = __DIR__ . '/../data/';
$settings = json_decode(file_get_contents($dataDir . 'settings.json'), true);
$products = json_decode(file_get_contents($dataDir . 'products.json'), true);

// Auth
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    if ($_POST['user'] === ($settings['admin_user'] ?? 'admin') && $_POST['pass'] === 'admin123') {
        $_SESSION['admin'] = true;
    }
}
if (isset($_GET['logout'])) { session_destroy(); header('Location: index.php'); exit; }
if (empty($_SESSION['admin'])) { ?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Admin Login — IVOMARKET</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
<style>body{font-family:'Inter',sans-serif;background:#0F172A;}</style></head>
<body class="min-h-screen flex items-center justify-center">
<form method="POST" class="bg-[#1E293B] p-10 rounded-2xl border border-gray-700 w-full max-w-sm shadow-2xl">
<h1 class="text-2xl font-bold text-white mb-6 text-center">IVO<span style="background:linear-gradient(135deg,#7C3AED,#06B6D4);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">MARKET</span></h1>
<input name="user" placeholder="Usuario" required class="w-full mb-4 px-4 py-3 rounded-lg bg-[#0F172A] border border-gray-700 text-white placeholder-gray-500 focus:border-purple-500 outline-none">
<input name="pass" type="password" placeholder="Contraseña" required class="w-full mb-6 px-4 py-3 rounded-lg bg-[#0F172A] border border-gray-700 text-white placeholder-gray-500 focus:border-purple-500 outline-none">
<button name="login" class="w-full py-3 rounded-lg font-bold text-white" style="background:linear-gradient(135deg,#7C3AED,#06B6D4);">Entrar</button>
<p class="text-gray-500 text-xs mt-4 text-center">Default: admin / admin123</p>
</form></body></html>
<?php exit; }

// Handle saves
$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['save_settings'])) {
        $s = $settings;
        $s['site_name'] = $_POST['site_name'] ?? $s['site_name'];
        $s['site_email'] = $_POST['site_email'] ?? $s['site_email'];
        $s['site_phone'] = $_POST['site_phone'] ?? $s['site_phone'];
        $s['whatsapp'] = $_POST['whatsapp'] ?? $s['whatsapp'];
        $s['social']['facebook'] = $_POST['social_fb'] ?? '';
        $s['social']['instagram'] = $_POST['social_ig'] ?? '';
        $s['social']['twitter'] = $_POST['social_tw'] ?? '';
        $s['social']['youtube'] = $_POST['social_yt'] ?? '';
        file_put_contents($dataDir.'settings.json', json_encode($s, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES));
        $settings = $s; $msg = 'Settings saved!';
    }
    if (isset($_POST['save_payments'])) {
        $s = $settings;
        foreach(['stripe','paypal','mercadopago'] as $gw) {
            $s['payment_gateways'][$gw]['enabled'] = isset($_POST[$gw.'_enabled']);
            $s['payment_gateways'][$gw]['mode'] = $_POST[$gw.'_mode'] ?? 'test';
            foreach($_POST as $k=>$v) {
                if (strpos($k, $gw.'_key_') === 0) {
                    $field = str_replace($gw.'_key_', '', $k);
                    $s['payment_gateways'][$gw][$field] = $v;
                }
            }
        }
        file_put_contents($dataDir.'settings.json', json_encode($s, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES));
        $settings = $s; $msg = 'Payment gateways saved!';
    }
    if (isset($_POST['save_product'])) {
        $id = (int)$_POST['prod_id'];
        foreach($products as &$p) {
            if ($p['id'] === $id) {
                $p['name_es'] = $_POST['name_es'];
                $p['name_en'] = $_POST['name_en'];
                $p['desc_es'] = $_POST['desc_es'];
                $p['desc_en'] = $_POST['desc_en'];
                $p['price'] = (float)$_POST['price'];
                $p['category'] = $_POST['category'];
                $p['badge'] = $_POST['badge'];
                $p['active'] = isset($_POST['active']);
                $p['download_url'] = $_POST['download_url'] ?? '';
            }
        } unset($p);
        file_put_contents($dataDir.'products.json', json_encode($products, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES));
        $msg = 'Product updated!';
    }
    if (isset($_POST['add_product'])) {
        $maxId = 0; foreach($products as $p) { if($p['id']>$maxId) $maxId=$p['id']; }
        $products[] = [
            'id'=>$maxId+1,'slug'=>'new-product-'.($maxId+1),'category'=>$_POST['category']??'ebooks',
            'badge'=>'new','price'=>(float)($_POST['price']??9),'image'=>'servicio_ebooks.png','active'=>true,
            'name_es'=>$_POST['name_es']??'Nuevo Producto','name_en'=>$_POST['name_en']??'New Product',
            'desc_es'=>$_POST['desc_es']??'Descripción','desc_en'=>$_POST['desc_en']??'Description','download_url'=>''
        ];
        file_put_contents($dataDir.'products.json', json_encode($products, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES));
        $msg = 'Product added!';
    }
    if (isset($_POST['delete_product'])) {
        $id = (int)$_POST['prod_id'];
        $products = array_values(array_filter($products, fn($p)=>$p['id']!==$id));
        file_put_contents($dataDir.'products.json', json_encode($products, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES));
        $msg = 'Product deleted!';
    }
}

$tab = $_GET['tab'] ?? 'dashboard';
$gw = $settings['payment_gateways'] ?? [];
?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Admin — IVOMARKET</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<script>tailwind.config={theme:{extend:{colors:{primary:'#0F172A',secondary:'#1E293B',accent:'#7C3AED',accent2:'#06B6D4'}}}}</script>
<style>body{font-family:'Inter',sans-serif;background:#0F172A;color:#e2e8f0;}
.sidebar-link{display:flex;align-items:center;padding:10px 16px;border-radius:10px;font-size:14px;font-weight:500;color:#94a3b8;transition:all .2s;}
.sidebar-link:hover,.sidebar-link.active{background:rgba(124,58,237,.15);color:#fff;}
.sidebar-link.active{border-left:3px solid #7C3AED;}
.card{background:#1E293B;border:1px solid rgba(255,255,255,.05);border-radius:16px;padding:24px;}
input[type=text],input[type=email],input[type=number],input[type=password],input[type=url],select,textarea{width:100%;padding:10px 14px;border-radius:10px;background:#0F172A;border:1px solid #374151;color:#fff;font-size:14px;outline:none;transition:border .2s;}
input:focus,select:focus,textarea:focus{border-color:#7C3AED;}
.btn-primary{background:linear-gradient(135deg,#7C3AED,#06B6D4);color:#fff;font-weight:600;padding:10px 24px;border-radius:10px;border:none;cursor:pointer;font-size:14px;transition:all .2s;}
.btn-primary:hover{opacity:.9;transform:translateY(-1px);}
.btn-danger{background:#EF4444;color:#fff;font-weight:600;padding:8px 16px;border-radius:8px;border:none;cursor:pointer;font-size:13px;}
label{display:block;font-size:13px;font-weight:500;color:#94a3b8;margin-bottom:4px;}
</style></head>
<body class="flex min-h-screen">

<!-- Sidebar -->
<aside class="w-64 bg-[#0a0f1e] border-r border-gray-800 p-6 flex flex-col shrink-0 fixed h-full overflow-y-auto">
<a href="../index.php" class="text-xl font-extrabold text-white mb-8" style="font-family:Montserrat;">IVO<span style="background:linear-gradient(135deg,#7C3AED,#06B6D4);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">MARKET</span></a>
<nav class="flex flex-col space-y-2 flex-1">
<a href="?tab=dashboard" class="sidebar-link <?= $tab==='dashboard'?'active':'' ?>"><i class="fa-solid fa-gauge mr-3 w-5 text-center"></i>Dashboard</a>
<a href="?tab=products" class="sidebar-link <?= $tab==='products'?'active':'' ?>"><i class="fa-solid fa-box mr-3 w-5 text-center"></i>Productos</a>
<a href="?tab=payments" class="sidebar-link <?= $tab==='payments'?'active':'' ?>"><i class="fa-solid fa-credit-card mr-3 w-5 text-center"></i>Pagos</a>
<a href="?tab=settings" class="sidebar-link <?= $tab==='settings'?'active':'' ?>"><i class="fa-solid fa-gear mr-3 w-5 text-center"></i>Ajustes</a>
</nav>
<a href="?logout=1" class="sidebar-link text-red-400 mt-4"><i class="fa-solid fa-right-from-bracket mr-3 w-5 text-center"></i>Salir</a>
</aside>

<!-- Main -->
<main class="flex-1 ml-64 p-8">

<?php if($msg): ?>
<div class="mb-6 p-4 rounded-xl bg-green-500/10 border border-green-500/30 text-green-400 text-sm font-medium"><i class="fa-solid fa-check-circle mr-2"></i><?= htmlspecialchars($msg) ?></div>
<?php endif; ?>

<?php if($tab==='dashboard'): ?>
<h1 class="text-2xl font-bold text-white mb-6">Dashboard</h1>
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
<div class="card"><p class="text-gray-400 text-sm">Productos</p><p class="text-3xl font-bold text-white mt-1"><?= count($products) ?></p></div>
<div class="card"><p class="text-gray-400 text-sm">Activos</p><p class="text-3xl font-bold text-green-400 mt-1"><?= count(array_filter($products,fn($p)=>$p['active'])) ?></p></div>
<div class="card"><p class="text-gray-400 text-sm">Categorías</p><p class="text-3xl font-bold text-accent mt-1"><?= count(array_unique(array_column($products,'category'))) ?></p></div>
<div class="card"><p class="text-gray-400 text-sm">Pasarelas</p><p class="text-3xl font-bold text-accent2 mt-1"><?= count(array_filter($gw,fn($g)=>$g['enabled'])) ?>/<?= count($gw) ?></p></div>
</div>
<div class="card"><h3 class="text-lg font-bold text-white mb-4">Productos Recientes</h3>
<table class="w-full text-sm"><thead><tr class="text-gray-500 text-left border-b border-gray-800"><th class="pb-3">Nombre</th><th class="pb-3">Categoría</th><th class="pb-3">Precio</th><th class="pb-3">Estado</th></tr></thead>
<tbody><?php foreach(array_slice($products,0,5) as $p): ?>
<tr class="border-b border-gray-800/50"><td class="py-3 text-white"><?= htmlspecialchars($p['name_es']) ?></td><td class="py-3 text-gray-400"><?= $p['category'] ?></td>
<td class="py-3 font-bold" style="background:linear-gradient(135deg,#7C3AED,#06B6D4);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">$<?= $p['price'] ?></td>
<td class="py-3"><span class="px-2 py-1 rounded-full text-xs font-semibold <?= $p['active']?'bg-green-500/10 text-green-400':'bg-red-500/10 text-red-400' ?>"><?= $p['active']?'Activo':'Inactivo' ?></span></td></tr>
<?php endforeach; ?></tbody></table></div>

<?php elseif($tab==='products'): ?>
<div class="flex items-center justify-between mb-6">
<h1 class="text-2xl font-bold text-white">Productos</h1>
<button onclick="document.getElementById('addModal').style.display='flex'" class="btn-primary"><i class="fa-solid fa-plus mr-2"></i>Añadir</button>
</div>
<?php foreach($products as $p): ?>
<form method="POST" class="card mb-4">
<input type="hidden" name="prod_id" value="<?= $p['id'] ?>">
<div class="grid grid-cols-1 md:grid-cols-6 gap-4 items-end">
<div class="md:col-span-2"><label>Nombre (ES)</label><input type="text" name="name_es" value="<?= htmlspecialchars($p['name_es']) ?>"></div>
<div class="md:col-span-2"><label>Nombre (EN)</label><input type="text" name="name_en" value="<?= htmlspecialchars($p['name_en']) ?>"></div>
<div><label>Precio ($)</label><input type="number" name="price" value="<?= $p['price'] ?>" step="0.01"></div>
<div><label>Categoría</label><select name="category">
<?php foreach(['ebooks','cursos','marketing','funnels','templates','bundle'] as $c): ?>
<option value="<?= $c ?>" <?= $p['category']===$c?'selected':'' ?>><?= ucfirst($c) ?></option>
<?php endforeach; ?></select></div>
<div class="md:col-span-2"><label>Desc (ES)</label><input type="text" name="desc_es" value="<?= htmlspecialchars($p['desc_es']) ?>"></div>
<div class="md:col-span-2"><label>Desc (EN)</label><input type="text" name="desc_en" value="<?= htmlspecialchars($p['desc_en']) ?>"></div>
<div><label>Badge</label><select name="badge">
<option value="popular" <?= $p['badge']==='popular'?'selected':'' ?>>Popular</option>
<option value="new" <?= $p['badge']==='new'?'selected':'' ?>>New</option>
<option value="best" <?= $p['badge']==='best'?'selected':'' ?>>Best Seller</option></select></div>
<div><label>Download URL</label><input type="url" name="download_url" value="<?= htmlspecialchars($p['download_url']??'') ?>"></div>
</div>
<div class="flex items-center gap-3 mt-4">
<label class="flex items-center gap-2 text-sm text-white cursor-pointer"><input type="checkbox" name="active" <?= $p['active']?'checked':'' ?>> Activo</label>
<button name="save_product" class="btn-primary text-sm"><i class="fa-solid fa-save mr-1"></i>Guardar</button>
<button name="delete_product" class="btn-danger text-sm" onclick="return confirm('¿Eliminar?')"><i class="fa-solid fa-trash mr-1"></i>Eliminar</button>
</div>
</form>
<?php endforeach; ?>

<!-- Add Modal -->
<div id="addModal" style="display:none" class="fixed inset-0 bg-black/60 flex items-center justify-center z-50 p-4">
<form method="POST" class="card w-full max-w-lg">
<h3 class="text-lg font-bold text-white mb-4">Nuevo Producto</h3>
<div class="space-y-3">
<div><label>Nombre (ES)</label><input type="text" name="name_es" required></div>
<div><label>Nombre (EN)</label><input type="text" name="name_en" required></div>
<div class="grid grid-cols-2 gap-3">
<div><label>Precio ($)</label><input type="number" name="price" value="27" step="0.01"></div>
<div><label>Categoría</label><select name="category">
<?php foreach(['ebooks','cursos','marketing','funnels','templates','bundle'] as $c): ?>
<option value="<?= $c ?>"><?= ucfirst($c) ?></option><?php endforeach; ?></select></div>
</div>
<div><label>Desc (ES)</label><input type="text" name="desc_es"></div>
<div><label>Desc (EN)</label><input type="text" name="desc_en"></div>
</div>
<div class="flex gap-3 mt-6">
<button name="add_product" class="btn-primary flex-1">Añadir</button>
<button type="button" onclick="this.closest('#addModal').style.display='none'" class="flex-1 py-2 rounded-lg border border-gray-700 text-gray-400 hover:text-white">Cancelar</button>
</div></form></div>

<?php elseif($tab==='payments'): ?>
<h1 class="text-2xl font-bold text-white mb-6">Pasarelas de Pago</h1>
<form method="POST" class="space-y-6">
<?php
$gwConfig = [
    'stripe' => ['label'=>'Stripe','icon'=>'fa-stripe','color'=>'#635BFF',
        'fields'=>['public_key_test'=>'Public Key (Test)','secret_key_test'=>'Secret Key (Test)','public_key_live'=>'Public Key (Live)','secret_key_live'=>'Secret Key (Live)']],
    'paypal' => ['label'=>'PayPal','icon'=>'fa-paypal','color'=>'#00457C',
        'fields'=>['client_id_sandbox'=>'Client ID (Sandbox)','client_secret_sandbox'=>'Client Secret (Sandbox)','client_id_live'=>'Client ID (Live)','client_secret_live'=>'Client Secret (Live)']],
    'mercadopago' => ['label'=>'Mercado Pago','icon'=>'fa-money-bill-wave','color'=>'#00B1EA',
        'fields'=>['public_key_test'=>'Public Key (Test)','access_token_test'=>'Access Token (Test)','public_key_live'=>'Public Key (Live)','access_token_live'=>'Access Token (Live)']],
];
foreach($gwConfig as $key=>$cfg):
$g = $gw[$key] ?? ['enabled'=>false,'mode'=>'test'];
?>
<div class="card">
<div class="flex items-center justify-between mb-4">
<div class="flex items-center gap-3">
<i class="fa-brands <?= $cfg['icon'] ?? 'fa-solid '.$cfg['icon'] ?> text-2xl" style="color:<?= $cfg['color'] ?>"></i>
<h3 class="text-lg font-bold text-white"><?= $cfg['label'] ?></h3>
</div>
<label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" name="<?= $key ?>_enabled" <?= !empty($g['enabled'])?'checked':'' ?>>
<span class="text-sm text-gray-400">Activar</span></label>
</div>
<div class="mb-4"><label>Modo</label><select name="<?= $key ?>_mode">
<option value="test" <?= ($g['mode']??'')==='test'||($g['mode']??'')==='sandbox'?'selected':'' ?>>Test / Sandbox</option>
<option value="live" <?= ($g['mode']??'')==='live'?'selected':'' ?>>Live / Producción</option></select></div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<?php foreach($cfg['fields'] as $fk=>$fl): ?>
<div><label><?= $fl ?></label><input type="text" name="<?= $key ?>_key_<?= $fk ?>" value="<?= htmlspecialchars($g[$fk]??'') ?>" placeholder="<?= $fl ?>"></div>
<?php endforeach; ?>
</div></div>
<?php endforeach; ?>
<button name="save_payments" class="btn-primary"><i class="fa-solid fa-save mr-2"></i>Guardar Pasarelas</button>
</form>

<?php elseif($tab==='settings'): ?>
<h1 class="text-2xl font-bold text-white mb-6">Ajustes Generales</h1>
<form method="POST" class="card space-y-4">
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div><label>Nombre del Sitio</label><input type="text" name="site_name" value="<?= htmlspecialchars($settings['site_name']) ?>"></div>
<div><label>Email</label><input type="email" name="site_email" value="<?= htmlspecialchars($settings['site_email']) ?>"></div>
<div><label>Teléfono</label><input type="text" name="site_phone" value="<?= htmlspecialchars($settings['site_phone']) ?>"></div>
<div><label>WhatsApp</label><input type="text" name="whatsapp" value="<?= htmlspecialchars($settings['whatsapp']) ?>"></div>
</div>
<hr class="border-gray-800">
<h3 class="text-white font-bold">Redes Sociales</h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div><label><i class="fa-brands fa-facebook mr-1"></i>Facebook</label><input type="url" name="social_fb" value="<?= htmlspecialchars($settings['social']['facebook']??'') ?>"></div>
<div><label><i class="fa-brands fa-instagram mr-1"></i>Instagram</label><input type="url" name="social_ig" value="<?= htmlspecialchars($settings['social']['instagram']??'') ?>"></div>
<div><label><i class="fa-brands fa-x-twitter mr-1"></i>Twitter/X</label><input type="url" name="social_tw" value="<?= htmlspecialchars($settings['social']['twitter']??'') ?>"></div>
<div><label><i class="fa-brands fa-youtube mr-1"></i>YouTube</label><input type="url" name="social_yt" value="<?= htmlspecialchars($settings['social']['youtube']??'') ?>"></div>
</div>
<button name="save_settings" class="btn-primary"><i class="fa-solid fa-save mr-2"></i>Guardar Ajustes</button>
</form>
<?php endif; ?>

</main></body></html>
