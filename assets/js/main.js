document.addEventListener('DOMContentLoaded', () => {


    const urlToTheme = document.body.getAttribute('data-url-to-theme')
    const siteUrl = document.body.getAttribute('data-site-url')

    function preLoad() {
        const loader = document.querySelector('.transition-pages')
        const video = document.querySelector('video')

        if (video) {
            video.oncanplay = function () {
                gsap.to(loader, {
                    yPercent: -100,
                    delay: 0,
                    duration: 0.5,
                    ease: 'power3.inOut',
                    display: 'none'
                })
            }
        } else {
            gsap.to(loader, {
                yPercent: -100,
                delay: 1,
                duration: 0.5,
                ease: 'power3.inOut',
                display: 'none'
            })

        }

    }
    preLoad();



    try {
        function headerArrowAnim() {
            gsap.fromTo('.works-link-image',
                {
                    y: -3
                },
                {
                    duration: 1,
                    y: 3,
                    repeat: -1,
                    yoyo: true

                })
        }
        headerArrowAnim()

    } catch (error) {
        console.log(error);
    }



    try {
        function arrowFooter(params) {
            const arrow = document.querySelector('.footer-arrow'),
                text = document.querySelector('.call-form-btn-text'),
                line = document.querySelector('.call-form-btn-line');

            text.addEventListener('mouseover', () => {
                arrow.style.transform = 'translate3d(20px,0,0)'
                line.style.width = 0
            })
            text.addEventListener('mouseout', () => {
                arrow.style.transform = 'translate3d(0,0,0)'
                line.style.width = '100%'
            })


        }
        arrowFooter()

    } catch (error) {
        console.warn(error);
    }



    function mainAutoH(params) {
        const main = document.querySelector('main'),
            footer = document.querySelector('.footer');

        if (!footer.classList.contains('footer-not-found')) {
            main.style.marginBottom = footer.clientHeight + 'px';
        }
    }

    mainAutoH()


    function footerUp(params) {
        const footer = document.querySelector('.footer'),
            btn = document.querySelector('.call-form-btn'),
            arrow = document.querySelector('.footer-arrow'),
            basment = document.querySelector('.basement'),
            btnLine = document.querySelector('.call-form-btn-line'),
            title = document.querySelector('.footer-title'),
            closePop = document.querySelector('.form-close')


        const popTl = gsap.timeline()

        const tl = gsap.timeline({
            onComplete: function name(params) {
                if (popTl.reversed()) {
                    popTl.play()
                } else {
                    popTl.to('.form-popup', {
                        display: 'block',
                        duration: .1
                    })

                    popTl.fromTo('.form-title', {
                        opacity: 0,
                    },
                        {
                            opacity: 1,
                            duration: .3
                        })

                    popTl.fromTo('.form-text', {
                        opacity: 0,
                    },
                        {
                            opacity: 1,
                            duration: .3,
                            y: 0
                        }
                    )

                    popTl.fromTo('.popup-form', {
                        opacity: 0
                    },
                        {
                            opacity: 1,
                            duration: .3
                        },
                        '>'
                    )
                    popTl.fromTo(closePop, {
                        opacity: 0
                    },
                        {
                            opacity: 1,
                            duration: .3
                        })
                }

            }
        })

        btn.addEventListener('click', () => {
            if (tl.reversed()) {
                tl.play()
                document.body.style.overflow = 'hidden'
            } else {
                tl.to(arrow, {
                    duration: .3,
                    x: 700,
                    opacity: 0,
                    display: 'none',
                    ease: 'expo.out'
                })
                tl.to(basment, {
                    duration: .3,
                    opacity: 0,
                    ease: 'expo.out'
                }, '<')

                tl.to(btnLine, {
                    duration: .3,
                    opacity: 0,
                }, '<')

                tl.to(footer, {
                    zIndex: 99,
                    duration: .7,
                    height: 100 + '%',
                    ease: 'power3.out'
                })

                tl.to(title, {
                    duration: .3,
                    opacity: 0
                }, '>-0.3')

                document.body.style.overflow = 'hidden';

            }

        })

        closePop.addEventListener('click', () => {

            if (!closePop.classList.contains('close-without-footer')) {

                popTl.to('.form-popup', {
                    duration: .1,
                    display: 'none'
                })

                tl.reverse()


                document.body.style.overflowY = 'auto';
            }

        })

    }

    try {
        footerUp()
    } catch (error) {
        console.warn(error);
    }



    function modalView(params) {

        const headerBtn = document.querySelectorAll('.contact-us-btn'),
            closeBtn = document.querySelector('.form-close')

        const pop = gsap.timeline()


        headerBtn.forEach(item => {

            item.addEventListener('click', () => {

                closeBtn.classList.add('close-without-footer')

                if (pop.reversed()) {
                    pop.play()
                } else {
                    pop.fromTo('.form-popup', {
                        yPercent: -200
                    },
                        {
                            display: 'block',
                            yPercent: 0,
                            duration: 0.5
                        })

                    pop.fromTo('.form-title', {
                        opacity: 0
                    },
                        {
                            opacity: 1,
                            duration: .3
                        }, '>')

                    pop.fromTo('.form-text', {
                        opacity: 0,
                    },
                        {
                            opacity: 1,
                            duration: .3,
                        }, '<'
                    )

                    pop.fromTo('.popup-form', {
                        opacity: 0,
                    },
                        {
                            opacity: 1,
                            duration: .3
                        }, '<'
                    )
                    pop.fromTo(closeBtn, {
                        opacity: 0
                    },
                        {
                            opacity: 1,
                            duration: .3
                        })

                }
                document.body.style.overflow = 'hidden';

            })
        })



        closeBtn.addEventListener('click', () => {
            //проверяем если окно откыто не из футера то не трогаем футер
            if (closeBtn.classList.contains('close-without-footer')) {

                pop.to('.form-title', {
                    opacity: 0,
                    duration: .3
                })

                pop.to('.form-text', {
                    opacity: 0,
                    duration: .3
                }, '<')

                pop.to('.popup-form', {
                    opacity: 0,
                    duration: .3
                }, '<')

                pop.to(closeBtn, {
                    opacity: 0,
                    duration: .3
                })


                pop.to('.form-popup', {
                    yPercent: -200,
                    display: 'none',
                    duration: .3
                })

                pop.to('.form-popup', {
                    yPercent: 0,
                }, '>')
                document.body.style.overflow = 'auto';
                closeBtn.classList.remove('close-without-footer')


                //проверяем если мобильное меню открыто, то закрываем
                const mobMenu = document.querySelector('.mob-menu-wrap')
                const mobMenuClose = document.querySelector('.mob-menu-icon')


                if (mobMenu.getAttribute('data-open')) {
                    let event = new Event("click")
                    mobMenuClose.dispatchEvent(event)
                }

            }

        })


    }

    try {
        modalView()
    } catch (error) {
        console.warn(error)
    }





    function animateOnScroll() {

        const fadeUpElems = document.querySelectorAll('.fadeUpElem')
        const fadeInElems = document.querySelectorAll('.fadeInElem')
        const lineElems = document.querySelectorAll('.lineElem')

        function width() {
            if (window.innerWidth <= 600) {
                return 'top bottom'
            } else {
                return '30% 90%'
            }
        }


        function hide(elem) {
            gsap.set(elem, { autoAlpha: 0 });
        }

        gsap.utils.toArray(fadeUpElems).forEach(item => {
            hide(item);
            ScrollTrigger.create({
                trigger: item,
                start: width(),
                onEnter: function () {
                    gsap.fromTo(item, {
                        y: 70
                    }, {
                        autoAlpha: 1,
                        duration: 1.5,
                        y: 0,
                        ease: 'expo',
                    })
                },
                once: true
            })

        })
        gsap.utils.toArray(fadeInElems).forEach(item => {
            hide(item);
            ScrollTrigger.create({
                trigger: item,
                onEnter: function () {
                    gsap.to(item, {
                        autoAlpha: 1,
                        duration: 1.5,
                        ease: 'expo'
                    })
                },
                once: true
            })

        })
        gsap.utils.toArray(lineElems).forEach(item => {
            hide(item);
            gsap.set(item, { width: 0 })
            ScrollTrigger.create({
                trigger: item,
                onEnter: function () {
                    gsap.to(item, {
                        width: '100%',
                        autoAlpha: 1,
                        duration: 0.5,
                        ease: 'power1.in',
                    })

                },
                once: true
            })

        })

    }

    animateOnScroll();



    function easyScroll() {
        const ancors = document.querySelectorAll('a[href*="#"]')

        ancors.forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault()
                const anc = item.getAttribute('href')

                gsap.to(window, {
                    duration: 0.5,
                    scrollTo: anc,
                    ease: 'power2'
                })
            })
        })

    }

    easyScroll()


    function mobMenu(params) {
        const icon = document.querySelector('.mob-menu-icon'),
            menu = document.querySelector('.mob-menu-wrap'),
            lineUp = document.querySelector('.mob-menu-icon div:first-child'),
            lineDown = document.querySelector('.mob-menu-icon div:last-child'),
            logo = document.querySelector('g#Main'),
            tl = gsap.timeline({ defaults: { duration: 0.2 } })

        let clicked = 0;
        icon.addEventListener('click', function () {

            if (clicked == 0) {

                if (tl.reversed()) {
                    tl.play()
                    clicked = 1
                    menu.setAttribute('data-open', 'opened')
                    document.body.style.overflow = 'hidden'
                } else {
                    tl.to(logo, {
                        fill: '#222'
                    })
                    tl.to(lineUp, {
                        margin: 0,
                        backgroundColor: '#222'
                    }, '<')
                    tl.to(lineDown, {
                        y: -2,
                        backgroundColor: '#222'
                    }, '<')

                    tl.to(lineUp, {
                        rotation: -45
                    })
                    tl.to(lineDown, {
                        rotation: 45
                    }, '<')

                    tl.to(menu, {
                        duration: 0.7,
                        y: 0
                    }, '>-0.5')

                    tl.fromTo('.mob-menu-and-button', {
                        opacity: 0,
                        y: 10
                    },
                        {
                            opacity: 1,
                            y: 0,
                            duration: 0.3
                        })

                    tl.fromTo('.mob-menu-socials', {
                        opacity: 0,
                        y: 10
                    },
                        {
                            opacity: 1,
                            y: 0,
                            duration: 0.3
                        })

                    clicked = 1
                    menu.setAttribute('data-open', 'opened')
                    document.body.style.overflow = 'hidden'
                }
            } else {
                tl.reverse()
                menu.removeAttribute('data-open')
                document.body.style.overflowY = 'auto'
                clicked = 0
            }

        })

    }
    mobMenu()


    function fileInput(params) {
        const input = document.querySelector('.form-attach input'),
            label = document.querySelector('.form-attach label'),
            nameContaner = document.querySelector('.file-name span'),
            fileNameWrap = document.querySelector('.file-name')

        input.addEventListener('change', function (params) {
            const fileName = this.files[0].name
            fileNameWrap.style.display = 'flex'
            nameContaner.innerHTML = fileName

        })

    }
    try {
        fileInput()
    } catch (error) {
        console.warn(error)
    }



    function changeBgColor(params) {
        const main = document.querySelector('main'),
            changeBlackBgTrigger = document.querySelector('.change-black-bg')

        if (changeBlackBgTrigger) {
            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: changeBlackBgTrigger,
                    start: '20% 60%',
                    endTrigger: '.team',
                    end: 'bottom 30%',
                    // markers: true,
                    toggleActions: 'play reverse play reverse'

                }
            })
            tl.to('.services', {
                autoAlpha: 0,
                duration: 0.6,
                y: -50,
                ease: 'power1.inOut'

            });

            tl.to(main, {
                duration: 0.2,
                ease: 'power1.in',
                backgroundColor: '#222222',
                color: '#fff'
            }, '<');


        }


    }

    try {
        // changeBgColor()
    } catch (error) {
        console.log(error);
    }


    if (window.innerWidth >= 1200) {
        try {
            function scrollTeam() {
                const teamWrap = document.querySelector('.team-wrap');
                const teamSec = document.querySelector('.team');
                const containerWidth = document.querySelector('.team-sec').clientWidth;
                const teamWrapWidth = teamWrap.clientWidth;


                if (teamSec && (teamWrapWidth > containerWidth)) {
                    const viewPartOfTeamWrap = teamWrapWidth - containerWidth;

                    let tl = gsap.timeline({
                        scrollTrigger: {
                            trigger: teamSec,
                            start: 'top top',
                            scrub: 0.5,
                            // anticipatePin: 1,
                            pin: true
                        }
                    })

                    tl.to(teamWrap, {
                        x: -(viewPartOfTeamWrap + 30),
                        ease: 'none'
                    })
                }
            }
            scrollTeam()

        } catch (error) {
            console.log(error);

        }
    }


    function worksTags(params) {
        const tags = document.querySelectorAll('.works-tags-item')

        tags.forEach(item => {
            item.addEventListener('click', () => {
                tags.forEach(elem => {
                    elem.classList.remove('active')
                })
                item.classList.add('active')
            })
        })
    }
    worksTags()


    //штора вверх при клиен на переходы страниц
    function clickMenuAnimate() {
        const menuItems = document.querySelectorAll('.header-menu li a')
        const logoLink = document.querySelector('.logo-link')
        const animateBlock = document.querySelector('.transition-pages-up')
        const workBtnLink = document.querySelector('.work-btn-link')
        const workImageLink = document.querySelectorAll('.item-image-link')
        const workTitleLink = document.querySelectorAll('.work-title-link')
        const mobMenuLinks = document.querySelectorAll('.mob-menu li a')

        function animate(e, elem) {
            e.preventDefault()
            gsap.to(animateBlock, {
                display: 'flex',
                yPercent: -100,
                duration: 0.5,
                ease: 'power3.inOut',
                onComplete: function () {
                    window.location = elem.href;

                    // animateBlock.style.transform = 'translateY(100%)'
                }
            })
        }

        menuItems.forEach(item => {
            item.addEventListener('click', (e) => {
                animate(e, item)
            })
        })
        mobMenuLinks.forEach(item => {
            item.addEventListener('click', (e) => {
                animate(e, item)
            })
        })

        logoLink.addEventListener('click', function (e) {
            animate(e, this)
        })

        if (workBtnLink) {
            workBtnLink.addEventListener('click', function (e) {
                animate(e, this)
            })
        }

        if (workImageLink) {
            workImageLink.forEach(item => {
                item.addEventListener('click', (e) => {
                    animate(e, item)
                })
            })
        }

        if (workTitleLink) {
            workTitleLink.forEach(item => {
                item.addEventListener('click', (e) => {
                    animate(e, item)
                })
            })
        }

    }
    // clickMenuAnimate()





    function singleWorkCoverUp() {
        const cover = document.querySelector('.work-cover')
        const main = document.querySelector('main')
        const header = document.querySelector('.header')
        const coverH = cover.clientHeight

        if (cover && window.innerWidth >= 768) {
            ScrollTrigger.create({
                trigger: main,
                start: "10px top",
                end: coverH,
                pin: true
            })

            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: cover,
                    start: '10px top',
                    end: coverH,
                    scrub: true
                }
            })

            tl.to(cover, {
                yPercent: -100,
                ease: 'none'

            })
            tl.to(header, {
                yPercent: -1000,
                ease: 'none'
            }, '<')

        }

    }
    try {
        // singleWorkCoverUp()
    } catch (error) {
        console.log(error);
    }



    try {
        bodymovin.loadAnimation({
            container: document.querySelector('.thanks-video'),
            path: urlToTheme + '/assets/images/thanks.json',
            renderer: 'svg',
            loop: true,
            autoplay: true,
        })

    } catch (error) {
        console.log(error);
    }

    try {
        bodymovin.loadAnimation({
            container: document.querySelector('.anim-not-found'),
            path: urlToTheme + '/assets/images/zebra.json',
            renderer: 'svg',
            loop: true,
            autoplay: true,
        })

    } catch (error) {
        console.warn(error);
    }




    function validateAndSendForm(params) {

        const form = document.querySelector('.popup-form')
        const btn = document.querySelector('.submit-form-btn')

        //for validation
        const direction = document.querySelectorAll('#direction input')
        const budjet = document.querySelectorAll('#budjet input')
        const user = document.querySelector('#user_name')
        const email = document.querySelector('#user_email')

        btn.addEventListener('click', (e) => {

            e.preventDefault()


            let validate = false
            let directionValidate = false
            let budjetValidate = false
            let nameValidate = false
            let emailValidate = false

            let warningDirection = document.querySelector('.empty-field.direction')
            let warningBudjet = document.querySelector('.empty-field.budjet')
            let warningName = document.querySelector('.empty-field.name')
            let warningEmail = document.querySelector('.empty-field.email')



            direction.forEach(item => {
                if (item.checked) {
                    directionValidate = true
                    return item
                }

            })

            if (!directionValidate) {
                warningDirection.style.display = 'block'
            }


            budjet.forEach(item => {
                if (item.checked) {
                    budjetValidate = true
                    return item
                }
            })

            if (!budjetValidate) {
                warningBudjet.style.display = 'block'
            }


            if (user.value !== '') {
                nameValidate = true
            }

            if (!nameValidate) {
                warningName.style.display = 'block'
            }


            if (email.value !== '') {
                emailValidate = true
            }
            if (!emailValidate) {
                warningEmail.style.display = 'block'
            }


            if (directionValidate && budjetValidate && nameValidate && emailValidate) {
                validate = true
            }


            if (validate) {
                try {
                    fetch(siteUrl + '/send.php', {
                        method: 'POST',
                        body: new FormData(form)

                    })
                        .then(function (res) {
                            if (res.status !== 200) {
                                console.log('Looks like there was a problem. Status Code: ' +
                                    res.status);
                                return
                            } else {

                                // document.querySelector('.thanks-popup').style.display = 'block'

                                gsap.timeline()
                                    .to('.thanks-popup', {
                                        // yPercent: 0,
                                        display: 'block'
                                    }, '>')
                                    .to('.thanks-title', {
                                        autoAlpha: 1,
                                        duration: 0.5,
                                        ease: 'power2'
                                    })
                                    .to('.thanks-text', {
                                        autoAlpha: 1,
                                        duration: 0.5,
                                        ease: 'power2'
                                    }, '<')
                                    .to('.thanks-video', {
                                        autoAlpha: 1,
                                        duration: 0.5,
                                        ease: 'power2'
                                    }, '>')

                                form.reset()
                                let event = new Event('click')
                                document.querySelector('.form-close').dispatchEvent(event)
                            }
                        })

                } catch (error) {
                    console.error(error);
                }

            }
        })

    }
    try {
        validateAndSendForm()
    } catch (error) {
        console.warn(error)
    }

    try {

        function closeThanks() {
            let closeBtn = document.querySelector('.thanks-popup-close')
            let thanksPop = document.querySelector('.thanks-popup')
            closeBtn.addEventListener('click', function () {

                gsap.set(['.thanks-title', '.thanks-text', '.thanks-video'], {
                    autoAlpha: 0
                })
                gsap.to(thanksPop, {
                    display: 'none'
                })

            })
        }
        closeThanks()

    } catch (error) {
        console.warn(error)
    }



    function hoverAnimLogo() {
        const logoBlock = document.querySelector('.logo-anim')
        const logoLink = document.querySelector('.logo-link')
        const logoColor = logoBlock.getAttribute('data-color')

        function animationUrl() {
            if(logoColor === 'Black') {
                return '/assets/images/logo-1.json'
            } else if(logoColor === 'White') {
                return '/assets/images/logo-white.json'
            } else {
                return '/assets/images/logo-1.json'
            }
        }

        const anim = bodymovin.loadAnimation({
            container: logoBlock, // Required
            path: urlToTheme + animationUrl(), // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            autoplay: false, // Optional
        })

        anim.addEventListener('complete', () => {
            anim.stop()
        })

        logoLink.addEventListener('mouseenter', () => {
            anim.play()
        })


    }
    hoverAnimLogo()


})