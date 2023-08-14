<template>
  <div>
    <div id="top-wizard">
      <div id="progressbar"></div>
    </div>
    <!-- /top-wizard -->
    <form action="" method="POST" id="my-form">
      <!-- {{ errors }} -->
      <!-- Leave for security protection, read docs for details -->
      <div id="middle-wizard">
        <div v-if="step == '1'" class="step">
          <h3 class="main_question">
            <strong>1/2</strong>Signup below to be the one of the first to Go
            PUBLIQ
          </h3>
          <div class="form-group">
            <input
              type="text"
              name="firstname"
              class="form-control required"
              placeholder="First Name"
              v-model="form.firstname"
            />
            <Transition>
              <div
                v-if="'firstname' in errors"
                v-show="errormsg"
                class="text-danger pt-1"
              >
                {{ errors.firstname }}
              </div>
            </Transition>
          </div>

          <div class="form-group">
            <input
              type="text"
              name="lastname"
              class="form-control required"
              placeholder="Last Name"
              v-model="form.lastname"
            />
            <Transition>
              <div
                v-if="'lastname' in errors"
                v-show="errormsg"
                class="text-danger pt-1"
              >
                {{ errors.lastname }}
              </div>
            </Transition>
          </div>

          <div class="form-group">
            <input
              type="email"
              name="email"
              class="form-control required"
              placeholder="Your Email"
              v-model="form.email"
            />
            <Transition>
              <div
                v-if="'email' in errors"
                v-show="errormsg"
                class="text-danger pt-1"
              >
                {{ errors.email }}
              </div>
            </Transition>
          </div>

          <div class="form-group">
            <input
              type="password"
              name="password"
              class="form-control required"
              placeholder="Your password"
              v-model="form.password"
            />
            <Transition>
              <div
                v-if="'password' in errors"
                v-show="errormsg"
                class="text-danger pt-1"
              >
                {{ errors.password }}
              </div>
            </Transition>
          </div>

          <div class="form-group">
            <select
              class="form-control"
              name="country"
              v-model="form.country"
              required
            >
              <option selected value="">Your Region</option>
              <option value="Europe">Europe</option>
              <option value="Asia">Asia</option>
              <option value="North America">North America</option>
              <option value="South America">South America</option>
              <option value="Oceania">Oceania</option>
            </select>
            <Transition>
              <div
                v-if="'country' in errors"
                v-show="errormsg"
                class="text-danger pt-1"
              >
                {{ errors.country }}
              </div>
            </Transition>
          </div>

          <div class="row">
            <div class="col-3">
              <div class="form-group">
                <input
                  type="number"
                  class="form-control"
                  placeholder="Age"
                  min="10"
                  max="99"
                  v-model="form.age"
                />
              </div>
              <Transition>
                <div
                  v-if="'age' in errors"
                  v-show="errormsg"
                  class="text-danger pt-1"
                >
                  {{ errors.age }}
                </div>
              </Transition>
            </div>

            <div class="col-9">
              <div class="form-group radio_input">
                <label class="container_radio"
                  >Male
                  <input
                    type="radio"
                    v-model="form.gender"
                    value="Male"
                    class="required"
                  />
                  <span class="checkmark"></span>
                </label>
                <label class="container_radio"
                  >Female
                  <input
                    type="radio"
                    v-model="form.gender"
                    value="Female"
                    class="required"
                  />
                  <span class="checkmark"></span>
                </label>
              </div>
              <Transition>
                <div
                  v-if="'gender' in errors"
                  v-show="errormsg"
                  class="text-danger pt-1"
                >
                  {{ errors.gender }}
                </div>
              </Transition>
            </div>
          </div>

          <!-- /row -->
          <div class="form-group terms">
            <label class="container_check"
              >Please accept our
              <a href="#" data-toggle="modal" data-target="#terms-txt"
                >Terms and conditions</a
              >
              <input
                type="checkbox"
                v-model="form.terms"
                value="Yes"
                class="required"
              />
              <span class="checkmark"></span>
            </label>
            <Transition>
              <div
                v-if="'terms' in errors"
                v-show="errormsg"
                class="text-danger pt-1"
              >
                {{ errors.terms }}
              </div>
            </Transition>
          </div>
        </div>

        <div v-if="step == '2'" class="submit step">
          <h3 class="main_question">
            <strong>2/2</strong>How did you hear about our company?
          </h3>
          <div class="form-group">
            <label class="container_check version_2"
              >Google Search Engine
              <input
                type="checkbox"
                v-model="form.question_2"
                value="Google Search Engine"
                class="required uncheck"
              />
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="form-group">
            <label class="container_check version_2"
              >A friend of mine
              <input
                type="checkbox"
                v-model="form.question_2"
                value="A friend of mine"
                class="required uncheck"
              />
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="form-group">
            <label class="container_check version_2"
              >Print Advertise
              <input
                type="checkbox"
                v-model="form.question_2"
                value="Print Advertise"
                class="required uncheck"
              />
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="form-group">
            <label class="container_check version_2"
              >Newspaper
              <input
                type="checkbox"
                v-model="form.question_2"
                value="Newspaper"
                class="required uncheck"
              />
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="form-group">
            <label class="container_check version_2"
              >Other
              <input
                type="checkbox"
                v-model="form.question_2"
                id="home"
                value="Other"
                class="required"
              />
              <span class="checkmark"></span>
            </label>
            <div class="form-group" style="display: none" id="textarea">
              <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                rows="3"
                maxlength="250"
                v-model="form.additional_comments"
                placeholder="Additional Comments"
              ></textarea>
            </div>
          </div>
        </div>
        <!-- /step-->
      </div>
      <!-- /middle-wizard -->
      <div id="bottom-wizard">
        <button
          v-if="step == '2'"
          type="button"
          name="backward"
          v-on:click="backward"
          class="backward"
        >
          Prev
        </button>
        <button
          v-if="step == '1'"
          type="button"
          name="forward"
          v-on:click="forward"
          class="forward"
        >
          Next
        </button>
        <button v-if="step == '2'" type="submit" name="process" class="submit">
          Submit
        </button>
      </div>

      <!-- /bottom-wizard -->
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      step: "1",
      form: {
        firstname: null,
        lastname: null,
        email: null,
        password: null,
        country: null,
        age: null,
        gender: null,
        terms: null,
        question_2: [],
        additional_comments: null,
      },
      errors: {},
      errormsg: false,
    };
  },
  methods: {
    hideErrorMsg() {
      setTimeout(() => (this.errormsg = false), 2000);
    },
    forward(event) {
      if (
        this.form.firstname &&
        this.form.lastname &&
        this.form.email &&
        this.form.password &&
        this.form.gender &&
        this.form.country &&
        this.form.age &&
        this.form.terms
      ) {
        this.step = 2;
        return true;
      }

      this.errors = {};

      if (!this.form.firstname) {
        Vue.set(this.errors, "firstname", "First name is required.");
      }
      if (!this.form.lastname) {
        Vue.set(this.errors, "lastname", "Last name is required.");
      }
      if (!this.form.email) {
        Vue.set(this.errors, "email", "Email is required.");
      }
      if (!this.form.password) {
        Vue.set(this.errors, "password", "Password is required.");
      }
      if (!this.form.country) {
        Vue.set(this.errors, "country", "Country is required.");
      }
      if (!this.form.age) {
        Vue.set(this.errors, "age", "Age is required.");
      }
      if (!this.form.gender) {
        Vue.set(this.errors, "gender", "Gender is required.");
      }
      if (!this.form.terms) {
        Vue.set(this.errors, "terms", "Terms & Condition is required.");
      }
      this.errormsg = true;
      this.hideErrorMsg();
      //   alert(event.target.tagName);
    },
    backward(event) {
      this.step = 1;
    },
  },
};
</script>

<style>
.v-enter-active,
.v-leave-active {
  transition: opacity 0.5s ease;
}

.v-enter-from,
.v-leave-to {
  opacity: 0;
}
</style>
