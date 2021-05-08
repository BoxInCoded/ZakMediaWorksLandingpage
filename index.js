const _ = require('lodash');

const numbers = [32,31,1,2,5,62,155];

_.each(numbers, function (number, i){
    console.log(number);
});