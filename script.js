console.log ("click");

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
    
    
    const button = document.getElementById('btn');
    var el = document.getElementById('foto');  

    //var el = document.querySelector('#foto');
    /*console.log ("atribut "+ el);
    var imgMasiv = ["./Image/Foto_Alextop_220616_2_www.jpg", "./Image/Foto_Alextop_220627_4_www.jpg"];
    //console.log ("masiv "+ imgMasiv+ ", ");
    var result =["",""];
    var elAtribut = "";
    //console.log("length = "+ imgMasiv.length);

    //var elAtr = "";
    
    button.addEventListener('click', () => {
        console.log("click");
        elAtr = el.setAttribute("src", "./Image/Foto_Alextop_220627_4_www.jpg");

        for(let i=0; i<imgMasiv.length; i++){
            console.log("value 1 = "+imgMasiv[0])
            console.log("value 2 = "+imgMasiv[1])
            elAtribut = el.setAttribute("src", imgMasiv[i]);
            console.log("value elAtribut = "+ elAtribut );
            result[0]="./Image/Foto_Alextop_220616_3_www.jpg";
        }
        return elAtribut;
        return result;
    })*/
    //console.log("value = "+ el); 
    //console.log("result = "+ result);
    
    button.addEventListener('click', setAtribut);
          var el = document.getElementById('foto');  
    function setAtribut(){
        console.log("click");

            if (el.getAttribute("src") == "./Image/Foto_Alextop_220616_3_www.jpg"){
                el.setAttribute("src", "./Image/Foto_Alextop_220622_4.jpg"); 
                console.log("click2");
            }
            else{
                if(el.getAttribute("src") == "./Image/Foto_Alextop_220622_4.jpg"){
                    el.setAttribute("src", "./Image/Foto_Alextop_220627_4.jpg");
                }                        
                else{
                    /*if(el.getAttribute("src") == "./Image/Foto_Alextop_220622_4.jpg"){
                        el.setAttribute("src", "./Image/Foto_Alextop_220616_3_www.jpg");                    
                    }
                    console.log("el.getAttribute = "+ el.getAttribute("src"));
                    else{*/
                       el.setAttribute("src", "./Image/Foto_Alextop_220622_4.jpg");
                    //}
                }
            }
    }
        //el.setAttribute("src", "./Image/Foto_Alextop_220627_4.jpg");

    //console.log("value = "+ el.getAttribute); 
    /*function changeImage() {
        var el = document.querySelector("img");
        var at1 = el.setAttribute("src", "./Image/Foto_Alextop_220627_4_www.jpg");
        var at2 = el.getAttribute("src", "./Image/Foto_Alextop_220627_4_www.jpg");
        Console.log(at1, at2)
    }*/
