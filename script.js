// ---- Submenu on main menu------------

function openbox1(box1) {
    display = document.getElementById('box1').style.display;
        if (display == "none"){
            document.getElementById('box1').style.display = "block";
        }
        else {
            document.getElementById('box1').style.display = "none";
        }
    }

function openbox2(box2) {
        display = document.getElementById('box2').style.display;
            if (display == "none"){
                document.getElementById('box2').style.display = "block";
            }
            else {
                document.getElementById('box2').style.display = "none";
            }
        }

function openbox3(box3) {
        display = document.getElementById('box3').style.display;
            if (display == "none"){
                    document.getElementById('box3').style.display = "block";
            }
            else {
                    document.getElementById('box3').style.display = "none";
            }
    }
    
    // ---- CHange Photo - 3 times -----------
     const button = document.getElementById('btn');
    var el = document.getElementById('foto');     
    button.addEventListener('click', setAtribut);           
    function setAtribut(){
        console.log("click");

            if (el.getAttribute("src") == "./Image/Photo_0.jpg"){
                el.setAttribute("src", "./Image/Photo_1.jpg"); 
                console.log("click2");
            }
            else{
                if(el.getAttribute("src") == "./Image/Photo_2.jpg"){
                    el.setAttribute("src", "./Image/Photo_0.jpg");
                }                        
                else{
                       el.setAttribute("src", "./Image/Photo_2.jpg");
                }
            }
    }

    //console.log("value = "+ el.getAttribute); 
    /*function changeImage() {
        var el = document.querySelector("img");
        var at1 = el.setAttribute("src", "./Image/Foto_Alextop_220627_4_www.jpg");
        Console.log(at1, at2)
    }*/
