const reviews = (formID, textClass, btnID) => {

    const form = document.getElementById(formID),
          textarea = document.querySelector(textClass),
          btn = document.getElementById(btnID);

    const label = document.querySelector('.form-error');

    let error = 0,
        comments = [];

    if(form !== null) {

        form.addEventListener('submit', (e) => {

            e.preventDefault();
            label.style.display = 'none';

            error = miniValidator(textarea);

            if(error === 1) {
                label.style.display = 'block';
            }

        })
    }
};

// Check for empty textarea
function miniValidator(input) {

    if(input.value === '') return 1;

    return 0;
}

export default reviews;