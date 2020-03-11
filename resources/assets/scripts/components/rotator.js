var Flickity = require('flickity');

const CONFIG = {
    ELEM : '.rotator',
    ELEM2: 'tab',
    CLASS:{
        ADD:'-is-active',
        HOLD:'-on-hold',
    },
};

const rotator = {
    init() {
        const { ELEM, ELEM2, CLASS } = CONFIG;
        this.elem2 = document.querySelectorAll(`[${ELEM2}]`);
        this.addClass = CLASS.ADD;
        this.holdClass = CLASS.HOLD;
        this.rotator =  new Flickity( ELEM, {
            pageDots: false,
            wrapAround: true,
            prevNextButtons: true,
        });
         var oldindex=0;
         var max=this.elem2.length - 1;
        this.rotator.resize();

        this.rotator.on( 'change', ($i) => {
            console.log(this.elem2);
            if(oldindex!=$i){


                if(oldindex<$i){ //prawo

                    if(oldindex == 0){
                        this.holdController(0);
                    }

                    else {
                        this.holdController($i-1);
                    }
                }else{
                    if(oldindex == max){
                        this.holdController(max);
                    }

                    else {
                        this.holdController($i+1);
                    }
                }
                oldindex=$i;
            }
            this.elem2.forEach((element, index) => {
                setTimeout(() => {
                  if (index == $i) element.classList.add(this.addClass);
                  else element.classList.remove(this.addClass);
                },500);

                setTimeout(() => {
                  element.classList.remove(this.holdClass);
                }, 600);
              });

        });


    },

    holdController(active) {
        this.elem2[active].classList.add(this.holdClass);
      },

    resize() {
        this.rotator.resize();
    },



};

export default rotator;
