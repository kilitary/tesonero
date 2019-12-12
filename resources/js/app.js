require('./bootstrap')

$(function() {
    $('a').on('click', function(e) {
        var href = $(this).attr('href')
        window.alert(href)
    })
})
