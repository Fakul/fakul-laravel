<template>
    <div class="users">
        <div class="loading" v-if="loading">
            Loading...
        </div>

        <div v-if="error" class="error">
            {{ error }}
        </div>

        <ul v-if="tests">
            <li v-for="{ variant, date_of_taking } in tests">
                <strong>Name:</strong> {{ variant }},
                <strong>Email:</strong> {{ date_of_taking }}
            </li>
        </ul>
    </div>
</template>
<script>
    import axios from 'axios';
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
        methods: {
            fetchData() {
                this.error = this.users = null;
                this.loading = true;
                axios
                    .get('/api/records')
                    .then(response => {
                        this.loading = false;
                        this.tests = response.data;
                        console.log(this.tests);
                    })
                    .catch(error => {
                        this.loading = false;
                        //this.error = error.response.data.message || error.message;
                    });
            }
        }
    }
</script>