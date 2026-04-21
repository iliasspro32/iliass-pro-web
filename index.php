<?php
$page_title = 'IVOMARKET | PLR Digital Products';
$current_page = 'inicio';
include 'includes/header.php';

$t = [
  'es' => [
    'hero_title' => 'Construye tu negocio digital con PLR',
    'hero_sub' => 'ebooks • cursos • plantillas • funnels',
    'hero_btn1' => 'Ver Productos',
    'hero_btn2' => 'Empezar Ahora',
    'intro_tag' => '¿Qué es PLR?',
    'intro_title' => 'Productos con Derechos de Marca Privada',
    'intro_desc' => 'Los productos PLR (Private Label Rights) te permiten comprar contenido digital listo para personalizar, rebrandear y vender como propio. Es la forma más rápida de lanzar un negocio digital.',
    'b1_title' => 'Ahorro de Tiempo', 'b1_desc' => 'Contenido listo para vender sin crear desde cero.',
    'b2_title' => 'Escalabilidad', 'b2_desc' => 'Vende sin límites a una audiencia global.',
    'b3_title' => 'Reventa Ilimitada', 'b3_desc' => 'Compra una vez, vende infinitas veces.',
    'b4_title' => 'Tu Marca', 'b4_desc' => 'Personaliza todo con tu propio branding.',
    'feat_tag' => 'Catálogo',
    'feat_title' => 'Productos Destacados',
    'c1' => 'Ebooks PLR', 'c1d' => 'Guías y libros digitales listos para rebrandear y vender.',
    'c2' => 'Cursos PLR', 'c2d' => 'Cursos completos con videos, slides y materiales.',
    'c3' => 'Social Media Kits', 'c3d' => 'Plantillas para redes sociales listas para publicar.',
    'c4' => 'Funnels', 'c4d' => 'Embudos de venta completos y optimizados.',
    'c5' => 'Templates', 'c5d' => 'Plantillas web y landing pages profesionales.',
    'c6' => 'Automatizaciones', 'c6d' => 'Flujos automatizados de email y ventas.',
    'model_tag' => 'Cómo Funciona',
    'model_title' => 'Modelo de Negocio PLR',
    's1' => 'Descargar', 's1d' => 'Elige y descarga los productos PLR que necesitas.',
    's2' => 'Personalizar', 's2d' => 'Añade tu marca, logo y estilo personal.',
    's3' => 'Vender', 's3d' => 'Publica y vende como producto propio.',
    'cta_title' => 'Empieza hoy tu negocio online',
    'cta_desc' => 'Accede a cientos de productos digitales PLR listos para generar ingresos.',
    'cta_btn' => 'Explorar Productos',
    'social_tag' => 'Comunidad',
    'social_title' => 'Únete al Movimiento',
  ],
  'en' => [
    'hero_title' => 'Build your digital business with PLR',
    'hero_sub' => 'ebooks • courses • templates • funnels',
    'hero_btn1' => 'View Products',
    'hero_btn2' => 'Get Started',
    'intro_tag' => 'What is PLR?',
    'intro_title' => 'Private Label Rights Products',
    'intro_desc' => 'PLR (Private Label Rights) products let you buy ready-made digital content to customize, rebrand, and sell as your own. It\'s the fastest way to launch a digital business.',
    'b1_title' => 'Save Time', 'b1_desc' => 'Ready-to-sell content without creating from scratch.',
    'b2_title' => 'Scalability', 'b2_desc' => 'Sell without limits to a global audience.',
    'b3_title' => 'Unlimited Resell', 'b3_desc' => 'Buy once, sell unlimited times.',
    'b4_title' => 'Your Brand', 'b4_desc' => 'Customize everything with your own branding.',
    'feat_tag' => 'Catalog',
    'feat_title' => 'Featured Products',
    'c1' => 'PLR Ebooks', 'c1d' => 'Guides and digital books ready to rebrand and sell.',
    'c2' => 'PLR Courses', 'c2d' => 'Complete courses with videos, slides and materials.',
    'c3' => 'Social Media Kits', 'c3d' => 'Ready-to-post social media templates.',
    'c4' => 'Funnels', 'c4d' => 'Complete and optimized sales funnels.',
    'c5' => 'Templates', 'c5d' => 'Professional web and landing page templates.',
    'c6' => 'Automations', 'c6d' => 'Automated email and sales workflows.',
    'model_tag' => 'How It Works',
    'model_title' => 'PLR Business Model',
    's1' => 'Download', 's1d' => 'Choose and download the PLR products you need.',
    's2' => 'Customize', 's2d' => 'Add your brand, logo and personal style.',
    's3' => 'Sell', 's3d' => 'Publish and sell as your own product.',
    'cta_title' => 'Start your online business today',
    'cta_desc' => 'Access hundreds of PLR digital products ready to generate income.',
    'cta_btn' => 'Explore Products',
    'social_tag' => 'Community',
    'social_title' => 'Join the Movement',
  ]
];
$x = $t[$lang];
?>

<!-- ========== 1. HERO ========== -->
<section class="relative min-h-screen flex items-center overflow-hidden" id="hero-section">
    <!-- Background Image + Overlay -->
    <div class="absolute inset-0">
        <img src="assets/images/hero_bg.png" alt="Digital workspace" class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-b from-primary/80 via-primary/90 to-primary"></div>
    </div>
    <!-- Decorative Orbs -->
    <div class="absolute top-20 right-10 w-72 h-72 bg-accent/20 rounded-full blur-[120px] float-anim"></div>
    <div class="absolute bottom-20 left-10 w-96 h-96 bg-accent2/15 rounded-full blur-[150px] float-anim" style="animation-delay:-3s"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-20">
        <div class="inline-flex items-center px-4 py-1.5 rounded-full border border-accent/30 bg-accent/5 mb-8 fade-up">
            <span class="w-2 h-2 bg-accent rounded-full mr-2 animate-pulse"></span>
            <span class="text-xs font-semibold text-accent tracking-wider uppercase">PLR Digital Platform</span>
        </div>

        <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black text-white leading-tight mb-6 fade-up" style="transition-delay:.1s">
            <?= $x['hero_title'] ?>
        </h1>

        <p class="text-lg sm:text-xl text-gray-400 font-medium mb-10 fade-up" style="transition-delay:.2s">
            <?= $x['hero_sub'] ?>
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 fade-up" style="transition-delay:.3s">
            <a href="productos.php?lang=<?= $lang ?>" class="btn-glow text-white font-bold px-8 py-4 rounded-full text-lg" id="hero-cta-1">
                <i class="fa-solid fa-rocket mr-2"></i><?= $x['hero_btn1'] ?>
            </a>
            <a href="#intro" class="btn-outline text-white font-semibold px-8 py-4 rounded-full text-lg" id="hero-cta-2">
                <?= $x['hero_btn2'] ?><i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-3 gap-6 max-w-lg mx-auto mt-16 fade-up" style="transition-delay:.4s">
            <div><p class="text-2xl sm:text-3xl font-black gradient-text">500+</p><p class="text-xs text-gray-500 mt-1"><?= $lang==='es'?'Productos':'Products' ?></p></div>
            <div><p class="text-2xl sm:text-3xl font-black gradient-text">10K+</p><p class="text-xs text-gray-500 mt-1"><?= $lang==='es'?'Clientes':'Clients' ?></p></div>
            <div><p class="text-2xl sm:text-3xl font-black gradient-text">24/7</p><p class="text-xs text-gray-500 mt-1"><?= $lang==='es'?'Soporte':'Support' ?></p></div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <i class="fa-solid fa-chevron-down text-accent/60 text-xl"></i>
    </div>
</section>

<!-- ========== 2. INTRO ========== -->
<section class="py-20 lg:py-28 relative" id="intro">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="fade-up">
                <span class="inline-block px-4 py-1 rounded-full bg-accent/10 text-accent text-xs font-bold uppercase tracking-wider mb-4"><?= $x['intro_tag'] ?></span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white leading-tight mb-6"><?= $x['intro_title'] ?></h2>
                <p class="text-gray-400 leading-relaxed text-lg mb-8"><?= $x['intro_desc'] ?></p>
                <div class="grid sm:grid-cols-2 gap-4">
                    <?php
                    $benefits = [
                        ['icon'=>'fa-clock','t'=>$x['b1_title'],'d'=>$x['b1_desc']],
                        ['icon'=>'fa-chart-line','t'=>$x['b2_title'],'d'=>$x['b2_desc']],
                        ['icon'=>'fa-infinity','t'=>$x['b3_title'],'d'=>$x['b3_desc']],
                        ['icon'=>'fa-paintbrush','t'=>$x['b4_title'],'d'=>$x['b4_desc']],
                    ];
                    foreach($benefits as $b): ?>
                    <div class="p-4 rounded-xl bg-secondary/50 border border-gray-800 hover:border-accent/30 transition-all duration-300">
                        <i class="fa-solid <?= $b['icon'] ?> text-accent text-lg mb-2"></i>
                        <h4 class="text-white font-bold text-sm mb-1"><?= $b['t'] ?></h4>
                        <p class="text-gray-500 text-xs"><?= $b['d'] ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="fade-up" style="transition-delay:.2s">
                <div class="relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-accent/20 to-accent2/20 rounded-2xl blur-2xl"></div>
                    <img src="assets/images/workspace_ambiente.png" alt="Workspace" class="relative rounded-2xl shadow-2xl w-full">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== 3. FEATURED PRODUCTS ========== -->
<section class="py-20 lg:py-28 relative" id="featured-products">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-up">
            <span class="inline-block px-4 py-1 rounded-full bg-accent2/10 text-accent2 text-xs font-bold uppercase tracking-wider mb-4"><?= $x['feat_tag'] ?></span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white"><?= $x['feat_title'] ?></h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $cards = [
                ['img'=>'servicio_ebooks.png','t'=>$x['c1'],'d'=>$x['c1d'],'icon'=>'fa-book'],
                ['img'=>'servicio_cursos.png','t'=>$x['c2'],'d'=>$x['c2d'],'icon'=>'fa-graduation-cap'],
                ['img'=>'servicio_social.png','t'=>$x['c3'],'d'=>$x['c3d'],'icon'=>'fa-hashtag'],
                ['img'=>'servicio_funnels.png','t'=>$x['c4'],'d'=>$x['c4d'],'icon'=>'fa-filter'],
                ['img'=>'servicio_templates.png','t'=>$x['c5'],'d'=>$x['c5d'],'icon'=>'fa-palette'],
                ['img'=>'servicio_automation.png','t'=>$x['c6'],'d'=>$x['c6d'],'icon'=>'fa-robot'],
            ];
            foreach($cards as $i => $c): ?>
            <div class="card-hover bg-secondary/50 rounded-2xl overflow-hidden fade-up" style="transition-delay:<?= $i*0.1 ?>s">
                <div class="img-zoom h-48">
                    <img src="assets/images/<?= $c['img'] ?>" alt="<?= $c['t'] ?>" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <div class="w-10 h-10 rounded-lg bg-accent/10 flex items-center justify-center mb-4">
                        <i class="fa-solid <?= $c['icon'] ?> text-accent"></i>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-2"><?= $c['t'] ?></h3>
                    <p class="text-gray-400 text-sm leading-relaxed"><?= $c['d'] ?></p>
                    <a href="productos.php?lang=<?= $lang ?>" class="inline-flex items-center text-accent text-sm font-semibold mt-4 hover:text-accent2 transition-colors">
                        <?= $lang==='es'?'Ver más':'Learn more' ?><i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== 4. BUSINESS MODEL ========== -->
<section class="py-20 lg:py-28 relative overflow-hidden" id="business-model">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-accent/10 rounded-full blur-[200px]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 fade-up">
            <span class="inline-block px-4 py-1 rounded-full bg-accent/10 text-accent text-xs font-bold uppercase tracking-wider mb-4"><?= $x['model_tag'] ?></span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white"><?= $x['model_title'] ?></h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mb-16">
            <?php
            $steps = [
                ['num'=>'01','icon'=>'fa-download','t'=>$x['s1'],'d'=>$x['s1d'],'color'=>'accent'],
                ['num'=>'02','icon'=>'fa-wand-magic-sparkles','t'=>$x['s2'],'d'=>$x['s2d'],'color'=>'accent2'],
                ['num'=>'03','icon'=>'fa-dollar-sign','t'=>$x['s3'],'d'=>$x['s3d'],'color'=>'green-400'],
            ];
            foreach($steps as $i => $s): ?>
            <div class="text-center fade-up" style="transition-delay:<?= $i*0.15 ?>s">
                <div class="relative inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-secondary border border-gray-700 mb-6 pulse-glow">
                    <i class="fa-solid <?= $s['icon'] ?> text-<?= $s['color'] ?> text-2xl"></i>
                    <span class="absolute -top-2 -right-2 w-7 h-7 rounded-full bg-gradient-to-r from-accent to-accent2 text-white text-xs font-black flex items-center justify-center"><?= $s['num'] ?></span>
                </div>
                <h3 class="text-white font-bold text-xl mb-2"><?= $s['t'] ?></h3>
                <p class="text-gray-400 text-sm max-w-xs mx-auto"><?= $s['d'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="max-w-4xl mx-auto fade-up">
            <div class="relative rounded-2xl overflow-hidden">
                <div class="absolute -inset-1 bg-gradient-to-r from-accent to-accent2 rounded-2xl blur-sm opacity-50"></div>
                <img src="assets/images/equipo_freelancer.png" alt="Freelancer" class="relative rounded-2xl w-full">
            </div>
        </div>
    </div>
</section>

<!-- ========== 5. CTA ========== -->
<section class="py-20 lg:py-28 relative" id="cta-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative rounded-3xl overflow-hidden">
            <img src="assets/images/cta_motivacion.png" alt="CTA" class="absolute inset-0 w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-r from-accent/80 to-accent2/80"></div>
            <div class="relative z-10 text-center py-20 px-6 fade-up">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white mb-4"><?= $x['cta_title'] ?></h2>
                <p class="text-white/80 text-lg max-w-xl mx-auto mb-8"><?= $x['cta_desc'] ?></p>
                <a href="productos.php?lang=<?= $lang ?>" class="inline-flex items-center bg-white text-primary font-bold px-8 py-4 rounded-full text-lg hover:bg-gray-100 transition-all hover:scale-105 shadow-2xl" id="cta-main-btn">
                    <i class="fa-solid fa-arrow-right mr-2"></i><?= $x['cta_btn'] ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ========== 6. SOCIAL ========== -->
<section class="py-20 lg:py-28" id="social-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 fade-up">
            <span class="inline-block px-4 py-1 rounded-full bg-accent2/10 text-accent2 text-xs font-bold uppercase tracking-wider mb-4"><?= $x['social_tag'] ?></span>
            <h2 class="text-3xl sm:text-4xl font-black text-white"><?= $x['social_title'] ?></h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 fade-up" style="transition-delay:.15s">
            <?php for($i=1;$i<=6;$i++): ?>
            <div class="img-zoom rounded-xl overflow-hidden aspect-square">
                <img src="assets/images/social_<?= $i ?>.png" alt="Social <?= $i ?>" class="w-full h-full object-cover">
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
