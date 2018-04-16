<template>
    <div class="card" v-if="test">
        <div class="card-header">
            <p> {{test.variant}} </p>
        </div>
        <div class="card-content">
            <p class="test-year"> {{test.date_of_taking}} </p>
            <p class="test-course"> {{test.course}} </p>
            <p class="test-chair">{{test.chair}} </p>
        </div>
        <div class="card-footer">

        </div>
    </div>
</template>

<script>
    export default {
        data: function(){
            return {

            }
        },
        props:['test'],
        mounted() {
            console.log('Component mounted.');
            console.log(this.test);
        }
    }
</script>