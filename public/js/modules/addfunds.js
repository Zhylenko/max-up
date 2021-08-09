
const addToBalance = (formID, regInputs, errorLabels) => {

    // HTML Elelemts
    const form = document.getElementById(formID),
          reqs = document.querySelectorAll(regInputs),
          labels = document.querySelectorAll(errorLabels);

    const radioElements = document.getElementsByName('pay-checkbox');
    const balance = document.querySelector('.cart-total-price');

    let object = {balance: 0};

    if(form !== null) {

        form.addEventListener('submit', formSend);

        async function formSend(e) {
            e.preventDefault();
           
            let errorCount = miniValidator(reqs, labels);
            let formData = new FormData(form);

            formData.forEach((item, key) => {
                object[key] = item;
            });
            delete object.checkbox;

            let json = JSON.stringify(object);


            if(errorCount === 0) {

                // Send Attribute
                const path = 'file.php';
                const headers = {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                };

                // TEST FUNCTION
                let localObj = JSON.parse(localStorage.getItem('user'));
                localObj.balance = (+localObj.balance) + (Math.round((+object.balance)/3));
                let newLocalObject = JSON.stringify(localObj);
                localStorage.setItem('user', newLocalObject);
                location.reload();
            
            }
            
        }
    }
};

const numberTest = (input) => {
    return !/^[0-9]+$/.test(input.value);
}

function miniValidator(formReq, labels) {

    let errors = 0;
    const checkbox = document.querySelector('.form-checkstyle');

    for(let index = 0; index < formReq.length; index++) {

        const input = formReq[index];
        const label = labels[index];
        removeError(input);
        checkbox.classList.remove('_error');

        label.style.display = 'none';

        if(input.value === '') {
            addError(input);
            label.style.display = 'block';
            errors++;
        } else if (input.classList.contains('_balance')) {

            if(numberTest(input)) {
                addError(input);
                label.textContent = 'Введите корректную сумму';
                label.style.display = 'block';
                errors++;
            }
        } else if(input.getAttribute('type') === 'checkbox' && input.checked === false) {
            addError(input);
            checkbox.classList.add('_error');
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

export default addToBalance;