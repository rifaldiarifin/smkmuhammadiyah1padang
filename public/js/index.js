const screenScroll = () => {
    const header = document.getElementById("header");
    const heroSection = document.getElementById("herosection");
    const goToUp = document.querySelector(".go-to-up");
    const scrollStickyHandler = () => {
        const scrollY = window.scrollY;
        if (scrollY > header.clientHeight + 50) {
            header.classList.add('sticky-mode');
        } else {
            header.classList.remove('sticky-mode');
        }

        if (scrollY > heroSection.clientHeight / 2) {
            goToUp.classList.add("active")
        } else {
            goToUp.classList.remove("active")
        }
    }

    document.addEventListener('scroll', scrollStickyHandler);
    goToUp.onclick = () => {
        window.scrollTo({ top: 0 });
    }
}

const previewContents = () => {
    const previewParent = document.querySelector(".preview-contents");
    const navigates = previewParent.querySelectorAll("[data-expertise]");
    const descriptions = previewParent.querySelectorAll("[data-description]");
    let index = 0;
    let timeout = null;
    let status = true;

    const setActive = (index, nodelist) => {
        for (let x = 0; x < nodelist.length; x++) {
            nodelist[x].classList.remove("active");
        }
        nodelist[index].classList.add('active');
    }

    const toggleActive = (index) => {
        setActive(index, navigates);
        setActive(index, descriptions);
    }

    const checkDelay = () => {
        if (status === true) clearTimeout(timeout);
        timeout = setTimeout(() => status = true, 1000);
        if (status === false) return status;
        status = false;
        return true;
    }

    for (let x = 0; x < navigates.length; x++) {
        const navigate = navigates[x];
        navigate.onclick = () => {
            toggleActive(x);
            index = x;
            clearTimeout(timeout);
            status = false;
        }
    }

    // Automatic
    setInterval(() => {
        if (!checkDelay()) return;
        index === navigates.length - 1 ? index = 0 : index = index + 1;
        toggleActive(index);
    }, 5000);
}

const sliderCards = () => {
    const sliderParent = document.querySelector(".slider-cards");
    const slides = sliderParent.querySelector(".slides");
    const sliderDots = sliderParent.querySelector(".slider-dots");
    const renderCard = ({ id, name = "Hello World", photo = "", position = "Developer", isCurrent = false }) => {
        return `<div class="card" data-id="${id}">
        <div class="profile-card">
            <div class="top"></div>
            <div class="circle-photo">
                <img src="/img/photo/${photo}" alt="${name}">
            </div>
            <p class="pfl-name">${name}</p>
            <span class="pfl-as">${position}</span>
        </div>
    </div>`;
    }

    const renderSliderDots = (isActive = false) => {
        return `<span class="${isActive ? "dot active" : "dot"}"></span>`;
    }

    const collectData = () => {
        const cards = sliderParent.querySelectorAll(".slides .card");
        const collects = {
            data: []
        }
        cards.forEach(card => {
            collects.data.push({
                id: card.dataset.id,
                photo: card.dataset.photo,
                name: card.dataset.name,
                position: card.dataset.position
            });
        });
        return collects.data;
    }

    const renderSlides = () => {
        let index = 0;
        let lastindex = 0;
        const cards = [];
        let dots = "";
        const collects = {
            data: []
        }

        // collect data
        const data = collectData();
        lastindex = data.length - 1;

        // clear slides
        slides.innerHTML = "";
        sliderDots

        data.forEach((card, index) => {
            collects.data.push(renderCard({
                id: card.id,
                name: card.name,
                photo: card.photo,
                position: card.position,
                isCurrent: false
            }))
        });

        // render new slides

        for (let x = 0; x < 2; x++) {
            cards.unshift(collects.data[lastindex]);
            if (lastindex === 0) {
                lastindex = 0;
            } else {
                lastindex = lastindex - 1;
            }
        }
        for (let x = 0; x < 3; x++) {
            cards.push(collects.data[index]);
            if (index === collects.data.length - 1) {
                index = 0;
            } else {
                index = index + 1;
            }
        }

        // render slider dots
        data.forEach((dt, index) => {
            dots += renderSliderDots(index === 0 ? true : false);
        });

        slides.innerHTML = cards.join("\n");
        sliderDots.innerHTML = dots;
        slides.querySelectorAll(".slides .card")[2].classList.add("current");

        return data;
    }

    const getElementSlides = () => {
        const cards = slides.querySelectorAll(".card");
        const dots = sliderDots.querySelectorAll(".dot");
        const cardElements = [];
        cards.forEach(card => {
            cardElements.push({
                elmntParent: card,
                elmntPhoto: card.querySelector("img"),
                elmntName: card.querySelector(".pfl-name"),
                elmntPosition: card.querySelector(".pfl-as"),
            })
        });
        return { cardElements, dots };
    }

    const render = renderSlides();
    const getElement = getElementSlides();
    const controllerCard = () => {
        let index = 0;
        let indexSelected = index;
        let status = true;
        let timeout = null;
        let timeout2 = null;
        const prev = slides.querySelectorAll(".card")[1];
        const next = slides.querySelectorAll(".card")[3];
        const newCardData = {
            data: []
        };


        for (let x = 0; x < 2; x++) {
            index === 0 ? index = render.length - 1 : index = index - 1;
        }
        indexSelected = index;
        const setActive = (index, nodelist) => {
            let idx = index;
            for (let x = 0; x < nodelist.length; x++) {
                nodelist[x].classList.remove("active");
            }
            nodelist[index].classList.add('active');
        }

        const rerenderCard = (option) => {
            indexSelected = index;
            newCardData.data = [];
            for (let x = 0; x < 5; x++) {
                newCardData.data.push(render[indexSelected]);
                // code
                indexSelected === render.length - 1 ? indexSelected = 0 : indexSelected = indexSelected + 1;
            }
            getElement.cardElements.forEach((card, x) => {
                card.elmntParent.dataset.id = newCardData.data[x].id;
                card.elmntPhoto.src = `/img/photo/${newCardData.data[x].photo}`;
                card.elmntName.innerHTML = `${newCardData.data[x].name}`;
                card.elmntPosition.innerHTML = `${newCardData.data[x].position}`;

                if (x === 2) {
                    setActive(card.elmntParent.dataset.id - 1, getElement.dots);
                }
            });

            slides.classList.remove("previous");
            slides.classList.remove("next");
            slides.classList.add(option);
            clearTimeout(timeout);
            timeout = setTimeout(() => {
                slides.classList.remove(option);
            }, 1000);
        }
        const checkDelay = () => {
            if (status === true) clearTimeout(timeout2);
            timeout2 = setTimeout(() => status = true, 1000);
            if (status === false) return status;
            status = false;
            return true;
        }

        const prevCard = () => {
            index === 0 ? index = render.length - 1 : index = index - 1;

            // set data to element cards
            rerenderCard("previous");
        }

        const nextCard = () => {
            index === render.length - 1 ? index = 0 : index = index + 1;

            // set data to element cards
            rerenderCard("next");
        }

        const prevCardHandler = () => {
            if (!checkDelay()) return;
            prevCard();
        }

        const nextCardHandler = () => {
            if (!checkDelay()) return;
            nextCard();
        }

        prev.addEventListener("click", prevCardHandler);
        next.addEventListener("click", nextCardHandler);

        // Automatic
        setInterval(() => {
            if (!checkDelay()) return;
            nextCard();
        }, 4000);
    }
    controllerCard();
}

const bannerPromote = () => {
    let index = 0;
    const bannerParent = document.querySelector(".banner-promote");

    const setStyle = (index, count) => {
        bannerParent.setAttribute("style", `--count-banner: ${count}; --index-banner: ${index}`);
    }

    const renderSlide = (source, alt) => {
        return `<div class="slide-banner">
            <img class="front-img" src="${source}" alt="${alt}" />
        </div>\n`
    }

    const collectData = () => {
        const banners = bannerParent.querySelectorAll(".slide-banner");
        const collects = {
            data: []
        }
        banners.forEach((banner, index) => {
            collects.data.push({
                id: index,
                source: banner.dataset.source,
                alt: banner.dataset.alt
            });
        });
        return collects.data;
    }

    const setBanner = (i, countData) => {
        index = i;
        setStyle(index, countData)
    }

    const controllerBanner = () => {
        const data = collectData();
        const bannerSlide = bannerParent.querySelector(".bg-banner");
        let slides = "";
        data.forEach(dt => {
            slides += renderSlide(dt.source, dt.alt);
        });
        bannerSlide.innerHTML = slides;

        if (data.length === 0) setBanner(0, data.length);
        setInterval(() => {
            index >= data.length - 1
                ? setBanner(0, data.length)
                : setBanner(index + 1, data.length);
        }, 5000);
    }

    controllerBanner();
}

bannerPromote();
sliderCards();
screenScroll();
previewContents();