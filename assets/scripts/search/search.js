
            var submitIcon = jQuery('.searchbox-icon');
            var inputBox = jQuery('.searchbox-input');
            var searchBox = jQuery('.searchbox');
            var isOpen = false;
            submitIcon.click(function(){
                if(isOpen === false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
                }
            });  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
            jQuery(document).mouseup(function(){
                    if(isOpen === true){
                        jQuery('.searchbox-icon').css('display','block');
                        submitIcon.click();
                    }
                });
     
            function buttonUp(){
                var inputVal = jQuery('.searchbox-input').val();
                inputVal = jQuery.trim(inputVal).length;
                if( inputVal !== 0){
                    jQuery('.searchbox-icon').css('display','none');
                } else {
                    jQuery('.searchbox-input').val('');
                    jQuery('.searchbox-icon').css('display','block');
                }
            }