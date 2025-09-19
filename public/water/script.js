const smallCups = document.querySelectorAll('.cup-small')
const liters = document.getElementById('liters')
const percentage = document.getElementById('percentage')
const remained = document.getElementById('remained')


updateBigCup()

smallCups.forEach((cup, idx) => {
    cup.addEventListener('click', () => highlightCups(idx))
})

function highlightCups(idx) {
    if (idx===7 && smallCups[idx].classList.contains("full")) idx--;
    else if(smallCups[idx].classList.contains('full') && !smallCups[idx].nextElementSibling.classList.contains('full')) {
        idx--
    }

    smallCups.forEach((cup, idx2) => {
        if(idx2 <= idx) {
            cup.classList.add('full')
        } else {
            cup.classList.remove('full')
        }
    })

    updateBigCup()
}

function updateBigCup() {
    const fullCups = document.querySelectorAll('.cup-small.full').length
    const totalCups = smallCups.length
	let percent = 0;

;
    if(fullCups === 0) {
        percentage.style.visibility = 'hidden'
        percentage.style.height = 0
    } else {
        percentage.style.visibility = 'visible'
        percentage.style.height = `${fullCups / totalCups * 330}px`
        percentage.innerText = `${fullCups / totalCups * 100}%`
		percent = `${fullCups / totalCups * 100}%`
		//localStorage.setItem('percent', percent);
		localStorage.setItem('fullcups', fullCups);


    }

    if(fullCups === totalCups) {
        remained.style.visibility = 'hidden'
        remained.style.height = 0
    } else {
        remained.style.visibility = 'visible'
        liters.innerText = `${4 - (250 * fullCups / 1000)}L`
    }
	
		
}


for (let i = 0; i < localStorage.length; i++)  {
	const key = localStorage.key(i);
	const value = localStorage.getItem(key);
	
	lsOutput.innerHTML += `${key}: ${value}<br />`;
}

function deleteItems() {
  localStorage.clear();
}







