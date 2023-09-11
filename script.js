function accept(){
        event.preventDefault();
        
        const name = $('#name').val();
        const surname = $('#surname').val();
        const success = document.getElementById("success");

        success.innerText = (name + " " + surname);

    };