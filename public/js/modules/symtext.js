const symText = (textareaID, span) => {

    const textarea = document.getElementById(textareaID),
          outputs = document.querySelectorAll(span);

    let spaceCount = 0;
    let enterCount = 0;
    let letterCount = 0;

    if((outputs[0] !== undefined) && (textarea !== null)) {

        function attachListener() {

            textarea.addEventListener('keyup', () => {
                outputs[0].textContent = textarea.value.length;
    
                spaceCount = 0;
                enterCount = 0;
                letterCount = 0;
                spaceCount = hasWhiteSpace(textarea.value);
                enterCount = hasEnter(textarea.value);
                letterCount = (textarea.value).countWords()+1
    
                String.prototype.countWords = function() {
                    return this.split(/\s+/).length-1;
                }
    
    
                outputs[1].textContent = (textarea.value.length - (spaceCount+enterCount));
                outputs[2].textContent = letterCount;
            });
        }
        attachListener();
    }

};


function hasWhiteSpace(string) {
    return (string.split(' ').length-1);
}

function hasEnter(string) {
    return (string.split('\n').length-1);
}

export default symText;