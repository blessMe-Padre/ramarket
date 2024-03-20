export const initLk = () => {
    const selectors = {
        input_box       : '.form-lk__field',
        input           : '.input_field',
        button_edit     : '.edit',
        button_submit   : '.submit',
        button_cancel   : '.cancel'
    };

    var input_value = '';

    jQuery('body')
        .on('click', selectors.button_edit, function(e)
        {
            const button_edit   = jQuery(e.currentTarget);
            const input_box     = button_edit.parents(selectors.input_box).eq(0);
            const input         = input_box.find(selectors.input);
            const button_submit = input_box.find(selectors.button_submit);
            const button_cancel = input_box.find(selectors.button_cancel);
            input_value         = input.val();

            input.prop('disabled', false).focus();
            button_edit.hide();
            button_submit.show();
            button_cancel.show();
        })
        .on('click', selectors.button_cancel, function(e)
        {
            const button_cancel = jQuery(e.currentTarget);
            const input_box     = button_cancel.parents(selectors.input_box).eq(0);
            const input         = input_box.find(selectors.input);
            const button_submit = input_box.find(selectors.button_submit);
            const button_edit   = input_box.find(selectors.button_edit);
            
            input.prop('disabled', true);
            button_submit.hide();
            button_cancel.hide();
            button_edit.show();
            input.val(input_value);
        });
};