const allCross = document.querySelectorAll('.pannel-faq img');
console.log(allCross);


allCross.forEach(element => {

    element.addEventListener('click', function(){
        //console.log(this.src);

        
        const height = this.parentNode.parentNode.childNodes[3].scrollHeight;
        const currentChoice = this.parentNode.parentNode.childNodes[3];

        if(this.src.includes('plus')){
            this.src = './image/moins.png';
            gsap.to(currentChoice, {duration: 0.2, height: height + 40, opacity: 1, padding: '20px 15px'})
        } else if (this.src.includes('moins')){
            this.src = './image/plus.png';
            gsap.to(currentChoice, {duration: 0.2, height: 0, opacity: 0, padding: '0px 15px'})
        }
        
    })

})