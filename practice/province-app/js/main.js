$(document).ready(function () {
    $(function () {
        $("#inputsearch").keyup(function () {
            var value = $(this).val();
            if (value.length >= 2) {
                $.ajax({
                    url: 'filter_provinces.php',
                    data: {"data": value},
                    success: function (response) {
                        console.log(response);
                        $('.provinces ul').html('');
                        $('.cities ul').html('');
                        $.each(response, function (key, province) {
                            updateProvinces(province, value)
                        });
                        if (response.length != 0) {
                            $('.provinces ul').append('<button type="button" class="btn btn-primary">' + response.length + '</button>');
                        } else {
                            $('.provinces ul').html('');
                            $('.provinces ul').append('<p>No se encontraron resultados</p>')
                        }
                    }
                })
            }
            ;
        })
        function updateProvinces(province, value) {
            $('.provinces ul').append('<li data-id= "' + province.id + '" class="list-group-item">' + '<b>' + (province.name).substr(0, value.length) + '</b>' + (province.name).substr(value.length) + '</li>');
        }
        $('.provinces ul').on('click', 'li', function () {
            var id = $(this).data('id');
            $.ajax({
                url: 'filter_cities.php',
                data: {"id": id},
                success: function (response) {
                    console.log(response);
                    $('.cities ul').html('')
                    $.each(response, function (key, city) {
                        updateCities(city)
                    });
                    if (response.length != 0) {
                        $('.cities ul').append('<button type="button" class="btn btn-primary">' + response.length + '</button>');
                    } else {
                        $('.cities ul').html('');
                        $('.cities ul').append('<p>No se encontraron ciudades para esta provincia</p>')
                    }
                }
            })
            function updateCities(city) {
                $('.cities ul').append('<li data-id= "' + city.id + '" class="list-group-item">' + city.name + '</li>');
            }
        })
    })
})