<template>
    <section class="hero is-medium is-info is-bold">
      <img class="is-small-mountain animated slideInUp" 
          src="/img/background-contact-fredesk.png" 
          alt="about"
      >
      <div class="hero-body has-text-centered" style="padding-top:0">
        <div class="container">
        <div class="column is-8 is-offset-2">
                <h2 class="title is-2">Contact Form</h2>
                <h2 class="subtitle is-6 has-padding-bottom-2">
                    Thank you for your interest in my person and my services. <br>Please fill out the form below or e-mail me at
                    <a href="mailto:contact@fredesk.com">contact@fredesk.com</a> and I will get back to you promptly regarding your request.
                </h2>

        <form method="POST" action="/contact" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
            <div class="control">

              <div class="control is-grouped">
                <p class="control is-expanded">
                  <input v-model="form.name" class="input is-medium is-primary is-outlined" type="text" name="name" placeholder="Name" required>
                  <span class="help is-danger" v-if="form.errors.has('name')" v-text="enquiry.errors.get('name')"></span>
                </p>
                <p class="control is-expanded">
                  <input v-model="form.email" class="input is-medium is-primary is-outlined" type="email" name="email" placeholder="Email" required>
                  <span class="help is-danger" v-if="form.errors.has('email')" v-text="enquiry.errors.get('email')"></span>
                </p>
              </div>
            </div>
            <div class="control">
              <div class="control">
                <textarea v-model="form.message" class="textarea is-medium is-primary is-outlined" name="message" placeholder="Explain how can I help you" required></textarea>
                <span class="help is-danger" v-if="form.errors.has('message')" v-text="enquiry.errors.get('message')"></span>
              </div>
            </div>
            <div class="column is-6 is-offset-4">
                <div class="control">
                    <button :class="{ button: true, 'is-medium': true, 'is-send-message': true, 'is-loading': submitButtonLoading }">Send your message</button>
                </div>
            </div>
            
        </form>
        </div>
        </div>
      </div>
    </section>
</template>

<script>
    import Form from '../models/Form'
    import VueSweetAlert from 'vue-sweetalert'
    Vue.use(VueSweetAlert)

    export default {
        data() {
            return {
                form: new Form({
                    name: '',
                    email: '',
                    message: ''
                }),
                submitButtonLoading: false
            }
        }, 
        methods: {
            submitClicked() {
                self = this
                setTimeout(function() {
                    self.submitButtonLoading = false
                }, 2500)
            },
            alertSuccess() {
                this.$swal({
                    title: 'Thank you',
                    text: 'Your message was sent successfully.',
                    type: 'success',
                    timer: 2000,
                    showCloseButton: false,
                    showConfirmButton: false,
                })
            },
            onSubmit() {
                this.submitButtonLoading = true
                this.submitClicked()
                this.form.post('/contact')
                    .then(response => 
                        this.alertSuccess()
                    )

                }
            }
        }
</script>
