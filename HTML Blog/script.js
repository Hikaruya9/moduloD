var movieImage = document.querySelector('.movie-image-appear');

var options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1,
};

var callback = (entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            var a = window.document.getElementsByClassName('movie-image-appear')
            Array.from(a).forEach((element) => {
                element.classList.remove('hiddenImage');
                element.classList.add('visibleImage');
            })
        } else {
            var a = window.document.getElementsByClassName('visibleImage')
            Array.from(a).forEach((element) => {
                element.classList.remove('visibleImage');
                element.classList.add('hiddenImage');
            })
        }
    });
};

var observer = new IntersectionObserver(callback, options);

observer.observe(movieImage);