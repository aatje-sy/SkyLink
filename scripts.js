const navLinks = document.getElementById("nav-links");
const navToggle = document.getElementById("nav-toggle");
const navClose = document.getElementById("nav-close");

/* nav show */
if (navToggle) {
  navToggle.addEventListener("click", () => {
    navLinks.classList.add("show-nav");
  });
}

/* nav hide */
if (navClose) {
  navClose.addEventListener("click", () => {
    navLinks.classList.remove("show-nav");
  });
}





document.addEventListener('DOMContentLoaded', function() {
    const locationInput = document.querySelector('.location-input');
    const vacationInfoInput = document.querySelector('.vacation-Info-Input');

    locationInput.addEventListener('input', function() {
        if (this.value.trim() !== '') {
            vacationInfoInput.classList.add('focused');
        } else {
            vacationInfoInput.classList.remove('focused');
        }
    });
});




(function () {
    var dateRange = $('.js-date-range');

    if (dateRange.length) {
        dateRange.each(function () {
            var _this = $(this),
                format = _this.data('format'),
                container = _this.data('container');

            _this.dateRangePicker({
                autoClose: true,
                format: format,
                container: container,
                showTopbar: false,
                stickyMonths: true,
                hoveringTooltip: false,
                customArrowPrevSymbol: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M14.207 7.793a1 1 0 0 1 0 1.414L11.414 12l2.793 2.793a1 1 0 0 1-1.414 1.414l-3.5-3.5a1 1 0 0 1 0-1.414l3.5-3.5a1 1 0 0 1 1.414 0z" fill="#777e91"/></svg>',
                customArrowNextSymbol: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M9.793 7.793a1 1 0 0 0 0 1.414L12.586 12l-2.793 2.793a1 1 0 0 0 1.414 1.414l3.5-3.5a1 1 0 0 0 0-1.414l-3.5-3.5a1 1 0 0 0-1.414 0z" fill="#777e91"/></svg>',
                getValue: function getValue() {
                    if ($('.js-date-from').val() && $('.js-date-to').val()) return $('.js-date-from').val() + $('.js-date-to').val();else return '';
                },
                setValue: function setValue(s, s1, s2) {
                    if ($('.js-date-from').attr('readonly') && $('.js-date-to').attr('readonly')) {
                        $('.js-date-from').val(s1);
                        $('.js-date-to').val(s2);
                    } else {
                        $('.js-date-from').val(s1);
                        $('.js-date-to').val(s2);
                    }
                },
                customOpenAnimation: function customOpenAnimation(cb) {
                    $(this).fadeIn(300, cb);
                },
                customCloseAnimation: function customCloseAnimation(cb) {
                    $(this).fadeOut(300, cb);
                }
            });

            // Set custom placeholder
            _this.attr('placeholder', 'Select a date range');
        });
    }
})();

//this is the check in input tye changer:



