<template>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <router-link to="/" class="nav-link">
                    <div class="nav-profile-image">
                        <img src="images/faces/face1.jpg" alt="profile">
                        <span class="login-status online"></span>
                        <!--change to offline or busy as needed-->
                    </div>
                    <div class="nav-profile-text d-flex flex-column">
                        <span class="font-weight-bold mb-2">David Grey. H</span>
                        <span class="text-secondary text-small">Project Manager</span>
                    </div>
                    <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                </router-link>
            </li>
            <li class="nav-item">
                <router-link to="/" class="nav-link">
                    <span class="menu-title">Dashboard</span>
                    <i class="mdi mdi-home menu-icon"></i>
                </router-link>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                   aria-controls="ui-basic">
                    <span class="menu-title">Basic UI Elements</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <router-link to="/button" class="nav-link">Buttons</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/typography" class="nav-link">Typography</router-link>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <router-link to="/icons" class="nav-link">
                    <span class="menu-title">Icons</span>
                    <i class="mdi mdi-contacts menu-icon"></i>
                </router-link>
            </li>
            <li class="nav-item">
                <router-link to="/formsElements" class="nav-link">
                    <span class="menu-title">Forms</span>
                    <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                </router-link>
            </li>
            <li class="nav-item">
                <router-link to="/charts" class="nav-link">
                    <span class="menu-title">Charts</span>
                    <i class="mdi mdi-chart-bar menu-icon"></i>
                </router-link>
            </li>
            <li class="nav-item">

                <router-link to="/table" class="nav-link">
                    <span class="menu-title">Tables</span>
                    <i class="mdi mdi-table-large menu-icon"></i>
                </router-link>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false"
                   aria-controls="general-pages">
                    <span class="menu-title">Sample Pages</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-medical-bag menu-icon"></i>
                </a>
                <div class="collapse" id="general-pages">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <router-link to="/blankpage" class="nav-link"> Blank Page</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/login" class="nav-link"> Login</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/register" class="nav-link"> Register</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/error404" class="nav-link"> 404</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/error500" class="nav-link"> 500</router-link>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <div class="border-bottom">
                  <h6 class="font-weight-normal mb-3">Projects</h6>
                </div>
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
                <div class="mt-4">
                  <div class="border-bottom">
                    <p class="text-secondary">Categories</p>
                  </div>
                  <ul class="gradient-bullet-list mt-4">
                    <li>vish</li>
                    <li>Pro</li>
                  </ul>
                </div>
              </span>
            </li>
        </ul>
    </nav>
</template>

<script>
    export default {
        name: "sidebar"
    }
</script>

<style scoped>

</style>