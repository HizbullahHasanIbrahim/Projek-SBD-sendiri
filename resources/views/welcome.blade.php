<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PeopleFlow — Human Resource Management</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <!-- NAVBAR -->

    <header class="navbar">
        <div class="container nav-content">

            <a href="#home" class="logo">
                <div class="logo-icon">P</div>
                People<span>Flow</span>
            </a>

            <nav class="nav-links">
                <a href="#home">Beranda</a>
                <a href="#fitur">Fitur</a>
                <a href="#tentang">Tentang Kami</a>
                <a href="#proses">Cara Kerja</a>
            </nav>

            <div class="nav-actions">
                <a href="#kontak" class="login-link">Masuk</a>
                <a href="#kontak" class="btn btn-primary">
                    Mulai Sekarang →
                </a>
            </div>

        </div>
    </header>


    <!-- HERO -->

    <main>

        <section class="hero" id="home">
            <div class="container hero-grid">

                <div class="hero-content">

                    <div class="eyebrow">
                        <span class="eyebrow-dot"></span>
                        HR MANAGEMENT SYSTEM
                    </div>

                    <h1>
                        Kelola SDM Lebih Mudah,
                        <span>Kerja Lebih Produktif.</span>
                    </h1>

                    <p class="hero-description">
                        Satu platform untuk mengelola karyawan, absensi,
                        penggajian, cuti, dan berbagai kebutuhan HR
                        dalam satu sistem yang terintegrasi.
                    </p>

                    <div class="hero-buttons">
                        <a href="#fitur" class="btn btn-primary">
                            Jelajahi Fitur →
                        </a>

                        <a href="#tentang" class="btn btn-outline">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>

                    <p class="hero-note">
                        <span>✓</span>
                        Lebih terorganisir. Lebih efisien. Lebih produktif.
                    </p>

                </div>


                <!-- DASHBOARD PREVIEW -->

                <div class="dashboard-wrap">

                    <div class="dashboard">

                        <div class="dashboard-top">
                            <div>
                                <div class="dashboard-title">
                                    Ringkasan HR
                                </div>

                                <div class="dashboard-subtitle">
                                    Pantau aktivitas perusahaan
                                </div>
                            </div>

                            <div class="dashboard-date">
                                Oktober 2026
                            </div>
                        </div>


                        <div class="stats-grid">

                            <div class="stat-card">
                                <div class="stat-label">
                                    Total Karyawan
                                </div>

                                <div class="stat-value">
                                    248
                                </div>

                                <div class="stat-change">
                                    ↑ 12 karyawan baru
                                </div>
                            </div>

                            <div class="stat-card">
                                <div class="stat-label">
                                    Kehadiran
                                </div>

                                <div class="stat-value">
                                    92%
                                </div>

                                <div class="stat-change">
                                    ↑ 4,8% bulan ini
                                </div>
                            </div>

                            <div class="stat-card">
                                <div class="stat-label">
                                    Pengajuan Cuti
                                </div>

                                <div class="stat-value">
                                    08
                                </div>

                                <div class="stat-change"
                                     style="color:#d97732">
                                    Menunggu persetujuan
                                </div>
                            </div>

                        </div>


                        <div class="dashboard-bottom">

                            <div class="panel">

                                <div class="panel-heading">
                                    Statistik Karyawan
                                    <a href="#fitur">Detail ↗</a>
                                </div>

                                <div class="chart">

                                    <div class="chart-column">
                                        <div class="chart-bar"
                                             style="height:45%"></div>
                                        <span class="chart-label">Sen</span>
                                    </div>

                                    <div class="chart-column">
                                        <div class="chart-bar"
                                             style="height:68%"></div>
                                        <span class="chart-label">Sel</span>
                                    </div>

                                    <div class="chart-column">
                                        <div class="chart-bar active"
                                             style="height:88%"></div>
                                        <span class="chart-label">Rab</span>
                                    </div>

                                    <div class="chart-column">
                                        <div class="chart-bar"
                                             style="height:60%"></div>
                                        <span class="chart-label">Kam</span>
                                    </div>

                                    <div class="chart-column">
                                        <div class="chart-bar"
                                             style="height:75%"></div>
                                        <span class="chart-label">Jum</span>
                                    </div>

                                </div>

                            </div>


                            <div class="panel">

                                <div class="panel-heading">
                                    Kehadiran Hari Ini
                                </div>

                                <div class="attendance-number">
                                    <strong>92%</strong>
                                    <span>Optimal</span>
                                </div>

                                <div class="progress-track">
                                    <div class="progress-fill"></div>
                                </div>

                                <div class="attendance-caption">
                                    228 dari 248 karyawan
                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="floating-card">

                        <div class="floating-icon">✓</div>

                        <div>
                            <strong>Payroll Terorganisir</strong>
                            <small>Ringkasan penggajian karyawan</small>
                        </div>

                    </div>

                </div>

            </div>
        </section>


        <!-- TRUST -->

        <section class="trust">
            <div class="container trust-content">

                <p class="trust-label">
                    Dirancang untuk mendukung pengelolaan SDM
                    yang lebih efektif.
                </p>

                <div class="trust-items">
                    <span>PEOPLE</span>
                    <span>WORKSPACE</span>
                    <span>GROWTH.</span>
                    <span>TEAMWORK</span>
                </div>

            </div>
        </section>


        <!-- FITUR -->

        <section class="section" id="fitur">

            <div class="container">

                <div class="section-heading">

                    <span class="section-tag">
                        Solusi HR Terintegrasi
                    </span>

                    <h2>
                        Semua Kebutuhan HR
                        dalam Satu Platform
                    </h2>

                    <p>
                        Sederhanakan pekerjaan administratif dan
                        fokus pada pengembangan sumber daya manusia
                        melalui sistem yang terorganisir.
                    </p>

                </div>


                <div class="feature-grid">

                    <article class="feature-card">

                        <div class="feature-icon">♙</div>

                        <h3>Manajemen Karyawan</h3>

                        <p>
                            Kelola data pribadi, jabatan, departemen,
                            status pekerjaan, dan informasi karyawan
                            secara terpusat.
                        </p>

                        <a href="#kontak" class="feature-link">
                            Pelajari fitur →
                        </a>

                    </article>


                    <article class="feature-card">

                        <div class="feature-icon">◷</div>

                        <h3>Absensi & Kehadiran</h3>

                        <p>
                            Pantau kehadiran, keterlambatan, jam kerja,
                            dan rekap absensi untuk mendukung
                            kedisiplinan karyawan.
                        </p>

                        <a href="#kontak" class="feature-link">
                            Pelajari fitur →
                        </a>

                    </article>


                    <article class="feature-card">

                        <div class="feature-icon">▤</div>

                        <h3>Payroll & Penggajian</h3>

                        <p>
                            Organisasikan informasi gaji, tunjangan,
                            potongan, dan rekap penggajian
                            dalam satu sistem.
                        </p>

                        <a href="#kontak" class="feature-link">
                            Pelajari fitur →
                        </a>

                    </article>


                    <article class="feature-card">

                        <div class="feature-icon">▣</div>

                        <h3>Cuti & Perizinan</h3>

                        <p>
                            Kelola pengajuan cuti, izin, dan sakit
                            dengan informasi status pengajuan
                            yang lebih mudah dipantau.
                        </p>

                        <a href="#kontak" class="feature-link">
                            Pelajari fitur →
                        </a>

                    </article>


                    <article class="feature-card">

                        <div class="feature-icon">↗</div>

                        <h3>Rekrutmen</h3>

                        <p>
                            Organisasikan informasi kandidat,
                            lowongan pekerjaan, dan tahapan seleksi
                            calon karyawan.
                        </p>

                        <a href="#kontak" class="feature-link">
                            Pelajari fitur →
                        </a>

                    </article>


                    <article class="feature-card">

                        <div class="feature-icon">◎</div>

                        <h3>Kinerja Karyawan</h3>

                        <p>
                            Bantu evaluasi performa karyawan melalui
                            pemantauan target, hasil kerja,
                            dan perkembangan kompetensi.
                        </p>

                        <a href="#kontak" class="feature-link">
                            Pelajari fitur →
                        </a>

                    </article>

                </div>

            </div>

        </section>


        <!-- MANAJEMEN KARYAWAN -->

        <section class="section section-soft" id="tentang">

            <div class="container management-grid">

                <div class="management-content">

                    <span class="section-tag">
                        Employee Management
                    </span>

                    <h2>
                        Data Karyawan Lebih Rapi,
                        Keputusan Lebih Tepat.
                    </h2>

                    <p>
                        Tidak perlu lagi mencari data dari berbagai
                        dokumen yang terpisah. PeopleFlow menghadirkan
                        gambaran informasi karyawan dalam satu
                        tampilan yang terstruktur.
                    </p>


                    <div class="check-list">

                        <div class="check-item">

                            <div class="check-icon">✓</div>

                            <div>
                                <strong>Database Terpusat</strong>

                                <p>
                                    Informasi karyawan tersusun
                                    berdasarkan identitas, jabatan,
                                    dan departemen.
                                </p>
                            </div>

                        </div>


                        <div class="check-item">

                            <div class="check-icon">✓</div>

                            <div>
                                <strong>Monitoring Lebih Praktis</strong>

                                <p>
                                    Gambaran jumlah karyawan dan status
                                    kepegawaian lebih mudah dipahami.
                                </p>
                            </div>

                        </div>


                        <div class="check-item">

                            <div class="check-icon">✓</div>

                            <div>
                                <strong>Mendukung Produktivitas HR</strong>

                                <p>
                                    Membantu tim HR mengurangi pekerjaan
                                    administratif yang berulang.
                                </p>
                            </div>

                        </div>

                    </div>

                </div>


                <!-- EMPLOYEE LIST PREVIEW -->

                <div class="employee-preview">

                    <div class="employee-header">

                        <h3>Direktori Karyawan</h3>

                        <span>LIHAT SEMUA →</span>

                    </div>


                    <div class="employee-row">

                        <div class="avatar">AR</div>

                        <div class="employee-info">
                            <strong>Aditya Ramadhan</strong>
                            <small>Human Resources</small>
                        </div>

                        <span class="status status-active">
                            Aktif
                        </span>

                    </div>


                    <div class="employee-row">

                        <div class="avatar">SP</div>

                        <div class="employee-info">
                            <strong>Salsabila Putri</strong>
                            <small>Finance & Accounting</small>
                        </div>

                        <span class="status status-active">
                            Aktif
                        </span>

                    </div>


                    <div class="employee-row">

                        <div class="avatar">MF</div>

                        <div class="employee-info">
                            <strong>Muhammad Fajar</strong>
                            <small>Information Technology</small>
                        </div>

                        <span class="status status-active">
                            Aktif
                        </span>

                    </div>


                    <div class="employee-row">

                        <div class="avatar">NA</div>

                        <div class="employee-info">
                            <strong>Nadia Amalia</strong>
                            <small>Marketing</small>
                        </div>

                        <span class="status status-leave">
                            Cuti
                        </span>

                    </div>


                    <div class="employee-row">

                        <div class="avatar">RA</div>

                        <div class="employee-info">
                            <strong>Rizky Ananda</strong>
                            <small>Operations</small>
                        </div>

                        <span class="status status-active">
                            Aktif
                        </span>

                    </div>

                </div>

            </div>

        </section>


        <!-- CARA KERJA -->

        <section class="section" id="proses">

            <div class="container">

                <div class="section-heading">

                    <span class="section-tag">
                        Cara Kerja
                    </span>

                    <h2>
                        Pengelolaan HR yang Lebih Terstruktur
                    </h2>

                    <p>
                        Sederhanakan alur kerja administrasi SDM
                        melalui proses yang mudah dipahami.
                    </p>

                </div>


                <div class="process-grid">

                    <div class="process-card">

                        <div class="process-number">01</div>

                        <h3>Kelola Data</h3>

                        <p>
                            Susun informasi karyawan dan struktur
                            organisasi perusahaan.
                        </p>

                    </div>


                    <div class="process-card">

                        <div class="process-number">02</div>

                        <h3>Pantau Aktivitas</h3>

                        <p>
                            Tinjau informasi kehadiran, cuti,
                            dan status kepegawaian.
                        </p>

                    </div>


                    <div class="process-card">

                        <div class="process-number">03</div>

                        <h3>Evaluasi Kinerja</h3>

                        <p>
                            Pantau perkembangan karyawan dan
                            evaluasi kebutuhan perusahaan.
                        </p>

                    </div>


                    <div class="process-card">

                        <div class="process-number">04</div>

                        <h3>Buat Keputusan</h3>

                        <p>
                            Gunakan informasi yang terorganisir
                            untuk mendukung keputusan HR.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- CTA -->

        <section class="cta-section" id="kontak">

            <div class="container">

                <div class="cta-box">

                    <h2>
                        Saatnya Mengelola SDM
                        dengan Cara yang Lebih Modern.
                    </h2>

                    <p>
                        Bangun proses pengelolaan karyawan yang
                        lebih terorganisir, efisien, dan siap
                        mendukung pertumbuhan perusahaan.
                    </p>

                    <a href="#home" class="btn">
                        Kembali ke Beranda ↑
                    </a>

                </div>

            </div>

        </section>

    </main>


    <!-- FOOTER -->

    <footer class="footer">

        <div class="container">

            <div class="footer-top">

                <div class="footer-brand">

                    <a href="#home" class="logo">
                        <div class="logo-icon">P</div>
                        People<span>Flow</span>
                    </a>

                    <p>
                        Human Resource Management System untuk
                        membantu perusahaan mengelola sumber daya
                        manusia secara lebih terstruktur.
                    </p>

                </div>


                <div class="footer-links">

                    <div class="footer-column">

                        <h4>Platform</h4>

                        <a href="#fitur">Manajemen Karyawan</a>
                        <a href="#fitur">Absensi</a>
                        <a href="#fitur">Payroll</a>
                        <a href="#fitur">Rekrutmen</a>

                    </div>


                    <div class="footer-column">

                        <h4>Perusahaan</h4>

                        <a href="#tentang">Tentang Kami</a>
                        <a href="#proses">Cara Kerja</a>
                        <a href="#kontak">Kontak</a>

                    </div>


                    <div class="footer-column">

                        <h4>Bantuan</h4>

                        <a href="#kontak">Pusat Bantuan</a>
                        <a href="#kontak">Informasi</a>
                        <a href="#kontak">Kebijakan Privasi</a>

                    </div>

                </div>

            </div>


            <div class="footer-bottom">

                <p>
                    © 2026 PeopleFlow HR. All rights reserved.
                </p>

                <p>
                    Human Resource Management System
                </p>

            </div>

        </div>

    </footer>

</body>
</html>