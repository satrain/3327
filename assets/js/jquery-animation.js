var person = document.querySelector(".person-with-label")

var circle = document.querySelector(".who-we-are")

// var bounding = person.getBoundingClientRect();

// console.log(bounding);

// var isInViewport = function (elem) {
//     var bounding = elem.getBoundingClientRect();
//     return (
//         bounding.bottom >= 0 &&
//         bounding.left >= 0 &&
//         bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
//         bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
//     );
// };
// window.addEventListener('scroll', function(event) {
//     if(isInViewport(person)) {
//         alert("IN VIEW PORT!!!");
//     }  
// })
    $(window).on("load resize scroll", function() {
        $(".who-we-are-circle").each(function() {
        var windowTop = $(window).scrollTop();
        var elementTop = $(this).offset().top;
        var leftPosition = windowTop - elementTop + 150;
            $(this)
            .find(".person-with-label")
            .css({ left: leftPosition });
        });
    });

    $(window).on("load resize scroll", function() {
        $(".what-we-do-circle").each(function() {
        var windowTop = $(window).scrollTop();
        var elementTop = $(this).offset().top;
        var rightPosition = windowTop - elementTop + 150;
            $(this)
            .find(".person-riding-rocket")
            .css({ right: rightPosition });
        });
    });