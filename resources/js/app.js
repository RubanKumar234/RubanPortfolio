import React, { useEffect } from 'react';
import { createRoot } from 'react-dom/client';
import './bootstrap';

function MotionLayer() {
    useEffect(() => {
        const header = document.querySelector('.site-header');
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });

        document.querySelectorAll('.reveal').forEach((element) => revealObserver.observe(element));
        const onScroll = () => {
            header.classList.toggle('scrolled', window.scrollY > 20);
            document.querySelectorAll('[data-parallax]').forEach((element) => {
                element.style.transform = `translateY(${window.scrollY * Number(element.dataset.parallax)}px)`;
            });
        };
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
        return () => { revealObserver.disconnect(); window.removeEventListener('scroll', onScroll); };
    }, []);

    const particles = Array.from({ length: 42 }, (_, index) => (
        <i key={index} style={{ '--x': `${Math.random() * 100}%`, '--y': `${Math.random() * 100}%`, '--s': `${2 + Math.random() * 5}px`, '--d': `${4 + Math.random() * 7}s`, '--l': `${Math.random() * -8}s` }} />
    ));

    return <div id="particles" aria-hidden="true">{particles}</div>;
}

const rootElement = document.getElementById('motion-layer');
if (rootElement) createRoot(rootElement).render(<MotionLayer />);
