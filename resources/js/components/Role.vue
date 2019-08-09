<template>
 <div class="user-management">

   <!-- Tạo user -->
   <div class="create-user container">
    <div>Thêm quyền</div>
    <div class="row">
     <div class="col-md-3">
      <input type="text" v-model="roleCreate.name" class="form-control" placeholder="Role name...">
      <!-- Thêm name vào Object userCreate bằng v-model -->
    </div>
    <div class="col-md-3">
      <input type="text" v-model="roleCreate.description" class="form-control" placeholder="Description...">
      <!-- Thêm email vào Object userCreate bằng v-model -->
    </div>
   <div class="col-md-3">
    <button class="btn btn-primary" @click="createRole()">Create</button>
    <!-- click vào button để chạy hàm method createUser -->
  </div>
</div>
</div>

<br>

<!-- Sửa user -->
<div class="edit-user container">
  <div>Sửa quyền</div>
  <div class="row">
   <div class="col-md-3">
    <input type="text" v-model="roleEdit.name" class="form-control">
    <!-- Thêm name vào Object userEdit bằng v-model -->
  </div>
  <div class="col-md-3">
    <input type="text" v-model="roleEdit.description" class="form-control">
    <!-- Thêm email vào Object userEdit bằng v-model -->
  </div>

 <div class="col-md-3">
  <button class="btn btn-primary" @click="updateRole(roleEdit)" style="background-color: orange;">Update</button>
  <!-- click vào button chạy hàm updateUser() truyền Object userEdit vào hàm đó -->
</div>
</div>
</div>
<br>

<!-- List user -->
<div class="list_user table-responsive container">
  <div>Danh sách quyền</div>
  <table class="table table-hover">
    <thead>
     <tr>
       <td>ID</td>
       <td>Name</td>
       <td>Description</td>
       <td>Action</td>
     </tr>
   </thead>
   <tbody v-if="list_roles.length"> <!-- nếu list_users >0 thì hiển thị tbody -->
    <tr v-for="role in list_roles"> <!-- lấy user từ list_users -->
      <td>{{ role.id }}</td>
      <td>{{ role.name }}</td>
      <td>{{ role.description }}</td>
      <td>
       <button class="btn btn-success" @click="editRole(role)">Edit</button>
       <!-- chạy hàm editUser() truyền Object user vào -->
       <button class="btn btn-danger" @click="deleteRole(role)">Delete</button>
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
      roleCreate: {
        name: '',
        description: '',
     },
     //khởi tạo user ban đầu

      roleEdit:{
        id: 0,
        name: '',
        description: '',
     },
     //khởi tạo user cần edit ban đầu, newRole là role mới được chọn, oldRole là role cũ
        list_roles: []
   }
 },
  created() {
    this.getListRole() //lấy danh sách role
  }, // in ra màn hình

  methods: {

    getListRole(){
      axios.get('/roles')
      .then(response=>{
       this.list_roles = response.data
     })
    },//lấy danh sách role

    createRole(){
          axios.post('/roles',{name: this.roleCreate.name, description: this.roleCreate.description})
          .then(response=>{
            console.log(response.data.result)
            this.getListRole()
          })
          .catch(error => {
            console.log(error)
      })
        },//tạo người dùng mới

    editRole(role){
      this.roleEdit.id = role.id,
      this.roleEdit.name = role.name,
      this.roleEdit.description = role.description
    },// sửa user được chọn

    updateRole(roleEdit){
          axios.put('/roles/' + roleEdit.id, {name: roleEdit.name, description: roleEdit.description})
          .then(response => {
                    console.log(response.data.result),
                    this.getListRole()
                })
        },

    deleteRole(role){
      axios.delete('/roles/'+ role.id, {roleDelete: role})
      .then(response=>{
      console.log(response.data.result),
      this.getListRole()
      })
    },//xóa user

  }
};

</script>

<style lang="scss" scoped>

</style>