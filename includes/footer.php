<?php
// ============================================================
// IVOMARKET — Bilingual Footer
// ============================================================
$lang = $lang ?? ($_GET['lang'] ?? 'es');
?>

<!-- ============ FOOTER ============ -->
<footer class="relative mt-20" id="site-footer">
    <!-- Top gradient border -->
    <div class="h-1 bg-gradient-to-r from-accent via-accent2 to-accent"></div>

    <div class="bg-[#0a0f1e] py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">

                <!-- Col 1: Brand -->
                <div class="lg:col-span-1">
                    <a href="index.php?lang=<?= $lang ?>" class="inline-block mb-4">
                        <span class="text-2xl font-extrabold text-white font-heading">
                            IVO<span class="gradient-text">MARKET</span>
                        </span>
                    </a>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        <?= $lang === 'es'
                            ? 'Tu plataforma para escalar con productos digitales PLR. Automatiza, personaliza y vende sin límites.'
                            : 'Your platform to scale with PLR digital products. Automate, customize and sell without limits.' ?>
                    </p>
                    <div class="flex space-x-3">
                        <a href="#" class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-gray-400 hover:text-white hover:bg-accent transition-all duration-300" aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-gray-400 hover:text-white hover:bg-accent transition-all duration-300" aria-label="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-gray-400 hover:text-white hover:bg-accent transition-all duration-300" aria-label="Twitter">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-gray-400 hover:text-white hover:bg-accent transition-all duration-300" aria-label="YouTube">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <!-- Col 2: Navigation -->
                <div>
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-6">
                        <?= $lang === 'es' ? 'Navegación' : 'Navigation' ?>
                    </h4>
                    <ul class="space-y-3">
                        <li><a href="index.php?lang=<?= $lang ?>" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 flex items-center group">
                            <span class="w-0 group-hover:w-3 h-0.5 bg-accent mr-0 group-hover:mr-2 transition-all duration-300 rounded"></span>
                            <?= $lang === 'es' ? 'Inicio' : 'Home' ?>
                        </a></li>
                        <li><a href="productos.php?lang=<?= $lang ?>" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 flex items-center group">
                            <span class="w-0 group-hover:w-3 h-0.5 bg-accent mr-0 group-hover:mr-2 transition-all duration-300 rounded"></span>
                            <?= $lang === 'es' ? 'Productos' : 'Products' ?>
                        </a></li>
                        <li><a href="contacto.php?lang=<?= $lang ?>" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 flex items-center group">
                            <span class="w-0 group-hover:w-3 h-0.5 bg-accent mr-0 group-hover:mr-2 transition-all duration-300 rounded"></span>
                            <?= $lang === 'es' ? 'Contacto' : 'Contact' ?>
                        </a></li>
                    </ul>
                </div>

                <!-- Col 3: Resources -->
                <div>
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-6">
                        <?= $lang === 'es' ? 'Recursos' : 'Resources' ?>
                    </h4>
                    <ul class="space-y-3">
                        <li><a href="productos.php?lang=<?= $lang ?>" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 flex items-center group">
                            <span class="w-0 group-hover:w-3 h-0.5 bg-accent2 mr-0 group-hover:mr-2 transition-all duration-300 rounded"></span>
                            Ebooks PLR
                        </a></li>
                        <li><a href="productos.php?lang=<?= $lang ?>" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 flex items-center group">
                            <span class="w-0 group-hover:w-3 h-0.5 bg-accent2 mr-0 group-hover:mr-2 transition-all duration-300 rounded"></span>
                            <?= $lang === 'es' ? 'Cursos PLR' : 'PLR Courses' ?>
                        </a></li>
                        <li><a href="productos.php?lang=<?= $lang ?>" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 flex items-center group">
                            <span class="w-0 group-hover:w-3 h-0.5 bg-accent2 mr-0 group-hover:mr-2 transition-all duration-300 rounded"></span>
                            Templates
                        </a></li>
                        <li><a href="productos.php?lang=<?= $lang ?>" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 flex items-center group">
                            <span class="w-0 group-hover:w-3 h-0.5 bg-accent2 mr-0 group-hover:mr-2 transition-all duration-300 rounded"></span>
                            Funnels
                        </a></li>
                    </ul>
                </div>

                <!-- Col 4: Contact -->
                <div>
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-6">
                        <?= $lang === 'es' ? 'Contacto' : 'Contact' ?>
                    </h4>
                    <ul class="space-y-4">
                        <li class="flex items-center text-gray-400 text-sm">
                            <i class="fa-solid fa-envelope text-accent mr-3 w-5 text-center"></i>
                            <a href="mailto:info@ivomarket.com" class="hover:text-white transition-colors">info@ivomarket.com</a>
                        </li>
                        <li class="flex items-center text-gray-400 text-sm">
                            <i class="fa-brands fa-whatsapp text-green-500 mr-3 w-5 text-center"></i>
                            <a href="https://wa.me/1234567890" class="hover:text-white transition-colors">+1 (234) 567-890</a>
                        </li>
                        <li class="flex items-center text-gray-400 text-sm">
                            <i class="fa-solid fa-clock text-accent2 mr-3 w-5 text-center"></i>
                            <?= $lang === 'es' ? 'Soporte 24/7' : '24/7 Support' ?>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Bottom Bar -->
            <div class="mt-16 pt-8 border-t border-gray-800 flex flex-col md:flex-row items-center justify-between">
                <p class="text-gray-500 text-sm">
                    &copy; <?= date('Y') ?> IVOMARKET. <?= $lang === 'es' ? 'Todos los derechos reservados.' : 'All rights reserved.' ?>
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-300 text-sm transition-colors">
                        <?= $lang === 'es' ? 'Privacidad' : 'Privacy' ?>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-300 text-sm transition-colors">
                        <?= $lang === 'es' ? 'Términos' : 'Terms' ?>
                    </a>
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- ============ SCROLL-REVEAL SCRIPT ============ -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
});
</script>

</body>
</html>
