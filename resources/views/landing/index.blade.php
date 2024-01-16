@extends('layouts.main')

@section('container')
    <header class="header w-screen" id="header">
        <div class="w-cnt">
            <div>
                <div class="company-logo">
                    <img src="/logos/logo_smk_muhammadiyah_128x.png" alt="Tutwuri">
                </div>
            </div>
            <div>
                <ul class="nav-header">
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#tentangkami">Tentang Kami</a></li>
                    <li><a href="#infoguru">Info</a></li>
                    <li><a href="#jurusan">Jurusan</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </header>
    <section id="herosection" class="w-screen">
        <div class="banner-promote">
            <div class="bg-banner">
                @foreach ($background_data as $background)
                <div class="slide-banner" data-source="{{ $background["source"] }}" data-alt="{{ $background["alt"] }}">
                    <img class="front-img" src="{{ $background["source"] }}" alt="{{ $background["alt"] }}" />
                </div>
                @endforeach
            </div>
        </div>
        <div class="w-cnt z-1">
            <h1>SMK <span>Muhammadiyah</span> 1 Padang</h1>
            <p>Menghasilkan tamatan Profesional yang Islami. <br><br/>Membentuk Peserta Didik menjadi manusia yang Beriman dan Bertaqwa Kepada Allah SWT.</p>
        </div>
    </section>
    <section id="blog" class="w-screen">
        <div class="w-cnt">
            <h2 class="pad-b-30">Postingan Terbaru</h2>
            <div class="dsp-flex justify-end mrgn-b-20">
                <a href="/blog" class="hyperlink">
                    Lihat Semua
                    <span class="material-icons">east</span>
                </a>
            </div>
            <div class="articles">
                <article>
                    <div class="art-img">
                        <img src="/img/blog/330622088_586232826389545_4344273384981641869_n_e71007ef6d.jpg" alt="">
                    </div>
                    <h3 class="art-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, maxime alias nulla.</h3>
                    <div class="foot">
                        <div>
                            <a href="#" aria-label="news" class="category">News</a>
                            <span class="date">1 Jam lalu</span>
                        </div>
                        <a href="#" aria-label="news" class="btn btn-fill default">Read More</a>
                    </div>
                </article>
                <article>
                    <div class="art-img">
                        <img src="/img/blog/Whats_App_Image_2023_09_11_at_14_40_33_fbbc66abec.jpeg" alt="">
                    </div>
                    <h3 class="art-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, maxime alias nulla.</h3>
                    <div class="foot">
                        <div>
                            <a href="#" aria-label="news" class="category">News</a>
                            <span class="date">1 Jam lalu</span>
                        </div>
                        <a href="#" aria-label="news" class="btn btn-fill default">Read More</a>
                    </div>
                </article>
                <article>
                    <div class="art-img">
                        <img src="/img/blog/361611579_248488227950881_8653271567483535351_n_6051106ef6.jpg" alt="">
                    </div>
                    <h3 class="art-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, maxime alias nulla.</h3>
                    <div class="foot">
                        <div>
                            <a href="#" aria-label="news" class="category">News</a>
                            <span class="date">1 Jam lalu</span>
                        </div>
                        <a href="#" aria-label="news" class="btn btn-fill default">Read More</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section id="tentangkami" class="w-screen">
        <div class="w-cnt">
            <div class="dual-contents">
                <div class="dl-img">
                    <img src="/img/logo_smk_muhammadiyah_baru.webp" alt="Logo SMK Muhammadiyah 1 Padang">
                </div>
                <div class="dl-descriptions">
                    <h3>Tentang Kami</h3>
                    <p>Menghasilkan tamatan Profesional yang Islami. Membentuk Peserta Didik menjadi manusia yang Beriman dan Bertaqwa Kepada Allah SWT.</p>
                    <p>Mengembangkan potensi peserta didik agar menjadi Warga Negara yang berakhlak mulia, sehat, berilmu, cakap, kreatif, mandiri, demokratis, dan bertanggung jawab</p>
                </div>
            </div>
            <div class="dual-contents reverse">
                <div class="dl-img">
                    <img src="/img/smk_bisa_siap_kerja_cerdas.webp" alt="Logo SMK bisa">
                </div>
                <div class="dl-descriptions">
                    <h3>Visi-Misi</h3>
                    <p>Mewujudkan sekolah sebagai pusat Pendidikan yang Islami, dan menghasilkan Sumber Daya Manusia yang mampu bersaing di bidangnya Secara global.</p>
                </div>
            </div>
            <div class="dual-contents">
                <div class="dl-img">
                    <img src="/img/ayo_masuk_smk.webp" alt="Logo Ayo Masuk SMK">
                </div>
                <div class="dl-descriptions">
                    <h3>Tujuan Khusus</h3>
                    <p>Menyiapkan peserta didik untuk mengisi lowongan pekerjaan yang ada di dunia usaha dan dunia industri sebagai tenaga kerja tingkat menengah sesuai dengan kompetensi dalam program keahlian yang dipilihnya.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="infoguru" class="w-screen">
        <div class="w-cnt">
            <h2>Info Guru</h2>
            <div class="slider-cards">
                <div class="slides">
                    @foreach ($guru as $gr)
                    <div class="card" data-id="{{ $gr["id"] }}" data-name="{{ $gr["name"] }}" data-position="{{ $gr["position"] }}" data-photo="{{ $gr["photo"] }}">
                        <div class="profile-card">
                            <div class="top"></div>
                            <div class="circle-photo">
                                <img src="/img/photo/{{ $gr["photo"] }}" alt="{{ $gr["name"] }}">
                            </div>
                            <p class="pfl-name">{{ $gr["name"] }}</p>
                            <span class="pfl-as">{{ $gr["position"] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="slider-dots">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
        </div>
    </section>
    <section id="kuota" class="w-screen">
        <div class="w-cnt">
            <h2>Kuota Sekolah</h2>
            <div class="quantity-cards">
                <div class="card">
                    <span class="material-icons">school</span>
                    <span class="count">375</span>
                    <p class="label">Peserta Didik</p>
                </div>
                <div class="card">
                    <span class="material-icons">person</span>
                    <span class="count">43</span>
                    <p class="label">Guru</p>
                </div>
                <div class="card">
                    <span class="material-icons">meeting_room</span>
                    <span class="count">18</span>
                    <p class="label">Ruang Kelas</p>
                </div>
                <div class="card">
                    <span class="material-icons">device_hub</span>
                    <span class="count">13</span>
                    <p class="label">Jurusan</p>
                </div>
                <div class="card">
                    <span class="material-icons">person</span>
                    <span class="count">15</span>
                    <p class="label">Pegawai</p>
                </div>
            </div>
        </div>
    </section>
    <section id="jurusan" class="w-screen">
        <div class="w-cnt">
            <div class="preview-contents">
                <div class="navigate">
                    <h2>Jurusan Unggul Kami</h2>
                    <ul class="cnt-nav">
                        <li class="point"></li>
                        @foreach ($jurusan as $jr)
                        <li class="cnt-list {{ ($loop->iteration === 1 ? "active" : "") }}" data-expertise="{{ $jr['id'] }}">
                            <button type="button" aria-label="Jurusan {{ $jr["expertise"] }}">
                                <span class="material-icons">{{ $jr["material_icons"] }}</span>
                                {{ $jr["expertise"] }}
                            </button>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="preview">
                    @foreach ($jurusan as $jr)
                    <div class="details {{ ($loop->iteration === 1 ? "active" : "") }}" data-description="{{ $jr['id'] }}">
                        <div class="svg-preview">
                            <img src="/img/undraw/{{ $jr["illustration"] }}" alt="idk">
                        </div>
                        <div class="description">
                            <p>{{ $jr['description'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <button class="btn btn-fill default icon go-to-up">
        <span class="material-icons">keyboard_double_arrow_up</span>
    </button>
    <footer class="footer w-screen" id="kontak">
        <div class="w-cnt">
            <div class="ft-body">
                <div>
                    <div class="company-logo">
                        <img src="/logos/logo_smk_muhammadiyah_128x.png" alt="Tutwuri">
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A incidunt ullam voluptatem et aspernatur doloribus veritatis repellat dolorem. Unde blanditiis itaque quod culpa consectetur sequi architecto adipisci quibusdam amet iusto</p>
                </div>
                <div>
                    <div class="dsp-flex gap-50">
                        <div class="features-group">
                            <h2 class="title">Berita</h2>
                            <ul>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                        <div class="features-group">
                            <h2 class="title">Layanan</h2>
                            <ul>
                                <li><a href="#">Penerimaan Siswa Baru</a></li>
                                <li><a href="#">Keluhan Pelanggan</a></li>
                            </ul>
                        </div>
                        <div class="features-group">
                            <h2 class="title">Kontak</h2>
                            <ul>
                                <li>&lpar;0751&rpar; 777663</li>
                                <li><a href="mailto:smkmhd1pdg.gmail.com">smkmhd1pdg.gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ft-footer">
                <span class="copyright">© 2020 SMK Muhammadiyah 1 Padang | Sekolah Indah Berseri. All Rights Reserved.</span>
                <div class="media-social">
                    
                </div>
            </div>
        </div>
    </footer>
@endsection

@section('scripts')
    <script src="/js/index.js"></script>
@endsection