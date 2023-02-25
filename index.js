const toggleBtn = document.querySelector('.toggleBtn')
const toggleBtnIcon = document.querySelector('.toggleBtn i')
const dropdown = document.querySelector('.dropdown')


toggleBtn.onclick = function() {
    dropdown.classList.toggle('open')
    const isOpen = dropdown.classList.contains('open')

    toggleBtnIcon.classList = isOpen
    ? 'fa-solid fa-xmark'
    : 'fa-solid fa-bars'
}