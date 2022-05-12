const texts = document.querySelectorAll(".text");

texts.forEach( text => {
    text.innerHTML = text.textContent.replace(/\S/g, "<span>$&</span>");
})



 if(window.innerWidth > 500){
    
    anime.timeline({
        loop: true,
    
    })
    .add({
        targets: '.text span',
        translateY: [-600, 0],
        scale: [10, 1],
        opacity: [0, 1],
        easing: "easeOutExpo",
        duration: 1500,
        delay: anime.stagger(100)
    })
    
    .add({
        targets: '.text span',
        translateX: [0, -1000],
        scale: [1, 1],
        opacity: [1, 0],
        easing: "easeOutExpo",
        duration: 2000,
        delay: anime.stagger(100)
    })
    
    .add({
        targets: '.text span',
        translateX: [100, 0],
        scale: [1, 1],
        opacity: [0, 1],
        easing: "easeOutExpo",
        duration: 2000,
        delay: anime.stagger(100)
    })
    
    .add({
        targets: '.text span',
        translateX: [0, 0],
        scale: [1, 10],
        opacity: [1, 0],
        easing: "easeOutExpo",
        duration: 2000,
        delay: anime.stagger(100)
    })
 }else{
    anime.timeline({
        loop: true,
    
    })
    .add({
        targets: '.text span',
        translateY: [-100, 0],
        scale: [5, 1],
        opacity: [0, 1],
        easing: "easeOutExpo",
        duration: 1500,
        delay: anime.stagger(100)
    })
    
    .add({
        targets: '.text span',
        translateX: [0, -1000],
        scale: [1, 1],
        opacity: [1, 0],
        easing: "easeOutExpo",
        duration: 2000,
        delay: anime.stagger(100)
    })
    
    .add({
        targets: '.text span',
        translateX: [50, 0],
        scale: [1, 1],
        opacity: [0, 1],
        easing: "easeOutExpo",
        duration: 2000,
        delay: anime.stagger(100)
    })
    
    .add({
        targets: '.text span',
        translateX: [0, 0],
        scale: [1, 5],
        opacity: [1, 0],
        easing: "easeOutExpo",
        duration: 2000,
        delay: anime.stagger(100)
    })
 }