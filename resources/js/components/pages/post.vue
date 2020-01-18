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

                            <!--Start Image preview show-->
                            <div class="form-group">
                                <input type="file" @change="onFileChange"/>
                            </div>
                            <div id="preview">
                                <img v-if="url" :src="url"/>
                            </div>
                            <!--End Try Image show-->


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
                url: null,
                selectedFile: '',
            }
        },
        methods: {
            onFileChange(e) {
                const file = e.target.files[0];
                console.log(e);
                console.log(file);
                this.url = URL.createObjectURL(file);
                this.selectedFile = e.target.files[0];
            },
            post() {
                let currentObj = this;

              /*  const fd = new FormData();
                fd.append('image', this.selectedFile, this.selectedFile.name);*/

                axios.post('/post', {
                    title: this.blog.title,
                    subtitle: this.blog.subtitle,
                    description: this.blog.description,
                    category: this.blog.category,
                    image: this.selectedFile,
                    // image: this.url,
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
                // const config = { headers: { 'Content-Type': 'multipart/form-data' } };
            }
        }
    }
</script>

<style scoped>
    body {
        background-color: #e2e2e2;
    }

    #app {
        padding: 20px;
    }

    #preview {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #preview img {
        max-width: 100%;
        max-height: 500px;
    }
</style>
