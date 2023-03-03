<template>
    <div class="container" id="">
        
       
                <h3 class="text-center text-dark font-weight-bold bg-light">Product Page </h3>
       

            <div class="clear"></div>
      


       
         <div class="clear"></div>
    

  
            


            <div class="content_bottom">
                <div class="heading">
                     <h5 class="my-5 bg-light text-center text-dark">New Produts</h5>
                </div>
                <div class="clear"></div>
            </div>

             
         <div class="row mt-5">

             
                <div v-for="( cats, index ) in allpro" class="col-sm-3 my-5">
                    <a href="preview-3.html"> <img style="width:150; height:130px" :src="cats.image_name"   alt="" /> </a>

                    <h2>{{cats.pro_name}} </h2>
                    <p class="mt-3">{{cats.description}}</p>
                    <p><span class="bg-dark px-4 mt-3 py-2 text-light font-weight-bold rounded ">${{cats.price}}</span></p>
                    <div class="mt-3"><span>
                    <router-link :to="`/details/${cats.id}`" class="btn btn-success py-1 w-100">Details</router-link>
                    </span></div>
                </div>
                
               
            </div>
           </div>
               </div>
   
</template>

<script>
   
export default {
    
    data: () => ({
    category:{},
    catIds:[],
    emptyCat:false
    }),
    methods:{
     getCats:function(){
     let t = this; 
    const response = axios.get('http://localhost/laravel_projects/Vue_eCommerce/public/admin/manage-product').then(function(response){
    console.log(response.data);
    t.allcategory=response.data.data;
   
    });
    
  },
  
  
  removePro(id){

  Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
  axios.get('http://localhost/laravel_projects/Vue_eCommerce/public/delpro/'+id).then( (data) =>{
  console.log(data)
   toastr.success(data.data.message)
              }).catch( (error) =>{})
   this.$store.dispatch("fetchpro")
  }
})

 

  }
  },
  

     mounted() { 
    // this.getCats(),
     return this.$store.dispatch("fetchpro")
      },

     computed:{ 
      allpro(){  return this.$store.getters.getpro }
     }

     

    }
</script>
