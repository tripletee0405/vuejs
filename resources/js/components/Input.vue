<template>
    <div class="form-input-binding">
        <div class="text">
            {{ message }}
        </div>
        <div class="input-form">
            <!-- <input type="text" v-model="message" name=""> --> <!-- input -->
            <!-- <textarea name="" id="" cols="30" rows="10" v-model="message"></textarea> --><!-- textarea -->
            <!-- <input type="checkbox" v-model="message" name=""> --><!-- checkbox -->
            <!-- <input type="radio" v-model="message" value="one">
            <input type="radio" v-model="message" value="two"> --> <!-- radio -->
            <!-- <select v-model="message">
                <option disabled="">Choose one</option>
                <option :value="values.one">One</option>
                <option :value="values.two">Two</option>
            </select> --> <!-- select -->
            <!-- <input type="text" name="" :placeholder="placeholder" :value="value"> --> <!-- placeholder, value -->
            <!-- <input v-model.lazy="message" > --><!-- lazy -->
            <!-- <input type="number" v-model.lazy.number="message" name=""> --><!-- number -->
            <!-- <input type="text" v-model.lazy.trim="message" name=""> --><!-- trim -->
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                // message: '' //input, textarea, radio
                // message: false, //checkbox
                // message: '',
                // values: {
                //     one: 'This is One',
                //     two: 'This is Two'
                // }//select
                // message: '',
                // placeholder: 'This is placeholder',
                // value: 'This is value'//placeholder, value
                // message: '',//lazy
                // message: ''//number
                // message: ''//trim
            }
        }
    };
</script>

<style lang="scss" scoped>
</style>