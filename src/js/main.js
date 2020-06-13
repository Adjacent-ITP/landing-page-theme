window.onload = () => {
  if (document.querySelector(".homepage")) {
    /*
     ** variables
     */
    const revealCount = 8;
    const hiddenFlag = "-is-hidden";

    /*
     ** dom elements
     */
    const menuDropdown = document.getElementsByClassName("menu__dropdown")[0];
    const menuBtn = document.getElementsByClassName("menu__dropdown-btn")[0];
    const menuDropdownList = document.getElementsByClassName(
      "menu__dropdown-list"
    )[0];
    const menuDropdownListChoice = Array.from(
      document.getElementsByClassName("menu__dropdown-choice")
    );
    const cards = Array.from(document.getElementsByClassName("card"));
    const cardsContainer = document.getElementsByClassName("grid-container")[0];
    const loadMoreBtn = document.getElementsByClassName("load-link")[0];

    /*
     ** hide loadmore if less than 8 cards
    */
    if (cards.length < revealCount) {
      loadMoreBtn.classList.add('-is-hidden')
    }

    /*
     ** menu dropdown
     */
    /* helper functions */
    function toggleClass(node, isToRemove = true, cssClass = "-is-active") {
      node.classList[isToRemove ? "remove" : "add"](cssClass);
    }

    /* main */
    menuBtn.addEventListener("click", () => {
      toggleClass(menuDropdown, false);
      toggleClass(menuDropdownList, false);
    });

    menuDropdownListChoice.forEach((btn) => {
      btn.addEventListener("click", (event) => {
        const { dropdownChoice } = btn.dataset;

        // sort cards
        const isChangingSort = menuBtn.textContent !== dropdownChoice;
        if (isChangingSort) {
          // change menu text
          menuBtn.textContent = dropdownChoice;

          /* sort */
          function hideCards(isReversed = true) {
            cards.forEach((card, index) => {
              const addFlagCondition = isReversed
                ? index < cards.length - revealCount
                : index >= revealCount;
              if (addFlagCondition) {
                card.classList.add(hiddenFlag);
              } else {
                card.classList.remove(hiddenFlag);
              }
            });
          }
          function removeTransition() {
            cardsContainer.classList.remove("-is-reversing");
          }
          function toSort(isRemoving) {
            // 1. add or remove '-is-reversed' class
            if (!isRemoving) cardsContainer.classList.add("-is-reversed");
            else cardsContainer.classList.remove("-is-reversed");

            // 2. show load more btn
            if (cards.length > revealCount) {
              loadMoreBtn.classList.remove(hiddenFlag);
            }

            // 3. hide the not revealing cards
            hideCards(!isRemoving);
          }

          // 1. add '-is-reversing' for smooth opacity effect
          // 2. execute sorting and remove '-is-reversing' at the same time
          cardsContainer.classList.add("-is-reversing");
          setTimeout(removeTransition, 500);
          setTimeout(toSort, 500, dropdownChoice !== "Oldest");
        }

        // cancel not selected text
        const activeText = document.getElementsByClassName(
          "menu__dropdown-choice -is-active"
        )[0];
        toggleClass(activeText);

        // dropdown class
        toggleClass(menuDropdown);

        // highlight selected text
        toggleClass(btn, false);

        // close menu
        toggleClass(menuDropdownList);
      });
    });

    /*
     ** sort and load
     */

    /* load */
    loadMoreBtn.addEventListener("click", () => {
      // reveal 4 hidden cards
      const hiddenCards = cards.filter((card) =>
        card.classList.contains(hiddenFlag)
      );
      const haveHiddenCards = hiddenCards.length > 0;

      if (haveHiddenCards) {
        for (let i = 0; i < revealCount; i++) {
          if (!hiddenCards[i]) {
            break;
          }
          hiddenCards[i].classList.remove(hiddenFlag);
        }
      }

      // hide this btn if no more hidden cards exist
      const haveNoHiddenCards = hiddenCards.length - revealCount <= 0;
      if (haveNoHiddenCards) loadMoreBtn.classList.add(hiddenFlag);
    });
  }

  /*
   ** footer
   */

  const footerBtn = document.getElementsByClassName("footer__bar-btn")[0];

  footerBtn.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });

  /*
   ** about
   */
  const activeFlag = "-is-active";
  if (document.getElementById("about")) {
    const $tabsContainer = document.getElementsByClassName("team__tabs")[0];
    const $tabs = Array.from($tabsContainer.children);
    const $targetGroups = Array.from(
      document.getElementsByClassName("team__group")
    );
    $tabs[0].classList.add(activeFlag);
    $targetGroups[0].classList.add(activeFlag);

    $tabs.forEach(($tab, index) => {
      $tab.addEventListener("click", () => {
        $tabs.forEach((tab) => tab.classList.remove(activeFlag));
        $tab.classList.add(activeFlag);

        $targetGroups.forEach((group) => group.classList.remove(activeFlag));
        $targetGroups[index].classList.add(activeFlag);
      });
    });
  }
};
