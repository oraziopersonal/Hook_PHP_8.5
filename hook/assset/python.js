const Form = {
  init(formSelector, options = {}) {
    const form = document.querySelector(formSelector);
    if (!form) return null;

    const config = {
      validate: null,
      onSubmit: null,
      ...options,
    };

    form.addEventListener('submit', async (event) => {
      event.preventDefault();

      if (typeof config.validate === 'function' && !config.validate(form, event)) {
        return;
      }

      const submitButton = form.querySelector('button[type="submit"], input[type="submit"]');
      if (submitButton) {
        submitButton.disabled = true;
      }

      try {
        const data = new FormData(form);

        if (typeof config.onSubmit === 'function') {
          await config.onSubmit(data, form, event);
        }
      } finally {
        if (submitButton) {
          submitButton.disabled = false;
        }
      }
    });

    return form;
  },

  serialize(form) {
    return Object.fromEntries(new FormData(form).entries());
  },

  reset(form) {
    if (form && typeof form.reset === 'function') {
      form.reset();
    }
  },
};

window.Form = Form;

export default Form;
