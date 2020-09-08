function getAddress() {

    let ul = document.getElementById("address_list");
    ul.innerHTML = "";

    let input = document.getElementById("address").value;



    fetch("https://api-adresse.data.gouv.fr/search/?q="+input)
        .then(function(response) {
            return response.json();
        })

        .then(function(json) {
            console.log(json.features[0].properties.label);
            for(let i = 0; i<5; i++){
                let address_find = document.createElement("li");
                address_find.innerText = json.features[i].properties.label;
                // console.log(adresse_find);
                document.getElementById("address_list").appendChild(address_find);

                $(document).ready(function(){
                    $('li').css('margin-left','15px');
                    $('li').on('click',function(){
                        $('#address').val($(this).text());
                        $('li').css('display','none')
                    });

                });

            };
        });

};