<template>
    <div class="users row">
        <div class="loading" v-if="loading">
            Loading...
        </div>

        <div v-if="error" class="error">
            {{ error }}
        </div>

        <ul v-if="tests">
            <li v-for="test in tests">
                <div class="col-sm-6 col-md-3">
                   <test v-bind:test="test"></test>
                </div>
            </li>
        </ul>
    </div>
</template>
<script>
    import axios from 'axios';
    import Test from '../components/Test';

    export default {
        data() {
            return {
                loading: false,
                tests: [],
                error: null,
            };
        },
        created() {
            this.fetchData();
        },
        components:{
            Test
        },
        methods: {
            fetchData() {
                this.error = null;
                this.loading = true;
                axios.get('/api/records')
                    .then(response => {
                        this.loading = false;
                        this.tests = response.data;
                    })
                    .catch(error => {
                        this.loading = false;
                        this.error = error.response.data.message || error.message;
                    });
            }
        }
    }
</script>