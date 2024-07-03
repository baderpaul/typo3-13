document.addEventListener("DOMContentLoaded", function(){

  new MetisMenu("#menu", {
    triggerElement: 'span'
    });

    
    /*
     * activate lightbox
     */

  const lightbox = GLightbox({
    touchNavigation: true,
    loop: true,
    autoplayVideos: true
  });

    /*
     * email spam protection
     */

  let links = document.querySelectorAll('a');
  links.forEach(function(item){
    if (item.getAttribute('data-mailto-token') != null) {
      item.innerHTML = item.innerHTML.replace('@~@', '@');
    }
  });

    /*
     * hide/show navigation on landingpage
     */

    el_autohide = document.querySelector('.autohide');

    if(el_autohide){
      var last_scroll_top = 0;
      window.addEventListener('scroll', function() {
            let scroll_top = window.scrollY;
           if(scroll_top < last_scroll_top) {
                el_autohide.classList.remove('scrolled-down');
                el_autohide.classList.add('scrolled-up');
            }
            else {
                el_autohide.classList.remove('scrolled-up');
                el_autohide.classList.add('scrolled-down');
            }
            last_scroll_top = scroll_top;
      }); 
    }

}); 

function registerServiceWorker() {
  if('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/typo3conf/ext/setup_package/Resources/Public/JavaScript/sw.js', { scope: '/'}).then(() => {
      console.log('Service Worker registered successfully.');
    }).catch(error => {
      console.log('Service Worker registration failed:', error);
    });
  }
}