<template>
 <div class="user-management">

   <!-- Tạo user -->
   <div class="create-user container">
    <div>Thêm người dùng</div>
    <div class="row">
     <div class="col-md-3">
      <input type="text" v-model="userCreate.name" class="form-control" placeholder="Name...">
      <!-- Thêm name vào Object userCreate bằng v-model -->
    </div>
    <div class="col-md-3">
      <input type="email" v-model="userCreate.email" class="form-control" placeholder="User email...">
      <!-- Thêm email vào Object userCreate bằng v-model -->
    </div>
    <div class="col-md-3">
      <select class="form-control" v-model="userCreate.role">
       <option v-bind:value="role.name"	v-for="role in list_roles">{{role.name}}</option>
       <!-- Dùng v-bind để truyền 1 cách linh hoạt role.name từ list_roles
       Dùng v-for để lấy role từ list_roles
       {{role.name}} để hiển thị ra role trong thẻ option -->
     </select>
   </div>
   <div class="col-md-3">
    <button class="btn btn-primary" @click="createUser">Create</button>
    <!-- click vào button để chạy hàm method createUser -->
  </div>
</div>
</div>

<br>

<!-- Sửa user -->
<div class="edit-user container">
  <div>Sửa người dùng</div>
  <div class="row">
   <div class="col-md-3">
    <input type="text" v-model="userEdit.name" class="form-control">
    <!-- Thêm name vào Object userEdit bằng v-model -->
  </div>
  <div class="col-md-3">
    <input type="email" v-model="userEdit.email" class="form-control">
    <!-- Thêm email vào Object userEdit bằng v-model -->
  </div>
  <div class="col-md-3">
    <select class="form-control" v-model="userEdit.newRole">
     <option v-bind:value="role.name"	v-for="role in list_roles">{{role.name}}</option>
       <!-- Dùng v-bind để truyền 1 cách linh hoạt role.name từ list_roles
       Dùng v-for để lấy role từ list_roles
       {{role.name}} để hiển thị ra role trong thẻ option -->
   </select>
 </div>

 <div class="col-md-3">
  <button class="btn btn-primary" @click="updateUser(userEdit)" style="background-color: orange;">Update</button>
  <!-- click vào button chạy hàm updateUser() truyền Object userEdit vào hàm đó -->
</div>
</div>
</div>
<br>

<!-- List user -->
<div class="list_user table-responsive container">
  <div>Danh sách người dùng</div>
  <table class="table table-hover">
    <thead>
     <tr>
       <td>ID</td>
       <td>Name</td>
       <td>Email</td>
       <td>Role</td>
       <td>Action</td>
     </tr>
   </thead>
   <tbody v-if="list_users.length"> <!-- nếu list_users >0 thì hiển thị tbody -->
    <tr v-for="user in list_users"> <!-- lấy user từ list_users -->
      <td>{{ user.id }}</td>
      <td>{{ user.name }}</td>
      <td>{{ user.email }}</td>
      <td v-for="role in user.roles">{{ role.name }}</td> <!-- lấy role từ list_roles -->
      <td>
       <button class="btn btn-success" @click="editUser(user)">Edit</button>
       <!-- chạy hàm editUser() truyền Object user vào -->
       <button class="btn btn-danger" @click="deleteUser(user)">Delete</button>
       <!-- chạy hàm deleteUser() truyền Object user vào -->
     </td>
   </tr>
 </tbody>
</table>
</div>

</div>
</template>

<script>
export default {
	data() {
    return {
      userCreate: {
        name: '',
        email: '',
        role: ''
     },
     //khởi tạo user ban đầu

      userEdit:{
        id: 0,
        name: '',
        email: '',
        newRole: '',
        oldRole: ''
     },
     //khởi tạo user cần edit ban đầu, newRole là role mới được chọn, oldRole là role cũ

        currentUser: {},
        list_users: [],
        list_roles: []
   }
 },
  created() {
    this.getCurrentUser() //người dùng đang sử dụng
    this.getListUsers() //lấy danh sách người dùng
    this.getListRole() //lấy danh sách role
  }, // in ra màn hình

  methods: {

    getCurrentUser() {
      axios.get('/getCurrentUser')
      .then(response => {
       this.currentUser = response.data
     })
      .catch(error => {
       console.log(error)
     })
    },//người dùng đang sử dụng

    getListRole(){
      axios.get('/roles')
      .then(response=>{
       this.list_roles = response.data
     })
    },//lấy danh sách role

    getListUsers() {
      axios.get('/users')
      .then(response => {
      this.list_users = response.data
    })
     .catch(error => {
      console.log(error)
      })
    },//lấy danh sách người dùng

    createUser() {
      axios.post('/users', {user: this.userCreate})
      .then(response => {
      console.log(response)
      this.userCreate = {} // gọi đến Object userCreate để lấy thông tin từ Object đẩy lên bảng users
      this.getListUsers() // load lại list user sau khi thêm
      })
    .catch(error => {
      console.log(error)
      })
    },//tạo người dùng mới

    editUser(user){
      this.userEdit.id = user.id,
      this.userEdit.name = user.name,
      this.userEdit.email = user.email,
      this.userEdit.newRole = user.roles[0].name,
      this.userEdit.oldRole = user.roles[0].name
    },// sửa user được chọn

    updateUser(userEdit){
      axios.put('/users/' + userEdit.id, {userEdit: this.userEdit})
      .then(response => {
       console.log(response.data.result),
       this.getListUsers()// load lại list User
     })//put vào bảng users, lấy id cửa id đang Edit và thông tin vừa sửa
    },

    deleteUser(user){
      axios.delete('/users/'+user.id, {userDelete: user})
      .then(response=>{
      console.log(response.data.result),
      this.getListUsers()
      })
    },//xóa user

  }
};

</script>

<style lang="scss" scoped>

</style>