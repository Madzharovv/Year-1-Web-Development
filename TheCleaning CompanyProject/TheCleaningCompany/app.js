
window.addEventListener('scroll', changeNavigationClasses);

function changeNavigationClasses() {
    const scrollTopPosition = window.pageYOffset;
    const navContainer = document.getElementById('nav-container');
    if(scrollTopPosition > 100) {
        navContainer.classList.add('scrolled');
        
    } else {
        navContainer.classList.remove('scrolled');
       

    }

}