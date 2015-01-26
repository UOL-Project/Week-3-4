/* 
 * UOL - Programming the Internet - Group Project
 * Week 3 - Assignment
 * Fabien Huraux
 * Joao Paulo Henriques Remedio  
 * Kevin Gargo 
 */

/* 
Use of title effect provided by https://github.com/jschr/textillate
 */

$(function () {  
    $('.tlt').textillate({  
        in: {  
            effect: 'flipInX',
            shuffle: 'true'
        },
        out:{effect: 'bounceOutRight',
        shuffle:'true'},
    loop:'true'
    });  
})  