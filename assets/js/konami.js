/**
 * Konami detector by lostsh
 * lostsh.github.io
 */

let keySeq = new Array();
function clrTab(){for(i in keySeq+1){keySeq.pop();}}

// Key pressed detection
document.onkeydown = keys;
function keys(objectHandler){
    //console.log("[+] Pressed "+objectHandler.key+"\n");

    keySeq.push(objectHandler.key);
    if(detectCodeKonami(keySeq) == 0){
        displayGlitch();
    }
    //console.log(keySeq);
}


/**
 * Return 0 if the konami code was correctly typed else return 1
 * @param {*} keyTab tab of key sequance
 */
function detectCodeKonami(keyTab){
    if(isValide(keyTab)==0){//if the key seq correspond with konami code
        if(keyTab.length == 10){
            //console.log("Okey then the code is valide !");
            clrTab();
            return 0;
        }else{
            //console.log("The code isn't complete but not wrong yet");
        }
    }else{//when the sequance of key do not correspond to the code clear the tab
        //console.log("WRONG Clear the tab");
        clrTab();
    }
    return 1;
}

/**
 * Return 1 if the table contain a wrong key
 * and return 0 if all the keys in the tab are valide (even if the tab is not complette)
 * @param {*} tabOfKeys Key tab
 */
function isValide(tabOfKeys){
    let valideSeq = new Array("ArrowUp", "ArrowUp", "ArrowDown", "ArrowDown", "ArrowLeft", "ArrowRight", "ArrowLeft", "ArrowRight", "b", "a");
    for(var i=0;i<valideSeq.length;i++){
        if(valideSeq[i]!=tabOfKeys[i] && tabOfKeys[i]!="" && tabOfKeys[i]!=null){
            return 1;
        }
    }
    return 0;
}





function randInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
}

function displayGlitch(){
    const bodyElement = document.querySelector("body");
    window.scrollTo(0,0);
    bodyElement.style.overflow = "hidden";

    var div = document.createElement("div");
    div.style.position = "absolute";
    div.style.top = "0";
    div.style.left = "0";
    div.style.width = window.innerWidth+"px";
    div.style.height = window.innerHeight+"px";
    div.style.backgroundColor = "grey";
    div.style.opacity = "0.2";
    bodyElement.appendChild(div);

    //setInterval(glitchify(bodyElement), 200);
    //setInterval(glitchText(bodyElement), 200);
    //glitchify(bodyElement);
    glitchText(bodyElement);
}

function glitchify(bodyElement){
    for(var i=0;i<2820;i++){
        var glitchDiv = document.createElement("div");
        glitchDiv.className = "glitchBox";
        glitchDiv.style.position = "absolute";
        glitchDiv.style.backgroundColor = "black";
        bodyElement.appendChild(glitchDiv);
    }
    let glitchBoxes = document.getElementsByClassName('glitchBox');

    setInterval(function(){
        for(var i=0;i<glitchBoxes.length;i++){
            glitchBoxes[i].style.top = randInt(100)+"vh";
            glitchBoxes[i].style.left = randInt(99)+"vw";
            glitchBoxes[i].style.width = randInt(500)+"px";
            glitchBoxes[i].style.height = randInt(10)+"px";
            glitchBoxes[i].style.opacity = Math.random()*0.2;
        }
    }, randInt(1000));
}

function glitchText(bodyElement){
    var div = document.createElement("div");
    div.style.position = "absolute";
    div.style.top = window.innerHeight/15+"px";
    div.style.left = window.innerWidth/15+"px";
    div.style.width = window.innerWidth-(window.innerWidth/15)*2+"px";
    div.style.height = window.innerHeight-(window.innerHeight/15)*2+"px";
    div.style.backgroundColor = "black";
    div.style.backgroundImage = "url('./assets/image/logoappIlluminatiGlitch.png')";
    div.style.backgroundSize = "cover";
    div.style.opacity = "1";
    div.style.borderRadius = "7px";

    var p = document.createElement("p");
    p.style.margin = "1vh 1vw 1vh 1vw";
    p.style.fontFamily = "Arial";
    p.style.color = "white";
    p.style.fontSize = "3em";
    p.style.textAlign = "center";
    p.textContent = "Personne n’a jamais marché sur la Lune\r\n La Terre est plate\r\n Le monde est gouverné par des reptiliens";

    setInterval(function(){
        var shadowChoice = randInt(5);
        var textShadowValue = "";
        switch(shadowChoice){
            case 0:
                textShadowValue = "1px 1px yellow, 1px -1px red, -1px 1px blue";
                break;
            case 1:
                textShadowValue = "1px -1px yellow, 1px 1px red, -1px 1px blue";
                break;
            case 2:
                textShadowValue = "-1px 1px yellow, 1px -1px red, 1px 1px blue";
                break;
            case 3:
                textShadowValue = "-1px -1px yellow, 1px -1px red, -1px 1px blue";
                break;
            case 4:
                textShadowValue = "1px 1px yellow, -1px 1px red, -1px -1px blue";
                break;
            default:
                textShadowValue = "";
                break;
        }
        p.style.textShadow = textShadowValue;
    }, 150);

    div.appendChild(p);
    bodyElement.appendChild(div);
}