const seoText = (textareaClass, spanClass, listClass) => {

    // HTML Var
    const textarea = document.querySelector(textareaClass),
          outputs = document.querySelectorAll(spanClass),
          ulList = document.querySelector(listClass);
        
    // Local Var 
    let spaceCount = 0;
    let enterCount = 0;
    let letterCount = 0;
    let stroke = 0;

    // Prototypes
    String.prototype.countWords = function() {
        return this.split(/\s+/).length-1;
    }

        // Main Function
          if((outputs[0] !== undefined) && (textarea !== null)) {
            
            function attachListener() {

                textarea.addEventListener('keyup', (e) => {
        
                    spaceCount = 0;
                    enterCount = 0;
                    letterCount = 0;
                    stroke = 0;
                    spaceCount = hasWhiteSpace(textarea.value);
                    enterCount = hasEnter(textarea.value);
                    letterCount = (textarea.value).countWords()+1;
                    stroke = enterCount + 1;
        
                    outputs[0].textContent = textarea.value.length;
                    outputs[1].textContent = (textarea.value.length - (spaceCount+enterCount));

                    outputs[2].textContent = stroke;
                    outputs[3].textContent = letterCount;

                    dictionary(textarea.value, [ outputs[4], outputs[7] ], outputs[6], outputs[8], ulList, e);

                    if(textarea.value.length === 0) {
                        outputs[2].textContent = stroke-1;
                        outputs[3].textContent = letterCount-1;
                        outputs[6].textContent = 0;
                        outputs[8].textContent = 0;
                    }
                });
            }

            attachListener();

          }
};

// Check if has space
function hasWhiteSpace(string) {
    return (string.split(' ').length-1);
}

// Check if has stroke
function hasEnter(string) {
    return (string.split('\n').length-1);
}

// Dictionary
function dictionary(string, outputDictionary,outputUniqID ,outputUniq, ul, event) {

    let count = 0;

    let newString = string.replace(/[,.!\n]/g, ' ');
    let words = newString.toLowerCase().split(' ');

    let wordCounts = {};

    words.forEach(word => {
            wordCounts[word] = (wordCounts[word] || 0) + 1;
            delete wordCounts[''];
            delete wordCounts['\n'];
    });

    for (let key in wordCounts) {
        if(wordCounts[key] >= 1) {
            count++;
        }
    }

    outputDictionary.forEach(out => {
        out.textContent = count;
    });

    outputUniq.textContent = procentUniq(words, count);
    outputUniqID.textContent = uniqID(words, count);
    wordsList(words, ul, event);
}

// Counter for procent uniq
function procentUniq(array, counter) {

    let procent = 0;
    let newArray = [];
   
    array.forEach(value => {
        
        if(value !== '') {
            newArray.push(value);
        }
    })

    procent = (counter * 100) / newArray.length;

    return procent.toFixed(1);

}

// Counter for uniq id
function uniqID(array, counter) {

    let newArray = [];

    array.forEach(value => {
        
        if(value !== '') {
            newArray.push(value);
        }
    })

    return (newArray.length / counter).toFixed(1);
}

// List of words
function wordsList(array, ul, event) {

    let newArray = [];

    const contentFromUl = document.querySelectorAll('.text-item');
    let flag = true;
   
    array.forEach(value => {

            newArray.push(value);
   
    })

    const textarea = document.querySelector('.seo-textarea');

    for(let i=0; i < newArray.length; i++) {

        let li = document.createElement('li');
            li.setAttribute('class', 'text-item');
            li.textContent = newArray[i];

            if(event.code !== 'ControlLeft') {
    
                contentFromUl.forEach(item => {
                    
                    if(newArray[i] === item.textContent) {
                        flag = false;
                    }
                })
                    
                if(flag) {
                    li.textContent = newArray[i];
                    if(event.code === "Space") {
                        li.textContent = '';
                        ul.appendChild(li);
                    } else {
                        if(contentFromUl[0] === undefined) {
                            ul.appendChild(li);
                        } else {  
                            ul.removeChild(ul.lastElementChild);  
                            ul.appendChild(li);
                        }
                    }
    
                    if(event.code === 'Backspace' && contentFromUl[0] !== undefined && textarea.value !== ' ') {
                        if(li.textContent === '') {
                            ul.removeChild(ul.lastElementChild);
                        } else {
                            ul.removeChild(ul.lastElementChild);  
                            ul.appendChild(li);
                        }
                    }
                    
                }
    
                flag = true;
            } else {
                    
                if(contentFromUl[0] === undefined) {
                    ul.appendChild(li);
                } else {  
                    ul.removeChild(ul.lastElementChild);  
                    ul.appendChild(li);
                }

            }
    }

    if(contentFromUl[0] !== undefined) {
        if(textarea.value === '') {
            for(let i = 0; i<contentFromUl.length-1; i++) {
                ul.removeChild(ul.lastElementChild);  
            }
        }
    }

}

export default seoText;