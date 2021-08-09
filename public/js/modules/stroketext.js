const textStroke = (textareaID, span) => {

    const textarea = document.querySelector(textareaID),
          stroke = document.querySelector(span);

    if((stroke !== undefined) && (textarea !== null)) {
        
        function attachListener() {

            textarea.addEventListener('keyup', () => {

                String.prototype.countStroke = function() {
                    return (this.split('\n').length-1);
                }

                stroke.textContent = (textarea.value).countStroke()+1;

            })
        }

        attachListener();
    }

    
};

export default textStroke;