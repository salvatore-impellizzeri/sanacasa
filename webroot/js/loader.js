class ObserverAnimation {
  constructor(el) {
    // Elements
    this.$el = el;
    this.isInView = true;
    this.positionClass = "is-out is-out--down";
    this.observer = null;

    this.currClass = this.$el.className;

    this.attachEvents();
  }

  visibilityChanged(isVisible, entry) {
    this.isInView = isVisible;

    if (this.isInView & (entry.intersectionRatio > 0)) {
      this.positionClass = "is-in";
    } else {
      if (entry.boundingClientRect.y < 0) {
        this.positionClass = "is-out is-out--up";
      } else {
        this.positionClass = "is-out is-out--down";
      }
    }

    return this.positionClass;
  }

  observerScroll() {
    // IntersectionObserver Supported
    let options = {};

    options = {
      root: null,
      rootMargin: "0px",
      threshold: 0.1,
    };

    // Create new IntersectionObserver
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        let posClass = this.visibilityChanged(entry.isIntersecting, entry);

        if (posClass === "is-in") {
          this.$el.className = this.currClass + " " + posClass;
          observer.unobserve(this.$el); 
        }
        
      });
    }, options);

    // Start observing
    observer.observe(this.$el);
  }

  attachEvents() {
    this.observerScroll();
  }
}

var initObserver = function () {
  boxElements = document.querySelectorAll("[data-animated]");

  boxElements.forEach((el, i) => {
    new ObserverAnimation(el);
  });
};

var initVideoObserver = function () {
  if (!!window.IntersectionObserver) {
    let videos = document.querySelectorAll("[data-play-video]");

    if (videos) {
      let observer = new IntersectionObserver((entries, observer) => {
        entries.map((entry) => {
          if (entry.isIntersecting) {
            entry.target.play();
          } else {
            entry.target.pause();
          }
        });
      });

      videos.forEach((video) => {
        observer.observe(video);
      });
    }
  }
};

var initScroll = function () {
  //classe aggiuntiva scroll
  $("body").toggleClass("body--scroll", $(document).scrollTop() > 0);
  $(document).on("scroll", () => {
    $("body").toggleClass("body--scroll", $(document).scrollTop() > 0);
  });
};

var start = new Date().getTime(),
  boxElements = null,
  observer = null;
loadSite = function () {
  document.querySelector("body").classList.add("loading-done");
  initObserver();
  initVideoObserver();
};

window.addEventListener("DOMContentLoaded", (event) => {
  initScroll();
});

window.addEventListener("load", (event) => {

  if (new Date().getTime() - start < 1000) {
    window.setTimeout(loadSite, 1000 - (new Date().getTime() - start));
  } else {
    loadSite();
  }
});

// BLOCCO SCHERMATA
document.addEventListener("DOMContentLoaded", () => {
  const svg = document.querySelector("#Sanacasa_Logo");
  const letters = svg.querySelectorAll("path");
  const letters2 = svg.querySelectorAll(".letter");

  const iconPath = document.querySelector("#Icona");
  const boundIcon = iconPath.getBoundingClientRect();

  const halfScreen = window.innerWidth / 2;
  const xFinal = halfScreen - boundIcon.left - boundIcon.width;

  let tl = gsap.timeline()
  .to(letters, {
    duration: 1,
    opacity: 1,
    stagger: 0.05,  
    ease: "power2.out"  
  })
  .to(letters2, {
    duration: 1,
    opacity: 0,
    stagger: 0.05,
    ease: "power2.out"  
  }, ">=0.5")
  .to(iconPath, {
    duration: 1,
    x: xFinal,
    ease: "power2.out",
    scale: 1.5,
    transformOrigin: "50% 50%",
  })
  .to(".loader", {
    duration: 1,
    ease: "power2.out",
    opacity: 0,
    onComplete: () => {
      document.querySelector(".loader").style.visibility = "hidden";
    }
  }, ">=1")
  .call(() => {
    lenis.start();
  });
});

