document.addEventListener("DOMContentLoaded", () => {
	document.querySelectorAll('details').forEach(el => {
		let anim = null, opening = false, closing = false
		let summ = el.querySelector('summary')
		const runAnim = (height, targetHeight, callback) => {
			anim?.cancel()
			anim = el.animate({ height: [`${height}px`,`${targetHeight}px`] },{
				duration: 400,
				easing: 'ease-out'
			})
			anim.onfinish = () => {
				anim = null
				el.style.height = el.style.overflow = ''
				opening = closing = false
				callback?.()
			}
		}

		summ.addEventListener('click', ev => {
			ev.preventDefault()
			el.style.overflow = 'hidden'

			if(!el.open || closing) {
				el.style.height = `${el.offsetHeight}px`
				el.open = opening = true
				runAnim(el.offsetHeight, [...el.children].reduce((a,c) => a+c.offsetHeight, 0))
				anim.oncancel = () => opening = false
			} else if(el.open || opening) {
				closing = true
				runAnim(el.offsetHeight, summ.offsetHeight, () => el.open = false)
				anim.oncancel = () => closing = false
			}
		})
	})
})