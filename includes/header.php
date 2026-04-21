<?php
// ============================================================
// IVOMARKET — Bilingual Header
// ============================================================

$lang = $_GET['lang'] ?? 'es';
if (!in_array($lang, ['es', 'en'])) $lang = 'es';

// Build language toggle URL
function langUrl($targetLang) {
    $params = $_GET;
    $params['lang'] = $targetLang;
    $currentPage = basename($_SERVER['PHP_SELF']);
    return $currentPage . '?' . http_build_query($params);
}

// Default meta
$page_title       = $page_title ?? 'IVOMARKET | PLR Digital Products';
$page_description = $page_description ?? ($lang === 'es'
    ? 'Plataforma de productos digitales PLR para escalar tu negocio online.'
    : 'PLR digital products platform to scale your online business.');
$current_page     = $current_page ?? 'inicio';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0F172A">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary:   '#0F172A',
                        secondary: '#1E293B',
                        accent:    '#7C3AED',
                        accent2:   '#06B6D4',
                    },
                    fontFamily: {
                        heading: ['Montserrat', 'sans-serif'],
                        body:    ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@600;700;800;900&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        /* ---- Base ---- */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Inter', sans-serif;
            background: #0F172A;
            color: #e2e8f0;
            overflow-x: hidden;
        }
        h1,h2,h3,h4,h5,h6 { font-family: 'Montserrat', sans-serif; }

        /* ---- Scrollbar ---- */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #0F172A; }
        ::-webkit-scrollbar-thumb { background: linear-gradient(180deg, #7C3AED, #06B6D4); border-radius: 10px; }

        /* ---- Glassmorphism Nav ---- */
        .nav-glass {
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(124, 58, 237, 0.15);
        }

        /* ---- Gradient Text ---- */
        .gradient-text {
            background: linear-gradient(135deg, #7C3AED, #06B6D4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* ---- Glow Button ---- */
        .btn-glow {
            background: linear-gradient(135deg, #7C3AED, #06B6D4);
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .btn-glow::before {
            content: '';
            position: absolute;
            top: 0; left: -100%;
            width: 100%; height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        .btn-glow:hover::before { left: 100%; }
        .btn-glow:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 30px rgba(124, 58, 237, 0.5), 0 0 60px rgba(6, 182, 212, 0.3);
        }

        /* ---- Outline Button ---- */
        .btn-outline {
            border: 2px solid rgba(124, 58, 237, 0.5);
            transition: all 0.3s ease;
        }
        .btn-outline:hover {
            background: rgba(124, 58, 237, 0.1);
            border-color: #7C3AED;
            transform: translateY(-2px);
            box-shadow: 0 0 20px rgba(124, 58, 237, 0.3);
        }

        /* ---- Cards ---- */
        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(124, 58, 237, 0.1);
        }
        .card-hover:hover {
            transform: translateY(-8px) scale(1.02);
            border-color: rgba(124, 58, 237, 0.5);
            box-shadow: 0 20px 60px rgba(124, 58, 237, 0.15), 0 0 40px rgba(6, 182, 212, 0.1);
        }

        /* ---- Section Fade-in ---- */
        .fade-up {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ---- Floating animation ---- */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .float-anim { animation: float 6s ease-in-out infinite; }

        /* ---- Pulse glow ---- */
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(124, 58, 237, 0.3); }
            50% { box-shadow: 0 0 40px rgba(124, 58, 237, 0.6), 0 0 80px rgba(6, 182, 212, 0.2); }
        }
        .pulse-glow { animation: pulse-glow 3s ease-in-out infinite; }

        /* ---- Grid Overlay ---- */
        .grid-overlay {
            background-image:
                linear-gradient(rgba(124, 58, 237, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(124, 58, 237, 0.03) 1px, transparent 1px);
            background-size: 60px 60px;
        }

        /* ---- Hamburger ---- */
        .hamburger span {
            display: block;
            width: 24px;
            height: 2px;
            background: #e2e8f0;
            transition: all 0.3s;
            border-radius: 2px;
        }
        .hamburger.active span:nth-child(1) { transform: rotate(45deg) translate(5px, 5px); }
        .hamburger.active span:nth-child(2) { opacity: 0; }
        .hamburger.active span:nth-child(3) { transform: rotate(-45deg) translate(5px, -5px); }

        /* ---- Mobile Menu ---- */
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .mobile-menu.active { transform: translateX(0); }

        /* ---- Lang Toggle ---- */
        .lang-toggle {
            display: inline-flex;
            border-radius: 9999px;
            overflow: hidden;
            border: 1px solid rgba(124, 58, 237, 0.3);
        }
        .lang-toggle a {
            padding: 4px 12px;
            font-size: 0.75rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
        }
        .lang-toggle a.active-lang {
            background: linear-gradient(135deg, #7C3AED, #06B6D4);
            color: #fff;
        }
        .lang-toggle a:not(.active-lang) {
            color: #94a3b8;
        }
        .lang-toggle a:not(.active-lang):hover {
            color: #e2e8f0;
            background: rgba(124, 58, 237, 0.1);
        }

        /* ---- Badge ---- */
        .badge {
            font-size: 0.65rem;
            padding: 2px 10px;
            border-radius: 9999px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .badge-popular { background: linear-gradient(135deg, #7C3AED, #06B6D4); color: #fff; }
        .badge-new     { background: #06B6D4; color: #0F172A; }
        .badge-best    { background: #F59E0B; color: #0F172A; }

        /* ---- Image Hover ---- */
        .img-zoom {
            overflow: hidden;
        }
        .img-zoom img {
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .img-zoom:hover img {
            transform: scale(1.1);
        }
    </style>
</head>

<body class="grid-overlay">

<!-- ============ HEADER ============ -->
<header id="main-header" class="nav-glass fixed top-0 left-0 w-full z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">

            <!-- Logo -->
            <a href="index.php?lang=<?= $lang ?>" class="flex items-center space-x-1 group" id="logo-link">
                <span class="text-2xl lg:text-3xl font-extrabold text-white tracking-tight font-heading">
                    IVO<span class="gradient-text">MARKET</span>
                </span>
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden lg:flex items-center space-x-8" id="desktop-nav">
                <a href="index.php?lang=<?= $lang ?>"
                   class="text-sm font-medium transition-colors duration-300 <?= $current_page === 'inicio' ? 'text-white' : 'text-gray-400 hover:text-white' ?>"
                   id="nav-home">
                    <?= $lang === 'es' ? 'Inicio' : 'Home' ?>
                    <?php if ($current_page === 'inicio'): ?>
                        <span class="block h-0.5 mt-1 bg-gradient-to-r from-accent to-accent2 rounded-full"></span>
                    <?php endif; ?>
                </a>
                <a href="productos.php?lang=<?= $lang ?>"
                   class="text-sm font-medium transition-colors duration-300 <?= $current_page === 'productos' ? 'text-white' : 'text-gray-400 hover:text-white' ?>"
                   id="nav-products">
                    <?= $lang === 'es' ? 'Productos' : 'Products' ?>
                    <?php if ($current_page === 'productos'): ?>
                        <span class="block h-0.5 mt-1 bg-gradient-to-r from-accent to-accent2 rounded-full"></span>
                    <?php endif; ?>
                </a>
                <a href="contacto.php?lang=<?= $lang ?>"
                   class="text-sm font-medium transition-colors duration-300 <?= $current_page === 'contacto' ? 'text-white' : 'text-gray-400 hover:text-white' ?>"
                   id="nav-contact">
                    <?= $lang === 'es' ? 'Contacto' : 'Contact' ?>
                    <?php if ($current_page === 'contacto'): ?>
                        <span class="block h-0.5 mt-1 bg-gradient-to-r from-accent to-accent2 rounded-full"></span>
                    <?php endif; ?>
                </a>
            </nav>

            <!-- Right Side: Lang + CTA + Hamburger -->
            <div class="flex items-center space-x-4">

                <!-- Language Toggle -->
                <div class="lang-toggle" id="lang-toggle">
                    <a href="<?= langUrl('es') ?>" class="<?= $lang === 'es' ? 'active-lang' : '' ?>">ES</a>
                    <a href="<?= langUrl('en') ?>" class="<?= $lang === 'en' ? 'active-lang' : '' ?>">EN</a>
                </div>

                <!-- CTA Desktop -->
                <a href="productos.php?lang=<?= $lang ?>"
                   class="hidden lg:inline-flex btn-glow text-white text-sm font-semibold px-6 py-2.5 rounded-full"
                   id="cta-header">
                    <i class="fa-solid fa-download mr-2"></i>
                    <?= $lang === 'es' ? 'Descargar Ahora' : 'Download Now' ?>
                </a>

                <!-- Hamburger -->
                <button class="lg:hidden hamburger flex flex-col space-y-1.5 p-2" id="hamburger-btn" aria-label="Menu">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-menu fixed top-0 right-0 w-72 h-screen bg-primary/95 backdrop-blur-xl z-50 p-8 pt-20 lg:hidden" id="mobile-menu">
        <button class="absolute top-6 right-6 text-gray-400 hover:text-white text-xl" id="close-mobile-menu">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <nav class="flex flex-col space-y-6">
            <a href="index.php?lang=<?= $lang ?>" class="text-lg font-semibold <?= $current_page === 'inicio' ? 'gradient-text' : 'text-gray-300 hover:text-white' ?> transition-colors">
                <i class="fa-solid fa-house mr-3"></i><?= $lang === 'es' ? 'Inicio' : 'Home' ?>
            </a>
            <a href="productos.php?lang=<?= $lang ?>" class="text-lg font-semibold <?= $current_page === 'productos' ? 'gradient-text' : 'text-gray-300 hover:text-white' ?> transition-colors">
                <i class="fa-solid fa-box-open mr-3"></i><?= $lang === 'es' ? 'Productos' : 'Products' ?>
            </a>
            <a href="contacto.php?lang=<?= $lang ?>" class="text-lg font-semibold <?= $current_page === 'contacto' ? 'gradient-text' : 'text-gray-300 hover:text-white' ?> transition-colors">
                <i class="fa-solid fa-envelope mr-3"></i><?= $lang === 'es' ? 'Contacto' : 'Contact' ?>
            </a>
            <hr class="border-gray-700">
            <a href="productos.php?lang=<?= $lang ?>" class="btn-glow text-white text-center font-semibold px-6 py-3 rounded-full">
                <i class="fa-solid fa-download mr-2"></i>
                <?= $lang === 'es' ? 'Descargar Ahora' : 'Download Now' ?>
            </a>
        </nav>
    </div>
</header>

<!-- Spacer for fixed header -->
<div class="h-16 lg:h-20"></div>

<script>
// Hamburger toggle
const hamburger = document.getElementById('hamburger-btn');
const mobileMenu = document.getElementById('mobile-menu');
const closeBtn   = document.getElementById('close-mobile-menu');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    mobileMenu.classList.toggle('active');
});
closeBtn.addEventListener('click', () => {
    hamburger.classList.remove('active');
    mobileMenu.classList.remove('active');
});

// Header shadow on scroll
window.addEventListener('scroll', () => {
    const header = document.getElementById('main-header');
    if (window.scrollY > 50) {
        header.classList.add('shadow-2xl');
        header.style.borderBottomColor = 'rgba(124,58,237,0.3)';
    } else {
        header.classList.remove('shadow-2xl');
        header.style.borderBottomColor = 'rgba(124,58,237,0.15)';
    }
});
</script>
