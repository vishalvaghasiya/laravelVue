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
                            <!--<table class="table table-bordered">
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
                                <tbody v-if="loading">
                                <tr>
                                    <td> 1</td>
                                    <td> Herman Beck</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td> $ 77.99</td>
                                    <td> $ 77.99</td>
                                    <td> May 15, 2015</td>
                                </tr>
                                <tbody v-else>
                                <tr v-for="post in posts" :key="post.id">
                                    <td> #</td>
                                    <td> {{post.title}}</td>
                                    <td>
                                        &lt;!&ndash;<div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>&ndash;&gt;

                                        {{post.body}}
                                    </td>
                                    <td> {{post.category}}</td>
                                    <td>{{post.created}}</td>
                                    <td> {{post.title}}</td>
                                </tr>
                                </tbody>
                            </table>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "dynamic-post",
        data() {
            return {
                'posts': [],
            }
        },
        mounted() {
            console.log('working m');
            this.getPost();
        },
        methods: {
            getPost(){
                axios.get('/postApi')
                    .then(function (response) {
                        console.log(response.data.data);
                    })
                    .catch(function (error) {
                        console.log(error);
                    })
                    .finally(function () {
                    });
            }
        }
    }
</script>
<style scoped>

</style>
