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
        //console.log("click");

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

    /* ----- Slider for assessment ----- */
   const sliderObj = document.getElementById("sliderId");
    const output = document.getElementById("valueId");
    console.log ("slider" + sliderObj+ "; value " + output );

    output.innerHTML = sliderObj.value;

    //console.log ("value.textContent" + value.textContent);
    sliderObj.oninput = function() {
        output.innerHTML = this.value;
    }
    console.log ("slider.oninput" + oninput);

    //-------Send message recruiter -----
    
    const buttonMesage = document.getElementById('btnMessage');
    buttonMesage.addEventListener('click', sendMessage);
    function sendMessage(){
        document.getElementById("message_recrut").
        innerHTML = "Thanks for your assessment my CV";
    }

    // ---- Burger menu ----
    function burgerMenu(selector) {
        let menu = $(selector);
        let button = menu.find('.burger-menu_button');
        let links = menu.find('.burger-menu_link');
        let overlay = menu.find('.burger-menu_overlay');

    button.on('click', (e) => {
        e.preventDefault();
        toggleMenu();
    });

    link.on('click', () => toggleMenu());
    overlay.on('click', () => toggleMenu());

        function toggleMenu() {
            menu.toggleClass('burger-menu_active');

            if(menu.hasClass('burger-menu_active')){
                $('body').css('overflow', 'hidden');
            } else{
                $('body').css('overflow', 'visible');
            }
        }
    }

    burgerMenu('.burger-menu');
