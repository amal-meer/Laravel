<template>
    <div>
       <button style="margin:15px; margin-left:0px"
               type="submit"
               class="btn btn-primary"
               v-text="text"
       ></button>
    </div>
</template>

<script>
    export default {
        name: "card",

        props: [
            'text'
        ]
    }

</script>

<style scoped>

</style>