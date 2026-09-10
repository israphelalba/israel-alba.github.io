<!DOCTYPE html>
<html lang="es" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- TÍTULO OPTIMIZADO PARA BUSCADORES -->
  <title>Israel Alba — Freelance Full-Stack & Mobile Software Architect</title>

  <!-- DESCRIPCIÓN SEO -->
  <meta name="description" content="Desarrollador Freelance especialista en Flutter, Swift, Laravel y AWS. +10 años creando aplicaciones móviles y plataformas web escalables y seguras.">

  <meta name="author" content="Israel Alba">
  <meta name="robots" content="index, follow">
  <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
  <link rel="canonical" href="{{ url('/') }}">

  <!-- GEO / SEO LOCAL (Captación de clientes en México y Remoto) -->
  <meta name="geo.region" content="MX-CMX">
  <meta name="geo.placename" content="Ciudad de México">

  <!-- OPEN GRAPH (Redes Sociales y WhatsApp/Telegram previews) -->
  <meta property="og:type" content="profile">
  <meta property="og:profile:first_name" content="Israel">
  <meta property="og:profile:last_name" content="Alba">
  <meta property="og:url" content="{{ url('/') }}">
  <meta property="og:title" content="Israel Alba — Desarrollador Flutter Freelance & Software Architect">
  <meta property="og:description" content="Servicios de desarrollo de software freelance: Apps móviles con Flutter/Swift y Backends en Laravel/AWS.">
  <meta property="og:image" content="{{ asset('assets/images/og-preview.jpeg') }}">

  <!-- TWITTER CARDS -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Israel Alba | Full-Stack & Mobile Software Architect">
  <meta name="twitter:description" content="Desarrollo multiplataforma seguro y escalable. Especialista en Flutter, Swift, Laravel y Cloud AWS.">
  <meta name="twitter:image" content="{{ asset('assets/images/og-preview.jpeg') }}">

  <!-- SCHEMA.ORG ENRIQUECIDO (JSON-LD) -->
  <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@@type": "Person",
    "name": "Israel Alba",
    "alternateName": "Israel Alba Mejia",
    "jobTitle": "Senior Mobile Architect & Full-Stack Engineer",
    "url": "{{ url('/') }}",
    "email": "mailto:israphelalba@yahoo.com.mx",
    "address": {
      "@@type": "PostalAddress",
      "addressLocality": "Ciudad de México",
      "addressCountry": "MX"
    },
    "sameAs": [
      "https://play.google.com/store/apps/developer?id=Israel+Alba",
      "https://github.com"
    ],
    "knowsAbout": [
      "Flutter",
      "Dart",
      "Laravel",
      "PHP 8",
      "Swift",
      "iOS & macOS Development",
      "AWS Serverless",
      "Clean Architecture"
    ],
    "hasOfferCatalog": {
      "@@type": "OfferCatalog",
      "name": "Servicios Freelance de Desarrollo de Software",
      "itemListElement": [
        {
          "@@type": "Offer",
          "itemOffered": {
            "@@type": "Service",
            "name": "Desarrollo Móvil Multiplataforma (Flutter / Swift)",
            "description": "Creación de aplicaciones para iOS, Android y macOS con código limpio y alto rendimiento."
          }
        },
        {
          "@@type": "Offer",
          "itemOffered": {
            "@@type": "Service",
            "name": "Arquitectura Backend & APIs REST (Laravel / PHP / AWS)",
            "description": "Diseño e implementación de servicios web, bases de datos e infraestructura cloud."
          }
        }
      ]
    }
  }
  </script>

  <!-- Fuentes e Iconos -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">

  <style>
  :root {
    --bg: #0B0E14;
    --surface: #12161F;
    --surface-2: #181D29;
    --border: rgba(255, 255, 255, 0.08);
    --text: #ECEAE6;
    --text-dim: #A3ADC2;
    --primary: #E8A33D;
    --primary-ink: #1A1200;
    --accent: #6EA8FE;
    --success: #5FCF8A;
    --radius-s: 8px;
    --radius-m: 16px;
    --shadow-soft: 0 20px 50px -25px rgba(0,0,0,0.6);
    --font-display: "Space Grotesk", sans-serif;
    --font-body: "Inter", sans-serif;
    --font-mono: "JetBrains Mono", monospace;
  }

  html[data-theme="light"] {
    --bg: #F7F6F2;
    --surface: #FFFFFF;
    --surface-2: #F0EEE7;
    --border: rgba(20, 20, 30, 0.08);
    --text: #181A1F;
    --text-dim: #4E5566;
    --primary: #B8721C;
    --primary-ink: #FFFFFF;
    --accent: #2E5FC7;
    --shadow-soft: 0 20px 50px -25px rgba(0,0,0,0.18);
  }

  * { box-sizing: border-box; }
  html { scroll-behavior: smooth; }

  body {
    margin: 0;
    background: var(--bg);
    color: var(--text);
    font-family: var(--font-body);
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
  }

  img { max-width: 100%; display: block; height: auto; }
  a { color: inherit; text-decoration: none; }

  .wrap { max-width: 1160px; margin: 0 auto; padding: 0 5vw; }

  section { padding: 6.5rem 0; }
  @media(max-width:640px){ section { padding: 4.5rem 0; } }

  .reveal {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .reveal.in-view { opacity: 1; transform: translateY(0); }

  .eyebrow {
    font-family: var(--font-mono);
    font-size: 0.82rem;
    color: var(--primary);
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
  }
  .eyebrow::before { content: ""; width: 16px; height: 1px; background: var(--primary); display: inline-block; }

  h1, h2, h3, h4 { font-family: var(--font-display); line-height: 1.2; margin: 0; font-weight: 600; }
  .section-title { font-size: clamp(1.8rem, 3.2vw, 2.5rem); margin-bottom: 1rem; }
  p { color: var(--text-dim); margin: 0.5rem 0 0; }

  header.nav {
    position: sticky; top: 0; z-index: 100;
    background: color-mix(in srgb, var(--bg) 90%, transparent);
    backdrop-filter: blur(12px);
    border-bottom: 1px solid var(--border);
  }
  .nav-inner {
    max-width: 1160px; margin: 0 auto; padding: 1.1rem 5vw;
    display: flex; align-items: center; justify-content: space-between;
  }
  .logo { font-family: var(--font-display); font-weight: 700; font-size: 1.15rem; z-index: 102; }
  .logo span { color: var(--primary); }

  .nav-links { display: flex; align-items: center; gap: 2rem; }
  .nav-links a {
    font-size: 0.92rem;
    color: var(--text-dim);
    font-weight: 500;
    transition: color 0.25s ease, transform 0.25s ease;
    display: inline-block;
  }
  .nav-links a:hover { color: var(--primary); transform: translateY(-1px); }

  .nav-actions { display: flex; align-items: center; gap: 1rem; }

  .hamburger {
    display: none;
    flex-direction: column;
    gap: 5px;
    background: none;
    border: none;
    cursor: pointer;
    z-index: 102;
    padding: 5px;
    margin-left: 0.5rem;
  }
  .hamburger span {
    display: block;
    width: 25px;
    height: 2px;
    background-color: var(--text);
    transition: all 0.3s ease;
  }

  @media (max-width: 850px) {
    .hamburger { display: flex; }
    .nav-links {
      position: fixed;
      top: 0;
      right: -100%;
      width: 80%;
      max-width: 300px;
      height: 100vh;
      background: var(--surface);
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 2.5rem;
      transition: right 0.4s cubic-bezier(0.16, 1, 0.3, 1);
      box-shadow: -10px 0 30px rgba(0,0,0,0.5);
      z-index: 101;
    }
    .nav-links.active { right: 0; }
    .nav-links a { font-size: 1.2rem; }

    .nav-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.6);
      backdrop-filter: blur(4px);
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      z-index: 100;
    }
    .nav-overlay.active { opacity: 1; visibility: visible; }

    /* Animación Hamburguesa */
    .hamburger.active span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
    .hamburger.active span:nth-child(2) { opacity: 0; }
    .hamburger.active span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

    .nav-actions .cta-btn:not(.ghost) { display: none; }
  }

  .cta-btn {
    font-family: var(--font-body); font-weight: 600; font-size: 0.88rem;
    padding: 0.75rem 1.3rem; border-radius: var(--radius-s);
    background: var(--primary); color: var(--primary-ink); border: 1px solid var(--primary);
    display: inline-flex; align-items: center; gap: 0.5rem; cursor: pointer;
    transition: transform .2s ease, box-shadow .2s ease, background-color .2s ease;
  }
  .cta-btn:hover { transform: translateY(-2px); box-shadow: var(--shadow-soft); }
  .cta-btn.ghost { background: transparent; color: var(--text); border-color: var(--border); }
  .cta-btn.ghost:hover { border-color: var(--primary); color: var(--primary); }

  .hero-grid { display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 3.5rem; align-items: center; }
  @media(max-width: 850px){ .hero-grid { grid-template-columns: 1fr; gap: 2.5rem; } }

  .status-pill {
    display: inline-flex; align-items: center; gap: 0.5rem; font-family: var(--font-mono);
    font-size: 0.8rem; color: var(--success); border: 1px solid var(--border); background: var(--surface);
    padding: 0.35rem 0.85rem; border-radius: 999px; margin-bottom: 1.2rem;
  }
  .status-pill .dot { width: 8px; height: 8px; border-radius: 50%; background: var(--success); }

  .code-window {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius-m);
    overflow: hidden;
    box-shadow: var(--shadow-soft);
  }
  .code-window-header {
    background: var(--surface-2);
    padding: 0.65rem 1rem;
    display: flex; align-items: center; gap: 0.4rem;
    border-bottom: 1px solid var(--border);
  }
  .code-window-header .dot-btn { width: 10px; height: 10px; border-radius: 50%; display: inline-block; }
  .dot-btn.red { background: #FF5F56; }
  .dot-btn.yellow { background: #FFBD2E; }
  .dot-btn.green { background: #27C93F; }
  .code-window-title { font-family: var(--font-mono); font-size: 0.75rem; color: var(--text-dim); margin-left: auto; }
  .code-window-body { padding: 1.5rem; font-family: var(--font-mono); font-size: 0.88rem; line-height: 1.8; }
  .code-window-body pre { margin: 0; white-space: pre-wrap; word-break: break-word; }
  .code-window-body .kw { color: var(--accent); }
  .code-window-body .fn { color: var(--primary); }
  .code-window-body .str { color: var(--success); }

  .cursor {
    display: inline-block; width: 8px; height: 1.1em;
    background-color: var(--primary); vertical-align: middle;
    margin-left: 2px; animation: blink 1s infinite;
  }
  @keyframes blink { 0%, 100% { opacity: 1; } 50% { opacity: 0; } }

  .skills-container { display: flex; flex-direction: column; gap: 2.5rem; margin-top: 2.5rem; }
  .skill-group h3 { font-family: var(--font-mono); font-size: 0.88rem; color: var(--primary); margin-bottom: 1rem; text-transform: uppercase; letter-spacing: 0.05em; }
  .skill-row { display: flex; flex-wrap: wrap; gap: 0.8rem; }
  .skill-chip {
    display: flex; align-items: center; gap: 0.65rem; padding: 0.65rem 1.1rem;
    border: 1px solid var(--border); border-radius: var(--radius-s); background: var(--surface);
    font-size: 0.9rem; font-weight: 500; transition: transform 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease;
  }
  .skill-chip:hover { transform: translateY(-3px); border-color: var(--primary); box-shadow: 0 6px 16px rgba(0,0,0,0.2); }
  .skill-chip i { font-size: 1.2rem; }

  .projects-list { display: flex; flex-direction: column; gap: 3rem; margin-top: 3rem; }
  .project-card {
    display: grid; grid-template-columns: 1fr 1fr; gap: 2.5rem; align-items: center;
    background: var(--surface); border: 1px solid var(--border); border-radius: var(--radius-m); padding: 2.2rem;
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s ease, box-shadow 0.3s ease;
  }
  .project-card:hover { transform: translateY(-6px); border-color: var(--primary); box-shadow: 0 16px 40px -15px rgba(0,0,0,0.5); }
  @media(max-width: 820px) { .project-card { grid-template-columns: 1fr; padding: 1.5rem; } }

  .project-media {
    background: var(--surface-2); border: 1px solid var(--border); border-radius: var(--radius-s);
    overflow: hidden; position: relative; min-height: 220px; display: flex; align-items: center; justify-content: center;
  }
  .project-media img { width: 100%; height: 100%; max-height: 260px; object-fit: cover; transition: transform 0.4s ease; }
  .project-card:hover .project-media img { transform: scale(1.04); }

  .project-outcome {
    margin-top: 1rem; padding: 0.9rem 1.1rem; background: var(--surface-2);
    border-left: 3px solid var(--success); border-radius: 0 var(--radius-s) var(--radius-s) 0; font-size: 0.88rem;
  }
  .project-tags { display: flex; flex-wrap: wrap; gap: 0.5rem; margin-top: 1.2rem; }
  .tag { font-family: var(--font-mono); font-size: 0.75rem; padding: 0.3rem 0.65rem; border: 1px solid var(--border); border-radius: 4px; color: var(--text-dim); background: var(--bg); }

  .store-links { display: flex; gap: 0.8rem; margin-top: 1.2rem; flex-wrap: wrap; }
  .store-btn {
    display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.5rem 0.9rem;
    background: var(--surface-2); border: 1px solid var(--border); border-radius: var(--radius-s);
    font-family: var(--font-mono); font-size: 0.78rem; color: var(--text); text-decoration: none;
    transition: border-color 0.2s ease, background-color 0.2s ease, color 0.2s ease, transform 0.2s ease;
  }
  .store-btn:hover { border-color: var(--primary); background: var(--primary); color: var(--primary-ink); transform: translateY(-2px); }
  .store-btn.disabled { opacity: 0.5; cursor: default; pointer-events: none; }

  .contact-box { background: var(--surface); border: 1px solid var(--border); border-radius: var(--radius-m); padding: 2.5rem; margin-top: 2rem; }
  .form-group { margin-bottom: 1.2rem; }
  .form-group label { display: block; font-size: 0.85rem; margin-bottom: 0.4rem; color: var(--text-dim); }
  .form-group input, .form-group textarea {
    width: 100%; padding: 0.85rem 1rem; background: var(--bg); border: 1px solid var(--border);
    border-radius: var(--radius-s); color: var(--text); font-family: var(--font-body); font-size: 0.95rem;
    transition: border-color 0.2s ease;
  }
  .form-group input:focus, .form-group textarea:focus { border-color: var(--accent); outline: none; }

  footer { padding: 3rem 0; text-align: center; color: var(--text-dim); font-size: 0.88rem; }
  </style>
</head>
<body>

<header class="nav">
  <div class="nav-inner">
    <a href="#home" class="logo">ISRAEL<span>.DEV</span></a>

    <div class="nav-overlay" id="navOverlay"></div>

    <nav class="nav-links" id="navLinks">
      <a href="#about">Sobre mí</a>
      <a href="#skills">Habilidades</a>
      <a href="#projects">Proyectos</a>
      <a href="#contact">Contacto</a>
    </nav>
    <div class="nav-actions">
      <button id="themeToggle" class="cta-btn ghost" style="padding: 0.5rem 0.8rem;" title="Cambiar Tema (Claro/Oscuro)" aria-label="Cambiar tema de color">
        <i id="themeIcon" class="fas fa-moon"></i>
      </button>
      <a href="#contact" class="cta-btn">Contacto</a>

      <button class="hamburger" id="hamburger" aria-label="Abrir menú">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </div>
</header>

<main>
  <section id="home">
    <div class="wrap hero-grid">
      <div>
        <div class="status-pill"><span class="dot"></span> Disponible para proyectos & Lead Roles</div>
        <h1>Israel Alba — Ingeniero de Software Multiplataforma (Mobile, Desktop & Web)</h1>
        <p>Ayudo a empresas y startups a transformar ideas en productos digitales escalables, seguros y multiplataforma.</p>

        <div style="display:flex; gap:1rem; margin-top:1.8rem; flex-wrap:wrap;">
          <a href="#contact" class="cta-btn"><i class="fas fa-paper-plane"></i> Contacto</a>
          <a href="#projects" class="cta-btn ghost">Ver Portafolio de Proyectos</a>
        </div>
      </div>

      <div class="code-window">
        <div class="code-window-header">
          <span class="dot-btn red"></span>
          <span class="dot-btn yellow"></span>
          <span class="dot-btn green"></span>
          <span class="code-window-title">solution.js</span>
        </div>
        <div class="code-window-body">
  <pre><code><span class="kw">function</span> <span class="fn">buildSolution</span>(problema) {
    <span class="kw">const</span> plan = <span class="fn">entender</span>(problema);
    <span class="kw">return</span> <span class="fn">construir</span>(plan, <span class="str">"a tiempo"</span>);
  }<span class="cursor"></span></code></pre>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="reveal">
    <div class="wrap">
      <div class="eyebrow">Sobre Mí & Propuesta Profesional</div>
      <h2 class="section-title">Senior Software Engineer | Mobile & Backend Specialist</h2>
      <h3 style="font-size: 1.3rem; color: var(--primary); margin-bottom: 1rem; font-family: var(--font-body); font-weight: 500;">
        Ingeniería de software robusta, arquitecturas seguras y liderazgo técnico.
      </h3>
      <p style="max-width: 900px; margin-bottom: 1.2rem;">
        Con más de <b>10 años de experiencia técnica</b>, me especializo en el diseño y desarrollo de soluciones de software escalables y de alto rendimiento. Mi perfil abarca desde la arquitectura de aplicaciones móviles multiplataforma y nativas (<b>Flutter/Dart, Swift, Java</b>) hasta el desarrollo backend y sistemas empresariales (<b>.NET C#, Java, PHP/Laravel, AWS y bases de datos SQL/MySQL/SQLite</b>).
      </p>
      <p style="max-width: 900px; margin-bottom: 1.2rem;">
        Cuento con una maestría en <b>Seguridad de la Información</b>, lo que me permite integrar estándares de encriptación, protección de servicios web y análisis de vulnerabilidades desde la fase de diseño. He liderado equipos e infraestructura como <b>Gerente de TI</b> y <b>Desarrollador Senior</b>, aplicando metodologías ágiles (Scrum) y optimizando procesos operativos.
      </p>
      <p style="max-width: 900px; font-weight: 500; color: var(--text);">
        <i class="fas fa-briefcase" style="color: var(--primary); margin-right: 0.5rem;"></i>
        Disponible para <b>contratación directa por empresas (roles Full-Time / Lead Developer / Mobile & Backend Architect)</b>, así como para <b>proyectos de consultoría y desarrollo Freelance</b>.
      </p>
    </div>
  </section>

  <section id="skills" class="reveal">
    <div class="wrap">
      <div class="eyebrow">Habilidades Técnicas & Especialización</div>
      <h2 class="section-title">Habilidades: Arquitecto Backend Laravel & Especialista Mobile</h2>
      <h3 style="font-size: 1.1rem; color: var(--text-dim); margin-bottom: 2rem; font-family: var(--font-mono); text-transform: none; letter-spacing: normal;">Stack tecnológico optimizado para desarrollo escalable y seguro.</h3>

      <div class="skills-container">
        <div class="skill-group">
          <h3>Backend, APIs REST & Cloud Serverless</h3>
          <div class="skill-row">
            <div class="skill-chip"><i class="devicon-laravel-original colored"></i> Laravel Framework</div>
            <div class="skill-chip"><i class="devicon-php-plain colored"></i> PHP 8 (PDO / OOP)</div>
            <div class="skill-chip"><i class="devicon-mysql-plain colored"></i> MySQL / SQL Database</div>
            <div class="skill-chip"><i class="devicon-amazonwebservices-plain-wordmark colored"></i> AWS (Amplify, Lambda, DynamoDB)</div>
            <div class="skill-chip"><i class="devicon-graphql-plain colored"></i> GraphQL APIs</div>
          </div>
        </div>

        <div class="skill-group">
          <h3>Desarrollo Móvil Multiplataforma & Nativo</h3>
          <div class="skill-row">
            <div class="skill-chip"><i class="devicon-flutter-plain colored"></i> Flutter Apps</div>
            <div class="skill-chip"><i class="devicon-dart-plain colored"></i> Dart Language</div>
            <div class="skill-chip"><i class="devicon-swift-plain colored"></i> Swift (macOS & iOS)</div>
            <div class="skill-chip"><i class="devicon-android-plain colored"></i> Android Development</div>
            <div class="skill-chip"><i class="devicon-java-plain colored"></i> Java</div>
            <div class="skill-chip"><i class="devicon-javascript-plain colored"></i> JavaScript ES6+</div>
          </div>
        </div>

        <div class="skill-group">
          <h3>Arquitectura, DevOps & Herramientas</h3>
          <div class="skill-row">
            <div class="skill-chip"><i class="fas fa-cubes" style="color:var(--primary)"></i> Clean Architecture</div>
            <div class="skill-chip"><i class="devicon-git-plain colored"></i> Git / GitHub Actions CI/CD</div>
            <div class="skill-chip"><i class="devicon-csharp-plain colored"></i> C# / .NET</div>
            <div class="skill-chip"><i class="fas fa-shield-alt" style="color:var(--accent)"></i> Ciberseguridad Aplicada</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="projects" class="reveal">
    <div class="wrap">
      <div class="eyebrow">Portafolio Freelance</div>
      <h2 class="section-title">Portafolio: Proyectos Destacados y Soluciones Digitales</h2>
      <h3 style="font-size: 1.1rem; color: var(--text-dim); margin-bottom: 2rem; font-family: var(--font-mono);">Aplicaciones destacadas con arquitectura sólida y alto rendimiento.</h3>

      <div class="projects-list">

        <div class="project-card">
          <div class="project-media">
            <img src="{{ asset('assets/images/Albatross_funcionalities.jpeg') }}" alt="Albatross - Navegador web móvil desarrollado en Flutter por Israel Alba">
          </div>
          <div>
            <h3>Albatross Browser</h3>
            <p>Este navegador combina la máxima privacidad con herramientas avanzadas de productividad: navega sin anuncios, detecta y descarga recursos multimedia al instante, y mantén todos tus datos locales protegidos mediante cifrado de alto nivel.</p>
            <div class="project-outcome"><b>Resultado:</b> Aplicación ligera que integra un poderoso motor de análisis multimedia, detectando y descargando recursos web al instante con privacidad y cifrado local. .</div>
            <div class="project-tags">
              <span class="tag">Flutter</span><span class="tag">Riverpod</span><span class="tag">Hive DB</span><span class="tag">Privacy Security</span>
            </div>
            <div class="store-links">
              <a href="https://play.google.com/store/apps/details?id=com.dev.albatross" target="_blank" rel="noopener" class="store-btn">
                <i class="fab fa-google-play"></i> Google Play Store
              </a>
            </div>
          </div>
        </div>

        <div class="project-card">
          <div class="project-media">
            <img src="{{ asset('assets/images/MediCalendar_functionalities.png') }}" alt="MediCalendar - Aplicación de gestión médica y alertas desarrollada en Flutter por Israel Alba">
          </div>
          <div>
            <h3>MediCalendar</h3>
            <p>Aplicación móvil offline-first para la gestión de citas médicas, esquemas de medicación, seguimiento de presión arterial, glucosa en sangre y notificaciones locales personalizadas.</p>
            <div class="project-outcome"><b>Resultado:</b> Organización simplificada para pacientes con arquitectura de persistencia local segura.</div>
            <div class="project-tags">
              <span class="tag">Flutter</span><span class="tag">Dart</span><span class="tag">Offline First</span><span class="tag">Local Notifications</span>
            </div>
            <div class="store-links">
              <a href="https://play.google.com/store/apps/details?id=com.dev.medicalendar.medicalendar" target="_blank" rel="noopener" class="store-btn">
                <i class="fab fa-google-play"></i> Google Play Store
              </a>
            </div>
          </div>
        </div>

        <div class="project-card">
          <div class="project-media">
            <img src="{{ asset('assets/images/Mifiniquito_functionalities.png') }}" alt="Mi Finiquito - Calculadora laboral conectada a backend PHP Laravel por Israel Alba">
          </div>
          <div>
            <h3>Mi Finiquito</h3>
            <p>Herramienta para el cálculo preciso de liquidaciones laborales acorde a Ley Federal del Trabajo mexicana, conectada a un servicio web REST en PHP y MySQL.</p>
            <div class="project-outcome"><b>Resultado:</b> Respuestas inmediatas, cálculos automatizados y desglose del ISR.</div>
            <div class="project-tags">
              <span class="tag">Flutter</span><span class="tag">PHP REST API</span><span class="tag">MySQL</span><span class="tag">Finance Tool</span>
            </div>
            <div class="store-links">
              <a href="https://play.google.com/store/apps/details?id=com.dev.mifiniuito.mifiniquito" target="_blank" rel="noopener" class="store-btn">
                <i class="fab fa-google-play"></i> Google Play Store
              </a>
            </div>
          </div>
        </div>

        <div class="project-card">
          <div class="project-media">
            <img src="{{ asset('assets/images/CoolCV_Baner.png') }}" alt="CoolCV - Creador de currículums con AWS Amplify desarrollado por Israel Alba">
          </div>
          <div>
            <h3>CoolCV App</h3>
            <p>Aplicación móvil para la creación de currículums profesionales personalizables con exportación a PDF e integración con AWS Amplify y DynamoDB.</p>
            <div class="project-outcome"><b>Resultado:</b> Arquitectura Serverless escalable con miles de documentos exportados a PDF.</div>
            <div class="project-tags">
              <span class="tag">Flutter</span><span class="tag">AWS Amplify</span><span class="tag">DynamoDB</span><span class="tag">PDF Engine</span>
            </div>
            <div class="store-links">
              <a href="https://play.google.com/store/apps/details?id=com.dev.coolcv.coolcv" target="_blank" rel="noopener" class="store-btn">
                <i class="fab fa-google-play"></i> Google Play Store
              </a>
            </div>
          </div>
        </div>

        <div class="project-card">
          <div class="project-media">
            <img src="{{ asset('assets/images/DroidBridge_Banner_2.png') }}" alt="DroidBridge - Aplicación nativa de macOS para Android en Swift por Israel Alba">
          </div>
          <div>
            <h3>DroidBridge macOS</h3>
            <p>Herramienta nativa para macOS desarrollada en Swift que permite la transferencia fluida de archivos y mirroring con dispositivos Android mediante ADB.</p>
            <div class="project-outcome"><b>Resultado:</b> Alta velocidad de comunicación entre plataformas utilizando Swift nativo.</div>
            <div class="project-tags">
              <span class="tag">Swift</span><span class="tag">macOS Native</span><span class="tag">ADB Protocol</span><span class="tag">App Utility</span>
            </div>
            <div class="store-links">
              <span class="store-btn disabled" tabindex="-1" aria-disabled="true"><i class="fab fa-apple"></i> Software Nativo macOS</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="contact" class="reveal">
    <div class="wrap" style="max-width: 650px;">
      <div class="eyebrow">Contacto</div>
      <h2 class="section-title">Contacto: Hablemos de tu próximo Proyecto de Software</h2>
      <p>Escríbeme directamente para cotizar un desarrollo freelance, coordinar una consultoría o evaluar tu infraestructura.</p>

      <div class="contact-box">
        <form id="contactForm" onsubmit="handleContactSubmit(event)">
          <div class="form-group">
            <label for="name">Tu Nombre o Empresa</label>
            <input type="text" id="name" placeholder="Ej. Carlos Martínez / Empresa XYZ" required>
          </div>
          <div class="form-group">
            <label for="email">Tu Correo Electrónico</label>
            <input type="email" id="email" placeholder="correo@ejemplo.com" required>
          </div>
          <div class="form-group">
            <label for="message">Detalles del Proyecto / Requerimientos</label>
            <textarea id="message" rows="4" placeholder="Cuéntame sobre las tecnologías requeridas, tiempos o alcance del proyecto..." required></textarea>
          </div>

          <button type="submit" class="cta-btn" style="width:100%; justify-content: center;">
            <i class="fas fa-paper-plane"></i> Enviar
          </button>
        </form>

        <div id="contactFallback" style="display: none; margin-top: 1.5rem; padding: 1rem; background: var(--surface-2); border: 1px solid var(--primary); border-radius: var(--radius-s); font-size: 0.9rem;">
          <p style="color: var(--text); font-weight: 600; margin-bottom: 0.5rem;">
            <i class="fas fa-info-circle" style="color: var(--primary);"></i> ¿No se abrió automáticamente tu app de correo?
          </p>
          <p style="margin-bottom: 1rem;">Puedes enviar el mensaje directamente a <b>israphelalba@yahoo.com.mx</b> usando las siguientes alternativas:</p>

          <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
            <a id="btnGmail" href="#" target="_blank" rel="noopener" class="store-btn">
              <i class="fab fa-google"></i> Abrir en Gmail Web
            </a>
            <button type="button" onclick="copyEmailToClipboard()" class="store-btn">
              <i class="fas fa-copy"></i> Copiar Correo al Portapapeles
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<footer>
  <div class="wrap">
    <p>© 2026 Israel Alba. Full-Stack Developer & Mobile Software Architect.</p>
  </div>
</footer>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const reveals = document.querySelectorAll(".reveal");
    function checkReveal() {
      const windowHeight = window.innerHeight;
      reveals.forEach((el) => {
        if (el.getBoundingClientRect().top < windowHeight - 80) {
          el.classList.add("in-view");
        }
      });
    }
    window.addEventListener("scroll", checkReveal);
    checkReveal();

    const htmlEl = document.documentElement;
    const themeToggleBtn = document.getElementById("themeToggle");
    const themeIcon = document.getElementById("themeIcon");

    function updateIcon(theme) {
      themeIcon.className = theme === "dark" ? "fas fa-sun" : "fas fa-moon";
    }

    function getInitialTheme() {
      const savedTheme = localStorage.getItem("user-theme");
      if (savedTheme) return savedTheme;

      const currentHour = new Date().getHours();
      const isNight = currentHour >= 18 || currentHour < 6;
      const prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;

      return (isNight || prefersDark) ? "dark" : "light";
    }

    const initialTheme = getInitialTheme();
    htmlEl.setAttribute("data-theme", initialTheme);
    updateIcon(initialTheme);

    themeToggleBtn.addEventListener("click", function () {
      const currentTheme = htmlEl.getAttribute("data-theme");
      const newTheme = currentTheme === "dark" ? "light" : "dark";

      htmlEl.setAttribute("data-theme", newTheme);
      localStorage.setItem("user-theme", newTheme);
      updateIcon(newTheme);
    });

    // Menú Móvil
    const hamburger = document.getElementById("hamburger");
    const navLinks = document.getElementById("navLinks");
    const navOverlay = document.getElementById("navOverlay");
    const links = document.querySelectorAll(".nav-links a");

    function toggleMenu() {
      hamburger.classList.toggle("active");
      navLinks.classList.toggle("active");
      navOverlay.classList.toggle("active");
      document.body.style.overflow = navLinks.classList.contains("active") ? "hidden" : "";
    }

    hamburger.addEventListener("click", toggleMenu);
    navOverlay.addEventListener("click", toggleMenu);

    links.forEach(link => {
      link.addEventListener("click", () => {
        if (navLinks.classList.contains("active")) toggleMenu();
      });
    });
  });

  function handleContactSubmit(event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const userEmail = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    const recipient = "israphelalba@yahoo.com.mx";
    const subjectText = `Contacto de ${name}`;
    const rawBodyText = `Hola Israel,\n\nMi nombre es ${name} (${userEmail}).\n\nMensaje / Detalles del Proyecto:\n${message}`;

    const subject = encodeURIComponent(subjectText);
    const body = encodeURIComponent(rawBodyText);

    const mailtoUrl = `mailto:${recipient}?subject=${subject}&body=${body}`;
    const gmailUrl = `https://mail.google.com/mail/?view=cm&fs=1&to=${recipient}&su=${subject}&body=${body}`;

    document.getElementById('btnGmail').href = gmailUrl;
    document.getElementById('contactFallback').style.display = 'block';

    // Disparar mailto mediante iframe invisible para evitar bloqueos de pantalla/navegación
    const iframe = document.createElement('iframe');
    iframe.style.display = 'none';
    iframe.src = mailtoUrl;
    document.body.appendChild(iframe);
    setTimeout(() => iframe.remove(), 1000);
  }

  function copyEmailToClipboard() {
    navigator.clipboard.writeText("israphelalba@yahoo.com.mx").then(() => {
      alert("¡Correo israphelalba@yahoo.com.mx copiado con éxito!");
    });
  }
</script>

</body>
</html>
