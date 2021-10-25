//this js creates a solid navbar once the page hsa been scrolled past the 100 point.
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