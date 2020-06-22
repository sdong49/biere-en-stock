

function getAdresse() {
            
    let ul = document.getElementById("adresse_liste");
    ul.innerHTML = "";

    let input = document.getElementById("address").value;

    
   
    fetch("https://api-adresse.data.gouv.fr/search/?q="+input)
    .then(function(response) {
        return response.json();
    })
    
    .then(function(json) {
        // console.log(json.features[0].properties.label);
        for(let i = 0; i<5; i++){
            let adresse_trouve = document.createElement("li");
            adresse_trouve.innerText = json.features[i].properties.label;
            // console.log(adresse_trouve);
            document.getElementById("adresse_liste").appendChild(adresse_trouve);

            $(document).ready(function(){
                $('li').on('click',function(){
                    $('#address').val($(this).text()); 
                    $('li').css('display','none')       
                });
                
            });    

        };
    });   

};

