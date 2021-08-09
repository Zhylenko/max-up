
const newOrder = (formID, hiddenInputsClass ,inputsClass, labelsClass, spand, spanCalc) => {

    // HTML Vars
    const form = document.getElementById(formID),
          inputs = document.querySelectorAll(inputsClass),
          hiddenInputs = document.querySelectorAll(hiddenInputsClass),
          labels = document.querySelectorAll(labelsClass);

    const spanDop = document.querySelectorAll(spand),
          spanCalculateParent = document.querySelector(spanCalc);

        let notSpan = 0;

        if(spanDop.length === 0) notSpan++;

        if(notSpan === 0) {
            // Local Vars
            let orderObject = {};
            let calculatedSpan = [];
            let orderKeys = [];
            let amount = +(spanDop[2].textContent);
            let price = +(spanCalculateParent.children[2].textContent);
            let totalPrice = +(spanCalculateParent.children[3].textContent);

            // HTML to Local
            for(let index = 0; index < spanCalculateParent.children.length; index++) {
                calculatedSpan.push(spanCalculateParent.children[index]);
            }   
            calculatedSpan.splice(1, 1);

            spanDop.forEach((item) => {
                let newItem = item.textContent;
                orderKeys.push(newItem.replace(/\s+/g, ''));
            })

            let formAmount = +(orderKeys[2]);

            // Check form
            if(form !== null) {

                // Calculated Price
                function calculatePrice() {
                    const amountInput = inputs[1];

                    amountInput.addEventListener('keyup', () => {

                        if(amountInput.value === ''  || amountTest(amountInput)) {
                            calculatedSpan[0].textContent = 0;
                            calculatedSpan[2].textContent = 0;
                        } else {

                            totalPrice = ((amountInput.value * price*100)/100).toFixed(2);

                            calculatedSpan[0].textContent = amountInput.value;
                            calculatedSpan[2].textContent = totalPrice;
                        }

                    })

                }

                calculatePrice();

                form.addEventListener('submit', formSend);

                async function formSend(e) {
                    e.preventDefault();

                    let errorCount = validator(inputs, labels, formAmount);

                    let newTotalPrice = +(spanCalculateParent.children[3].textContent);

                    if(errorCount === 0) {

                        // Formatting Data to send
                        let formData = new FormData(form);

                        formData.forEach((value, key) => {
                            orderObject[key] = value;
                        })

                        orderObject['total-price'] = newTotalPrice;

                        let json = JSON.stringify(orderObject);

                        // Send Attribute
                        const path = 'file.php';
                        const headers = {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        };

                        // TEST
                        let cartObject = orderObject;
                        let cartArray = [];
                        
                        if(localStorage.getItem('add-to-cart')) {
                            cartArray = JSON.parse(localStorage.getItem('add-to-cart'));
                        }
                        cartArray.push(cartObject);
                        
                        console.log(cartArray);
                        localStorage.setItem('add-to-cart', JSON.stringify(cartArray));
                        // -------------------------------------------------------------
                    }
                }

            }

        }
};

function validator(inputs, labels, formAmount) {
    let error = 0;

    for(let index = 0; index < inputs.length; index++) {

        const input = inputs[index];
        const label = labels[index];
        removeError(input);

        label.textContent = 'Необходимо заполнить пустое поле';
        label.style.display = 'none';

        if(input.value === '') {
            addError(input);
            label.style.display = 'block';
            error++;
        } else if(input.classList.contains('_link')) {

            if(isValidHttpUrl(input.value) === false) {
                addError(input);
                label.textContent = 'Указана неверная ссылка';
                label.style.display = 'block';
                error++;
            }
        } else if(input.classList.contains('_amount')) {

            if(amountTest(input)) {
                addError(input);
                label.textContent = 'Указано неверное количество';
                label.style.display = 'block';
                error++;
            } else if(+(input.value) < formAmount) {
                addError(input);
                label.textContent = `Минимальное количество ${formAmount} шт.`;
                label.style.display = 'block';
                error++;
            }
        }
    }

    return error;
}

function amountTest(input) {
    return !/^[0-9]+$/.test(input.value);
}

function isValidHttpUrl(string) {
    let url;
    
    try {
      url = new URL(string);
    } catch (_) {
      return false;  
    }
  
    return url.protocol === "http:" || url.protocol === "https:";
}

function addError(input) {
    input.classList.add('_error');
}

function removeError(input) {
    input.classList.remove('_error');
}

export default newOrder;