'use strict'

class Clock {
    constructor() {
        // var EventEmitter = require('events').EventEmitter,
        //     inherits = require('util').inherits

        setInterval(() => {
            this.theTime();
        }, 1000);

        // inherits(Clock, EventEmitter)
    }

    theTime() {
        var date = new Date(),
            hrsAmPm = (date.getHours() > 12) ? (date.getHours() - 12) : date.getHours(),
            hrs = addZero(hrsAmPm),
            min = addZero(date.getMinutes()),
            sec = addZero(date.getSeconds()),
            ampm = (date.getHours() < 12) ? 'am' : 'pm',
            //msg = hrs + ':' + min + ':' + sec + ampm
            msg = `${hrs}:${min}:${sec}${ampm}`;

        function addZero(num) {
            return (num < 10) ? ('0' + num) : num;
        }

        return console.log(msg);
    }
}

module.exports = Clock;