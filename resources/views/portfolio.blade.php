<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Dev Portfolio | Premium Design</title>
    <meta name="description" content="Portfolio de desarrollador de software con experiencia en Laravel, PHP, JavaScript y diseño de interfaces modernas.">
    
    <!-- Fonts & Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    
    <style>
        /* Override background with generated image */
        .hero {
            background: linear-gradient(rgba(10, 11, 16, 0.8), rgba(10, 11, 16, 0.8)), 
                        url('{{ asset('images/developer_hero_bg.png') }}') center/cover no-repeat;
        }
    </style>
</head>
<body>
    <div class="bg-glow"></div>

    <nav>
        <div class="logo">DEV.LAB</div>
        <div class="nav-links">
            <a href="#home">Inicio</a>
            <a href="#about">Sobre Mí</a>
            <a href="#skills">Habilidades</a>
            <a href="#projects">Proyectos</a>
            <a href="#contact">Contacto</a>
        </div>
    </nav>

    <section id="home" class="hero">
        <div class="hero-content">
            <h1 id="hero-title">Creando el <span style="color: var(--primary)">Futuro</span> una línea a la vez</h1>
            <p>Full-Stack Developer & UI/UX Designer apasionado por construir experiencias digitales escalables y de alto impacto.</p>
            <div style="display: flex; gap: 1rem; justify-content: center;">
                <a href="#projects" class="cta-btn">Ver Proyectos</a>
                <a href="#contact" class="cta-btn" style="background: transparent; border: 1px solid var(--primary);">Contactar</a>
            </div>
        </div>
    </section>

    <section id="about">
        <h2 class="section-title">Sobre Mí</h2>
        <div style="max-width: 800px; margin: 0 auto; text-align: center; color: var(--text-dim);">
            <p style="font-size: 1.1rem; margin-bottom: 2rem;">
                Soy un desarrollador apasionado por la tecnología y la resolución de problemas complejos. Con más de 15 años de experiencia transformando ideas en realidades digitales, me especializo en arquitecturas robustas y diseños que cautivan.
            </p>
            <div style="display: flex; justify-content: center; gap: 3rem; margin-top: 3rem;">
                <div>
                    <h3 style="color: var(--primary); font-size: 2.5rem;">50+</h3>
                    <p style="font-size: 0.8rem; text-transform: uppercase;">Proyectos</p>
                </div>
                <div>
                    <h3 style="color: var(--secondary); font-size: 2.5rem;">12+</h3>
                    <p style="font-size: 0.8rem; text-transform: uppercase;">Clientes</p>
                </div>
                <div>
                    <h3 style="color: var(--accent); font-size: 2.5rem;">18</h3>
                    <p style="font-size: 0.8rem; text-transform: uppercase;">Años Exp.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="skills">
        <h2 class="section-title">Habilidades Técnicas</h2>
        <div class="skills-grid">
            <div class="skill-card">
                <i class="devicon-laravel-original colored"></i>
                <h3>Laravel</h3>
            </div>
            <div class="skill-card">
                <i class="devicon-php-plain colored"></i>
                <h3>PHP 8</h3>
            </div>
            <div class="skill-card">
                <i class="devicon-javascript-plain colored"></i>
                <h3>JavaScript</h3>
            </div>
            <div class="skill-card">
                <i class="devicon-mysql-plain colored"></i>
                <h3>MySQL / SQL</h3>
            </div>
            <div class="skill-card">
                <i class="devicon-git-plain colored"></i>
                <h3>Git</h3>
            </div>
            <div class="skill-card">
                <i class="devicon-android-plain colored"></i>
                <h3>Android</h3>
            </div>
            <div class="skill-card">
                <i class="devicon-flutter-plain colored"></i>
                <h3>Flutter</h3>
            </div>
            <div class="skill-card">
                <i class="devicon-csharp-plain colored"></i>
                <h3>C#</h3>
            </div>
            <div class="skill-card">
                <i class="devicon-visualbasic-plain colored"></i>
                <h3>Visual Basic</h3>
            </div>
        </div>
    </section>

    <section id="projects">
        <h2 class="section-title">Proyectos Destacados</h2>
        <div class="projects-grid">
            <div class="project-card">
                <div class="project-img">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800" alt="SaaS Dashboard">
                </div>
                <div class="project-info">
                    <h3>MediCalendar</h3>
                    <p>Una aplación multiplataforma para la gestión de citas médicas.</p>
                    <div class="project-tags">
                        <span class="tag">Flutter</span>
                        <span class="tag">dart</span>
                        <span class="tag">json</span>
                    </div>
                </div>
            </div>

            <div class="project-card">
                <div class="project-img">
                    <img src="https://images.unsplash.com/photo-1557821552-17105176677c?auto=format&fit=crop&q=80&w=800" alt="E-commerce Engine">
                </div>
                <div class="project-info">
                    <h3>Mi finiquito</h3>
                    <p>Aplicación multiplataforma para el cálculo de finiquitos y liquidaciones.</p>
                    <div class="project-tags">
                        <span class="tag">Flutter</span>
                        <span class="tag">dart</span>
                        <span class="tag">MySql</span>
                          <span class="tag">php</span>
                    </div>
                </div>
            </div>

            <div class="project-card">
                <div class="project-img">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=800" alt="AI Agent Interface">
                </div>
                <div class="project-info">
                    <h3>CoolCV</h3>
                    <p>Aplicación en Android y Ios para la creación de currículums profesionales.</p>
                    <div class="project-tags">
                        <span class="tag">Flutter</span>
                        <span class="tag">dart</span>
                        <span class="tag">aws</span>
                          <span class="tag">DynamoDB</span>
                          <span class="tag">amplify</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2 class="section-title">Trabajemos Juntos</h2>
        <div class="contact-container">
            <form action="#">
                <div class="form-group">
                    <label>Nombre Completo</label>
                    <input type="text" placeholder="Ej. Israel Alba" id="contact-name">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" placeholder="email@ejemplo.com" id="contact-email">
                </div>
                <div class="form-group">
                    <label>Mensaje</label>
                    <textarea rows="5" placeholder="Cuéntame sobre tu proyecto..." id="contact-message"></textarea>
                </div>
                <button type="submit" class="cta-btn" style="width: 100%;">Enviar Mensaje</button>
            </form>
        </div>
    </section>

    <footer style="padding: 4rem 10%; text-align: center; border-top: 1px solid var(--glass-border); color: var(--text-dim);">
        <p>&copy; 2025 DEV.LAB - Diseñado con ❤️ para desarrolladores.</p>
        <div style="margin-top: 1.5rem; display: flex; justify-content: center; gap: 1.5rem; font-size: 1.2rem;">
            <a href="#" style="color: var(--text-dim);"><i class="fab fa-github"></i></a>
            <a href="#" style="color: var(--text-dim);"><i class="fab fa-linkedin"></i></a>
            <a href="#" style="color: var(--text-dim);"><i class="fab fa-twitter"></i></a>
        </div>
    </footer>

    <script>
        // Smooth reveal animation on scroll
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('section').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'all 0.8s ease-out';
            observer.observe(section);
        });

        // Hero title typing effect
        const title = document.getElementById('hero-title');
        // Simple animation trigger
        title.style.opacity = '1';
    </script>
</body>
</html>
