<template>
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-8 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <!--<img src="images/logo.svg">-->
                            <h2 class="text-center text-primary">Post Upload</h2>
                        </div>
                        <h4>let's get started - Upload your Post</h4>
                        <h4 v-if="!submitted" class="text-danger text-center"> {{output}}</h4>
                        <!--<form @submit="sendPost" action="https://vuejs.org/" method="post" class="pt-3">-->

                        <form v-if="submitted" action="">
                            <div class="form-group">
                                <input type="text" v-model="title" class="form-control form-control-lg"
                                       placeholder="Title">
                            </div>
                            <div class="form-group">
                                <input type="text" v-model="subtitle" class="form-control form-control-lg"
                                       placeholder="Subtitle">
                            </div>
                            <div class="form-group mb-2">
                                <span>Description</span><br>
                                <textarea class="form-control" placeholder="Description(Tell your story…)"
                                          v-model="description" required></textarea>
                            </div>
                            <div class="mt-3">
                                <a class="btn btn-block font-weight-medium auth-form-btn">
                                    <button @click.prevent="post()" class="btn btn-lg btn-gradient-success">Add Post</button>
                                </a>
                            </div>
                        </form>

                        <div v-if="!submitted" class="text-center">
                            <button @click="showPage()" class="btn btn-primary">Add new Post</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<!--<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>-->
<script>
    export default {
        name: "post",
        components: {},
        data() {
            return {
                title: '',
                subtitle: '',
                description: '',
                /*output: '',*/
                output: 'your post submitted successfully',
                submitted: true,
            }
        },
        methods: {
            /*post() {
                this.$http.post('https://jsonplaceholder.typicode.com/posts', {
                    title: this.title,
                    body: this.description,
                    /!*subtitle: this.subtitle,*!/
                    userId: 1,
                }).then(function (data) {
                    console.log(data);
                    this.submitted = true;
                });
            },*/
            post: function () {
                let currentObj = this;
                axios.post('/post', {
                    title: this.title,
                    subtitle: this.subtitle,
                    description: this.description,
                }).then(function (response) {
                    console.log(response.data);
                    currentObj.submitted = false;
                }).catch(function (error) {
                    console.log(error);
                    currentObj.submitted = true;
                });
            },
            showPage() {
                this.submitted = true;
                this.title = '';
                this.subtitle = '';
                this.description = '';
            }
        }
    }
</script>

<style scoped>

</style>
