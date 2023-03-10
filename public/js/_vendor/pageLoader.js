function ssc_init() {
    if (!document.body) { return; }
    var d = document.body;
    var b = document.documentElement;
    var f = window.innerHeight;
    var c = d.scrollHeight;
    ssc_root = document.compatMode.indexOf("CSS") >= 0 ? b : d;
    ssc_activeElement = d;
    ssc_initdone = true;
    if (top != self) {
        ssc_frame = true
    } else {
        if (c > f && (d.offsetHeight <= f || b.offsetHeight <= f)) {
            ssc_root.style.height = "auto";
            if (ssc_root.offsetHeight <= f) {
                var a = document.createElement("div");
                a.style.clear = "both";
                d.appendChild(a)
            }
        }
    }
    if (!ssc_fixedback) {
        d.style.backgroundAttachment = "scroll";
        b.style.backgroundAttachment = "scroll"
    }
    if (ssc_keyboardsupport) {
        ssc_addEvent("keydown", ssc_keydown)
    }
}

function ssc_scrollArray(d, b, f, c) {
    c || (c = 1000);
    ssc_directionCheck(b, f);
    ssc_que.push({
        x: b,
        y: f,
        lastX: b < 0 ? 0.99 : -0.99,
        lastY: f < 0 ? 0.99 : -0.99,
        start: +(new Date)
    });
    if (ssc_pending) {
        return
    }
    var a = function() {
        var y = +(new Date);
        var g = 0;
        var x = 0;
        for (var t = 0; t < ssc_que.length; t++) {
            var n = ssc_que[t];
            var j = y - n.start;
            var r = j >= ssc_animtime;
            var k = r ? 1 : j / ssc_animtime;
            if (ssc_pulseAlgorithm) {
                k = ssc_pulse(k)
            }
            var e = n.x * k - n.lastX >> 0;
            var q = n.y * k - n.lastY >> 0;
            g += e;
            x += q;
            n.lastX += e;
            n.lastY += q;
            if (r) {
                ssc_que.splice(t, 1);
                t--
            }
        }
        if (b) {
            var w = d.scrollLeft;
            d.scrollLeft += g;
            if (g && d.scrollLeft === w) {
                b = 0
            }
        }
        if (f) {
            var i = d.scrollTop;
            d.scrollTop += x;
            if (x && d.scrollTop === i) {
                f = 0
            }
        }
        if (!b && !f) {
            ssc_que = []
        }
        if (ssc_que.length) {
            setTimeout(a, c / ssc_framerate + 1)
        } else {
            ssc_pending = false
        }
    };
    setTimeout(a, 0);
    ssc_pending = true
}

function ssc_wheel(d) {
    if (!ssc_initdone) {
        ssc_init()
    }
    var b = d.target;
    var f = ssc_overflowingAncestor(b);
    if (!f || d.defaultPrevented || ssc_isNodeName(ssc_activeElement, "embed") || ssc_isNodeName(b, "embed") && /\.pdf/i.test(b.src)) {
        return true
    }
    var c = d.wheelDeltaX || 0;
    var a = d.wheelDeltaY || 0;
    if (!c && !a) {
        a = d.wheelDelta || 0
    }
    if (Math.abs(c) > 1.2) {
        c *= ssc_stepsize / 120
    }
    if (Math.abs(a) > 1.2) {
        a *= ssc_stepsize / 120
    }
    ssc_scrollArray(f, -c, -a);
}

function ssc_keydown(g) {
    var k = g.target;
    var d = g.ctrlKey || g.altKey || g.metaKey;
    if (/input|textarea|embed/i.test(k.nodeName) || k.isContentEditable || g.defaultPrevented || d) {
        return true
    }
    if (ssc_isNodeName(k, "button") && g.keyCode === ssc_key.spacebar) {
        return true
    }
    var b, f = 0,
        l = 0;
    var c = ssc_overflowingAncestor(ssc_activeElement);
    var j = c.clientHeight;
    if (c == document.body) {
        j = window.innerHeight
    }
    switch (g.keyCode) {
        case ssc_key.up:
            l = -ssc_arrowscroll;
            break;
        case ssc_key.down:
            l = ssc_arrowscroll;
            break;
        case ssc_key.spacebar:
            b = g.shiftKey ? 1 : -1;
            l = -b * j * 0.9;
            break;
        case ssc_key.pageup:
            l = -j * 0.9;
            break;
        case ssc_key.pagedown:
            l = j * 0.9;
            break;
        case ssc_key.home:
            l = -c.scrollTop;
            break;
        case ssc_key.end:
            var h = c.scrollHeight - c.scrollTop - j;
            l = h > 0 ? h + 10 : 0;
            break;
        case ssc_key.left:
            f = -ssc_arrowscroll;
            break;
        case ssc_key.right:
            f = ssc_arrowscroll;
            break;
        default:
            return true
    }
    ssc_scrollArray(c, f, l);
}

function ssc_mousedown(a) {
    ssc_activeElement = a.target
}

function ssc_setCache(b, a) {
    for (var c = b.length; c--;) {
        ssc_cache[ssc_uniqueID(b[c])] = a
    }
    return a
}

function ssc_overflowingAncestor(c) {
    var a = [];
    var d = ssc_root.scrollHeight;
    do {
        var b = ssc_cache[ssc_uniqueID(c)];
        if (b) {
            return ssc_setCache(a, b)
        }
        a.push(c);
        if (d === c.scrollHeight) {
            if (!ssc_frame || ssc_root.clientHeight + 10 < d) {
                return ssc_setCache(a, document.body)
            }
        } else {
            if (c.clientHeight + 10 < c.scrollHeight) {
                overflow = getComputedStyle(c, "").getPropertyValue("overflow");
                if (overflow === "scroll" || overflow === "auto") {
                    return ssc_setCache(a, c)
                }
            }
        }
    } while (c = c.parentNode)
}

function ssc_addEvent(b, a, c) {
    window.addEventListener(b, a, c || false)
}

function ssc_removeEvent(b, a, c) {
    window.removeEventListener(b, a, c || false)
}

function ssc_isNodeName(b, a) {
    return b.nodeName.toLowerCase() === a.toLowerCase()
}

function ssc_directionCheck(b, a) {
    b = b > 0 ? 1 : -1;
    a = a > 0 ? 1 : -1;
    if (ssc_direction.x !== b || ssc_direction.y !== a) {
        ssc_direction.x = b;
        ssc_direction.y = a;
        ssc_que = []
    }
}

function ssc_pulse_(c) {
    var a, d, b;
    c = c * ssc_pulseScale;
    if (c < 1) {
        a = c - (1 - Math.exp(-c))
    } else {
        d = Math.exp(-1);
        c -= 1;
        b = 1 - Math.exp(-c);
        a = d + b * (1 - d)
    }
    return a * ssc_pulseNormalize
}

function ssc_pulse(a) {
    if (a >= 1) {
        return 1
    }
    if (a <= 0) {
        return 0
    }
    if (ssc_pulseNormalize == 1) {
        ssc_pulseNormalize /= ssc_pulse_(1)
    }
    return ssc_pulse_(a)
}
var ssc_framerate = 150;
var ssc_animtime = 500;
var ssc_stepsize = 150;
var ssc_pulseAlgorithm = true;
var ssc_pulseScale = 6;
var ssc_pulseNormalize = 1;
var ssc_keyboardsupport = true;
var ssc_arrowscroll = 50;
var ssc_frame = false;
var ssc_direction = {
    x: 0,
    y: 0
};
var ssc_initdone = false;
var ssc_fixedback = true;
var ssc_root = document.documentElement;
var ssc_activeElement;
var ssc_key = {
    left: 37,
    up: 38,
    right: 39,
    down: 40,
    spacebar: 32,
    pageup: 33,
    pagedown: 34,
    end: 35,
    home: 36
};
var ssc_que = [];
var ssc_pending = false;
var ssc_cache = {};
setInterval(function() {
    ssc_cache = {}
}, 10 * 1000);
var ssc_uniqueID = function() {
    var a = 0;
    return function(b) {
        return b.ssc_uniqueID || (b.ssc_uniqueID = a++)
    }
}();
var ischrome = /chrome/.test(navigator.userAgent.toLowerCase());
if (ischrome) {
    ssc_addEvent("mousedown", ssc_mousedown);
    ssc_addEvent("mousewheel", ssc_wheel);
    ssc_addEvent("load", ssc_init);
}

$(function() {
    $('#loadhalaman').hide();
});
