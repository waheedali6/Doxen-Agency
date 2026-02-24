

document.addEventListener("DOMContentLoaded", (event) => {

    ////////////bounce right //////////////
    gsap.to('.gsap-bounce-rightIn', {
        scrollTrigger: '.gsap-bounce-rightIn',
        opacity: 1,
        x: 0,
        duration: 1,
        ease: "bounce.out"
    });



    ///////////// scroll roll right in //////////////

    gsap.utils.toArray(".gsap-scroll-rollRightIn").forEach((el) => {
        gsap.fromTo(el, {
            x: -500,
            rotate: -90,
        }, {
            x: 0,
            rotation: 0,
            scrollTrigger: {
                trigger: el,
                start: "top bottom",
                end: "bottom 60%",
                scrub: true,
                // markers: true
            }
        });
    });


    ///////////// scroll right in //////////////

    gsap.utils.toArray(".gsap-scroll-rightIn").forEach((el) => {
        gsap.fromTo(el, {
            x: -500,
        }, {
            x: 0,
            scrollTrigger: {
                trigger: el,
                start: "top bottom",
                end: "70% 70%",
                scrub: true,
                // markers: true
            },
        });
    });



    ///////////// scroll right out //////////////
    gsap.utils.toArray(".gsap-scroll-rightOut").forEach((el) => {
        gsap.fromTo(el, {
            x: 0
        }, {
            scrollTrigger: {
                trigger: el,
                start: "top top",
                end: "bottom top",
                scrub: true,
                // markers: true
            },
            x: 500
        })
    });



    ///////////// scroll left in //////////////
    gsap.utils.toArray(".gsap-scroll-leftIn").forEach((el) => {
        gsap.fromTo(el, {
            x: 500,
        }, {
            x: 0,
            scrollTrigger: {
                trigger: el,
                start: "top bottom",
                end: "70% 70%",
                scrub: true,
                // markers: true
            }
        });
    });



    ///////////// scroll left out //////////////
    gsap.utils.toArray(".gsap-scroll-leftOut").forEach((el) => {
        gsap.fromTo(el, {
            x: 0
        }, {
            scrollTrigger: {
                trigger: el,
                start: "top top",
                end: "bottom top",
                scrub: true,
                // markers: true
            },
            x: -500
        })
    });



    ///////////// scroll up in //////////////
    gsap.utils.toArray(".gsap-scroll-upIn").forEach((el) => {
        gsap.fromTo(el, {
            y: 300
        }, {
            y: 0,
            scrollTrigger: {
                trigger: el,
                start: "top bottom",
                end: "-40% 30%",
                scrub: true,
                // markers: true
            }
        });
    });

    ///////////// scroll up out //////////////
    gsap.utils.toArray(".gsap-scroll-upOut").forEach((el) => {
        gsap.fromTo(el, {
            y: 0
        }, {
            y: -300,
            scrollTrigger: {
                trigger: el,
               start: "-60% top",
                end: "bottom -50%", 
                scrub: true,
                // markers: true
            }
        });
    });

});
