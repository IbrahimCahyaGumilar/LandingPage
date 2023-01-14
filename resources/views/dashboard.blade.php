<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="{{ asset('css/home.css') }}">


<x-app-layout>
    <img class="background" alt="">
    <section style="background-image: url(assets/bg-nav.svg);" class="background">
        <div class="container">
            <div class="header-nav">
                <h1 class="text-3xl lg:text-5xl xl:text-5xl w-11/12 lg:w-3/5 font-bold">Buku - Buku yang dapat membuat
                    anda Termotivasi</h1>
                <p style="margin: 24px 0 24px 0;">September 6, 2022</p>
                <h4 class="lg:w-2/4 mb-[32px]">Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen
                    laskapet
                    målagisk. Av euror.
                    Karriärcoach pyjuskap andropatologi. </h4>
            </div>

            <div style="padding: 0 0 330px 0;">
                <button class="button-primary">
                    <a href="#">Read more</a>
                </button>
            </div>
        </div>

    </section>

    <!-- CONTENT 1 START-->
    <section class="container mx-auto">
        <div class="grid grid-cols-1 grid-rows-1 pt-[110px]">
            <div class="flex flex-col lg:flex-row justify-center gap-6 bg-white rounded-lg h-30">
                <div class="pb-2">
                    <div class="flex justify-center">
                        <img src={{ asset('assets/logo-scholl.svg') }} alt="">
                    </div>

                    <h1 class="text-black text-center font-bold lg:text-[24px] mt-[24px]">Identitas Sekolah</h1>
                    <p class="mt-[24px] text-[#969696] lg:text-[14px] text-center w-[350px]">High School berdiri sejak
                        tahun 1980 dengan nama High School 1. Sekolah yang akan membimbing
                        muridnya hingga benar</p>
                    <div class="flex justify-center">
                        <button id="btn-identitas">
                            <a style="color: #5E8B7E;" class="mt-[16px] font-bold lg:text-[14px]">Read more</a>
                        </button>
                    </div>


                </div>

                <div class="pb-2">
                    <div class="flex justify-center">
                        <img src={{ asset('assets/logo-visi.svg') }} alt="">
                    </div>
                    <h1 class="text-black text-center font-bold lg:text-[24px] mt-[24px]">Visi Misi</h1>
                    <p class="mt-[24px] text-[#969696] lg:text-[14px] text-center lg:w-[350px] ">High School berdiri
                        sejak
                        tahun 1980 dengan nama High School 1. Sekolah yang akan membimbing
                        muridnya hingga benar</p>
                    <div class="flex justify-center">
                        <button id="btn-visi">
                            <a style="color: #5E8B7E;" class="mt-[16px] font-bold lg:text-[14px]">Read more</a>
                        </button>
                    </div>

                </div>

                <div class="pb-2">
                    <div class="flex justify-center">
                        <img src={{ asset('assets/logo-struktur.svg') }} alt="">
                    </div>
                    <h1 class="text-center font-bold lg:text-[24px] mt-[24px] text-black">Struktur Sekolah</h1>
                    <p class="mt-[24px] text-[#969696] lg:text-[14px] text-center lg:w-[350px]">High School berdiri
                        sejak
                        tahun 1980 dengan nama High School 1. Sekolah yang akan membimbing
                        muridnya hingga benar</p>
                    <div class="flex justify-center">
                        <button id="btn-struktur">
                            <a style="color: #5E8B7E;" class="mt-[16px] font-bold lg:text-[14px]">Read more</a>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- CONTENT 2 END -->

    <!-- CONTENT 3 START -->
    <section class="container mx-auto mt-[134px]">
        <div class="flex flex-col lg:flex-row">
            <div class="float-left ">
                <img class="logo-ucapan" src={{ asset('assets/logo-ucapan.svg') }} alt="">
            </div>
            <div class="pl-[20px] lg:pl-[40px]">
                <p class="pt-[30px] lg:pt-[60px] text-[#2F5D62] text-[10px] lg:text-[14px]" for="">Pembukaan
                    Kepala
                    Sekolah</p>
                <h1 class="font-bold text-[20px] lg:text-[32px] lg:w-11/12 mt-[16px] text-black">Ucapan Kepala Sekolah
                    HIGH SCHOOL
                </h1>
                <p class="text-[#5A5A5A] lg:text-[14px] mt-[24px] lg:w-2/3">“ Lörem ipsum mikrolös dongen
                    infodemi. Terapument anteliga deforen laskapet målagisk. Av euror.
                    Karriärcoach pyjuskap andropatologi. “</p>
                <div class="mobile-kepsek  flex mt-[24px] pb-20 lg:pb-0">
                    <img class="lg:mt-0 mt-5" src={{ asset('assets/logo-people1.svg') }} alt="">
                    <div class="flex flex-col ml-[8px] mt-2 lg:mt-0">
                        <h1 class="font-bold text-[12px] lg:-text[14px]">Bpk. Robert stent</h1>
                        <p class="text-[#5A5A5A] text-[12px] lg:text-[14px]">Kepala Sekolah</p>
                    </div>

                </div>

            </div>



        </div>
    </section>
    <!-- CONTENT 3 END -->

    <!-- CONTENT 4 START -->
    <section class="container mx-auto text-black">
        <div class="ml-[20px]">
            <h1 class="pt-[110px] font-bold text-[20px] lg:text-[32px]">Jurusan (Program Study)</h1>
            <p class="text-[#5A5A5A] text-[14px] mt-[24px] lg:w-2/6">Terdapat Beberapa Jurusan atau Program Study di SMA
                PGRI CICURUG yang dapat dipilih sesuai dengan minat Siswa
            </p>
            <div class="btn-academic">
                <button
                    class="pc-btn float-right bg-[#5E8B7E] w-[164px] px-6 py-3 text-white rounded-[30px] hover:bg-secondary font-bold text-sm">
                    <a href="#">Academic Data</a>
                </button>
            </div>

        </div>


        <div class="btn-academic2 grid grid-cols-1 grid-rows-1 mt-[83px] ">
            <div class="flex flex-col lg:flex-row justify-center gap-[24px] bg-white rounded-lg h-30">
                <div class="border-2 border-inherit">
                    <div class="flex justify-center mt-[24px]">
                        <img src={{ asset('assets/logo-ips.svg') }} alt="">
                    </div>
                    <h1 class="text-center text-bold text-[24px]">IPS</h1>
                    <p class="text-center lg:w-[480px] text-[#969696] text-[14px] my-[24px] mx-[54px]">Jurusan IPS
                        mempelajari
                        tentang hubungan antar manusia dan hubungan manusia dengan lingkungannya,
                        serta berbagai aspek sosial</p>
                </div>
                <div class="border-2 border-inherit">
                    <div class="flex justify-center mt-[24px]">
                        <img src={{ asset('assets/logo-ipa.svg') }} alt="">
                    </div>
                    <h1 class="text-center text-bold text-[24px]">IPA</h1>
                    <p class="text-center lg:w-[480px] text-[#969696] text-[14px] my-[24px] mx-[54px]">Selain belajar
                        Ilmu Alam,
                        anak SMA belajar matematika juga. Oleh sebab itu selain disebut dengan
                        jurusan IPA (Ilmu Pengetahuan Alam) jurusan ini punya dua nama lain lagi, yaitu: MIPA , MIA</p>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTENT 4 END -->

    <!-- CONTENT 5 START -->
    <section class="container mx-auto mt-[110px] ">
        <div class="text-black pb-20">
            <h1 class="font-bold text-[20px] lg:text-[32px] ml-[20px] lg:ml-0">Prestasi Siswa - Siswi</h1>
            <div class="btn-presen flex justify-between">
                <div>
                    <p class="text-[#5A5A5A] lg:text-[14px] ml-[20px] lg:ml-0">Prestasi dari Siswa - Siswi SMA PGRI
                        CICURUG</p>
                </div>
                <div class="btn-presen2">
                    <button
                        class="pc-btn2 bg-[#5E8B7E] w-[178px] px-6 py-3 text-white rounded-[30px] hover:bg-secondary font-bold text-sm">
                        <a href="#">See all prestation</a>
                    </button>
                </div>
            </div>

            <div class="btn-presen3 grid grid-cols-1 grid-rows-1 mt-[40px]">
                <div class="flex flex-col lg:flex-row justify-center gap-[23px] rounded-lg">

                    <div>
                        <div>
                            <img class="img-pres" src={{ asset('assets/logo-bola.svg') }} alt="">
                        </div>
                    </div>

                    <div class="relative">
                        <div class="">
                            <img class="img-pres" src={{ asset('assets/logo-bulu.svg') }} alt="">
                        </div>
                        <h1 class="absolute left-5 bottom-6 text-[18px] font-bold text-white">Juara 1 Lomba Bulu Tangkis
                        </h1>
                    </div>

                    <div class="relative">
                        <div>
                            <img class="img-pres" src={{ asset('assets/logo-tenis.svg') }} alt="">
                        </div>
                        <h1 class="absolute left-5 bottom-6 text-[18px] font-bold text-white">Juara 3 Lomba Tenis Meja
                        </h1>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- CONTENT 5 END -->

    <!-- FOOTER -->

    <footer class="bg-[#0E2123] p-16 max-sm:p-10 ">
        <div class="container mx-auto">
            <div class="  grid grid-cols-1 grid-rows-1 ">
                <div
                    class="bg-[#0E2123] flex flex-col lg:flex-row justify-center gap-6 text-black rounded-lg h-30">

                    <div>
                        <div class="flex gap-3 align-center items-center mb-10">
                            <img src={{ asset('assets/logo.svg') }} alt="">
                            <h1 class="font-bold text-xl text-white">High School</h1>
                        </div>
                        <p class="font-normal text-sm max-sm:text-xm w-72 text-white">“ Lörem ipsum mikrolös dongen
                            infodemi. Terapument anteliga deforen laskapet målagisk. Av euror. Karriärcoach pyjuskap
                            andropatologi. “
                        </p>
                        <div class="flex gap-8 mt-12">
                            <img src={{ asset('assets/logo-facebook.svg') }} alt="">
                            <img src={{ asset('assets/logo-twiter.svg') }} alt="">
                            <img src={{ asset('assets/logo-in.svg') }} alt="">
                            <img src={{ asset('assets/logo-instagram.svg') }} alt="">
                        </div>

                        <div class="flex justify-center hidden lg:block">
                            <h1 class="text-white mt-20 mb-6 font-normal text-sm">© High School. All right Reserved.
                                Website By mangcoding</h1>
                        </div>

                    </div>

                    <div class="flex flex-row gap-20">
                        <div class="flex flex-row gap-20">
                            <div>
                                <h1 class="font-bold text-sm max-sm:text-lg mb-6 text-white">Jelajah</h1>
                                <ul class="flex flex-col  max-sm:gap-3 max-sm:w-5 text-white list-none max-sm:text-xs">
                                    <li class="w-32"><a class="" href="">Identitas Sekolah</a></li>
                                    <li><a href="">Berita</a></li>
                                    <li><a href="">Gallery</a></li>
                                    <li><a href="">Fasilitas</a></li>
                                    <li class="w-32"><a href="">Kontak Kami</a></li>
                                </ul>

                            </div>

                            <div>
                                <h1 class="font-bold text-sm max-sm:text-lg mb-6 text-white">Data Akademik</h1>
                                <ul class="flex flex-col  max-sm:gap-3 max-sm:w-5 text-white list-none max-sm:text-xs">
                                    <li class="w-32"><a href="">Tenaga Pendidik</a></li>
                                    <li class="w-32"><a href="">Tenaga Kependidikan</a></li>
                                    <li class=""><a href="">Daftar Siswa</a></li>
                                    <li class="w-32"><a href="">Absensi Siswa</a></li>
                                    <li class="w-32"><a href="">Organisasi Sekolah</a></li>
                                    <li class="w-32"><a href="">Jadwal Pelajaran</a></li>
                                    <li class="w-32"><a href="">Jadwal Ujian</a></li>
                                </ul>

                            </div>
                        </div>

                    </div>




                    <div>
                        <h1 class="font-bold text-sm max-sm:text-lg mb-6 text-white">Lokasi</h1>
                        <div class="flex gap-4 items-center mb-4">
                            <div>
                                <img class="" src={{ asset('assets/logo-lokasi.svg') }} alt="">

                            </div>
                            <div class="flex flex-col ">
                                <h1 class="text-white">Alamat</h1>
                                <p class="text-white w-3/4">3891 Ranchview Dr. Richardson, California 62639</p>
                            </div>

                        </div>

                        <div class="flex gap-4 items-center">
                            <div>
                                <img class="" src={{ asset('assets/logo-email.svg') }} alt="">

                            </div>
                            <div class="flex flex-col ">
                                <h1 class="text-white">Kontak Kami</h1>
                                <p class="text-white">Telp: (0266) 123456</p>
                                <p class="text-white">Web : www.higntschool.sch.id</p>
                                <p class="text-white">email : info@highschool.sch.id</p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>


        </div>

        <div class="flex justify-center block lg:hidden">
            <h1 class="text-white mt-20 mb-6 text-[10px]">© High School. All right Reserved. Website By mangcoding</h1>
        </div>
    </footer>
    <!-- FOOTER END -->


    {{-- <x-slot name="header" class="bg-cover bg-center bg-fixed bg-no-repeat w-full" style="background: center background-image: url(assets/bg-nav.svg)">
        
    </x-slot> --}}
</x-app-layout>
