var Flickity = require('flickity');


const CONFIG = {
    ELEM : '.rotator',
};

const rotator = {
    init() {
        const { ELEM } = CONFIG;
        this.rotator =  new Flickity( ELEM, {
            pageDots: false,
            wrapAround: true,
            prevNextButtons: true,
        });
        this.rotator.resize();
    },

    resize() {
        this.rotator.on( 'change', function() {
            console.log('1');

        });
        this.rotator.resize();
    },



};

export default rotator;
