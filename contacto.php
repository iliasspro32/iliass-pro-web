<?php
$page_title = 'IVOMARKET | ' . (($_GET['lang'] ?? 'es') === 'es' ? 'Contacto' : 'Contact');
$current_page = 'contacto';
include 'includes/header.php';

$t = [
  'es' => [
    'hero_title' => 'Contacto',
    'hero_desc' => '¿Tienes preguntas? Estamos aquí para ayudarte a crecer tu negocio digital.',
    'support' => 'Soporte 24/7',
    'support_desc' => 'Nuestro equipo está disponible las 24 horas para ayudarte.',
    'email_label' => 'Email',
    'email_desc' => 'Respuesta en menos de 24 horas.',
    'whatsapp_label' => 'WhatsApp',
    'whatsapp_desc' => 'Chat directo con nuestro equipo.',
    'social_label' => 'Redes Sociales',
    'social_desc' => 'Síguenos para novedades y contenido exclusivo.',
    'form_title' => 'Envíanos un Mensaje',
    'name' => 'Nombre completo',
    'email' => 'Tu email',
    'type' => 'Tipo de consulta',
    'type_opts' => ['Soporte técnico','Información de productos','Colaboraciones','Otro'],
    'message' => 'Tu mensaje',
    'send' => 'Enviar Mensaje',
    'select' => 'Selecciona una opción',
  ],
  'en' => [
    'hero_title' => 'Contact',
    'hero_desc' => 'Have questions? We\'re here to help you grow your digital business.',
    'support' => '24/7 Support',
    'support_desc' => 'Our team is available around the clock to help you.',
    'email_label' => 'Email',
    'email_desc' => 'Response within 24 hours.',
    'whatsapp_label' => 'WhatsApp',
    'whatsapp_desc' => 'Chat directly with our team.',
    'social_label' => 'Social Media',
    'social_desc' => 'Follow us for news and exclusive content.',
    'form_title' => 'Send Us a Message',
    'name' => 'Full name',
    'email' => 'Your email',
    'type' => 'Inquiry type',
    'type_opts' => ['Technical support','Product information','Collaborations','Other'],
    'message' => 'Your message',
    'send' => 'Send Message',
    'select' => 'Select an option',
  ]
];
$x = $t[$lang];
?>

<!-- Hero -->
<section class="relative py-24 lg:py-32 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-accent2/5 to-transparent"></div>
    <div class="absolute top-10 left-0 w-80 h-80 bg-accent2/10 rounded-full blur-[120px]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center fade-up">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white mb-4"><?= $x['hero_title'] ?></h1>
        <p class="text-gray-400 text-lg max-w-2xl mx-auto"><?= $x['hero_desc'] ?></p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-12 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-5 gap-12">

            <!-- Left — Info -->
            <div class="lg:col-span-2 space-y-8 fade-up">

                <!-- Support -->
                <div class="p-6 rounded-2xl bg-secondary/50 border border-gray-800 hover:border-accent/30 transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl bg-accent/10 flex items-center justify-center mb-4">
                        <i class="fa-solid fa-headset text-accent text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-1"><?= $x['support'] ?></h3>
                    <p class="text-gray-400 text-sm"><?= $x['support_desc'] ?></p>
                </div>

                <!-- Email -->
                <div class="p-6 rounded-2xl bg-secondary/50 border border-gray-800 hover:border-accent2/30 transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl bg-accent2/10 flex items-center justify-center mb-4">
                        <i class="fa-solid fa-envelope text-accent2 text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-1"><?= $x['email_label'] ?></h3>
                    <p class="text-gray-400 text-sm mb-2"><?= $x['email_desc'] ?></p>
                    <a href="mailto:info@ivomarket.com" class="text-accent hover:text-accent2 text-sm font-semibold transition-colors">info@ivomarket.com</a>
                </div>

                <!-- WhatsApp -->
                <div class="p-6 rounded-2xl bg-secondary/50 border border-gray-800 hover:border-green-500/30 transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl bg-green-500/10 flex items-center justify-center mb-4">
                        <i class="fa-brands fa-whatsapp text-green-500 text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-1"><?= $x['whatsapp_label'] ?></h3>
                    <p class="text-gray-400 text-sm mb-2"><?= $x['whatsapp_desc'] ?></p>
                    <a href="https://wa.me/1234567890" class="text-green-400 hover:text-green-300 text-sm font-semibold transition-colors">+1 (234) 567-890</a>
                </div>

                <!-- Social -->
                <div class="p-6 rounded-2xl bg-secondary/50 border border-gray-800 hover:border-accent/30 transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl bg-accent/10 flex items-center justify-center mb-4">
                        <i class="fa-solid fa-share-nodes text-accent text-xl"></i>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-1"><?= $x['social_label'] ?></h3>
                    <p class="text-gray-400 text-sm mb-3"><?= $x['social_desc'] ?></p>
                    <div class="flex space-x-3">
                        <a href="#" class="w-9 h-9 rounded-full bg-primary flex items-center justify-center text-gray-400 hover:text-white hover:bg-accent transition-all"><i class="fa-brands fa-facebook-f text-sm"></i></a>
                        <a href="#" class="w-9 h-9 rounded-full bg-primary flex items-center justify-center text-gray-400 hover:text-white hover:bg-accent transition-all"><i class="fa-brands fa-instagram text-sm"></i></a>
                        <a href="#" class="w-9 h-9 rounded-full bg-primary flex items-center justify-center text-gray-400 hover:text-white hover:bg-accent transition-all"><i class="fa-brands fa-x-twitter text-sm"></i></a>
                        <a href="#" class="w-9 h-9 rounded-full bg-primary flex items-center justify-center text-gray-400 hover:text-white hover:bg-accent transition-all"><i class="fa-brands fa-youtube text-sm"></i></a>
                    </div>
                </div>
            </div>

            <!-- Right — Form -->
            <div class="lg:col-span-3 fade-up" style="transition-delay:.15s">
                <div class="relative">
                    <div class="absolute -inset-1 bg-gradient-to-r from-accent/20 to-accent2/20 rounded-3xl blur-xl"></div>
                    <div class="relative bg-secondary/80 backdrop-blur-sm rounded-3xl border border-gray-800 p-8 lg:p-10">
                        <h2 class="text-2xl font-bold text-white mb-8">
                            <i class="fa-solid fa-paper-plane gradient-text mr-2"></i><?= $x['form_title'] ?>
                        </h2>

                        <form action="#" method="POST" class="space-y-6" id="contact-form">
                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-300 mb-2"><?= $x['name'] ?></label>
                                <input type="text" id="name" name="name" required placeholder="<?= $x['name'] ?>"
                                    class="w-full px-4 py-3 rounded-xl bg-primary/80 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent transition-all">
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-300 mb-2"><?= $x['email'] ?></label>
                                <input type="email" id="email" name="email" required placeholder="<?= $x['email'] ?>"
                                    class="w-full px-4 py-3 rounded-xl bg-primary/80 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent transition-all">
                            </div>

                            <!-- Type -->
                            <div>
                                <label for="type" class="block text-sm font-medium text-gray-300 mb-2"><?= $x['type'] ?></label>
                                <select id="type" name="type"
                                    class="w-full px-4 py-3 rounded-xl bg-primary/80 border border-gray-700 text-white focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent transition-all appearance-none">
                                    <option value="" class="text-gray-500"><?= $x['select'] ?></option>
                                    <?php foreach($x['type_opts'] as $opt): ?>
                                    <option value="<?= htmlspecialchars($opt) ?>"><?= $opt ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- Message -->
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-300 mb-2"><?= $x['message'] ?></label>
                                <textarea id="message" name="message" rows="5" required placeholder="<?= $x['message'] ?>"
                                    class="w-full px-4 py-3 rounded-xl bg-primary/80 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent transition-all resize-none"></textarea>
                            </div>

                            <!-- Submit -->
                            <button type="submit" class="w-full btn-glow text-white font-bold py-4 rounded-xl text-lg" id="submit-btn">
                                <i class="fa-solid fa-paper-plane mr-2"></i><?= $x['send'] ?>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Optional Map Embed -->
<section class="pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 fade-up">
        <div class="rounded-2xl overflow-hidden border border-gray-800 h-64 lg:h-80">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.019!2d-122.419!3d37.7749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzfCsDQ2JzI5LjYiTiAxMjLCsDI1JzA4LjQiVw!5e0!3m2!1ses!2sus!4v1" width="100%" height="100%" style="border:0;filter:grayscale(80%) brightness(0.5);" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
