<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of Ruban Kumar B, Senior PHP Laravel and Full Stack Developer in Chennai.">
    <title>Ruban Kumar B | Senior Laravel Developer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>
    <div class="noise" aria-hidden="true"></div>
    <div id="motion-layer"></div>
    <header class="site-header">
        <a href="#home" class="brand" aria-label="Ruban Kumar home">RK</a>
        <button class="menu-toggle" type="button" aria-label="Open navigation" aria-expanded="false"><i></i><i></i></button>
        <nav class="navigation" aria-label="Main navigation">
            <a href="#about">About</a><a href="#experience">Experience</a><a href="#skills">Expertise</a><a href="#contact">Contact</a>
        </nav>
    </header>

    <main>
        <section id="home" class="hero section-shell">
            <div class="orb orb-one" data-parallax=".12"></div><div class="orb orb-two" data-parallax="-.07"></div>
            <div class="hero-copy reveal">
                <p class="eyebrow"><span></span> Available for immediate joining</p>
                <h1>Building the systems<br>that make <em>business move.</em></h1>
                <p class="intro">I’m <strong>Ruban Kumar B</strong>, a Senior PHP Laravel Developer who turns complex workflows into reliable, scalable software.</p>
                <div class="hero-actions"><a class="button button-primary" href="#experience">Explore my work <b>↘</b></a><a class="text-link" href="#contact">Let’s connect <span>→</span></a></div>
            </div>
            <div class="hero-portrait reveal reveal-delay">
                <div class="portrait-ring"></div>
                <div class="portrait-frame"><img src="{{ asset('images/ruban-profile.png') }}" alt="Ruban Kumar B"></div>
                <div class="experience-badge"><strong>07</strong><span>years of<br>building</span></div>
            </div>
            <div class="scroll-cue"><span></span> Scroll to discover</div>
        </section>

        <section id="about" class="about section-shell section-pad">
            <div class="section-label reveal"><span>01</span> Profile</div>
            <div class="about-grid">
                <h2 class="display reveal">A pragmatic engineer with an eye on the <em>whole system.</em></h2>
                <div class="about-copy reveal reveal-delay"><p>For seven years, I’ve developed enterprise applications that simplify the complicated. From multi-module ERP platforms to secure APIs, I bring architectural thinking and dependable execution to every layer of a product.</p><p>Based in Chennai and open to senior developer or tech lead opportunities, on-site or remote.</p><a href="mailto:rubankumar5234@gmail.com" class="text-link">rubankumar5234@gmail.com <span>↗</span></a></div>
            </div>
            <div class="metrics reveal"><div><strong>50–100</strong><span>SME clients served</span></div><div><strong>20+</strong><span>Secure APIs delivered</span></div><div><strong>7 yrs</strong><span>PHP & MySQL depth</span></div><div><strong>Now</strong><span>Immediate joiner</span></div></div>
        </section>

        <section id="experience" class="experience section-shell section-pad">
            <div class="section-label reveal"><span>02</span> Selected experience</div>
            <div class="experience-list">
                <article class="job reveal"><div class="job-top"><span>2023 — 2026</span><span>Chennai, India</span></div><div class="job-main"><h3>Programmer Analyst<br><em>PHP Laravel</em></h3><div><div class="company-line"><h4>HAL Simplify Solutions</h4><img class="company-logo company-logo-hal" src="{{ asset('images/organisations/hal-simplify.webp') }}" alt="HAL Simplify logo"></div><p>Architected and delivered a multi-module Laravel ERP for 50–100 SME clients, spanning HR, payroll, purchasing, sales, invoicing, and accounting. Built 20+ JWT-protected REST APIs, normalized MySQL data structures, and role-based access controls.</p><ul><li>Laravel · MySQL · REST API</li><li>JWT Auth · RBAC · ERP</li></ul></div></div></article>
                <article class="job reveal"><div class="job-top"><span>2021 — 2023</span><span>Chennai, India</span></div><div class="job-main"><h3>Associate Web Developer<br><em>PHP</em></h3><div><div class="company-line"><h4>Recochain Pvt Ltd</h4><img class="company-logo company-logo-recochain" src="{{ asset('images/organisations/recochain_logo.jpg') }}" alt="Recochain logo"></div><p>Enhanced an ISO certification management platform for an Australian client, automating audit scheduling, document control, certificate issuance, and compliance workflows. Built an internal onboarding and management portal.</p><ul><li>PHP · MySQL · Compliance</li><li>Automation · Reporting</li></ul></div></div></article>
                <article class="job reveal"><div class="job-top"><span>2019 — 2021</span><span>Madurai, India</span></div><div class="job-main"><h3>Web Developer<br><em>PHP</em></h3><div><div class="company-line"><h4>Web Tech Park</h4><img class="company-logo company-logo-webtech" src="{{ asset('images/organisations/web-tech-park.png') }}" alt="Web Tech Park logo"></div><p>Created Chit Fund ERP, HRM, billing, and reporting systems for business clients. Delivered custom PDF reporting and responsive websites integrated with operational backends.</p><ul><li>PHP · jQuery · MySQL</li><li>HRM · Billing · PDFs</li></ul></div></div></article>
            </div>
        </section>

        <section id="skills" class="skills section-shell section-pad">
            <div class="section-label reveal"><span>03</span> Core expertise</div>
            <div class="skills-grid">
                <div class="skills-intro reveal"><h2 class="display">Technology is only useful when it makes work feel <em>effortless.</em></h2><p>I work across the stack, with a particular focus on stable Laravel backends and well-designed business data.</p></div>
                <div class="skill-columns reveal reveal-delay"><div><p>Backend & Data</p><ul><li>PHP</li><li>Laravel</li><li>MySQL / SQL</li><li>REST APIs</li><li>Redis</li><li>Eloquent ORM</li></ul></div><div><p>Product & Delivery</p><ul><li>React JS</li><li>JavaScript</li><li>HTML / CSS</li><li>JWT Auth</li><li>AWS</li><li>Git / GitLab</li></ul></div></div>
            </div>
            <div class="domains reveal"><span>ERP Domain Knowledge</span><div>HR & Payroll <b>✦</b> Purchase <b>✦</b> Sales & Invoicing <b>✦</b> Inventory <b>✦</b> ISO Compliance</div></div>
        </section>

        <section class="education section-shell section-pad"><div class="section-label reveal"><span>04</span> Education</div><div class="education-grid reveal"><article><div class="education-info"><p>2017 — 2019</p><h3>M.Sc Computer Science</h3><span>Thiagarajar College, Madurai</span></div><img class="education-logo" src="{{ asset('images/organisations/thiagarajar-college.jpg') }}" alt="Thiagarajar College logo"></article><article><div class="education-info"><p>2014 — 2017</p><h3>B.Sc Computer Science</h3><span>N.M.S.S.Vellaichamy Nadar College, Madurai</span></div><img class="education-logo" src="{{ asset('images/organisations/svnlogo.png') }}" alt="S. Vellaichamy Nadar College logo"></article></div></section>

        <section id="contact" class="contact section-shell section-pad">
            <div class="contact-glow"></div><div class="section-label reveal"><span>05</span> Start a conversation</div>
            <div class="contact-grid"><div class="reveal"><h2 class="display">Let’s build<br>something that <em>lasts.</em></h2><p>Have a role, project, or technical problem in mind? I would be glad to hear from you.</p><div class="direct-links"><a href="mailto:rubankumar5234@gmail.com">rubankumar5234@gmail.com <span>↗</span></a><a href="https://www.linkedin.com/in/ruban-kumar-rk234" target="_blank" rel="noopener">LinkedIn <span>↗</span></a><a href="https://github.com/RubanKumar234" target="_blank" rel="noopener">GitHub <span>↗</span></a></div></div>
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
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('js/portfolio.js') }}"></script>
</body>
</html>
