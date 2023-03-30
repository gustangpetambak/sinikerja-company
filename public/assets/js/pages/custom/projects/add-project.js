"use strict";

// Class definition
var KTProjectsAdd = function () {
	// Base elements
	var _wizardEl;
	var _formEl;
	var _wizard;
	var _avatar;
	var _validations = [];

	// Private functions
	var initWizard = function () {
		// Initialize form wizard
		_wizard = new KTWizard(_wizardEl, {
			startStep: 1, // initial active step number
			clickableSteps: true  // allow step clicking
		});

		// Validation before going to next page
		_wizard.on('beforeNext', function (wizard) {
			// Don't go to the next step yet
			_wizard.stop();

			// Validate form
			var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step
			validator.validate().then(function (status) {
				if (status == 'Valid') {
					_wizard.goNext();
					KTUtil.scrollTop();
				} else {
					Swal.fire({
						text: "Sorry, looks like there are some errors detected, please try again.",
						icon: "error",
						buttonsStyling: false,
						confirmButtonText: "Ok, got it!",
						customClass: {
							confirmButton: "btn font-weight-bold btn-light"
						}
					}).then(function () {
						KTUtil.scrollTop();
					});
				}
			});
		});

		// Change Event
		_wizard.on('change', function (wizard) {
			KTUtil.scrollTop();
		});
	}

	// Form Validation
	var initValidation = function () {
		// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
		// Step 1
		_validations.push(FormValidation.formValidation(
			_formEl,
			{
				fields: {
					companyname: {
						validators: {
							notEmpty: {
								message: 'Company name is required'
							}
						}
					},
					companysize: {
						validators: {
							notEmpty: {
								message: 'Please select a company size.'
							}
						}
					},
					industry: {
						validators: {
							notEmpty: {
								message: 'Please select an industry'
							}
						}
					},
					companyoverview: {
						validators: {
							notEmpty: {
								message: 'Please enter a brief company description.'
							},
							stringLength: {
								max: 255,
								message: 'Please limit the description to 255 characters'
							}
						}
					},
					companyphone: {
						validators: {
							notEmpty: {
								message: 'Please enter number phone.'
							}
							// phone: {
							// 	country: 'US',
							// 	message: 'The value is not a valid US phone number. (e.g 5554443333)'
							// }
						}
					},
					location: {
						validators: {
							notEmpty: {
								message: 'Please select the location of your office address.'
							}
						}
					},
					nib: {
						validators: {
							notEmpty: {
								message: 'Please enter a NIB company.'
							}
						}
					},
					// legal: {
					// 	validators: {
					// 		notEmpty: {
					// 			message: 'Please enter a legal ocument SIUP OR NPWP.'
					// 		}
					// 	}
					// },
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		));

		// Step 2
		_validations.push(FormValidation.formValidation(
			_formEl,
			{
				fields: {
					// Step 2
					communication: {
						validators: {
							choice: {
								min: 1,
								message: 'Please select at least 1 option'
							}
						}
					},
					language: {
						validators: {
							notEmpty: {
								message: 'Please select a language'
							}
						}
					},
					timezone: {
						validators: {
							notEmpty: {
								message: 'Please select a timezone'
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		));

		// Step 3
		_validations.push(FormValidation.formValidation(
			_formEl,
			{
				fields: {
					address1: {
						validators: {
							notEmpty: {
								message: 'Address is required'
							}
						}
					},
					postcode: {
						validators: {
							notEmpty: {
								message: 'Postcode is required'
							}
						}
					},
					city: {
						validators: {
							notEmpty: {
								message: 'City is required'
							}
						}
					},
					state: {
						validators: {
							notEmpty: {
								message: 'state is required'
							}
						}
					},
					country: {
						validators: {
							notEmpty: {
								message: 'Country is required'
							}
						}
					},
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		));
	}

	var initAvatar = function () {
		_avatar = new KTImageInput('kt_logo_companies');
		_avatar = new KTImageInput('kt_legal_selfie');
		_avatar = new KTImageInput('kt_legal_selfie_usaha');
		_avatar = new KTImageInput('kt_cover_company');
	}

	return {
		// public functions
		init: function () {
			_wizardEl = KTUtil.getById('kt_company_add');
			_formEl = KTUtil.getById('kt_company_add_form');

			initWizard();
			initValidation();
			initAvatar();
		}
	};
}();

jQuery(document).ready(function () {
	KTProjectsAdd.init();
});
