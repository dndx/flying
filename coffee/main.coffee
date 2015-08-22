$ ->
    $.stellar()
    $('#sub').submit ->
        $email = $(this).children('input')
        if $email.val().indexOf('@') == -1
            $email.val($email.val() + '@iastate.edu')
        true
    $('header ul a').click ->
        $('html, body').animate
            scrollTop: $($.attr(this, 'href')[1..]).offset().top - 80
        , 500
        false
    $('#mute').click ->
        switch $(this).text()
            when 'Mute'
                player.mute()
                $(this).text 'Unmute'
            when 'Unmute'
                player.unMute()
                $(this).text 'Mute'
        false

    $(window).resize ->
        height = $(window).height()
        $('#youtube,#hero .text').height height - height * 0.05
        # $('#youtube iframe').height height
        $('.parallax').css 'min-height', height
        false
    .trigger  'resize'
    return
