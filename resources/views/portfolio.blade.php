<!DOCTYPE html>
<html lang="es" data-theme="dark">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Israel Alba — Full-Stack Developer & UI/UX Designer</title>
<link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
<meta name="description" content="Desarrollador full-stack con 18 años de experiencia en Laravel, PHP, Flutter y Swift. Construyo software a medida para negocios que necesitan resultados, no solo código.">

<!-- Open Graph / redes sociales -->
<meta property="og:title" content="Israel Alba — Full-Stack Developer">
<meta property="og:description" content="Software a medida: web, móvil y automatización. 18 años de experiencia, 50+ proyectos entregados.">
<meta property="og:type" content="website">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">

<style>
:root{
  --bg:#0B0E14;
  --surface:#12161F;
  --surface-2:#181D29;
  --border:rgba(255,255,255,0.09);
  --text:#ECEAE6;
  --text-dim:#98A0B3;
  --primary:#E8A33D;
  --primary-ink:#1A1200;
  --accent:#6EA8FE;
  --success:#5FCF8A;
  --radius-s:6px;
  --radius-m:12px;
  --shadow-soft:0 20px 50px -25px rgba(0,0,0,0.6);
  --font-display:"Space Grotesk", sans-serif;
  --font-body:"Inter", sans-serif;
  --font-mono:"JetBrains Mono", monospace;
}
html[data-theme="light"]{
  --bg:#F7F6F2;
  --surface:#FFFFFF;
  --surface-2:#F0EEE7;
  --border:rgba(20,20,30,0.09);
  --text:#181A1F;
  --text-dim:#5B6272;
  --primary:#B8721C;
  --primary-ink:#FFFFFF;
  --accent:#2E5FC7;
  --shadow-soft:0 20px 50px -25px rgba(0,0,0,0.18);
}

*{box-sizing:border-box;}
html{scroll-behavior:smooth;}
@media (prefers-reduced-motion:reduce){
  html{scroll-behavior:auto;}
  *{animation-duration:0.001ms !important; animation-iteration-count:1 !important; transition-duration:0.001ms !important;}
}
body{
  margin:0;
  background:var(--bg);
  color:var(--text);
  font-family:var(--font-body);
  line-height:1.6;
  -webkit-font-smoothing:antialiased;
}
img{max-width:100%; display:block;}
a{color:inherit;}

.skip-link{
  position:absolute; left:-999px; top:0; background:var(--primary); color:var(--primary-ink);
  padding:0.75rem 1.25rem; z-index:200; border-radius:0 0 var(--radius-s) 0; font-weight:600;
}
.skip-link:focus{left:0;}

:focus-visible{outline:2px solid var(--accent); outline-offset:3px;}

/* Scroll-reveal (respects reduced motion via the global media query above) */
.reveal{opacity:0; transform:translateY(26px); transition:opacity .7s cubic-bezier(.2,.8,.2,1), transform .7s cubic-bezier(.2,.8,.2,1);}
.reveal.in-view{opacity:1; transform:translateY(0);}
.reveal-group.in-view > *{opacity:1; transform:translateY(0);}
.reveal-group > *{opacity:0; transform:translateY(20px); transition:opacity .55s ease, transform .55s ease;}
.reveal-group.in-view > *:nth-child(1){transition-delay:.05s;}
.reveal-group.in-view > *:nth-child(2){transition-delay:.14s;}
.reveal-group.in-view > *:nth-child(3){transition-delay:.23s;}
.reveal-group.in-view > *:nth-child(4){transition-delay:.32s;}

@keyframes heroFadeUp{from{opacity:0; transform:translateY(16px);} to{opacity:1; transform:translateY(0);}}
.hero-fade{animation:heroFadeUp .8s cubic-bezier(.2,.8,.2,1) both;}

@keyframes spinOnce{from{transform:rotate(0deg);} to{transform:rotate(180deg);}}
.icon-spin i{animation:spinOnce .35s ease;}

.wrap{max-width:1160px; margin:0 auto; padding:0 6vw;}
@media(min-width:900px){.wrap{padding:0 4vw;}}

section{padding:6.5rem 0;}
@media(max-width:640px){section{padding:4rem 0;}}

.section-head{max-width:640px; margin-bottom:3rem;}
.eyebrow{
  font-family:var(--font-mono); font-size:0.8rem; color:var(--primary);
  display:flex; align-items:center; gap:0.5rem; margin-bottom:0.9rem;
}
.eyebrow::before{content:""; width:16px; height:1px; background:var(--primary); display:inline-block;}
h1,h2,h3{font-family:var(--font-display); line-height:1.15; margin:0; font-weight:600;}
.section-title{font-size:clamp(1.7rem, 3vw, 2.3rem);}
p{color:var(--text-dim); margin:0.75rem 0 0;}

/* NAV */
header.nav{
  position:sticky; top:0; z-index:100;
  background:color-mix(in srgb, var(--bg) 82%, transparent);
  backdrop-filter:blur(10px);
  border-bottom:1px solid var(--border);
}
.nav-inner{
  max-width:1160px; margin:0 auto; padding:1.1rem 6vw;
  display:flex; align-items:center; justify-content:space-between;
}
.logo{font-family:var(--font-display); font-weight:700; font-size:1.1rem;}
.logo span{color:var(--primary);}
.nav-links{display:flex; align-items:center; gap:2rem;}
.nav-links a{text-decoration:none; font-size:0.95rem; color:var(--text-dim); transition:color .15s; position:relative;}
.nav-links a::after{content:""; position:absolute; left:0; bottom:-4px; width:0; height:1px; background:var(--primary); transition:width .2s ease;}
.nav-links a:hover{color:var(--text);}
.nav-links a:hover::after{width:100%;}
.nav-actions{display:flex; align-items:center; gap:0.9rem;}
.icon-btn{
  background:none; border:1px solid var(--border); color:var(--text);
  width:38px; height:38px; border-radius:50%; cursor:pointer;
  display:flex; align-items:center; justify-content:center; font-size:0.95rem;
}
.hamburger{display:none; background:none; border:none; color:var(--text); font-size:1.3rem; cursor:pointer;}
.mobile-panel{display:none;}
@media(max-width:820px){
  .nav-links{
    position:fixed; inset:64px 0 0 0; background:var(--bg); flex-direction:column;
    align-items:flex-start; padding:2rem 6vw; gap:1.6rem; transform:translateX(100%);
    transition:transform .25s ease; z-index:99;
  }
  .nav-links.open{transform:translateX(0);}
  .nav-links a{font-size:1.15rem;}
  .hamburger{display:block;}
}

.cta-btn{
  font-family:var(--font-body); font-weight:600; font-size:0.95rem;
  padding:0.85rem 1.5rem; border-radius:var(--radius-s);
  background:var(--primary); color:var(--primary-ink); border:1px solid var(--primary);
  text-decoration:none; display:inline-flex; align-items:center; gap:0.5rem; cursor:pointer;
  transition:transform .15s ease, box-shadow .15s ease;
}
.cta-btn:hover{transform:translateY(-2px); box-shadow:var(--shadow-soft);}
.cta-btn.ghost{background:transparent; color:var(--text); border-color:var(--border);}

/* HERO */
.hero{padding:5rem 0 6rem;}
.hero-grid{display:grid; grid-template-columns:1.1fr 0.9fr; gap:4rem; align-items:center;}
@media(max-width:900px){.hero-grid{grid-template-columns:1fr; gap:3rem;}}

.status-pill{
  display:inline-flex; align-items:center; gap:0.5rem; font-family:var(--font-mono);
  font-size:0.8rem; color:var(--success); border:1px solid var(--border); background:var(--surface);
  padding:0.4rem 0.8rem; border-radius:999px; margin-bottom:1.5rem;
}
.status-pill .dot{width:7px; height:7px; border-radius:50%; background:var(--success); box-shadow:0 0 0 3px color-mix(in srgb, var(--success) 25%, transparent);}

.hero h1{font-size:clamp(2.1rem, 4.5vw, 3.4rem); letter-spacing:-0.01em;}
.hero p.lead{font-size:1.1rem; max-width:46ch; margin-top:1.1rem;}
.hero-ctas{display:flex; gap:1rem; margin-top:2.2rem; flex-wrap:wrap;}
.hero-trust{
  margin-top:2.5rem; display:flex; gap:1.8rem; flex-wrap:wrap;
  font-family:var(--font-mono); font-size:0.82rem; color:var(--text-dim);
}
.hero-trust b{color:var(--text); font-family:var(--font-body); font-weight:700;}

/* Code editor visual */
.editor-card{
  background:var(--surface); border:1px solid var(--border); border-radius:var(--radius-m);
  overflow:hidden; box-shadow:var(--shadow-soft);
}
.editor-bar{display:flex; gap:6px; padding:0.8rem 1rem; border-bottom:1px solid var(--border);}
.editor-bar span{width:10px; height:10px; border-radius:50%; background:var(--border);}
.editor-body{padding:1.4rem; font-family:var(--font-mono); font-size:0.85rem; min-height:220px;}
.editor-body .ln{color:var(--text-dim); display:inline-block; width:1.6rem; user-select:none;}
.editor-body .kw{color:var(--accent);}
.editor-body .str{color:var(--success);}
.editor-body .fn{color:var(--primary);}
.editor-body .cursor{display:inline-block; width:7px; height:1.1em; background:var(--primary); vertical-align:text-bottom; animation:blink 1s steps(1) infinite;}
@keyframes blink{50%{opacity:0;}}

/* ABOUT */
.about-grid{display:grid; grid-template-columns:1fr auto; gap:3rem; align-items:end;}
@media(max-width:760px){.about-grid{grid-template-columns:1fr;}}
.stats-row{display:flex; gap:2.5rem; flex-wrap:wrap;}
.stat b{font-family:var(--font-display); font-size:2.1rem; color:var(--primary); display:block;}
.stat span{font-size:0.8rem; color:var(--text-dim); font-family:var(--font-mono);}

/* PHILOSOPHY */
.philosophy-grid{display:grid; grid-template-columns:0.9fr 1.1fr; gap:3rem; align-items:center;}
@media(max-width:820px){.philosophy-grid{grid-template-columns:1fr; gap:2rem;}}
.philosophy-quote{
  font-family:var(--font-display); font-weight:600; font-size:clamp(1.3rem, 2.4vw, 1.7rem);
  line-height:1.35; color:var(--text); margin:0; position:relative; padding-left:1.4rem;
  border-left:2px solid var(--primary);
}
.philosophy-body p{color:var(--text-dim); font-size:1rem;}
.philosophy-body p:first-child{margin-top:0;}
.philosophy-body p b{color:var(--text); font-weight:600;}

/* SKILLS */
.skill-group{margin-bottom:2.2rem;}
.skill-group h4{font-family:var(--font-mono); font-size:0.85rem; color:var(--text-dim); font-weight:500; margin:0 0 1rem;}
.skill-row{display:flex; flex-wrap:wrap; gap:0.7rem;}
.skill-chip{
  display:flex; align-items:center; gap:0.5rem; padding:0.55rem 0.9rem;
  border:1px solid var(--border); border-radius:var(--radius-s); background:var(--surface);
  font-size:0.88rem; transition:transform .18s ease, border-color .18s ease, box-shadow .18s ease;
}
.skill-chip:hover{transform:translateY(-3px); border-color:var(--primary); box-shadow:0 10px 20px -14px rgba(0,0,0,.5);}
.skill-chip i{font-size:1.05rem;}

/* PROCESS */
.process-list{display:grid; grid-template-columns:repeat(4,1fr); gap:1.5rem;}
@media(max-width:900px){.process-list{grid-template-columns:1fr 1fr;}}
@media(max-width:560px){.process-list{grid-template-columns:1fr;}}
.process-item{border-top:2px solid var(--border); padding-top:1.1rem; transition:border-color .25s ease, transform .25s ease;}
.process-item:hover{border-top-color:var(--primary); transform:translateY(-3px);}
.process-item .num{font-family:var(--font-mono); color:var(--primary); font-size:0.85rem;}
.process-item h3{font-size:1.05rem; margin-top:0.5rem;}

/* PROJECTS */
.project-row{
  display:grid; grid-template-columns:1fr 1fr; gap:3rem; align-items:center;
  padding:3.5rem 0; border-top:1px solid var(--border);
}
.project-row:nth-child(even) .project-media{order:2;}
@media(max-width:820px){
  .project-row{grid-template-columns:1fr; gap:1.6rem;}
  .project-row:nth-child(even) .project-media{order:0;}
}
.project-media{border-radius:var(--radius-m); overflow:hidden; border:1px solid var(--border); background:var(--surface-2);}
.project-media img{aspect-ratio:16/10; object-fit:contain; padding:1.1rem; transition:transform .5s cubic-bezier(.2,.8,.2,1);}
.project-row:hover .project-media img{transform:scale(1.035);}
.project-info h3{font-size:1.5rem;}
.project-outcome{
  margin-top:1rem; padding:0.9rem 1rem; background:var(--surface); border-left:2px solid var(--primary);
  border-radius:0 var(--radius-s) var(--radius-s) 0; font-size:0.92rem;
}
.project-outcome b{color:var(--text);}
.project-tags{display:flex; flex-wrap:wrap; gap:0.5rem; margin-top:1.2rem;}
.tag{font-family:var(--font-mono); font-size:0.75rem; padding:0.3rem 0.6rem; border:1px solid var(--border); border-radius:4px; color:var(--text-dim);}

.store-links{display:flex; gap:1.5rem; padding:0 1.1rem 1.4rem; justify-content:center; align-items:center;}
.store-link{color:var(--text-dim); transition:all .3s cubic-bezier(0.175, 0.885, 0.32, 1.275); font-size:1.4rem; text-decoration:none; display:flex; align-items:center;}
.store-link.play-store img{
  height: 1.5rem; /* Un poco más grande para compensar el cambio a imagen */
  width: auto;
  aspect-ratio: auto; /* Reset del aspect-ratio global */
  padding: 0; /* Reset del padding global de .project-media img */
  display: inline-block; /* Reset del display:block global */
  filter: drop-shadow(0 0 5px rgba(61, 220, 132, 0.4));
  transition: all .3s ease;
}
.store-link.play-store:hover img{
  transform: scale(1.25);
  filter: drop-shadow(0 0 10px rgba(66, 133, 244, 0.6));
}
.store-link.disabled{opacity:0.2; filter:grayscale(1); cursor:not-allowed; pointer-events:none;}

/* TESTIMONIALS */
.testi-grid{display:grid; grid-template-columns:repeat(3,1fr); gap:1.5rem;}
@media(max-width:900px){.testi-grid{grid-template-columns:1fr;}}
.testi-card{background:var(--surface); border:1px solid var(--border); border-radius:var(--radius-m); padding:1.8rem; transition:transform .2s ease, box-shadow .2s ease, border-color .2s ease;}
.testi-card:hover{transform:translateY(-5px); box-shadow:var(--shadow-soft); border-color:color-mix(in srgb, var(--primary) 40%, var(--border));}
.testi-card p{color:var(--text); font-size:0.98rem;}
.testi-who{display:flex; align-items:center; gap:0.7rem; margin-top:1.3rem;}
.testi-avatar{width:38px; height:38px; border-radius:50%; background:var(--surface-2); display:flex; align-items:center; justify-content:center; font-family:var(--font-display); font-weight:700; color:var(--primary);}
.testi-name{font-size:0.85rem; font-weight:600;}
.testi-role{font-size:0.78rem; color:var(--text-dim);}
.testi-placeholder-note{font-size:0.72rem; color:var(--text-dim); font-family:var(--font-mono); margin-top:0.6rem; opacity:0.7;}

/* CONTACT */
.contact-grid{display:grid; grid-template-columns:1fr 1fr; gap:3.5rem;}
@media(max-width:820px){.contact-grid{grid-template-columns:1fr;}}
.form-group{margin-bottom:1.3rem;}
.form-group label{display:block; font-size:0.85rem; margin-bottom:0.5rem; color:var(--text-dim);}
.form-group input, .form-group textarea{
  width:100%; padding:0.85rem 1rem; background:var(--surface); border:1px solid var(--border);
  border-radius:var(--radius-s); color:var(--text); font-family:var(--font-body); font-size:0.95rem;
}
.form-group input:focus, .form-group textarea:focus{border-color:var(--accent);}
.field-error{color:#F08A6C; font-size:0.78rem; margin-top:0.4rem; display:none;}
.form-group.invalid input, .form-group.invalid textarea{border-color:#F08A6C;}
.form-group.invalid .field-error{display:block;}
.form-status{
  margin-top:1rem; padding:0.9rem 1rem; border-radius:var(--radius-s); font-size:0.9rem; display:none;
}
.form-status.show{display:block;}
.form-status.ok{background:color-mix(in srgb, var(--success) 15%, transparent); color:var(--success); border:1px solid var(--success);}

.direct-contact{border:1px solid var(--border); border-radius:var(--radius-m); padding:1.8rem; background:var(--surface);}
.direct-row{display:flex; align-items:center; gap:0.9rem; padding:0.9rem 0; border-bottom:1px solid var(--border);}
.direct-row:last-child{border-bottom:none;}
.direct-row i{width:32px; text-align:center; color:var(--primary);}
.direct-row a{text-decoration:none; font-weight:500;}
.direct-row span.label{display:block; font-size:0.75rem; color:var(--text-dim);}

/* FOOTER */
footer{padding:3rem 0; border-top:1px solid var(--border); text-align:center; color:var(--text-dim);}
.footer-socials{display:flex; justify-content:center; gap:1.4rem; margin-top:1.2rem; font-size:1.1rem;}
.footer-socials a{color:var(--text-dim); transition:color .15s;}
.footer-socials a:hover{color:var(--primary);}

/* Floating CTA */
.float-cta{
  position:fixed; bottom:1.6rem; right:1.6rem; z-index:150;
  opacity:0; transform:translateY(20px); pointer-events:none; transition:all .25s ease;
}
.float-cta.show{opacity:1; transform:translateY(0); pointer-events:auto;}
</style>
</head>
<body>
<a href="#contact" class="skip-link">Saltar al contacto</a>

<header class="nav">
  <div class="nav-inner">
    <div class="logo">DEV<span>.LAB</span></div>
    <nav class="nav-links" id="nav-links">
      <a href="#about">Sobre mí</a>
      <a href="#skills">Habilidades</a>
      <a href="#process">Proceso</a>
      <a href="#projects">Proyectos</a>
      <a href="#testimonials">Testimonios</a>
      <a href="#contact">Contacto</a>
    </nav>
    <div class="nav-actions">
      <button class="icon-btn" id="theme-toggle" aria-label="Cambiar tema"><i class="fas fa-moon"></i></button>
      <a href="#contact" class="cta-btn" style="padding:0.6rem 1.1rem; font-size:0.88rem;">Iniciar proyecto</a>
      <button class="hamburger" id="hamburger" aria-label="Abrir menú" aria-expanded="false"><i class="fas fa-bars"></i></button>
    </div>
  </div>
</header>

<section class="hero" id="home">
  <div class="wrap hero-grid">
    <div class="hero-fade">
      <div class="status-pill"><span class="dot"></span> Disponible para nuevos proyectos</div>
      <h1>Convierto ideas complicadas en software que la gente realmente usa.</h1>
      <p class="lead">Desarrollo web, apps móviles, aplicaciones DeskTop, y automatización a medida. 18 años construyendo productos que resuelven problemas reales de negocio, de principio a fin.</p>
      <div class="hero-ctas">
        <a href="#contact" class="cta-btn">Agendar una llamada</a>
        <a href="#projects" class="cta-btn ghost">Ver proyectos</a>
      </div>
      <div class="hero-trust">
        <div><b class="count-target">18</b> años de experiencia</div>
        <div><b class="count-target">50+</b> proyectos entregados</div>
        <div><b class="count-target">12+</b> clientes recurrentes</div>
      </div>
    </div>
    <div class="editor-card" aria-hidden="true">
      <div class="editor-bar"><span></span><span></span><span></span></div>
      <div class="editor-body" id="typing-code"></div>
    </div>
  </div>
</section>

<section id="about">
  <div class="wrap about-grid">
    <div class="section-head reveal" style="margin-bottom:0;">
      <div class="eyebrow">Sobre mí</div>
      <h2 class="section-title">Ingeniería de software orientada a resultados: de la idea ambigua al producto funcional.</h2>
      <p>Me especializo en tomar un problema de negocio ambiguo y convertirlo en un producto funcional: backend robusto, interfaces claras y una experiencia que la gente entiende sin manual de instrucciones. He trabajado tanto con startups que necesitan validar rápido como con negocios establecidos que necesitan sistemas confiables a largo plazo.</p>
    </div>
    <div class="stats-row reveal-group">
      <div class="stat"><b class="count-target">50+</b><span>proyectos</span></div>
      <div class="stat"><b class="count-target">12+</b><span>clientes</span></div>
      <div class="stat"><b class="count-target">18</b><span>años exp.</span></div>
    </div>
  </div>
</section>

<section id="philosophy">
  <div class="wrap philosophy-grid">
    <div class="reveal">
      <div class="eyebrow">Mi filosofía</div>
      <p class="philosophy-quote">La mayoría de los proyectos de software no fallan por un mal código, fallan por una mala interpretación del problema de negocio.</p>
    </div>
    <div class="philosophy-body reveal">
      <p>Mi trabajo no es acumular líneas de programación, sino construir <b>activos digitales confiables</b> que generen valor real desde el primer día.</p>
      <p>Por eso cada proyecto empieza entendiendo el problema, no escribiendo código.</p>
    </div>
  </div>
</section>

<section id="skills">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="eyebrow">Habilidades técnicas</div>
      <h2 class="section-title">Las herramientas que uso para llevar un proyecto de idea a producción.</h2>
    </div>

    <div class="skill-group">
      <h4>Backend & datos</h4>
      <div class="skill-row">
        <div class="skill-chip"><i class="devicon-laravel-original colored"></i> Laravel</div>
        <div class="skill-chip"><i class="devicon-php-plain colored"></i> PHP 8</div>
        <div class="skill-chip"><i class="devicon-mysql-plain colored"></i> MySQL / SQL</div>
        <div class="skill-chip">
          <i class="devicon-amazonwebservices-plain-wordmark colored"></i> AWS
        </div>
    <div class="skill-chip">
      <i class="devicon-graphql-plain"></i> GraphQL
    </div>
      </div>
    </div>

    <div class="skill-group">
      <h4>Móvil & frontend</h4>
      <div class="skill-row">
          <div class="skill-chip"><i class="devicon-java-plain"></i> Java</div>
        <div class="skill-chip"><i class="devicon-flutter-plain colored"></i> Flutter</div>
        <div class="skill-chip"><i class="devicon-swift-plain colored"></i> Swift</div>
        <div class="skill-chip"><i class="devicon-android-plain colored"></i> Android</div>
        <div class="skill-chip"><i class="devicon-javascript-plain colored"></i> JavaScript</div>
        <div class="skill-chip">
            <i class="devicon-html5-plain colored"></i> HTML
          </div>
      </div>
    </div>

    <div class="skill-group">
      <h4>Otros lenguajes & herramientas</h4>
      <div class="skill-row">
        <div class="skill-chip"><i class="devicon-csharp-plain colored"></i> C#</div>
        <div class="skill-chip"><i class="devicon-visualbasic-plain colored"></i> Visual Basic</div>
        <div class="skill-chip"><i class="devicon-git-plain colored"></i> Git</div>
      </div>
    </div>
  </div>
</section>

<section id="process">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="eyebrow">Cómo trabajo</div>
      <h2 class="section-title">Un proceso claro, para que sepas qué esperar en cada etapa.</h2>
    </div>
    <div class="process-list reveal-group">
      <div class="process-item"><div class="num">01</div><h3>Descubrimiento</h3><p>Entendemos el problema real, no solo el pedido inicial. Definimos alcance y prioridades.</p></div>
      <div class="process-item"><div class="num">02</div><h3>Propuesta</h3><p>Recibes un plan concreto: tiempos, entregables y costo, sin letras chiquitas.</p></div>
      <div class="process-item"><div class="num">03</div><h3>Desarrollo</h3><p>Entregas parciales para que veas avances reales, no solo un reporte de estado.</p></div>
      <div class="process-item"><div class="num">04</div><h3>Entrega y soporte</h3><p>Lanzamiento acompañado y soporte posterior para ajustes y crecimiento.</p></div>
    </div>
  </div>
</section>

<section id="projects">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="eyebrow">Proyectos destacados</div>
      <h2 class="section-title">Algunos productos que he construido de principio a fin.</h2>
    </div>

    <div class="project-row reveal">
      <div class="project-media">
        <img src="{{ asset('assets/images/Albaross_funcionalities.jpeg') }}" alt="Albatross, navegador web avanzado">
        <div class="store-links">
          <a href="https://play.google.com/store/apps/details?id=com.dev.albatross" target="_blank" class="store-link play-store" aria-label="Descargar en Play Store"><img src="{{ asset('assets/images/google_store.png') }}" alt="Google Play"></a>
          <span class="store-link disabled" title="No disponible para iOS"><i class="fab fa-apple"></i></span>
        </div>
      </div>
      <div class="project-info">
        <h3>Albatross</h3>
        <p>Navegador web avanzado con capacidades para examinar y descargar contenido de cualquier página, bloqueo de anuncios integrado y almacenamiento local optimizado.</p>
        <div class="project-outcome"><b>Resultado:</b> app estable en producción con cifrado de datos locales y descargas gestionadas sin fugas de memoria.</div>
        <div class="project-tags"><span class="tag">Flutter</span><span class="tag">Riverpod</span><span class="tag">Hive</span><span class="tag">Dart</span><span class="tag">Encryption</span></div>
      </div>
    </div>

    <div class="project-row reveal">
      <div class="project-media">
        <img src="{{ asset('assets/images/MediCalendar_functionalities.png') }}" alt="MediCalendar, gestión de citas médicas">
        <div class="store-links">
          <a href="https://play.google.com/store/apps/details?id=com.dev.medicalendar.medicalendar" target="_blank" class="store-link play-store" aria-label="Descargar en Play Store"><img src="{{ asset('assets/images/google_store.png') }}" alt="Google Play"></a>
          <span class="store-link disabled" title="No disponible para iOS"><i class="fab fa-apple"></i></span>
        </div>
      </div>
      <div class="project-info">
        <h3>MediCalendar</h3>
        <p>Aplicación móvil multiplataforma orientada al control integral de la salud del usuario. Permite la programación de citas médicas, gestión de esquemas de medicación con alertas y el seguimiento de parámetros metabólicos y vasculares (glucosa y presión arterial). Diseñada con un enfoque en accesibilidad, rendimiento fluido y privacidad de datos</p>
        <div class="project-outcome"><b>Resultado:</b> agenda centralizada multiplataforma que elimina el doble registro manual de citas.</div>
        <div class="project-tags"><span class="tag">Flutter</span><span class="tag">Dart</span><span class="tag">JSON</span></div>
      </div>
    </div>

    <div class="project-row reveal">
      <div class="project-media">
        <img src="{{ asset('assets/images/Mifiniquito_functionalities.png') }}" alt="Mi Finiquito, cálculo de liquidaciones">
        <div class="store-links">
          <a href="https://play.google.com/store/apps/details?id=com.dev.mifiniuito.mifiniquito" target="_blank" class="store-link play-store" aria-label="Descargar en Play Store"><img src="{{ asset('assets/images/google_store.png') }}" alt="Google Play"></a>
          <span class="store-link disabled" title="No disponible para iOS"><i class="fab fa-apple"></i></span>
        </div>
      </div>
      <div class="project-info">
        <h3>Mi Finiquito</h3>
        <p>Aplicación multiplataforma para el cálculo de finiquitos y liquidaciones laborales, con reglas configurables por normativa.</p>
        <div class="project-outcome"><b>Resultado:</b> cálculos consistentes y auditable, respaldados en MySQL, listos para uso administrativo diario.</div>
        <div class="project-tags"><span class="tag">Flutter</span><span class="tag">Dart</span><span class="tag">MySQL</span><span class="tag">PHP</span></div>
      </div>
    </div>

    <div class="project-row reveal">
      <div class="project-media">
        <img src="{{ asset('assets/images/CoolCV_Baner.png') }}" alt="CoolCV, creación de currículums">
        <div class="store-links">
          <a href="https://play.google.com/store/apps/details?id=com.dev.coolcv.coolcv" target="_blank" class="store-link play-store" aria-label="Descargar en Play Store"><img src="{{ asset('assets/images/google_store.png') }}" alt="Google Play"></a>
          <span class="store-link disabled" title="No disponible para iOS"><i class="fab fa-apple"></i></span>
        </div>
      </div>
      <div class="project-info">
        <h3>CoolCV</h3>
        <p>App en Android e iOS para la creación de currículums profesionales, con plantillas y almacenamiento en la nube.</p>
        <div class="project-outcome"><b>Resultado:</b> infraestructura serverless en AWS que escala sin gestión manual de servidores.</div>
        <div class="project-tags"><span class="tag">Flutter</span><span class="tag">AWS</span><span class="tag">DynamoDB</span><span class="tag">Amplify</span> <span class="tag">Clean Architecture</span></div>
      </div>
    </div>

    <div class="project-row reveal">
      <div class="project-media">
        <img src="{{ asset('assets/images/DroidBrige_Banner_2.png') }}" alt="DroidBridge, conexión Android y Mac">
        <div class="store-links">
          <span class="store-link disabled" title="No disponible en Play Store"><i class="fab fa-google-play"></i></span>
          <span class="store-link disabled" title="No disponible para iOS"><i class="fab fa-apple"></i></span>
        </div>
      </div>
      <div class="project-info">
        <h3>DroidBridge</h3>
        <p>Conexión fluida entre dispositivos Android y Mac: sincroniza archivos, copia información y espeja la pantalla del Android en el Mac.</p>
        <div class="project-outcome"><b>Resultado:</b> transferencia de archivos y mirroring en tiempo real sin cables ni configuración compleja.</div>
        <div class="project-tags"><span class="tag">Swift</span><span class="tag">macOS</span><span class="tag">Mirroring</span><span class="tag">File Sync</span></div>
      </div>
    </div>
  </div>
</section>

<section id="testimonials">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="eyebrow">Lo que dicen los clientes</div>
      <h2 class="section-title">La prueba social es lo que más convierte visitantes en clientes.</h2>
    </div>
    <div class="testi-grid reveal-group">
      <div class="testi-card">
        <p>"Entregó el proyecto a tiempo y con una comunicación clara en cada etapa. Justo lo que necesitábamos."</p>
        <div class="testi-who"><div class="testi-avatar">A</div><div><div class="testi-name">[Nombre del cliente]</div><div class="testi-role">[Cargo, Empresa]</div></div></div>
      </div>
      <div class="testi-card">
        <p>"Tomó un requerimiento poco claro y lo convirtió en un producto que nuestro equipo usa todos los días."</p>
        <div class="testi-who"><div class="testi-avatar">B</div><div><div class="testi-name">[Nombre del cliente]</div><div class="testi-role">[Cargo, Empresa]</div></div></div>
      </div>
      <div class="testi-card">
        <p>"El soporte después del lanzamiento fue tan bueno como el desarrollo mismo. Lo recomiendo sin dudar."</p>
        <div class="testi-who"><div class="testi-avatar">C</div><div><div class="testi-name">[Nombre del cliente]</div><div class="testi-role">[Cargo, Empresa]</div></div></div>
      </div>
    </div>
  </div>
</section>

<section id="contact">
  <div class="wrap contact-grid">
    <div>
      <div class="eyebrow">Contacto</div>
      <h2 class="section-title" style="margin-bottom:1.5rem;">Cuéntame sobre tu proyecto.</h2>
      <form id="contact-form" novalidate>
        <div class="form-group" id="group-name">
          <label for="contact-name">Nombre completo</label>
          <input type="text" id="contact-name" name="name" placeholder="Ej. Israel Alba" required>
          <div class="field-error">Escribe tu nombre para continuar.</div>
        </div>
        <div class="form-group" id="group-email">
          <label for="contact-email">Email</label>
          <input type="email" id="contact-email" name="email" placeholder="email@ejemplo.com" required>
          <div class="field-error">Escribe un email válido.</div>
        </div>
        <div class="form-group" id="group-message">
          <label for="contact-message">Cuéntame sobre tu proyecto</label>
          <textarea rows="5" id="contact-message" name="message" placeholder="¿Qué problema quieres resolver? Cuanto más contexto des, más rápido puedo responderte." required></textarea>
          <div class="field-error">Cuéntame al menos un par de líneas sobre tu proyecto.</div>
        </div>
        <button type="submit" class="cta-btn" style="width:100%; justify-content:center;">Enviar mensaje</button>
        <div class="form-status" id="form-status">Mensaje enviado. Te responderé en menos de 24 horas.</div>
      </form>
    </div>

    <div class="direct-contact">
      <h3 style="margin-bottom:0.5rem;">Contacto directo</h3>
      <p style="margin-bottom:1.2rem;">Si prefieres saltarte el formulario, aquí me encuentras directamente.</p>
      <div class="direct-row"><i class="fas fa-envelope"></i><div><span class="label">Email</span><a href="mailto:israphelalba@yahoo.com.mx">israphelalba@yahoo.com.mx</a></div></div>
      <div class="direct-row"><i class="fab fa-whatsapp"></i><div><span class="label">WhatsApp</span><a href="https://wa.me/000000000">+52 55 18 36 24 27</a></div></div>
      <div class="direct-row"><i class="fas fa-location-dot"></i><div><span class="label">Ubicación</span><span>Remoto — disponible por zona horaria a convenir</span></div></div>
      <div class="direct-row"><i class="fas fa-clock"></i><div><span class="label">Tiempo de respuesta</span><span>Menos de 24 horas</span></div></div>
    </div>
  </div>
</section>

<footer>
  <div class="wrap">
    <p style="margin:0;">© 2026 DEV.LAB. Todos los derechos reservados.</p>
    <div class="footer-socials">
      <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
      <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
      <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
    </div>
  </div>
</footer>

<a href="#contact" class="cta-btn float-cta" id="float-cta">
  <i class="fas fa-message"></i> Contactar
</a>

<script>
// Theme
const themeToggle = document.getElementById('theme-toggle');
const htmlEl = document.documentElement;
function setTheme(t){
  htmlEl.setAttribute('data-theme', t);
  localStorage.setItem('theme', t);
  const icon = themeToggle.querySelector('i');
  icon.className = t === 'light' ? 'fas fa-sun' : 'fas fa-moon';
}
(function initTheme(){
  const saved = localStorage.getItem('theme');
  if(saved){ setTheme(saved); }
  else { setTheme(window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'); }
})();
themeToggle.addEventListener('click', () => {
  setTheme(htmlEl.getAttribute('data-theme') === 'dark' ? 'light' : 'dark');
  themeToggle.classList.remove('icon-spin');
  void themeToggle.offsetWidth; // restart animation
  themeToggle.classList.add('icon-spin');
});
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
  if(!localStorage.getItem('theme')) setTheme(e.matches ? 'dark' : 'light');
});

// Mobile nav
const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('nav-links');
hamburger.addEventListener('click', () => {
  const open = navLinks.classList.toggle('open');
  hamburger.setAttribute('aria-expanded', open);
  hamburger.querySelector('i').className = open ? 'fas fa-xmark' : 'fas fa-bars';
});
navLinks.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
  navLinks.classList.remove('open');
  hamburger.setAttribute('aria-expanded', 'false');
  hamburger.querySelector('i').className = 'fas fa-bars';
}));

// Hero typing animation (single orchestrated moment, respects reduced motion)
const codeLines = [
  ['<span class="kw">function</span> <span class="fn">buildSolution</span>(problema) {'],
  ['&nbsp;&nbsp;<span class="kw">const</span> plan = entender(problema);'],
  ['&nbsp;&nbsp;<span class="kw">return</span> construir(plan, <span class="str">"a tiempo"</span>);'],
  ['}']
];
const codeEl = document.getElementById('typing-code');
const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
if(reduceMotion){
  codeEl.innerHTML = codeLines.map((l,i)=>`<div><span class="ln">${i+1}</span>${l[0]}</div>`).join('');
} else {
  let li = 0;
  function typeLine(){
    if(li >= codeLines.length){
      codeEl.insertAdjacentHTML('beforeend', '<span class="cursor"></span>');
      return;
    }
    const div = document.createElement('div');
    div.innerHTML = `<span class="ln">${li+1}</span>`;
    codeEl.appendChild(div);
    const text = codeLines[li][0];
    let i = 0;
    const plain = text.replace(/<[^>]*>/g, m => '\u0000' + m + '\u0000');
    const interval = setInterval(() => {
      div.innerHTML = `<span class="ln">${li+1}</span>` + text.slice(0, i);
      i += 3;
      if(i >= text.length){ clearInterval(interval); div.innerHTML = `<span class="ln">${li+1}</span>${text}`; li++; setTimeout(typeLine, 150); }
    }, 12);
  }
  setTimeout(typeLine, 400);
}

// Scroll-reveal for sections, project rows, testimonials, process steps
if(!reduceMotion){
  const revealTargets = document.querySelectorAll('.reveal, .reveal-group');
  const revealIO = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add('in-view');
        revealIO.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15, rootMargin: '0px 0px -60px 0px' });
  revealTargets.forEach(el => revealIO.observe(el));
} else {
  document.querySelectorAll('.reveal, .reveal-group').forEach(el => el.classList.add('in-view'));
}

// Animated count-up for stat numbers
function animateCount(el){
  const raw = el.textContent.trim();
  const match = raw.match(/^(\d+)(.*)$/);
  if(!match) return;
  const target = parseInt(match[1], 10);
  const suffix = match[2];
  if(reduceMotion){ el.textContent = target + suffix; return; }
  const duration = 900;
  const start = performance.now();
  function tick(now){
    const progress = Math.min((now - start) / duration, 1);
    const eased = 1 - Math.pow(1 - progress, 3);
    el.textContent = Math.floor(eased * target) + suffix;
    if(progress < 1) requestAnimationFrame(tick);
    else el.textContent = target + suffix;
  }
  requestAnimationFrame(tick);
}
const countEls = document.querySelectorAll('.count-target');
const countIO = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if(entry.isIntersecting){
      animateCount(entry.target);
      countIO.unobserve(entry.target);
    }
  });
}, { threshold: 0.6 });
countEls.forEach(el => countIO.observe(el));

// Floating CTA visibility
const floatCta = document.getElementById('float-cta');
const heroEl = document.getElementById('home');
const io = new IntersectionObserver(([entry]) => {
  floatCta.classList.toggle('show', !entry.isIntersecting);
}, { threshold: 0 });
io.observe(heroEl);

// Contact form validation + fake submit feedback
const form = document.getElementById('contact-form');
const status = document.getElementById('form-status');
form.addEventListener('submit', (e) => {
  e.preventDefault();
  let valid = true;
  const fields = [
    { id: 'contact-name', group: 'group-name', check: v => v.trim().length > 1 },
    { id: 'contact-email', group: 'group-email', check: v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v) },
    { id: 'contact-message', group: 'group-message', check: v => v.trim().length > 9 }
  ];
  fields.forEach(f => {
    const el = document.getElementById(f.id);
    const group = document.getElementById(f.group);
    const ok = f.check(el.value);
    group.classList.toggle('invalid', !ok);
    if(!ok) valid = false;
  });
  if(!valid) return;

  const name = document.getElementById('contact-name').value;
  const email = document.getElementById('contact-email').value;
  const message = document.getElementById('contact-message').value;

  const subject = encodeURIComponent(`Contacto Portafolio: ${name}`);
  const body = encodeURIComponent(
    `Nombre: ${name}\n` +
    `Email del interesado: ${email}\n\n` +
    `Mensaje:\n${message}`
  );

  const mailtoLink = `mailto:israphelalba@yahoo.com.mx?subject=${subject}&body=${body}`;

  // Abrir el cliente de correo
  window.location.href = mailtoLink;

  // Mostrar aviso al usuario
  status.classList.add('show', 'ok');
  status.style.background = 'color-mix(in srgb, var(--accent) 15%, transparent)';
  status.style.color = 'var(--accent)';
  status.style.borderColor = 'var(--accent)';
  status.textContent = 'Abriendo tu aplicación de correo para completar el envío...';

  form.reset();
});
</script>
</body>
</html>
