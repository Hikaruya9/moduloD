var movieImage = document.querySelector('.movie-image-appear');
// var synopsys = document.querySelector('.movie-synopsys');

var options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1,
};

document.addEventListener('DOMContentLoaded', () => {
    // Criação do Intersection Observer
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Adiciona a classe de animação quando a imagem entra na tela
                entry.target.classList.add('image-animate');
                // Para de observar a imagem após a animação ser aplicada
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0 // Defina a porcentagem da imagem que deve estar visível para a animação ser acionada (50% visível, por exemplo)
    });

    // Observar todas as imagens
    const movieImage = document.querySelectorAll('.movie-image-appear');
    movieImage.forEach(movieImage => {
        observer.observe(movieImage);
    });
});

// var callback = (entries, observer) => {
//     entries.forEach((entry) => {
//         if (entry.isIntersecting) {
//             var a = window.document.getElementsByClassName('movie-image-appear')
//             Array.from(a).forEach((element) => {
//                 element.classList.remove('hidden-image');
//                 element.classList.add('visible-image');
//             })
//         } else {
//             var a = window.document.getElementsByClassName('visiblemage')
//             Array.from(a).forEach((element) => {
//                 element.classList.remove('visible-image');
//                 element.classList.add('hidden-image');
//             })
//         }
//     });
// };

// var callback = (entries, observer) => {
//     entries.forEach((entry) => {
//         if (entry.isIntersecting) {
//             var a = window.document.getElementsByClassName('movie-synopsys')
//             Array.from(a).forEach((element) => {
//                 element.classList.remove('movie-synopsys');
//                 element.classList.add('visibleImage');
//             })
//         } else {
//             var a = window.document.getElementsByClassName('movie-synopsys')
//             Array.from(a).forEach((element) => {
//                 element.classList.remove('visibleImage');
//                 element.classList.add('movie-synopsys');
//             })
//         }
//     });
// };

var observer = new IntersectionObserver(callback, options);

observer.observe(movieImage);
// observer.observe(synopsys);