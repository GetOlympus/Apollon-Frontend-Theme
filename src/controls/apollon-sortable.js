wp.customize.controlConstructor['apollon-multicheck'] = wp.customize.Control.extend({
    ready: function () {
        'use strict';
        var control = this;

        // Set the sortable container
        control.sortableContainer = control.container.find('.apollon-sortable').first();

        // Init sortable
        control.sortableContainer.sortable({
            stop: function() {
                control.updateValue();
            }
        }).disableSelection();

        // Click event
        control.container.find('.apollon-handle').click(function() {
            control.updateValue();
        });
    },

    /**
     * Updates the sorting list
     */
    updateValue: function() {
        'use strict';

        var control = this,
            newValue = [];

        this.container.find('.apollon-handle input[type="checkbox"]').each(function() {
            if (jQuery(this).is(':checked')) {
                newValue.push(jQuery(this).val());
            }
        });

        control.setting.set(newValue);
    }
});
