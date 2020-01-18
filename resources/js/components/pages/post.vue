<template>
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-8 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <h2 class="text-center text-primary">Post Upload</h2>
                        </div>
                        <h4>let's get started - Upload your Post</h4>
                        <h4 v-if="!submitted" class="text-danger text-center"> {{output}}</h4>
                        <form v-if="submitted" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" v-model="blog.title" class="form-control form-control-lg"
                                       placeholder="Title">
                            </div>
                            <div class="form-group">
                                <input type="text" v-model="blog.subtitle" class="form-control form-control-lg"
                                       placeholder="Subtitle">
                            </div>
                            <div class="form-group mb-2">
                                <span>Description</span><br>
                                <textarea class="form-control" placeholder="Description(Tell your story…)"
                                          v-model="blog.description" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" v-model="blog.category" class="form-control form-control-lg"
                                       placeholder="Category">
                            </div>
                            <div class="mt-3">
                                <a class="btn btn-block font-weight-medium auth-form-btn">
                                    <button @click.prevent="post()" class="btn btn-lg btn-gradient-success">Add Post
                                    </button>
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
        data() {
            return {
                blog: {
                    title: '',
                    subtitle: '',
                    description: '',
                    category: ''
                },
                output: '',
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
                // const config = { headers: { 'Content-Type': 'multipart/form-data' } };
                axios.post('/post', {
                    title: this.blog.title,
                    subtitle: this.blog.subtitle,
                    description: this.blog.description,
                    category: this.blog.category,
                }).then(function (response) {
                    console.log(response);
                    currentObj.output = response.data;
                    currentObj.submitted = false;
                }).catch(function (error) {
                    console.log(error);
                    currentObj.submitted = true;
                });
            },
            showPage() {
                this.submitted = true;
                this.blog = ''
                // without blog object use instance
                /*this.title = '';
                this.subtitle = '';
                this.description = '';*/
            }
        }
    }
</script>

<style scoped>

</style>
