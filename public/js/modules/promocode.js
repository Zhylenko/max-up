const promocode = (formID, reqClass, labelsClass) => {

    const form = document.getElementById(formID),
          req = document.querySelector(reqClass),
          label = document.querySelector(labelsClass);


    if(form !== null) {

        form.addEventListener('submit', formSend);

        async function formSend(e) {
            e.preventDefault();

            let errorCounter = miniValidator(req, label);

            console.log(errorCounter);
        }
    }
};

const loginTest = (input) => {
    return !/^[a-z,A-Z,0-9]+$/.test(input.value);
}

function miniValidator(req, textError) {
    let errors = 0;

    const input = req,
          label = textError;
    
    removeError(input);
    label.style.display = 'none';

    if(input.value === '') {
        addError(input);
        label.style.display = 'block';
        errors++;
    } else if(input.classList.contains('_promocode')) {

        if(loginTest(input)) {
            addError(input);
            label.textContent = 'неправильный промокод';
            label.style.display = 'block';
            errors++;
        }
    }

    return errors;
}


function addError(input) {
    input.classList.add('_error');
}

function removeError(input) {
    input.classList.remove('_error');
}

export default promocode;