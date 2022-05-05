$(function(){
    
    //Живой поиск
    $('.who').bind("change keyup input click", function() {
        if(this.value.length >= 2){
            $.ajax({
                type: 'post',
                url: "/user/ajax/", //Путь к обработчику
                data: {'city':this.value},
                response: 'text',
                success: function(data){
                    $("#rcity").html(data).fadeIn(); //Выводим полученые данные в списке
                }
            })
        }
    })
    
    $("#rcity").hover(function(){
        $(".who").blur(); //Убираем фокус с input
    })
    
    //При выборе результата поиска, прячем список и заносим выбранный результат в input
    $("#rcity").on("click", "li", function(){
        s_user = $(this).text();
        $(".who").val(s_user); //деактивируем input, если нужно
        $("#rcity").fadeOut();
    })


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Живой поиск
    $('.whoutc').bind("change keyup input click", function() {
        if(this.value.length >= 2){
            $.ajax({
                type: 'post',
                url: "/user/ajax/", //Путь к обработчику
                data: {'utc':this.value},
                response: 'text',
                success: function(data){
                    $("#rutc").html(data).fadeIn(); //Выводим полученые данные в списке
                }
            })
        }
    })

    $("#rutc").hover(function(){
        $(".whoutc").blur(); //Убираем фокус с input
    })

    //При выборе результата поиска, прячем список и заносим выбранный результат в input
    $("#rutc").on("click", "li", function(){
        ss_user = $(this).text();
        $(".whoutc").val(ss_user); //деактивируем input, если нужно
        $("#rutc").fadeOut();
    })
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Живой поиск
    $('#idgameform').bind("change keyup input click", function() {
        if(this.value.length >= 2){
            $.ajax({
                type: 'post',
                url: "/user/ajax/", //Путь к обработчику
                data: {'gameform':this.value},
                response: 'text',
                success: function(data){
                    $("#rgameform").html(data).fadeIn(); //Выводим полученые данные в списке
                }
            })
        }
    })

    $("#rgameform").hover(function(){
        $("#idgameform").blur(); //Убираем фокус с input
    })

    //При выборе результата поиска, прячем список и заносим выбранный результат в input
    $("#rgameform").on("click", "li", function(){
        ss_user = $(this).text();
        $("#idgameform").val(ss_user); //деактивируем input, если нужно
        $("#rgameform").fadeOut();
    })

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Живой поиск
    $('#idgamexp').bind("change keyup input click", function() {
        if(this.value.length >= 2){
            $.ajax({
                type: 'post',
                url: "/user/ajax/", //Путь к обработчику
                data: {'gamexp':this.value},
                response: 'text',
                success: function(data){
                    $("#rgamexp").html(data).fadeIn(); //Выводим полученые данные в списке
                }
            })
        }
    })

    $("#rgamexp").hover(function(){
        $("#idgamexp").blur(); //Убираем фокус с input
    })

    //При выборе результата поиска, прячем список и заносим выбранный результат в input
    $("#rgamexp").on("click", "li", function(){
        ss_user = $(this).text();
        $("#idgamexp").val(ss_user); //деактивируем input, если нужно
        $("#rgamexp").fadeOut();
    })

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Живой поиск
    $('#idrole').bind("change keyup input click", function() {
        if(this.value.length >= 2){
            $.ajax({
                type: 'post',
                url: "/user/ajax/", //Путь к обработчику
                data: {'role':this.value},
                response: 'text',
                success: function(data){
                    $("#rrole").html(data).fadeIn(); //Выводим полученые данные в списке
                }
            })
        }
    })

    $("#rrole").hover(function(){
        $("#idrole").blur(); //Убираем фокус с input
    })

    //При выборе результата поиска, прячем список и заносим выбранный результат в input
    $("#rrole").on("click", "li", function(){
        ss_user = $(this).text();
        $("#idrole").val(ss_user); //деактивируем input, если нужно
        $("#rrole").fadeOut();
    })


})