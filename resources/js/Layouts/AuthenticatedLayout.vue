<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/inertia-vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
 <div class="container">
     <div class="row">
         <div class="col-md-12">
             <nav class="navbar navbar-expand-lg navbar-light bg-light">

                     <a class="navbar-brand" href="#">
                        QTec
                     </a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
                             <li class="nav-item">
                                 <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                     Home
                                 </NavLink>
                             </li>

                             <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                     {{ $page.props.auth.user.name }}
                                 </a>
                                 <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                     <li>
                                          <DropdownLink :href="route('logout')" method="post" as="button">
                                             Log Out
                                         </DropdownLink>
                                     </li>
                                 </ul>
                             </li>
                         </ul>

                     </div>

             </nav>
         </div>
     </div>
 </div>
    <div class="container">
        <div class="row">
            <!-- Page Heading -->
            <header class="bg-white p-1 rounded shadow" v-if="$slots.header">
                <div class="card-header p-2">
                    <slot name="header" />
                </div>
            </header>
        </div>
        <div class="row">
          <div class="col-md-12 mt-2 mx-auto">
              <!-- Page Content -->
              <main>
                  <slot />
              </main>
          </div>
        </div>
    </div>
</template>
