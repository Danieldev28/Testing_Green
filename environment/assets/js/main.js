gsap.registerPlugin(ScrollTrigger);

gsap.from('.anim0', 2, {opacity: 0, duration: 1, y:-10});

gsap.from('.anim1', 2, {opacity: 0, duration: 1, y:-10, delay: 1.4, stagger:0.4});

gsap.from('.anim2', 2, {opacity: 0, duration: 1, y:-10, delay: 3.3});

gsap.from('.anim3', 2, {opacity: 0, duration: 1, y:-10, delay: 4.3});


gsap.from('.registration', {
scrollTrigger: {
    trigger: '.registration-anime3',
    toggleActions: "restart none none none"
},
opacity: 0,
duration: 1, 
y:-50
});

