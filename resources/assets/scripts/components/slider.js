var Flickity = require('flickity');

const CONFIG = {
    ELEM : '.slider__carousel',
};

const Slider = {
    init() {
        const { ELEM } = CONFIG;
        this.slider =  new Flickity( ELEM, {
            pageDots: true,
            prevNextButtons: false,
            autoPlay: 8000,
            wrapAround: true,
            pauseAutoPlayOnHover: false,
        });

        this.slider.resize();
    },

    resize() {
        this.slider.resize();
    },
};

export default Slider;
