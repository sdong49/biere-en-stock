function asc(){
    $.ajax({
        url:'index.php?action=adminMessageAsc',
        type:'GET',
        success: function(response){
            $("#messageTable tr:not(:first)").remove();
            $("#messageTable").append(response);
        }
    });
}

function desc(){
    $.ajax({
        url:'index.php?action=adminMessageDesc',
        type:'GET',
        success: function(response){
            $("#messageTable tr:not(:first)").remove();
            $("#messageTable").append(response);
        }
    });
}