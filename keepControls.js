


    document.querySelector('.titreNote').addEventListener('blur', function(element) {
        if(element.target.value==""){
            if(element.target.value==""){
               element.target.placeholder="Entrez le titre de la note ";
                element.target.classList.add("invalid-input");
                return false;
            }


        }
    })

    document.querySelector('.titreNote').addEventListener('focus', function (element) {
        element.target.placeholder = "Entrez le titre de la note";
        element.target.classList.remove("invalid-input");
        return true;
    })
    document.querySelector('.contenuNote').addEventListener('blur', function(element) {
        if(element.target.value==""){
            element.target.placeholder="Entrez le contenu de la note ";
            element.target.classList.add("invalid-input");
            return false;
        }

    })
    document.querySelector('.contenuNote').addEventListener('focus', function (element) {
        element.target.placeholder = "Entrez le contenu de la note";
        element.target.classList.remove("invalid-input");
        return true;
    })