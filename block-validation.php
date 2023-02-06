<?php

/*---===/ Sets Input Fields based on Object selection \===---*/
/*
    The purpose of this script is to provide form validation on the front end for ACF Block content, as Gutenberg
    does not do this natively.

    This is accomplished mostly through multiple redundant checks of the form, disabling the submit button
    if anything fails a validation check. It appears to be functional, albeit minimalist at this time due 
    to the need to write all validation feedback ourselves. Additionally, this doesn't make use of any 
    gutenberg methods to monitor for changes, and the redundant checks are largely to compensate for that.
    If that is even possible. Long story short, there's probably a better way to do this, but this will work.

    -- Mark

*/
function my_acf_input_admin_footer() {
?>
<script type="text/javascript">
(function($) {
    acf.add_action('ready', function($el) {
        // For some reason this did not trace all content, and was unsuitable for initialization.
    });
    // Copied from forum thread about bug.
    $(window).bind("load", function () {
        let form = $('.editor-styles-wrapper .is-root-container'),
            wrapper = $('.block-editor-block-list__layout'),
            editBlock;
            
        $('button.editor-post-publish-button.is-primary').attr('disabled', 'disabled');
        
        setTimeout(function() {
            editBlock = form.find('.wp-block');
            editBlock.each(function(e) {
                let ths = this;
                var observer = new MutationObserver(function(mutations) {
                    checkRequired(form);   
                });

                // Pass in the target node, as well as the observer options.
                observer.observe(ths, {
                    attributes:    true,
                    childList:     true,
                    characterData: true
                });
            });
            checkRequired(form);
            $(wrapper).on('DOMSubtreeModified', function(e) {
                checkRequired(form);
            })
        },3000);
    });
    
    function checkRequired(form) {
        let inputs = $(form).find('input, textarea, select'),
            requiredFields = [],
            tally = 0;
        for(var i = 0; i < inputs.length; i++) {
            if(inputs[i].getAttribute('required') !== null && inputs[i].getAttribute('required') !== false) {
                requiredFields.push(inputs[i]);
            }
            $(inputs[i]).off('input');
            $(inputs[i]).on('input', function(e) {
                liveValidate(e.currentTarget, form);
            });
        }

        $(requiredFields).each(function(e) {
            let valid = this.checkValidity();
            if(valid === false) {
                console.log($(this));
                tally++;
                if(this.classList.contains("validation-error") === false) {
                    this.classList.add("validation-error");
                }
            } else {
                this.classList.remove("validation-error");
            }
        });
        if(tally > 0) {
            console.log("Validation Failures: "+tally);
            $('button.editor-post-publish-button.is-primary').attr('disabled', 'disabled');
        } else {
            $('button.editor-post-publish-button.is-primary').removeAttr('disabled');
        }
    }
    
    function liveValidate(field, form) {
        let valid = field.checkValidity();
        console.log(valid);
        if(valid === false) {
            if(field.classList.contains("validation-error") === false) {
                checkRequired(form);
                field.classList.add("validation-error");
            }
        } else {
            field.classList.remove("validation-error");
            checkRequired(form);
        }
    }

})(jQuery);	
</script>
<?php         
}
add_action('acf/input/admin_footer', 'my_acf_input_admin_footer');