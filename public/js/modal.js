let ajout = document.getElementById('ajout')
let modal = document.getElementById('modal')
let filename = document.getElementById('filename')
let inputfile = document.getElementById('image')
ajout.onclick = function() {
    modal.classList.add('is-active')
        document.getElementById('close').addEventListener('click',() =>{
            modal.classList.remove('is-active');
        })
}

inputfile.onchange = function() {
    (inputfile.files.length > 0)
    {
        filename.textContent = inputfile.files[0].name
    }
}

