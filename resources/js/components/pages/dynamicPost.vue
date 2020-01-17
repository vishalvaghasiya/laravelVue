<template>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Basic Tables </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Bordered table</h4>
                            <p class="card-description"> Add class <code>.table-bordered</code>
                            </p>
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th> #</th>
                                    <th> user name</th>
                                    <th> title</th>
                                    <th> body</th>
                                    <th> category</th>
                                    <th> created</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-if="posts.length <= 0" class="text-center ml-5">
                                    <td colspan="6" style="height:200px;">
                                        <img src="images/loading.gif" alt="gif loading"
                                             style="width:200px;height:200px">
                                    </td>
                                </tr>
                                <tr v-for="(post , index) in posts">
                                    <td>{{index+1}}</td>
                                    <td>{{post.title}}</td>
                                    <td>{{post.user['name']}}</td>
                                    <td>{{post.body}}</td>
                                    <td>{{post.category}}</td>
                                    <td>{{post.created}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "dynamicPost",
        data() {
            return {
                posts: [],
            }
        },
        mounted() {
            console.log('working m');
            this.getPost();
        },
        methods: {
            getPost() {
                axios.get('/postApi')
                    .then(response => {
                        //.then(function (response) {
                        //console.log(response.data.data);
                        this.posts = response.data.data.slice(0, 10);
                    })
                    .catch(error => {
                        console.log(error);
                    });
            }
        }
    }
</script>
<style scoped>
    .table tr:hover {
        background: rgba(32, 255, 223, 0.35);
    }
</style>
