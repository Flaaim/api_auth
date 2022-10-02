<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Timeline</div>

                    <div class="card-body" >
                        <post-tweet :tweets="tweets"></post-tweet>
                        <div class="d-flex p-2" v-for="tweet in tweets">
                        <div class="flex-shrink-0">
                            <img src="https://eu.ui-avatars.com/api/?size=64" class="img-responsive" alt="avatar">
                        </div>
                            <div class="flex-grow-1 ms-3">
                                    {{tweet.user.name}}
                                <p>
                                    {{tweet.body}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import PostTweet from './PostTweet.vue'
    export default {
        data(){
            return {
                tweets: []
            }
        },
        components: [
            PostTweet
        ],
        mounted() {
            axios
            .get('/tweets')
            .then(response => (this.tweets = response.data))
        }
    }
</script>
