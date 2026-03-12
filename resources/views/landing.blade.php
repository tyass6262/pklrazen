<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AUDY Dental</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

html{
scroll-behavior:smooth;
}

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
background:#f5f7fc;
color:#333;
}

.container{
width:90%;
max-width:1150px;
margin:auto;
}

/* NAVBAR */

nav{
background:white;
padding:18px 0;
box-shadow:0 4px 20px rgba(0,0,0,0.05);
position:sticky;
top:0;
z-index:100;
}

.nav-wrapper{
display:flex;
justify-content:space-between;
align-items:center;
}

nav h1{
color:#3c44b1;
font-size:22px;
}

nav ul{
list-style:none;
display:flex;
gap:35px;
}

nav ul li a{
text-decoration:none;
color:#555;
font-weight:500;
}

nav ul li a:hover{
color:#3c44b1;
}

.btn-outline{
padding:8px 18px;
border:2px solid #3c44b1;
border-radius:25px;
color:#3c44b1;
text-decoration:none;
}

.btn-primary{
padding:8px 18px;
background:#3c44b1;
border-radius:25px;
color:white;
text-decoration:none;
margin-left:10px;
}

/* HERO */

.hero{
background:linear-gradient(135deg,#dcd8ff,#ece9ff);
padding:80px 0;
}

.hero-content{
display:flex;
align-items:center;
gap:60px;
}

.hero img{
width:420px;
height:280px;
object-fit:cover;
border-radius:20px;
box-shadow:0 20px 40px rgba(0,0,0,0.15);
}

.hero-text h2{
font-size:32px;
line-height:1.4;
margin-bottom:20px;
color:#2f2aa8;
}

.hero-text p{
font-size:15px;
line-height:1.7;
color:#555;
}

/* TITLE */

.section-title{
text-align:center;
margin:80px 0 50px;
font-size:28px;
font-weight:700;
color:#2f2aa8;
}

/* CARD */

.cards{
display:flex;
justify-content:center;
gap:35px;
margin-bottom:100px;
}

.card{
background:white;
padding:25px;
border-radius:20px;
width:280px;
text-align:center;
box-shadow:0 15px 35px rgba(0,0,0,0.08);
transition:0.3s;
}

.card:hover{
transform:translateY(-10px);
}

.card img{
width:100%;
height:170px;
object-fit:cover;
border-radius:15px;
margin-bottom:18px;
}

.card h3{
color:#3c44b1;
}

/* WHY */

.why{
background:#dcd8ff;
padding:80px 0;
}

.why-grid{
display:grid;
grid-template-columns:repeat(2,1fr);
gap:60px 80px;
}

.why-item{
display:flex;
gap:20px;
}

.number{
background:#f4b04f;
color:#2f2aa8;
width:75px;
height:75px;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
font-size:26px;
font-weight:700;
}

.why-item p{
font-size:16px;
line-height:1.7;
color:#555;
}

/* TESTIMONIAL */

.testimonial{
background:#2f2aa8;
padding:100px 0 120px;
color:white;
}

.testimonial-cards{
display:flex;
justify-content:center;
gap:35px;
}

.testimonial-card{
background:#ffffff; 
color:#555;
width:270px;
padding:90px 25px 30px;
border-radius:20px;
text-align:center;
position:relative;
box-shadow:0 15px 35px rgba(0,0,0,0.15);
border:2px solid #e5e6ff; 
}

.testimonial-profile img{
width:95px;
height:95px;
border-radius:50%;
object-fit:cover;
position:absolute;
top:-47px;
left:50%;
transform:translateX(-50%);
border:6px solid #dcd8ff;
}

.testimonial-card h3{
margin-top:10px;
color:#2f2aa8;
}

.testimonial-card small{
display:block;
color:#888;
margin-bottom:10px;
font-size:13px;
}

.rating{
color:#f4b04f;
margin-bottom:10px;
}

/* FOOTER */

footer{
background:#1f1a75;
color:white;
text-align:center;
padding:20px;
}

/* RESPONSIVE */

@media(max-width:900px){

.hero-content{
flex-direction:column;
text-align:center;
}

.cards,
.testimonial-cards{
flex-direction:column;
align-items:center;
}

.why-grid{
grid-template-columns:1fr;
}

}

</style>
</head>

<body>

<header>
<nav>
<div class="container nav-wrapper">

<h1>AUDY Dental</h1>

<ul>
<li><a href="#beranda">Beranda</a></li>
<li><a href="#produk">Produk</a></li>
<li><a href="#tentang">Tentang</a></li>
<li><a href="#review">Review</a></li>
</ul>

<div>
<a href="#" class="btn-outline">Login</a>
<a href="#" class="btn-primary">Sign Up</a>
</div>

</div>
</nav>
</header>

<main>

<section class="hero" id="beranda">
<div class="container hero-content">

<img src="{{ asset('images/hero.jpg') }}" alt="Dokter gigi AUDY Dental">

<div class="hero-text">
<h2>Senyum Rapi, Sehat, dan Percaya Diri dengan Behel Gigi di AUDY Dental</h2>

<p>
Yuk, wujudkan impianmu untuk berani senyum tanpa ragu dengan melakukan
perawatan behel gigi di AUDY Dental bersama dokter spesialis ortodonti berpengalaman.
</p>

</div>

</div>
</section>

<section class="container" id="produk">

<h2 class="section-title">Pilihan Jenis Behel di AUDY Dental</h2>

<div class="cards">

<article class="card">
<img src="{{ asset('images/metal.png') }}" alt="Behel Metal">
<h3>Behel Metal</h3>
</article>

<article class="card">
<img src="{{ asset('images/ceramic.png') }}" alt="Behel Ceramic">
<h3>Behel Ceramic</h3>
</article>

<article class="card">
<img src="{{ asset('images/self.png') }}" alt="Behel Self Ligating">
<h3>Behel Self-Ligating</h3>
</article>

</div>

</section>

<section class="why" id="tentang">

<div class="container">

<h2 class="section-title">Kenapa memilih Behel Gigi dari AUDY Dental?</h2>

<div class="why-grid">

<div class="why-item">
<div class="number">1</div>
<p>Ditangani dokter gigi spesialis ortodonti profesional.</p>
</div>

<div class="why-item">
<div class="number">2</div>
<p>Harga terjangkau dengan sistem cicilan ringan.</p>
</div>

<div class="why-item">
<div class="number">3</div>
<p>Hasil maksimal untuk senyum lebih rapi dan percaya diri.</p>
</div>

<div class="why-item">
<div class="number">4</div>
<p>Pembayaran fleksibel dan konsultasi mudah.</p>
</div>

</div>

</div>

</section>

<section class="testimonial" id="review">

<div class="container">

<h2 class="section-title" style="color:white;">Apa Kata Mereka?</h2>

<div class="testimonial-cards">

<article class="testimonial-card">
<figure class="testimonial-profile">
<img src="{{ asset('images/user1.png') }}" alt="Hana pasien behel">
</figure>

<h3>Hana</h3>
<small>Pasien Behel</small>
<div class="rating">★★★★★</div>

<p>Pelayanannya sangat ramah dan hasilnya memuaskan!</p>
</article>

<article class="testimonial-card">
<figure class="testimonial-profile">
<img src="{{ asset('images/user2.png') }}" alt="Rizky pasien behel">
</figure>

<h3>Rizky</h3>
<small>Pasien Behel</small>
<div class="rating">★★★★★</div>

<p>Dokternya profesional dan tempatnya nyaman.</p>
</article>

<article class="testimonial-card">
<figure class="testimonial-profile">
<img src="{{ asset('images/user3.png') }}" alt="Tiara pasien behel">
</figure>

<h3>Tiara</h3>
<small>Pasien Behel</small>
<div class="rating">★★★★★</div>

<p>Sekarang jadi lebih percaya diri tersenyum!</p>
</article>

</div>

</div>

</section>

</main>

<footer>
<p>© 2026 AUDY Dental. All rights reserved.</p>
</footer>

</body>
</html>