<!DOCTYPE html>
<html lang="en" class="splash-active">
<head>
    <meta charset="UTF-8">
    <script>
        // Some browsers restore the previous scroll position on refresh even
        // though the splash covers the screen — force the top so the reveal
        // (and any scrolling after it) always starts from a known state.
        if ('scrollRestoration' in history) { history.scrollRestoration = 'manual'; }
        window.scrollTo(0, 0);
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of Ruban Kumar B, Senior PHP Laravel and Full Stack Developer in Chennai.">
    <meta name="theme-color" content="#07152f">
    <link rel="canonical" href="{{ url()->current() }}">
    <title>Ruban Kumar B | Senior Laravel Developer</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Ruban Kumar B | Senior Laravel Developer">
    <meta property="og:description" content="Senior PHP Laravel Developer with 7 years of experience building ERP platforms, secure APIs and business systems.">
    <meta property="og:image" content="{{ asset('images/og-cover.png') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ruban Kumar B | Senior Laravel Developer">
    <meta name="twitter:description" content="Senior PHP Laravel Developer with 7 years of experience building ERP platforms, secure APIs and business systems.">
    <meta name="twitter:image" content="{{ asset('images/og-cover.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}?v={{ @filemtime(public_path('css/portfolio.css')) ?: time() }}">
</head>
<body class="splash-active">
    <noscript><style>#intro-splash{display:none!important}main,.site-header{opacity:1!important;transform:none!important}</style></noscript>
    <div id="intro-splash" class="intro-splash" role="button" tabindex="0" aria-label="Enter site">
        <video class="intro-splash-video" src="{{ asset('images/welcome.mp4') }}" autoplay muted loop playsinline aria-hidden="true"></video>
        <div class="intro-splash-mesh" aria-hidden="true"></div>
        <div class="intro-splash-content">
            <p class="intro-splash-greeting">Hi..! Welcome</p>
            <span class="intro-splash-hint">Click anywhere to enter <b>↓</b></span>
        </div>
    </div>
    <div id="scroll-progress" aria-hidden="true"></div>
    <div class="noise" aria-hidden="true"></div>
    <div id="motion-layer"></div>
    <header class="site-header">
        <a href="#home" class="brand" aria-label="Ruban Kumar home">RK</a>
        <nav class="icon-nav" aria-label="Main navigation">
            <a href="#about" class="nav-pill" aria-label="About">
                <span class="nav-pill-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="3.5"></circle><path d="M5 20c0-3.5 3-6 7-6s7 2.5 7 6"></path></svg></span>
                <span class="nav-pill-label">About</span>
            </a>
            <a href="#experience" class="nav-pill" aria-label="Experience">
                <span class="nav-pill-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="7.5" width="18" height="12" rx="2"></rect><path d="M8 7.5V6a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1.5"></path><path d="M3 13h18"></path></svg></span>
                <span class="nav-pill-label">Experience</span>
            </a>
            <a href="#skills" class="nav-pill" aria-label="Expertise">
                <span class="nav-pill-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M8 6 3 12l5 6"></path><path d="M16 6l5 6-5 6"></path></svg></span>
                <span class="nav-pill-label">Expertise</span>
            </a>
            <a href="#projects" class="nav-pill" aria-label="Projects">
                <span class="nav-pill-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="8" height="8" rx="1.5"></rect><rect x="13" y="3" width="8" height="8" rx="1.5"></rect><rect x="3" y="13" width="8" height="8" rx="1.5"></rect><rect x="13" y="13" width="8" height="8" rx="1.5"></rect></svg></span>
                <span class="nav-pill-label">Projects</span>
            </a>
            <a href="#contact" class="nav-pill" aria-label="Contact">
                <span class="nav-pill-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="m3.5 6 8.5 7 8.5-7"></path></svg></span>
                <span class="nav-pill-label">Contact</span>
            </a>
        </nav>
    </header>

    <main>
        <section id="home" class="hero section-shell">
            <div class="mesh mesh-hero" aria-hidden="true"></div>
            <div class="orb orb-one" data-parallax=".12"></div><div class="orb orb-two" data-parallax="-.07"></div>
            <div class="hero-copy reveal">
                <p class="eyebrow"><span></span> Available for immediate joining</p>
                <h1>Building the systems<br>that take <em>business forward.</em></h1>
                <p class="intro">I’m <strong>Ruban Kumar B</strong>, a Senior PHP Laravel Developer who turns complex workflows into reliable, scalable software.</p>
                <div class="hero-actions"><a class="button button-primary" href="#experience">Explore my work <b>↘</b></a><a class="button button-secondary" href="{{ route('resume.download') }}">Download Resume <b>↓</b></a><a class="text-link" href="#contact">Let’s connect <span>→</span></a></div>
            </div>
            <div class="hero-portrait reveal reveal-delay">
                <div class="portrait-ring"></div>
                <div class="portrait-frame" role="button" tabindex="0" aria-label="About Ruban Kumar B, Laravel Developer">
                    <video class="portrait-video" src="{{ asset('images/bg.mp4') }}" autoplay muted loop playsinline></video>
                    <img src="{{ asset('images/ruban-profile.png') }}" alt="Ruban Kumar B">
                    <div class="portrait-info" aria-hidden="true">
                        <span class="portrait-info-name">Ruban Kumar</span>
                        <span class="portrait-info-role">Full Stack Developer</span>
                    </div>
                </div>
                <div class="experience-badge"><strong>07</strong><span>years of<br>building</span></div>
            </div>
            <div class="scroll-cue"><span></span> Scroll to discover</div>
        </section>

        <section id="about" class="about section-shell section-pad">
            <div class="mesh mesh-about" aria-hidden="true"></div>
            <div class="section-glow section-glow-about" data-parallax=".06" aria-hidden="true"></div>
            <div class="section-label reveal"><span>01</span> Profile</div>
            <div class="about-grid">
                <h2 class="display reveal">A pragmatic engineer with an eye on the <em>whole system.</em></h2>
                <div class="about-copy reveal reveal-delay"><p>For seven years, I’ve developed enterprise applications that simplify the complicated. From multi-module ERP platforms to secure APIs, I bring architectural thinking and dependable execution to every layer of a product.</p><p>Based in Chennai and open to senior developer or tech lead opportunities, on-site or remote.</p><a href="mailto:rubankumar5234@gmail.com" class="text-link">rubankumar5234@gmail.com <span>↗</span></a></div>
            </div>
            <div class="metrics reveal"><div><strong>50–100</strong><span>SME clients served</span></div><div><strong>20+</strong><span>Secure APIs delivered</span></div><div><strong>7 yrs</strong><span>PHP & MySQL depth</span></div><div><strong>Now</strong><span>Immediate joiner</span></div></div>
        </section>

        <section id="experience" class="experience section-shell section-pad">
            <div class="mesh mesh-experience" aria-hidden="true"></div>
            <div class="section-glow section-glow-experience" data-parallax="-.05" aria-hidden="true"></div>
            <div class="section-label reveal"><span>02</span> Selected experience</div>
            <div class="experience-list">
                <article class="job reveal"><div class="job-top"><span>2023 — 2026</span><span>Chennai, India</span></div><div class="job-main"><h3>Programmer Analyst<br><em>PHP Laravel</em></h3><div><div class="company-line"><h4>HAL Simplify Solutions</h4><img class="company-logo company-logo-hal" src="{{ asset('images/organisations/hal-simplify.webp') }}" alt="HAL Simplify logo"></div><p>Architected and delivered a multi-module Laravel ERP for 50–100 SME clients, spanning HR, payroll, purchasing, sales, invoicing, and accounting. Built 20+ JWT-protected REST APIs, normalized MySQL data structures, and role-based access controls.</p><ul><li>Laravel · MySQL · REST API</li><li>JWT Auth · RBAC · ERP</li></ul></div></div></article>
                <article class="job reveal"><div class="job-top"><span>2021 — 2023</span><span>Chennai, India</span></div><div class="job-main"><h3>Associate Web Developer<br><em>PHP</em></h3><div><div class="company-line"><h4>Recochain Pvt Ltd</h4><img class="company-logo company-logo-recochain" src="{{ asset('images/organisations/recochain_logo.jpg') }}" alt="Recochain logo"></div><p>Enhanced an ISO certification management platform for an Australian client, automating audit scheduling, document control, certificate issuance, and compliance workflows. Built an internal onboarding and management portal.</p><ul><li>PHP · MySQL · Compliance</li><li>Automation · Reporting</li></ul></div></div></article>
                <article class="job reveal"><div class="job-top"><span>2019 — 2021</span><span>Madurai, India</span></div><div class="job-main"><h3>Web Developer<br><em>PHP</em></h3><div><div class="company-line"><h4>Web Tech Park</h4><img class="company-logo company-logo-webtech" src="{{ asset('images/organisations/web-tech-park.png') }}" alt="Web Tech Park logo"></div><p>Created Chit Fund ERP, HRM, billing, and reporting systems for business clients. Delivered custom PDF reporting and responsive websites integrated with operational backends.</p><ul><li>PHP · jQuery · MySQL</li><li>HRM · Billing · PDFs</li></ul></div></div></article>
            </div>
        </section>

        <section id="skills" class="skills section-shell section-pad">
            <div class="mesh mesh-skills" aria-hidden="true"></div>
            <div class="section-glow section-glow-skills" data-parallax=".07" aria-hidden="true"></div>
            <div class="section-label reveal"><span>03</span> Core expertise</div>
            <div class="skills-grid">
                <div class="skills-intro reveal"><h2 class="display">Technology is only useful when it makes work feel <em>effortless.</em></h2><p>I work across the stack, with a particular focus on stable Laravel backends and well-designed business data.</p></div>
                <div class="skill-columns reveal reveal-delay"><div><p>Backend & Data</p><ul><li>PHP 7.x / 8.x</li><li>Laravel</li><li>MySQL / SQL</li><li>REST APIs</li><li>Redis</li><li>Eloquent ORM</li><li>Relational Schema Design</li></ul></div><div><p>Frontend & Delivery</p><ul><li>React JS</li><li>JavaScript</li><li>HTML5 / CSS3</li><li>JWT Auth</li><li>AWS</li><li>Git / GitLab</li><li>Linux Server Environments</li></ul></div><div><p>Tools & Practices</p><ul><li>Postman</li><li>Third-Party API Integration</li><li>Agile Methodology</li><li>MVC Architecture</li><li>PSR Coding Standards</li><li>Role-Based Access Control</li><li>Code Reviews</li></ul></div></div>
            </div>
            <div class="domains reveal"><span>ERP Domain Knowledge</span><div>HR & Payroll <b>✦</b> Purchase <b>✦</b> Sales & Invoicing <b>✦</b> Inventory <b>✦</b> ISO Compliance</div></div>
        </section>

        <section id="projects" class="projects section-shell section-pad">
            <div class="mesh mesh-projects" aria-hidden="true"></div>
            <div class="section-glow section-glow-projects" data-parallax="-.06" aria-hidden="true"></div>
            <div class="section-label reveal"><span>04</span> Selected projects</div>
            <div class="projects-intro reveal"><h2 class="display">Products and platforms <em>I've engineered.</em></h2><p>A selection of backend systems built across ERP, compliance, billing, and reporting domains — each designed, coded, and shipped into production for real business users.</p></div>
            <div class="projects-stack-wrap reveal">
                <div class="projects-stack">
                    <button type="button" class="stack-item is-active" data-project="0" aria-pressed="true" style="--tint:#3a1f78;--tint-text:#fff">
                        <span class="stack-item-index">01</span>
                        <span class="stack-item-title">Multi-Module ERP Platform</span>
                        <span class="stack-item-arrow">→</span>
                    </button>
                    <button type="button" class="stack-item" data-project="1" aria-pressed="false" style="--tint:#5e4793;--tint-text:#fff">
                        <span class="stack-item-index">02</span>
                        <span class="stack-item-title">ISO Certification Management System</span>
                        <span class="stack-item-arrow">→</span>
                    </button>
                    <button type="button" class="stack-item" data-project="2" aria-pressed="false" style="--tint:#826eae;--tint-text:#fff">
                        <span class="stack-item-index">03</span>
                        <span class="stack-item-title">Chit Fund ERP</span>
                        <span class="stack-item-arrow">→</span>
                    </button>
                    <button type="button" class="stack-item" data-project="3" aria-pressed="false" style="--tint:#a797c9;--tint-text:#07152f">
                        <span class="stack-item-index">04</span>
                        <span class="stack-item-title">HRM Backend Module</span>
                        <span class="stack-item-arrow">→</span>
                    </button>
                    <button type="button" class="stack-item" data-project="4" aria-pressed="false" style="--tint:#cbbfe4;--tint-text:#07152f">
                        <span class="stack-item-index">05</span>
                        <span class="stack-item-title">Custom PDF Report Generator</span>
                        <span class="stack-item-arrow">→</span>
                    </button>
                    <button type="button" class="stack-item" data-project="5" aria-pressed="false" style="--tint:#efe7ff;--tint-text:#07152f">
                        <span class="stack-item-index">06</span>
                        <span class="stack-item-title">Billing & Invoicing System</span>
                        <span class="stack-item-arrow">→</span>
                    </button>
                </div>
                <div class="project-detail-card" aria-live="polite">
                    <div class="project-detail-panel is-active" data-project="0">
                        <span class="project-detail-index">01 / 06</span>
                        <h3>Multi-Module ERP Platform</h3>
                        <p>Architected and maintain a production Laravel ERP serving 50–100 SME clients across manufacturing, retail, and services, spanning HR & payroll, purchasing, sales, invoicing, and accounting modules. Designed 20+ secure REST APIs and normalized MySQL schemas to keep data consistent under concurrent multi-user load.</p>
                        <ul class="tag-list"><li>PHP</li><li>Laravel</li><li>MySQL</li><li>REST API</li><li>JWT Auth</li><li>RBAC</li><li>Redis</li><li>GitHub</li><li>GitLab</li><li>AWS</li><li>Eloquent ORM</li></ul>
                    </div>
                    <div class="project-detail-panel" data-project="1">
                        <span class="project-detail-index">02 / 06</span>
                        <h3>ISO Certification Management System</h3>
                        <p>Built and enhanced a compliance platform for an Australian client, automating audit scheduling, document control, certificate issuance, and renewal tracking — plus a secure client onboarding and management portal with stronger backend validation and reporting.</p>
                        <ul class="tag-list"><li>PHP</li><li>MySQL</li><li>Compliance Automation</li><li>Ajax</li><li>Javascript</li><li>Bootstrap</li><li>jQuery</li></ul>
                    </div>
                    <div class="project-detail-panel" data-project="2">
                        <span class="project-detail-index">03 / 06</span>
                        <h3>Chit Fund ERP</h3>
                        <p>Designed a chit fund backend automating member management, auctions, collections, accounting, and reporting — replacing manual ledger tracking with a reliable, auditable system for the business.</p>
                        <ul class="tag-list"><li>PHP</li><li>jQuery</li><li>MySQL</li></ul>
                    </div>
                    <div class="project-detail-panel" data-project="3">
                        <span class="project-detail-index">04 / 06</span>
                        <h3>HRM Backend Module</h3>
                        <p>Developed an HR management module covering employee profiles, attendance tracking, payroll processing, and leave management, eliminating manual HR errors for client teams.</p>
                        <ul class="tag-list"><li>PHP</li><li>MySQL</li></ul>
                    </div>
                    <div class="project-detail-panel" data-project="4">
                        <span class="project-detail-index">05 / 06</span>
                        <h3>Custom PDF Report Generator</h3>
                        <p>Built a reusable PDF generation engine that converts dynamic business and financial data into formatted, downloadable reports used for stakeholder communications and audits.</p>
                        <ul class="tag-list"><li>PHP</li><li>PDF Generation</li></ul>
                    </div>
                    <div class="project-detail-panel" data-project="5">
                        <span class="project-detail-index">06 / 06</span>
                        <h3>Billing & Invoicing System</h3>
                        <p>Delivered an end-to-end billing system covering invoice generation, receipts, inventory management, and payment tracking, backed by optimized SQL-driven reporting and reconciliation.</p>
                        <ul class="tag-list"><li>PHP</li><li>MySQL</li><li>SQL Reporting</li></ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="education section-shell section-pad"><div class="mesh mesh-education" aria-hidden="true"></div><div class="section-glow section-glow-education" data-parallax=".05" aria-hidden="true"></div><div class="section-label reveal"><span>05</span> Education</div><div class="education-grid reveal"><article><div class="education-info"><p>2017 — 2019</p><h3>M.Sc Computer Science</h3><span>Thiagarajar College, Madurai</span></div><img class="education-logo" src="{{ asset('images/organisations/thiagarajar-college.jpg') }}" alt="Thiagarajar College logo"></article><article><div class="education-info"><p>2014 — 2017</p><h3>B.Sc Computer Science</h3><span>N.M.S.S.Vellaichamy Nadar College, Madurai</span></div><img class="education-logo" src="{{ asset('images/organisations/svnlogo.png') }}" alt="S. Vellaichamy Nadar College logo"></article></div></section>

        <section id="contact" class="contact section-shell section-pad">
            <div class="mesh mesh-contact" aria-hidden="true"></div>
            <div class="contact-glow" data-parallax="-.04" aria-hidden="true"></div><div class="section-label reveal"><span>06</span> Start a conversation</div>
            <div class="contact-grid"><div class="reveal"><h2 class="display">Let’s build<br>something that <em>lasts.</em></h2><p>Have a role, project, or technical problem in mind? I would be glad to hear from you.</p><div class="direct-links"><a href="mailto:rubankumar5234@gmail.com">rubankumar5234@gmail.com <span>↗</span></a><a href="https://www.linkedin.com/in/ruban-kumar-rk234" target="_blank" rel="noopener">LinkedIn <span>↗</span></a><a href="https://github.com/RubanKumar234" target="_blank" rel="noopener">GitHub <span>↗</span></a><a href="{{ route('resume.download') }}">Download Resume <span>↓</span></a></div></div>
                <form class="contact-form reveal reveal-delay" method="POST" action="{{ route('contact.store') }}">@csrf
                    @if(request('sent'))<p class="form-success">Thank you - your message has been sent.</p>@endif
                    <input class="honeypot" type="text" name="website" tabindex="-1" autocomplete="off">
                    <label>Your name<input name="name" required value="{{ old('name') }}"></label><label>Email address<input type="email" name="email" required value="{{ old('email') }}"></label><label>Subject <small>(optional)</small><input name="subject" value="{{ old('subject') }}"></label><label>Your message<textarea name="message" rows="4" required>{{ old('message') }}</textarea></label>
                    @if($errors->any())<p class="form-error">{{ $errors->first() }}</p>@endif
                    <button class="button button-primary" type="submit">Send message <b>↗</b></button>
                </form></div>
        </section>
    </main>
    <footer><span>© {{ date('Y') }} Ruban Kumar B</span><span>Chennai, India</span></footer>
    <button id="back-to-top" type="button" aria-label="Back to top">↑</button>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('js/portfolio.js') }}?v={{ @filemtime(public_path('js/portfolio.js')) ?: time() }}"></script>
</body>
</html>
