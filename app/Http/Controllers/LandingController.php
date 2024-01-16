<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $guru = [];
        // for ($i=1; $i <= 10; $i++) { 
        //         array_push($guru, [
        //                 "id" => $i - 1,
        //                 "photo" => "3_copy_51b1d9cc8f.jpg",
        //                 "name" => "People " . $i,
        //                 "position" => "Developer"
        //             ]);
        //         }
        $backgrounds = [
            [
                "source" => '/img/backgrounds/slide1.webp',
                "alt" => 'Slide 1'
            ],
            [
                "source" => '/img/backgrounds/slide2.webp',
                "alt" => 'Slide 2'
            ],
            [
                "source" => '/img/backgrounds/slide3.webp',
                "alt" => 'Slide 3'
            ],
            [
                "source" => '/img/backgrounds/slide4.webp',
                "alt" => 'Slide 4'
            ],
        ];
        $guru = [
            [
                "id" => 1,
                "photo" => "2_SR_red_1_1_c7582a2e44.jpg",
                "name" => "Habibullah, SE",
                "position" => "Kepala Sekolah"
            ],
            [
                "id" => 2,
                "photo" => "019_e5f7cf4741.jpg",
                "name" => "Dian Rivia, S.Pd",
                "position" => "Waka Kesiswaan | Sarana | Prasarana"
            ],
            [
                "id" => 3,
                "photo" => "003_37b6565bec.jpg",
                "name" => "Wempi Saputra, S.Pd.,M.PD",
                "position" => "Waka Kurikulum | Humas"
            ],
            [
                "id" => 4,
                "photo" => "3_copy_51b1d9cc8f.jpg",
                "name" => "Agusnardi, Ama.Pd.",
                "position" => "KA.Tata Usaha"
            ],
        ];
        $jurusan = [
            [
                "id" => "1",
                "material_icons" => "precision_manufacturing",
                "expertise" => "Teknik Pemesinan",
                "description" => "Teknik Pemesinan, mengacu pada metode dan proses yang digunakan untuk membentuk, memotong, atau membentuk bahan menjadi bentuk atau bagian tertentu. Teknik-teknik ini digunakan dalam industri manufaktur untuk membuat berbagai komponen yang digunakan dalam produk di berbagai sektor.",
                "illustration" => "undraw_factory_re_kg9v.svg"
            ],
            [
                "id" => "2",
                "material_icons" => "moped",
                "expertise" => "Teknik Kendaraan Ringan Otomotif",
                "description" => "Teknik Kendaraan Ringan Otomotif, mengacu pada pengetahuan dan keahlian khusus dalam merancang, mengembangkan, menguji, dan memelihara kendaraan ringan, seperti mobil dan truk kecil. Keahlian ini mencakup pemahaman berbagai komponen, sistem, dan teknologi yang membentuk kendaraan ini, serta prinsip-prinsip teknik dan peraturan yang mengatur desain dan kinerjanya.",
                "illustration" => "undraw_automobile_repair_ywci.svg"
            ],
            [
                "id" => "3",
                "material_icons" => "two_wheeler",
                "expertise" => "Teknik Bisnis Sepeda Motor",
                "description" => "Teknik Bisnis Sepeda Motor, menggabungkan prinsip-prinsip teknik dengan pengetahuan bisnis yang secara khusus disesuaikan dengan industri sepeda motor. Program ini melibatkan penerapan keahlian teknik untuk mendesain, memproduksi, memasarkan, dan memelihara sepeda motor, serta memahami aspek-aspek bisnis industri sepeda motor.",
                "illustration" => "undraw_business_deal_re_up4u.svg"
            ],
            [
                "id" => "4",
                "material_icons" => "bolt",
                "expertise" => "Teknik Instalasi Tenaga Listrik",
                "description" => "Teknik Instalasi Tenaga Listrik, melibatkan desain, instalasi, pemeliharaan, dan manajemen sistem kelistrikan yang digunakan dalam berbagai pengaturan, termasuk lingkungan perumahan, komersial, industri, dan institusional. Ini mencakup berbagai kegiatan yang terkait dengan distribusi daya listrik, memastikan pengiriman listrik yang aman dan efisien ke peralatan listrik, penerangan, dan perangkat listrik lainnya.",
                "illustration" => "undraw_electricity_k2ft.svg"
            ],
            [
                "id" => "5",
                "material_icons" => "connected_tv",
                "expertise" => "Teknik Komputer Dan Jaringan",
                "description" => "Teknik Komputer dan Jaringan, mencakup desain, pengembangan, implementasi, dan pemeliharaan sistem komputer dan jaringan. Ini melibatkan berbagai keterampilan dan pengetahuan yang terkait dengan perangkat keras, perangkat lunak, protokol jaringan, dan langkah-langkah keamanan untuk memastikan berfungsinya sistem komputer dan jaringan yang saling terhubung secara efisien.",
                "illustration" => "undraw_server_status_re_n8ln.svg"
            ],
            [
                "id" => "6",
                "material_icons" => "code",
                "expertise" => "Rekayasa Perangkat Lunak",
                "description" => "Rekayasa Perangkat Lunak, melibatkan penerapan prinsip-prinsip rekayasa pada desain, pengembangan, pengujian, penerapan, dan pemeliharaan sistem perangkat lunak. Ini adalah pendekatan yang disiplin dan sistematis untuk menciptakan perangkat lunak yang memenuhi persyaratan tertentu, berfungsi dengan andal, dan dapat dipelihara selama siklus hidupnya.",
                "illustration" => "undraw_programming_re_kg9v.svg"
            ],
            [
                "id" => "7",
                "material_icons" => "dynamic_form",
                "expertise" => "Elektronika Industri",
                "description" => "Elektronika Industri, mengacu pada penerapan prinsip dan teknologi elektronik dalam pengaturan industri, terutama berfokus pada kontrol, otomatisasi, dan optimalisasi proses dan peralatan industri. Hal ini melibatkan penggunaan perangkat, sirkuit, dan sistem elektronik untuk memantau, mengontrol, dan meningkatkan efisiensi dan keamanan berbagai operasi industri.",
                "illustration" => "undraw_robotics_kep0.svg"
            ],
            [
                "id" => "8",
                "material_icons" => "iron",
                "expertise" => "Teknik Pengelasan",
                "description" => "Teknik Pengelasan, mengacu pada metode dan praktik khusus yang digunakan dalam proses penyambungan material, biasanya logam, melalui penerapan panas atau tekanan. Pengelasan adalah keterampilan yang sangat penting di berbagai industri, termasuk manufaktur, konstruksi, otomotif, kedirgantaraan, dan banyak lagi.",
                "illustration" => "undraw_factory_re_kg9v.svg"
            ],
            [
                "id" => "9",
                "material_icons" => "restaurant",
                "expertise" => "Tata Boga",
                "description" => "Tata Boga, adalah layanan penyediaan makanan dan minuman, biasanya pada acara, pertemuan, atau acara, baik di tempat maupun di lokasi yang jauh. Katering bertanggung jawab untuk menyiapkan, menyajikan, dan menyajikan makanan untuk memenuhi kebutuhan dan preferensi khusus klien mereka.",
                "illustration" => "undraw_cooking_p7m1.svg"
            ],
            [
                "id" => "10",
                "material_icons" => "tour",
                "expertise" => "Usaha Perjalanan Wisata",
                "description" => "Usaha Perjalanan Wisata, mengacu pada industri dan operasi yang terlibat dalam penyediaan layanan dan produk yang terkait dengan perjalanan kepada individu atau kelompok. Ini mencakup berbagai segmen, termasuk transportasi, akomodasi, operasi tur, agen perjalanan, dan layanan lain yang terkait dengan kebutuhan liburan, bisnis, atau perjalanan khusus.",
                "illustration" => "undraw_towing_re_wesa.svg"
            ],
            [
                "id" => "11",
                "material_icons" => "store",
                "expertise" => "Bisnis Daring Dan Pemasaran",
                "description" => "Bisnis Daring Dan Pemasaran, mengacu pada praktik dan strategi yang digunakan untuk melakukan kegiatan komersial, mempromosikan produk atau layanan, dan menjangkau pelanggan melalui platform dan saluran digital. Hal ini melibatkan pemanfaatan internet, situs web, media sosial, dan berbagai alat digital untuk membangun dan mengembangkan bisnis.",
                "illustration" => "undraw_finance_re_gnv2.svg"
            ],
            [
                "id" => "12",
                "material_icons" => "account_balance",
                "expertise" => "Akuntansi Dan Keuangan Lembaga",
                "description" => "Akuntansi Dan Keuangan Lembaga, mengacu pada pengetahuan dan praktik khusus yang terkait dengan pengelolaan operasi keuangan di dalam institusi, seperti perusahaan, lembaga pemerintah, organisasi nirlaba, lembaga pendidikan, dan entitas besar lainnya. Hal ini mencakup pengawasan transaksi keuangan, penganggaran, pelaporan, dan perencanaan strategis untuk memastikan manajemen keuangan yang efektif dan kepatuhan terhadap peraturan.",
                "illustration" => "undraw_calculator_re_alsc.svg"
            ],
        ];

        return view('landing.index', [
            "jurusan" => $jurusan,
            "guru" => $guru,
            "background_data" => $backgrounds
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
