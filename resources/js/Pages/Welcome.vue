<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    keywords: Object,
    users: Object,
    searchHistory: Object,
});



const form = useForm({
   /* keyword_list: [],
    user_names: [],
    time_range:[],
    from_date:'',
    to_date:''*/

});
</script>
<script>
export default {
    data() {
        return {
            // status: route().params.status,
            // pageNumber: route().params.page,
            // price:route().params.price,
            keyword_list: [],
            user_names: [],
            time_range:[],
            from_date:'',
            to_date:'',


        }
    },

    methods: {
        data_filter() {
         this.$inertia.visit('/home',
              {
                  method: 'get',
                  replace: false,
                  data: {
                      words: this.keyword_list ,
                      user_names: this.user_names ,
                      time_ranges: this.time_range ,
                      from_date: this.from_date,
                      to_date: this.to_date
                  },
              }
          )


            /*  axios.get('/home?words='+this.keyword_list).then((res)=>{
                     console.log(res);
                 }).catch((error)=>{
                     console.log(error);
                 });*/

        },
        /*  getLastWeek() {
            var today = new Date();
            //new Date(today.getFullYear()+"-"+today.getMonth()+"-"+today.getDate() - 7)
              let year =  today.getFullYear();
              let day =  today.getDay().toLocaleString();
              let month =  today.getMonth().toLocaleString();
              this.lastWeek  = year+"-"+month+"-"+day ;
        }*/

    },
    mounted(){
          /*this.getLastWeek();*/
    }
}
</script>

<template>
    <Head title="Welcome" />
       <div class="  shadow  py-2">
           <div class="container  ">
           <div class="row  ">
               <div class="text-end  ">
                   <div v-if="canLogin" >
                       <Link v-if="$page.props.auth.user" :href="route('dashboard')" class=" btn btn-dark">Dashboard</Link>
                       <template v-else>
                           <Link :href="route('login')" class="btn btn-dark py-2 me-2">Log in</Link>
                           <Link v-if="canRegister" :href="route('register')" class="btn btn-dark py-2 ">Register</Link>
                       </template>
                   </div>
               </div>
             </div>
           </div>
       </div>
        <div class="container-xl  mt-5">
            <div class="row">
               <div class="col-xl-12">
                   <div class="row border py-2">
                       <div class="col-xl-4">
                           <div class="bg-white mb-3 border py-3 px-3 fw-bolder rounded-4 ">
                               <h4 class="font-monospace border-bottom pb-2    ">
                                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="height: 30px">
                                       <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                                   </svg>
                                   Date to  date filter </h4>
                               <div class="form-check py-2" >
                                   <label class="form-check-label"  >
                                       From  date
                                   </label>
                                   <input class="form-control" type="date" v-model="from_date">
                               </div>
                               <div class="form-check py-2" >
                                   <label class="form-check-label"  >
                                       To  date
                                   </label>
                                   <input class="form-control" type="date"  v-model="to_date">
                               </div>

                           </div>
                       </div>
                       <div class="col-xl-3">
                           <div class="bg-white border py-3 px-3 fw-bolder rounded-4 ">
                               <h4 class="font-monospace border-bottom pb-2    ">
                                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="height: 30px">
                                       <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                                   </svg>
                                   Time Range </h4>
                               <div class="form-check">
                                   <input class="form-check-input" v-model="time_range"   type="checkbox"  value="year" id="year">
                                   <label class="form-check-label" for="year">
                                       See the data from last year
                                   </label>
                               </div>
                               <hr>
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox"  v-model="time_range"     value="week" id="week">
                                   <label class="form-check-label" for="week">
                                       See the data from last week
                                   </label>
                               </div>
                               <hr>
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox"  v-model="time_range"     value="month" id="month">
                                   <label class="form-check-label" for="month">
                                       See the data from last month
                                   </label>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-2">
                           <div class="bg-white mb-3 border py-3 px-3 fw-bolder rounded-4 ">
                               <h4 class="font-monospace border-bottom pb-2    ">
                                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="height: 30px">
                                       <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                                   </svg>
                                   Keywords </h4>
                               <div class="form-check border-bottom py-1" v-for="item in keywords" :key="item.id">
                                   <input class="form-check-input" type="checkbox"  v-model="keyword_list" :value="item.name"  :id="`key`+item.id">
                                   <label class="form-check-label" :for="`key`+item.id">
                                       {{ item.name }} {{ item.found_times }} times
                                   </label>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-2">
                           <div class="bg-white mb-3 border py-3 px-3 fw-bolder rounded-4 ">
                               <h4 class="font-monospace border-bottom pb-2    ">
                                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="height: 30px">
                                       <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                                   </svg>
                                   Users </h4>
                               <div class="form-check py-2" v-for="user in users" :key="user.id">
                                   <input class="form-check-input" type="checkbox" v-model="user_names"  :value="user.name" :id="`user`+user.id">
                                   <label class="form-check-label" :for="`user`+user.id">
                                       {{user.name}}
                                   </label>
                               </div>

                           </div>
                       </div>
                       <div class="col-md-1">
                           <button type="button" @click="data_filter()" class="btn btn-info ">Filter</button>
                       </div>
                   </div>
               </div>
                <div class="col-xl-12">
                    <table class="table table-bordered rounded">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">search text</th>
                            <th scope="col">created</th>
                            <th scope="col">updated</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="searchH in searchHistory" :key="searchH.id">
                            <th scope="row">{{ searchH.id }}</th>
                            <td>{{ searchH.search_text }}</td>
                            <td>{{ searchH.created_at }}</td>
                            <td>{{ searchH.updated_at }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
 </template>
