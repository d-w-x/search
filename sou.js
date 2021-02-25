/*
作者:D.Young
主页：https://yyv.me/
github：https://github.com/5iux/sou
日期：2020/11/18
重写: dwxh
日期: 2021年2月25日
版权所有，请勿删除
*/

document.addEventListener("DOMContentLoaded", function () {
    let wid = document.body.offsetWidth;
    if (wid > 640) {
        document.getElementById("wd").focus();
    }

    document.getElementById("menu").addEventListener("click", function () {
        toggleClass(this, 'on');
        toggleClass(document.getElementById("list"), 'closed');
        toggleClass(document.getElementById("wth"), 'hidden');
    })

    document.getElementById("content").addEventListener("click", function () {
        removeClass(document.getElementById("menu"), 'on');
        addClass(document.getElementById("list"), 'closed');
        removeClass(document.getElementById("wth"), 'hidden');
        document.getElementById("word").style.display = 'none';
    })


    document.getElementById("wd").addEventListener("keyup", function () {
        let keywords = this.value;
        if (keywords === '') {
            document.getElementById("word").style.display = 'none';
        } else {
            let osc = document.createElement("script");  /*创建一个script标签*/
            osc.src = "https://suggestion.baidu.com/su?cb=handleSuggestion&wd=" + keywords;
            osc.id = "osc";
            /*srcipt的src值引入百度的url,然后将otext文本框中输入的内容连接到url,在后面在运行自己的方法*/
            document.body.appendChild(osc);
        }
    })
});

function handleSuggestion(data) {
    let wordElement = document.getElementById("word");
    while (wordElement.firstChild) wordElement.removeChild(wordElement.firstChild);
    if (data.s.length === 0) {
        wordElement.style.display = 'none';
    } else {
        wordElement.style.display = 'block';
        data.s.forEach((item) => {
            wordElement.insertAdjacentHTML('afterbegin', '<li class="select-items"><svg class="icon" style=" width: 15px; height: 15px; opacity: 0.5;" aria-hidden="true"><use xlink:href="#icon-search"></use></svg> ' + item + '</li>');
        })
        document.querySelector('#word li').addEventListener('click', function () {
            document.getElementById("wd").value = this.innerText.trim();
            document.getElementById('word').style.display = 'none';
            document.querySelector('form').submit();
        });
    }
    document.body.removeChild(document.getElementById("osc"))
}

function hasClass(obj, cls) {
    return obj.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));
}

function addClass(obj, cls) {
    if (!this.hasClass(obj, cls)) obj.className += " " + cls;
}

function removeClass(obj, cls) {
    if (hasClass(obj, cls)) {
        let reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');
        obj.className = obj.className.replace(reg, ' ');
    }
}

function toggleClass(obj, cls) {
    if (hasClass(obj, cls)) {
        removeClass(obj, cls);
    } else {
        addClass(obj, cls);
    }
}
