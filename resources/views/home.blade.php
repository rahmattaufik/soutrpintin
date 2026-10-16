@extends('layouts.app')

@section('title', 'Soutprint.In — Website yang Bikin Calon Pelanggan Langsung Chat Anda')
@section('meta_description', 'Kami bangun company profile, toko online, dan aplikasi web untuk UMKM dan perusahaan di Indonesia. Pembayaran QRIS dan transfer sudah terpasang, tampil cepat di HP, dan kode sumbernya jadi milik Anda.')

@section('content')
    {{-- 1. Hero Section & Strip Statistik (Dark #020C20 & #06142E) --}}
    @include('components.hero')

    {{-- 2. Portofolio Section (Light #F7FAFC) --}}
    @include('components.portfolio')

    {{-- 3. Paket Harga Section (Light #EAF2F8) --}}
    @include('components.services')

    {{-- 4. Alur Kerja Section (Light #F7FAFC) --}}
    @include('components.workflow')

    {{-- 5. Testimoni Klien Nyata (Light #EAF2F8) --}}
    @include('components.testimonials')

    {{-- 6. FAQ Section (Light #F7FAFC) --}}
    @include('components.faq')
@endsection
