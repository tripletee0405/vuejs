<!-- <template>
	<div class="list-rendering">
		
	</div>
</template>

<script>
    export default {
        data() {
            return {
                foods: [
                    { name: 'Hamburger' },
                    { name: 'Sandwich' },
                    { name: 'Chicken chop' },
                ]
            }
        }
    };
</script>

<style lang="scss" scoped>
</style> --> <!-- 1 mảng tên foods có 3 object -->

<!-- <template>
    <div class="list-rendering">
        <ul>
            <li v-for="food in foods">{{ foods.name }}</li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                foods: [
                    { name: 'Hamburger' },
                    { name: 'Sandwich' },
                    { name: 'Chicken chop' },
                ]
            }
        }
    };
</script>

<style lang="scss" scoped>
</style> --> <!-- Thay vì viết 3 thẻ <li> thì bh chỉ cần viết 1 thẻ vó v-for -->

<!-- <template>
    <div class="list-rendering">
        <ul>
            <li v-for="(food, index) in foods">
                {{ food.name }} - at index {{ index }}
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                foods: [
                    { name: 'Hamburger' },
                    { name: 'Sandwich' },
                    { name: 'Chicken chop' },
                ]
            }
        }
    };
</script>

<style lang="scss" scoped>
</style> --> <!-- in ra vị trí của từng object -->

<!-- <template>
    <div class="list-rendering">
        <ul>
            <li v-for="item of myInfo">
                {{ item }}
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                myInfo: {
                    name: 'Nguyễn Đình Tài',
                    age: '22',
                    country: 'Vietnam'
                }
            }
        }
    };
</script>

<style lang="scss" scoped>
</style> --> <!-- có thể dùng of thay vì in -->

<!-- <template>
    <div class="list-rendering">
        <ul>
            <li v-for="(value, key) of myInfo">
                {{ key }} : {{ value }}
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                myInfo: {
                    name: 'Nguyễn Đình Tài',
                    age: '22',
                    country: 'Vietnam'
                }
            }
        }
    };
</script>

<style lang="scss" scoped>
</style> --> <!-- in ra tên thuộc tính key và giá trị value -->

<!-- <template>
    <div class="list-rendering">
        <div>
          <span v-for="n in 10">{{ n }} </span>
      </div>
  </div>
</template>

<script>
export default {

};
</script>

<style lang="scss" scoped>
</style> --> <!-- in ra n từ 1 đến 10 -->

<!-- <template>
    <div class="list-rendering">
        <ul>
            <li v-for="todo in listCompleteTodo">
              {{ todo.name }} : {{ todo.isComplete }}
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                todos: [
                    {
                        name: 'to do 1',
                        isComplete: true
                    },
                    {
                        name: 'to do 2',
                        isComplete: false
                    },
                    {
                        name: 'to do 3',
                        isComplete: true
                    },
                ]
            }
        },
        computed: {
            listCompleteTodo() {
                return this.todos.filter(item =>item.isComplete == true)
            }
        }
    };
</script>

<style lang="scss" scoped>
</style> --> <!-- v-for chạy todo in hàm listCompleteTodo, hàm này là computed trả về giá trị filter isComplete = true -->