<template>
    <div class="dashboard">
	    <div class="row justify-content-around">
	        <div class="col-12" style="margin-top: 2rem;">
	          <div class="card">
	            <div class="card-header">
	              	<h3 class="card-title">User List</h3>
	              	<div class="card-tools">
	            		<button style="color: #fff;" class="btn btn-success" @click="create">Add User</button>
	        		</div>
	            </div>
	            <div class="card-body">
	              <table id="example2" class="table table-bordered table-striped table-hover">
	                <thead>
		                <tr align="center">
		                  <th>Sl.</th>
		                  <th>User Name</th>
		                  <th>Email</th>
		                  <th>Role</th>
		                  <th>Created At</th>
		                  <th>Action</th>
		                </tr>
	                </thead>
	                <tbody>                
		                <tr v-for="(user,index) in users" align="center">
		                  <td>{{index+1}}</td>
		                  <td>{{ user.name }}</td>
		                  <td>{{ user.email }}</td>
		                  <td v-if="user.role===0"><button class="btn btn-success btn-sm">Super Admin</button></td>
		                  <td v-else-if="user.role===1"><button class="btn btn-success btn-sm">Admin</button></td>
		                  <td v-else-if="user.role===2"><button class="btn btn-info btn-sm">User</button></td>
		                  <td v-else><button class="btn btn-secondary btn-sm">Not Define</button></td>
		                  <td>{{ user.created_at | myDate}}</td>
		                  <td>
	                  		<button @click="edit_user(user)" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
	                  		<button @click="delete_user(user)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
		                  </td>
		                </tr>
	                </tbody>
		                
	              </table>
	            </div>
	            <!-- /.card-body -->
	          </div>
	          <!-- /.card -->
	        </div>
	        <!-- /.col -->

	    </div>
	    <!-- /.row -->
	     <!-- Modal -->
	<div class="modal fade" id="addModal" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" > User</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form @submit.prevent="editMode ? update_user() : add_user()" @keydown="form.onKeydown($event)">
      		<div class="modal-body">
	        	<div class="form-group">
	        		<label for="name">Category Name</label>
	        		<input type="text" v-model="form.name" id="name" class="form-control" name="name" placeholder="Enter Name" :class="{ 'is-invalid': form.errors.has('name') }">
	        		<has-error :form="form" field="name"></has-error>
	        	</div>
	        	<div class="form-group">
	        		<label for="email">Email</label>
	        		<input type="email" v-model="form.email" id="email" class="form-control" name="email" placeholder="Enter E-mmail Address" :class="{ 'is-invalid': form.errors.has('email') }">
	        		<has-error :form="form" field="email"></has-error>
	        	</div>
	        	<div class="form-group" id="password">
	        		<label for="password">Password</label>
	        		<input type="password" v-model="form.password" class="form-control" name="password" placeholder="Enter password" :class="{ 'is-invalid': form.errors.has('password') }">
	        		<has-error :form="form" field="password"></has-error>
	        	</div>
	        	<div class="form-group">
	        		<label for="role">Role</label>
	        		<select class="form-control" v-model="form.role" name="role" :class="{ 'is-invalid': form.errors.has('role') }" required="">
	        			<option value="">Select Role</option>
	        			<option value="1">Admin</option>
	        			<option value="2">User</option>
	        		</select>
	        		
	        	</div>
	      	</div>
	      	<div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" :disabled="form.busy" class="btn btn-primary">Save changes</button>
	      	</div>
	      </form>
	      
	    </div>
	  </div>
	</div>
    </div>
   
</template>

<script>
    export default {
        mounted() {
        	this.$Progress.start()
        	editMode:false,
            this.getUserData();
        },
        data(){
        	return{
        		users:[],
        		form: new Form({
        			'id': '',
        			'name':'',
        			'email':'',
        			'password':'',
        			'role':'1',
        		}) 
        	}
        },

        methods:{
        	getUserData(){
        		axios.get('api/user')
        		.then((response)=>{
        			this.users = response.data.data
        			this.$Progress.finish()
        		})
        		.catch((response)=>{
        			console.log('error')
        		})
        	},
        	create(){
        		editMode:false,
	            this.form.reset()
            	this.form.clear()
	            $('#addModal').modal('show')
	        },
        	add_user(){
        		this.$Progress.start()
        		this.form.busy = true
        		this.form.post('api/user')
        		.then((response)=>{
        			this.getUserData();
        			this.$Progress.start()
        			$('#addModal').modal('hide')
        			this.$snotify.success("User Successfully Saved", "Success");
        		})
        		.catch((response)=>{
        			this.$Progress.fail()
        		})
        	},
        	edit_user(user){
        		this.editMode = true;
        		$('#password').hide()
	            this.form.reset()
	            this.form.clear()
	            this.form.fill(user)
	            $("#addModal").modal("show");
        	},

        	update_user(){
        		this.$Progress.start()
        		this.form.busy = true;
        		this.form.put('api/user/'+this.form.id)
        		.then((response) =>{
        			this.getUserData();
        			this.$Progress.finish()
        			$('#addModal').modal('hide')
        			this.$snotify.success("User Successfully Updated", "Success");
        		})
        		.catch((response)=>{
        			this.$snotify.error("User Not Updated, Plz try Again", "error");
        			this.$Progress.fail()
        		})
        	},

        	delete_user(user)
	          {
	            this.$snotify.clear()
	            this.$snotify.confirm('You will not be able to Delete This Data','Are You Sure?',{
	            
	              showProgressBar: false,
	              closeOnClick: false,
	              pauseOnHover: true,
	              buttons:
	              [
	                {
	                  text: "Yes",
	                  action: toast => {
	                    this.$snotify.remove(toast.id);
	                    axios.delete("api/user/"+user.id)
	                    .then(response => {
	                      this.$snotify.success("User Successfully Deleted", "Success");
	                      this.getUserData();
	                    })
	                    .catch(e => {
	                      console.log(e);
	                    });
	                  },
	                  bold: true
	                },
	                {
	                  text: "No",
	                  action: toast => {
	                    this.$snotify.remove(toast.id);
	                  },
	                  bold: true
	                }
	              ]
	            });
	          }
        },

    }
</script>
	