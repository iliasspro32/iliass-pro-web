# IVOMARKET — PLR Digital Products Platform

## 🚀 About
IVOMARKET is a modern, bilingual (ES/EN) marketplace for PLR digital products built with PHP 8+, Tailwind CSS, and a dark SaaS-style design.

## 🛠 Tech Stack
- **PHP 8+** — Server-side logic
- **Tailwind CSS (CDN)** — Styling
- **Google Fonts** — Poppins, Montserrat, Inter
- **Font Awesome 6** — Icons
- **JSON** — Data storage (no database required)

## 📁 Structure
```
├── index.php              # Home page
├── productos.php          # Products catalog
├── contacto.php           # Contact page
├── includes/
│   ├── header.php         # Shared header + nav
│   └── footer.php         # Shared footer
├── admin/
│   └── index.php          # Admin dashboard
├── data/
│   ├── settings.json      # Site settings + payment gateways
│   └── products.json      # Products data
├── assets/images/         # Image assets
├── .htaccess              # URL rewriting + security
└── README.md
```

## ⚡ Installation
1. Upload all files to your hosting (PHP 8+ required)
2. Make sure `data/` directory is writable: `chmod 755 data/`
3. Access your site at `https://yourdomain.com`
4. Admin panel at `https://yourdomain.com/admin/`

## 🔐 Admin Panel
- **URL:** `/admin/`
- **Default credentials:** `admin` / `admin123`
- Features: Product CRUD, Payment gateway config, Site settings, Social links

## 💳 Payment Gateways
Configure via Admin → Pagos:
- **Stripe** — Test & Live keys
- **PayPal** — Sandbox & Live credentials
- **Mercado Pago** — Test & Live tokens

## 🌐 Languages
Bilingual system with `?lang=es` or `?lang=en`. Toggle visible in header.

## ➕ Adding Products
1. Go to Admin → Productos → Añadir
2. Fill name (ES/EN), price, category, description
3. Save — product appears on the public catalog instantly
