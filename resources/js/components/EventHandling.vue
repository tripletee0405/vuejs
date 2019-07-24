<!-- <template>
    <div class="event-handling">
        <div>Current Number: {{ counter }}</div>
        <button @click="counter++">CLick</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                counter: 0
            }
        }
    };
</script>

<style lang="scss" scoped>
</style> --> <!-- in ra số lần click -->

<!-- <template>
    <div class="event-handling">
        <div>Current Number: {{ counter }}</div>
        <button @click="increaseCounter">CLick</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                counter: 0
            }
        },
        methods: {
            increaseCounter() {
                this.counter += 10
            }
        }
    };
</script>

<style lang="scss" scoped>
</style> --> <!-- Click chạy hàm increaseCounter(), truyền giá trị ban đầu cho biến counter = 0, giá trị tăng là +10 1 lần click -->

<!-- <template>
    <div class="event-handling">
        <div>Current Number: {{ counter }}</div>
        <button @click="increaseCounter(50)">Click</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                counter: 0
            }
        },
        methods: {
            increaseCounter(number) {
                this.counter += number
            }
        }
    };
</script>

<style lang="scss" scoped>
</style> --> <!-- truyền thẳng tham số khi gọi hàm, truyền giá trị ban đầu cho biến counter = 0, giá trị counter tăng theo giá trị truyền vào -->

<!-- Thay vì phải gọi event.preventDefault() hay event.stopPropagation() thì gọi click.stop-->

<!-- <template>
    <div class="event-handling">
        <div @click="alertHello">
            <button @click.stop="alertWelcome">Click</button>
        </div>
    </div>
</template>

<script>
    export default {
        methods: {
            alertHello() {
                alert('Hello')
            },
            alertWelcome() {
                alert('Welcome')
            }
        }
    };
</script>

<style lang="scss" scoped>
</style> --> <!-- click stop ở tag nào thì dừng hành động ở tất cả các tag ngoài nó -->

<!-- <template>
    <div class="event-handling">
        <form @submit.prevent="sayHello">
            <button type="submit">Submit</button>
        </form>
    </div>
</template>

<script>
    export default {
        methods:{
            sayHello(){
                alert('Hello')
            }
        }
    };
</script>

<style lang="scss" scoped>
</style> --> <!-- Thêm @submit.prevent thì click vào button k load lại trang nữa -->

<template>
    <div class="event-handling">
        <form>
            <!-- <button type="submit" @click.prevent="sayHello">Submit</button> --> <!-- thêm @submit.prevent vào button luôn -->
            <!-- <button type="submit" @click.stop.prevent="sayHello">Submit</button> --> <!-- Dùng đồng thời stop vào prevent -->
            <button type="submit" @click.once="sayHello">Submit</button><!-- chỉ thực hiện hành động một lần -->
        </form>
    </div>
</template>

<script>
    export default {
        methods: {
            sayHello() {
                alert('Hello')
            }
        }
    };
</script>

<style lang="scss" scoped>
</style>