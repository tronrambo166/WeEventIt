import home from '../components/site/home.vue'
import products from '../components/site/products.vue'
import cart from '../components/site/cart.vue'
import contact from '../components/site/contact.vue'
import details from '../components/site/details.vue'

//ADMIN COMPONENTS
import addcat from '../components/admin/category/addcat.vue'
import mancat from '../components/admin/category/mancat.vue'
import editcat from '../components/admin/category/editcat.vue'

import addpro from '../components/admin/products/addpro.vue'
import manpro from '../components/admin/products/manpro.vue'
import editpro from '../components/admin/products/editpro.vue'

//Frontend 
export const routes=[
{ path:'/', component: home},
{ path:'/home', component: home},
{ path:'/products', component: products},
{ path:'/cart', component: cart},
{ path:'/contacts', component: contact},
{ path:'/details/:id', component: details},

//ADMIN ROUTES
{path:'/add-category', component: addcat},
{ path:'/manage-category', component: mancat},
{ path:'/edit-category/:id', component: editcat},

{path:'/add-product', component: addpro},
{ path:'/manage-product', component: manpro},
{ path:'/edit-product/:id', component: editpro},



];


