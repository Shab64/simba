
    // ===============
    // Dropify
    // ===============
    $(function() {
        $('.dropify').dropify();
    });
    // ===============
    // Form Steps
    // ===============
    // $(function(){
    //     $("#wizard").steps({
    //         headerTag: "h4",
    //         bodyTag: "section",
    //         transitionEffect: "fade",
    //         enableAllSteps: false,
    //         transitionEffectSpeed: 500,
    //         onStepChanging: function (event, currentIndex, newIndex) {
    //             if ( newIndex === 1 ) {
    //                 $('.steps ul').addClass('step-2');
    //             } else {
    //                 $('.steps ul').removeClass('step-2');
    //             }
    //             if ( newIndex === 2 ) {
    //                 $('.steps ul').addClass('step-3');
    //             } else {
    //                 $('.steps ul').removeClass('step-3');
    //             }
    //             return true;
    //         },
    //         labels: {
    //             finish: "Confirm",
    //             next: "Next",
    //             previous: "Previous"
    //         }
    //     });
    // // Custom Steps Jquery Steps
    //     $('.wizard > .steps li a').click(function(){
    //         $(this).parent().addClass('checked');
    //         $(this).parent().prevAll().addClass('checked');
    //         $(this).parent().nextAll().removeClass('checked');
    //     });
    // // Custom Button Jquery Steps
    //     $('.forward').click(function(){
    //         $("#wizard").steps('next');
    //     })
    //     $('.backward').click(function(){
    //         $("#wizard").steps('previous');
    //     })
    // // Checkbox
    //     $('.checkbox-circle label').click(function(){
    //         $('.checkbox-circle label').removeClass('active');
    //         $(this).addClass('active');
    //     })
    // });


    // ===============
    // NiceSelect
    // ===============
    $(document).ready(function() {
        //$('select').niceSelect();
    });


    // ===============
    // DatePicker
    // ===============
    $(function() {
        $('input[name="dates"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 1901,
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'clear'
            },
            maxYear: parseInt(moment().format('YYYY'),10)
        });
        $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY'));
        });
    });
