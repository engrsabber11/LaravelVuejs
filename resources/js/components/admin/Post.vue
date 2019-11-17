<template>
    <div class="dashboard">
	    <div class="row justify-content-around">
	        <div class="col-12" style="margin-top: 2rem;">
	          <div class="card">
	            <div class="card-header">
	              	<h3 class="card-title">Post List</h3>
	              	<div class="card-tools">
	            		<button style="color: #fff;" class="btn btn-success" @click="create">Add Post</button>
	        		</div>
	            </div>
	            <div class="card-body">
	            	<div class="mb-3">
		              <div class="row">
		                <div class="col-md-2">
		                  <strong>Search By:</strong>
		                </div>
		                <div class="col-md-7">
		                  <input v-model="query" type="text" class="form-control" placeholder="Serach" />
		                </div>
		              </div>
		            </div>
	              <table id="example2" class="table table-striped table-bordered table-hover">
	                <thead>
		                <tr align="center">
		                  <th>Sl.</th>
		                  <th>Post Name</th>
		                  <th>Created By</th>
		                  <th>Action</th>
		                </tr>
	                </thead>
	                <tbody>                
		                <tr v-for="(category , index) in categories" align="center">
		                  <td>{{ index+1 }}</td>
		                  <td>{{ category.name}}</td>
		                  <td><button class="btn btn-info btn-sm">{{ category.user.name}}</button></td>
		                  <td>
	                  		<a href="" class="btn btn-primary btn-sm">Edit</a>
	                  		<a href="" class="btn btn-danger btn-sm">Delete</a>
		                  </td>
		                </tr>
	                </tbody>
	              </table>
	            </div>
	            <div><pagination v-if="pagination.last_page > 1" :pagination="pagination" :offset="5"  @paginate="query === '' ? getCategoryData() : searchData()"></pagination></div>
	              
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
	        <h5 class="modal-title" >Add Category</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form @submit.prevent="add_category()" @keydown="form.onKeydown($event)">
      		<div class="modal-body">
	        	<div class="form-group">
	        		<label for="name">Post Title</label>
	        		<input type="text" v-model="form.title" id="title" class="form-control" name="title" placeholder="Enter Post Title" :class="{ 'is-invalid': form.errors.has('title') }" required="">
	        		<has-error :form="form" field="title"></has-error>
	        	</div>
	        	<div class="form-group">
	        		<label for="name">Post Description</label>
	        		<textarea v-model="form.description" id="description" class="form-control" name="description" placeholder="Enter Post Description" :class="{ 'is-invalid': form.errors.has('description') }" required=""></textarea>
	        		<has-error :form="form" field="description"></has-error>
	        	</div>
	        	<div class="form-group">
	        		<label for="name">Post Image</label>
	        		<input type="file" v-on:change="form.image" id="image" class="form-control" name="image" :class="{ 'is-invalid': form.errors.has('image') }" required="">
	        		<has-error :form="form" field="image"></has-error>
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
    	watch: {
          	query: function(newQ, old){
          		console.log(newQ);
	          if(newQ === ''){
	            this.getCategoryData()
	          }else{
	            this.searchData()
	          }
	        }
        },
        mounted() {
            console.log('Component mounted.')
            this.getCategoryData();
        },
        data(){
        	return{
        		categories:[],
        		query : '',
        		form: new Form({
        			'id':'',
        			'title':'',
        			'description':'',
        			'image':'',
        		}),
        		pagination:{
	            	current_page: 1,
	            },
        	}
        },

        methods:{
        	getCategoryData(){
        		// axios.get('api/category')
        		axios.get('api/category?page='+this.pagination.current_page)
        		.then((response)=>{
        			this.categories = response.data.data
        			this.pagination = response.data
        		})
        		.catch((response)=>{
        			console.log(response.data)
        		})
        	},
        	searchData(){
	            this.$Progress.start()
	            axios.get('api/search/category/'+this.query+'?page='+this.pagination.current_page)
	              .then((response) => {
	              	console.log(response.data);
	                this.categories = response.data.data
	                this.pagination = response.data
	                this.$Progress.finish()
	              })
	              .catch(e => {
	                console.log(e)
	                this.$Progress.fail()
	              })
	          },
        	create(){
	            this.form.reset()
            	this.form.clear()
	            $('#addModal').modal('show')
	        },
        	add_category(){
        		this.form.busy = true
        		this.form.post('add-category')
        		.then((response)=>{
        			$('#addModal').modal('hide')
        			this.getCategoryData();
        			this.$snotify.success("Category Successfully Saved", "Success");
        		})
        		.catch((response)=>{
        			
        		})
        	}
        },
    }
</script>
