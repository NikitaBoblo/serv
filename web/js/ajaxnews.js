$(document).ready(function () {

    var scrollPosition = 1;

    function getNews() {
        $.ajax({
            type: "post",
            url: "http://serv.loc/api/news/get/",
            dataType: 'json',
            data: {
                _csrf: yii.getCsrfToken()
            },
            success: function (json) {
                if (json === null){
                    console.log('no data');
                } else {
                    // console.log(json);
                    $.each( json, function (key, value) {
                        $('.news-box').append(
                        '<div class="col-lg-12 news-item" data-news-id="' + value.news_id + '">' +
                            '<h2>' + value.news_name + '</h2 >' +
                            '<p>' + value.news_text.substr(0, 500) + '...' + '</p>' +
                            '<a class="btn btn-default" data-news-id="' + value.news_id + '">Read more</a>' +
                        '</div >'
                        );

                    });
                    $('html, body').animate({
                        scrollTop: $('div[data-news-id="'+ scrollPosition +'"]').offset().top - $('nav').height()
                    },500);
                }
            },
            error: function (){
                console.log('some error');
            }
        })
    }
    getNews();


    function aclick(id){
        $.ajax({
            type: 'post',
            url: 'http://serv.loc/api/news/get/',
            dataType: 'json',
            data: {
                _csrf: yii.getCsrfToken(),
                id: id
            },
            success: function (json) {
                if (json === null){

                } else {
                    // console.log(json);
                    $('.news-item').remove();
                    $('.news-box').append(
                        '<div class="col-lg-12 news-item-single" >' +
                        '<h1 align="center">' + json.news_name + '</h1>' +
                        '<p>' + json.news_text + '</p>' +
                        '<a class="btn btn-default" data-btn-home="home">Home</a>' +
                        '</div >'
                    );
                    $('html, body').animate({
                        scrollTop: $('.wrap').first().offset().top
                    },500);

                }

            },
            error: function () {
                console.log('error');
            }
        })
    }

    $(document).on('click', '.news-item', function (e) {
        e.preventDefault();
        // scrollPosition = $(this).offset().top - $(this).parent().offset().top;
        scrollPosition = $(this).data('news-id');
        // console.log(scrollPosition);
        aclick($(this).data('news-id'));
    });

    $(document).on('click', 'a.btn', function () {
        if ($(this).data('btn-home') === 'home'){
            $('.news-item-single').remove();
            getNews();
        }
    })

});