<!--<template>
	<div class="index">
		<div>
			 {{ content }} 
		</div> 
	</div>

</template>

<script>
export default{
	data(){
		return {
			content: 'Component sử dụng binding data'
		}
	},
};
</script>

<style lang="scss" scoped>
.index {
	color: red;
}
</style>--> <!-- Trả về (return) content -->


<!-- <template>
	<div class="index">
		<div>
			{{ content }}
		</div> 
		<div>
			<button @click="sayHello">Click Me</button>
		</div>
	</div>

</template>

<script>
export default{
	data(){
		return {
			content: 'Component sử dụng binding data'
		}
	},
	methods: {
		sayHello(){
			alert('Hello Tài óc')
		}
	}

};
</script>

<style lang="scss" scoped>
.index {
	color: red;
}
</style> --> <!-- Click hiện thông báo -->

<!-- <template>
	<div class="index">
		<div>
			{{ content }}
		</div> 
		<div>
			<button @click="sayHello">Click Me</button>
		</div>
	</div>

</template>

<script>
export default{
	data(){
		return {
			content: this.sayHello()
		}
	},
	methods: {
		sayHello(){
			this.content = 'Bạn vừa click vào button'
		}
	}

};
</script>

<style lang="scss" scoped>
.index {
	color: red;
}
</style> --> <!-- Click vào button hiện nội dung -->

<!-- <template>
	<div class="index">
		<div>
			{{ content }}
		</div> 
	</div>

</template>

<script>
export default{
	data(){
		return {
			content: this.sayHello()
		}
	},
	methods: {
		sayHello(){
			return 'Tài óc chó'
		}
	}

};
</script>

<style lang="scss" scoped>
.index {
	color: red;
}
</style> --> <!-- Content gọi hàm sayHello(), sayHello() trả về nội dung 'Tài óc chó' -->

<!-- <template>
	<div class="index">
		<div>
			{{ sayHello() }}
		</div> 
	</div>

</template>

<script>
export default{
	data(){
		return {
			
		}
	},
	methods: {
		sayHello(){
			return 'Tài óc chó'
		}
	}

};
</script>

<style lang="scss" scoped>
.index {
	color: red;
}
</style> --> <!-- Nếu methods trả về giá trị, có thể truyền trực tiếp để hiển thị nội dung -->

<!-- <template>
	<div class="index">
		<div>
			{{ sayHello(content) }}
		</div> 
	</div>

</template>

<script>
export default{
	data(){
		return {
			content: 'đây là text'
		}
	},
	methods: {
		sayHello(text){
			return text.toUpperCase()
		}
	}

};
</script>

<style lang="scss" scoped>
.index {
	color: red;
}
</style> --> <!-- Gọi content chạy với hàm sayHello() in hoa chữ cái -->

<!-- <template>
	<div class="index">
		<div>
			{{ reverseContent }}
		</div> 
	</div>

</template>

<script>
export default{
	data(){
		return {
			content: 'đây là text'
		}
	},
	computed: {
		reverseContent(){
			return this.content.split('').reverse().join('')
		}
	}

};
</script>

<style lang="scss" scoped>
.index {
	color: red;
}
</style> --> <!-- Ví dụ sử dụng computed -->

<!-- <template>
	<div class="index">
		<div>
			{{ content }}
		</div>
		<div>
			<button @click="changeContent">Thay đổi nội dung</button>
		</div>
	</div>
</template>

<script>
export default {
	data() {
		return {
			content: 'Nội dung 1'
		}
	},
	methods: {
		changeContent() {
			this.content = 'Nội dung sau khi đổi'
		}
	},
	watch: {
		content(){
			console.log('Nội dung đã thay đổi')
		}
	}
};
</script>

<style lang="scss" scoped>
	.index {
		color: red;
	}
</style> --> <!-- Watch in ra console khi nội dung thay đổi -->

<!-- <template>
	<div class="index">
		<div>
			{{ reverseContent }}
		</div>
		<div>
			<button @click="changeContent">Thay đổi nội dung</button>
		</div>
	</div>
</template>

<script>
export default {
	data() {
		return {
			content: 'Nội dung 1'
		}
	},
	methods: {
		changeContent() {
			this.content = 'Nội dung sau khi đổi'
		}
	},
	computed: {
		reverseContent(){
			return this.content.split('').reverse().join('')
		}
	},
	watch: {
		content(){
			console.log('Nội dung đã thay đổi')
		}
	}
};
</script>

<style lang="scss" scoped>
	.index {
		color: red;
	}
</style> --> <!-- Watch in ra console khi nội dung thay đổi khi sử dụng compoed -->

<!-- <template>
	<div class="index">
		<div>
			{{ content.text }}
			{{ content.type }}
		</div>
		<div>
			<button @click="changeContent">Thay đổi nội dung</button>
		</div>
	</div>
</template>

<script>
export default {
	data() {
		return {
			content: {
				type: 'GG',
				text: 'Như cặc'
			}
		}
	},
	methods: {
		changeContent() {
			this.content.text = 'Nội dung sau khi đổi text'
			this.content.type = 'Nội dung sau khi đổi type'
		}
	},
    watch: {
        content: {
            handler: function () {
                console.log('Đổi r nhìn cc')
            },
            deep: true
        }
    }
};
</script>

<style lang="scss" scoped>
	.index {
		color: red;
	}
</style> --> <!-- Thay đổi riêng text hoặc type, hiển thị thay đổi lên watch -->