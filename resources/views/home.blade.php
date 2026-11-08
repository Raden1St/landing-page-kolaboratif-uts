
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>KolabKampus - Kolaborasi Mahasiswa</title>

    <!-- Menghubungkan CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Navbar -->
    <header>
        <nav>
            <h2>KolabKampus</h2>

            <a href="#beranda">Beranda</a>
            <a href="#tentang">Tentang</a>
            <a href="#proyek">Proyek</a>
            <a href="#kontak">Kontak</a>
        </nav>
    </header>

    <main>

        <!-- Beranda -->
        <section id="beranda">
            <h1>Kolaborasi Tanpa Batas</h1>

            <p>
                Temukan teman, berbagi ide, dan bangun
                proyek kreatif bersama mahasiswa lainnya.
            </p>

            <a href="#proyek">Jelajahi Proyek</a>
        </section>

        <!-- Tentang -->
        <section id="tentang">
            <h2>Tentang KolabKampus</h2>

            <p>
                KolabKampus merupakan platform kolaborasi
                mahasiswa untuk mengembangkan ide,
                membangun tim, dan menghasilkan karya
                inovatif secara bersama-sama.
            </p>

            <!-- Tombol Interaktif -->
            <button
                type="button"
                id="tombol-detail"
                aria-expanded="false"
                aria-controls="detail-kolab">
                Pelajari Lebih Lanjut
            </button>

            <!-- Penjelasan Tambahan -->
            <p id="detail-kolab" hidden>
                Melalui KolabKampus, mahasiswa dapat
                berkolaborasi dalam pengembangan website,
                desain UI/UX, dan aplikasi mobile.
                Platform ini bertujuan meningkatkan
                kreativitas, komunikasi, dan kerja sama tim.
            </p>
        </section>

        <!-- Proyek -->
        <section id="proyek">
            <h2>Proyek Kolaboratif</h2>

            <article>
                <h3>Pengembangan Website</h3>
                <p>
                    Kolaborasi membangun website
                    kreatif dan inovatif.
                </p>
            </article>

            <article>
                <h3>Desain UI/UX</h3>
                <p>
                    Bekerja sama membuat desain
                    aplikasi yang menarik.
                </p>
            </article>

            <article>
                <h3>Aplikasi Mobile</h3>
                <p>
                    Mengembangkan aplikasi Android
                    bersama tim mahasiswa.
                </p>
            </article>
        </section>

        <!-- Kontak -->
        <section id="kontak">
            <h2>Mari Berkolaborasi!</h2>

            <p>
                Bergabunglah dan mulai ciptakan
                proyek bersama mahasiswa lainnya.
            </p>

            <a href="mailto:kolabkampus@example.com">
                Hubungi Kami
            </a>
        </section>

    </main>

    <!-- Footer -->
    <footer>
        <p>
            &copy; 2026 KolabKampus.
            Dibuat untuk UTS Pemrograman Berbasis Web.
        </p>
    </footer>

    <!-- Menghubungkan JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
