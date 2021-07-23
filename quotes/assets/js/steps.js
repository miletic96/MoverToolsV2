class FormWizard {
    constructor(prop_element = null, firstFields, prop_currentStepIdx = 0) {
        this.element = prop_element;
        this.steps = [...this.element.querySelectorAll('.js-step')];
        this.formControls = [...this.element.querySelectorAll('.js-form-control')];
        this.btnPrev = this.element.querySelector('.js-btn-prev');
        this.btnNext = this.element.querySelector('.js-btn-next');
        this.progressBar = this.element.querySelector('.js-progress-bar');
        this.currentStepIdx = prop_currentStepIdx;
        this.formButtons = this.element.querySelector('#form-buttons');
        this.btnSubmit = this.element.querySelector('#btn-submit');
        this.firstFields = firstFields;
        this.init();
    }

    init() {
        this.showStep(this.currentStepIdx);

        this.addEvents();
    }

    showStep(prop_stepIdx = 0) {
        const stepIdx = prop_stepIdx;

        this.steps[stepIdx].classList.add('is-active');
        this.btnPrev.classList[stepIdx === 0 ? 'remove' : 'add']('is-active');
        this.formButtons.classList[stepIdx === 0 ? 'remove' : 'add']('form-buttons-justify');
        // this.btnNext.innerText = this.btnNext.dataset[stepIdx === this.steps.length - 1 ? 'finalStepText' : 'stepText'];
        if (stepIdx === (this.steps.length - 1)) {
            this.btnNext.classList.add('step');
            this.btnSubmit.classList.add('submit-active');
        } else {
            this.btnNext.classList.remove('step');
            this.btnSubmit.classList.remove('submit-active');
        }
        this.updateProgressBar(stepIdx);
    }

    prevNext(prop_value = 0) {
        const value = prop_value;

        if (value === 1 && !this.validate()) {
            return false;
        }

        this.steps[this.currentStepIdx].classList.remove('is-active')
        this.currentStepIdx += value;

        if (this.currentStepIdx >= this.steps.length) {
            this.element.submit();
            return false;
        }

        this.showStep(this.currentStepIdx);
    }

    validate() {
        const currentStepRequiredElements = [...this.steps[this.currentStepIdx].querySelectorAll('[required]')];
        let valid = true;

        for (let element of currentStepRequiredElements) {
            if (element.value === null || element.value.trim() === '') {
                element.closest('.js-input-group').classList.add('has-error');
                valid = false;
            }
        }
        
            for (let field of this.firstFields) {
                if (field.id === "source_zip" || field.id === "destination_zip") {
                    const re = /\b\d{5}\b/g;
                    if (!re.test(field.value)) {
                        valid = false;
                    } 
                  }
            }
            for (let field of this.firstFields) {
                if (field.id === "move_date") {
                    const re = /[0-9]{4}\-[0-9]{2}\-[0-9]{2}/g;
                    if (!re.test(field.value)) {

                        valid = false;
                    } 
                  }
            }

        

        return valid;
    }

    clearErrors(e) {
        e.target.closest('.js-input-group').classList.remove('has-error');
    }

    updateProgressBar(prop_stepIdx = 0) {
        const percentage = prop_stepIdx / this.steps.length;

        this.progressBar.style.transform = `scaleX(${percentage === 0 ? '0.01' : percentage})`;
    }

    addEvents() {
        for (let formControl of this.formControls) {
            formControl.addEventListener('keyup', this.clearErrors.bind(this));
            formControl.addEventListener('change', this.clearErrors.bind(this));
        }

        this.btnPrev.addEventListener('click', this.prevNext.bind(this, -1));
        this.btnNext.addEventListener('click', this.prevNext.bind(this, 1));
    }
}

// ---

window.addEventListener('DOMContentLoaded', () => {
    window.formWizardObjs = {}
    const firstFields = [
        document.getElementById("first_name"),
        document.getElementById("source_zip"),
        document.getElementById("destination_zip"),
        document.getElementById("move_date"),
        
      ];
    const formWizards = [...document.querySelectorAll('.js-form-wizard')];

    if (formWizards.length) {
        for (let formWizard of formWizards) {
            formWizardObjs[formWizard.id] = new FormWizard(formWizard, firstFields);
        }
    }
})
