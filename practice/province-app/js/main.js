$(document).ready(function(){
    $(function(){
    $("#inputsearch").keyup(function(){
        var value = $(this).val();
        if (value.length >= 0){
            $.ajax({
                url: 'provinces.php',
                data: {"data": value},
                success: function(response){
                    $.each(response, function(value){
                        alert(value);
                    })
                }
            })
        };
    })
})                                               
});