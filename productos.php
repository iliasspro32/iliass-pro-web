<?php
$page_title = 'IVOMARKET | ' . (($_GET['lang'] ?? 'es') === 'es' ? 'Productos PLR' : 'PLR Products');
$current_page = 'productos';
include 'includes/header.php';

$t = [
  'es' => [
    'hero_title' => 'Productos PLR',
    'hero_desc' => 'Explora nuestra colección de productos digitales listos para personalizar y vender.',
    'filter_all' => 'Todos',
    'buy' => 'Obtener Ahora',
    'cta_title' => 'Descarga, personaliza y vende',
    'cta_desc' => 'Todos nuestros productos incluyen derechos de marca privada completos.',
    'cta_btn' => 'Contactar',
  ],
  'en' => [
    'hero_title' => 'PLR Products',
    'hero_desc' => 'Explore our collection of digital products ready to customize and sell.',
    'filter_all' => 'All',
    'buy' => 'Get Now',
    'cta_title' => 'Download, customize and sell',
    'cta_desc' => 'All our products include full private label rights.',
    'cta_btn' => 'Contact Us',
  ]
];
$x = $t[$lang];

$cats = [
    ['slug'=>'ebooks','name'=>'Ebooks','icon'=>'fa-book'],
    ['slug'=>'cursos','name'=>($lang==='es'?'Cursos':'Courses'),'icon'=>'fa-graduation-cap'],
    ['slug'=>'marketing','name'=>'Marketing Kits','icon'=>'fa-bullhorn'],
    ['slug'=>'funnels','name'=>'Funnels','icon'=>'fa-filter'],
    ['slug'=>'templates','name'=>'Templates','icon'=>'fa-palette'],
    ['slug'=>'bundle','name'=>'Bundle Premium','icon'=>'fa-gem'],
];

$products = [
  ['cat'=>'ebooks','img'=>'servicio_ebooks.png',
   'name'=>($lang==='es'?'Pack 50 Ebooks PLR — Nichos Rentables':'50 PLR Ebooks Pack — Profitable Niches'),
   'price'=>'$27','badge'=>'popular',
   'desc'=>($lang==='es'?'Colección de 50 ebooks en nichos de alta demanda.':'Collection of 50 ebooks in high-demand niches.')],
  ['cat'=>'ebooks','img'=>'servicio_ebooks.png',
   'name'=>($lang==='es'?'Mega Pack Ebooks — Salud y Bienestar':'Mega Ebook Pack — Health & Wellness'),
   'price'=>'$37','badge'=>'best',
   'desc'=>($lang==='es'?'30+ ebooks sobre salud, fitness y nutrición.':'30+ ebooks on health, fitness and nutrition.')],
  ['cat'=>'cursos','img'=>'servicio_cursos.png',
   'name'=>($lang==='es'?'Curso PLR — Marketing Digital Completo':'PLR Course — Complete Digital Marketing'),
   'price'=>'$67','badge'=>'popular',
   'desc'=>($lang==='es'?'Curso completo con 40+ videos y materiales.':'Complete course with 40+ videos and materials.')],
  ['cat'=>'cursos','img'=>'servicio_cursos.png',
   'name'=>($lang==='es'?'Curso PLR — Copywriting Avanzado':'PLR Course — Advanced Copywriting'),
   'price'=>'$47','badge'=>'new',
   'desc'=>($lang==='es'?'Domina el arte de escribir textos que venden.':'Master the art of writing copy that sells.')],
  ['cat'=>'marketing','img'=>'servicio_social.png',
   'name'=>($lang==='es'?'Kit Redes Sociales — 500 Plantillas':'Social Media Kit — 500 Templates'),
   'price'=>'$37','badge'=>'best',
   'desc'=>($lang==='es'?'Plantillas para Instagram, Facebook y TikTok.':'Templates for Instagram, Facebook and TikTok.')],
  ['cat'=>'marketing','img'=>'servicio_social.png',
   'name'=>($lang==='es'?'Pack Email Marketing PLR':'PLR Email Marketing Pack'),
   'price'=>'$27','badge'=>'new',
   'desc'=>($lang==='es'?'200+ emails de venta y nurturing listos para usar.':'200+ ready-to-use sales and nurturing emails.')],
  ['cat'=>'funnels','img'=>'servicio_funnels.png',
   'name'=>($lang==='es'?'Funnel Completo — Lanzamiento Digital':'Complete Funnel — Digital Launch'),
   'price'=>'$57','badge'=>'popular',
   'desc'=>($lang==='es'?'Embudo de ventas completo con upsells y downsells.':'Complete sales funnel with upsells and downsells.')],
  ['cat'=>'funnels','img'=>'servicio_funnels.png',
   'name'=>($lang==='es'?'Pack 5 Funnels — Nichos Top':'5 Funnels Pack — Top Niches'),
   'price'=>'$97','badge'=>'best',
   'desc'=>($lang==='es'?'5 embudos optimizados para los nichos más rentables.':'5 optimized funnels for the most profitable niches.')],
  ['cat'=>'templates','img'=>'servicio_templates.png',
   'name'=>($lang==='es'?'Pack Landing Pages — 20 Diseños':'Landing Pages Pack — 20 Designs'),
   'price'=>'$37','badge'=>'new',
   'desc'=>($lang==='es'?'Landing pages profesionales y responsive.':'Professional and responsive landing pages.')],
  ['cat'=>'templates','img'=>'servicio_templates.png',
   'name'=>($lang==='es'?'Templates WordPress Premium':'Premium WordPress Templates'),
   'price'=>'$47','badge'=>'popular',
   'desc'=>($lang==='es'?'10 temas WordPress premium con licencia PLR.':'10 premium WordPress themes with PLR license.')],
  ['cat'=>'bundle','img'=>'servicio_automation.png',
   'name'=>($lang==='es'?'Bundle Ultimate — Todo Incluido':'Ultimate Bundle — All Included'),
   'price'=>'$97','badge'=>'best',
   'desc'=>($lang==='es'?'Acceso a todos los productos de la plataforma.':'Access to all products on the platform.')],
  ['cat'=>'bundle','img'=>'servicio_automation.png',
   'name'=>($lang==='es'?'Bundle Starter — Pack Iniciación':'Starter Bundle — Beginner Pack'),
   'price'=>'$47','badge'=>'new',
   'desc'=>($lang==='es'?'Pack ideal para empezar tu negocio PLR.':'Ideal pack to start your PLR business.')],
];

$badgeLabels = ['popular'=>'Popular','new'=>($lang==='es'?'Nuevo':'New'),'best'=>'Best Seller'];
$badgeClass  = ['popular'=>'badge-popular','new'=>'badge-new','best'=>'badge-best'];
?>

<!-- Hero -->
<section class="relative py-24 lg:py-32 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-accent/5 to-transparent"></div>
    <div class="absolute top-10 right-0 w-80 h-80 bg-accent/10 rounded-full blur-[120px]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center fade-up">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white mb-4"><?= $x['hero_title'] ?></h1>
        <p class="text-gray-400 text-lg max-w-2xl mx-auto"><?= $x['hero_desc'] ?></p>
    </div>
</section>

<!-- Filters -->
<section class="pb-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-3 fade-up" id="product-filters">
            <button class="filter-btn active px-5 py-2 rounded-full text-sm font-semibold border border-accent/30 bg-accent/10 text-white transition-all" data-cat="all"><?= $x['filter_all'] ?></button>
            <?php foreach($cats as $c): ?>
            <button class="filter-btn px-5 py-2 rounded-full text-sm font-semibold border border-gray-700 text-gray-400 hover:border-accent/30 hover:text-white transition-all" data-cat="<?= $c['slug'] ?>">
                <i class="fa-solid <?= $c['icon'] ?> mr-1.5 text-xs"></i><?= $c['name'] ?>
            </button>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Products Grid -->
<section class="py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8" id="products-grid">
            <?php foreach($products as $i => $p): ?>
            <div class="card-hover bg-secondary/50 rounded-2xl overflow-hidden fade-up product-card" data-cat="<?= $p['cat'] ?>" style="transition-delay:<?= ($i%6)*0.08 ?>s">
                <div class="relative img-zoom h-48">
                    <img src="assets/images/<?= $p['img'] ?>" alt="<?= htmlspecialchars($p['name']) ?>" class="w-full h-full object-cover">
                    <span class="badge <?= $badgeClass[$p['badge']] ?> absolute top-4 right-4"><?= $badgeLabels[$p['badge']] ?></span>
                </div>
                <div class="p-6">
                    <h3 class="text-white font-bold text-base mb-2 line-clamp-2"><?= $p['name'] ?></h3>
                    <p class="text-gray-400 text-sm mb-4 line-clamp-2"><?= $p['desc'] ?></p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-black gradient-text"><?= $p['price'] ?></span>
                        <a href="#" class="btn-glow text-white text-sm font-semibold px-5 py-2 rounded-full">
                            <i class="fa-solid fa-cart-shopping mr-1.5"></i><?= $x['buy'] ?>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-accent to-accent2 rounded-3xl text-center py-16 px-8 fade-up">
            <h2 class="text-3xl sm:text-4xl font-black text-white mb-4"><?= $x['cta_title'] ?></h2>
            <p class="text-white/80 text-lg mb-8 max-w-lg mx-auto"><?= $x['cta_desc'] ?></p>
            <a href="contacto.php?lang=<?= $lang ?>" class="inline-flex items-center bg-white text-primary font-bold px-8 py-4 rounded-full text-lg hover:bg-gray-100 transition-all hover:scale-105 shadow-xl">
                <i class="fa-solid fa-envelope mr-2"></i><?= $x['cta_btn'] ?>
            </a>
        </div>
    </div>
</section>

<!-- Filter Script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const btns  = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.product-card');
    btns.forEach(btn => {
        btn.addEventListener('click', () => {
            btns.forEach(b => { b.classList.remove('active','bg-accent/10','text-white','border-accent/30'); b.classList.add('text-gray-400','border-gray-700'); });
            btn.classList.add('active','bg-accent/10','text-white','border-accent/30');
            btn.classList.remove('text-gray-400','border-gray-700');
            const cat = btn.dataset.cat;
            cards.forEach(card => {
                if (cat === 'all' || card.dataset.cat === cat) {
                    card.style.display = ''; card.classList.add('visible');
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?php include 'includes/footer.php'; ?>
