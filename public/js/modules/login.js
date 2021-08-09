const validatorLogin = (contactForm, formReq, errorText) => {

    const form = document.getElementById(contactForm),
          reqs = document.querySelectorAll(formReq),
          text = document.querySelectorAll(errorText),
          register_btn = document.querySelectorAll('.register'),
          login_btn = document.querySelectorAll('.login'),
          logout_btn = document.querySelectorAll('.logout'),
          hello = document.querySelectorAll('.greetings');

    // Local
    let object = {balance: '2000'};

    if(form !== null) {
        form.addEventListener('submit', formSend);

        async function formSend(e) {
            e.preventDefault();
    
            let errorCount = checkForm(reqs, text);
    
            let data = new FormData(form);

            if(errorCount === 0) {

                data.forEach((value, key) => {
                    object[key] = value;
                });

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

                hello.forEach(item => {
                    item.style.display = 'block';
                    item.children[0].textContent = object.login;
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

            }
        }
    }
}

// TEST Fuction ----------------------------
function save(object) {
    localStorage.setItem('user', object);
}

function show(obj) {
    
    const balance = document.querySelectorAll('.balance-span'),
          hello = document.querySelectorAll('.greetings');

    balance.forEach((item) => {

        item.textContent = obj.balance;

    })

    hello.forEach(item => {
        item.style.display = 'block';
        item.children[0].textContent = obj.login;
    })

}

function loadBalance() {

    if(localStorage.getItem('user')) {
        let stageOne = JSON.parse(localStorage.getItem('user'));
        show(stageOne);
    }
}
// -----------------------------------------


const loginTest = (input) => {
    return !(/^[a-z,A-Z,0-9,_]+$/.test(input.value) || /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value));
}

const passwordTest = (input) => {
    return !/^[a-z,A-Z,0-9]+$/.test(input.value);
}

function checkForm(formReqs, text) {

    let error = 0;

    for(let index=0; index<formReqs.length; index++) {

        const input = formReqs[index];
        const inputText = text[index];
        removeError(input);

        inputText.style.display = 'none';

        if ( input.value === '') {
            addError(input);
            inputText.style.display = 'block';
            error++;

        } else if(input.classList.contains('_login')) {

            if (loginTest(input)) {
                addError(input);
                inputText.textContent = 'Неправильный ввод';
                inputText.style.display = 'block';
                error++;
            }
        } else if(input.classList.contains('_password')) {

            if(passwordTest(input) || input.value.length < 4) {
                addError(input);
                inputText.textContent = 'Неправильный ввод';
                inputText.style.display = 'block';
                error++;
            }

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


export default validatorLogin;