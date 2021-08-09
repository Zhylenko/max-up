const validator = (contactForm, formReq, errorText) => {
    
    loadBalance();

    // HTML elements
    const form = document.getElementById(contactForm),
          reqs = document.querySelectorAll(formReq),
          text = document.querySelectorAll(errorText),
          register_btn = document.querySelectorAll('.register'),
          login_btn = document.querySelectorAll('.login'),
          logout_btn = document.querySelectorAll('.logout');

    // Local
    let object = {balance: '10000'};

    // Function for send form
    if(form !== null) {
        form.addEventListener('submit', formSend);

        async function formSend(e) {
            e.preventDefault();

            let errorCount = checkForm(reqs, text);

            let data = new FormData(form);

            if(errorCount === 0) {
                
                // Create JSON Object
                data.forEach((value, key) => object[key] = value);
                delete object.checkbox;
                let json = JSON.stringify(object);

                // Send Attribute
                const path = 'file.php';
                const headers = {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                };

                // Test Function --------------
                save(json);
                show(object);
                window.location = '/index.html';

                register_btn.forEach((item) => {
                    item.style.display = 'none';
                });

                login_btn.forEach((item) => {
                    item.style.display = 'none';
                })

                logout_btn.forEach(item => {
                    item.style.display = 'block';
                })


                // -----------------------------


                // let repsonse = await fetch(path, {
                //     method: "POST",
                //     body: json,
                //     headers: headers,
                // });

                // if(repsonse.ok) {
                //     let result = await response.json();
                //     console.log(result);
                //     window.location.href = '/index.html';
                // }

                text[1].style.display = 'none';

            }

        }
    }

};

// TEST Fuction ----------------------------
function save(object) {
    localStorage.setItem('user', object);
}

function show(obj) {
    
    const balance = document.querySelectorAll('.balance-span'),
          hello = document.querySelectorAll('.greetings'),
          ref_link = document.getElementById('ref-name');

    balance.forEach((item) => {

        item.textContent = obj.balance;

    })

    hello.forEach(item => {
        item.style.display = 'block';
        item.children[0].textContent = obj.login;
    })

    if(ref_link !== null) {
        ref_link.style.display = 'block';
        ref_link.children[0].textContent = obj.login;
    }

}

function loadBalance() {

    if(localStorage.getItem('user')) {
        let stageOne = JSON.parse(localStorage.getItem('user'));
        show(stageOne);
    }
}
// -----------------------------------------

const loginTest = (input) => {
    return !/^[a-z,A-Z,0-9,_]+$/.test(input.value);
}

const emailTest = (input) => {
    return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
}

const passwordTest = (input) => {
    return !/^[a-z,A-Z,0-9]+$/.test(input.value);
}

function checkForm(formReqs, text) {

    let error = 0;
    const checkbox = document.querySelector('.form-checkstyle');

    for(let index=0; index<formReqs.length; index++) {

        const input = formReqs[index];
        const inputText = text[index];
        removeError(input);
        checkbox.classList.remove('_error');

        inputText.style.display = 'none';

        if ( input.value === '') {
            addError(input);
            inputText.style.display = 'block';
            error++;

        } else if(input.classList.contains('_login')) {

            if (loginTest(input)) {
                addError(input);
                inputText.textContent = 'Логин может содержать только латинские буквы, цифры и символ _';
                inputText.style.display = 'block';
                error++;
            }
        } else if(input.classList.contains('_email')) {
            
            if(emailTest(input)) {
                addError(input);
                inputText.textContent = 'Указана неправильная почта';
                inputText.style.display = 'block';
                error++;
            }
        } else if(input.classList.contains('_password')) {

            if(passwordTest(input)) {
                addError(input);
                inputText.textContent = 'Пароль может содержать только латинские буквы и цифры';
                inputText.style.display = 'block';
                error++;
            }
            if(input.value.length < 4) {
                addError(input);
                inputText.textContent = 'Пароль должен быть не менее 4 символов';
                inputText.style.display = 'block';
                error++;
            }
        } else if(input.getAttribute("type") === "checkbox" && input.checked === false) {
            
            addError(input);
            checkbox.classList.add('_error');
            error++;
        }

    }

    return error;
}

function addError(input) {
    input.classList.add('_error');
}

function removeError(input) {
    input.classList.remove('_error');
}

export default validator;