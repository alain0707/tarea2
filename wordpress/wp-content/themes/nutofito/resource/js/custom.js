/**
 * Custom JS for theme elements
 */

/**
 * Wocommerce active class for category list
 */
let nutoFitourl = window.location.href;
const nutoFitocatLink = document.querySelectorAll(
  ".wc-block-product-categories-list li a"
);
nutoFitocatLink.forEach((item) => {
  if (item.href === nutoFitourl) {
    item.classList.add("active");
  }
});

/*
    Add class in body when search clicked
*/
let nutoFitosearchBtn = document.querySelector(".search-controller svg.search");

if (nutoFitosearchBtn !== null) {
  nutoFitosearchBtn.addEventListener("click", function (e) {
    document.body.classList.remove("open-social");
    document.body.classList.add("open-search");
    document.body.addEventListener("click", function () {
      document.body.classList.remove("open-search");
    });

    let nutoFitosearchContainer = document.querySelector(".search-container");
    nutoFitosearchContainer.addEventListener("click", function (e) {
      e.stopPropagation();
    });

    var nutoFitosearchInput = document.querySelector(".wp-block-search__input");
    window.setTimeout(() => nutoFitosearchInput.focus(), 0);
  });
}

var nutoFitosearchBtnClose = document.querySelector(
  ".search-controller svg.cross"
);

if (nutoFitosearchBtnClose !== null) {
  nutoFitosearchBtnClose.addEventListener("click", function (e) {
    document.body.classList.remove("open-search");

  });
}


/*
    Add class in body when social clicked
*/
let nutoFitosocialBtn = document.querySelector(".social-controller svg.social");

if (nutoFitosocialBtn !== null) {
  nutoFitosocialBtn.addEventListener("click", function (e) {
    document.body.classList.remove("open-search");
    document.body.classList.add("open-social");
    document.body.addEventListener("click", function () {
      document.body.classList.remove("open-social");
    });

    let nutoFitosocialContainer = document.querySelector(".social-container");
    nutoFitosocialContainer.addEventListener("click", function (e) {
      e.stopPropagation();
    });

    var nutoFitosocialInput = document.querySelector(".wp-block-social__input");
    window.setTimeout(() => nutoFitosocialInput.focus(), 0);
  });
}

var nutoFitosocialBtnClose = document.querySelector(
  ".social-controller svg.cross"
);

if (nutoFitosocialBtnClose !== null) {
  nutoFitosocialBtnClose.addEventListener("click", function (e) {
    document.body.classList.remove("open-social");

  });
}

/*
    Add blinker on input field when active
*/
let nutoFitoblinkerField = document.querySelector(".social-controller svg.search");

if (nutoFitoblinkerField !== null) {
  nutoFitoblinkerField.addEventListener("click", function () {
    var nutoFitosearchInput = document.querySelector(".wp-block-search__input");
        window.setTimeout(() => nutoFitosearchInput.focus(), 0);
  });
}