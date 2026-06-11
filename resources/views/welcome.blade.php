<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cahaya Sembalun Penginapan di Kaki Rinjani</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Cahaya Sembalun Penginapan nyaman di Sembalun Bumbung, kaki Gunung Rinjani, Lombok Timur. View sawah, udara sejuk, mulai Rp 200.000/malam. Booking via WhatsApp!" />
    <meta name="keywords"
        content="penginapan sembalun, homestay rinjani, cahaya sembalun, hotel sembalun bumbung, lombok timur, pendakian rinjani, wisata sembalun" />
    <meta name="author" content="Cahaya Sembalun" />
    <meta name="robots" content="index, follow" />

    <!-- Open Graph / WhatsApp Preview -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Cahaya Sembalun Penginapan di Kaki Rinjani" />
    <meta property="og:description"
        content="Penginapan nyaman dengan view Gunung Rinjani & sawah hijau. Mulai Rp 200.000/malam. Hubungi kami via WhatsApp!" />
    <meta property="og:image" content="https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?w=1200&q=90" />
    <meta property="og:url" content="https://cahayasembalun.com" />
    <meta property="og:locale" content="id_ID" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Cahaya Sembalun Penginapan di Kaki Rinjani" />
    <meta name="twitter:description"
        content="Penginapan nyaman di Sembalun Bumbung, Lombok Timur. View Rinjani, udara sejuk, mulai Rp 200.000/malam." />
    <meta name="twitter:image" content="https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?w=1200&q=90" />

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=DM+Sans:wght@300;400;500&display=swap"
        rel="stylesheet" />

    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --hijau: #2d5a27;
            --hijau2: #3e7a35;
            --emas: #c9a84c;
            --emas2: #e8c96a;
            --krem: #f7f3ec;
            --putih: #ffffff;
            --gelap: #1a2a18;
            --teks: #3a3a2e;
            --border: rgba(45, 90, 39, .15);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--krem);
            color: var(--teks);
            overflow-x: hidden;
        }

        /* ── NAVBAR ── */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 5%;
            background: rgba(26, 42, 24, .85);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(201, 168, 76, .2);
            transition: padding .3s;
        }

        nav.scrolled {
            padding: 12px 5%;
        }

        .nav-logo {
            font-family: 'Playfair Display', serif;
            color: var(--emas);
            font-size: 1.4rem;
            letter-spacing: .5px;
        }

        .nav-logo span {
            color: var(--putih);
            font-style: italic;
        }

        .nav-links {
            display: flex;
            gap: 28px;
            list-style: none;
        }

        .nav-links a {
            color: rgba(255, 255, 255, .8);
            text-decoration: none;
            font-size: .88rem;
            font-weight: 400;
            letter-spacing: .4px;
            transition: color .25s;
        }

        .nav-links a:hover {
            color: var(--emas2);
        }

        .nav-wa {
            background: #25D366;
            color: #fff;
            padding: 9px 20px;
            border-radius: 50px;
            text-decoration: none;
            font-size: .85rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 7px;
            transition: transform .2s, box-shadow .2s;
        }

        .nav-wa:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(37, 211, 102, .35);
        }

        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
        }

        .hamburger span {
            width: 24px;
            height: 2px;
            background: var(--emas);
            border-radius: 2px;
            display: block;
        }

        /* ── HERO ── */
        #hero {
            min-height: 100vh;
            background:
                linear-gradient(to bottom, rgba(10, 22, 10, .55) 0%, rgba(10, 22, 10, .35) 50%, rgba(26, 42, 24, .85) 100%),
                url('gambar/pembukaan.jpeg') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 20px;
            position: relative;
        }

        .hero-inner {
            max-width: 750px;
        }

        .hero-badge {
            display: inline-block;
            border: 1px solid var(--emas);
            color: var(--emas);
            font-size: .75rem;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            padding: 6px 18px;
            border-radius: 50px;
            margin-bottom: 22px;
            animation: fadeUp .8s ease both;
        }

        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.6rem, 6vw, 4.5rem);
            color: #fff;
            line-height: 1.15;
            margin-bottom: 18px;
            animation: fadeUp .9s .1s ease both;
        }

        .hero-title em {
            color: var(--emas2);
            font-style: italic;
        }

        .hero-sub {
            color: rgba(255, 255, 255, .78);
            font-size: 1.05rem;
            line-height: 1.65;
            margin-bottom: 38px;
            font-weight: 300;
            animation: fadeUp 1s .2s ease both;
        }

        .hero-btns {
            display: flex;
            gap: 14px;
            justify-content: center;
            flex-wrap: wrap;
            animation: fadeUp 1s .3s ease both;
        }

        .btn-pesan {
            background: #25D366;
            color: #fff;
            padding: 15px 34px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 9px;
            transition: transform .2s, box-shadow .2s;
            box-shadow: 0 4px 24px rgba(37, 211, 102, .4);
        }

        .btn-pesan:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(37, 211, 102, .5);
        }

        .btn-info {
            border: 1.5px solid rgba(255, 255, 255, .5);
            color: #fff;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 1rem;
            transition: background .2s, border-color .2s;
        }

        .btn-info:hover {
            background: rgba(255, 255, 255, .1);
            border-color: #fff;
        }

        /* Hero stats strip */
        .hero-stats {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(26, 42, 24, .92);
            backdrop-filter: blur(10px);
            border-top: 1px solid rgba(201, 168, 76, .2);
            display: flex;
            justify-content: center;
            gap: 0;
            padding: 20px 5%;
            animation: fadeUp 1s .5s ease both;
        }

        .hero-stat-item {
            flex: 1;
            max-width: 200px;
            text-align: center;
            padding: 0 20px;
            border-right: 1px solid rgba(255, 255, 255, .1);
        }

        .hero-stat-item:last-child {
            border-right: none;
        }

        .hero-stat-num {
            font-family: 'Playfair Display', serif;
            font-size: 1.6rem;
            color: var(--emas2);
            font-weight: 700;
        }

        .hero-stat-label {
            font-size: .72rem;
            color: rgba(255, 255, 255, .6);
            letter-spacing: 1px;
            margin-top: 2px;
        }

        .scroll-hint {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            color: rgba(255, 255, 255, .5);
            font-size: .75rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            animation: bounce 2s infinite;
        }

        .scroll-hint::after {
            content: '';
            width: 1px;
            height: 40px;
            background: rgba(255, 255, 255, .3);
        }

        /* ── SECTION SHARED ── */
        section {
            padding: 90px 5%;
        }

        .section-label {
            font-size: .72rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--emas);
            margin-bottom: 10px;
            font-weight: 500;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(1.8rem, 3.5vw, 2.7rem);
            color: var(--gelap);
            line-height: 1.2;
            margin-bottom: 18px;
        }

        .section-sub {
            color: #666;
            font-size: .97rem;
            line-height: 1.7;
            max-width: 560px;
        }

        .divider {
            width: 48px;
            height: 2px;
            background: var(--emas);
            margin: 18px 0;
        }

        /* Scroll reveal */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity .7s ease, transform .7s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .reveal-delay-1 {
            transition-delay: .1s;
        }

        .reveal-delay-2 {
            transition-delay: .2s;
        }

        .reveal-delay-3 {
            transition-delay: .3s;
        }

        .reveal-delay-4 {
            transition-delay: .4s;
        }

        /* ── TENTANG ── */
        #tentang {
            background: var(--putih);
        }

        .tentang-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 70px;
            align-items: center;
            max-width: 1100px;
            margin: 0 auto;
        }

        .tentang-img-wrap {
            position: relative;
        }

        .tentang-img-wrap img {
            width: 100%;
            height: 480px;
            object-fit: cover;
            border-radius: 4px 24px 4px 24px;
            box-shadow: 20px 20px 0 var(--emas);
        }

        .tentang-badge-float {
            position: absolute;
            bottom: -18px;
            right: -18px;
            background: var(--hijau);
            color: #fff;
            padding: 18px 22px;
            border-radius: 12px;
            font-size: .85rem;
            text-align: center;
            line-height: 1.4;
            box-shadow: 0 8px 30px rgba(45, 90, 39, .3);
        }

        .tentang-badge-float strong {
            display: block;
            font-size: 1.5rem;
            font-family: 'Playfair Display', serif;
            color: var(--emas2);
        }

        .stats-row {
            display: flex;
            gap: 30px;
            margin-top: 36px;
            flex-wrap: wrap;
        }

        .stat {
            text-align: center;
        }

        .stat-num {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: var(--hijau);
            font-weight: 700;
        }

        .stat-label {
            font-size: .8rem;
            color: #888;
            margin-top: 2px;
        }

        /* ── GALERI ── */
        #galeri {
            background: var(--gelap);
            padding: 90px 5%;
        }

        #galeri .section-title {
            color: #fff;
        }

        #galeri .section-label {
            color: var(--emas);
        }

        #galeri .divider {
            background: var(--emas);
        }

        #galeri .section-sub {
            color: rgba(255, 255, 255, .6);
        }

        .galeri-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            gap: 10px;
            margin-top: 40px;
            max-width: 1100px;
            margin-left: auto;
            margin-right: auto;
        }

        .galeri-item {
            aspect-ratio: 1 / 1;
            border-radius: 10px;
            overflow: hidden;
            cursor: pointer;
            position: relative;
        }

        .galeri-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .5s ease;
        }

        .galeri-item:hover img {
            transform: scale(1.06);
        }

        .galeri-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(26, 42, 24, .7) 0%, transparent 60%);
            opacity: 0;
            transition: opacity .3s;
            display: flex;
            align-items: flex-end;
            padding: 16px;
        }

        .galeri-item:hover .galeri-overlay {
            opacity: 1;
        }

        .galeri-overlay span {
            color: #fff;
            font-size: .85rem;
            font-weight: 500;
            letter-spacing: .5px;
        }

        .galeri-item::before {
            content: '🔍';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            font-size: 2rem;
            z-index: 2;
            transition: transform .3s ease;
        }

        .galeri-item:hover::before {
            transform: translate(-50%, -50%) scale(1);
        }

        /* Lightbox */
        .lightbox {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .92);
            z-index: 9999;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .lightbox.active {
            display: flex;
        }

        .lightbox-img {
            max-width: 90vw;
            max-height: 85vh;
            object-fit: contain;
            border-radius: 8px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .5);
        }

        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 28px;
            color: #fff;
            font-size: 2.2rem;
            cursor: pointer;
            background: none;
            border: none;
            line-height: 1;
            opacity: .7;
            transition: opacity .2s;
        }

        .lightbox-close:hover {
            opacity: 1;
        }

        .lightbox-caption {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            color: rgba(255, 255, 255, .7);
            font-size: .9rem;
            letter-spacing: 1px;
        }

        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, .15);
            border: none;
            color: #fff;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            font-size: 1.4rem;
            cursor: pointer;
            transition: background .2s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .lightbox-nav:hover {
            background: rgba(255, 255, 255, .25);
        }

        .lightbox-prev {
            left: 20px;
        }

        .lightbox-next {
            right: 20px;
        }

        /* ── FASILITAS ── */
        #fasilitas {
            background: var(--krem);
        }

        .fas-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 50px;
            max-width: 1100px;
            margin-left: auto;
            margin-right: auto;
        }

        .fas-card {
            background: var(--putih);
            border-radius: 16px;
            padding: 28px 22px;
            text-align: center;
            border: 1px solid var(--border);
            transition: transform .25s, box-shadow .25s;
        }

        .fas-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 36px rgba(45, 90, 39, .12);
        }

        .fas-icon {
            font-size: 2.2rem;
            margin-bottom: 12px;
        }

        .fas-name {
            font-weight: 500;
            font-size: .93rem;
            color: var(--gelap);
        }

        .fas-desc {
            font-size: .8rem;
            color: #888;
            margin-top: 5px;
            line-height: 1.5;
        }

        /* ── KAMAR / HARGA ── */
        #kamar {
            background: var(--putih);
        }

        .kamar-header {
            max-width: 1100px;
            margin: 0 auto 50px;
        }

        .kamar-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 26px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .kamar-card {
            border: 1px solid var(--border);
            border-radius: 20px;
            overflow: hidden;
            transition: transform .25s, box-shadow .25s;
            background: var(--putih);
        }

        .kamar-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 40px rgba(45, 90, 39, .13);
        }

        .kamar-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
            display: block;
        }

        .kamar-body {
            padding: 22px;
        }

        .kamar-tipe {
            font-size: .72rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--emas);
            font-weight: 500;
        }

        .kamar-nama {
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
            color: var(--gelap);
            margin: 6px 0;
        }

        .kamar-harga {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--hijau);
        }

        .harga-row-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 0;
            border-bottom: 1px dashed rgba(45, 90, 39, .12);
        }

        .harga-row-item:last-of-type {
            border-bottom: none;
        }

        .harga-hari-label {
            font-size: .82rem;
            color: #888;
        }

        .harga-hari-label strong {
            color: var(--gelap);
            font-weight: 600;
        }

        .harga-hari-label em {
            font-style: normal;
            margin-left: 4px;
        }

        .harga-nom {
            font-family: 'Playfair Display', serif;
            font-size: 1rem;
            font-weight: 700;
            color: var(--hijau);
        }

        .harga-nom em {
            font-style: normal;
            font-family: 'DM Sans', sans-serif;
            font-size: .75rem;
            font-weight: 300;
            color: #888;
        }

        .harga-nom.weekend {
            color: #b07d1a;
        }

        .kamar-harga span {
            font-size: .8rem;
            color: #888;
            font-weight: 300;
        }

        .kamar-fitur {
            list-style: none;
            margin: 14px 0 18px;
            display: flex;
            flex-wrap: wrap;
            gap: 7px;
        }

        .kamar-fitur li {
            font-size: .78rem;
            background: var(--krem);
            padding: 4px 11px;
            border-radius: 50px;
            color: var(--teks);
        }

        .btn-book-card {
            display: block;
            text-align: center;
            background: var(--hijau);
            color: #fff;
            text-decoration: none;
            padding: 11px;
            border-radius: 50px;
            font-size: .88rem;
            font-weight: 500;
            transition: background .2s;
            margin-top: 4px;
        }

        .btn-book-card:hover {
            background: var(--hijau2);
        }

        /* ── TESTIMONI ── */
        #testimoni {
            background: var(--putih);
        }

        .testi-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 50px;
            max-width: 1100px;
            margin-left: auto;
            margin-right: auto;
        }

        .testi-card {
            background: var(--krem);
            border-radius: 20px;
            padding: 28px;
            border: 1px solid var(--border);
            position: relative;
            transition: transform .25s, box-shadow .25s;
        }

        .testi-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 32px rgba(45, 90, 39, .1);
        }

        .testi-quote {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            color: var(--emas);
            line-height: .8;
            margin-bottom: 14px;
            opacity: .5;
        }

        .testi-text {
            font-size: .93rem;
            color: var(--teks);
            line-height: 1.7;
            margin-bottom: 20px;
            font-style: italic;
        }

        .testi-stars {
            color: #f5b800;
            font-size: 1rem;
            margin-bottom: 14px;
            letter-spacing: 2px;
        }

        .testi-author {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .testi-avatar {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--emas);
        }

        .testi-avatar-placeholder {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: var(--hijau);
            border: 2px solid var(--emas);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 700;
            font-size: .95rem;
            flex-shrink: 0;
        }

        .testi-name {
            font-weight: 600;
            font-size: .9rem;
            color: var(--gelap);
        }

        .testi-from {
            font-size: .75rem;
            color: #888;
            margin-top: 2px;
        }

        .testi-platform {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: .7rem;
            background: #fff;
            border: 1px solid var(--border);
            padding: 3px 10px;
            border-radius: 50px;
            color: #888;
        }

        /* Rating Summary */
        .rating-summary {
            background: linear-gradient(135deg, var(--hijau), #1a3a17);
            border-radius: 20px;
            padding: 36px;
            max-width: 1100px;
            margin: 0 auto 40px;
            display: flex;
            align-items: center;
            gap: 40px;
            flex-wrap: wrap;
        }

        .rating-big {
            text-align: center;
        }

        .rating-num {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            color: var(--emas2);
            font-weight: 700;
            line-height: 1;
        }

        .rating-stars-big {
            font-size: 1.4rem;
            color: #f5b800;
            margin: 6px 0;
            letter-spacing: 3px;
        }

        .rating-count {
            color: rgba(255, 255, 255, .6);
            font-size: .82rem;
        }

        .rating-bars {
            flex: 1;
            min-width: 200px;
        }

        .rating-bar-row {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 8px;
        }

        .rating-bar-label {
            font-size: .8rem;
            color: rgba(255, 255, 255, .7);
            width: 40px;
        }

        .rating-bar-track {
            flex: 1;
            height: 6px;
            background: rgba(255, 255, 255, .15);
            border-radius: 3px;
            overflow: hidden;
        }

        .rating-bar-fill {
            height: 100%;
            background: var(--emas);
            border-radius: 3px;
            transition: width 1s ease;
        }

        .rating-bar-pct {
            font-size: .78rem;
            color: rgba(255, 255, 255, .6);
            width: 32px;
            text-align: right;
        }

        .rating-source {
            color: rgba(255, 255, 255, .6);
            font-size: .8rem;
            margin-top: 10px;
        }

        /* ── LOKASI ── */
        #lokasi {
            background: var(--gelap);
            color: #fff;
        }

        #lokasi .section-title {
            color: #fff;
        }

        #lokasi .divider {
            background: var(--emas);
        }

        .lokasi-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: start;
            max-width: 1100px;
            margin: 0 auto;
        }

        .lokasi-info {
            display: flex;
            flex-direction: column;
            gap: 22px;
        }

        .lokasi-item {
            display: flex;
            gap: 16px;
            align-items: flex-start;
        }

        .lokasi-icon {
            font-size: 1.8rem;
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .lokasi-text strong {
            display: block;
            font-size: .85rem;
            color: var(--emas);
            margin-bottom: 4px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .lokasi-text p {
            color: rgba(255, 255, 255, .75);
            font-size: .93rem;
            line-height: 1.6;
        }

        .map-embed {
            border-radius: 16px;
            overflow: hidden;
            border: 2px solid rgba(201, 168, 76, .25);
            height: 400px;
        }

        .map-embed iframe {
            width: 100%;
            height: 100%;
            border: none;
            display: block;
        }

        /* ── CARA PESAN ── */
        #pesan {
            background: var(--krem);
        }

        .pesan-steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 50px;
            max-width: 1100px;
            margin-left: auto;
            margin-right: auto;
        }

        .step-card {
            background: var(--putih);
            border-radius: 16px;
            padding: 28px 22px;
            border: 1px solid var(--border);
            position: relative;
        }

        .step-num {
            font-family: 'Playfair Display', serif;
            font-size: 3.5rem;
            color: rgba(45, 90, 39, .08);
            font-weight: 700;
            position: absolute;
            top: 10px;
            right: 16px;
            line-height: 1;
        }

        .step-icon {
            font-size: 1.8rem;
            margin-bottom: 14px;
        }

        .step-title {
            font-weight: 600;
            font-size: .95rem;
            color: var(--gelap);
            margin-bottom: 7px;
        }

        .step-desc {
            font-size: .83rem;
            color: #777;
            line-height: 1.6;
        }

        /* ── FAQ ── */
        #faq {
            background: var(--putih);
        }

        .faq-wrap {
            max-width: 760px;
            margin: 50px auto 0;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .faq-item {
            border: 1px solid var(--border);
            border-radius: 14px;
            overflow: hidden;
            background: var(--krem);
            transition: box-shadow .2s;
        }

        .faq-item:hover {
            box-shadow: 0 4px 20px rgba(45, 90, 39, .08);
        }

        .faq-item.open {
            border-color: var(--emas);
        }

        .faq-q {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 22px;
            cursor: pointer;
            font-weight: 500;
            font-size: .95rem;
            color: var(--gelap);
            user-select: none;
            gap: 12px;
        }

        .faq-arrow {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: var(--putih);
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: .9rem;
            transition: transform .3s, background .2s;
        }

        .faq-item.open .faq-arrow {
            transform: rotate(180deg);
            background: var(--emas);
            border-color: var(--emas);
            color: var(--gelap);
        }

        .faq-a {
            max-height: 0;
            overflow: hidden;
            transition: max-height .4s ease, padding .4s ease;
            padding: 0 22px;
        }

        .faq-item.open .faq-a {
            max-height: 300px;
            padding: 0 22px 18px;
        }

        .faq-a p {
            font-size: .9rem;
            color: #666;
            line-height: 1.7;
        }

        .faq-cta {
            text-align: center;
            margin-top: 36px;
        }

        .faq-cta p {
            font-size: .92rem;
            color: #777;
            margin-bottom: 14px;
        }

        .btn-faq-wa {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #25D366;
            color: #fff;
            padding: 13px 28px;
            border-radius: 50px;
            text-decoration: none;
            font-size: .9rem;
            font-weight: 500;
            transition: transform .2s, box-shadow .2s;
        }

        .btn-faq-wa:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(37, 211, 102, .3);
        }

        /* ── CTA ── */
        #cta {
            background: linear-gradient(135deg, var(--hijau) 0%, #1a3a17 100%);
            text-align: center;
            padding: 80px 5%;
            position: relative;
            overflow: hidden;
        }

        #cta::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .cta-inner {
            position: relative;
            max-width: 620px;
            margin: 0 auto;
        }

        .cta-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(1.9rem, 4vw, 3rem);
            color: #fff;
            line-height: 1.2;
            margin-bottom: 14px;
        }

        .cta-sub {
            color: rgba(255, 255, 255, .75);
            font-size: .97rem;
            line-height: 1.65;
            margin-bottom: 36px;
            font-weight: 300;
        }

        .btn-wa-besar {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: #25D366;
            color: #fff;
            padding: 18px 44px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 600;
            transition: transform .2s, box-shadow .2s;
            box-shadow: 0 6px 30px rgba(37, 211, 102, .45);
        }

        .btn-wa-besar:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(37, 211, 102, .55);
        }

        .wa-icon {
            font-size: 1.4rem;
        }

        .cta-note {
            color: rgba(255, 255, 255, .45);
            font-size: .8rem;
            margin-top: 16px;
        }

        /* ── FOOTER ── */
        footer {
            background: #0e1c0d;
            color: rgba(255, 255, 255, .55);
            padding: 50px 5% 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 50px;
            max-width: 1100px;
            margin: 0 auto 40px;
        }

        .footer-brand {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            color: var(--emas);
            margin-bottom: 12px;
        }

        .footer-brand span {
            color: #fff;
            font-style: italic;
        }

        .footer-desc {
            font-size: .85rem;
            line-height: 1.7;
            margin-bottom: 18px;
        }

        .footer-socials {
            display: flex;
            gap: 10px;
            margin-top: 4px;
        }

        .footer-social-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, .15);
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 1rem;
            transition: border-color .2s, background .2s;
        }

        .footer-social-btn:hover {
            border-color: var(--emas);
            background: rgba(201, 168, 76, .1);
        }

        .footer-col h4 {
            color: #fff;
            font-size: .85rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 16px;
            font-weight: 500;
        }

        .footer-col ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .footer-col ul li a {
            color: rgba(255, 255, 255, .55);
            text-decoration: none;
            font-size: .85rem;
            transition: color .2s;
        }

        .footer-col ul li a:hover {
            color: var(--emas2);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, .08);
            padding-top: 24px;
            text-align: center;
            font-size: .8rem;
            max-width: 1100px;
            margin: 0 auto;
        }

        /* ── WA FLOATING ── */
        .wa-float-wrap {
            position: fixed;
            bottom: 28px;
            right: 20px;
            z-index: 999;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 14px;
        }

        .wa-bubble {
            background: #fff;
            border: 2.5px solid #1a1a1a;
            border-radius: 18px 18px 4px 18px;
            padding: 10px 16px;
            position: relative;
            box-shadow: 3px 3px 0 #1a1a1a;
            animation: bubblePop .5s cubic-bezier(.36, 1.6, .5, 1) both, bubbleWiggle 3s 1s ease-in-out infinite;
            transform-origin: bottom right;
        }

        .wa-bubble strong {
            display: block;
            font-family: 'DM Sans', sans-serif;
            font-size: .88rem;
            font-weight: 800;
            color: #1a1a1a;
            white-space: nowrap;
        }

        .wa-bubble em {
            display: block;
            font-style: normal;
            font-size: .7rem;
            color: #25D366;
            font-weight: 600;
            margin-top: 2px;
        }

        .wa-bubble::after {
            content: '';
            position: absolute;
            bottom: -13px;
            right: 16px;
            border-left: 10px solid transparent;
            border-top: 13px solid #fff;
            filter: drop-shadow(1px 2px 0 #1a1a1a);
        }

        .wa-float {
            background: #25D366;
            color: #fff;
            width: 58px;
            height: 58px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            border: 3px solid #1a1a1a;
            box-shadow: 3px 3px 0 #1a1a1a;
            transition: transform .15s, box-shadow .15s;
            animation: waPulse 2.5s infinite;
            flex-shrink: 0;
        }

        .wa-float:hover {
            transform: translate(-2px, -2px);
            box-shadow: 5px 5px 0 #1a1a1a;
            animation: none;
        }

        .wa-float:active {
            transform: translate(2px, 2px);
            box-shadow: 1px 1px 0 #1a1a1a;
        }

        /* ── BACK TO TOP ── */
        .back-top {
            position: fixed;
            bottom: 100px;
            right: 20px;
            z-index: 998;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: var(--hijau);
            color: #fff;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            box-shadow: 0 4px 16px rgba(45, 90, 39, .3);
            opacity: 0;
            transform: translateY(10px);
            transition: opacity .3s, transform .3s;
            pointer-events: none;
        }

        .back-top.show {
            opacity: 1;
            transform: translateY(0);
            pointer-events: all;
        }

        .back-top:hover {
            background: var(--hijau2);
        }

        /* ── ANIMATIONS ── */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(22px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateX(-50%) translateY(0);
            }

            50% {
                transform: translateX(-50%) translateY(8px);
            }
        }

        @keyframes bubblePop {
            from {
                opacity: 0;
                transform: scale(.3);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes bubbleWiggle {

            0%,
            100% {
                transform: rotate(0deg);
            }

            20% {
                transform: rotate(-3deg);
            }

            40% {
                transform: rotate(3deg);
            }

            60% {
                transform: rotate(-2deg);
            }

            80% {
                transform: rotate(2deg);
            }
        }

        @keyframes waPulse {

            0%,
            100% {
                box-shadow: 3px 3px 0 #1a1a1a;
            }

            50% {
                box-shadow: 3px 3px 0 #1a1a1a, 0 0 18px rgba(37, 211, 102, .5);
            }
        }

        @keyframes barFill {
            from {
                width: 0;
            }
        }

        /* ── RESPONSIVE ── */
        @media (max-width: 1024px) {
            .kamar-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .testi-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .ig-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .galeri-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .galeri-item.big {
                grid-column: span 1;
                grid-row: span 1;
            }
        }

        @media (max-width: 820px) {

            .tentang-grid,
            .lokasi-grid,
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 36px;
            }

            .tentang-img-wrap img {
                height: 300px;
            }

            .tentang-badge-float {
                bottom: -14px;
                right: 10px;
            }

            .nav-links,
            .nav-wa {
                display: none;
            }

            .hamburger {
                display: flex;
            }

            .nav-links.open {
                display: flex;
                flex-direction: column;
                position: fixed;
                top: 64px;
                left: 0;
                right: 0;
                background: rgba(26, 42, 24, .97);
                padding: 20px 5% 30px;
                gap: 18px;
                z-index: 99;
            }

            .fas-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .testi-grid {
                grid-template-columns: 1fr;
            }

            .ig-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .hero-stats {
                flex-wrap: wrap;
            }

            .hero-stat-item {
                border-right: none;
                border-bottom: 1px solid rgba(255, 255, 255, .1);
                padding: 12px 20px;
            }

            .hero-stat-item:last-child {
                border-bottom: none;
            }

            .rating-summary {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }

            .galeri-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 600px) {
            .kamar-grid {
                grid-template-columns: 1fr;
            }

            .pesan-steps {
                grid-template-columns: 1fr;
            }

            .galeri-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .ig-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .wa-float-wrap {
                bottom: 18px;
                right: 14px;
            }

            .wa-float {
                width: 52px;
                height: 52px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav id="navbar">
        <div class="nav-logo">Cahaya <span>Sembalun</span></div>
        <ul class="nav-links" id="navLinks">
            <li><a href="#tentang">Tentang</a></li>
            <li><a href="#galeri">Galeri</a></li>
            <li><a href="#fasilitas">Fasilitas</a></li>
            <li><a href="#kamar">Kamar & Harga</a></li>
            <li><a href="#pesan">Cara Pemesanan</a></li>
            <li><a href="#testimoni">Ulasan</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#lokasi">Lokasi</a></li>
        </ul>
        <a href="https://wa.me/6283871323721?text=Halo%20Cahaya%20Sembalun%2C%20saya%20ingin%20menanyakan%20ketersediaan%20kamar"
            target="_blank" class="nav-wa">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                <path
                    d="M12 0C5.373 0 0 5.373 0 12c0 2.096.535 4.072 1.476 5.794L0 24l6.389-1.448A11.946 11.946 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.818 9.818 0 01-5.013-1.378l-.36-.213-3.733.846.88-3.627-.234-.373A9.818 9.818 0 1112 21.818z" />
            </svg>
            Chat Sekarang
        </a>
        <div class="hamburger" id="hamburger" onclick="toggleMenu()">
            <span></span><span></span><span></span>
        </div>
    </nav>

    <!-- HERO -->
    <section id="hero">
        <div class="hero-inner">
            <div class="hero-badge">✦ Sembalun, Lombok Timur ✦</div>
            <h1 class="hero-title">Bermalam di <em>Kaki</em><br>Gunung Rinjani</h1>
            <p class="hero-sub">Rasakan ketenangan alam Sembalun bersama Cahaya Sembalun penginapan nyaman dengan
                pemandangan gunung dan sawah hijau yang memukau.</p>
            <div class="hero-btns">
                <a href="https://wa.me/6283871323721?text=Halo%20Cahaya%20Sembalun%2C%20saya%20ingin%20booking%20kamar"
                    target="_blank" class="btn-pesan">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                        <path
                            d="M12 0C5.373 0 0 5.373 0 12c0 2.096.535 4.072 1.476 5.794L0 24l6.389-1.448A11.946 11.946 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.818 9.818 0 01-5.013-1.378l-.36-.213-3.733.846.88-3.627-.234-.373A9.818 9.818 0 1112 21.818z" />
                    </svg>
                    Booking Sekarang via WA
                </a>
                <a href="#tentang" class="btn-info">Lihat Info Lengkap</a>
            </div>
        </div>
        <div class="scroll-hint">Scroll</div>
    </section>

    <!-- TENTANG -->
    <section id="tentang">
        <div class="tentang-grid">
            <div class="tentang-img-wrap reveal">
                <img src="gambar/tentangkami.jpeg" alt="View Rinjani dari Sembalun" />
                <div class="tentang-badge-float">
                    <strong>⭐ 4.8</strong>
                    Rating Tamu
                </div>
            </div>
            <div class="reveal reveal-delay-2">
                <p class="section-label">Tentang Kami</p>
                <h2 class="section-title">Penginapan Nyaman di<br>Jantung Sembalun</h2>
                <div class="divider"></div>
                <p class="section-sub">Cahaya Sembalun adalah penginapan keluarga yang terletak di Sembalun Lendang
                    Luwar,
                    Lombok
                    Timur kawasan lembah indah di kaki Gunung Rinjani. Kami menawarkan kenyamanan sederhana dengan
                    nuansa alam
                    yang autentik, cocok untuk pendaki Rinjani, wisatawan keluarga, maupun yang sekadar ingin rehat dari
                    kesibukan
                    kota.</p>
                <p class="section-sub" style="margin-top:14px">Udara sejuk, hamparan sawah, dan panorama gunung adalah
                    sambutan
                    kami setiap pagi. Kami siap melayani Anda dengan sepenuh hati.</p>
                <div class="stats-row">
                    <div class="stat">
                        <div class="stat-num">1.200<span style="font-size:1.1rem">m</span></div>
                        <div class="stat-label">Ketinggian DPL</div>
                    </div>
                    <div class="stat">
                        <div class="stat-num">24/7</div>
                        <div class="stat-label">Siap Melayani</div>
                    </div>
                    <div class="stat">
                        <div class="stat-num">100%</div>
                        <div class="stat-label">Nuansa Alam</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALERI -->
    <section id="galeri">
        <p class="section-label">Galeri Foto</p>
        <h2 class="section-title">Lihat Keindahannya</h2>
        <div class="divider"></div>
        <p class="section-sub" style="color:rgba(255,255,255,.6)">
            Foto langsung dari Cahaya Sembalun.
        </p>
        <div class="galeri-grid" id="galeriGrid"></div>
    </section>

    <!-- Lightbox -->
    <div class="lightbox" id="lightbox" onclick="closeLightboxOutside(event)">
        <button class="lightbox-close" onclick="closeLightbox()">✕</button>
        <button class="lightbox-nav lightbox-prev" onclick="navLightbox(-1)">‹</button>
        <img class="lightbox-img" id="lightboxImg" src="" alt="" />
        <button class="lightbox-nav lightbox-next" onclick="navLightbox(1)">›</button>
        <div class="lightbox-caption" id="lightboxCaption"></div>
    </div>

    <!-- FASILITAS -->
    <section id="fasilitas">
        <p class="section-label">Fasilitas</p>
        <h2 class="section-title">Apa yang Kami Sediakan</h2>
        <div class="divider"></div>
        <div class="fas-grid">
            <div class="fas-card reveal">
                <div class="fas-icon">🛏️</div>
                <div class="fas-name">Kamar Bersih</div>
                <div class="fas-desc">Tempat tidur nyaman dengan linen bersih dan segar</div>
            </div>
            <div class="fas-card reveal reveal-delay-1">
                <div class="fas-icon">🚿</div>
                <div class="fas-name">Kamar Mandi</div>
                <div class="fas-desc">Kamar mandi dalam dengan air bersih</div>
            </div>
            <div class="fas-card reveal reveal-delay-2">
                <div class="fas-icon">🅿️</div>
                <div class="fas-name">Parkir Luas</div>
                <div class="fas-desc">Area parkir aman untuk kendaraan tamu</div>
            </div>
            <div class="fas-card reveal reveal-delay-3">
                <div class="fas-icon">🌄</div>
                <div class="fas-name">View Rinjani</div>
                <div class="fas-desc">Pemandangan langsung ke Gunung Rinjani dan Bukit Pergasingan</div>
            </div>
            <div class="fas-card reveal">
                <div class="fas-icon">🍽️</div>
                <div class="fas-name">Sarapan</div>
                <div class="fas-desc">Tersedia sarapan pagi atas permintaan</div>
            </div>
            <div class="fas-card reveal reveal-delay-1">
                <div class="fas-icon">🏔️</div>
                <div class="fas-name">Info Pendakian</div>
                <div class="fas-desc">Informasi jalur dan guide lokal Rinjani</div>
            </div>
            <div class="fas-card reveal reveal-delay-2">
                <div class="fas-icon">🧹</div>
                <div class="fas-name">Housekeeping</div>
                <div class="fas-desc">Kebersihan kamar dijaga setiap hari</div>
            </div>
            <div class="fas-card reveal reveal-delay-3">
                <div class="fas-icon">📶</div>
                <div class="fas-name">Sinyal Bagus</div>
                <div class="fas-desc">Area dengan sinyal telekomunikasi yang memadai</div>
            </div>
        </div>
    </section>

    <!-- KAMAR & HARGA -->
    <section id="kamar" style="background:var(--putih)">
        <div class="kamar-header">
            <p class="section-label">Kamar & Tarif</p>
            <h2 class="section-title">Pilih Kamar Anda</h2>
            <div class="divider"></div>
            <p class="section-sub">Semua harga sudah termasuk fasilitas dasar. Hubungi kami untuk harga grup atau
                menginap
                jangka panjang.</p>
        </div>
        <div class="kamar-grid">
            <div class="kamar-card reveal">
                <img class="kamar-img" src="gambar/Kamar Segitiga.jpeg" alt="Kamar Standar"
                    onerror="this.src='https://images.unsplash.com/photo-1586105251261-72a756497a11?w=600&q=80'" />
                <div class="kamar-body">
                    <div class="kamar-tipe">Tipe Standar</div>
                    <div class="kamar-nama">Kamar Segitiga</div>
                    <div class="harga-row-item">
                        <span class="harga-hari-label"><strong>Weekday</strong></span>
                        <span class="harga-nom">Rp 300.000 <em>/malam</em></span>
                    </div>
                    <div class="harga-row-item">
                        <span class="harga-hari-label"><strong>Weekend</strong></span>
                        <span class="harga-nom weekend">Rp 400.000 <em>/malam</em></span>
                    </div>
                    <ul class="kamar-fitur">
                        <li>1 Tempat Tidur</li>
                        <li>Kamar Mandi Dalam</li>
                        <li>Air Hangat</li>
                        <li>View Bukit & Sawah</li>
                    </ul>
                    <a href="https://wa.me/6283871323721?text=Halo%2C%20saya%20ingin%20booking%20*Kamar%20Segitiga*%20di%20Cahaya%20Sembalun"
                        target="_blank" class="btn-book-card">Pesan Kamar Ini</a>
                </div>
            </div>

            <div class="kamar-card reveal reveal-delay-1">
                <img class="kamar-img" src="gambar/Kamar Kecil.jpeg" alt="Kamar Kecil"
                    onerror="this.src='https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=600&q=80'" />
                <div class="kamar-body">
                    <div class="kamar-tipe">Tipe Standar</div>
                    <div class="kamar-nama">Kamar Kecil</div>
                    <div class="harga-row-item">
                        <span class="harga-hari-label"><strong>Weekday</strong></span>
                        <span class="harga-nom">Rp 250.000 <em>/malam</em></span>
                    </div>
                    <div class="harga-row-item">
                        <span class="harga-hari-label"><strong>Weekend</strong></span>
                        <span class="harga-nom weekend">Rp 400.000 <em>/malam</em></span>
                    </div>
                    <ul class="kamar-fitur">
                        <li>1 Tempat Tidur</li>
                        <li>Kamar Mandi Dalam</li>
                        <li>Air Hangat</li>
                        <li>View Sawah</li>
                    </ul>
                    <a href="https://wa.me/6283871323721?text=Halo%2C%20saya%20ingin%20booking%20*Kamar%20Kecil*%20di%20Cahaya%20Sembalun"
                        target="_blank" class="btn-book-card">Pesan Kamar Ini</a>
                </div>
            </div>

            <div class="kamar-card reveal reveal-delay-2">
                <img class="kamar-img" src="gambar/Kamar Keluarga.webp" alt="Family Room"
                    onerror="this.src='https://images.unsplash.com/photo-1591088398332-8a7791972843?w=600&q=80'" />
                <div class="kamar-body">
                    <div class="kamar-tipe">Tipe Family</div>
                    <div class="kamar-nama">Family Room</div>
                    <div class="kamar-harga">Rp 400.000 <span>/ malam</span></div>
                    <ul class="kamar-fitur">
                        <li>2 Tempat Tidur</li>
                        <li>View Bukit Pergasingan & Sawah</li>
                        <li>Dapur</li>
                        <li>2 Kamar Mandi</li>
                        <li>Kamar Besar dan Luas</li>
                    </ul>
                    <a href="https://wa.me/6283871323721?text=Halo%2C%20saya%20ingin%20booking%20*Family%20Room*%20di%20Cahaya%20Sembalun"
                        target="_blank" class="btn-book-card">Pesan Kamar Ini</a>
                </div>
            </div>

            <div class="kamar-card reveal reveal-delay-3">
                <img class="kamar-img" src="gambar/Camping Area.jpeg" alt="Camping Ground"
                    onerror="this.src='https://images.unsplash.com/photo-1504280390367-361c6d9f38f4?w=600&q=80'" />
                <div class="kamar-body">
                    <div class="kamar-tipe">Tipe Outdoor</div>
                    <div class="kamar-nama">Camping Ground</div>
                    <div class="kamar-harga">Rp 40.000 <span>/ Orang</span></div>
                    <ul class="kamar-fitur">
                        <li>Area Luas</li>
                        <li>Bisa Sewa Tenda</li>
                        <li>Toilet Umum</li>
                        <li>View Bukit Pergasingan & Sawah</li>
                        <li>Api Unggun</li>
                    </ul>
                    <a href="https://wa.me/6283871323721?text=Halo%2C%20saya%20ingin%20booking%20*Camping%20Ground*%20di%20Cahaya%20Sembalun"
                        target="_blank" class="btn-book-card">Pesan Sekarang</a>
                </div>
            </div>
        </div>
        <p style="text-align:center; margin-top:24px; font-size:.82rem; color:#999;">* Harga dan Fasilitas dapat
            berubah
            sewaktu-waktu. Konfirmasi harga terbaru via WhatsApp.</p>
    </section>

    <!-- TESTIMONI -->
    <section id="testimoni">
        <p class="section-label">Ulasan Tamu</p>
        <h2 class="section-title">Apa Kata Mereka?</h2>
        <div class="divider"></div>

        <!-- Rating Summary -->
        <div class="rating-summary reveal">
            <div class="rating-big">
                <div class="rating-num">4.8</div>
                <div class="rating-stars-big">★★★★★</div>
                <div class="rating-count">Berdasarkan ulasan Google</div>
            </div>
            <div class="rating-bars">
                <div class="rating-bar-row">
                    <div class="rating-bar-label">5 ★</div>
                    <div class="rating-bar-track">
                        <div class="rating-bar-fill" style="width:85%"></div>
                    </div>
                    <div class="rating-bar-pct">85%</div>
                </div>
                <div class="rating-bar-row">
                    <div class="rating-bar-label">4 ★</div>
                    <div class="rating-bar-track">
                        <div class="rating-bar-fill" style="width:10%"></div>
                    </div>
                    <div class="rating-bar-pct">10%</div>
                </div>
                <div class="rating-bar-row">
                    <div class="rating-bar-label">3 ★</div>
                    <div class="rating-bar-track">
                        <div class="rating-bar-fill" style="width:5%"></div>
                    </div>
                    <div class="rating-bar-pct">5%</div>
                </div>
                <div class="rating-bar-row">
                    <div class="rating-bar-label">2 ★</div>
                    <div class="rating-bar-track">
                        <div class="rating-bar-fill" style="width:0%"></div>
                    </div>
                    <div class="rating-bar-pct">0%</div>
                </div>
                <div class="rating-bar-row">
                    <div class="rating-bar-label">1 ★</div>
                    <div class="rating-bar-track">
                        <div class="rating-bar-fill" style="width:0%"></div>
                    </div>
                    <div class="rating-bar-pct">0%</div>
                </div>
                <p class="rating-source">📍 Sumber: Google Maps Cahaya Sembalun Camp</p>
            </div>
        </div>

        <!-- Testimoni Cards -->
        <div class="testi-grid">
            <div class="testi-card reveal">
                <div class="testi-platform">Google Maps</div>
                <div class="testi-quote">"</div>
                <div class="testi-stars">★★★★★</div>
                <p class="testi-text">Penginapan yang sangat nyaman di kaki Rinjani. Pemandangan sawaah dan gunungnya
                    luar
                    biasa, udara sejuk banget. Pemiliknya juga ramah dan informatif soal jalur pendakian. Pasti balik
                    lagi!</p>
                <div class="testi-author">
                    <div class="testi-avatar-placeholder">A</div>
                    <div>
                        <div class="testi-name">Andi Pratama</div>
                        <div class="testi-from">Mataram, NTB · Pendaki Rinjani</div>
                    </div>
                </div>
            </div>

            <div class="testi-card reveal reveal-delay-1">
                <div class="testi-platform">Google Maps</div>
                <div class="testi-quote">"</div>
                <div class="testi-stars">★★★★★</div>
                <p class="testi-text">Liburan keluarga kami sangat berkesan di sini. Anak-anak senang banget main di
                    area
                    camping, api unggunnya seru! Kamar bersih, harga sangat terjangkau untuk view sepremium ini.</p>
                <div class="testi-author">
                    <div class="testi-avatar-placeholder">S</div>
                    <div>
                        <div class="testi-name">Sari Dewi</div>
                        <div class="testi-from">Surabaya, Jawa Timur · Wisata Keluarga</div>
                    </div>
                </div>
            </div>

            <div class="testi-card reveal reveal-delay-2">
                <div class="testi-platform">Google Maps</div>
                <div class="testi-quote">"</div>
                <div class="testi-stars">★★★★★</div>
                <p class="testi-text">Tempat yang benar-benar tersembunyi! Viewnya nggak ada duanya, kelihatan langsung
                    puncak
                    Rinjani dari kamar. Sahur dan makan pagi dengan pemandangan gunung priceless banget pengalamannya.
                </p>
                <div class="testi-author">
                    <div class="testi-avatar-placeholder">R</div>
                    <div>
                        <div class="testi-name">Rizky Firmansyah</div>
                        <div class="testi-from">Bandung, Jawa Barat · Backpacker</div>
                    </div>
                </div>
            </div>

            <div class="testi-card reveal">
                <div class="testi-platform">Google Maps</div>
                <div class="testi-quote">"</div>
                <div class="testi-stars">★★★★★</div>
                <p class="testi-text">Kami menginap 3 malam sebelum dan setelah mendaki Rinjani. Pemiliknya sangat
                    helpful,
                    ngasih info banyak tentang kondisi jalur. Kamarnya bersih, air hangatnya mantap buat istirahat
                    setelah turun
                    gunung!</p>
                <div class="testi-author">
                    <div class="testi-avatar-placeholder">D</div>
                    <div>
                        <div class="testi-name">Dimas & Tim</div>
                        <div class="testi-from">Jakarta · Grup Pendakian 6 Orang</div>
                    </div>
                </div>
            </div>

            <div class="testi-card reveal reveal-delay-1">
                <div class="testi-platform">Google Maps</div>
                <div class="testi-quote">"</div>
                <div class="testi-stars">★★★★☆</div>
                <p class="testi-text">Harga sangat worth it untuk view yang didapat. Sembalun memang magis, dan Cahaya
                    Sembalun
                    jadi basecamp terbaik kami. Respon WA cepat, booking mudah, datang langsung welcome. Recommended!
                </p>
                <div class="testi-author">
                    <div class="testi-avatar-placeholder">N</div>
                    <div>
                        <div class="testi-name">Nina Oktaviani</div>
                        <div class="testi-from">Denpasar, Bali · Solo Traveler</div>
                    </div>
                </div>
            </div>

            <div class="testi-card reveal reveal-delay-2">
                <div class="testi-platform">Google Maps</div>
                <div class="testi-quote">"</div>
                <div class="testi-stars">★★★★★</div>
                <p class="testi-text">Camping ground nya seru abis! Tidur di tenda, api unggun, lihat bintang yang
                    jelas banget
                    pengalaman yang nggak bisa dilupain. Toiletnya bersih juga. 10/10 bakal kesini lagi sama rombongan.
                </p>
                <div class="testi-author">
                    <div class="testi-avatar-placeholder">F</div>
                    <div>
                        <div class="testi-name">Fajar & Geng</div>
                        <div class="testi-from">Lombok · Camping Weekend</div>
                    </div>
                </div>
            </div>
        </div>

        <div style="text-align:center; margin-top:32px;">
            <a href="https://maps.app.goo.gl/1eK6UWvC5Xx1KBZE6" target="_blank"
                style="display:inline-flex; align-items:center; gap:8px; color:var(--hijau); font-size:.9rem; text-decoration:none; border:1px solid var(--hijau); padding:10px 24px; border-radius:50px; transition:background .2s, color .2s;"
                onmouseover="this.style.background='var(--hijau)';this.style.color='#fff'"
                onmouseout="this.style.background='transparent';this.style.color='var(--hijau)'">
                📍 Lihat Semua Ulasan di Google Maps →
            </a>
        </div>
    </section>

    <!-- LOKASI -->
    <section id="lokasi">
        <div class="lokasi-grid">
            <div class="reveal">
                <p class="section-label">Lokasi</p>
                <h2 class="section-title">Mudah Dijangkau</h2>
                <div class="divider"></div>
                <div class="lokasi-info">
                    <div class="lokasi-item">
                        <div class="lokasi-icon">📍</div>
                        <div class="lokasi-text">
                            <strong>Alamat</strong>
                            <p>Sembalun Lendang Luwar, Kecamatan Sembalun, Kabupaten Lombok Timur, NTB</p>
                        </div>
                    </div>
                    <div class="lokasi-item">
                        <div class="lokasi-icon">🕐</div>
                        <div class="lokasi-text">
                            <strong>Check-in / Check-out</strong>
                            <p>Check-in: 13.00 WITA &nbsp;|&nbsp; Check-out: 12.00 WITA</p>
                        </div>
                    </div>
                    <div class="lokasi-item">
                        <div class="lokasi-icon">🚗</div>
                        <div class="lokasi-text">
                            <strong>Jarak dari Bandara</strong>
                            <p>±85 km dari Bandara Internasional Lombok (sekitar 2–2,5 jam perjalanan)</p>
                        </div>
                    </div>
                    <div class="lokasi-item">
                        <div class="lokasi-icon">🏔️</div>
                        <div class="lokasi-text">
                            <strong>Wisata Terdekat</strong>
                            <p>Pos Pendakian Rinjani · Bukit Selong · Ladang Stroberi · Air Terjun Sembalun</p>
                        </div>
                    </div>
                    <div class="lokasi-item">
                        <div class="lokasi-icon">📞</div>
                        <div class="lokasi-text">
                            <strong>Kontak</strong>
                            <p>WhatsApp: <a href="https://wa.me/6283871323721" target="_blank"
                                    style="color:var(--emas2)">+62
                                    838-7132-3721</a>
                                &nbsp;
                                <button onclick="copyNumber()"
                                    style="background:none;border:1px solid rgba(255,255,255,.3);color:rgba(255,255,255,.6);font-size:.75rem;padding:3px 10px;border-radius:20px;cursor:pointer;transition:.2s;"
                                    onmouseover="this.style.borderColor='var(--emas)';this.style.color='var(--emas2)'"
                                    onmouseout="this.style.borderColor='rgba(255,255,255,.3)';this.style.color='rgba(255,255,255,.6)'"
                                    id="copyBtn">📋 Salin</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reveal reveal-delay-2">
                <div class="map-embed">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.4366502924095!2d116.51807419999999!3d-8.358633700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc2f006a0b793b%3A0x350dfc73b5e74034!2sCahaya%20Sembalun%20Camp!5e0!3m2!1sid!2sid!4v1778491309276!5m2!1sid!2sid"
                        width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <a href="https://maps.app.goo.gl/1eK6UWvC5Xx1KBZE6" target="_blank"
                    style="display:inline-block; margin-top:14px; color:var(--emas); font-size:.85rem; text-decoration:none;">📍
                    Buka di Google Maps →</a>
            </div>
        </div>
    </section>

    {{-- Section Booking --}}
    <section id="pesan" style="background:#fff;">
        <div style="max-width:700px; margin:0 auto;">
            <div class="section-label">RESERVASI</div>
            <h2 class="section-title">Form Pemesanan</h2>
            <div class="divider"></div>
            <p class="section-sub" style="margin-bottom:36px;">Isi form di bawah, kami akan langsung menghubungi Anda
                via WhatsApp untuk konfirmasi.</p>

            <form action="{{ route('booking.store') }}" method="POST"
                style="background:#f7f3ec; padding:36px; border-radius:16px;">
                @csrf

                {{-- Validasi Error --}}
                @if ($errors->any())
                    <div
                        style="background:#f8d7da; color:#721c24; padding:14px; border-radius:8px; margin-bottom:20px;">
                        @foreach ($errors->all() as $error)
                            <div>⚠️ {{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <div style="display:grid; grid-template-columns:1fr 1fr; gap:16px;">
                    <div>
                        <label style="display:block; font-size:.85rem; margin-bottom:6px; font-weight:500;">Nama
                            Lengkap *</label>
                        <input type="text" name="nama" value="{{ old('nama') }}" required
                            style="width:100%; padding:11px 14px; border:1px solid #ddd; border-radius:8px; font-family:'DM Sans',sans-serif;"
                            placeholder="Nama Anda">
                    </div>
                    <div>
                        <label style="display:block; font-size:.85rem; margin-bottom:6px; font-weight:500;">No. HP /
                            WhatsApp *</label>
                        <input type="text" name="no_hp" value="{{ old('no_hp') }}" required
                            style="width:100%; padding:11px 14px; border:1px solid #ddd; border-radius:8px; font-family:'DM Sans',sans-serif;"
                            placeholder="08xxxxxxxxxx">
                    </div>
                </div>

                <div style="margin-top:16px;">
                    <label style="display:block; font-size:.85rem; margin-bottom:6px; font-weight:500;">Pilih Kamar
                        *</label>
                    <select name="kamar_id" required
                        style="width:100%; padding:11px 14px; border:1px solid #ddd; border-radius:8px; font-family:'DM Sans',sans-serif;">
                        <option value="">-- Pilih Kamar --</option>
                        @foreach ($kamars as $kamar)
                            <option value="{{ $kamar->id }}" {{ old('kamar_id') == $kamar->id ? 'selected' : '' }}>
                                {{ $kamar->nama }} — Rp {{ number_format($kamar->harga, 0, ',', '.') }}/malam
                            </option>
                        @endforeach
                    </select>
                </div>

                <div style="display:grid; grid-template-columns:1fr 1fr; gap:16px; margin-top:16px;">
                    <div>
                        <label style="display:block; font-size:.85rem; margin-bottom:6px; font-weight:500;">Check-in
                            *</label>
                        <input type="date" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}" required
                            min="{{ date('Y-m-d') }}"
                            style="width:100%; padding:11px 14px; border:1px solid #ddd; border-radius:8px; font-family:'DM Sans',sans-serif;">
                    </div>
                    <div>
                        <label style="display:block; font-size:.85rem; margin-bottom:6px; font-weight:500;">Check-out
                            *</label>
                        <input type="date" name="tanggal_keluar" value="{{ old('tanggal_keluar') }}" required
                            min="{{ date('Y-m-d', strtotime('+1 day')) }}"
                            style="width:100%; padding:11px 14px; border:1px solid #ddd; border-radius:8px; font-family:'DM Sans',sans-serif;">
                    </div>
                </div>

                <div style="margin-top:16px;">
                    <label style="display:block; font-size:.85rem; margin-bottom:6px; font-weight:500;">Jumlah Tamu
                        *</label>
                    <input type="number" name="jumlah_tamu" value="{{ old('jumlah_tamu', 1) }}" required
                        min="1" max="10"
                        style="width:100%; padding:11px 14px; border:1px solid #ddd; border-radius:8px; font-family:'DM Sans',sans-serif;">
                </div>

                <div style="margin-top:16px;">
                    <label style="display:block; font-size:.85rem; margin-bottom:6px; font-weight:500;">Catatan
                        Tambahan</label>
                    <textarea name="catatan" rows="3"
                        style="width:100%; padding:11px 14px; border:1px solid #ddd; border-radius:8px; resize:vertical; font-family:'DM Sans',sans-serif;"
                        placeholder="Permintaan khusus, dll...">{{ old('catatan') }}</textarea>
                </div>

                <button type="submit"
                    style="margin-top:24px; background:#25D366; color:#fff; border:none; padding:15px 0; border-radius:50px; font-size:1rem; cursor:pointer; font-family:'DM Sans',sans-serif; width:100%; font-weight:500;">
                    📱 Konfirmasi via WhatsApp
                </button>
            </form>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq">
        <p class="section-label">FAQ</p>
        <h2 class="section-title">Pertanyaan yang Sering Ditanyakan</h2>
        <div class="divider"></div>
        <p class="section-sub">Jawaban untuk pertanyaan umum seputar menginap di Cahaya Sembalun.</p>

        <div class="faq-wrap">
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-q">Apakah tersedia WiFi di Cahaya Sembalun? <span class="faq-arrow">▼</span></div>
                <div class="faq-a">
                    <p>Sembalun berada di area pegunungan dengan keterbatasan infrastruktur. Sinyal selular tersedia
                        (Telkomsel
                        cukup baik), namun belum tersedia WiFi di seluruh area. Kami sarankan menyiapkan data seluler
                        pribadi Anda.
                    </p>
                </div>
            </div>
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-q">Apakah ada uang muka (DP) untuk booking? <span class="faq-arrow">▼</span></div>
                <div class="faq-a">
                    <p>Untuk pemesanan di musim ramai (liburan sekolah, akhir tahun) kami meminta DP sebesar 50% untuk
                        mengkonfirmasi kamar. Di luar musim ramai, konfirmasi via WhatsApp sudah cukup. Detail akan
                        diinformasikan
                        saat Anda menghubungi kami.</p>
                </div>
            </div>
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-q">Apakah bisa bayar di tempat (cash)? <span class="faq-arrow">▼</span></div>
                <div class="faq-a">
                    <p>Ya, kami menerima pembayaran tunai (cash) saat check-in. Kami juga menerima transfer bank (BRI,
                        BCA,
                        Mandiri) dan QRIS. Harap konfirmasi metode pembayaran saat menghubungi kami via WhatsApp.</p>
                </div>
            </div>
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-q">Berapa jam perjalanan dari Kota Mataram? <span class="faq-arrow">▼</span></div>
                <div class="faq-a">
                    <p>Dari Kota Mataram sekitar 2–2,5 jam perjalanan menggunakan kendaraan pribadi. Dari Bandara
                        Internasional
                        Lombok (BIL/LOP) sekitar 2–2,5 jam. Kami dapat merekomendasikan jasa angkutan lokal jika
                        diperlukan, hubungi
                        kami via WhatsApp.</p>
                </div>
            </div>
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-q">Apakah ada sarapan? Tersedia makanan apa saja? <span class="faq-arrow">▼</span>
                </div>
                <div class="faq-a">
                    <p>Sarapan tersedia atas permintaan (tidak termasuk otomatis dalam harga kamar). Menu sarapan berupa
                        masakan
                        rumahan lokal seperti nasi goreng, mie goreng, telur, teh/kopi. Hubungi kami sebelumnya untuk
                        memesan. Di
                        sekitar penginapan juga terdapat warung makan warga.</p>
                </div>
            </div>
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-q">Apakah anak-anak dan keluarga diperbolehkan? <span class="faq-arrow">▼</span>
                </div>
                <div class="faq-a">
                    <p>Tentu saja! Kami sangat welcome untuk tamu keluarga dengan anak-anak. Family Room tersedia untuk
                        keluarga,
                        dan area camping juga aman dan menyenangkan untuk anak-anak. Lingkungan alam Sembalun sangat
                        cocok untuk
                        liburan keluarga.</p>
                </div>
            </div>
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-q">Apakah Cahaya Sembalun buka sepanjang tahun? <span class="faq-arrow">▼</span>
                </div>
                <div class="faq-a">
                    <p>Ya, kami buka sepanjang tahun. Namun perlu diketahui bahwa jalur pendakian Rinjani biasanya
                        ditutup pada
                        bulan Januari sampai dengan Maret karena musim hujan. Meski begitu, penginapan kami tetap buka
                        dan
                        pemandangan Sembalun di
                        musim hujan pun sangat indah dengan suasana berkabut.</p>
                </div>
            </div>
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-q">Bagaimana kebijakan pembatalan reservasi? <span class="faq-arrow">▼</span></div>
                <div class="faq-a">
                    <p>Pembatalan lebih dari 3 hari sebelum check-in: DP dapat dikembalikan 100%. Pembatalan 1–3 hari
                        sebelum
                        check-in: DP dikembalikan 50%. Pembatalan kurang dari 24 jam: DP tidak dapat dikembalikan. Untuk
                        kondisi
                        darurat, kami siap membantu mencari solusi terbaik.</p>
                </div>
            </div>
        </div>

        <div class="faq-cta">
            <p>Masih ada pertanyaan lain? Kami siap membantu! 😊</p>
            <a href="https://wa.me/6283871323721?text=Halo%20Cahaya%20Sembalun%2C%20saya%20ingin%20bertanya%20tentang%20penginapan"
                target="_blank" class="btn-faq-wa">
                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                    <path
                        d="M12 0C5.373 0 0 5.373 0 12c0 2.096.535 4.072 1.476 5.794L0 24l6.389-1.448A11.946 11.946 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.818 9.818 0 01-5.013-1.378l-.36-.213-3.733.846.88-3.627-.234-.373A9.818 9.818 0 1112 21.818z" />
                </svg>
                Tanya via WhatsApp
            </a>
        </div>
    </section>

    <!-- CTA -->
    <section id="cta">
        <div class="cta-inner">
            <h2 class="cta-title">Siap Bermalam di<br>Kaki Rinjani? 🏔️</h2>
            <p class="cta-sub">Jangan tunda lagi! Hubungi kami sekarang untuk cek ketersediaan kamar dan dapatkan
                pengalaman
                menginap terbaik di Sembalun.</p>
            <a href="https://wa.me/6283871323721?text=Halo%20Cahaya%20Sembalun%2C%20saya%20mau%20tanya%20ketersediaan%20kamar%20dan%20harga%20?"
                target="_blank" class="btn-wa-besar">
                <span class="wa-icon">
                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                        <path
                            d="M12 0C5.373 0 0 5.373 0 12c0 2.096.535 4.072 1.476 5.794L0 24l6.389-1.448A11.946 11.946 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.818 9.818 0 01-5.013-1.378l-.36-.213-3.733.846.88-3.627-.234-.373A9.818 9.818 0 1112 21.818z" />
                    </svg>
                </span>
                Chat di WhatsApp Sekarang
            </a>
            <p class="cta-note">Balas dalam hitungan menit · Tidak ada biaya admin</p>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="footer-grid">
            <div>
                <div class="footer-brand">Cahaya <span>Sembalun</span></div>
                <p class="footer-desc">Penginapan nyaman di Sembalun Lendang Luwar, Lombok Timur. Nikmati keindahan
                    alam Rinjani
                    bersama kami. Pemandangan gunung, udara sejuk, dan keramahan lokal menanti Anda.</p>
                <div class="footer-socials">
                    <a href="https://wa.me/6283871323721" target="_blank" class="footer-social-btn"
                        title="WhatsApp">
                        <svg width="16" height="16" fill="#ffffff" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                            <path
                                d="M12 0C5.373 0 0 5.373 0 12c0 2.096.535 4.072 1.476 5.794L0 24l6.389-1.448A11.946 11.946 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.818 9.818 0 01-5.013-1.378l-.36-.213-3.733.846.88-3.627-.234-.373A9.818 9.818 0 1112 21.818z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/cahaya_sembalun/" target="_blank" class="footer-social-btn"
                        title="Instagram">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="#ffffff">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="https://maps.app.goo.gl/1eK6UWvC5Xx1KBZE6" target="_blank" class="footer-social-btn"
                        title="Google Maps">📍</a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Menu</h4>
                <ul>
                    <li><a href="#tentang">Tentang Kami</a></li>
                    <li><a href="#galeri">Galeri Foto</a></li>
                    <li><a href="#fasilitas">Fasilitas</a></li>
                    <li><a href="#kamar">Kamar & Harga</a></li>
                    <li><a href="#pesan">Cara Pemesanan</a></li>
                    <li><a href="#testimoni">Ulasan Tamu</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#lokasi">Lokasi</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Kontak</h4>
                <ul>
                    <li><a href="https://wa.me/6283871323721" target="_blank">📱 WhatsApp: 0838-7132-3721</a></li>
                    <li><a href="https://www.instagram.com/cahaya_sembalun/" target="_blank">📸 @cahaya_sembalun</a>
                    </li>
                    <li><a href="https://maps.app.goo.gl/1eK6UWvC5Xx1KBZE6" target="_blank">📍 Lokasi di Google
                            Maps</a></li>
                </ul>
                <div
                    style="margin-top:20px; padding:14px; background:rgba(255,255,255,.05); border-radius:10px; border:1px solid rgba(255,255,255,.08);">
                    <div
                        style="font-size:.78rem; color:rgba(255,255,255,.4); margin-bottom:6px; letter-spacing:1px; text-transform:uppercase;">
                        Check-in / Check-out</div>
                    <div style="font-size:.85rem; color:rgba(255,255,255,.7);">Masuk: 13.00 WITA</div>
                    <div style="font-size:.85rem; color:rgba(255,255,255,.7);">Keluar: 12.00 WITA</div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 Cahaya Sembalun · Sembalun Lendang Luwar, Lombok Timur, NTB · Semua hak dilindungi</p>
        </div>
    </footer>

    <!-- WA Floating Button -->
    <div class="wa-float-wrap">
        <div class="wa-bubble">
            <strong>Pesan Sekarang!</strong>
            <em>100% Balas cepat</em>
        </div>
        <a href="https://wa.me/6283871323721?text=Halo%20Cahaya%20Sembalun%2C%20saya%20mau%20tanya%20tentang%20penginapan%20dan%20ketersediaan%20kamar"
            target="_blank" class="wa-float" title="Chat WhatsApp">
            <svg width="28" height="28" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                <path
                    d="M12 0C5.373 0 0 5.373 0 12c0 2.096.535 4.072 1.476 5.794L0 24l6.389-1.448A11.946 11.946 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.818 9.818 0 01-5.013-1.378l-.36-.213-3.733.846.88-3.627-.234-.373A9.818 9.818 0 1112 21.818z" />
            </svg>
        </a>
    </div>

    <script>
        // ── Hamburger Menu ──
        function toggleMenu() {
            document.getElementById('navLinks').classList.toggle('open');
        }
        document.querySelectorAll('.nav-links a').forEach(a => {
            a.addEventListener('click', () => document.getElementById('navLinks').classList.remove('open'));
        });

        // ── Scroll Reveal ──
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                    revealObserver.unobserve(e.target);
                }
            });
        }, {
            threshold: 0.1
        });
        document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

        // ── Lightbox Galeri ──
        const galleryImages = [{
                src: 'gambar/galeri 1.jpeg'
            },
            {
                src: 'gambar/galeri 2.jpeg'
            },
            {
                src: 'gambar/galeri3.jpeg'
            },
            {
                src: 'gambar/galeri4.jpeg'
            },
            {
                src: 'gambar/galeri5.jpeg'
            },
            {
                src: 'gambar/galeri6.jpeg'
            },
            {
                src: 'gambar/galeri7.jpeg'
            },
            {
                src: 'gambar/galeri8.jpeg'
            },
            {
                src: 'gambar/galeri9.jpeg'
            },
            {
                src: 'gambar/galeri10.jpeg'
            },
            {
                src: 'gambar/galeri11.jpeg'
            },
            {
                src: 'gambar/galeri12.jpeg'
            },
            {
                src: 'gambar/galeri13.jpeg'
            },
            {
                src: 'gambar/galeri14.jpeg'
            },
            {
                src: 'gambar/galeri15.jpeg'
            },
            {
                src: 'gambar/galeri16.jpeg'
            },
            {
                src: 'gambar/galeri17.jpeg'
            },
            {
                src: 'gambar/galeri18.jpeg'
            },
            {
                src: 'gambar/Camping Area.jpeg'
            },
            {
                src: 'gambar/Kamar Kecil.jpeg'
            },
            {
                src: 'gambar/Kamar Keluarga.webp'
            },
            {
                src: 'gambar/Kamar Segitiga.jpeg'
            },
            {
                src: 'gambar/pembukaan.jpeg'
            },
            {
                src: 'gambar/tentangkami.jpeg'
            },
        ];

        const grid = document.getElementById('galeriGrid');
        galleryImages.forEach((img, i) => {
            grid.innerHTML += `
    <div class="galeri-item reveal reveal-delay-${i % 4}" onclick="openLightbox(${i})">
      <img src="${img.src}" alt="Sabar Sebentar" loading="lazy" />
    </div>`;
        });

        document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

        let currentLightbox = 0;

        function openLightbox(index) {
            currentLightbox = index;
            updateLightbox();
            document.getElementById('lightbox').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            document.getElementById('lightbox').classList.remove('active');
            document.body.style.overflow = '';
        }

        function closeLightboxOutside(e) {
            if (e.target === document.getElementById('lightbox')) closeLightbox();
        }

        function navLightbox(dir) {
            currentLightbox = (currentLightbox + dir + galleryImages.length) % galleryImages.length;
            updateLightbox();
        }

        function updateLightbox() {
            const img = galleryImages[currentLightbox];
            document.getElementById('lightboxImg').src = img.src;
            document.getElementById('lightboxCaption').textContent = '(' + (currentLightbox + 1) + '/' + galleryImages
                .length + ')';
        }

        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft') navLightbox(-1);
            if (e.key === 'ArrowRight') navLightbox(1);
        });

        // ── FAQ Toggle ──
        function toggleFaq(item) {
            const isOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
            if (!isOpen) item.classList.add('open');
        }

        // ── Copy Phone Number ──
        function copyNumber() {
            navigator.clipboard.writeText('+6283871323721').then(() => {
                const btn = document.getElementById('copyBtn');
                btn.textContent = '✓ Tersalin!';
                setTimeout(() => {
                    btn.textContent = '📋 Salin';
                }, 2000);
            });
        }

        // ── Rating Bar Animation ──
        const barObserver = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.querySelectorAll('.rating-bar-fill').forEach(bar => {
                        bar.style.animation = 'barFill 1.2s ease forwards';
                    });
                    barObserver.unobserve(e.target);
                }
            });
        }, {
            threshold: 0.3
        });

        const ratingSummary = document.querySelector('.rating-summary');
        if (ratingSummary) barObserver.observe(ratingSummary);
    </script>
</body>

</html>
