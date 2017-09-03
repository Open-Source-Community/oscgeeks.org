$('select[name*="homepage_select"]').change(function(){


    // start by setting everything to enabled
    $('select[name*="homepage_select"] option').attr('disabled',false);

    // loop each select and set the selected value to disabled in all other selects
    $('select[name*="homepage_select"]').each(function(){
        var $this = $(this);
        $('select[name*="homepage_select"]').not($this).find('option').each(function(){
           if($(this).attr('value') == $this.val())
               $(this).attr('disabled',true);
        });
    });

});
