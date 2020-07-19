const menu = document.querySelector('.menu-wrap');
const toggler = document.querySelector('.toggler');
menu.addEventListener('click', handleMenuLinks);
function handleMenuLinks(e){
  if(e.target.classList.contains('nav-link')){
    toggler.checked = false;
  }
}