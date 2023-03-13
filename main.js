const toggleBtn = document.getElementsByClassName('toggle-btn')[0]
const navlinks = document.getElementsByClassName('nav-links')[0]

toggleBtn.addEventListener('click',()=>
{
    navlinks.classList.toggle('active')
})