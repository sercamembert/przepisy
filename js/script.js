const observer = new IntersectionObserver((enteries) => {
    enteries.forEach((entry) => {
        console.log(entry);
        
        if(entry.isIntersecting){
            entry.target.classList.add('show');
            
        }else{
            entry.target.classList.remove('show');
            entry.target.classList.toggle('show', entry.isIntersecting);
        }
    });
});


const hiddenElements = document.querySelectorAll('.sec-dish');
hiddenElements.forEach((el) => observer.observe(el));

