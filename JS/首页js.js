/**
 * Created by tonghongxiang on 2017/6/24.
 */
window.onload=function () {

        $("#box2").load("test.php",{name1: '童书'});
    $("#ranking1").load("ranking1.php");
    $("#ranking2").load("ranking2.php");
    $("#ranking3").load("ranking3.php");
    $("#ranking4").load("ranking4.php");
    $("#ranking5").load("ranking5.php");
    $("#ranking6").load("ranking6.php");
    $("#put_on").load("put_on.php");
    $("#container10").load("add_car.php");
    var box1 = document.getElementById('container');
    var app = document.getElementsByClassName('p_all');  //取标签<img>的数据放入数组 'app' 中。
    var aip = document.getElementsByTagName('input'); //同上原理
    var tosca = document.getElementsByTagName('span'); //同上原理
    var ali = document.getElementsByClassName('li1');
    var prex = aip[0];
    var next = aip[1];
    console.log(ali);
    var timer;
    var arr = []; //创建空数组。


    for (var i = 0; i < app.length; i++) {
        arr.push([getStyle(tosca[i], 'font-size'), getStyle(app[i], 'z-index'),
            getStyle(tosca[i], 'color'), getStyle(ali[i], 'background-color'),getStyle(app[i], 'background-color')]);
    }   //for循环，遍历数据加入arr[]数组，arr[[a,b][c,d]..... ]

    function show1(a) {
        for (var i = 0; i < app.length; i++) {
            app[i].style.zIndex = 1;
            tosca[i].style.color= '#000000';
            tosca[i].style.fontSize='16px';
            ali[i].style.backgroundColor='';
            //box1[i].style.backgroundColor='';
        }
        app[a].style.zIndex = 2;
        tosca[a].style.color='red';
        tosca[a].style.fontSize='25px';
        ali[a].style.backgroundColor='white';
        //box1[a].style.backgroundColor='white';
    }


    tosca[0].onmouseover = function (e) {
        if (!e) e = window.event;
        var reltg = e.relatedTarget ? e.relatedTarget : e.toElement;
        while (reltg && reltg != this) reltg = reltg.parentNode;
        if (reltg != this) {
            show1(0);
            box1.style.backgroundColor='#f3a351';
        }
    };
    tosca[1].onmouseover = function (e) {
        if (!e) e = window.event;
        var reltg = e.relatedTarget ? e.relatedTarget : e.toElement;
        while (reltg && reltg != this) reltg = reltg.parentNode;
        if (reltg != this) {
            show1(1);
            box1.style.backgroundColor='#f9f9e4';
        }
    };
    tosca[2].onmouseover = function (e) {
        if (!e) e = window.event;
        var reltg = e.relatedTarget ? e.relatedTarget : e.toElement;
        while (reltg && reltg != this) reltg = reltg.parentNode;
        if (reltg != this) {
            show1(2);
            box1.style.backgroundColor='#ee619b';
        }
    };
    tosca[3].onmouseover = function (e) {
        if (!e) e = window.event;
        var reltg = e.relatedTarget ? e.relatedTarget : e.toElement;
        while (reltg && reltg != this) reltg = reltg.parentNode;
        if (reltg != this) {
            show1(3);
            box1.style.backgroundColor='#4d4134';
        }
    };
    tosca[4].onmouseover = function (e) {
        if (!e) e = window.event;
        var reltg = e.relatedTarget ? e.relatedTarget : e.toElement;
        while (reltg && reltg != this) reltg = reltg.parentNode;
        if (reltg != this) {
            show1(4);
            box1.style.backgroundColor='#6b1218';
        }
    };
    function play() {
        timer = setInterval(function () {
            next.onclick();
        }, 5000);
    }

    function stop() {
        clearInterval(timer);
    }

    box1.onmouseout = function (e) {
        if (!e) e = window.event;
        var reltg = e.relatedTarget ? e.relatedTarget : e.toElement;
        while (reltg && reltg != this) reltg = reltg.parentNode;
        if (reltg != this) {
            play();
        }
    };
    box1.onmouseover = function (e) {
        if (!e) e = window.event;
        var reltg = e.relatedTarget ? e.relatedTarget : e.fromElement;
        while (reltg && reltg != this) reltg = reltg.parentNode;
        if (reltg != this) {
            stop();
        }
    };



    prex.onclick = function () {
        arr.push(arr[0]);
        arr.shift();
        //console.log(arr);
        for (var i = 0; i < app.length; i++) {
            tosca[i].style.fontSize = arr[i][0];
            app[i].style.zIndex = arr[i][1];
            tosca[i].style.color = arr[i][2];
            ali[i].style.backgroundColor=arr[i][3];
            box1.style.backgroundColor=arr[i][4];
        }
    };

    next.onclick = function () {
        arr.unshift(arr[4]);
        arr.pop();
        //console.log(arr);
        for (var i = 0; i < app.length; i++) {
            tosca[i].style.fontSize = arr[i][0];
            app[i].style.zIndex = arr[i][1];
            tosca[i].style.color = arr[i][2];
            ali[i].style.backgroundColor=arr[i][3];
            box1.style.backgroundColor=arr[i][4];
        }
    };
};
function getStyle(obj, attr) {
    if (obj.currentStyle) {
        return obj.currentStyle[attr];
    }
    else {
        return getComputedStyle(obj, false)[attr];
    }
}

function onc() {
    document.getElementById("container4").scrollIntoView(true);
}


/*function clickImg(e) {
    var c = $(e.target).attr('id');
    alert(c);
    var c = $(e.target).attr('id');
    /!*获取点击事件的ID*!/
    $.ajax({
        url: "add_look_num.php",
        type: "POST",
        data: {name3: c}
    });
}*/
