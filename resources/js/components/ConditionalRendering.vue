<!-- <template>
    <div class="conditional-rendering">
        <div class="block-1" v-if="isActive == false">
            This is block 1
        </div>
        <div class="block-2" v-if="isActive == true">
            This is block 2
        </div>
        <div>
            <button @click="toggleActive">De-active</button>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isActive: true
            }
        },
        methods: {
            toggleActive() {
                if(this.isActive == true) {
                    this.isActive = false
                }
                else {
                    this.isActive = true
                }
            }
        }
    };
</script>

<style lang="scss" scoped>
</style> --> <!-- V-if Khởi tạo biến ban đầu là true, click vào button sẽ đảo ngược kết quả, tác động đến template -->

<!-- <template>
    <div class="conditional-rendering">
        <div class="block-1" v-if="isActive == false">
            This is block 1
        </div>
        <div class="block-2" v-else>
            This is block 2
        </div>
        <div>
            <button @click="isActive = !isActive">Button</button>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isActive: true
            }
        }
    };
</script>

<style lang="scss" scoped>
</style> --> <!-- V-else Khởi tạo isActive là true, nếu click vào button, sẽ trả lại giá trị !isActive -->

<!-- <template>
    <div class="conditional-rendering">
        <div class="block-1" v-if="currentBlock == 1">
            This is block 1
        </div>
        <div class="block-2" v-else-if="currentBlock == 2">
            This is block 2
        </div>
        <div class="block-3" v-else>
            This is block 3
        </div>
        <div>
            <button @click="showBlock(1)">Button 1</button>
        </div>
        <div>
            <button @click="showBlock(2)">Button 2</button>
        </div>
        <div>
            <button @click="showBlock(3)">Button 3</button>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                currentBlock: 1
            }
        },
        methods: {
            showBlock(number) {
                this.currentBlock = number
            }
        }
    };
</script>

<style lang="scss" scoped>
</style> --> <!-- V-else-if Khởi tạo biến currentBlock = 1, mỗi khi click vào button sẽ thay chạy hàm showBlock(number) với từng giá trị 1 2 3, gán giá trị đấy vào biến currentBlock -->

<!-- <template>
    <div class="conditional-rendering">
        <div class="block-1" v-show="isActive == false">
            This is block 1
        </div>
        <div class="block-2" v-show="isActive == true">
            This is block 2
        </div>
        <div>
            <button @click="isActive = !isActive">Button</button>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isActive: true
            }
        }
    };
</script>

<style lang="scss" scoped>
</style> --> <!-- V-show Khởi tạo giá trị isActive = true, mỗi khi click trả về giá trị !isActive HIỆN TẠI -->

<!-- -v-if không render ngay ra toàn bộ các element mà tùy vào giá trị kiểm tra, còn với v-show sẽ render ra ngay từ đầu và chỉ quyết định có display nó hay không
-Từ kết quả trên chúng ta thấy rằng: nếu nội dung trong block mà ít, và trong quá trình sử dụng mà user sẽ tác động đến block nhiều thì dùng v-show sẽ cho tốc độ tốt hơn, còn nếu nội dung trong block mà nhiều cùng với nhiều xử lý hoặc nội dung của block ít thay đổi trong suốt vòng đời của component thì khi đó không nên dùng v-show vì lúc đó trang của chúng ta sẽ nặng làm giảm performance và ta cần nghĩ đến dùng v-if -->