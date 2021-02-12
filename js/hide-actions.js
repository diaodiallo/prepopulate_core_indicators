(function ($, Drupal, drupalSettings) {
    Drupal.behaviors.myBehavior = {
        attach: function (context, settings) {

            var hideActions = function () {
                //let draft = jQuery("#edit-actions-draft");
                let submit = jQuery("#edit-actions-submit");

                let role = drupalSettings.user.role;
                if (role == 'country-edit') {
                    submit.hide();
                }
                // else if(role == 'country-review') {
                //  draft.hide();
                // }
            };

            hideActions();
        }
    };
})(jQuery, Drupal, drupalSettings);
