const front = () =>{

    const a = document.querySelectorAll('a');

    a.forEach((link) => {

        let href = link.href;
        if((href.indexOf('docs')) === -1) {
            let newLink = `${href}.html`;

            link.addEventListener('click', (e)=>{
                e.preventDefault();
                window.location.href = newLink;
            });
        }
        // if (href.charAt(0) === '/') {
        // }
    });
}

export default front;