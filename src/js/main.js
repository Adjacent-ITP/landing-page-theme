window.onload = () => {
	/*
	** menu dropdown
	*/
	const menuDropdown = document.getElementsByClassName('menu__dropdown')[0]
	const menuBtn = document.getElementsByClassName('menu__dropdown-btn')[0]
	const menuDropdownList = document.getElementsByClassName('menu__dropdown-list')[0]
	const menuDropdownListChoice = Array.from(document.getElementsByClassName('menu__dropdown-choice'))

	/* helper functions */
	function toggleClass(node, isToRemove = true, cssClass = '-is-active') {
		node.classList[isToRemove ? 'remove' : 'add'](cssClass)
	}

	/* main */
	menuBtn.addEventListener('click', () => {
		toggleClass(menuDropdown, false)
		toggleClass(menuDropdownList, false)
	})

	menuDropdownListChoice.forEach(btn => {
		btn.addEventListener('click', (event) => {
			const { dropdownChoice } = btn.dataset
			// change menu text
			menuBtn.textContent = dropdownChoice

			// cancel not selected text
			const activeText = document.getElementsByClassName('menu__dropdown-choice -is-active')[0]
			toggleClass(activeText)

			// dropdown class
			toggleClass(menuDropdown)

			// highlight selected text
			toggleClass(btn, false)

			// close menu
			toggleClass(menuDropdownList)
		})
	})


	/*
	** footer
	*/

	const footerBtn = document.getElementsByClassName('footer__bar-btn')[0]

	footerBtn.addEventListener('click', () => {
		window.scrollTo({
			top: 0,
			behavior: 'smooth',
		})
	})
}