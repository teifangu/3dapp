class Drink {
    constructor(name, mesh, spot, high, head, moving, translation, rotation, scale) {
        this.name = name;
        this.mesh = mesh;
        this.spot = spot;
        this.high = high;
        this.head = head
        this.moving = moving;
        this.translation = translation;
        this.rotation = rotation;
        this.scale = scale;
    }
}




var sprite = new Drink("sprite", 0, false, false, true, false,"0 0 0", "0 0 0 0", "1.3 1.3 1.3");
var coke = new Drink("coke", 0, false, false, true, false,"0 0 0", "0 0 0 0", "1 1 1");
var drpepper = new Drink("drpepper", 0, false, false, true, false,"0 -1 0", "0 0 0 0", "1 1 1");

var tracker = [sprite, coke, drpepper];

var open = false;


function topView(drink) {
    reset(drink);
    document.getElementById(drink + '__top').setAttribute('set_bind', 'true');
}
function frontView(drink) {
    reset(drink);
    document.getElementById(drink + '__front').setAttribute('set_bind', 'true');
}
function backView(drink) {
    reset(drink);
    document.getElementById(drink + '__back').setAttribute('set_bind', 'true')
}

function bottomView(drink) {
    reset(drink);
    document.getElementById(drink + '__bottom').setAttribute('set_bind', 'true');

}
function leftView(drink) {
    reset(drink);
    document.getElementById(drink + '__left').setAttribute('set_bind', 'true');

}
function rightView(drink) {
    reset(drink);
    document.getElementById(drink + '__right').setAttribute('set_bind', 'true');

}
function reset(drink) {
    document.getElementById(drink + '__front').setAttribute('set_bind', 'false');
    document.getElementById(drink + '__back').setAttribute('set_bind', 'false');
    document.getElementById(drink + '__top').setAttribute('set_bind', 'false');
    document.getElementById(drink + '__bottom').setAttribute('set_bind', 'false');
    document.getElementById(drink + '__left').setAttribute('set_bind', 'false');
    document.getElementById(drink + '__right').setAttribute('set_bind', 'false');
}







function spinRight(drink) {
    if (document.getElementById(drink + '__clock').getAttribute('enabled') == 'true') {
        document.getElementById(drink + '__clock').setAttribute('enabled', 'false')

    } else {
        document.getElementById(drink + '__clock2').setAttribute('enabled', 'false')
        document.getElementById(drink + '__clock3').setAttribute('enabled', 'false')
        document.getElementById(drink + '__clock').setAttribute('enabled', 'true')
    }
}

function spinLeft(drink) {
    if (document.getElementById(drink + '__clock2').getAttribute('enabled') == 'true') {
        document.getElementById(drink + '__clock2').setAttribute('enabled', 'false')
    } else {
        document.getElementById(drink + '__clock').setAttribute('enabled', 'false');
        document.getElementById(drink + '__clock2').setAttribute('enabled', 'true');
        document.getElementById(drink + '__clock3').setAttribute('enabled', 'false')
    }
}

function spinUp(drink) {
    if (document.getElementById(drink + '__clock3').getAttribute('enabled') == 'true') {
        document.getElementById(drink + '__clock3').setAttribute('enabled', 'false')
    } else {
        document.getElementById(drink + '__clock').setAttribute('enabled', 'false');
        document.getElementById(drink + '__clock2').setAttribute('enabled', 'false')
        document.getElementById(drink + '__clock3').setAttribute('enabled', 'true');
    }
}

function findDrink(drink) {
    for (let i = 0; i < tracker.length; i++) {
        if (tracker[i].name == drink) {
            return tracker[i]
        }
    }
}

function showPoints(drink) {
    var type = findDrink(drink);
    var e = document.getElementById(drink + 'mesh');
    if (type.mesh == 0) {
        e.runtime.togglePoints(true);
    }
    if (type.mesh == 1) {
        e.runtime.togglePoints(true);
        e.runtime.togglePoints(true);
    }
    type.mesh = -1;

}


function showWire(drink) {
    var type = findDrink(drink);
    var e = document.getElementById(drink + 'mesh');
    if (type.mesh == 0) {
        e.runtime.togglePoints(true);
        e.runtime.togglePoints(true);
    }
    if (type.mesh == -1) {
        e.runtime.togglePoints(true);
    }
    type.mesh = 1;

}

function showFaces(drink) {
    var type = findDrink(drink);
    var e = document.getElementById(drink + 'mesh');
    if (type.mesh == 1) {
        e.runtime.togglePoints(true);
    }
    if (type.mesh == -1) {
        e.runtime.togglePoints(true);
        e.runtime.togglePoints(true);
    }
    type.mesh = 0;

}

function toggleSpot(drink) {
    var type = findDrink(drink);
    type.spot = !type.spot;
    document.getElementById(drink + '__spot').setAttribute('on',
        '' + type.spot)
}

function toggleHigh(drink) {
    var type = findDrink(drink);
    type.high = !type.high;
    document.getElementById(drink + '__high').setAttribute('on',
        '' + type.high);
}

function toggleHead(drink) {
    var type = findDrink(drink);
    type.head = !type.head;
    document.getElementById(drink + '__head').setAttribute('headlight',
        '' + type.head);
}

function movement(drink) {
    var type = findDrink(drink);
    type.moving = !type.moving;
    document.getElementById(drink + '__clock4').setAttribute('loop', '' + type.moving);

    if (type.name =="coke") {
        open=!open;
        if(open){
        document.getElementById('coke__coketexture').setAttribute('url','maps/canmap-hole.png');
        } else{
            document.getElementById('coke__coketexture').setAttribute('url','maps/canmap-notab.png');
        }
    }

}
function resetTransform(drink) {
    var type = findDrink(drink);
    var old = document.getElementById(drink + '__Container');
    old.setAttribute('translation', type.translation);
    old.setAttribute('rotation', type.rotation);
    old.setAttribute('scale', type.scale);
}

