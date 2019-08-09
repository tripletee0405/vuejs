<!-- <template>
    <div class="binding-html">
        <div class="text-title" :class="{active: isActive}">
            This is text
        </div>
        <div>
            <button @click="isActive = true">Active text</button>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isActive: false
            }
        }
    };
</script>

<style lang="scss" scoped>
.active {
    color: red;
}
</style> --> <!-- khởi tạo hàm isActive = false, khi click vào button thì isActive = true, div sẽ đc gán class active{ color: red;} -->

<!-- <template>
    <div class="binding-html">
        <div class="text-title" :class="{active: isActive, hide: isHide, bold: isBold}">
            This is text
        </div>
        <div>
            <button @click="isActive = true">Active text</button>
        </div>
        <div>
            <button @click="isHide = true">Hide text</button>
        </div>
        <div>
            <button @click="isBold = true">Bold text</button>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isActive: false,
                isHide: false,
                isBold: false
            }
        }
    };
</script>

<style lang="scss" scoped>
.active {
    color: red;
}
.hide {
    display: none;
}
.bold {
    font-weight: bold;
}
</style> --> <!-- bind nhiều class -->

<!-- <template>
    <div class="binding-html">
        <div class="text-title" :class="[activeClass, boldClass]">
            This is text
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                activeClass: 'active',
                boldClass: 'bold'
            }
        }
    };
</script>

<style lang="scss" scoped>
.active {
    color: red;
}
.hide {
    display: none;
}
.bold {
    font-weight: bold;
}
</style> --> <!-- truyền 1 array vào class -->

<!-- <template>
    <div class="binding-html">
        <div class="text-title" :class="classObject">
            This is text
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                classObject:{
                    active: true,
                    bold: true,
                }
            }
        }
    };
</script>

<style lang="scss" scoped>
.active {
    color: red;
}
.hide {
    display: none;
}
.bold {
    font-weight: bold;
}
</style> --> <!-- class có thể là 1 object -->

<template>
    <div class="binding-html">
        <div class="text-title" :style="{backgroundColor: color}">
            This is text
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            color: 'blue'
        }
    }
};
</script>

<style lang="scss" scoped>
.active {
    color: red;
}
.hide {
    display: none;
}
.bold {
    font-weight: bold;
}
</style>
