$(document).ready(function(){
    $(function(){
    $("#inputsearch").keyup(function(){
        var value = $(this).val();
        if (value.length >= 2){
            $.ajax({
                url: 'filter_provinces.php',
                data: {"data": value},
                success: function(response){
                    console.log(response);
                    $('.provinces ul').html('');
                    $.each(response, function(key, province){
                        updateList(province);
                    })
                }
            })
        };
    })
    function updateList(province){
        $('.provinces ul').append('<li data-id= "'+province.id+'">' + province.name + '</li>');
    }
    $('.provinces ul').on('click', 'li', function(){
        var id = $(this).data('id');
    })
})                                               
});