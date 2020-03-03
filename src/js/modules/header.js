/*
** menu dropdown
*/
const menuBtn = document.getElementsByClassName('menu__dropdown-btn')[0]
const menuDropdown = document.getElementsByClassName('menu__dropdown-list')[0]
const menuDropdownChoice = Array.from(document.getElementsByClassName('menu__dropdown-choice'))

/* helper functions */
function toggleClass(node, isToRemove = true, cssClass = '-is-active') {
	node.classList[isToRemove ? 'remove' : 'add'](cssClass)
}

/* main */
menuBtn.addEventListener('click', () => {
	toggleClass(menuDropdown, false)
})

menuDropdownChoice.forEach(btn => {
	btn.addEventListener('click', (event) => {
		const { dropdownChoice } = btn.dataset
		// change menu text
		menuBtn.textContent = dropdownChoice

		// cancel not selected text
		const activeText = document.getElementsByClassName('menu__dropdown-choice -is-active')[0]
		toggleClass(activeText)

		// highlight selected text
		toggleClass(btn, false)

		// close menu
		toggleClass(menuDropdown)
	})
})